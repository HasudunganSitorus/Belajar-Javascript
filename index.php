<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<?php 

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'frontend';

        // Mengkoneksikan kedalam serve

    $con = new mysqli("localhost", "root", "", "frontend");
// Check koneksi
if ($con->connect_error) {
die("Connection failed". $con->connect_error);  
}
    // Mengambil data dari database
        $sql = "SELECT * FROM students";
        
        $result = $con->query($sql);
     
     if ($result -> num_rows > 0) {
    // Keluarkan data yang ada
     while ($row = $result->fetch_assoc()) {
            echo  $row["name"]."<hr>";     
         }
    }
?>
</body>
<h3 class="text-center"> <small> Pengulangan menggunakan while </small></h3>
    <?php 
        $aplikasi = ['getAkademik', 'getFinansial', 'getPerizinan', 'eCampuz', 'eOviz'];
        $arrayAplikasi = count($aplikasi);   
        
        $i = 0;

        while ($i < $arrayAplikasi) {
            echo $aplikasi[$i]."<hr>";
        $i++;
        }

     ?>
<h3 class="text-center"><small>LOOPING CONDITION</small></h3>
    <?php 

$nilaiAwal = 0;
$nilai = 50;
$kelipatan3 =3;
$kelipatan5 =5;
    for($i = 0; $i <= $nilai; $i++){
        if ($kelipatan = $i % $kelipatan3 == $nilaiAwal) {
            echo" Kelipatan nilai "."[ ". $kelipatan3." ]"." dari nilai ".$nilai." adalah nilai "."[ ". $i ." ]".' Foo'."<br>";
        }
        elseif  ($kelipatan = $i % $kelipatan5 == $nilaiAwal) {
            echo" Kelipatan nilai "."[ ". $kelipatan5." ]"." dari nilai ".$nilai." adalah nilai "."[ ". $i ." ]".' Bar'."<br>";
        }
    }
     ?>
<h3 class="text-center"><small>Operator Logic Pembagian</small></h3>
    <?php 

      function Pembagian($angkaA, $angkaB){
            $a = $angkaA;
            $b = $angkaB;
            $hasil = $a /= $b;
            return $hasil;
        }
echo "hasil Pembagian dari a = 8, dan b = 4 adalah "."[".Pembagian(8, 4)."]";

     ?>
</html>