<?php
//$id=$_GET['id'];

// Twitter Post Tweet
require_once('codebird/src/codebird.php');
$one="xJVh9xzkrPH6uws1UxTFqmtM7";
$two="wSnqKvtj7eyloAnBW3MphmQmF5SUfcaZLP4oOjTZj7uvWhQV1N";

$three="3155275443-XfA9U4AY7aMY3eu897jO1uhtR46q9z7G7qGOs9k";
$four="cdnEJ1nPF9eK9LOfDJHeVyIFqwsNK3RGDnaAeoH4mV40C";

\Codebird\Codebird::setConsumerKey($one, $two);
$cb = \Codebird\Codebird::getInstance();
$cb->setToken($three, $four);

$status="#eyeSpace Picture just taken check it out here http://queisy.eu-gb.mybluemix.net/";

$params = array(
		'status' => $status
);
$reply = $cb->statuses_update($params);
//End Twitter Post Tweet

?>