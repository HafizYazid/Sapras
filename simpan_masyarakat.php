<html>
<link rel="stylesheet" href="simpan.css">
<script type="text/javascript">
    alert('Data Berhasil Disimpan, Silahkan Gunakan Untuk Login');
    window.location = "login.php";
</script>
</div>

</html>
<?php
// Make sure that the $_POST array contains the expected keys
if (isset($_POST['nik'], $_POST['nama'], $_POST['username'], $_POST['password'], $_POST['telp'])) {
    // Create a mysqli connection
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'sarana_prasarana';
    $link = mysqli_connect($host, $username, $password, $database);

    // Check if the connection was successful
    if (!$link) {
        die('Connection error: ' . mysqli_connect_error());
    }

    // Escape special characters to prevent SQL injection
    $nik = mysqli_real_escape_string($link, $_POST['nik']);
    $nama = mysqli_real_escape_string($link, $_POST['nama']);
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $telp = mysqli_real_escape_string($link, $_POST['telp']);

    // Insert the data into the database
    $query = "INSERT INTO masyarakat (nik, nama, username, password, telp) VALUES ('$nik', '$nama', '$username', '$password', '$telp')";
    $result = mysqli_query($link, $query);

    if ($result) {
        echo 'Data has been saved successfully.';
    } else {
        echo 'Error: ' . mysqli_error($link);
    }

    // Close the connection
    mysqli_close($link);
} else {
    echo 'One or more required fields are empty.';
}
?>

<?php
