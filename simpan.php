<?php
 /*
 source: belajarwebpedia.com
 */
 $nama= trim($_POST['nama']);
 $positif = trim($_POST['positif']);
 $dirawat = trim($_POST['rawat']);
 $sembuh = trim($_POST['sembuh']);
 $wilayah = trim($_POST['wilayah']);
 $meninggal = trim($_POST['meninggal']);
 $nim = trim($_POST['nim']);
 $namafile = "data.txt"; 

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="style.css">
 </head>
 <body>
     <div class="atas">
         <h2>Data Pemantauan Covid19 Wilayah DKI Jakarta <?php echo "$wilayah" ?></h2>

         <h2>Per <?php echo date('l, d-m-Y  h:i:s a'); ?> </h2>
         <h2><?php echo"$nama" ?> / <?php echo "$nim" ?></h2>
         </div>
         <table width="100%" border="">
             <tr>
                <th>Positif</th>
                <th>Dirawat</th>
                <th>Sembuh</th>
                <th>Meninggal</th>

             </tr>
             <tr>
                <td><?php echo "$positif" ?></td>
                <td><?php echo "$dirawat" ?></td>
                <td><?php echo "$sembuh" ?></td>
                <td><?php echo "$meninggal" ?></td>
             </tr>

         </table>

 </body>
 </html>