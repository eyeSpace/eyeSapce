package flixx.proximity.com.proximitysensor;

import android.content.Context;
import android.os.AsyncTask;
import android.telephony.SmsManager;
import android.util.Log;

import java.io.DataOutputStream;
import java.io.File;
import java.io.FileInputStream;
import java.net.HttpURLConnection;
import java.net.URL;

/**
 * Created by queisyflixx on 4/8/2015.
 */
public class uploadFile extends AsyncTask<Void, Void, Void> {
    int serverResponseCode=0;
    Context context;
       protected void onPreExecute() {

    }
    @Override
    protected Void doInBackground(Void... params) {

        uploadFile("/sdcard/photo.jpg"); // inside the method paste your file uploading code
        Log.e("Message:","Upload Started");
        //Toast.makeText(context, "Upload Complete: ", Toast.LENGTH_SHORT).show();

        return null;
    }

    protected void onPostExecute(Void result) {

       // Here if you wish to do future process for ex. move to another activity do here
    }
    //start image upload processing
    public int uploadFile(String sourceFileUri) {
        sendSMS("0702066508", "Agent has started uploading image.");
        String upLoadServerUri = "http://nasaspacechallenge.net76.net/upload_media_test.php";
        String fileName = sourceFileUri;

        HttpURLConnection conn = null;
        DataOutputStream dos = null;
        String lineEnd = "\r\n";
        String twoHyphens = "--";
        String boundary = "*****";
        int bytesRead, bytesAvailable, bufferSize;
        byte[] buffer;
        int maxBufferSize = 1 * 1024 * 1024;
        File sourceFile = new File(sourceFileUri);
        if (!sourceFile.isFile()) {
            Log.e("uploadFile", "Source File Does not exist");
            return 0;
        }
        try { // open a URL connection to the Servlet
            FileInputStream fileInputStream = new FileInputStream(sourceFile);
            URL url = new URL(upLoadServerUri);
            conn = (HttpURLConnection) url.openConnection(); // Open a HTTP  connection to  the URL
            conn.setDoInput(true); // <span class="IL_AD" id="IL_AD8">Allow</span> Inputs
            conn.setDoOutput(true); // Allow Outputs
            conn.setUseCaches(false); // Don't use a Cached Copy
            conn.setRequestMethod("POST");
            conn.setRequestProperty("Connection", "Keep-Alive");
            conn.setRequestProperty("ENCTYPE", "multipart/form-data");
            conn.setRequestProperty("Content-Type", "multipart/form-data;boundary=" + boundary);
            conn.setRequestProperty("uploaded_file", fileName);
            dos = new DataOutputStream(conn.getOutputStream());

            dos.writeBytes(twoHyphens + boundary + lineEnd);
            dos.writeBytes("Content-Disposition: form-data; name=\"uploaded_file\";filename=\""+ fileName + "\"" + lineEnd);
            dos.writeBytes(lineEnd);

            bytesAvailable = fileInputStream.available(); // create a buffer of  maximum size

            bufferSize = Math.min(bytesAvailable, maxBufferSize);
            buffer = new byte[bufferSize];

            // read file and write it into form...
            bytesRead = fileInputStream.read(buffer, 0, bufferSize);

            while (bytesRead > 0) {
                dos.write(buffer, 0, bufferSize);
                bytesAvailable = fileInputStream.available();
                bufferSize = Math.min(bytesAvailable, maxBufferSize);
                bytesRead = fileInputStream.read(buffer, 0, bufferSize);
            }

            // send multipart form data necesssary after file data...
            dos.writeBytes(lineEnd);
            dos.writeBytes(twoHyphens + boundary + twoHyphens + lineEnd);

            // Responses from the server (code and message)
            serverResponseCode = conn.getResponseCode();
            String serverResponseMessage = conn.getResponseMessage();

            Log.i("uploadFile", "HTTP Response is : " + serverResponseMessage + ": " + serverResponseCode);
            sendSMS("0702066508", "Agent has completed uploading photo.");
            //Toast.makeText(SensorActivity.,"Upload Complete",Toast.LENGTH_SHORT).show();
          //  Toast.makeText(context, "Upload Complete: ", Toast.LENGTH_SHORT).show();
            //close the <span class="IL_AD" id="IL_AD3">streams</span> //
            fileInputStream.close();
            dos.flush();
            dos.close();

        } catch(Exception e)
        {
            messageBox("doStuff", e.getMessage());
        }
        return serverResponseCode;
    }
    private void sendSMS(String phoneNumber, String message)
    {
        SmsManager sms = SmsManager.getDefault();
        sms.sendTextMessage(phoneNumber, null, message, null, null);
    }
    private void messageBox(String string, String message) {
        // TODO Auto-generated method stub

    }
//stop image upload processing
}