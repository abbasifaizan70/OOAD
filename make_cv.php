<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="theme.css" class="css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
   
    <?php

      class DataCaher{
        public $data;
      }

      $Catch = new DataCaher();

        $Catch->data=file_get_contents("sample.json");
        $data=json_decode($Catch->data);
        echo'</br>
        <div class="table-responsive">
        <table class="table table-bordered table-striped">
        <thead class="thead-light">
        <tr class="info active " >
            <th scope="col" style="text-align:center;">Details</th>
            <th scope="col" style="text-align:center;">CV</th>    
        </tr>
        </thead>
        <tbody>';
        foreach($data as $key=>$value){     
            echo'<tr class="success">
                <th scope="row" style="text-align:center;">'.$key .'</th>
                <td style="text-align:center;">'. $value .'</td>
            </tr>';
        }
        echo'</tbody>
        </table></div>'  
    ?>

</div>

<center>
        <h1>Fill the Form By Viewing Above Data for CV</h1></center>
      <form action="action.php" method="post">
        <div class="form-group">
        
          <label for="Name">Name</label>
          <input type="text" class="form-control" name="name"  aria-describedby="emailHelp" placeholder="Enter Name">
        </div>
        <div class="form-group">
        <label for="Name">About Me</label>
          <input type="text" class="form-control" name="about"  aria-describedby="emailHelp" placeholder="Write one sentence  about you">
        </div>

        <div class="form-group">
          <label for="Father Name">Father Name</label>
          <input type="text" class="form-control" name="father_name" placeholder="Enter Father Name">
        </div>
        
        <div class="form-group">
          <label for="CNIC">CNIC</label>
          <input type="text" class="form-control" name="cnic" placeholder="Enter CNIC">
        </div>
        
        <div class="form-group">
          <label for="Date Of Birth">Date Of Birth</label>
          <input type="text" class="form-control" name="dob" placeholder="Enter your date of birth">
        </div>
        <div class="form-group">
          <label for="Age">Age</label>
          <input type="text" class="form-control" name="age" placeholder="Enter your age here">
        </div>
        <div class="form-group">
          <label for="contact_no">Contact number</label>
          <input type="text" class="form-control" name="phone_no" placeholder="Enter your contact number here">
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="text" class="form-control" name="email" placeholder="Enter your email address here">
        </div>
        <div class="form-group">
          <label for="city">City</label>
          <input type="text" class="form-control" name="city" placeholder="city name">
        </div>
        <div class="form-group">
          <label for="Address">Address</label>
          <input type="text" class="form-control" name="address" placeholder="Address">
        </div>
        
        <div class="form-group">
          <label for="Experience 1">Experience Along with Details</label>
          <textarea type="text" class="form-control" name="experience" placeholder="Enter Experience By Viewing Up"></textarea>
        </div>
        
        <div class="form-group">
          <label for="Experience2">Experience Along with details</label>
          <input type="text" class="form-control" name="experience2" placeholder="Enter Experience by viewing up"></textarea>
        </div>

        <div class="form-group">
          <label for="Experience3">Experience Along with Details</label>
          <textarea type="text" class="form-control" name="experience3" placeholder="Enter Experience by viewing up"></textarea>
        </div>
        <div class="form-group">
          <label for="Qualification">Qualification</label>
          <textarea type="text" class="form-control" name="qualification" placeholder="Enter your Qualification details"></textarea>
        </div>
        <div class="form-group">
          <label for="Skills">Skills</label>
          <textarea type="text" class="form-control" name="skills" placeholder="Enter your skills here"></textarea>
        </div>
        
        <div class="form-group">
          <label for="Services">Services</label>
          <textarea type="text" class="form-control" name="services" placeholder="Enter your services here"></textarea>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
      </form>

   
</body>
</html>
