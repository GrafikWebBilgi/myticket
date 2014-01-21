<?php
include_once 'config.php';
ob_start();
session_start();
?>
<html>
<head>
    <title>My Ticket</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
  <div id="top">
    <h1>My Ticket</h1>
    <div class="search">
      <form method="post" action="UyeKaydet.php">
         <p>
             <input type="text" name="ara" id="textfield" />
             <input type="submit" value="ARA" class="searchSubmit" />
        </p>
    </div>
  </div>
  <div id="content">
    <h2><span style="font-weight:bold; color:#A662AA;">Üye Kayıt Formu</span></h2>
    <div>
        <table class="tbl">
            
               <tr>
               <td>* Kullanıcı Adı Giriniz</td> 
               <td><input type="text" name="KullaniciAdi"  size="30" /><br></td>
              </tr>
               <tr>
               <td>* E mail Giriniz</td> 
               <td><input type="text" name="Email"  size="30" /><br></td>
               </tr>
               <td>* Şifre Giriniz</td> 
               <td><input type="password" name="Sifre"  size="30" /><br></td>
               </tr>
               <td>* Şifrenizi Tekrar Edin</td> 
               <td><input type="password" name="SifreTekrar"  size="30" /><br></td>
               </tr>
               <tr>
         
               <tr>
               <td></td>
               <td><input type="submit" name="Kaydet" value="Kaydet"/></td>
               </tr>
      
        </table>
    </div>
     </form>

  </div>
  <div id="footer">
     <p><a href="Index.php">Anasayfa</a>&nbsp; |&nbsp; <a href="#">İletisim</a>&nbsp; |&nbsp; <a href="TicketOlustur.php">Yeni Ticket Oluştur</a>&nbsp; |&nbsp; <a href="TicketBilgilerim.php">Ticket Bilgilerim</a>&nbsp; | &nbsp; 2014  Design by <a href="#"> Ayhan Ozdemir</a></p>
  </div>
</div>
</body>
</html>
