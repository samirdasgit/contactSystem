<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Contact</title>
</head>
<body>
  <form action="contact-adds.php" method="post">
    <table>
      <tr>
        <td>Name:</td>
        <td><input type="text" id="full_name" name="full_name"></td>
      </tr>
      <tr>
        <td>Mobile No:</td>
        <td><input type="text" id="mobile_no" name="mobile_no"></td>
      </tr>
      <tr>
        <td>City:</td>
        <td><input type="text" id="city" name="city"></td>
      </tr>
      <tr>
        <td>
          <input type="submit" value="Add">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>