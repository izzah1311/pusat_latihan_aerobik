<table border="2px" align="center">
<tr><th>bil</th><th>nama</th><th>no kad pengenalan</th><th>email</th></tr>
<?php

    include ("config.php");
    $query = mysqli_query ($connect, "SELECT * FROM daftar ");
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