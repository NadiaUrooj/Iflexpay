<?php
include "connect.php";
if(isset($_POST['submit'])){
  $IPhone_Name=$_POST['IPhone_Name'];
  $IPhone_Model_Number=$_POST['IPhone_Model_Number'];
  $Total_Payment=$_POST['Total_Payment'];
  $Down_Payment=$_POST['Down_Payment'];
  $insert="INSERT INTO `iphoneinformation`(`IPhone_Name`, `IPhone_Model_Number`, `Total_Payment`, `Down_Payment`) VALUES ('$IPhone_Name','$IPhone_Model_Number','$Total_Payment','$Down_Payment')";
  $result=mysqli_query($conn, $insert);
  if($result){
    echo "inserted";
  }
  else {
    'not inserted';
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
  <body background="img/form background.jpg" >
    <div class="container" >
        <div class="col">
          <nav class="navbar navbar-expand-lg bg-body-tertiary" id="addnewform">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">IFLEXPAY</a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      aria-current="page"
                      href="index.html"
                      >Home</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact-us.html">Contact Us</a>
                  </li>
                 <li class="nav-item dropdown">
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form.html">Order Online</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="addmobileform.html">Add Mobile</a>
          </li>
                </ul>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                 
                  <a href="index.html">
                    <button class="btn btn-primary" type="button">
                      Logout
                    </button></a
                  >
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    <div class="container my-5 form">
      <header>Add New IPhone</header>
      <form action="" method="post" class="d-grid gap-3 col-8 mx-auto py-4 ">
        <div class="input-box">
          <label for="IPhone_Name">IPhone Name</label>

          <input type="text" placeholder="Enter IPhone name"  name="IPhone_Name" />
        </div>
    
        <div class="input-box">
          <label for="IPhone_Model_Number">IPhone Model Number</label>

          <input type="text" placeholder="Enter IPhone Model Number" name="IPhone_Model_Number" />
        </div>
        <div class="input-box">
        <label for="Total_payment">Total Amount</label>
         <input type="text" placeholder="Enter Total Amount" Name="Total_Payment" required />
        </div>
        <div class="input-box">
        <label for="Down_Payment">Down Payment</label>
        <input type="text" placeholder="Enter Down Payment" Name="Down_Payment" required />
        </div>
        <!-- <div class="input-box">
            <label for="6_months_installments">6 Months Installments</label>
    
              <input type="number" Name="6_months_installments" required />
              
            </div><div class="input-box">
                <label for="12_months_installments">12 Months Installments</label>
        
                  <input type="number"  Name="18_months_installments" required />
                </div><div class="input-box">
                    <label for="18_months_installments">18 months installments</label>
            
                      <input type="number"  Name="18_months_installments" required />
                    </div> -->
        
        <div class="d-grid gap-2 col-6 mx-auto">
     
            <button class="btn btn-primary" type="submit" name="submit">Submit</button></a
          >
        </div>
      </form>
    </div>
  </body>
  <footer id="addnewform">
    <div class="col">
      <div class="row"><p>All copyright &copy are reserved</p></div>
    </div>
  </footer>
</html>
