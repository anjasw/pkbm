<form action="" method="post">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="form-group">
                <label for="jalur_jenjang">Jalur Jenjang</label>
                <input type="text" name="jalur_jenjang" class="form-control" value=" <?php echo $data->jalur_jenjang ?>">
            </div>
            <div class="form-group">
                <!-- <label for="sd">SD</label> -->
            </div>
            <div class="form-group">
                <label for="sd">SD</label>
                <input type="checkbox" name="sd" value="1" id="sd" <?php echo ($data->sd == 1) ? 'checked' : '' ?>>
                <label for="smp">SMP</label>
                <input type="checkbox" name="smp" value="1" id="smp" <?php echo ($data->smp == 1) ? 'checked' : '' ?>>
                <label for="sma">SMA</label>
                <input type="checkbox" name="sma" value="1" id="sma" <?php echo ($data->sma == 1) ? 'checked' : '' ?>>
                <label for="smk">SMK</label>
                <input type="checkbox" name="smk" value="1" id="smk" <?php echo ($data->smk == 1) ? 'checked' : '' ?>>
            </div>
            <button type="submit" class="btn btn-info">Simpan</button>
        </div>
    </div>
</form>