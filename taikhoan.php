<?php
    session_start();
    if(!isset($_SESSION['user'])){
        echo 'đã tồn tại biến đang nhập';
    }
?>
 <h2>chào mừng <?php echo $_SESSION['user'] ?>, đã đến với trang đăng nhập</h2>
 <div>
    <a href="logout.php">đăng xuất</a>
 </div>
 