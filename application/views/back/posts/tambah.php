<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Deksripsi</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02" name="image">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
            <button type="submit">Simpan</button>
        </div>
    </div>
</form>