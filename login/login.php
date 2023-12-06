<?php
if (filter_input(INPUT_POST,'belepesiAdatok',FILTER_VALIDATE_BOOLEAN,FILTER_NULL_ON_FAILURE)) {
//-- A kapott adatok feldolgozása required   
$name = htmlspecialchars(filter_input(INPUT_POST, 'name'));
$pass1 = htmlspecialchars(filter_input(INPUT_POST, 'password'));

if ($db->login($name, $pass1)) {
  $_SESSION['login'] !== true;
}
}
?>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="kepek/foci/letöltés (1).jpg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          <p class="lead fw-normal mb-0 me-3">Sign in with</p>
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>
          
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>
          
          <button type="button" class="btn btn-primary btn-floating mx-1">
            <i class="fab fa-linkedin-in"></i>
          </button>
        </div>
        
        <form action="#" method="post">
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Felhasználói név bemenet -->
          <div class="form-outline mb-4">
            <label class="form-label" for="name" aria-describedby="nameHelp" autocomplete="name" >Feljazsnálói név: </label>
            <input type="text" id="name" name="name" class="form-control form-control-lg" required
              placeholder="Enter a valid name address" />
          </div>

          <!-- Jelszó bemenet -->
          <div class="form-outline mb-3">
            <label class="form-label" for="password"  autocomplete="address-line1">Jelszó: </label>
            <input type="password" id="password" name="password" class="form-control form-control-lg" required
              placeholder="Enter password" />
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <!--<div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="true" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>-->
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" name="belepesiAdatok" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="true">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="index.php?register=register" class="link-danger">Register</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      © Copyright <strong><span>Szabó Marcell és Tasnádi Richárd</span></strong>. Készítetette
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>