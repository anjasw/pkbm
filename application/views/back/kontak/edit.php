<form action="" method="post">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="form-group">
                <label for="tipe">Tipe Kontak</label>
                <input type="text" name="tipe" class="form-control" value="<?php echo $data->tipe ?>" placeholder="Contoh : WhatsApp">
            </div>
            <div class="form-group">
                <label for="kontak">Kontak</label>
                <input type="text" name="kontak" class="form-control" value="<?php echo $data->kontak ?>">
            </div>
            <button type="submit" class="btn btn-info">Simpan</button>
        </div>
    </div>
</form>