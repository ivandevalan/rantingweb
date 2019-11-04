<?php
/********************************************************
Halaman ini merupakan halaman logout, dimana kita menghapus
session yang ada.
*********************************************************/
session_start();
if (isset($_SESSION['login'])) {
 unset ($_SESSION);
 session_destroy();

header("location: index");
}
?> 