<?php include("./includes/header.php"); ?>

<section class="page-section leadership">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">Managment Team</h2>
            </div>
        </div>
    </div>
</section>

<!-- Start SideMenu -->
<?php include("./includes/sideMenu.php"); ?>
<!-- End SideMenu -->


<section class="page-content table-list-wrapper">
    <div class="container">

        <div class="row justify-content-md-center">

            <div class="col-md-12">
                <h2 class="title-2 mt-5 mb-4 text-center">Managment Team</h2>
            </div>
            <div class="col-md-3 col-6">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#jehanzabModal">
                    <div class="member-box">
                        <img src="assets/images/management-team/Jehanzeb-Zafar.webp" alt="">
                        <div class="name">Mr. Jehanzeb Zafar</div>
                        <div class="designation">Chief Executive Officer</div>
                    </div>
                </button>
                <?php include("./includes/jehanzeb-modal.php"); ?>
            </div>
            <div class="col-md-3 col-6">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#rehanModal">
                    <div class="member-box">
                        <img src="./assets/images/management-team/Rehan-Mobin.webp" alt="">
                        <div class="name">Mr. Rehan Mobin</div>
                        <div class="designation">Chief Financial Officer</div>
                    </div>
                </button>
                <?php include("./includes/rehan-modal.php"); ?>
            </div>
            <div class="col-md-3 col-6">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#azmatullahModal">
                    <div class="member-box">
                        <img src="./assets/images/management-team/Azmatullah-Sharif.webp" alt="">
                        <div class="name">Mr. Mohammad Azmatullah Sharif</div>
                        <div class="designation">Chief Operating Officer</div>
                    </div>
                </button>
                <?php include("./includes/azmatullah-modal.php"); ?>
            </div>
            <div class="col-md-3 col-6">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#imranModal">
                    <div class="member-box">
                        <img src="./assets/images/management-team/Syed-Ali-Imran.webp" alt="">
                        <div class="name">Mr. Syed Ali Imran</div>
                        <div class="designation">Head of Distribution</div>
                    </div>
                </button>
                <?php include("./includes/imran-modal.php"); ?>
            </div>
            <div class="col-md-3 col-6">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#waseemModal">
                    <div class="member-box">
                        <img src="./assets/images/management-team/Waqas-Waseem.webp" alt="">
                        <div class="name">Mr. Waqas Waseem</div>
                        <div class="designation">Head of HR and Administration</div>
                    </div>
                </button>
                <?php include("./includes/waseem-modal.php"); ?>
            </div>

        </div>

    </div>
</section>


<?php include("./includes/footer.php"); ?>