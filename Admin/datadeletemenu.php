<?php
require_once("../connection/su_conn.php");

$updatequery = "SELECT menu.id, menu.nama, menu.harga, menu.status FROM menu";
$updateresults = $dbmysql->get_results($updatequery);

//$dbmysql->debug();
?>
<table class="table">
    <thead>
        <tr class="table-primary">
            <th scope="col">No </th>
            <th scope="col">Name</th>
            <th scope="col">Harga</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $no = 0;
        foreach ($updateresults as $updatedata) {
            $no = $no + 1;
        ?>

            <tr>
                <th scope="row"> <?php echo $no; ?></th>
                <td> <?php echo $updatedata->nama; ?></td>
                <td> <?php echo $updatedata->harga; ?></td>
                <td> <img onclick="su_callformdelete_menu(<?php echo $updatedata->id; ?>);" style="cursor:pointer" src="../Admin/image/Close-Program-icon.png" title="Delete Menu"></td> 

            </tr>
         

        <?php } ?>
    </tbody>

</table>