<?php
  date_default_timezone_set('Asia/Jakarta');
  if(isset($_POST['submit'])){
    $nama = mysqli_real_escape_string($link, $_POST['nama']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $ttl = mysqli_real_escape_string($link, $_POST['ttl']);
    $telp = mysqli_real_escape_string($link, $_POST['telp']);
    $alamat = mysqli_real_escape_string($link, $_POST['alamat']);
    $pesan = mysqli_real_escape_string($link, $_POST['pesan']);


    $sql = "INSERT INTO tamu (nama, email, ttl, telp, alamat, pesan) VALUES('$nama','$email','$ttl','$telp','$alamat','$pesan')";

    if(mysqli_query($link, $sql)){ ?>
    <script>
      alert('Data berhasil ditambahkan!');
      document.location.href = "tamu.php";
    </script>
    <?php } else { echo " $sql. " . mysqli_error($link); } 
  }
?>