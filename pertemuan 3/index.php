<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 3</title>
</head>
<body>
    <!-- PHP dalam HTML-->
    <?php echo "<h1>Identitas Diri</h1>"; ?>


    <?php
    $namadepan = "Herni";
    $namablk = " Irma Wati";
    $fakultas = "Teknik Informatika";
    $hobi = "Menggambar";
    $alamat = "Jatiuwung Tangerang";
    $artis = "Kim Taehyung";
    $lagu = "Zero O'clock-BTS";
    $ig = "@jintaa_";
    $email = "herniirmawati10@gmail.com";

     ?>

    <p>Nama : <?php echo $namadepan ." ". $namablk; ?></p>
    <p><?php echo "Nim : "; var_dump(1904030064); echo "<br>"; ?>
    <p>Fakultas : <?php echo $fakultas; ?></p>
    <p>Hobby : <?php echo $hobi; ?></p>
    <p>Alamat : <?php echo $alamat; ?></p>
    <p><?php echo "Umur : "; var_dump(0x14); echo "<br>"; ?>
    <p>Artis favorit : <?php echo $artis; ?></p>
    <p>Lagu favorit : <?php echo $lagu; ?></p>
    <p>Instagram : <?php echo $ig; ?></p>
    <p>Email : <?php echo $email ?></p>


    

    
</body>
</html>