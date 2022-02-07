<form action="" method="post">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" name="nis" class="form-control" value="<?php echo $data->nis ?>">
            </div>
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" name="nisn" class="form-control" value="<?php echo $data->nisn ?>">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $data->nama ?>">
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $data->tempat_lahir ?>">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="text" name="tanggal_lahir" class="form-control" value="<?php echo $data->tanggal_lahir ?>">
            </div>
            <div class="form-group">
                <label for="nis">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-control">
                    <option value="">Jenis Kelamin</option>
                    <option value="laki - laki" <?php echo ($data->jk == 'laki - laki') ? 'selected' : '' ?>>Laki - Laki</option>
                    <option value="perempuan" <?php echo $data->jk == 'perempuan' ? 'selected' : '' ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" name="nik" class="form-control" value="<?php echo $data->nik ?>">
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" name="agama" class="form-control" value="<?php echo $data->agama ?>">
            </div>
            <div class="form-group">
                <label for="nama_ibu">Nama Ibu</label>
                <input type="text" name="nama_ibu" class="form-control" value="<?php echo $data->nama_ibu ?>">
            </div>
            <div class="form-group">
                <label for="nama_ayah">Nama Ayah</label>
                <input type="text" name="nama_ayah" class="form-control" value="<?php echo $data->nama_ayah ?>">
            </div>
            <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="text" name="no_hp" class="form-control" value="<?php echo $data->no_hp ?>">
            </div>
            <div class="form-group">
                <label for="no_wa">No WA</label>
                <input type="text" name="no_wa" class="form-control" value="<?php echo $data->no_wa ?>">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"><?php echo $data->alamat ?></textarea>
            </div>
            <button type="submit" class="btn btn-info">Simpan</button>
        </div>
    </div>
</form>