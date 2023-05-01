<?php
    echo "UTS!";
    $link = mysqli_connect("Redlockdb", "root", "root", "Redlock");
    if(!$link){
        echo "Can\'t connect to the MySQL";
        exit;
    }
    echo "Success Connect to the MySQL!<br>";
    echo "Host Information: ".mysqli_get_host_info($link)."<br>";
    $r = $link->query("SELECT * FROM users");
    $data = [];
    while($rows = $r->fetch_assoc())array_push($data, $rows);
?>

<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<table style="width:500px">
  <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jabatan</th>
  </tr>
  <?php foreach($data as $s){ ?>
  <tr>
    <td><?=$s['ID']?></td>
    <td><?=$s['Nama']?></td>
    <td><?=$s['Alamat']?></td>
    <td><?=$s['Jabatan']?></td>
  </tr>
  <?php } ?>
</table>

</body>
</html>
