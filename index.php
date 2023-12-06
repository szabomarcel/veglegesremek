<?php
    header('Content-Type: text/html; charset=UTF-8');
    session_start(); //-- munkamenet adatainak tárolására $_SESSION[]
    ob_start();
    require_once './class/Database.php';
    $db = new Database("localhost", "root", "", "regisztracio");        
    if(!isset($_SESSION['login'])) {$_SESSION['login'] = false;}
    require_once("./layout/head.php");
    $menuItem = filter_input(INPUT_GET, "menuItem");    
    $regisztracio = filter_input(INPUT_GET, "register");
?>    
<body>
<?php
    if($_SESSION['login']){
        //require_once './layout/header.php';
        require_once './login/navbar.php';
        require_once './layout/menu.php';
        require_once './layout/footer.php';
    }else{
        require_once './login/switchlog.php';
    }
?>    
<!--<script src="./bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>-->
</body>