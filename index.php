<?php include("./includes/header.php"); ?>

<style>
    /* Hide horizontal scrollbar */
    .blog-slider {
        display: flex;
        /* Horizontal layout for slider items */
        overflow-x: scroll;
        /* Allow horizontal scroll */
        scroll-behavior: smooth;
        /* Smooth scrolling */
        -ms-overflow-style: none;
        /* Hide scrollbar in Internet Explorer and Edge */
        scrollbar-width: none;
        /* Hide scrollbar in Firefox */
    }

    .blog-slider::-webkit-scrollbar {
        display: none;
        /* Hide scrollbar in WebKit browsers (Chrome, Safari) */
    }

    /* Styling for the arrow buttons */
    .slider-container {
        position: relative;
        overflow: hidden;
        /* Hide overflowing content */
    }

    .arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.5);
        color: white;
        font-size: 24px;
        padding: 10px;
        cursor: pointer;
        z-index: 10;
    }

    .left-arrow {
        left: 10px;
    }

    .right-arrow {
        right: 10px;
    }
</style>

<section class="hero">
    <div class="hero-slide">
        <div class="slider-box">
            <video class="video slider-video" loop autoplay muted>
                <source src="assets/video/askari_bg_hero.mp4" type="video/mp4">
            </video>
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 content-hero-section">
                            <h2 class="title legacy-title">
                                <!-- A Legacy of Excellence -->
                            </h2>
                            <p class="detail legacy-detail">
                                <!-- We provide reliable services to address all your financial needs of nowand the future. -->
                            </p>
                            <!-- <a href="about" class="grad-button">Why choose Askari Life?</a>&nbsp;&nbsp;
                                <a href="login" class="grad-button">Hone</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-slide">
        <div class="slider-box">
            <img src="./assets/images/slider2.webp" alt="">
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 content-hero-section">
                            <h2 class="title legacy-title">
                                <!-- A Legacy of Excellence -->
                            </h2>
                            <p class="detail legacy-detail">
                                <!-- We provide reliable services to address all your financial needs of nowand the future. -->
                            </p>
                            <!-- <a href="about" class="grad-button">Why choose Askari Life?</a>&nbsp;&nbsp;
                            <a href="login" class="grad-button">Hone</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-slide">
        <div class="slider-box">
            <img src="./assets/images/purple-cloud.webp" alt="">
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 content-hero-section">
                            <h2 class="title legacy-title">
                                <!-- A Legacy of Excellence -->
                            </h2>
                            <p class="detail legacy-detail">
                                <!-- We provide reliable services to address all your financial needs of nowand the future. -->
                            </p>
                            <!-- <a href="about" class="grad-button">Why choose Askari Life?</a>&nbsp;&nbsp;
                            <a href="login" class="grad-button">Hone</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start SideMenu -->
<?php include("./includes/sideMenu.php"); ?>
<!-- End SideMenu -->


<div class="slider-control" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="control-container">
                    <span class="prev font-14">
                        <img src="./assets/images/arrow-left.svg" />
                    </span>
                    <span class="count">1/2</span>
                    <span class="next font-14">
                        <img src="./assets/images/arrow-right.svg" />
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="feature-list">
            <div class="feature">
                <a href="conventional">
                    <div>
                        <img class="img" src="./assets/images/individual-plans.webp" />
                    </div>
                    <p>Individual Plans</p>
                </a>
            </div>
            <div class="feature">
                <a href="riders">
                    <div>
                        <img class="img" src="./assets/images/corporate-plans.webp" />
                    </div>
                    <p>Corporate Plans</p>
                </a>
            </div>
            <div class="feature">
                <a href="askari-bancassurance">
                    <div>
                        <img class="img" src="./assets/images/bancassurance-plans.webp" />
                    </div>
                    <!-- <p id="bancassurancePlans"></p> -->
                    <p id="bancassurancePlans">Loading...</p>
                </a>
            </div>
            <div class="feature">
                <a href="takaful-plans">
                    <div>
                        <img class="img" src="./assets/images/takaful-plans.webp" />
                    </div>
                    <p>Takaful Plans</p>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="calculator-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7"></div>
            <div class="col-md-5">
                <h2 class="title partnership-title">
                    <!-- Partnership designed for certainty in life -->
                </h2>
                <p class="detail partnership-detail">
                    <!-- Answer a few questions to get the estimated coverage you need. -->
                </p>
                <a href="complaints-and-grievances" class="grad-button">Contact US</a>
                <!-- <button type="button" class="white-button" data-bs-toggle="modal" data-bs-target="#comingSoonCal">
                    Partnership calculator
                </button> -->
            </div>
        </div>
    </div>
