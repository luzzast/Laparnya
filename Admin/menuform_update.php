<?php
require_once("../connection/su_conn.php");
$su_menuid = $_POST['menuid'];

$query_row = "SELECT * FROM menu WHERE id = $su_menuid";
$row_record = $dbmysql->get_row($query_row);
?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Update Menu</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <hr>

    <form method="post" action="javascript:su_update_form();">
        <div class="mb-3">
            <label> Menu Name </label>
            <input type="text" class="form-control" id="txt_nama" value="<?php echo $row_record->nama; ?>" placeholder="Enter menu name" required>
        </div>

        <div class="mb-3">
            <label> Category Id (1 for Nasi Lemak / 2 for Nasi Kerabu)</label>
            <input type="text" class="form-control" id="txt_kategori_id" value="<?php echo $row_record->kategori_id; ?>" placeholder="Enter kategori menu" required>
        </div>

        <div class="mb-3">
            <label> Price </label>
            <input type="text" class="form-control" id="txt_harga" value="<?php echo $row_record->harga; ?>" placeholder="Enter price menu" required>
        </div>

        <input id="hidden_menuid" type="hidden" value="<?php echo $su_menuid;?>">
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>