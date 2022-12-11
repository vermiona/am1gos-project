<?php
    session_start();

    if(isset ($_GET['x']) && $_GET['x']=='visimisi'){
        $page = "./beranda/visiMisi.php";
        include "./beranda/main.php";
    } else if(isset ($_GET['x']) && $_GET['x']=='siswa'){
        $page = "./beranda/siswa.php";
        include "./beranda/main.php";
    } else if(isset ($_GET['x']) && $_GET['x']=='pengajar'){
        $page = "./beranda/pengajar.php";
        include "./beranda/main.php";
    } else if(isset ($_GET['x']) && $_GET['x']=='homeberanda'){
        $page = "./beranda/home.php";
        include "./beranda/main.php";
    } else if(isset ($_GET['x']) && $_GET['x']=='formulir'){
        $page = "./beranda/formulir.php";
        include "./beranda/main.php";
    } else if(isset ($_GET['x']) && $_GET['x']=='login'){
        include "./beranda/login.php";
    } else {
        $page = "./beranda/home.php";
        include "./beranda/main.php";
    }

    // if(isset ($_GET['x']) && $_GET['x']=='home'){
    //     $page = "home.php";
    //     include "main.php";
    // }else if (isset ($_GET['x']) && $_GET['x']=='order'){
    //     $page = "order.php";
    //     include "main.php";
    // }else if (isset ($_GET['x']) && $_GET['x']=='customer'){
    //     $page = "customer.php";
    //     include "main.php";
    // }else if (isset ($_GET['x']) && $_GET['x']=='user'){
    //     if($_SESSION['level_cafe']==1){
    //         $page = "user.php";
    //         include "main.php";
    //     }else{
    //         $page = "home.php";
    //         include "main.php";
    //     }

    // }else if (isset ($_GET['x']) && $_GET['x']=='report'){
    //     if($_SESSION['level_cafe']==1){
    //         $page = "report.php";
    //         include "main.php";
    //     }else{
    //         $page = "home.php";
    //         include "main.php";
    //     }
        
    // }else if (isset ($_GET['x']) && $_GET['x']=='menu'){
    //     $page = "menu.php";
    //     include "main.php";
    // }else if (isset ($_GET['x']) && $_GET['x']=='login'){
    //     include "login.php";
    // }else if (isset ($_GET['x']) && $_GET['x']=='logout'){
    //     include "proses/proses_logout.php";
    // }else{
    //     $page = "home.php";
    //     include "main.php";
    // }
?>