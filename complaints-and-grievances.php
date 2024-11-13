<?php include ("./includes/header.php"); ?>

<section class="page-section complaint">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="title">Investor Grievances</h2>
            </div>
        </div>
    </div>
</section>

<!-- Start SideMenu -->
<?php include ("./includes/sideMenu.php"); ?>
<!-- End SideMenu -->

<section class="page-content headoffice-wrapper pt-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-7">
                <div class="title mb-3" id="primaryPoint"></div>
                <div class="detail">
                    For the lodgement of transfer deeds and any other documents or for any other grievances /
                    complaints, the shareholders / investors may contact :
                </div>
            </div>
        </div>
        <div class="row location-row">
            <div class="col-md-4">
                <div class="location-box">
                    <div class="title">
                        Company Secretary
                    </div>
                    <ul>
                        <li>
                            <img src="./assets/images/icon-email.webp" alt="">
                            <!-- <a href="mailto:investor.relations@askarilife.com">
                                </a> -->
                            <span>investor.relations@askarilife.com</span>
                        </li>
                        <li>
                            <img src="./assets/images/icon-phone.webp" alt="">
                            <span>Phone Number: (021)-111-225-275 (Ext: 1010)</span>
                        </li>
                        <li>
                            <img src="./assets/images/icon-phone.webp" alt="">
                            <span>Fax Number: (021)-35147540</span>
                        </li>
                        <li>
                            <img src="./assets/images/icon-phone.webp" alt="">
                            <span>UAN: 021-111-225-275</span>
                        </li>
                        <li>
                            <img src="./assets/images/icon-map.webp" />
                            <span>Office No.1104, 11th Floor, Emerald Tower, Plot No. G-19, Block 5, KDA Improvement
                                Scheme No.5, Clifton, Karachi, Pakistan.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact_form mb-0">
                    <!-- <form action="https://formspree.io/f/xkgwnyrj" id="submit_contact_form" method="POST"> -->
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
                                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                                        name="message" placeholder="How can we help you?"></textarea>
                                </div>
                                <button type="submit" class="grad-button" id="submit_btn">
                                    <span class="btn_label" data-text="Send Message">Send Message</span>
                                    <span class="btn_icon">
                                        <i class="fa-solid fa-arrow-up-right"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="title" id="secondaryPoint"></div>
                <a href="https://sdms.secp.gov.pk/~sdmsadmn/" target="_blank">
                    <img class="w-100 mb-5" src="./assets/images/footer_banner.webp" alt="">
                </a>
                <div class="title-3 fw-6">Disclaimer</div>
            </div>
            <div class="col-md-9">
                <p>In case your Complaint has not been properly redressed by us, you may lodge your complaint with
                    Securities & Exchange Commission of Pakistan (the “SECP”).</p>
                <p>However, please note that SECP will entertain only those complaints which are at first directly
                    requested to be redressed by the company and the company has failed to redress the same.</p>
                <p>Further, the Complaints that are not relevant to SECP’s regulatory domain/competence shall not be
                    entertained by the SECP.</p>
            </div>
        </div>
    </div>
</section>

<script src="./assets/js/error/contact.js"></script>
<?php include "./includes/footer.php"; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Get the 'lang' parameter from the URL
        var urlParams = new URLSearchParams(window.location.search);
        var lang = urlParams.get('lang');

        // Determine the correct text based on the language parameter
        var titleContent = '';
        var subtitleContent = '';

        if (lang === 'ur') {
            titleContent = 'Primary contact';
            subtitleContent = 'Secondary contact';
        } else {
            titleContent = 'Primary Point of Contact';
            subtitleContent = 'Secondary Point of Contact';
        }

        // Update the content divs with the correct language text
        $('#primaryPoint').html(titleContent);
        $('#secondaryPoint').html(subtitleContent);
    });
</script>