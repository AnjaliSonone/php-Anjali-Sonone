<?php
if(isset($_POST["changepwdbtn"]))
{

 $connect =mysqli_connect("localhost","root","","project5");
 $un = $_POST["username"];
 $cpwd = $_POST["cpassword"];
 $npwd = md5($_POST["npassword"]);

 $qry ="SELECT * FROM `user` WHERE username='$un' AND password='$cpwd'";

 $result = mysqli_query($connect,$qry);
 $data = mysqli_fetch_assoc($result);
 $id = $data["id"];
 $row = mysqli_num_rows($result);
 if($row>0)
 {
   $qry = "UPDATE `user` SET `password`='$npwd' WHERE `id` ='$id'";
   $result = mysqli_query($connect,$qry);
   if($result)
   {
      echo "password changed succesfully";
   } 
   else{
      echo"something went wrong";
   }
}
else
{
    echo "Invalid username or password";
}
}
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <style>
        body {
            background-image: url(images/A2.jpg); 
            background-size: cover;
            background-attachment: fixed;
        }
      .card {
      max-width: 500px;
      margin: auto;
      margin-top: 50px;
      padding: 40px;
      border-radius: 10px;
      background-color: #ffffff50;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .card h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .card {
      text-align: center;
    }
    label{
      font-weight: bold;
    }
    </style> 
    </head>
    <body>
        <dic class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-light">
                            Password change form
                        </div>
                        <form method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> Current Password </label>
                                <input type ="password" name="cpassword" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> New Password </label>
                                <input type ="password" name="npassword" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-succes" name="changepwdbtn"> Change Password </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </dic>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

