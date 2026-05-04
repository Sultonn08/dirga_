<form method ="post" >
    masukan angka :   <input type="number" name="angka"><br>
    <input type="submit" value="kirim">
</form>

<?php
if (isset($_POST['angka'])) {
    $data=$_POST['angka'];  
    for ($i=1; $i <= $data; $i++) {
        echo "Angka: $i <br>";
    }
    if ($data % 2 == 0) {
        echo "Angka $data adalah bilangan genap.";
    } else {
        echo "Angka $data adalah bilangan ganjil.";
    }
}
 ?>

 //Looping while dan do while

 <?php
if (isset($_POST['angka'])){
    $data = $_POST['angka'];
    $i = 1;
    while ($i <= $data){
        echo "angka $i <br>";
        $i++;
    }
}
 ?>

 <?php
echo "<br> Ini Perulangan Do While <br>";
if (isset($_POST['angka'])) {
    $data = $_POST['angka'];
    $i = 1;
    do {
        echo "Angka: $i <br>";
        $i++;
    } while ($i <= $data);
}
?>