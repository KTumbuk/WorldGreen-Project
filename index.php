<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

function loadPage($page): void {
    switch ($page){
        case 'home':
          include 'php/home.php';
          break;
        case 'login':
          include 'php/login.php';
          break;
        case 'register':
          include 'php/register.php';
          break;
        case 'lp':
          include 'php/lp.php';
          break;
        case 'produk':
          include 'php/produk.php';
          break;
      default :
          include "php/notfound.php";
          break;  
      }
}

loadPage($page);
?>
