<!DOCTYPE html>
<html>
<body>

<center><h3>Feedback Form Data</h3></center>

<center>
<table border="1" width="40%">
<tr>
<th>Name</th>
<td><?php echo $_POST["name"]; ?></td>
</tr>
<tr>
<th>Gender</th>
<td><?php echo $_POST["Gender"]; ?></td>
</tr>
<tr>
<th>Email</th>
<td><?php echo $_POST["e-mail"]; ?></td>
</tr>
<tr>
<th>Type of Feedback</th>
<td><?php echo $_POST["feedback"]; ?></td>
</tr>
<tr>
<th>How would you rate your overall experience with our service</th>
<td><?php echo $_POST["rate"]; ?></td>
</tr>
<tr>
<th>How satisfied are you with the comprehensiveness of our offer</th>
<td><?php echo $_POST["satisfied"]; ?></td>
</tr>
<tr>
<th>How would you rate our prices</th>
<td><?php echo $_POST["price"]; ?></td>
</tr>
<tr>
<th>Would you recommend our service to other people</th>
<td><?php echo $_POST["recommend"]; ?></td>
</tr>
<tr>
<th>Comment from the user</th>
<td><?php echo $_POST["comment"]; ?></td>
</tr>
<tr>
<th>Date and Time</th>
<td><?php date_default_timezone_set("Asia/Kuala_Lumpur");
echo date ("l, d-m-y, H:i:sa");?>
</td>
</tr>
</table>
</center>
</body>
</html>

