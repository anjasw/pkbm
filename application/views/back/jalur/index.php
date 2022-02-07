    <div class="container">
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card">
                        <div class="card-header" style="background-color : <?php echo $warnasd->row()->bg_color ?>; color:<?php echo $warnasd->row()->font_color ?>">
                          <p class="mb-0">Pendaftaran Online Jenjang</p>
                          <h4>Jalur SD</h4>
                        </div>
                    <div class="card-body p-1">
                        <ul class="list-group list-group-flush">
                        <?php foreach($sd->result() as $d): ?>
                            <li class="list-group-item"><i aria-hidden="true" class="fa fa-check-square-o"></i><?php echo $d->jalur_jenjang ?><a href="<?php echo base_url().'backadmin/jalur/hapus/'.$d->id_jenjang ?>" class="float-right">hapus</a></li>
                        <?php endforeach; ?>
                            <li class="list-group-item">
                                <button type="button" class="btn btn-primary" id="addSD"  data-bs-toggle="modal" data-bs-target="#formSD">Tambah</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                        <div class="card-header" style="background-color : <?php echo $warnasmp->row()->bg_color ?>; color:<?php echo $warnasmp->row()->font_color ?>">
                          <p class="mb-0">Pendaftaran Online Jenjang</p>
                          <h4>Jalur SMP</h4>
                        </div>
                    <div class="card-body p-1">
                        <ul class="list-group list-group-flush">
                        <?php foreach($smp->result() as $p): ?>
                            <li class="list-group-item"><i aria-hidden="true" class="fa fa-check-square-o"></i><?php echo $p->jalur_jenjang ?><a href="<?php echo base_url().'backadmin/jalur/hapus/'.$p->id_jenjang ?>" class="float-right">hapus</a></li>
                        <?php endforeach; ?>
                            <li class="list-group-item"><button type="button" class="btn btn-primary" id="addSMP">Tambah</button></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                        <div class="card-header" style="background-color : <?php echo $warnasma->row()->bg_color ?>; color:<?php echo $warnasma->row()->font_color ?>">
                          <p class="mb-0">Pendaftaran Online Jenjang</p>
                          <h4>Jalur SMA</h4>
                        </div>
                    <div class="card-body p-1">
                        <ul class="list-group list-group-flush">
                        <?php foreach($sma->result() as $a): ?>
                            <li class="list-group-item"><i aria-hidden="true" class="fa fa-check-square-o"></i><?php echo $a->jalur_jenjang ?><a href="<?php echo base_url().'backadmin/jalur/hapus/'.$a->id_jenjang ?>" class="float-right">hapus</a></li>
                        <?php endforeach; ?>
                            <li class="list-group-item"><button type="button" class="btn btn-primary" id="addSMA">Tambah</button></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                        <div class="card-header" style="background-color : <?php echo $warnasmk->row()->bg_color ?>; color:<?php echo $warnasmk->row()->font_color ?>">
                          <p class="mb-0">Pendaftaran Online Jenjang</p>
                          <h4>Jalur SMK</h4>
                        </div>
                    <div class="card-body p-1">
                        <ul class="list-group list-group-flush">
                        <?php foreach($smk->result() as $k): ?>
                            <li class="list-group-item"><i aria-hidden="true" class="fa fa-check-square-o"></i><?php echo $k->jalur_jenjang ?><a href="<?php echo base_url().'backadmin/jalur/hapus/'.$k->id_jenjang ?>" class="float-right">hapus</a></li>
                        <?php endforeach; ?>
                            <li class="list-group-item"><button type="button" class="btn btn-primary" id="addSMK">Tambah</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="formSD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Jalur Pedaftaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jalur">Jenjang</label>
                            <input type="hidden" name="tipe_jenjang" value="sd">
                            <input type="text" class="form-control" name="jalur_jenjang">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="closeSD" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="formSMP" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Jalur Pendaftaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jalur">Jenjang</label>
                            <input type="hidden" name="tipe_jenjang" value="smp">
                            <input type="text" class="form-control" name="jalur_jenjang">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="closeSMP" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="formSMK" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Jalur Pendaftaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jalur">Jenjang</label>
                            <input type="hidden" name="tipe_jenjang" value="smk">
                            <input type="text" class="form-control" name="jalur_jenjang">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="closeSMK" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="formSMA" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Jalur Pendaftaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jalur">Jenjang</label>
                            <input type="hidden" name="tipe_jenjang" value="sma">
                            <input type="text" class="form-control" name="jalur_jenjang">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="closeSMA" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>