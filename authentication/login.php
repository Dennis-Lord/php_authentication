<?php
require_once('../php/initialize.php');

$errors = [];
$email = '';
$password = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'] ?? ''; 
  $password= $_POST['password'] ?? ''; 

  if($email === "") {
    $errors[0] = "Email cannot be blank.";
    echo "<script>alert('" .$errors[0]."')</script>";
  }

if($password === "") {
    $errors[1] = "Password cannot be blank.";
    echo "<script>alert('" .$errors[1]."')</script>";
  }

  if(empty($errors)) {
    $error_msg = "<script>alert('Login was unsuccesful')</script>";

    $admin = find_by_email($email);
    if($admin) {
      // try to login
      if($password === $admin['password']) {
        userSession($admin);
        header("Location: ../dashboard/dashboard.php");
        
      }else {
        $error_msg = "<script>alert('".$errors[1]."')</script>";
      }

      // if(password_verify($password, $admin['password'])){
      //   user_Session($admin);
      //   header("Location: ../dashboard/dashboard.php");

      // }else {
      //   echo "<script>alert('Login was unsuccesful')</script>";
      // }

    }else {
      echo $error_msg;
    }
  }  


}
?>

<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css"
  rel="stylesheet"
/>

<!--Stylesheet-->
<link 
  href="../assets/css/login.css"
/>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"
></script>

<section class="vh-100" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img
                  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                  alt="login form"
                  class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
                />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form action="./login.php" method="post" >
  
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">Logo</span>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
  
                    <div class="form-outline mb-4">
                      <input name="email" type="email" id="form2Example17" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Email address</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>
  
                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                    </div>
  
                    <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="./register.php" style="color: #393f81;">Register here</a></p>
                    <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>