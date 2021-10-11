<form method="post" action="">
    Masukkan Bilangan  = 
    <br>
    <input type="text" name="bilangan" placeholder="Masukkan Bilangan Anda Disini ...">
    <br>
    <input type="submit" name="submit" value="Tekan disini">

</form>

<?php
if(isset($_POST['submit']))
    {
        $bilangan = $_POST['bilangan'];
            if($bilangan >= 0){
                echo $bilangan . " merupakan bilangan Positif";
            } elseif ($bilangan >= 2){
                echo $bilangan . " merupakan bilangan Negatif"; 
            }
           
             if ($bilangan <= -1) {
                echo $bilangan . " merupakan bilangan Ganjil";
            } elseif ($bilangan <= -2) {
                echo $bilangan . " merupakan bilangan Genap";
            }
                
    }
    ?>
