<title>PAPARAN</title>
<center>
<h1>PAPARAN</h1>
<style>
    .button {
        margin-top: 10px;
    }
    body {
        background-color: #FFDFD3; /* warna background sistem */
    }
    table {
        margin-top: 50px;
        background-color: white;
    }
    h1 {
        margin-top: 150px;
    }
</style>
<body>

<table border="2px" align="center">
<tr><th>BIL</th><th>NAMA</th><th>NOMBOR KAD PENGENALAN</th><th>EMAIL</th></tr>
<?php

    include ("config.php"); //menyambungkan ke db
    $query = mysqli_query ($connect, "SELECT * FROM daftar ");//memaparkan senarai yang telah daftar
    if (mysqli_num_rows ($query)>0){
        while ($row = mysqli_fetch_assoc ($query)){

            $nama = $row ['nama'];
            $nokp = $row ['nokp'];
            $email = $row ['email'];
            $id = $row ['id'];
        
   
    ?>
    <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $nama ?></td>
        <td><?php echo $nokp ?></td>
        <td><?php echo $email ?></td>
    </tr>
<?php
 }
}
?>
</table>
<div class="button">
<a href="index.html"><button>BMI</button></a></center>
</div>
</body>
