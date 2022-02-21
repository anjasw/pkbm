<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Jalur Jenjang Pendidikan</h1>
                        <a href="<?php echo base_url() ?>backadmin/jalur/tambah" class="btn btn-info btn-sm">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Jalur Jenjang</td>
                                        <td>SD</td>
                                        <td>SMP</td>
                                        <td>SMA</td>
                                        <td>SMK</td>
                                        <td colspan="2">Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach($data->result() as $d): ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $d->jalur_jenjang ?></td>
                                        <td><?php echo ($d->sd == '1') ? '<span class="fas fa-check"></span>' : '<span class="fas fa-ban"></span>' ?></td>
                                        <td><?php echo ($d->smp == '1') ? '<span class="fas fa-check"></span>' : '<span class="fas fa-ban"></span>' ?></td>
                                        <td><?php echo ($d->sma == '1') ? '<span class="fas fa-check"></span>' : '<span class="fas fa-ban"></span>' ?></td>
                                        <td><?php echo ($d->smk == '1') ? '<span class="fas fa-check"></span>' : '<span class="fas fa-ban"></span>' ?></td>
                                        <td><a href="<?php echo base_url().'backadmin/jalur/edit/'.$d->id_jenjang ?>">Edit</a></td>
                                        <td><a href="<?php echo base_url().'backadmin/jalur/hapus/'.$d->id_jenjang ?>">Hapus</a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>