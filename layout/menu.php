<!--<div class="container">-->
    <?php 
        switch ($menuItem) {
            case "fooldal":
                require_once("./layout/fooldal.php");
                break;
            case "atigazolas":
                require_once("./login/atigazolas.php");
                break;   
            case "kwiz":
                require_once("./login/kviz.php");
                break;     
            case "foci":
                require_once("#.php");
                break;
            case "felhasznalo":
                require_once("./login/felhasznalo.php");
                break;      
            case "login":
                require_once("./login/login.php");
                break;
            case 'logout':
                require_once './login/logout.php';
                break;                   
            default:
            require_once('./layout/fooldal.php');
        }            