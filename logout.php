<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['pass']);
    echo"<script>alert('bạn đã đăng xuất');location='index.php'</script>";
    // header('location:index.php');
?>