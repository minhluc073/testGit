<?php 
    session_start();
    if(isset($_POST['btnsubmit'])){
        if($_POST['username']=='luc' && $_POST['password']==123){
            $_SESSION['user'] = $_POST['username'];
            $_SESSION['pass'] = $_POST['password'];
            echo"<script>alert('bạn đã đăng nhập');location='taikhoan.php';</script>";
        }
        else{
            echo"<script>alert('đăng nhập thất bại')</script>";
        }

    }

?>


<form action="index.php" method ='post'>
    <div>
        ten dang nhap<input type="text" name="username" placeholder='nhap ten dang nhap'>
    </div>
    <div>
        mat khau<input type="password" name="password" placeholer="Nhap mat khau">
        </div>
    <div>
        <button type="submit" name="btnsubmit" value='abc'>dang nhap</button>
        </div>
</form>