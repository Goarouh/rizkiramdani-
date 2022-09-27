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
<center>
           <nav>
               <div class="logo">
                   <h4>Rizki Ramdani</h4>
               </div>
               
               
               <ul>
           <li><a href="">home</a> </li>
           <li><a href="produk.php">produce</a> </li>
           <li><a href="">contak</a> </li>
               </ul>
               </nav>
               </table>
    <hr>
    </table>
    <table border="1">
        <th>Foto</th>
        <th>Identitas</th>
<?php foreach( $data as $d ) : ?>
              <tr>
                <td> <img src="<?= $d["foto"]; ?>" width="50">
                <td> <?= $d["identitas"]; ?></td>
                  </td>
                </tr>
<?php endforeach; ?>
</center>
 </html>