</section>



<section class="blog-section">
    <div class="container">
        <div class="col-md-12">
            <div class="title" data-en="Media & Events" data-ur="میڈیا اور ایونٹس">
                Media & Events
            </div>
            <div class="slider-container">
                <div class="arrow left-arrow">&#10094;</div>

                <div class="blog-slider">
                    <div data-ur="البرکہ بینک"> 
                        <a href="news-blog" class="blog-box">
                            <div class="blog-detail">
                                <div class="category" data-en="Al Baraka Bank" data-ur="البرکہ بینک">Al Baraka Bank
                                </div>
                                <div class="detail"
                                    data-en="Askari Life - Window Takaful Operations; a part of the AWT group,..."
                                    data-ur="آسکری لائف - ونڈو تکافل آپریشنز؛ اے ڈبلیو ٹی گروپ کا ایک حصہ،...">Askari
                                    Life - Window Takaful Operations; a part of the AWT group,...</div>
                            </div>
                            <div class="blog-img">
                                <img class="img" src="./assets/images/window-takaful-operations/IMG_3.webp" />
                            </div>
                        </a>
                    </div>

                    <div data-ur="آسکری بینک اور آسکری لائف">
                        <a href="news-blog" class="blog-box">
                            <div class="blog-detail">
                                <div class="category" data-en="Askari Bank & Askari Life"
                                    data-ur="آسکری بینک اور آسکری لائف">Askari Bank & Askari Life</div>
                                <div class="detail"
                                    data-en="Askari Life Assurance Co. Ltd., a part of the AWT group has signed a bancassurance distribution..."
                                    data-ur="آسکری لائف اشورنس کمپنی لمیٹڈ، اے ڈبلیو ٹی گروپ کا ایک حصہ ہے، نے بانکا اشورنس ڈسٹری بیوشن پر دستخط کیے...">
                                    Askari Life Assurance Co. Ltd., a part of the AWT group has signed a bancassurance
                                    distribution...</div>
                            </div>
                            <div class="blog-img">
                                <img class="img" src="./assets/images/askari-bank-askari-life/IMG_2.webp" />
                            </div>
                        </a>
                    </div>

                    <div data-ur="فرسٹ وومن بینک لمیٹڈ">
                        <a href="news-blog" class="blog-box">
                            <div class="blog-detail">
                                <div class="category" data-en="First Women Bank Limited" data-ur="فرسٹ وومن بینک لمیٹڈ">
                                    First Women Bank Limited</div>
                                <div class="detail"
                                    data-en="Through this partnership, both parties are devoted to provide their customers with the best services..."
                                    data-ur="اس شراکت داری کے ذریعے، دونوں فریقین اپنے صارفین کو بہترین خدمات فراہم کرنے کے لیے پرعزم ہیں...">
                                    Through this partnership, both parties are devoted to provide their customers with
                                    the best services...</div>
                            </div>
                            <div class="blog-img">
                                <img class="img" src="./assets/images/partnership-FWBL/7.webp" />
                            </div>
                        </a>
                    </div>

                    <div data-ur="ایچ آر ایس جی">
                        <a href="news-blog" class="blog-box">
                            <div class="blog-detail">
                                <div class="category" data-en="HRSG" data-ur="ایچ آر ایس جی">HRSG</div>
                                <div class="detail"
                                    data-en="Pakistan, Karachi 26th April 2019: Askari Life Assurance Company Limited, one of the leading life insurance..."
                                    data-ur="پاکستان، کراچی 26 اپریل 2019: آسکری لائف اشورنس کمپنی لمیٹڈ، ایک سرکردہ لائف انشورنس کمپنی...">
                                    Pakistan, Karachi 26th April 2019: Askari Life Assurance Company Limited, one of the
                                    leading life insurance...</div>
                            </div>
                            <div class="blog-img">
                                <img class="img" src="./assets/images/partnership-HRSG/IMG_2.webp" />
                            </div>
                        </a>
                    </div>

                    <div data-ur="محافظ فیملی تکافل">
                        <a href="news-blog" class="blog-box">
                            <div class="blog-detail">
                                <div class="category" data-en="Muhafiz Family Takaful" data-ur="محافظ فیملی تکافل">
                                    Muhafiz Family Takaful</div>
                                <div class="detail"
                                    data-en="“The Happiest people do not have the best of everything, they make the best of everything!”..."
                                    data-ur="”خوشحال لوگ سب سے بہترین چیزیں نہیں رکھتے، وہ سب سے بہترین بناتے ہیں!“">
                                    “The Happiest people do not have the best of everything, they make the best of
                                    everything!”...</div>
                            </div>
                            <div class="blog-img">
                                <img class="img" src="./assets/images/partnership-muhafiz/IMG_2.webp" />
                            </div>
                        </a>
                    </div>

                    <div data-ur="سلک بینک">
                        <a href="news-blog" class="blog-box">
                            <div class="blog-detail">
                                <div class="category" data-en="Silkbank" data-ur="سلک بینک">Silkbank</div>
                                <div class="detail"
                                    data-en="On September 11th, 2020, Askari Life Assurance Co. Ltd; a part of the AWT group, signed a proprietary..."
                                    data-ur="11 ستمبر 2020 کو، آسکری لائف اشورنس کمپنی لمیٹڈ؛ اے ڈبلیو ٹی گروپ کا ایک حصہ، ایک پروپرائٹری معاہدہ...">
                                    On September 11th, 2020, Askari Life Assurance Co. Ltd; a part of the AWT group,
                                    signed a proprietary...</div>
                            </div>
                            <div class="blog-img">
                                <img class="img" src="./assets/images/partnership-silkbank/IMG_2.webp" />
                            </div>
                        </a>
                    </div>

                    <div data-ur="سامبا بینک لمیٹڈ">
                        <a href="news-blog" class="blog-box">
                            <div class="blog-detail">
                                <div class="category" data-en="Samba Bank Limited" data-ur="سامبا بینک لمیٹڈ">Samba Bank
                                    Limited</div>
                                <div class="detail"
                                    data-en="This partnership would help the banking consumers to dive into the innovative opportunities for the ultimate life..."
                                    data-ur="یہ شراکت داری بینکنگ صارفین کو بہترین زندگی کے لیے جدید مواقع فراہم کرنے میں مدد دے گی...">
                                    This partnership would help the banking consumers to dive into the innovative
                                    opportunities for the ultimate life...</div>
                            </div>
                            <div class="blog-img">
                                <img class="img" src="./assets/images/partnership-samba-bank/IMG_1.webp" />
                            </div>
                        </a>
                    </div>

                    <div data-ur="سلک بینک ماسٹر کارڈ">
                        <a href="news-blog" class="blog-box">
                            <div class="blog-detail">
                                <div class="category" data-en="Silkbank Master Card" data-ur="سلک بینک ماسٹر کارڈ">
                                    Silkbank Master Card</div>
                                <div class="detail"
                                    data-en="Through this collaboration, both parties are determined to prioritize satisfaction of customers and help them live..."
                                    data-ur="اس تعاون کے ذریعے، دونوں فریقین صارفین کی اطمینان کو اولین ترجیح دینے اور انہیں بہترین زندگی فراہم کرنے کے لیے پرعزم ہیں...">
                                    Through this collaboration, both parties are determined to prioritize satisfaction
                                    of customers and help them live...</div>
                            </div>
                            <div class="blog-img">
                                <img class="img" src="./assets/images/partnership-silkBank-marter-card/IMG_3.webp" />
                            </div>
                        </a>
                    </div>
                </div>


                <div class="arrow right-arrow">&#10095;</div>
            </div>
        </div>
    </div>
