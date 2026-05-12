<form action="" method="post">
    username : <input type="text" name="username"><br>
    password : <input type="password" name="password"><br>
    Nama : <input type="text" name="nama"><br>
    email : <input type="email" name="email"><br>
    <input type="submit" value="kirim data" name="kirim"><br>
</form>

<?php
include 'koneksi.php';
if (isset($_POST['kirim'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $query = "INSERT INTO user (username, password, nama, email) VALUES ('$username', '$password', '$nama', '$email')";
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "data gagal ditambahkan";
    }
}
?>


<table border ="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>id</th>
        <th>username</th>
        <th>password</th>
        <th>nama</th>
        <th>email</th>
        <th>aksi</th>
    <tr>

<?php
// Ambil semua data
$query = mysqli_query($koneksi, "SELECT * FROM user");

while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>
            <a href='materi4.php?id=" . $row['id'] . "'>Hapus</a> | 
            <a href='materi4.php?edit=" . $row['id'] . "'>Edit</a>
          </td>";
    echo "</tr>";
}
?>

<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM user WHERE id='$id'";
    if (mysqli_query($koneksi, $query)) {
        header("Location: materi4.php");
        exit();
    }
}

if (isset($_POST['update'])) {

}

if (isset($_GET['edit'])) {
    $id  = $_GET['edit'];
    $row_edit = getDataById($koneksi, $id); 
}
?>


<?php
// Function untuk mengambil data by ID
function getDataById($koneksi, $id) {
    $id = mysqli_real_escape_string($koneksi, $id);
    $query = "SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_assoc($result);
}

// Function untuk update data
function updateData($koneksi, $id, $username, $password, $nama, $email) {
    $id       = mysqli_real_escape_string($koneksi, $id);
    $username = mysqli_real_escape_string($koneksi, $username);
    $password = mysqli_real_escape_string($koneksi, $password);
    $nama     = mysqli_real_escape_string($koneksi, $nama);
    $email    = mysqli_real_escape_string($koneksi, $email);

    $query = "UPDATE user SET 
                username='$username', 
                password='$password', 
                nama='$nama', 
                email='$email' 
              WHERE id='$id'";

    return mysqli_query($koneksi, $query);
}

// Proses UPDATE kalau form di-submit
if (isset($_POST['update'])) {
    $id       = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama     = $_POST['nama'];
    $email    = $_POST['email'];

    if (updateData($koneksi, $id, $username, $password, $nama, $email)) {
        echo "Data berhasil diupdate";
        header("Location: materi4.php");
        exit();
    } else {
        echo "Data gagal diupdate";
    }
}

// Tampil form edit kalau tombol Edit diklik
if (isset($_GET['edit'])) {
    $id  = $_GET['edit'];
    $row = getDataById($koneksi, $id);
}
?>

</table>

<!-- Form ini hanya muncul kalau tombol Edit diklik -->
<?php if (isset($_GET['edit']) && isset($row)) : ?>
<h3>Tempat untuk edit data anda</h3>
<form method="POST" action="materi4.php">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    
    <label>Username:</label><br>
    <input type="text" name="username" value="<?= $row['username'] ?>"><br><br>
    
    <label>Password:</label><br>
    <input type="text" name="password" value="<?= $row['password'] ?>"><br><br>
    
    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?= $row['nama'] ?>"><br><br>
    
    <label>Email:</label><br>
    <input type="text" name="email" value="<?= $row['email'] ?>"><br><br>
    
    <button type="submit" name="update">Update</button>
    <a href="materi4.php">Batal</a>
</form>
<?php endif; ?>

