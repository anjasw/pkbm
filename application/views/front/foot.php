  <section id="grad">
      <div class="container text-light">
          <div class="row g-4 justify-content-between align-items-center py-3">
              <div class="col-md-2">
                <img class="img-fluid" src="<?php echo base_url().'assets/dist/img/logo-pkbm.png'?>" style="width:176px;">
              </div>
              <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 col-6 order-3 order-md-2">
                        <h5 class="mb-4 fw-bold">Tentang</h5>
                        <h6 class="mb-3"><a href="#sec-tentangkami" class="text-light" style="text-decoration: none;">Kontak Kami</a></h6> 
                    </div>
                    
                    <div class="col-md-8 order-4">
                        <h5 class="mb-4 fw-bold">Kantor Pusat I</h5>
                        <p>
                            <?php echo $alamat ?>
                            <!-- Jl. Bumi Sentosa Raya Blok A3 No.3, A1 No. 5 - 8, Perum. Bumi Sentosa, Cibinong, Jawa Barat 16912, Indonesia -->
                        </p>
                        
                    </div>
                </div>
              </div>
          </div>
      </div>
    </section>
<section  class="py-3 bg-dark text-light text-center">
<span>
    Copyright&copy; Pusat Kegiatan Belajar Masyarakat (PKBM) by <?php echo $nama_sekolah ?> 2022
</span>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel)
</script>
</body>
</html>