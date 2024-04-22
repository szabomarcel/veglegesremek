<?php
if (filter_input(INPUT_POST,'belepesiAdatok',FILTER_VALIDATE_BOOLEAN,FILTER_NULL_ON_FAILURE)) {
  //-- A kapott adatok feldolgozása required   
  $name = htmlspecialchars(filter_input(INPUT_POST, 'name'));
  $pass1 = htmlspecialchars(filter_input(INPUT_POST, 'password'));

  if ($db->login($name, $pass1)) {
    $_SESSION['login'] !== false;
    $_SESSION['name'] = $row['name'];
  }
}
?>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-3">
        <img src="kepek/foci/foci.jpg" class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
          <p class="lead fw-normal mb-0 me-3">Jelentkezen be</p>
          <a href="https://www.facebook.com/?locale=hu_HU">
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fa fa-facebook-f"></i>
            </button>
          </a>
          
          <a href="https://twitter.com/?lang=hu">
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fa fa-twitter"></i>
            </button>
          </a>
          
          <a href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ARZ0qKKJxwn0tYHfIeuWDTqt0K9Nh14VT91BRgYtF8thCXDGqd5L3m0uPicXMAze8GheSU9U4CK8vw&theme=mn&ddm=0&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fa fa-google"></i>
            </button>
          </a>
        </div>
        
        <form action="#" method="post">
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Vagy</p>
          </div>

          <!-- Felhasználói név bemenet -->
          <div class="form-outline mb-4">
            <label class="form-label" for="name" aria-describedby="nameHelp" autocomplete="name" >Felhasználói név: </label>
            <input type="text" id="name" name="name" class="form-control form-control-lg" required
              placeholder="Adjon meg egy érvényes névcímet" />
          </div>

          <!-- Jelszó bemenet -->
          <div class="form-outline mb-3">
            <label class="form-label" for="password"  autocomplete="address-line1">Jelszó: </label>
            <input type="password" id="password" name="password" class="form-control form-control-lg" required
              placeholder="Írja be a jelszót" />
          </div>          

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" name="belepesiAdatok" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="true">Bejelentkezés</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Nincs porfilod? <a href="index.php?register=register" class="link-danger">Regisztrálj</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      © Copyright <strong><span>Szabó Marcell és Tasnádi Richárd</span></strong> Készítetette.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com/?locale=hu_HU" class="text-white me-4">
        <i class="fa fa-facebook-f"></i>
      </a>
      <a href="https://twitter.com/?lang=hu" class="text-white me-4">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ARZ0qKKJxwn0tYHfIeuWDTqt0K9Nh14VT91BRgYtF8thCXDGqd5L3m0uPicXMAze8GheSU9U4CK8vw&theme=mn&ddm=0&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="text-white me-4">
        <i class="fa fa-google"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>