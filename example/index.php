<?php
include_once 'CsrfToken.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
	<style>
	body {
		background: #333;
	}
	</style>
  </head>
  <body>
    <section class="hero is-fullheight">
      <div class="hero-body">
        <div class="container">
          <div class="columns is-centered">
            <div class="column is-one-third">
              <div class="box">
                <h1 class="title is-3 has-text-centered">Login</h1>
                <form action="process.php" method="post">
                  <input type="hidden" name="csrf_token" value="<?php echo CsrfToken::generate(); ?>">
                  <div class="field">
                    <label class="label">Username</label>
                    <div class="control">
                      <input name='username' class="input" type="text" placeholder="Enter your username">
                    </div>
                  </div>
                  <div class="field">
                    <label class="label">Password</label>
                    <div class="control">
                      <input class="input" name="password" type="password" placeholder="Enter your password">
                    </div>
                  </div>
                  <div class="field">
                    <div class="control">
                      <input type="submit" value="Login" class="button is-primary is-fullwidth" name='login_btn'>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>