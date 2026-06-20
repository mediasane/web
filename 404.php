<?php require('parts/header.php'); ?>
<body class="bg--404">
    <?php require('parts/preloader.php'); ?>
    <div id="page" class="page">
        <?php require('parts/navbar.php'); ?>
        <section class="page-404 content-section division d-flex align-items-center">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="page-404-img wow">
                            <img class="img-fluid" src="/assets/images/illustrations/404.png" alt="Illustration 404">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="page-404-txt wow">
                            <img class="img-fluid" src="/assets/images/miscs/404.png" alt="Content 404">
                            <h3 class="fs-46 color--white">Something missing...</h3>
                            <span class="main-font fs-21">Oops! The page you are looking for might have been moved, renamed or might never existed</span>
                            <a href="/" class="btn r-08 btn--purple">
                                <span class="btn-text">
                                    <span class="anim-txt">Back to Home</span>
                                    <span class="anim-txt">Back to Home</span>  
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require('parts/footer.php'); ?>
        <?php require('parts/scripts.php'); ?>
    </div>
</body>
</html>