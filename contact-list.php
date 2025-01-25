<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact List</title>
</head>
<body>
  <table border="1" style="width: 600px;">
    <tr>
      <th>Sl</th>
      <th>Name</th>
      <th>Mobile No</th>
      <th>City</th>
      <th>Action</th>
    </tr>
    <?php
    $count=0;
    $getData=mysqli_query($conn,"SELECT * FROM `contact_info`");
    while ($rowData=mysqli_fetch_array($getData)) {
      $count++;
      $sl=$rowData['sl'];
      $full_name=$rowData['full_name'];
      $mobile_no=$rowData['mobile_no'];
      $city=$rowData['city'];
      ?>
      <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $full_name; ?></td>
        <td><?php echo $mobile_no; ?></td>
        <td><?php echo $city; ?></td>
        <td><a href="contact-update.php?sl=<?php echo $sl; ?>">Update</a></td>
      </tr>
      <?php
    }
    ?>
  </table>
</body>
</html>