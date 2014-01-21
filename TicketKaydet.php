<?php 
 
include("Config.php");
session_start();


if($_POST['Kategori']==""){
    echo "Lütfen Kategori Seçiniz";
}elseif($_POST['SoruBaslik']==""){
    echo "Lütfen Baslik Giriniz";
}elseif($_POST['Soru']==""){
    echo "Lütfen Soru Giriniz";
}else{
    $kategori = $_POST['Kategori'];
     $sorubaslik = $_POST['SoruBaslik'];
     $soru = $_POST['Soru'];
     $email = $_SESSION["Email"];
     $user = $_SESSION["KullaniciAdi"];
     mysql_query("INSERT into tickets (Kategori,SoruBaslik, Soru, Email, KullaniciAdi) values ('$kategori','$sorubaslik','$soru','$email','$user')");
     header("Location:TicketBilgilerim.php");
}
header("Refresh: 2; url=TicketOlustur.php");
?>
