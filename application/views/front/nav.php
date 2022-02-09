<?php 
$logo = $this->db->get('config_page')->row()->logo;
?>
<nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url() ?>">
      <img src="<?php echo base_url().'uploads/'.$logo ?>" alt="" width="30" height="24" class="d-inline-block align-text-top">
    </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url() ?>home/contact_us">Kontak Kami</a>
          </li>
        </ul>
      </div>
</nav>