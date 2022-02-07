<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="form-group">
                <label for="alt_img">Judul</label>
                <input type="text" name="alt_img" class="form-control" value="<?= $data->alt_img ?>">
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02" name="img_name">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
            <button type="submit">Simpan</button>
        </div>
    </div>
</form>