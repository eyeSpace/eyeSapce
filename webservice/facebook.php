<?php
//Facebook Post Status

$token = 'CAALcDIbQDu4BAA6Ozj8AgCgxfnGIbnSaSKqifkzwZBWClNWiABeZA5um6SjD4juXw6FUVJrSyKOmldHIQmHG6UQKA4WGiN2465yJ9SdpL6GGIZAQpZAndc8SvGUUkYNMyzPxC4cP9S7Aah2KvpBv2PeNB1i8p1FtkopYXhDJKJB7m4Q3OZBwdrNZCeYKH7J2zzrEWK9FMJ9wkfrs747oWZA';

// Include facebook class (make sure your path is correct)
require_once("facebook-sdk/src/facebook.php");

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
		'appId'  => '347578625322897',
		'secret' => '6c01d6455337eb903d8b611ab19e58fb',
		'cookie' => true,
));

//$token is the access token from the URL above
$attachment = array('message' => 'Image Taken By Nasa eyeSpace Robot',
		'access_token'  => $token,
		'name' => 'Picture From the Nasa eyeSpace Robot',
		'caption' => "Nasa spaceapp Challenge",
		'link' => 'http://nasaspacechallenge.net76.net/',
		'description' => 'Click Link to Read more information about this picture',
		'picture' => 'http://www.esa.int/var/esa/storage/images/esa_multimedia/images/2014/02/searching_for_exoplanetary_systems/14282306-1-eng-GB/Searching_for_exoplanetary_systems.jpg',

);

try{
	$res = $facebook->api('/347578625322897/feed','POST',$attachment);
    print_r($res);

} catch (Exception $e){

	echo $e->getMessage();
}

//Facebook post Status
?>