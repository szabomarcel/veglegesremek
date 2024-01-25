<!--<div class="container">-->
    <?php 
        switch ($menuItem) {
            case "fooldal":
                require_once("./layout/fooldal.php");
                break;
            case "atigazolas":
                require_once("./login/atigazolas.php");
                break;   
            case "csapatok":
                require_once("./login/csapatok.php");
                break;     
            case "foci":
                require_once("login/focisjatek.php");
                break;
            case "felhasznalo":
                require_once("./login/felhasznalo.php");
                break;  
            case "videokepek":
                require_once("./login/videokepek.php");
                break;     
            case "card":
                require_once("./login/credit.php");
                break;      
            case "login":
                require_once("./login/login.php");
                break;
            case 'logout':
                require_once './login/logout.php';
                break;                   
            case 'velemeny':
                require_once './login/velemeny.php';
                break;                   
            default:
            require_once('./layout/fooldal.php');
        }            