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
  <h2>Student mark list form </h2>
  <?php echo @$message; ?>
  <form method="post" enctype="multipart/formdata">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
    </div>

    <div class="form-group">
      <label for="rollno">Roll No:</label>
      <input type="number" class="form-control " name="rollno" placeholder="Enter RollNo ID" required>
    </div>
    <div class="col-xs-6">
	<div class="form-group ">
      <label for="tamil">Tamil:</label>
      <input type="number" class="form-control " name="tamil" placeholder="Enter Tamil Mark" required>
      <label for="tamil">maximum 100</label>
    </div>
    </div>
    <div class="col-xs-6">
	<div class="form-group">
      <label for="english">English</label>
      <input type="number" class="form-control" name="english" placeholder="Enter English Mark" required>
      <label for="tamil">maximum 100</label>
    </div>
    </div>
    <div class="col-xs-6">
    <div class="form-group">
      <label for="maths">Maths</label>
      <input type="number" class="form-control" name="maths" placeholder="Enter Maths Mark" required>
      <label for="tamil">maximum 100</label>
    </div>
    </div>
    <div class="col-xs-6">
    <div class="form-group">
      <label for="science">Science</label>
      <input type="number" class="form-control" name="science" placeholder="Enter Science Mark" required>
      <label for="tamil">maximum 100</label>
    </div>
    </div>
    <div class="col-xs-6">
    <div class="form-group">
      <label for="social">Social</label>
      <input type="number" class="form-control" name="social" placeholder="Enter Social Mark" required>
      <label for="tamil">maximum 100</label>
    </div>
    </div>
    <div class="col-xs-12">
    <input type="submit" name="register" class="btn btn-success" value="Register"/>
</div>
  </form>
</div>

</body>
</html>