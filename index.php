<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['pesan'])){ $fp = fopen('p.txt', 'a'); 
fwrite($fp, '
<div class="cp"><p><span>Pesan :</span><br />'.$_POST['pesan'].'</p><h6>'.date("d-M-Y (H:i)").'</h6></div>');
 echo json_encode(array("s"=>200)); fclose($fp); die; } if(isset($_POST['d'])){ $fa = fopen('p.txt', 'a'); 
 fwrite($fa,$_POST['d']); echo json_encode(array("s"=>200)); fclose($fa);
  die; } if(isset($_GET['d'])){ $fa = fopen('p.txt', 'a'); fclose($fa);
  $fr = fopen('p.txt', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> 
  <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <title>Buat D</title> <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script> <script src="https://dekatutorial.github.io/crd/s.js"></script> 
  <link rel="stylesheet" type="text/css" href="https://dekatutorial.github.io/crd/s.css" /> </head> <body> <?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('p.txt', 'r'); fgets($fp); while(!feof($fp)){ echo "".fgets($fp); } fclose($fp); echo "</div></body></html>"; die; } ?> <script>dt()</script>
    <div class="ctnr">
      <div class="lv">
        <img src="img/0.png" height="150px" width="250px"/>
        <p>Klik kotaknya</p>
      </div>
      <div class="ctn">
        <button class="btn next">[ Lanjut ]</button>
        <button class="btn send">[ ini jangan di pencet ]</button>
      </div>
    </div>
<script>
/*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

konten = [
  {
    gambar: "img/1.jpg",
    ucapan: "Hallo Din",
  },
  {
    gambar: "img/2.jpg",
    ucapan: "Happybirthday ya",
  },
  {
    gambar: "img/3.jpg",
    ucapan: "ultah yang keberapa si?,yang ke 28 ya! aishh tuanya_-",
  },
  {
    gambar: "img/4.jpg",
    ucapan: "alamak lupa dinda ultah ke berapa",
  },
  {
    gambar: "img/5.jpg",
    ucapan: "ngga deh bercanda,happy sweet seventeen ya^_^",
  },
  {
    gambar: "img/6.jpg",
    ucapan: "apa ya?",
  },
  {
    gambar: "img/7.jpg",
    ucapan: "ouu iya semoga yang disemogakan tersemogakan aminn...",
  },
  {
    gambar: "img/8.jpg",
    ucapan: "apalagi ya yah pkoknya gitu deh",
  },
  {
    gambar: "img/10.jpg",
    ucapan: "maaf ya tiba tiba gajelas gini dan juga maaf kalo ucapanya terlalu sederhana",
  },
  {
    gambar: "img/9.jpg",
    ucapan: "semoga kamu suka^_^",
  },
  {
    gambar: "img/12.jpg",
    ucapan: "ouu iya sekalian minta maaf karena dulu sempet ga percaya ama dinda,gomenn",
  },
  {
    gambar: "img/11.jpg",
  },
  {
    ucapan: "Have a fabulous birthday^_^",
  },
];

musik = "img/d.mp3";
nomorWhatsapp = "+6285777183633";

/*=========================*/
</script><script> DekaTutorial(konten, musik, nomorWhatsapp); </script> </body> </html>