<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-secondary"> <!--fixed-top-->
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php?menuItem=fooldal"><img src="kepek/pele-focilabda.svg" alt="pele-focilabda.svg" style="width: 30px; height: 30px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" arial-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-dark bg-secondary" id="navbarSupportedContect">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>