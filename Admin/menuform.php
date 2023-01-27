

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Add Menu</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <hr>

    <form method="post" action="javascript:su_submit_form();">
        <div class="mb-3">
            <label> Menu Name </label>
            <input type="text" class="form-control" id="txt_nama" placeholder="Enter menu name" required>
        </div>

        <div class="mb-3">
            <label> Category Id (Enter 1 for Nasi Lemak / 2 for Nasi Kerabu)</label>
            <input type="text" class="form-control" id="txt_kategori_id" placeholder="Enter kategori menu" required>
        </div>

        <div class="mb-3">
            <label> Price </label>
            <input type="text" class="form-control" id="txt_harga" placeholder="Enter price menu" required>
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>