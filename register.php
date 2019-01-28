<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Visma registration form</title>
    <link rel="stylesheet" href="/css/style.css">

  </head>
  <body>

    <div class="registration-form">
      <div class="registration-title">
        <h1>User Registration Form</h1>
      </div>

    <form name="rform" class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

      <div class="input-group">
        <label>First Name</label>
        <input type="text" name="firstname" value="">
      </div>
      <div class="input-group">
        <label>Second Name</label>
        <input type="text" name="secondname" value="">
      </div>
      <div class="input-group">
        <label>Email</label></label>
        <input type="text" name="email" value="">
      </div>
      <div class="input-group">
        <label>Phone number 1</label>
        <input type="text" name="phonenumber1" value="">
      </div>
      <div class="input-group">
        <label>Phone number 2</label>
        <input type="text" name="phonenumber2" value="">
      </div>
      <div class="input-group">
        <label>Comment</label>
        <textarea name="comment" rows="3" cols="80"></textarea>
      </div>


      <button type="submit" name="submit" class="register-button">Register</button>
      <span><a href="list.php">User list</a></span>
    </form>
    <?php


//Email validation

    $email = $phonenumber1 = $phonenumber2 = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $emailErr = "";
      $phonenumberErr = "";
      $email = $_POST["email"];


           if (empty($_POST["email"])) {
              $emailErr = "Email is required";
           }else {
              $email = validation($_POST["email"]);

              // check if e-mail address is well-formed
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                 array_push($errors, "Email is not valid.");
              }
           }
        }

         //phone number validation
          $phonenumber1 = "37064323152";
          $phonenumber1 = Preg_replace("/[^\d]/", "", $phonenumber1);
            If(strlen($phonenumber1) <= 11){
              array_push($errors, "Phone not valid.");
        }

            function validation($data) {
               $data = trim($data);
               $data = stripslashes($data);
               $data = htmlspecialchars($data);
               return $data;
            }



    require('db.php');

   //Check if email is unique
  //  $user_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";

    $sql = "INSERT INTO users (firstname, secondname, email, phonenumber1, phonenumber2, comment)
          VALUES('".$_POST["firstname"]."','".$_POST["secondname"]."','".$_POST["email"]."',
            '".$_POST["phonenumber1"]."','".$_POST["phonenumber2"]."','".htmlspecialchars($_POST["comment"])."')";

    if (mysqli_query($conn, $sql)) {
        echo "New user created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
  </div>


  </body>
<link rel="stylesheet" href="/js/validation.js"/>
</html>
