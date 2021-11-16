<!-- Nama   : Muh.dimas izulhaq hidayat -->
<!-- NIM    : 20051397075 -->
<!-- Kelas  : 2020A - D4 Manajemen Informatika -->
<!-- Praktikum 5 -->


<?php 
    require_once 'No 1.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    <title>Praktikum 5</title>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Praktikum 5</h2>
        <div class="row">
            <div class="col-5 mx-auto text-center border p-3 mt-2">
                <h4 class="">Soal 1</h4>
                <?= Info::info($manajer); ?>
                <br>
                <?= Info::infoKurir($kurir); ?>
            </div>
        </div>
    </div>


</body>

</html>