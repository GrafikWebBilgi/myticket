<?php
    error_reporting(E_ALL ^ E_NOTICE);
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
    
    <form method="post" action="TicketBilgilerim.php">
    <?php if($_SESSION["login"]!=""){ ?>
        <div class="search">
         <p>
             <input type="text" name="Arama" id="textfield" />
             <input type="submit" value="ARA" class="searchSubmit" />
        </p>
        </div>
    <?php } ?>
   </form>
    

  </div>
    
    <?php if($_SESSION["login"]!=""){ ?>
  <div id="navcontainer">
    <ul id="navlist">
      <li id="current"><a href="Index.php">Anasayfa</a></li>
      <li id="current"><a href="TicketOlustur.php">Yeni Ticket Oluştur</a></li>
      <li id="current"><a href="TicketBilgilerim.php">Ticket Bilgilerim</a></li>
      <li id="current"><a href="Logout.php">Çıkış</a></li>
      
    </ul>
  </div>
    <?php } ?>
    
  <div id="content">
   
      <h2><span style="font-weight:bold; color:#A662AA;">Sayfamıza Hoş Geldiniz.</span></h2>
    
    <div>
        <?php 
            
            if($_SESSION["login"]==""){ 
        ?>
        
        <table class="tbl">
            <form method="post" action="Login.php">
            <tr>
                <td>* Kullanıcı Adınız</td>
                <td><input type="text" name="KullaniciAdi" value="" /></td>
            </tr>
            <tr>
                <td>* Şifreniz</td>
                <td><input type="password" name="Sifre" value="" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="gonder" /><a href="UyeOl.php">&nbsp;&nbsp;Uye ol</a></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
                </form>

        </table>
       

        <?php }else{  
            echo "MyTicket Sayfamıza Hoşgeldin ".$_SESSION["KullaniciAdi"]."<br><br>";
        }
        ?>
    </div>
  
  </div>
  <div id="footer">
    <p><a href="Index.php">Anasayfa</a>&nbsp; |&nbsp; <a href="#">İletisim</a>&nbsp; |&nbsp; <a href="TicketOlustur.php">Yeni Ticket Oluştur</a>&nbsp; |&nbsp; <a href="TicketBilgilerim.php">Ticket Bilgilerim</a>&nbsp; | &nbsp; 2014  Design by <a href="#"> Ayhan Ozdemir</a></p>
  </div>
</div>
</body>
</html>
