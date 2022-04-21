<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h2>Inputkan Data</h2>
     <hr>
     <form action="simpan.php" method="post">
          Nama wilayah :
          <select name="wilayah" id="">
               <option value="">DKI Jakarta</option>
               <option value="">Jawa Barat</option>
               <option value="">Banten</option>
               <option value="">Jawa Tengah</option>
          </select>
          <br>
          Jumlah Positif :
          <input type="text" name="positif" required>
          <br>
          Jumlah Dirawat :
          <input type="text" name="rawat" required>
          <br>
          Jumlah Sembuh :
          <input type="text" name="sembuh" required>
          <br>
          Jumlah Meninggal :
          <input type="text" name="meninggal" required>
          <br>
          Nama Operator :
          <input type="text" name="nama" required>
          <br>
          NIM Mahasiswa :
          <input type="text" name="nim" required>
          <td><input type="submit" value="simpan"></td>
 </tr>
 </table>
 </form>
</body>
</html>