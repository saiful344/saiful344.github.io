<?php
require '../function.php';
$surat2= query("SELECT * FROM artikel");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Suratku</title>

    <!-- Bootstrap -->
    <link href="..//css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="..//css/utama.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
      <body>
        <div class="gg">
          <ul>
            <li><a class="active" href="index2.php">Home</a></li>
            <li><a href="user.php">Surat Pengantar</a></li>
            <li><a href="kontak.php">Komentar</a></li>

          </ul>
        </div>
        <nav>
            <ul style="float:right;list-style-type:none;">
              <li> <a href="..//login/logout1.php">Log out</a></li>
            </ul>
          </nav>
      <div id="isi">
          <?php $i = 1;?>
          <?php foreach ($surat2 as $row):?>
              <h1><?=$row ["judul"];?></h1>
                <p><?=$row ["artikel"];?></p>
            <?php $i++;  ?>
          <?php endforeach;?>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/hasil.js"></script>
  </script>
  </body>
</html>
