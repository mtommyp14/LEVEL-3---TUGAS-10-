<?php
include("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $namaproduk=$_POST['namaproduk'];
    $harga=$_POST['harga'];
    $jumlah=$_POST['jumlah'];
    $keterangan=$_POST['keterangan'];

    $result = mysqli_query($mysqli, "UPDATE produk SET namaproduk='$namaproduk',harga='$harga',jumlah='$jumlah',keterangan='$keterangan' WHERE id=$id");

    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id=$id");

while($data_produk = mysqli_fetch_array($result))
{
    $namaproduk = $data_produk['namaproduk'];
    $harga = $data_produk['harga'];
    $jumlah = $data_produk['jumlah'];
    $keterangan = $data_produk['keterangan'];
}
?>


<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama Produk</td>
                <td><input type="text" name="namaproduk" value=<?php echo $namaproduk;?>></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr> 
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td><input type="text" name="keterangan" value=<?php echo $keterangan;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>