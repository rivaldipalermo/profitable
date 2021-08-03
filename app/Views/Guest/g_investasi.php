<?= $this->extend('Guest/g_layout') ?>
<?= $this->section('content'); ?>

<!-- Gobal CSS -->

<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/pendanaan/style.css" />
<!-- Template CSS -->


<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="content col-md-8 col-sm-12 col-xs-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="\assets\images\faces\1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="\assets\images\faces\2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!--tab panes-->
                <div class="section-block">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="about">
                            <div class="about-information">
                                <h1 class="section-title">ABOUT LAUNCH</h1>
                                <p>Suspendisse luctus at massa sit amet bibendum. Cras commodo congue urna, vel dictum velit bibendum eget. Vestibulum quis risus euismod, facilisis lorem nec, dapibus leo. Quisque sodales eget dolor iaculis dapibus. Vivamus sit amet lacus ipsum. Nullam varius lobortis neque, et efficitur lacus. Quisque dictum tellus nec mi luctus imperdiet. Morbi vel aliquet velit, accumsan dapibus urna. Cras ligula orci, suscipit id eros non, rhoncus efficitur nisi.</p>
                                <p>Quisque fermentum blandit ex at commodo. Nulla facilisi. Pellentesque porttitor nisi tellus, at gravida mi interdum et. Nulla vestibulum imperdiet libero eget mattis. Vestibulum porttitor, nibh quis sagittis tincidunt, velit orci molestie magna, in congue tortor mauris sit amet eros. Nam dictum gravida tempus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/tabs-->
            <!--/main content-->
            <!--sidebar-->
            <div class="content col-md-4 col-sm-12 col-xs-12">
                <div class="section-block">
                    <h1 class="section-title">Data</h1>
                    <!--reward blocks-->
                    <div class="reward-block">
                        <h2>Early Bird</h2>
                        <p>Curabitur accumsan sem sed velit ultrices fermentum. Pellentesque rutrum mi nec ipsum elementum aliquet. Sed id vestibulum eros. Nullam nunc velit, viverra sed consequat ac, pulvinar in metus.</p>
                        <span><i class="fa fa-users"></i> 180 backers</span>
                        <a href="" class="btn btn-reward">GET THIS REWARD</a>
                    </div>
                </div>
            </div>

            <!--/sidebar-->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>