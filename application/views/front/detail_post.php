<!DOCTYPE html>
<html>
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
<body>
    <?php $this->load->view('front/nav'); ?>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h1><?php echo $detail_post->row()->title ?></h1>
                        <hr>
                        <img src="<?php echo base_url().'uploads/'.$detail_post->row()->image; ?>" alt="" class="w-100">
                        <hr>
                    <?php echo $detail_post->row()->description ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <p>tes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="py-3 my-0 bg-light">
        <p class="text-center text-muted">&copy; 2022 KPT</p>
    </footer>
</body>
</html>