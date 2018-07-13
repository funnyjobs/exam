<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/vendor.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/elephant.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/login-2.min.css">
  </head>
  <body>
    <div class="login">
      <div class="login-body">
        <a class="login-brand" href="<?= base_url() ?>">
          <img class="img-responsive" src="<?= base_url() ?>assets/img/logo.svg" alt="Exam">
        </a>
        <div class="login-form">
          <form data-toggle="validator">
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" class="form-control" type="email" name="email" spellcheck="false" autocomplete="off" data-msg-required="Please enter your email address." required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input id="password" class="form-control" type="password" name="password" minlength="6" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
            </div>
            <div class="form-group">
              <label class="custom-control custom-control-primary custom-checkbox">
                <a href="<?= base_url() ?>forget">Forgot password?</a>
              </label>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
          </form>
        </div>
      </div>
    </div>
    <script src="<?= base_url() ?>assets/js/vendor.min.js"></script>
    <script src="<?= base_url() ?>assets/js/elephant.min.js"></script>
  </body>
</html>