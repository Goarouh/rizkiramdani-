<?php
include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Rizki</title>
    <link 
    href="https://fonts.googleapis.com/css2?family=Montserrat&family-Pacifico&display=swap"rel="stylesheet"/>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
           <nav>
               <div class="logo">
                   <h4>Rizki Ramdani</h4>
               </div>
               
               
               <ul>
           <li><a href="index.php">home</a> </li>
           <li><a href="produk.php">produce</a> </li>
           <li><a href="">contak</a> </li>
               </ul>
               </nav>
               </table>
    <hr>
    </table>
    <table border="1">
        <th><img src="Bakso.jpg" width="60" height="50" alt="Baso"/></th>
        <th><img src="coklat.png" width="50" height="50" alt="Coklat"/></th>
        <th><img src="teh.jpg" width="50" height="50" alt="teh"/></th>
<?php foreach( $produk as $d ) : ?>
  <tr>
    <td> <?= $d["identitas"];  ?><br> <center><a href="https://wa.me/6285812720086">
        <button>Pesan</button></a></center</td>
    <td> <?= $d["identi"]; ?>
    <br> <center><a href="https://wa.me/6285812720086">
        <button>Pesan</button></a></center></td>
    <td> <?= $d["iden"]; ?> 
        <br><center><a href="https://wa.me/6285812720086">
    <button>Pesan</button></a></center</td>
                  </td>
                </tr>
<?php endforeach; ?>
 </html>