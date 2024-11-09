<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/loginregister.css" />
  </head>
  <body>
    <!-- CATERING HUB LOGO -->
    <div class="log-reg">
      <img
        src="../assets/images/cateringhub-logo.png"
        alt="logo-cateringhub"
        width="300px"
      />
    </div>
    <!-- CATERING HUB LOGO END -->

    <!-- FORM -->
    <div class="form">
      <form id="log-reg-form">
        <label for="email">Email address</label>
        <input
          type="email"
          id="log-reg-email"
          name="log-reg-email"
          placeholder="somebody@example.com"
        />
        <div id="log-reg-email-error"></div>
        <label for="name">Password</label>
        <input
          type="password"
          id="log-reg-password"
          name="log-reg-password"
          placeholder="Password"
        />
        <div id="log-reg-password-error"></div>
        <input class="log-reg-btn" type="submit" value="Login" />
      </form>
      <!-- FORM END -->

      <!-- LOGIN WITH -->
      <div class="log-reg-with">
        <p>Or, login with</p>

        <div class="container">
          <div class="logo">
            <a href="https://myaccount.google.com/"
              ><img src="../assets/images/google-logo.png" alt="Google" width="60px"
            /></a>
          </div>
          <div class="logo">
            <a href="https://www.facebook.com/login/"
              ><img src="../assets/images/facebook-logo.png" alt="Facebook" width="60px"
            /></a>
          </div>
          <div class="logo">
            <a href="https://appleid.apple.com/"
              ><img src="../assets/images/apple-logo.png" alt="Apple" width="60px"
            /></a>
          </div>
        </div>
      </div>
      <!-- LOGIN WITH END -->

      <!-- FOOTER -->
      <div class="footer">
        <p>Haven't account? <a href="register">Register now</a></p>
      </div>
      <!-- FOOTER END -->
    </div>
  </body>
</html>
