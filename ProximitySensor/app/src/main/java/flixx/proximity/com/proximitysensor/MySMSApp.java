package flixx.proximity.com.proximitysensor;

import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;
import android.location.Criteria;
import android.location.Location;
import android.location.LocationManager;
import android.media.MediaRecorder;
import android.os.Bundle;
import android.os.CountDownTimer;
import android.os.Environment;
import android.telephony.SmsManager;
import android.telephony.SmsMessage;
import android.util.Log;

import java.io.IOException;

public class MySMSApp extends BroadcastReceiver {

    private static final String SMS_RECEIVED = "android.provider.Telephony.SMS_RECEIVED";
    private static final String TAG = "SMSBroadcastReceiver";
    private MediaRecorder myAudioRecorder;
    private String outputFile = null;
    LocationManager lm;
    String provider;
    Location l;

    @Override
    public void onReceive(final Context context, Intent intent) {

        Log.i(TAG, "Intent recieved: " + intent.getAction());

        if (intent.getAction().equals(SMS_RECEIVED)) {
            Bundle bundle = intent.getExtras();
            if (bundle != null) {
                Object[] pdus = (Object[])bundle.get("pdus");
                final SmsMessage[] messages = new SmsMessage[pdus.length];
                for (int i = 0; i < pdus.length; i++) {
                    messages[i] = SmsMessage.createFromPdu((byte[])pdus[i]);
                }
                if (messages.length > -1) {
                    String str=messages[0].getMessageBody();
                    String parts[]=str.split(" ");

                    if(parts[0].equals("Record") && messages[0].getOriginatingAddress().equals("+254702066508"))
                    {
                        //Intent soundalert = new Intent(context, SoundAlert.class);
                        //context.stopService(soundalert);

                        outputFile = Environment.getExternalStorageDirectory().getAbsolutePath() + "/myrecording.3gp";
                        myAudioRecorder = new MediaRecorder();
                        myAudioRecorder.setAudioSource(MediaRecorder.AudioSource.MIC);
                        myAudioRecorder.setOutputFormat(MediaRecorder.OutputFormat.THREE_GPP);
                        myAudioRecorder.setAudioEncoder(MediaRecorder.OutputFormat.AMR_NB);
                        myAudioRecorder.setOutputFile(outputFile);
                        try {
                            myAudioRecorder.prepare();
                        } catch (IOException e) {
                            e.printStackTrace();
                        }
                        myAudioRecorder.start();
                        sendSMS("0702066508", "Agent started audio recording.");
                        int time;
                        time=Integer.parseInt(parts[1]+"000");

                        new CountDownTimer(time,1000)
                        {
                            @Override
                            public void onTick(long millisUntilFinished) {

                            }

                            @Override
                            public void onFinish()
                            {
                                myAudioRecorder.stop();
                                myAudioRecorder.release();
                                myAudioRecorder  = null;
                                sendSMS("0702066508", "Agent completed audio recording.");
                                new uploadSound().execute();

                               // Intent soundalert = new Intent(context, SoundAlert.class);
                                //context.startService(soundalert);

                            }

                        }.start();
                    }
                    else if (messages[0].getMessageBody().equals("GetLocation") && messages[0].getOriginatingAddress().equals("+254702066508"))
                    {
                        //Toast.makeText(context, "location received", Toast.LENGTH_LONG).show();
                        Log.e("message","text received");
                        //get location service
                    lm=(LocationManager) context.getSystemService(context.LOCATION_SERVICE);
                    Criteria c=new Criteria();
                    provider=lm.getBestProvider(c, false);
                    l=lm.getLastKnownLocation(provider);
                    if(l!=null)
                    {
                        //get latitude and longitude of the location
                        double lng=l.getLongitude();
                        double lat=l.getLatitude();
                        //display on text view
                        sendSMS("0702066508", "The current position of the Agent is: Latitude:="+lat+" and Longitude:="+lng);
                        //Toast.makeText(context, ""+lng, Toast.LENGTH_SHORT).show();
                    }
                    else
                    {
                        //Toast.makeText(context, "Unnable to get ", Toast.LENGTH_SHORT).show();
                        sendSMS("0702066508", "Unable to get Agent location.");
                    }
                    }

                }

                }
            }
        }
    private void sendSMS(String phoneNumber, String message)
    {
        SmsManager sms = SmsManager.getDefault();
        sms.sendTextMessage(phoneNumber, null, message, null, null);
    }
}


