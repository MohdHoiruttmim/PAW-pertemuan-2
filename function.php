<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function</title>
</head>
<body>
  <?php
    echo "<h1>Tekanan Hidrostatis Zat Cair</h1>";
    function tekanan_hidrostatis($jenisZatCair, $gravitasi, $kedalaman) {
      $res = $jenisZatCair * $gravitasi * $kedalaman;
      echo "<br>tekanan hidrostatisnya adalah: <b>".$res. "</b> Pa";
    }

    // tekanan_hidrostatis(massa-jenis-zat-cair, percepatan-gravitasi, kedalam)
    tekanan_hidrostatis(600, 10, 20);
    tekanan_hidrostatis(1000, 9.8, 2);
    tekanan_hidrostatis(700, 7.7, 1.5);
    
  ?>
</body>
</html>