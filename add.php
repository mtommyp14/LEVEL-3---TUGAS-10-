<?php
    // error_reporting(0);
?>
<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Product</td>
                <td><input type="text" name="namaproduk"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td>Jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td><input type="text" name="keterangan"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $namaproduk= $_POST['namaproduk'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $keterangan = $_POST['keterangan'];

  
        include("config.php");


        $result = mysqli_query($mysqli, "INSERT INTO produk(namaproduk,harga,jumlah,keterangan) VALUES('$namaproduk','$harga','$jumlah','$keterangan')");

    
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>