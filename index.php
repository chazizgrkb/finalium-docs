<?php
require('lib/common.php');

if ( isset( $_GET['page'] ) && !empty( $_GET['page'] ) ) {
    $page = $_GET['page'];
} else {
    $page = "index"; //avoids error
};

$twig = twigloader();

echo $twig->render($page . '.twig');
