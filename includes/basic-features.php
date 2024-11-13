<div class="detail">
  <div class="accordion plain-accordian" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
          aria-expanded="true" aria-controls="collapseOne">
          Protection Benefit
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          How well your future may be planned? Your protection along with your
          loved ones' protection is priceless! Our Family Takaful Protection benefit
          ensures the financial safety of you and your family in cases of unfortunate
          events. The Certificate pays the beneficiary(ies) an amount equal to the PIA
          cash Value or Sum Covered whichever is higher.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
          aria-expanded="false" aria-controls="collapseTwo" id="maturityBenefit">
          <!-- Maturity Benefit -->
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Family Takaful coverage is more than just a safety net for you and your
          family! The Family Takaful Certificate’s maturity benefit ensures that you
          receive the amount of your Participant’s Investment Account (PIA) cash
          value at the completion of your certificate term, allowing you to fulfill all
          those bigger dreams that you had been putting on hold
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="partialWithdrawal">
          <!-- Partial Withdrawal -->
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          With the benefit of Partial Withdrawals, you can withdraw up to 50% of the
          net cash surrender value of your PIA provided you maintain a minimum net
          cash surrender value of Rs. 10,000/- only!
          <br />
          <br />
          With this benefit, your money is never bound and can be accessed with a
          minimal charge of Rs. 500/-.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" id="freeLookPeriod">
          <!-- Free Look Period -->
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Family Takaful Certificate is a long-time commitment towards your goal to
          provide desired financial security and prosperity to yourself and your loved
          ones. However, in case you realize that you are not satisfied with the
          product offering, you need not worry, as Askari Life-Window Takaful
          Operations offers a free look period where you can return the Participant’s
          Membership Documents (PMD) within 14 days and get a 100% refund of
          contribution.
        </div>
      </div>
    </div>


    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" id="annuityBenefit">
          <!-- Annuity Benefit -->
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Through this option, you will be given the option to get your maturity value
          on a monthly basis up to the years you have selected. Maturity value will
          continue to grow through Shariah Compliant Investment in your PIA
          (Participant’s Investment Account) till the last month of your selected
          tenure to receive the monthly Annuity benefit.
        </div>
      </div>
    </div>


    <div class="accordion-item">
      <h2 class="accordion-header" id="headingSix">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
          aria-expanded="false" aria-controls="collapseSix" id="inflationProtection">
          <!-- Inflation Protection -->
        </button>
      </h2>
      <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          It’s an unfortunate fact that the money we have is worth a little less every
          day in this uprising economy. As rising inflation erodes our savings bit by bit,
          we need a plan to keep our savings intact. PurSukoon Kal Family Takaful
          offers this unique feature dedicated to combat inflation with selected
          increment in the contribution every year..
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingSeven">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" id="surplusSharing">
          <!-- Surplus Sharing -->
        </button>
      </h2>
      <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          In addition to risk mitigation benefits, Takaful offers a unique feature of
          Surplus sharing to the Participants. Surplus in the Waqf, if any, shall be
          determined on an individual participant basis at the end of each financial
          year, after maintaining necessary reserves as per the advice of the
          appointed Actuary and Shari’ah Adviser. The distributable surplus will be
          allocated to the PIA in a per defined manner to the eligible Participants
        </div>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        function setCorrectContent() {
            // Get the 'lang' parameter from the URL
            var urlParams = new URLSearchParams(window.location.search);
            var lang = urlParams.get('lang');

            // Determine the correct text based on the language parameter
            var titleContent1 = '';
            var titleContent2 = '';
            var titleContent3 = '';
            var titleContent4 = '';
            var titleContent5 = '';
            var titleContent6 = '';

            if (lang === 'ur') {
                titleContent1 = 'اختتام پر فائدہ';
                titleContent2 = 'جزوی دستبرداری';
                titleContent3 = 'غور و فکر کا دورانیہ';
                titleContent4 = 'سالیانہ فائدہ';
                titleContent5 = 'افراطِ زر سے تحفظ';
                titleContent6 = 'سرپلس میں شراکت';
            } else {
                titleContent1 = 'Maturity Benefit';
                titleContent2 = 'Partial Withdrawal';
                titleContent3 = 'Free Look Period';
                titleContent4 = 'Annuity Benefit';
                titleContent5 = 'Inflation Protection';
                titleContent6 = 'Surplus Sharing';
            }

            // Update the content divs with the correct language text
            $('#maturityBenefit').html(titleContent1);
            $('#partialWithdrawal').html(titleContent2);
            $('#freeLookPeriod').html(titleContent3);
            $('#annuityBenefit').html(titleContent4);
            $('#inflationProtection').html(titleContent5);
            $('#surplusSharing').html(titleContent6);
        }

        // Run initially
        setCorrectContent();

        // Re-run periodically to ensure the correct content is set
        setInterval(setCorrectContent, 100); // Adjust the interval as needed
    });
</script>