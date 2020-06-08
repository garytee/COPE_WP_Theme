<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package COPE
 */

?>

<?php
  $encryptedString = $_GET['code'];
  if (strlen($encryptedString) > 10) {
    $url = 'https://9t0bz9nwmd.execute-api.us-east-2.amazonaws.com/prod/updateverification';
    $data = json_encode(array('mailId' => $encryptedString));


    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_POST, 1);

    //Attach our encoded JSON string to the POST fields.
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    //Set the content type to application/json
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'User-Agent:'.$_SERVER['HTTP_USER_AGENT']));

    //Execute the request
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);

    curl_close($ch);

    if(!$result) {
      echo 'Verification Failure';
    }
    else {
      $json = json_decode($result, true);
      echo 'Verification '.$json["message"];
    }
  }
  else {
    echo 'Verification Failure';
  }
?>

