<?php include("./includes/header.php"); ?>

<section class="page-section life-value">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="title">Bancassurance Plans</h2>
            </div>
        </div>
    </div>
</section>

<!-- Start SideMenu -->
<?php include("./includes/sideMenu.php"); ?>
<!-- End SideMenu -->


<section class="page-content">
    <div class="container">
        <div class="row align-items-center img-text-section">
            <div class="col-md-6 mb-md-0 mb-4">
                <img class="portiat-img" src="./assets/images/asakri-life-value-plan/value1.webp" alt="">
            </div>
            <div class="col-md-6">
                <div class="text-section">
                    <h2 class="title">
                        Askari Life Value Plan
                    </h2>
                    <div class="detail">
                        As we move forward in life, financial requirements pertaining to the well-being of us and our
                        family becomes a major concern in our life. We want to provide the best of everything to our
                        loved ones. However, in these turbulent times of economic instability and future uncertainties
                        there is a risk of your income not keeping pace with your needs and goals. We need a concrete
                        plan that assists us in the time of need and make unexpected events less troublesome.
                        <br />
                        <br />
                        <a href="askari-life-value-plan" class="btn-4">View More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center img-text-section">
            <div class="col-md-6">
                <div class="text-section">
                    <h2 class="title">
                        Askari Life Bachat Plan
                    </h2>
                    <div class="detail">
                        As we journey through life, securing the financial well-being of ourselves and our loved ones
                        becomes paramount. While we all strive to provide the best for our families, the ever-shifting
                        economic landscape presents challenges to our evolving needs and aspirations. In these uncertain
                        times, having a robust plan in place is essential – one that not only offers comprehensive
                        protection but also nurtures the growth of your savings, providing unparalleled peace of mind.
                        <br />
                        <br />
                        <a href="askari-life-bachat-plan" class="btn-4">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-md-0 mb-4">
                <img class="portiat-img p-end" src="./assets/images/askarilifebachat-plan/bachat1.webp" alt="">
            </div>
        </div>
        <div class="row align-items-center img-text-section">
            <div class="col-md-6 mb-md-0 mb-4">
                <img class="portiat-img" src="./assets/images/zaminplan/zamin1.webp" alt="">
            </div>
            <div class="col-md-6">
                <div class="text-section">
                    <h2 class="title" id="zaminPlan">
                        Askari Zamin Plan
                    </h2>
                    <div class="detail">
                        The urge to provide the best to your family, the wanderlust to travel the world, to preserve the
                        memories and to cherish the good times, planning your finances and managing them while
                        maximizing returns is crucial. The uncertainties of life and their extent know no bounds. It's
                        all happiness in one moment and no one can predict what the next moment will bring along with
                        it. To overcome this, financial planning is very essential to keep the hardships at bay and be
                        protected if any of them make it your way.
                        <br />
                        <br />
                        <a href="askari-zamin-plan" class="btn-4">View More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row img-text-section">
            <div class="col-md-6">
                <div class="text-section">
                    <h2 class="title" id="muhafizPlan">
                        Askari Muhaffiz Plan
                    </h2>
                    <div class="detail">
                        Sometimes, we get so occupied with simply carrying on with the standard life and becoming
                        acclimated to it that vulnerabilities are frequently overlooked. Notwithstanding this, we
                        actually want to give the best life to our loved ones and consequently, plan our future in the
                        most ideal way. The ongoing worldwide pandemic being Covid-19 that shook the world recently was
                        a shocker for some as it made individuals value life much more. Life became more precious while
                        relationships strengthened more than ever.
                        <br />
                        <br />
                        <a href="/askari-muhaffiz-plan.php" class="btn-4">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-md-0 mb-4">
                <img class="portiat-img" src="./assets/images/muhafiz/muhafiz1.webp" alt="">
            </div>
        </div>
    </div>
</section>


<?php include("./includes/footer.php"); ?>
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
            titleContent = 'عسکری ضامن پلان';
            subtitleContent = 'عسکری محافظ پلان';
        } else {
            titleContent = 'Askari Zamin Plan';
            subtitleContent = 'Askari Muhaffiz plan';
        }

        // Update the content divs with the correct language text
        $('#zaminPlan').html(titleContent);
        $('#muhafizPlan').html(subtitleContent);
    });
</script>