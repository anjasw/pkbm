
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #E9F7FF;
}
.bg-light {
    --bs-bg-opacity: 1;
    background-color: #fff !important;
}
.banner{
    background: url(https://berkas-jkt.siap-ppdb.com/jakarta/banner.210524142826.jpg);
    background-size: cover;
    height: 250px;
}
.bg-kontak{
  background-color: rgb(77,106,121);
}
.carousel.slide img{
  max-height: 400px;
}
.carousel.slide{
  background-color: #505050;
}

.form-regist{
  background-color: #e3e3e3;
  border: 1px solid #c5c2c2;
}
#regForm {
  background-color: #ffffff;
  margin: 0px auto;
  font-family: Raleway;
  padding: 20px;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

input.invalid {
  background-color: #ffdddd;
}

.tab {
  display: none;
}

.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background: linear-gradient(to right,#01588e,#1e3c72);
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

.step.finish {
    background:linear-gradient(to right,#01588e,#1e3c72);
}
.btn-primary{
    background:linear-gradient(to right,#01588e,#1e3c72);
}
</style>
</head>
<body>
    <?php $this->load->view('front/nav'); ?>
    <div class="row px-0 mx-0">
        <div class="col-md-12 px-0">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="row">
              <div class="col-md-10 offset-1">
                <div class="carousel-inner">
                  <?php $no =  1; foreach($slider->result() as $s): ?>
                  <div class="carousel-item <?php echo ($no == 1) ? 'active' : '' ?>">
                    <img src="<?php echo base_url().'uploads/'.$s->img_name ?>" class="d-block w-100" alt="<?php echo $s->alt_img ?>">
                  </div>
                  <?php $no++; endforeach; ?>
                </div>
              </div>
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
        </div>
    </div>
    <div class="bg-light pt-5 pb-5" style="padding: 10px 0; box-shadow: 1px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-header" style="background-color:<?php echo $warnasd->row()->bg_color ?>;color:<?php echo $warnasd->row()->font_color ?>;">
                          <p class="mb-0">Pendaftaran Online Jenjang</p>
                          <h4>Jalur SD</h4>
                        </div>
                        <div class="card-body p-1">
                          <ul class="list-group list-group-flush">
                            <?php foreach($sd->result() as $d): ?>
                            <li class="list-group-item"><i aria-hidden="true" class="fa fa-check-square-o"></i><?php echo $d->jalur_jenjang ?></li>
                            <?php endforeach; ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-header text-white bg-primary">                   
                        <p class="mb-0">Pendaftaran Online Jenjang</p>
                          <h4>Jalur SMP</h4>
                        </div>
                        <div class="card-body p-1">
                          <ul class="list-group list-group-flush">
                            <?php foreach($smp->result() as $p): ?>
                            <li class="list-group-item"><i aria-hidden="true" class="fa fa-check-square-o"></i><?php echo $p->jalur_jenjang ?></li>
                            <?php endforeach; ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                    </div>
                    <br>
                    <div class="row">
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-header text-white bg-secondary">
                          <p class="mb-0">Pendaftaran Online Jenjang</p>
                          <h4>Jalur SMA</h4>
                        </div>
                        <div class="card-body p-1">
                          <ul class="list-group list-group-flush">
                            <?php foreach($sma->result() as $a): ?>
                            <li class="list-group-item"><i aria-hidden="true" class="fa fa-check-square-o"></i><?php echo $a->jalur_jenjang ?></li>
                            <?php endforeach; ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-header bg-warning">
                          <p class="mb-0">Pendaftaran Online Jenjang</p>
                          <h4>Jalur SMK</h4>
                        </div>
                        <div class="card-body p-1">
                          <ul class="list-group list-group-flush">
                          <?php foreach($smk->result() as $k): ?>
                            <li class="list-group-item"><i aria-hidden="true" class="fa fa-check-square-o"></i><?php echo $k->jalur_jenjang ?></li>
                            <?php endforeach; ?>
                         </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 form-regist py-3">
                    <div class="card">
                        <div class="card-body">
                            <form id="regForm" action="<?php echo base_url() ?>home/savepd" method="post">
                                <h1>Form Daftar</h1>
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
    </div>
      <div class="container py-5">
        <div class="row">
          <div class="col-md-9">
            <h1 class="text-center">Peta Sekolah</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9">
          <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/d/embed?mid=1viyZhqtEarcpsBeyR-zqD5yIoBs&ehbc=2E312F"></iframe>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-header bg-kontak text-white">Info & Kontak</div>
              <div class="card-body">
                <ul>
                  <?php foreach($kontak->result() as $r): ?>
                  <li><a href="#" style="text-decoration:none"><?= $r->tipe.' - '.$r->kontak ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-light py-5 mb-5">
        <div class="container my-5 ">
        <div class="row mx-0">
            <?php foreach($posts->result() as $p): ?>
            <div class="col-md-3 col-sm-12">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo base_url().'uploads/'.$p->image ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $p->title ?></h5>
                    <p class="card-text"><?php echo word_limiter($p->description,20); ?></p>
                    <a href="<?php echo base_url().'home/detail_post/'.$p->id_posts ?>" class="btn btn-primary">Lihat Detail</a>
                  </div>
              </div>
            </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
    
    <footer class="py-3 my-0 bg-light">
        <p class="text-center text-muted">&copy; 2022 KPT</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
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
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel)
</script>

</body>
</html>
