<?php 
include 'includes/header.php';
include 'includes/modal.php';

if(isset($_GET['page'])){
    include 'pages/'.$_GET['page'].'.php';
} else {
    include 'pages/index.php';
}

include 'includes/footer.php';
?>