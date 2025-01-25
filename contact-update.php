<?php
include "config.php";
$sl=$_REQUEST['sl'];
$full_name = $mobile_no = $city = '';
$getData=mysqli_query($conn,"SELECT * FROM `contact_info` WHERE `sl`='$sl'");
while ($rowData=mysqli_fetch_array($getData)) {
  $full_name=$rowData['full_name'];
  $mobile_no=$rowData['mobile_no'];
  $city=$rowData['city'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Contact</title>
</head>
<body>
  <form action="contact-updates.php" method="post">
    <input type="hidden" name="sl" value="<?php echo $sl; ?>">
    <table>
      <tr>
        <td>Name:</td>
        <td><input type="text" id="full_name" name="full_name" value="<?php echo $full_name; ?>"></td>
      </tr>
      <tr>
        <td>Mobile No:</td>
        <td><input type="text" id="mobile_no" name="mobile_no" value="<?php echo $mobile_no; ?>"></td>
      </tr>
      <tr>
        <td>City:</td>
        <td><input type="text" id="city" name="city" value="<?php echo $city; ?>"></td>
      </tr>
      <tr>
        <td>
          <input type="submit" value="Update">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>