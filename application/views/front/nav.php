<?php 
$logo = $this->db->get('config_page')->row()->logo;
?>
<nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="<?php echo base_url().'uploads/'.$logo ?>" alt="" width="30" height="24" class="d-inline-block align-text-top">
    </a>
  </div>
</nav>