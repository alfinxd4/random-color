<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // definisikan nilai variabel
        $n1 = 70;
        $n2 = 90;
        $n3 = 80;
        $n4 = 85;
        // print data sebelum diurutkan
        echo "Nilai sebelum diurutkan : $n1 $n2 $n3 $n4 <br>";
        // buat variabel sementara untuk menyimpan nilai pertama dan acuan pengecekan
       $temp =  $n1;
       // buat variabel untuk menyimpan nilai setelah dicek dari temp
       $nilai1;
       $nilai2;
       $nilai3;
       $nilai4;
       // mengecek nilai terkecil -> terbesar
       // mengecek n1 dengan nilai lainnya
        if ($temp < $n2 && $temp < $n3 && $temp < $n4) {
          // tetapkan nilai1
          $nilai1 = $temp;
          // tetapkan temp menjadi n2
          $temp = $n2;
        }
        // mengecek n2 dengan nilai lainnya
        if ($temp > $n1 && $temp > $n3 && $temp > $n4) {
            // tetapkan nilai2
            $nilai4 = $temp;
            // tetapkan temp menjadi n3
            $temp = $n3;
        }
         // mengecek n3 dengan nilai lainnya
        if ($temp > $n1 && $temp < $n2 && $temp < $n4) {
            // tetapkan nilai3
            $nilai2 = $temp;
            // tetapkan temp menjadi n4
            $temp = $n4;
          }
        // mengecek n4 dengan nilai lainnya
        if ($temp > $n1 && $temp < $n2 && $temp > $n3) {
            // tetapkan nilai4
            $nilai3 = $temp;
            // kembalikan temp menjadi n1
            $temp = $n1;
          }
        //   print nilai diurutkan
         echo "Nilai diurutkan Terkecil - Terbesar : $nilai1 $nilai2 $nilai3 $nilai4 <br>";
        // mengecek nilai terbesar -> terkecil
        // mengecek n1 dengan nilai lainnya
        if ($temp < $n2 && $temp < $n3 && $temp < $n4) {
            // tetapkan nilai1
            $nilai4 = $temp;
            // tetapkan temp menjadi n2
            $temp = $n2;
        }
        // mengecek n2 dengan nilai lainnya
        if ($temp > $n1 && $temp > $n3 && $temp > $n4) {
            // tetapkan nilai2
            $nilai1 = $temp;
            // tetapkan temp menjadi n3
            $temp = $n3;
        }
        // mengecek n3 dengan nilai lainnya
        if ($temp > $n1 && $temp < $n2 && $temp < $n4) {
            // tetapkan nilai3
            $nilai3 = $temp;
            // tetapkan temp menjadi n4
            $temp = $n4;
        }
        // mengecek n4 dengan nilai lainnya
        if ($temp > $n1 && $temp < $n2 && $temp > $n3) {
            // tetapkan nilai4
            $nilai2 = $temp;
            // kembalikan temp menjadi n1
            $temp = $n1;
          }
        //   print nilai diurutkan
        echo "Nilai diurutkan Terbesar - Terkecil : $nilai1 $nilai2 $nilai3 $nilai4 <br>";
    ?>
</body>
</html>