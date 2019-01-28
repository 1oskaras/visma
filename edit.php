


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Visma registration form</title>
    <link rel="stylesheet" href="/css/style.css">

  </head>
  <body>
    <div class="registration-form">
      <div class="registration-title">
        <h1>User information editor</h1>
      </div>

    <form class="" action="update.php" method="GET">

      <div class="input-group">
        <label>First Name</label>
        <input type="text" name="ud_firstname" value="<?php echo "$firstname" ?>">
      </div>
      <div class="input-group">
        <label>Second Name</label>
        <input type="text" name="ud_secondname" value="<?php echo "$secondname" ?>">
      </div>
      <div class="input-group">
        <label>Email</label></label>
        <input type="text" name="ud_email" value="<?php echo "$email" ?>">
      </div>
      <div class="input-group">
        <label>Phone number 1</label>
        <input type="text" name="ud_phonenumber1" value="<?php echo "$phonenumber1" ?>">
      </div>
      <div class="input-group">
        <label>Phone number 2</label>
        <input type="text" name="ud_phonenumber2" value="<?php echo "$phonenumber2" ?>">
      </div>
      <div class="input-group">
        <label>Comment</label>
        <textarea name="ud_comment" rows="3" cols="80" ></textarea>
      </div>


      <button type="submit" name="edit" class="register-button">Update Info</button>

      <?php
      	include_once('db.php');

                  $ud_ID = $_GET['ID'];
                  $query = mysql_query("SELECT * FROM users WHERE id = '$UID'") or die(mysql_error());

                  if(mysql_num_rows($query)>=1){
                      while($row = mysql_fetch_array($query)) {
                          $ud_firstname = $row['firstname'];
                          $ud_secondname = $row['secondname'];
                          $ud_email = $row['email'];
                          $ud_phonenumber1 = $row['phonenumber1'];
                          $ud_phonenumber2 = $row['phonenumber2'];
                          $ud_comment = $row['comment'];
                      }
      ?>

    </form>
    </div>
