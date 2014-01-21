<?php
    error_reporting(E_ALL ^ E_NOTICE);
    session_start();
    include("Config.php");

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
      <form method="post" action="">
         <p>
             <input type="text" name="Arama" id="textfield" />
             <input type="submit" value="ARA" class="searchSubmit" />
        </p>
    </div>
  </div>
  <div id="navcontainer">
    <ul id="navlist">
      <li id="current"><a href="Index.php">Anasayfa</a></li>
      <li id="current"><a href="TicketOlustur.php">Yeni Ticket Oluştur</a></li>
      <li id="current"><a href="TicketBilgilerim.php">Ticket Bilgilerim</a></li>
      <li id="current"><a href="Logout.php">Çıkış</a></li>
    </ul>
  </div>
  <div id="content">
    <h2><span style="font-weight:bold; color:#A662AA;">Ticket Oluştur</span></h2>
    <div>
        <?php
            if(isset($_POST["Arama"])){
               $ara = " AND (SoruBaslik LIKE '%{$_POST["Arama"]}%' OR Soru LIKE '%{$_POST["Arama"]}%' OR Kategori LIKE '%{$_POST["Arama"]}%')";
               echo "Filtre:".$_POST["Arama"];
           }
        ?>
        <table class="tblTb">
            <tr>
                <td><strong>Soru Türü</strong></td><td><strong>Soru Başlığı</strong></td> <td><strong>Sorulan Sorular</strong></td> 
            </tr>
           <?php

           
            $query =  mysql_query("SELECT * FROM tickets WHERE KullaniciAdi='{$_SESSION["KullaniciAdi"]}' $ara");
            while ($row = mysql_fetch_array($query)) {
                echo "<tr>
                    <td>{$row["Kategori"]}</td>
                    <td>{$row["SoruBaslik"]}</td>
                    <td>{$row["Soru"]}</td>
                    </tr>";
            }
            ?>

          
        </table>
    </div>
     </form>

  </div>
    <br>
    <br>
    <br>
    <br>   
  <div id="footer">
    <p><a href="Index.php">Anasayfa</a>&nbsp; |&nbsp; <a href="#">İletisim</a>&nbsp; |&nbsp; <a href="TicketOlustur.php">Yeni Ticket Oluştur</a>&nbsp; |&nbsp; <a href="TicketBilgilerim.php">Ticket Bilgilerim</a>&nbsp; | &nbsp; 2014  Design by <a href="#"> Ayhan Ozdemir</a></p>
  </div>
</div>
</body>
</html>
