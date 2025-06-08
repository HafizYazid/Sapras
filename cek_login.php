<?php
require 'koneksi.php'; // assuming this file contains a database connection

$user = $_POST['username']; // assuming this is the name of the username input in your login form
$pass = $_POST['password']; // assuming this is the name of the password input in your login form

$conn = mysqli_connect("localhost", "root", "", "sarana_prasarana"); // replace with your database credentials
$query = "SELECT * FROM masyarakat WHERE username='$user' AND password='$pass'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_array($result);
    session_start();
    $_SESSION['nama'] = $user; // assuming the name of the column containing the user's name is 'nama'
    $_SESSION['nik'] = $data['nik'];
    header('location: masyarakat.php');
} else {
?>
    <script type="text/javascript">
        alert('Username atau Password Tidak Ditemukan');
        window.location = "login.php";
    </script>
<?php
}
?>