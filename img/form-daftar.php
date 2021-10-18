<!DOCTYPE html>
<html>
<head>
    <title>pendaftaran siswa baru</title>
    
    <style type="text/css">
        *   {   
    margin:0;
    padding:0;
    font-family: sans-serif; 
}
.header {
    width: 100%;
    height: 100px;
    border: 1px solid;
    background-color: #ADD8E6; 
    color: #111;
    text-align: center;
    line-height: 100px;
    font-size: 30px; 
}
.content {
    width: 100%;
    height: 600px;
    border-top: 1px solid;
    background-color: #F5FFFA; 
}
.box-form {
    width: 50%;
    min-height: 500px;
    background-color: #eee;
    margin: 10px auto; 
    border: 1px dashed;
    padding: 2%;
} 
.box-form form input[type-text]{
    width: 90%;
    height: 30px;
    padding-left: 1%;
    font-size: 17px;
}
.box-form form input[type=submit]{
    width: 27%;  
    height: 30px;
    background-color: #3366ff;
    border:1px solid;
    color:#fff;
    cursor: pointer;
    
} 
.box-form form textarea{
    padding: 15;
    font-size: 17px;
}
 
.footer {
    width: 100%;
    height: 50px;
    border: 1px solid;
    background-color: #ADD8E6;
    color: #111;
    text-align: center;
    line-height: 50px;
    font-size: 20px;
} 
    </style> 
</head>
<body>
<div class="header">  
    ISI DATA DIRI ANDA

</div>

<div class="content">
    <div class="box-form">
        <h2>Formulir Pendaftaran Siswa Baru</h2>
        <form action="proses-pendaftaran.php" method="POST">
            Nama Lengkap<br>
            <input type="text" name="nama" required/><br><br>
            alamat<br>
            <input type="text" name="alamat" required/><br><br>
            Jenis Kelamin<br>
            <div class="jenis_gender">
            <input type="radio" name="jenis_kelamin" value="Laki-laki" required/>Laki-laki 
            <input type="radio" name="jenis_kelamin" value="Perempuan" required/>Perempuan<br>
        </div><br>
            Agama<br>
            <input type="text" name="agama" required/><br><br>
            Asal Sekolah<br>
            <input type="text" name="sekolah_asal" required/><br><br>
            <input type="submit" name="daftar"value="Daftar" />
    <?php if(isset($_GET['status'])): ?>
         <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

        <ul>
            <br>
            <p><a class="btn btn-primary" href="list-siswa.php">Daftar Siswa</a></p>
        </ul>
        </form>
        </div>
    </div>

</body>
</html> 