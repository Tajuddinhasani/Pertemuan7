<?php
    //Perulangan Pembagian
    for ($i = 0; $i < 10; $i++){
        echo "<h2>ini perulangan ke- $i</h2>";
    }

    //perulangan While
    $ulangi = 2;

    while($ulangi < 11){
        echo "<p>Ini adalah perulangan ke- $ulangi</p>";
    $ulangi++;   
    }

    //Perulangan Do

    $ulangi = 10;

    do{
        echo "<p> ini adalah Perulangan ke-$ulangi</p>";
        $ulangi--;

    } While ($ulangi >0);

    //Perulangan foreach

    $books =[
        "Panduan Belajar PHP Untuk Pemula",
        "Membangun Aplikasi Web dengan PHP",
        "Totorial PHP dan MySQL",
    ];

    echo "<h5>Judul Buku PHP:</h5>";
    echo "<ul>";
    foreach($books as $buku){
        echo "<li>$buku</li>";

    }
    echo "</ul>";


    //Tambahan Perulangan Bersarang
    for($i = 0; $i < 5; $i++){
        for($j = 0; $j < 10; $j++){
            echo"Ini perulangan ke ($i, $j)<br>";
        }
    }

    $i = 0;
    while ($i <10){
        for($j = 0; $j < 10 ; $j++){
            echo "Ini perulangan ke ($i,$j)<br>";
        }

        $i++;
    }


        $star=10;
        for( $a=$star;$a>0;$a--){
        for($i=1; $i<=$a; $i++){
            echo "&nbsp";
        }
        for($a1=$star;$a1>=$a;$a1--){
            echo"*";
        }
        echo"<br>";
        }
?>