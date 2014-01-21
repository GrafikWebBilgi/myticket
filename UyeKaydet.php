 <?php
    error_reporting(E_ALL ^ E_NOTICE);
    session_start();
    include("Config.php");

    $kullaniciadi = $_POST['KullaniciAdi'];   
    $email = $_POST['Email'];
    $sifre = $_POST['Sifre'];
    $sifretekrar = $_POST['SifreTekrar'];


if(empty($kullaniciadi) || empty($email) || empty($sifre)|| empty($sifretekrar)){
    echo "Tüm alanları doldurunuz";
    header("Refresh: 2; url=UyeOl.php");
}elseif ($sifre!=$sifretekrar) {
    echo "Parolalar eşleşmiyor. ";
    header("Refresh: 2; url=UyeOl.php");
}else {
    $sorgu = mysql_query("SELECT * FROM uyeler WHERE KullaniciAdi='$kullaniciadi' OR Email='$email'");
    if(mysql_num_rows($sorgu))  {
        $row=  mysql_fetch_array($sorgu);
        $kullaniciadi2=$row["KullaniciAdi"];
        $email2=$row["Email"];
        if($kullaniciadi==$kullaniciadi2){
            echo "Bu kullanıcı adı ile daha önce kayıt olunmuştur";
            header("Refresh: 2; url=UyeOl.php");
        }elseif ($email==$email2) {
            echo "Bu email ile daha önce kayıt olunmuştur";
            header("Refresh: 2; url=UyeOl.php");
        }
    }else{
        mysql_query("insert into uyeler (KullaniciAdi, Email, Sifre) values ('$kullaniciadi','$email','$sifre')");
        echo "Kaydınız başarı ile yapıldı";
        $_SESSION["login"] = "true";
        $_SESSION["KullaniciAdi"] = $kullaniciadi;
        $_SESSION["Sifre"] = $sifre;
        $_SESSION["Email"] = $email;
        echo "Kaydınız başarı ile yapıldı";
        header("Refresh: 2; url=Index.php");
    }
}


?>