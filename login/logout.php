<?php
/*if (headers_sent()) {
    header_remove();
}*/
session_destroy();
header("Location: ./index.php");
exit();
