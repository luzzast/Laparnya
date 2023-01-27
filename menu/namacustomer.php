<?php
require_once("../connection/su_conn.php");
if (!isset($_SESSION)) session_start();
$iduser = $_SESSION['iduser'];

$querymenu = "SELECT
        sesi_tempahan.nama,
        sesi_tempahan.tarikh,
        sesi_tempahan.tel,
        sesi_tempahan.nomeja
        FROM
        sesi_tempahan
        WHERE
        sesi_tempahan.id = $iduser";
$results_menu2 = $dbmysql->get_results($querymenu);
//$dbmysql->debug();
?>

<table class="table">
<thead>
        <tr class="table-dark">
            <th scope="col">>>></th>
            <th scope="col">Customer Name:</th>
            <th scope="col">Date/Time:</th>
            <th scope="col">No tel:</th>
            <th scope="col">No Table:</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php
        $no = 0;

        foreach ($results_menu2 as $datanama) {
            $no = $no + 1;
        ?>
            <tr>
                <th scope="row"> <?php echo $no; ?></th>
                <th scope="row"> <?php echo $datanama->nama; ?></th>
                <th scope="row"> <?php echo $datanama->tarikh; ?></th>
                <th scope="row"> <?php echo $datanama->tel; ?></th>
                <th scope="row"> <?php echo $datanama->nomeja; ?></th>

            <?php } ?>




    </tbody>


</table>