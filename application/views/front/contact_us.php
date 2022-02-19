<section style="background-color: Lavender;">
    <div class="container py-5">
    <h4 class="p-5">Bila ada yang ingin ditanyakan seputar pendaftaran online, anda bisa menghubungi kontak kami dibawah ini:</h4>
      <div id="grad" style="border-radius: 16px; overflow: hidden;">
      <div class="row">
            <div class="col-md-8 d-flex justify-content-center h-100" style="padding: 0 0 0 10px;border-radius: 16px; overflow: hidden;">
              <?php echo $embed_lokasi ?>
            </div>
            <div class="col-md-4 p-5 text-white">
              <h4>Alamat Sekolah</h4>
              <span>
              Jl. Ciomas Cibinong Ciapus, Ciapus, Ciomas, Kabupaten Bogor, Jawa Barat 16610
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