<?php

    require "connect.php";

    $sql = "SELECT * FROM tb_member ORDER BY user";

    $result = mysqli_query($con, $sql);


?>

<table>
    <thead>
        <tr>    
            <td>No.</td>
            <td>User</td>
            <td>Age</td>
            <td>Sex</td>
            <td>Fav</td>
            <td>Prov</td>
        </tr>
    </thead>
    <tbody>

        <?php
            $i = 1;
            foreach (mysqli_fetch_all($result) as $rows) {
        ?>
        <tr>
            <td><?= $i ?>.</td>
            <td><?=$rows[0]?></td>
            <td><?=$rows[1]?></td>
            <td><?=$rows[2]?></td>
            <td><?=$rows[3]?></td>
            <td><?=$rows[4]?></td>
            <td><a href="del.php?user=<?=$rows[0]?>"> ลบ </a></td>
            <td><a href="edit.php?user=<?=$rows[0]?>"> แก้ไข </a></td>
        </tr>
        <?php 
            $i++;
            }
            unset($i);
        ?>
    </tbody>

    
</table>

<a href="../register.html">เพิ่มข้อมูล</a>