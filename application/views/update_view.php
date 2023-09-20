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
	<h1><a class="link-opacity-25" href="http://localhost/c3/index.php/retrive_controller/display_fun">view student list</a></h1>
  <h2>update student mark list form </h2>
  <?php echo @$message; ?>
  <form method="post" enctype="multipart/formdata">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name"  value="<?php echo $student[0]['name'];?>" required>
    </div>
    <div class="form-group">
      <label for="rollno">Roll No:</label>
      <input type="number" class="form-control " name="rollno" placeholder="Enter RollNo ID"  value="<?php echo $student[0]['rollno'];?>" required>
    </div>
    <div class="col-xs-6">
	<div class="form-group ">
      <label for="tamil">Tamil:</label>
      <input type="number" class="form-control " name="tamil" placeholder="Enter Tamil Mark"  value="<?php echo $student[0]['tamil'];?>" required>
      <label for="tamil">maximum 100</label>
    </div>
    </div>
    <div class="col-xs-6">
	<div class="form-group">
      <label for="english">English</label>
      <input type="number" class="form-control" name="english" placeholder="Enter English Mark"  value="<?php echo $student[0]['english'];?>" required>
      <label for="tamil">maximum 100</label>
    </div>
    </div>
    <div class="col-xs-6">
    <div class="form-group">
      <label for="maths">Maths</label>
      <input type="number" class="form-control" name="maths" placeholder="Enter Maths Mark"  value="<?php echo $student[0]['maths'];?>" required>
      <label for="tamil">maximum 100</label>
    </div>
    </div>
    <div class="col-xs-6">
    <div class="form-group">
      <label for="science">Science</label>
      <input type="number" class="form-control" name="science" placeholder="Enter Science Mark"  value="<?php echo $student[0]['science'];?>" required>
      <label for="tamil">maximum 100</label>
    </div>
    </div>
    <div class="col-xs-6">
    <div class="form-group">
      <label for="social">Social</label>
      <input type="number" class="form-control" name="social" placeholder="Enter Social Mark"  value="<?php echo $student[0]['social'];?>" required>
      <label for="tamil">maximum 100</label>
    </div>
    </div>
    <div class="col-xs-6">
    <input type="submit" name="change" class="btn btn-success" value="Update"/>
    </div>
  </form>
</div>

</body>
</html>
