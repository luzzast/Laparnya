<?php
require_once("../connection/su_conn.php");
$query = "SELECT
            sesi_tempahan.id,
            sesi_tempahan.nama,
            sesi_tempahan.tel,
            sesi_tempahan.nomeja,
            sesi_tempahan.tarikh,
            sesi_tempahan.`status`
            FROM
            sesi_tempahan
            WHERE sesi_tempahan.`status` = 0
            ORDER BY
            sesi_tempahan.id DESC";
$results = $dbmysql->get_results($query);
//$dbmysql->debug();
?>
<table class="table table-light">
    <thead>
        <tr>
            <th scope="col">No Order</th>
            <th scope="col">Name</th>
            <th scope="col">Table No.</th>
            <th scope="col">Status</th>
            <th scope="col">Option</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($results as $mydata) {
        ?>
            <tr <?php if ($mydata->status == 2) echo 'class="table-success"'; ?>>
                <th scope="row"><?php echo $mydata->id; ?></th>
                <td><?php echo $mydata->nama; ?></td>
                <td><?php echo $mydata->nomeja; ?></td>
                <td><?php if ($mydata->status == 1) echo "Preparing";
                    else echo "Completed"; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <button onclick="prepare(<?php echo $mydata->id; ?>);" type="button" class="btn btn-danger">Prepare</button>
                        <button onclick="complete(<?php echo $mydata->id; ?>);" type="button" class="btn btn-success">Complete</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <?php
                    $querymenu = "SELECT
                            menutempahan.sesi_id,
                            menutempahan.menu_id,
                            menutempahan.kuantiti,
                            menu.harga,
                            menu.nama
                            FROM
                            menutempahan
                            INNER JOIN menu ON menutempahan.menu_id = menu.id
                            WHERE
                            menutempahan.sesi_id = $mydata->id";
                    $results_menu = $dbmysql->get_results($querymenu);
                    //$dbmysql->debug();
                    ?>
                    <table class="table table-primary table-sm">

                        <tbody class="table-group-divider">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <?php
                            $bil = 0;
                            $bigtotal = 0;
                            foreach ($results_menu as $datamenu) {
                                $bil++;
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $bil; ?></th>
                                    <td><?php echo $datamenu->nama; ?></td>
                                    <td><?php echo $datamenu->kuantiti; ?></td>
                                    <td><?php echo $datamenu->harga; ?></td>
                                    <?php $total = $datamenu->kuantiti * $datamenu->harga;
                                    $bigtotal = $bigtotal + $total;
                                    ?>
                                    <td><?php echo $total; ?></td>
                                </tr>

                            <?php } ?>
                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total:</td>
                                <td><?php echo $bigtotal; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

        <?php } ?>

    </tbody>
</table>