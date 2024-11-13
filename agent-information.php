<?php
session_start();
// include "controller/Database.php";
include "./includes/header.php";

// if (!isset($_SESSION['captcha'])) {
//     $_SESSION['captcha'] = rand(10000, 99999);
// }

// $_SESSION['captcha'] =
$captcha = rand(10000, 99999);
// $captcha = rand(10000, 99999);

?>


<style>

</style>

<section class="page-section complaint">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="title">Agent Information</h2>
            </div>
        </div>
    </div>
</section>

<!-- Start SideMenu -->
<?php include("./includes/sideMenu.php"); ?>
<!-- End SideMenu -->


<section class="page-content auth-page pt-5">
    <div class="container">
        <!-- <div class="row justify-content-between align-items-center">
            <div class="col-md-4">
                <div class="title-2 mb-5">Search Agent Profile</div>
                <form method="POST" id="agent-form">
                    <div class="form-group">
                        <label class="mb-1">Agent Code<span class="text-danger">*</span></label>
                        <input class="form-control bg-gray" name="agent_code" type="text" required />
                    </div>
                    <div class="form-group">
                        <label class="mb-1">Security Code<span class="text-danger">*</span></label>
                        <input class="form-control bg-gray" name="security_code" id="captcha_code" type="text"
                            required />
                        <span class="text-danger" id="security_capcha_error"></span>
                    </div>
                    <div class="form-group">
                        <label class="mb-1">Captcha Code<span class="text-danger">*</span></label>
                        <div class="captcha_box"><?php echo $captcha ?></div>
                    </div>
                    <button type="submit" class="btn btn-1 float-left">Submit</button>
                </form>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <img src="./assets/images/agent.webp" class="w-100 object-rounded" alt="">
            </div>
        </div> -->


        <div class="row justify-content-between align-items-center">
            <div class="col-md-4">
                <div class="title-2 mb-5">Search Agent Profile</div>
                <form method="POST" id="agent-form">
                    <div class="form-group">
                        <label class="mb-1">Agent Code <span class="text-danger">*</span></label>
                        <input class="form-control bg-gray" name="agent_code" type="text" required />
                    </div>
                    <div class="form-group">
                        <label class="mb-1">Security Code <span class="text-danger">*</span></label>
                        <input class="form-control bg-gray" name="security_code" id="captcha_code" type="text"
                            required />
                        <span class="text-danger" id="security_capcha_error"></span>
                    </div>
                    <div class="form-group">
                        <label class="mb-1">Captcha Code <span class="text-danger">*</span></label>
                        <div class="captcha_box" id="captcha_box"><?php echo $captcha; ?></div>
                    </div>
                    <button type="submit" class="btn btn-1 float-left">Submit</button>
                </form>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <img src="./assets/images/agent.webp" class="w-100 object-rounded" alt="Agent Image">
            </div>
        </div>



        <!-- Display agent information here -->
        <!-- Modal -->
        <div class="modal fade" id="agentModal" tabindex="-1" aria-labelledby="agentModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="agentModalLabel">Agent Information</h5>
                        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close"
                            data-bs-dismiss="modal">
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
            <div id="result"></div> <!-- This is where the fetched data will be displayed -->
        </div>


    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<!-- <script>
    $(document).ready(function () {
        $('#agent-form').on('submit', function (e) {
            e.preventDefault(); // Prevent the default form submission

            const captchaInput = $('#captcha_code').val();
            const captchaError = $('#security_capcha_error');
            const correctCaptcha = '<?php //echo $captcha; ?>'; // The correct captcha value

            if (captchaInput !== correctCaptcha) {
                captchaError.text('Please correct the captcha code');
            } else {
                captchaError.text('');
                $.ajax({
                    type: 'POST',
                    url: 'controller/agentInformation.php',
                    data: $(this).serialize(),
                    success: function (response) {
                        var data = JSON.parse(response);

                        if (data.error) {
                            $('#result').html('<p>Error: ' + data.error + '</p>');
                        } else {
                            var html = "<table class='table'>";
                            html += "<thead><tr><th colspan='2'>Agent Information</th></tr></thead>";
                            html += "<tbody>";
                            html += "<tr><th>Agent Code</th><td>" + data.agentInfo.AgentCode + "</td></tr>";
                            html += "<tr><th>Agent Name</th><td>" + data.agentInfo.AgentName + "</td></tr>";
                            html += "<tr><th>Agent Designation</th><td>" + data.agentInfo.AgentDesignation + "</td></tr>";
                            html += "<tr><th>Last four digits of CNIC</th><td>" + data.agentInfo.CNICdigits + "</td></tr>";
                            html += "<tr><td colspan='2'>These details are provided solely for informational purposes. This may or may not represent the most recent available data. Please feel free to contact Head Office (021-111-225-275) with any Queries.</td></tr>";
                            html += "</tbody></table>";

                            $('#modal-body').html(html); // Display the response data in the modal body
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
        let submissionCount = 0; // Initialize submission counter

        $('#agent-form').on('submit', function (e) {
            e.preventDefault(); // Prevent the default form submission

            const captchaInput = $('#captcha_code').val();
            const captchaError = $('#security_capcha_error');
            const correctCaptcha = '<?php echo $captcha; ?>'; // The correct captcha value

            if (captchaInput !== correctCaptcha) {
                captchaError.text('Please correct the captcha code');
            } else {
                captchaError.text('');
                $.ajax({
                    type: 'POST',
                    url: 'controller/agentInformation.php',
                    data: $(this).serialize(),
                    success: function (response) {
                        var data = JSON.parse(response);

                        if (data.error) {
                            $('#result').html('<p>Error: ' + data.error + '</p>');
                        } else {
                            var html = "<table class='table'>";
                            html += "<thead><tr><th colspan='2'>Agent Information</th></tr></thead>";
                            html += "<tbody>";
                            html += "<tr><th>Agent Code</th><td>" + data.agentInfo.AgentCode + "</td></tr>";
                            html += "<tr><th>Agent Name</th><td>" + data.agentInfo.AgentName + "</td></tr>";
                            html += "<tr><th>Agent Designation</th><td>" + data.agentInfo.AgentDesignation + "</td></tr>";
                            html += "<tr><th>Last four digits of CNIC</th><td>" + data.agentInfo.CNICdigits + "</td></tr>";
                            html += "<tr><td colspan='2'>These details are provided solely for informational purposes. This may or may not represent the most recent available data. Please feel free to contact Head Office (021-111-225-275) with any Queries.</td></tr>";
                            html += "</tbody></table>";

                            $('#modal-body').html(html); // Display the response data in the modal body
                            $('#agentModal').modal('show'); // Show the modal

                            // Increment the submission counter
                            submissionCount++;

                            // Refresh the page after 3 submissions with a delay
                            if (submissionCount >= 3) {
                                setTimeout(function() {
                                    location.reload(); // Refresh the page after 5 seconds
                                }, 3000); // Delay in milliseconds (3000 ms = 3 seconds)
                            }
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





<!-- <script>
    $(document).ready(function () {
        let failedAttempts = 0; // Track failed attempts

        $('#agent-form').on('submit', function (e) {
            e.preventDefault(); // Prevent the default form submission

            const captchaInput = $('#captcha_code').val();
            const captchaError = $('#security_capcha_error');
            const correctCaptcha = '<?php echo $captcha; ?>'; // The correct captcha value

            if (captchaInput !== correctCaptcha) {
                failedAttempts++;
                captchaError.text('Please correct the captcha code');

                if (failedAttempts >= 3) {
                    // Refresh CAPTCHA after 3 failed attempts
                    refreshCaptcha();
                    failedAttempts = 0; // Reset the failed attempts counter
                }
            } else {
                failedAttempts = 0; // Reset the counter on success
                captchaError.text('');

                $.ajax({
                    type: 'POST',
                    url: 'controller/agentInformation.php',
                    data: $(this).serialize(),
                    success: function (response) {
                        var data = JSON.parse(response);

                        if (data.error) {
                            $('#result').html('<p>Error: ' + data.error + '</p>');
                        } else {
                            var html = "<table class='table'>";
                            html += "<thead><tr><th colspan='2'>Agent Information</th></tr></thead>";
                            html += "<tbody>";
                            html += "<tr><th>Agent Code</th><td>" + data.agentInfo.AgentCode + "</td></tr>";
                            html += "<tr><th>Agent Name</th><td>" + data.agentInfo.AgentName + "</td></tr>";
                            html += "<tr><th>Agent Designation</th><td>" + data.agentInfo.AgentDesignation + "</td></tr>";
                            html += "<tr><th>Last four digits of CNIC</th><td>" + data.agentInfo.CNICdigits + "</td></tr>";
                            html += "<tr><td colspan='2'>These details are provided solely for informational purposes. This may or may not represent the most recent available data. Please feel free to contact Head Office (021-111-225-275) with any Queries.</td></tr>";
                            html += "</tbody></table>";

                            $('#modal-body').html(html); // Display the response data in the modal body
                            $('#agentModal').modal('show'); // Show the modal
                        }

                    },
                    error: function () {
                        $('#result').html('<p>An error has occurred</p>');
                    }
                });
            }
        });

        function refreshCaptcha() {
            // Make an AJAX request to refresh the captcha
            $.ajax({
                url: 'controller/refreshCaptcha.php',
                success: function (newCaptcha) {
                    $('#captcha_box').html(newCaptcha); // Update the CAPTCHA code in the view
                }
            });
        }
    });
</script> -->




<?php include("./includes/footer.php"); ?>