<?php   require($_SERVER['DOCUMENT_ROOT'].'/inc/login.php'); ?>
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img
                src="/img/banners/setu_bulding.jpg"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;height: 500px;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-white">

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
            <?php  if(!empty($login_err)){ echo '<div class="alert alert-danger">' . $login_err . '</div>'; } ?>
            <form action="login" method="post">
                  <div class="form-floating mb-4">
                    <input type="email" id="email" name="email" class="form-control form-control-lg <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>" />
                    <label class="form-label" for="email">Email address <span class="invalid-feedback">: <?php echo $email_err; ?></label>
                  </div>

                  <div class="form-floating mb-4">
                    <input type="password" id="password" name="password" class="form-control form-control-lg <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" />
                    <label class="form-label" for="password">Password<span class="invalid-feedback">: <?php echo $password_err; ?></label>
                  </div>

                  <div class="d-grid gap-2">
                    <button class="btn btn-success btn-lg btn-block" type="submit">Login</button>
                  </div>
                  </form>
                  <p class="mb-5 pb-lg-2" style="color: #817f39;">Don't have an account? <a href="register" style="color: #81393c;">Create New Account</a></p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>