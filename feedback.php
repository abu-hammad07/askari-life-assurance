<?php include ("./includes/header.php"); ?>

<section class="page-section feedback">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="title">Feedback</h2>
            </div>
        </div>
    </div>
</section>

<!-- Start SideMenu -->
<?php include ("./includes/sideMenu.php"); ?>
<!-- End SideMenu -->

<section class="headoffice-wrapper pt-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <div id="content"></div>
                <!-- <div class="title mb-3 fw-bold">Fill this feedback It's easy.</div> -->
                <div class="detail">
                    Please fill in the form below and we will get back to you as soon as possible.
                </div>
            </div>
        </div>
        <div class="row location-row">
            <div class="col-md-3 d-none d-lg-block">
            </div>
            <div class="col-lg-6 col-12">
                <div class="contact_form mb-0">
                    <form action="https://formspree.io/f/mgvwqnpr" id="submit_contact_form" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="input_name" class="form-label">Full Name</label>
                                    <input type="test" class="form-control form-control-lg" id="input_name" name="name"
                                        placeholder="Hammad">
                                    <span class="text-danger" id="input_name_error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="input_email" class="form-label">Email address</label>
                                    <input type="email" class="form-control form-control-lg" id="input_email"
                                        name="email" placeholder="name@example.com">
                                    <span class="text-danger" id="input_email_error"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="input_phone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control form-control-lg" id="input_phone"
                                        name="phone" placeholder="0300-0000000">
                                    <span class="text-danger" id="input_phone_error"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Feedback Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="15" cols="10"
                                        name="message" placeholder="How can we help you?"></textarea>
                                </div>
                                <button type="submit" class="grad-button" id="submit_btn">
                                    <span class="btn_label" data-text="Send Message">Send</span>
                                    <span class="btn_icon">
                                        <i class="fa-solid fa-arrow-up-right"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 d-none d-lg-block"></div>
        </div>
    </div>
</section>

<script src="./assets/js/error/contact.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        // Get the 'lang' parameter from the URL
        var urlParams = new URLSearchParams(window.location.search);
        var lang = urlParams.get('lang');

        // Make an AJAX request to the PHP script
        $.ajax({
            url: 'includes/get_language_content.php',
            type: 'GET',
            data: { lang: lang },
            success: function (response) {
                // Update the content div with the response from the PHP script
                $('#content').html(response);
            }
        });
    });


</script>


<?php include ("./includes/footer.php"); ?>