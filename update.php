<?php

include_once('db.php');

$ud_ID = (int)$_POST["ID"];

$ud_firstname = mysql_real_escape_string($_POST["ud_firstname"]);
$ud_secondname = mysql_real_escape_string($_POST["ud_secondname"]);
$ud_email = mysql_real_escape_string($_POST["ud_email"]);
$ud_phonenumber1 = mysql_real_escape_string($_POST["ud_phonenumber1"]);
$ud_phonenumber2 = mysql_real_escape_string($_POST["ud_phonenumber2"]);
$ud_comment = mysql_real_escape_string($_POST["ud_comment"]);


$query="UPDATE users SET firstname = '$ud_firstname', secondname = '$ud_secondname', email = '$ud_email',
        phonenumber1 = '$ud_phonenumber1', phonenumber2 = '$ud_phonenumber2', comment = '$ud_comment',
        WHERE ID='$ud_ID'";

          mysql_query($query)or die(mysql_error());
              if(mysql_affected_rows()>=1){
                  echo "<p>($ud_ID) User Updated<p>";
                  }else{
                      echo "<p>($ud_ID) Not Updated<p>";
                       }

?>
