<?php
    header('Content-Type: text/html; charset=utf-8');
    if ($_FILES['file']) {
        var_dump($_FILES);
    }
    if (count($_GET)) {
        var_dump($_GET);
    }
    if (count($_POST)) {
        var_dump($_POST);
    }
?>