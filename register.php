<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<style>
        .header{
            padding-left:450px;
            padding-top:50px;
        }
        .table{
            padding-left:450px;
            padding-right:300px;
        }
    </style>
    <script>
        var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('confirmPassword').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'matching';
        } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Password does not match';
        }
        }
        function check_pass() {
        if (document.getElementById('password').value ==
                document.getElementById('confirmPassword').value) {
            document.getElementById('submit').disabled = false;
        } else {
            document.getElementById('submit').disabled = true;
        }
        }
    </script>

<title>File Uploader</title>
</head>
<body>
<div class="container-sm">
  <h1>Registration Form</h1>
  <form method="POST" enctype="multipart/form-data" action="index.php">
    <div class="col-auto">
        <label for="Complete Name" class="col-sm-2 col-form-label">Complete Name</label> 
        <div class="col-sm-10">
            <input type="text" class="form-control" id="comp_name" Required>
        </div>
    </div>
    <div class="col-auto">
        <label for="Email Address" class="col-sm-2 col-form-label">Email Address</label> 
        <div>
            <input name="address" class="form-control" type="text" Required>
        </div>
    </div>  
    <div class="col-auto">
        <label class="col-sm-2 col-form-label">Password</label> 
        <div>
            <input name="password" type="password" Required>
        </div>
    </div>  
    <div class="col-auto">
        <label class="col-sm-2 col-form-label">Confirm Password</label> 
        <div>
            <input name="comfirm_pass" type="password" Required>
        </div>
    </div>  
    <div class="mb-3">
        <label class="form-label">Choose File</label>
        <div>
            <input name="picture" type="file" Required> <br>
        </div>
    </div>    
      <input type="submit" value="Submit Registration">
  </form>
</div>
  </body>
  </html>