<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Your CV</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="theme.css" class="css">
</head>
<body>
<br>
<br>
  <center> <h1>Welcome Our Best CV Maker Tool Online.
    <br>
If a sheet of paper represents your entire work life, personality, and skills, it better be a pretty amazing piece of paper</h1>
<br>
<h1>Let's create a dynamic CV for you </h1>
<button class="btn btn-primary" ><a href="make_cv.php">CREATE YOUR CV NOW</a></button>
<h1>If you have already use that tool then we save your <br> CV for you to use at any time.</h1>
<br>

<form action="cv_build_already.php" method="post">
<div class="form-group">
        <label for="CNIC">Enter your CNIC number here </label>
          <input type="text" class="form-control" name="cnic"  placeholder="Write your CNIC number here">
        </div>

        <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
        </form>
        </center> 
</body>
</html>