<?php
include 'includes/common.php';
$select="SELECT * FROM users";
$select_query=mysqli_query($con,$select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Rhyme Bank</title>
</head>

<body style="background-color : #34d9eb; ">
<?php
include 'includes/header.php';
?>
<div class="container">
<div class="row">
<h2 class="text-center" style="margin-top: 100px; color: black"> <b>Transfer Money</b> </h2>
<br>

<div class="col-md-offset-2 col-md-8">
<table class="table" style="background-color : white; ">
<thead>
<tr style="color: black">
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Balance</th>
<th>Operation</th>
</tr>
</thead>
<tbody>
<?php 
while($row=mysqli_fetch_assoc($select_query)){
?>
<tr style="color : #34d9eb" >
<td ><?php echo $row['id'] ?></td>
<td ><?php echo $row['name']?></td>
<td ><?php echo $row['email']?></td>
<td ><?php echo $row['balance']?></td>
<td><a href="transfer.php?id= <?php echo $row['id'] ; ?>"> <button type="button" class="btn">Tranfer</button></a></td> 
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</div>
</div>
<?php
include 'includes/footer.php';
?>
</body>
</html>
