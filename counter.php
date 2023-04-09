<?php
session_start();
if(!isset($_SESSION["counter"])) {
    $_SESSION["counter"]=0;
} else {
    $_SESSION["counter"] += 1;
}
echo the $_SESSION['counter'];
?>
