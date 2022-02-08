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
