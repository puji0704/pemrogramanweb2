<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="fs-45">
        <?php
        include "visibility.php";

        $Visibility= new Visibility();
        $Visibility->tampilkanData();

        echo "<br>";

        echo "Akses di luar kelas <br> ";
        echo "public :".$Visibility->public . '<br>' ;
       // echo "private :".$Visibility->private .'<br>';
       // echo "protected :".$Visibility->protected . '<br>';
       echo "<br> <br>";
       echo "<h2> konsep pewarisan </h2>";

       include "mahasiswa.php";

       $mahasiswa = new mahasiswa ("emely smith");
       $mahasiswa->ucapsalam();

       $mahasiswainggris = new mahasiswaasing("john walker");
       $mahasiswainggris->ucapsalam();

        ?>
    </div>   
</body>
</html>
    