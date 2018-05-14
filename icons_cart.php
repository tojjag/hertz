<?php 
session_start();
$_SESSION['indice'] = 0;
if($_SESSION['indice']==0) {?>
	<span class="header-icons-noti"><?php echo $_GET['indice']; ?></span>
<?php $_SESSION['indice']=$_SESSION['indice']+1;
}

 else if($_SESSION['indice']!=0) {?>
	<span class="header-icons-noti"><?php echo $_GET['indice']; ?></span>
<?php $_SESSION['indice']=$_SESSION['indice']+1;
} ?>