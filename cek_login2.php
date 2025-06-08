<?php
require 'koneksi.php'; // assuming this file contains a database connection

$user = $_POST['username']; // assuming this is the name of the username input in your login form
$pass = $_POST['password']; // assuming this is the name of the password input in your login form

$conn = mysqli_connect("localhost", "root", "", "sarana_prasarana"); // replace with your database credentials
$query = "SELECT * FROM petugas WHERE username='$user' AND password='$pass'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) 
{
    $data = mysqli_fetch_array($result);
    
    if ($data['level']=="admin")
    {
    session_start();
    $_SESSION['id_petugas'] = $data['id_petugas'];
    $_SESSION['user'] = $user; // assuming the name of the column containing the user's name is 'nama'
    $_SESSION['nama'] = $data['nama_petugas'];
    $_SESSION['level'] = $data['level'];

    header('location:admin/admin.php');
    }
        else if ($data['level']=="petugas") 
            {
                session_start();
    $_SESSION['user'] = $user; // assuming the name of the column containing the user's name is 'nama'
    $_SESSION['nama'] = $data['nama_petugas'];
    $_SESSION['level'] = $data['level'];

    header('location:petugas/petugas.php');
            }
        
    }
 else {
?>
    <script type="text/javascript">
        alert('Username atau Password Tidak Ditemukan');
        window.location = "login2.php";
    </script>
<?php
}
?>