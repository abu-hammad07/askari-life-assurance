<?php include("./includes/header.php");

$captcha = rand(10000, 99999);

?>
<style>
    .captcha_box {
        background-color: #822c74;
        text-align: center;
        color: #fff;
        font-size: 24px;
        font-weight: 700;
        border-radius: 5px;
        margin: 0 auto;
    }

    .data-table {
        width: 80%;
        margin: 0 auto;
        border-collapse: collapse;
    }

    .data-table th,
    .data-table td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .data-table th {
        background-color: #822c74;
        color: #fff;
        text-align: center;
    }
</style>

<section class="page-section complaint">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="title">Payment Information</h2>
            </div>
        </div>
    </div>
</section>

<!-- Start SideMenu -->
<?php include("./includes/sideMenu.php"); ?>
<!-- End SideMenu -->


<section class="page-content auth-page pt-5">
    <div class="container">
        <div class="row justify-content-between align-items-center mb-4">
            <div class="col-md-6 d-none d-md-block">
                <img src="./assets/images/agent.webp" class="w-100 object-rounded" alt="">
            </div>

            <div class="col-md-5">
                <div class="title-2 mb-5">Payment</div>
                <form id="paymentForm">
                    <div class="form-group">
                        <label class="mb-1">Policy number<span class="text-danger">*</span></label>
                        <input class="form-control bg-gray" type="text" name="inpPolicyNo" required />
                    </div>
                    <div class="form-group">
                        <label class="mb-1">CNIC number<span class="text-danger">*</span></label>
                        <input class="form-control bg-gray" type="text" name="inpCNICNo" required />
                    </div>
                    <div class="form-group">
                        <label class="mb-1">Mobile number<span class="text-danger">*</span></label>
                        <input class="form-control bg-gray" type="text" name="inpMobileNo" required />
                    </div>
                    <div class="form-group">
                        <label class="mb-1">Security Code<span class="text-danger">*</span></label>
                        <input class="form-control bg-gray" type="text" name="inpSecurityCode" id="captcha_code"
                            required />
                        <span class="text-danger" id="security_capcha_error"></span>
                    </div>
                    <div class="form-group">
                        <label class="mb-1">Captcha Code<span class="text-danger">*</span></label>
                        <div class="captcha_box" id="captchaCode" name="captchaCode"><?php echo $captcha ?></div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-1">Submit</button>
                    </div>
                </form>

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="agentModal" tabindex="-1" aria-labelledby="agentModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="agentModalLabel">Agent Information</h5>
                        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal-body">
                        <!-- Fetched data will be displayed here -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="grad-button" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div id="result">

            </div> <!-- This is where the fetched data will be displayed -->
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- <script>
    $(document).ready(function () {
        $('#paymentForm').on('submit', function (e) {
            e.preventDefault(); // Prevent form from submitting the default way

            const captchaInput = $('#captcha_code').val();
            const captchaError = $('#security_capcha_error');
            const correctCaptcha = '<?php //echo $captcha; ?>'; // The correct captcha value

            if (captchaInput !== correctCaptcha) {
                captchaError.text('Please correct the captcha code');
            } else {
                captchaError.text('');

                $.ajax({
                    type: 'POST',
                    url: 'controller/paymentInformation.php',
                    data: $(this).serialize(),
                    success: function (response) {
                        // Parse the JSON response
                        var data = JSON.parse(response);

                        if (data.error) {
                            $('#result').html('<p>Error: ' + data.error + '</p>');
                        } else {
                            // Construct the HTML to display the data
                            var html = "<table class='data-table'>";
                            html += "<thead><tr><th colspan='2'>Payment Method</th></tr></thead>";
                            html += "<tr><th>Kuickpay ID</th><td>" + data.apiResponse.KuickpayID + "</td></tr>";
                            html += "<tr><th>Payment Link</th><td><a href='" + data.apiResponse.PaymentLink + "' target='_blank'>" + data.apiResponse.PaymentLink + "</a></td></tr>";
                            html += "</table>";

                            $('#modal-body').html(html); // Display the response data
                            $('#agentModal').modal('show'); // Show the modal
                        }
                    },
                    error: function () {
                        $('#result').html('<p>An error has occurred</p>');
                    }
                });
            }
        });
    });
</script> -->


<script>
    $(document).ready(function () {
        $('#paymentForm').on('submit', function (e) {
            e.preventDefault(); // Prevent form from submitting the default way

            const captchaInput = $('#captcha_code').val();
            const captchaError = $('#security_capcha_error');
            const correctCaptcha = '<?php echo $captcha; ?>'; // The correct captcha value

            if (captchaInput !== correctCaptcha) {
                captchaError.text('Please correct the captcha code');
            } else {
                captchaError.text('');

                $.ajax({
                    type: 'POST',
                    url: 'controller/paymentInformation.php',
                    data: $(this).serialize(),
                    success: function (response) {
                        // Parse the JSON response
                        var data = JSON.parse(response);

                        if (data.error) {
                            $('#result').html('<p>Error: ' + data.error + '</p>');
                        } else {
                            // Construct the HTML to display the data
                            var html = "<table class='data-table'>";
                            html += "<thead><tr><th colspan='2'>Payment Method</th></tr></thead>";
                            html += "<tr><th>Kuickpay ID</th><td>" + data.apiResponse.KuickpayID + "</td></tr>";

                            // Include the payment link only if it's valid
                            if (data.apiResponse.PaymentLink) {
                                html += "<tr><th>Payment Link</th><td><a href='" + data.apiResponse.PaymentLink + "' target='_blank'>" + data.apiResponse.PaymentLink + "</a></td></tr>";
                            } else {
                                html += "<tr><th>Payment Link</th><td>Not available</td></tr>";
                            }

                            html += "</table>";

                            $('#modal-body').html(html); // Display the response data
                            $('#agentModal').modal('show'); // Show the modal
                        }
                    },
                    error: function () {
                        $('#result').html('<p>An error has occurred</p>');
                    }
                });
            }
        });
    });
</script>



<?php include("./includes/footer.php"); ?>