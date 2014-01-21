<?php
error_reporting(E_ALL ^ E_NOTICE);
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
        <table class="tbl">
            <form method="post" action="TicketKaydet.php">
            <tr>
                <td>* Soru Türü</td>
                <td><select name="Kategori" id="Kategori" style="width:210px" >
                        <option value="">Seçiniz</option>
                       <?php
                    $query = mysql_query("SELECT * FROM Kategoriler ORDER BY Kategori");
                    while ($row = mysql_fetch_array($query)) {
                        echo "<option>{$row['Kategori']}</option>";
                    }

            ?>
                    </select>
                </td>
                
            </tr>
           
       
          
               <tr>
               <td>* Soru Başlığı</td> 
               <td><input type="text" name="SoruBaslik"  size="30" /><br></td>
              </tr>
               <tr>
               <td>* Soru Giriniz</td>
               <td><textarea name="Soru" id="textarea" cols="30" rows="5"></textarea></td>
               </tr>
               <tr>
               <td></td>
               <td><input type="submit" name="Gonder" value="Gönder"/></td>
               </tr>
           </form>

        </table>
    </div>

  </div>
  <div id="footer">
     <p><a href="Index.php">Anasayfa</a>&nbsp; |&nbsp; <a href="#">İletisim</a>&nbsp; |&nbsp; <a href="TicketOlustur.php">Yeni Ticket Oluştur</a>&nbsp; |&nbsp; <a href="TicketBilgilerim.php">Ticket Bilgilerim</a>&nbsp; | &nbsp; 2014  Design by <a href="#"> Ayhan Ozdemir</a></p>
  </div>
</div>
</body>
</html>
