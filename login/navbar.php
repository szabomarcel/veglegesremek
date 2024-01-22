<nav class="navbar navbar-expand-lg navbar-dark bg-secondary"> <!--fixed-top-->
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php?menuItem=fooldal"><img src="kepek/pele-focilabda.svg" alt="pele-focilabda.svg" style="width: 30px; height: 30px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-dark bg-secondary   " id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-brand" >
                <?php
                    echo '<li class="nav-item navbar navbar-light bg-light">
                            <a class="nav-link'. ($menuItem == 'felhasznalo'?' active ': '') .'"href="index.php?menuItem=fooldal">Főoldal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar navbar-light bg-light'. ($menuItem == 'atigazolas'?' active ': '') .'" href="index.php?menuItem=atigazolas">Átigazolási hírek</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar navbar-light bg-light'. ($menuItem == 'csapatok'?' active ': '') .'" href="index.php?menuItem=csapatok">Csapatainkról</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar navbar-light bg-light'. ($menuItem == 'foci'?' active ': '') .'" href="index.php?menuItem=foci">Mini Game</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar navbar-light bg-light'. ($menuItem == 'videokepek'?' active ': '') .'" href="index.php?menuItem=videokepek">Videók és képek</a>
                        </li>
                        <div class="dropdown">
                            <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
                                <img src="kepek/navbar/man.png" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy"/>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                                <li class="nav-item">
                                    <a class="nav-link navbar navbar-black bg-light' . ($menuItem == 'felhasznalo'?' active' : '') .'"href="index.php?menuItem=felhasznalo">Profilom <img src="kepek/navbar/profile.png" height="25" alt="Black and White Portrait of a Man" loading="lazy"/></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link navbar navbar-light bg-light' . ($menuItem == 'logout'?' active' : '') .'"href="index.php?menuItem=logout">Kijelentkezés <img src="kepek/navbar/logout.png" height="25" alt="Black and White Portrait of a Man" loading="lazy"/></a>
                                </li>
                            </ul>
                        </div>';
                ?>				            
            </ul>                
        </div>    
    </div>
</nav>    
<div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                    <li><a href="">Page 1</a>
                    </li>
                    <li><a href="">Page 2</a>
                    </li>
                    <li><a href="">Page 3</a>
                    </li>

              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>