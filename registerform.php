<?php
include "connect.php";
if(isset($_POST['submit'])){
  $Name=$_POST['Name'];
  $Email=$_POST['Email'];
  $City=$_POST['City'];
  $Salary=$_POST['Salary'];
  $Number=$_POST['Number'];
  $Gender=$_POST['Gender'];
  $Password=$_POST['Password'];
  $insert= "INSERT INTO `customer`(`Name`, `Password`, `Gender`, `City`, `Email`, `Salary`, `Contact_number`) VALUES ('$Name','$Password','$Gender','$City','$Email','$Salary', '$Number')";
  $set = mysqli_query($conn, $insert);
  if($set){
    echo "inserted";
  }else{
echo"Not inserted";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"*
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css" />
    <title>Form</title>
  </head>
  <body background="img/form background.jpg">
    <div class="container my-5 form">
      <header>Registration</header>
      <form action="" method="post" class="d-grid gap-3 col-8 mx-auto py-4 ">
        <div class="input-box">
          <label for="name">Name</label>

          <input type="text" placeholder="Enter your name"  name="Name" />
        </div>
       

        <div class="input-box">
          <label for="email">Email address</label>
          <input type="email" placeholder="name@example.com" Name="Email"required/>
        </div>
        <div class="input-box">
          <label for="City">City</label>

          <input type="text" placeholder="Enter your city" name="City" />
        </div>
        <div class="input-box">
        <label for="Salary">Salary</label>

          <input type="number" placeholder="Enter your salary" Name="Salary" required />
        </div>
        <div class="input-box">
        <label for="Number">Phone number</label>

          <input type="tel" placeholder="Enter your phone number" Name="Number" required />
        </div>
        <label for="Gender" Name="Gender">Gender</label>

        
        <div class="form-check form-check-inline " >
          <input class="form-check-input  " type="radio" name="Gender" id="inlineRadio1" value="male"> 
          <label class="form-check-label " for="inlineRadio1"> Male</label>
        </div>
        <div class="form-check form-check-inline ">
          <input class="form-check-input" type="radio" name="Gender" id="inlineRadio2" value="female">
          <label class="form-check-label" for="inlineRadio2"> Female</label>
        </div>
        <div class="input-box">
          <label for="password">Password</label>
          <input type="password" Name="Password" required />
        </div>
       
        <div class="check-box">
          <label for="paymentmethod"
            ><input type="checkbox" Name="checkbox" required>&nbsp; &nbsp; &nbsp;I agree to all the
            &nbsp;
            <a href="">Terms and conditions</a></label>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
     
            <button class="btn btn-primary" type="submit" name="submit">Submit</button></a
          >
        </div>
      </form>
    </div>
  </body>
</html>
