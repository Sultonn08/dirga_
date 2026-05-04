<?php

function mulai()
{
    echo "Selamat Datang di Materi 3 : Fungsi <br><br>" ;
}

mulai();

function tambah($a, $b)
{
    return $a + $b;
}

function kali($a, $b)
{
    return $a * $b;
}

function kurang($a, $b)
{
    return $a - $b;
}

function bagi($a, $b)
{
    if ($b == 0) {
        return "Tidak bisa dibagi 0";
    }
    return $a / $b;
}
?>

<form method="POST">
    <input type="number" name="angka1" required>
    <input type="number" name="angka2" required>
    <br><br>

    <button type="submit" name="operasi" value="tambah">+</button>
    <button type="submit" name="operasi" value="kurang">-</button>
    <button type="submit" name="operasi" value="kali">×</button>
    <button type="submit" name="operasi" value="bagi">÷</button>
</form>

<?php

if (isset($_POST['operasi'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operasi = $_POST['operasi'];

    if ($operasi == "tambah") {
        echo "Hasil: " . tambah($angka1, $angka2);
    } elseif ($operasi == "kurang") {
        echo "Hasil: " . kurang($angka1, $angka2);
    } elseif ($operasi == "kali") {
        echo "Hasil: " . kali($angka1, $angka2);
    } elseif ($operasi == "bagi") {
        echo "Hasil: " . bagi($angka1, $angka2);
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="login">Login</button>
</form>
<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo login($username, $password);
}


function login($username, $password)
{
    if ($username == "gaul" && $password == "gaul123") {
        return "Login Berhasil";
    } else {
        return "Login Gagal";
    }
} 

?>