</section>


<!-- <section class="blog-section" lang="en" data-ur="meda-&-events">
    <div class="container">
        <div class="col-md-12">
            <div class="title" data-en="Media & Events" data-ur="میڈیا اور ایونٹس">
                Media & Events
            </div>
            <div class="blog-slider">
                
            </div>
        </div>
    </div>
</section> -->


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const slider = document.querySelector('.blog-slider');
        const leftArrow = document.querySelector('.left-arrow');
        const rightArrow = document.querySelector('.right-arrow');

        // Scroll right
        rightArrow.addEventListener('click', function () {
            slider.scrollBy({
                left: 300, // Adjust the scroll distance as needed
                behavior: 'smooth'
            });
        });

        // Scroll left
        leftArrow.addEventListener('click', function () {
            slider.scrollBy({
                left: -300, // Adjust the scroll distance as needed
                behavior: 'smooth'
            });
        });
    });

</script>

<?php include("./includes/footer.php"); ?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        function setCorrectContent() {
            // Get the 'lang' parameter from the URL
            var urlParams = new URLSearchParams(window.location.search);
            var lang = urlParams.get('lang');

            // Determine the correct text based on the language parameter
            var legacyTitle = '';
            var legacyDetail = '';
            if (lang === 'ur') {
                legacyTitle = 'اعلیٰ معیار کی پہچان';
                legacyDetail = 'ہم آپ کے آج اور مستقبل کی تمام مالی ضروریات کا مداوا کرنے کے لئے قابل بھروسہ خدمات فراہم کرتے ہیں';
            } else {
                legacyTitle = 'A Legacy of Excellence';
                legacyDetail = 'We provide reliable services to address all your financial needs of now and the future.';
            }

            // Update the content div with the correct language text
            $('.legacy-title').html(legacyTitle);
            $('.legacy-detail').html(legacyDetail);
        }

        // Run initially
        setCorrectContent();

        // Re-run periodically to ensure the correct content is set
        setInterval(setCorrectContent, 100); // Adjust the interval as needed
    });
