<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <h1 style="align-item='center';">Student Data</h1>
  <h2><a class="link-opacity-10" href="http://localhost/c3/index.php/Register_controller">Add student</a></h2>
  <?php echo @$message; ?>
  <table class="table table-striped table-hover" style="width:50%">
    <thead>
      <tr>
        <th>Name</th>
        <th>Roll Number</th>
		<th>Tamil</th>
		<th>English</th>
		<th>Maths</th>
		<th>Science</th>
		<th>Social</th>
		<th>Total</th>
		<th>Grade</th>
		<th>percentage</th>
        
      </tr>
    </thead>
    <tbody>
	<?php foreach($student as $row){?>
      <tr>
        <td><?php echo $row["name"];?></td>
        <td><?php echo $row["rollno"];?></td>
		<td><?php echo $row["tamil"];?></td>
		<td><?php echo $row["english"];?></td>
		<td><?php echo $row["maths"];?></td>
		<td><?php echo $row["science"];?></td>
		<td><?php echo $row["social"];?></td>
		<td><?php echo $row["total"];?></td>
		<td><?php echo $row["grade"];?></td>
		<td><?php echo $row["percentage"];?>%</td>
        <td><a href="http://localhost/c3/index.php/retrive_controller/update_fun?id=<?php echo $row["id"];?>">Update</a></td>
        <!-- <td><a href="update_fun?id=<?php echo $row["id"];?>">Update</a></td> -->

		<td><a href="http://localhost/c3/index.php/retrive_controller/delete_fun?id=<?php echo $row["id"];?>">Delete</a></td>

      </tr>
	<?php } ?>
    </tbody>
  </table>
</div>
 
</body>
</html>