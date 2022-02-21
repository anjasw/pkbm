
<body>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
    <?php $no =  0; foreach($slider->result() as $s): ?>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $no ?>" <?php echo ($no == 0) ? 'class="active"' : '' ?> aria-current="true" aria-label="Slide <?php echo $no ?>"></button>
    <?php $no++; endforeach; ?>
    <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button> -->
    
  </div>
    <div class="carousel-inner">
                  <?php $no =  1; foreach($slider->result() as $s): ?>

                  <div class="carousel-item <?php echo ($no == 1) ? 'active' : '' ?>">
                    <img style="object-fit: cover;" src="<?php echo base_url().'uploads/'.$s->img_name ?>" class="d-block w-100" alt="<?php echo $s->alt_img ?>">
                  </div>
                  <?php $no++; endforeach; ?>
                </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <div class="px-4 pt-5 text-center border-bottom">
    <h2 class="display-8 fw-bold">Pusat Kegiatan Belajar Masyarakat</h2>
    <div class="col-lg-8 mx-auto">
      <p class="lead mb-4">Pusat Kegiatan Belajar Masyarakat disingkat PKBM, adalah lembaga yang dibentuk oleh masyarakat untuk masyarakat yang bergerak dalam bidang pendidikan Non Formal. PKBM ini masih berada di bawah pengawasan dan bimbingan dari Dinas Pendidikan Nasional. Sebagai salah satu satuan pendidikan non formal, PKBM diharapkan dapat menjadi wadah bagi kegiatan masyarakat untuk lebih meningkatkan potensi diri dan keterampilan.</p>
    </div>
    <div class="overflow-hidden" style="max-height: 170px;">
      <div class="container px-5">
        <img src="<?php echo base_url().'assets/dist/img/bg-2.jpg'?>" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      </div>
    </div>
  </div>

  <!-- <section class="d-none">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
        <div class="p-3">
						<div class="card card-sd text-center mx-1">	
							<div class="card-body">
								<h5>Pendaftaran Online Jenjang</h5>
								<span> Jalur Sekolah Dasar (SD) </span>
								<p class="card-text pt-3"><i class="i-testi fas fa-quote-left"></i> Makasih buat LSI GG udah kasih pulsa gratis <i class="i-testi fas fa-quote-left"></i></p>
							</div>
						</div>
					</div>
        </div>

        <div class="col-md-6">
        <div class="p-3">
						<div class="card card-smp text-center mx-1">	
							<div class="card-body">
								<h5>Pendaftaran Online Jenjang</h5>
								<span> Jalur Sekolah Menengah Pertama (SMP) </span>
								<p class="card-text pt-3"><i class="i-testi fas fa-quote-left"></i> Makasih buat LSI GG udah kasih pulsa gratis <i class="i-testi fas fa-quote-left"></i></p>
							</div>
						</div>
					</div>
        </div>

        <div class="col-md-6">
        <div class="p-3">
						<div class="card card-sma text-center mx-1">	
							<div class="card-body">
								<h5>Pendaftaran Online Jenjang</h5>
								<span> Jalur Sekolah Menengah Atas (SMA) </span>
								<p class="card-text pt-3"><i class="i-testi fas fa-quote-left"></i> Makasih buat LSI GG udah kasih pulsa gratis <i class="i-testi fas fa-quote-left"></i></p>
							</div>
						</div>
					</div>
        </div>

        <div class="col-md-6">
        <div class="p-3">
						<div class="card card-smk text-center mx-1">	
							<div class="card-body">
								<h5>Pendaftaran Online Jenjang</h5>
								<span> Jalur Sekolah Dasar (SD) </span>
								<p class="card-text pt-3"><i class="i-testi fas fa-quote-left"></i> Makasih buat LSI GG udah kasih pulsa gratis <i class="i-testi fas fa-quote-left"></i></p>
							</div>
						</div>
					</div>
        </div>
      </div>
    </div>
  </section> -->

  

  <section class="py-5" style="background-color: Lavender;">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check" viewBox="0 0 16 16">
        <title>Check</title>
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
    </svg>

    <div class="container">
    
      <div class="row py-5">
      
        <div class="col-md-12 card shadow" style="border-radius: 16px; overflow: hidden;">
          <div class="card-body">
            
          <h2 class="card-title py-3 display-8 fw-bold text-center">Pendaftaran Online Jenjang</h2>
            <div class="table-responsive">
              <table class="table text-center table-striped">
                <thead>
                  <tr>
                    <th style="width: 32%;"></th>
                    <th style="width: 17%; color: red;">Jalur SD</th>
                    <th style="width: 17%; color: blue;">Jalur SMP</th>
                    <th style="width: 17%; color: grey;">Jalur SMA</th>
                    <th style="width: 17%; color: green;">Jalur SMK</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($jalur as $j): ?>
                  <tr>
                    <th scope="row" class="text-start"><?php echo $j->jalur_jenjang ?></th>
                    <td><?php echo ($j->sd == 1) ? '<svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg>' : '' ?></td>
                    <td><?php echo ($j->smp == 1) ? '<svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg>' : '' ?></td>
                    <td><?php echo ($j->sma == 1) ? '<svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg>' : '' ?></td>
                    <td><?php echo ($j->smk == 1) ? '<svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg>' : '' ?></td>
                  </tr>
                  <?php endforeach; ?>
                  <!-- <tr>
                    <th scope="row" class="text-start">Afirmasi</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-start">Zonasi</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-start">Pindah Tugas Orangtua dan Anak Guru</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-start">Tahap Kedua</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                  </tr>
                  
                  <tr>
                    <th scope="row" class="text-start">Tahap Ketiga</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-start">PPDB Bersama Tahap Kedua</th>
                    <td></td>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td></td>
                  </tr> -->
                  
                </tbody>
              </table>
            </div>

            <div id="grad2" class="mb-3 pt-5 rounded-3">
            <h2 class="display-8 fw-bold text-center">Form Daftar</h2>
            <form id="regForm" action="<?php echo base_url() ?>home/savepd" method="post">
                  <div class="tab">
                      <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="number" placeholder="NIS" class="form-control" name="nis">
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="nisn">NISN</label>
                          <input type="number" placeholder="NISN" class="form-control" name="nisn">
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="nama">Nama</label>
                          <input type="text" placeholder="Nama" class="form-control" name="nama">
                      </div>
                      
                  </div>
                  <div class="tab">
                    <div class="form-group">
                      <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" placeholder="Tempat Lahir" class="form-control" name="tempat_lahir">
                    </div>
                    <br>
                    <div class="form-group">
                      <label for="tanggal_lahir">Tanggal Lahir</label>
                      <input type="date" placeholder="Tanggal Lahir" class="form-control" name="tanggal_lahir">
                    </div>
                      <br>
                      <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-select">
                          <option value="-">Jenis Kelamin</option>
                          <option value="laki-laki">Laki - Laki</option>
                          <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                      
                  </div>
                  <div class="tab">
                      <div class="form-group">
                        <label for="nik">NIK</label>
                      <input type="number" placeholder="NIK" class="form-control" name="nik">
                    </div>
                      <br>
                      <div class="form-group">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama" class="form-select">
                          <option value="Islam">Islam</option>
                          <option value="protestan">Kristen - Protestan</option>
                          <option value="katholik">Kristen - Katholik</option>
                          <option value="Hindhu">Hindhu</option>
                          <option value="Budha">Budha</option>
                          <option value="Konghuchu">Konghuchu</option>
                        </select>
                    </div>
                    <br>
                      <div class="form-group">
                        <label for="nama_ayah">Nama Ibu</label>
                        <input type="text" placeholder="Nama Ibu" class="form-control" name="nama_ibu">
                      </div>
                      
                  </div>
                  <br>
                  <div class="tab">
                    <div class="form-group">
                      <label for="nama_ayah">Nama Ayah</label>
                      <input type="text" placeholder="Nama Ayah" class="form-control" name="nama_ayah">
                    </div>
                    <br>
                    <div class="row">
                      <label for="nohp">Nomor Pribadi</label>
                      <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" placeholder="No HP" class="form-control" name="no_hp">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" placeholder="No WhatsApp" class="form-control" name="no_wa">
                          </div>
                      </div>
                  </div>
                    <br>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="3" placeholder="Alamat"></textarea>
                  </div>
                  <br>
                  </div>
                  <div style="overflow:auto;">
                      <div style="float:right;">
                          <button type="button" id="prevBtn" class="btn btn-primary " onclick="nextPrev(-1)">Previous</button>
                          <button type="button" id="nextBtn" class="btn btn-primary " onclick="nextPrev(1)">Next</button>
                      </div>
                  </div>
                  <!-- Circles which indicates the steps of the form: -->
                  <div style="text-align:center;margin-top:40px;">
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                  </div>
              </form>
            </div>
              
          </div>
        </div>
      </div>

    </div>

  </section>

  <section>
    <div class="container py-5">
      <div id="grad" style="border-radius: 16px; overflow: hidden;">
      <div class="row">
            <div class="col-md-8 d-flex justify-content-center h-100" style="padding: 0 0 0 10px;border-radius: 16px; overflow: hidden;">
              <?php echo $embed_lokasi ?>
            </div>
            <div class="col-md-4 p-5 text-white">
              <h4>Alamat Sekolah</h4>
              <span>
              <?php echo $alamat ?>
              </span>
              <hr>
              <h4>Info & Kontak</h4>
              <span>
                  <?php foreach($kontak->result() as $r): ?>
                    <a href="#" style="text-decoration:none;"><?= $r->tipe.' - '.$r->kontak ?></a>
                  <?php endforeach; ?>
              </span>
              <hr>
            </div>
          </div>
      </div>
    </div>
  </section>

  

  

    

    
      
      <div class="bg-light py-5 mb-5">
        <div class="container">
          <div class="row">
            <h3>Postingan Terbaru</h3>
          </div>
        <div class="row mx-0 mt-3">
            <?php foreach($posts->result() as $p): ?>
            <div class="col-md-3 col-sm-12">
                <div class="card">
                  <img src="<?php echo base_url().'uploads/'.$p->image ?>" class="card-img-top" alt="<?php echo $p->alt_img ?>" width="100%" height="140">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $p->title ?></h5>
                    <p>
                      <?php echo word_limiter($p->description,19); ?>
                      <a href="<?php echo base_url().'home/detail_post/'.$p->id_posts.'/'.str_replace(' ','-',strtolower(str_replace('!','',$p->title))) ?>">Selengkapnya</a>
                   </p>
                  </div>
              </div>
            </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
    
<script>
var currentTab = 0;
showTab(currentTab); 

function showTab(n) {
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  fixStepIndicator(n)
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  if (n == 1 && !validateForm()) return false;
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.getElementById("regForm").submit();
    return false;
  }
  showTab(currentTab);
}

function validateForm() {
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  for (i = 0; i < y.length; i++) {
    if (y[i].value == "") {
      y[i].className += " invalid";
      valid = false;
    }
  }
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; 
}

function fixStepIndicator(n) {
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  x[n].className += " active";
}
</script>