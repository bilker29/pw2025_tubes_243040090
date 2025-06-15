<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "perpustakaan";
$connect = mysqli_connect($host, $username, $password, $database);

function signUp($data) {
  global $connect;
  
  $nim = htmlspecialchars($data["nim"]);
  $kodeMember = htmlspecialchars($data["kode_member"]);
  $nama = htmlspecialchars(strtolower($data["nama"]));
  $password = mysqli_real_escape_string($connect, $data["password"]);
  $confirmPw = mysqli_real_escape_string($connect, $data["confirmPw"]);
  $jk = htmlspecialchars($data["jenis_kelamin"]);
  $semester = htmlspecialchars($data["semester"]);
  $fakultas = htmlspecialchars($data["fakultas"]);
  $noTlp = htmlspecialchars($data["no_tlp"]);
  $tglDaftar = $data["tgl_pendaftaran"];
  
  $nimResult = mysqli_query($connect, "SELECT nim FROM member WHERE nim = $nim");
  if(mysqli_fetch_assoc($nimResult)) {
    echo "<script>
    alert('NIM sudah terdaftar, silahkan gunakan NIM lain!');
    </script>";
    return 0;
  }
  
  $kodeMemberResult = mysqli_query($connect, "SELECT kode_member FROM member WHERE kode_member = '$kodeMember'");
  if(mysqli_fetch_assoc($kodeMemberResult)){
    echo "<script>
    alert('Kode member telah terdaftar, silahkan gunakan kode member lain!');
    </script>";
    return 0;
  }
  
  if($password !== $confirmPw) {
    echo "<script>
    alert('Password dan konfirmasi password tidak sesuai');
    </script>";
    return 0;
  }
  
  $password = password_hash($password, PASSWORD_DEFAULT);
  
  $querySignUp = "INSERT INTO member VALUES($nim, '$kodeMember', '$nama', '$password', '$jk', '$semester', '$fakultas', '$noTlp', '$tglDaftar')";
  mysqli_query($connect, $querySignUp);
  return mysqli_affected_rows($connect);
}
?>