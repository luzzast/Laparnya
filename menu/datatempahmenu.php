<?php
require_once("../connection/su_conn.php");
if (!isset($_SESSION)) session_start();
$iduser = $_SESSION['iduser'];


$menukategori_query = "SELECT * FROM kategorimenu ORDER BY id ASC";
$menukategoriresult = $dbmysql->get_results($menukategori_query);
?>
<?php ?>
<?php
foreach ($menukategoriresult as $datakategori) {
?>

    <div class="alert alert-primary" role="alert">
        <?php echo $datakategori->nama;
        ?>
    </div>
    <div>
        <?php
        $id = $datakategori->id;
        $menu_query = "SELECT * FROM menu WHERE kategori_id=$id ORDER BY nama ASC";
        $menuresults = $dbmysql->get_results($menu_query);
        //$dbmysql->debug();

        ?>

        <table table class="table table-light table-sm">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Type</th>
                    <th scope="col">Price</th>


                </tr>
            </thead>

            <tbody>


                <!-- echo kategori menu -->
                <?php
                $bil = 0;

                foreach ($menuresults as $datamenu) {
                    $bil++;
                ?>
                    <tr>

                        <th scope="row"> <?php echo $bil; ?> </th>
                        <td><?php echo $datamenu->nama; ?></td>
                        <td><?php echo $datamenu->harga; ?></td>
                        <td>
                            <?php
                            if ($datamenu->status == 1) {
                            ?>
                                <button onclick="useraddtempahan(<?php echo $datamenu->id; ?>, <?php echo $iduser; ?>);" type="button" class="btn btn-success"><b>ADD</b> </button>
                            <?php } ?>
                        </td>
                    </tr>

                <?php } ?>

            </tbody>

        </table>
    </div>

<?php }
?>