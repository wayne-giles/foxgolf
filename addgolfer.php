<?php 
ini_set('display_errors', 'On');
ini_set('error_reporting', E_ALL);

require_once('Connections/foxgolf.php'); 

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $query = sprintf("INSERT INTO Members (firstName, lastName, nickName, Email, mobile, add1, add2, town, county, postcode) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
                       $_POST['firstName'],
                       $_POST['lastName'],
                       $_POST['nickName'],
                       $_POST['Email'],
                       $_POST['mobile'],
                       $_POST['add1'],
                       $_POST['add2'],
                       $_POST['town'],
                       $_POST['county'],
                       $_POST['postcode']);
$stmt = $con->prepare($query);
$stmt->execute();
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Golfer</title>
</head>

<body>
<form method="post" name="form1" target="_self">
  <table>
    <tr>
      <td>FirstName:</td>
      <td><input type="text" name="firstName" value="" size="32"></td>
    </tr>
    <tr>
      <td>LastName:</td>
      <td><input type="text" name="lastName" value="" size="32"></td>
    </tr>
    <tr>
      <td>NickName:</td>
      <td><input type="text" name="nickName" value="" size="32"></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="text" name="Email" value="" size="32"></td>
    </tr>
    <tr>
      <td>Mobile:</td>
      <td><input type="text" name="mobile" value="" size="32"></td>
    </tr>
    <tr>
      <td>Add1:</td>
      <td><input type="text" name="add1" value="" size="32"></td>
    </tr>
    <tr>
      <td>Add2:</td>
      <td><input type="text" name="add2" value="" size="32"></td>
    </tr>
    <tr>
      <td>Town:</td>
      <td><input type="text" name="town" value="" size="32"></td>
    </tr>
    <tr>
      <td>County:</td>
      <td><input type="text" name="county" value="" size="32"></td>
    </tr>
    <tr>
      <td>Postcode:</td>
      <td><input type="text" name="postcode" value="" size="32"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" value="Insert record"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p>&nbsp;</p>
</body>
</html>