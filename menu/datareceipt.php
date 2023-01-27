<?php
require_once("../connection/su_conn.php");
if (!isset($_SESSION)) session_start();
$iduser = $_SESSION['iduser'];

$cartuser_query = "SELECT
Count(menutempahan.kuantiti) AS kuantiti,
menutempahan.menu_id,
menutempahan.sesi_id,
menu.nama,
Sum(menu.harga) AS totalharga
FROM
menutempahan
INNER JOIN sesi_tempahan ON menutempahan.sesi_id = sesi_tempahan.id
INNER JOIN menu ON menutempahan.menu_id = menu.id
WHERE
menutempahan.sesi_id = $iduser
GROUP BY
menutempahan.menu_id
";

$resultscart = $dbmysql->get_results($cartuser_query);
//$dbmysql->debug();



?>

<table class="table">
    <thead>
        <tr class="table-primary">
            <th scope="col">No </th>
            <th scope="col">Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Total (RM)</th>
            <th></th>
        </tr>
    </thead>
    <tbody>


        <?php
        $no = 0;
        $bigtotal2 = 0;
        foreach ($resultscart as $datacart) {
            $no = $no + 1;
        ?>
            <tr>
                <th scope="row"> <?php echo $no; ?></th>
                <td> <?php echo $datacart->nama; ?></td>
                <td> <?php echo $datacart->kuantiti; ?></td>
                <td> <?php echo $datacart->totalharga; ?></td>
                <?php $total = $datacart->kuantiti * $datacart->totalharga;
                $bigtotal2 = $bigtotal2 + $total;
                ?>
                <td><?php echo $total; ?></td>
                <td> </td>
            </tr>

        <?php } ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Total:</td>
            <td><?php echo $bigtotal2; ?></td>
        </tr>





    </tbody>

</table>