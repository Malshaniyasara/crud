   <?php
include'connect.php';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password']; 

$sql="insert into 'crud'(name,email,mobile,password)
value('$name','$email','$mobile','$password')";
$result=mysqli_query($con,$sql);
if($result){
    echo"Data inserted successful";
 }else{
    die(mysqli_error($con));
} }
?>



<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.rtl.min.css" >

    <title>crud operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label> EName</label>
    <input type="text" class="form-control" placeholder="Enter Your name" name="name" autocomplete="off">
</div>

<div class="form-group">
    <label> Email</label>
    <input type="email" class="form-control" placeholder="Enter Your email" name="email"autocomplete="off">
</div>
<div class="form-group">
    <label> Mobile</label>
    <input type="text" class="form-control" placeholder="Enter Your mobile number" name="mobile" autocomplete="off">
</div>
<div class="form-group">
    <label> Password</label>
    <input type="text" class="form-control" placeholder="Enter Your password " name="password" autocomplete="off">
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form> 
    </div>

  </body>
</html>