</script>
<script>
    $(document).ready(function () {
        function setCorrectContent() {
            // Get the 'lang' parameter from the URL
            var urlParams = new URLSearchParams(window.location.search);
            var lang = urlParams.get('lang');

            // Determine the correct text based on the language parameter
            var partnershipTitle = '';
            var partnershipDetail = '';
            if (lang === 'ur') {
                partnershipTitle = 'اعلیٰ معیار کی پہچان';
                partnershipDetail = 'مطلوبہ تخمینہ شدہ کوریج حاصل کرنے کے لیے چند سوالات کے جواب دیں۔';
            } else {
                partnershipTitle = 'Partnership designed for certainty in life';
                partnershipDetail = 'Answer a few questions to get the estimated coverage you need.';
            }

            // Update the content div with the correct language text
            $('.partnership-title').html(partnershipTitle);
            $('.partnership-detail').html(partnershipDetail);
        }

        // Run initially
        setCorrectContent();

        // Re-run periodically to ensure the correct content is set
        setInterval(setCorrectContent, 100); // Adjust the interval as needed
    });
</script>
<script>
    $(document).ready(function () {
        function setCorrectContent() {
            // Get the 'lang' parameter from the URL
            var urlParams = new URLSearchParams(window.location.search);
            var lang = urlParams.get('lang');

            // Determine the correct text based on the language parameter
            var content = '';
            if (lang === 'ur') {
                content = 'بینک انشورنس منصوبے';
            } else {
                content = 'Bancassurance Plans';
            }

            // Update the content div with the correct language text
            $('#bancassurancePlans').html(content);
        }

        // Run initially
        setCorrectContent();

        // Re-run periodically to ensure the correct content is set
        setInterval(setCorrectContent, 100); // Adjust the interval as needed
    });
</script>