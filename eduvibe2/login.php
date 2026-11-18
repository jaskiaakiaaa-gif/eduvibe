
<?php
session_start();

// koneksi database
$conn = mysqli_connect("localhost", "root", "", "dbeduvibe");

if(!$conn){
    die("Koneksi gagal: " . mysqli_connect_error());
}

if(isset($_POST['login'])){

    $user = $_POST['nama'];
    $pass = $_POST['password'];

    $result = mysqli_query($conn,
    "SELECT * FROM users WHERE nama='$user'");

    if(mysqli_num_rows($result) == 1){

        $row = mysqli_fetch_assoc($result);

        if(password_verify($pass, $row['password'])){

            $_SESSION['login'] = true;
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['mood'] = $row['mood'];

            header("Location: materi.php");
            exit;

        } else {
            echo "<script>alert('Password salah!');</script>";
        }

    } else {
        echo "<script>alert('Username tidak ditemukan!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login EduVibe</title>

    <style>

        body{
            font-family:sans-serif;
            background:#06132a;
            color:white;
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
            margin:0;
        }

        .box{
            background:rgba(255,255,255,0.08);
            padding:30px;
            border-radius:20px;
            width:350px;
            text-align:center;
            border:1px solid rgba(255,255,255,0.1);
        }

        h2{
            margin-bottom:20px;
        }

        input{
            width:100%;
            padding:12px;
            margin:10px 0;
            border-radius:10px;
            border:none;
            background:rgba(255,255,255,0.1);
            color:white;
            box-sizing:border-box;
        }

        input::placeholder{
            color:#ccc;
        }

        button{
            background:#00c3ff;
            color:#06132a;
            border:none;
            padding:12px;
            width:100%;
            border-radius:10px;
            font-weight:bold;
            cursor:pointer;
            margin-top:10px;
            transition:0.3s;
        }

        button:hover{
            opacity:0.8;
        }

        .link{
            margin-top:15px;
            font-size:14px;
        }

        .link a{
            color:#00c3ff;
            text-decoration:none;
            font-weight:bold;
        }

    </style>

</head>
<body>

    <div class="box">

        <h2>Login EduVibe</h2>

        <form method="POST">

            <input 
                type="text" 
                name="nama" 
                placeholder="Masukkan Nama"
                required
            >

            <input 
                type="password" 
                name="password" 
                placeholder="Masukkan Password"
                required
            >

            <button type="submit" name="login">
                Login Sekarang
            </button>

        </form>

        <div class="link">
            Belum punya akun?
            <a href="register.php">Daftar</a>
        </div>

    </div>

</body>
</html>
