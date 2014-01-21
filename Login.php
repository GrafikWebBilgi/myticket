<?php 
 
include("Config.php");

ob_start();
session_start();
 
$kadi = $_POST['KullaniciAdi'];
$sifre = $_POST['Sifre'];
 
$sql_check = mysql_query("select * from uyeler where KullaniciAdi='".$kadi."' and Sifre='".$sifre."' ") or die(mysql_error());
 
if(mysql_num_rows($sql_check))  {
    $row=  mysql_fetch_array($sql_check);
    $_SESSION["login"] = "true";
    $_SESSION["KullaniciAdi"] = $kadi;
    $_SESSION["Sifre"] = $sifre;
    $_SESSION["Email"] = $row["Email"];
    header("Location:Index.php");
}
else {
    if($kadi=="" or $sifre=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}
 
ob_end_flush();
?>
