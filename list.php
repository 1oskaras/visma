<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <link rel="stylesheet" href="/css/style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<span><a href="register.php">Register</a></span>
<table>
  <th></th>

  <?php
require('db.php');

$sql_list = "SELECT * FROM users";
$result = mysqli_query($conn, $sql_list);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { ?>
        <tr><td><?php echo $count; ?></td>
        <td><?php echo $row["firstname"]; ?></td>
        <td><?php echo $row["secondname"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["phonenumber1"]; ?></td>
        <td><?php echo $row["phonenumber2"]; ?></td>
        <td><?php echo $row["comment"]; ?></td>
        <td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
      </tr>
      <?php
    }
} else {
    echo "0 results";
}


mysqli_close($conn);
?>
</table>
</body>
</html>
