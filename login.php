<?php include("./includes/header-login.php"); ?>

<section class="auth-page">
    <div class="row no-gutters">
        <div class="col-lg-6 d-none d-lg-block img-left px-lg-0">
            <img src="./assets/images/login.webp" />
        </div>
        <div class="col-lg-6 px-lg-0">
            <div class="content-right">
                <h2 class="title">Login</h2>
                <p class="content">Not a member?<a href="#"> Register now</a></p>
                <form>
                    <div class="form-group">
                        <label>Phone Number*</label>
                        <input class="form-control" type="tel" />
                    </div>
                    <div class="form-group">
                        <label>Password*</label>
                        <input class="form-control" type="password" />
                    </div>
                    <div class="d-flex align-item-center justify-content-between subs">
                        <div>
                            <input type="checkbox" />
                            <label class="subs">Remember me?</label>
                        </div>
                        <a href="#" class="subs">Forget Password?</a>
                    </div>
                    <button type="submit" class="btn-1">Login</button>
                </form>
            </div>
        </div>
    </div>
</section>


<?php include("./includes/footer-login.php"); ?>