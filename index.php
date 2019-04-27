<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="offset-md-4 col-md-4" style="margin-top:10%;">
              <h2>Login</h2>
              <form action="login.php" method="POST">
                  <div class="form-group">
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    <small id="emailHelp" class="form-text text-muted"> We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary">Login</button><br><br>
                  <label for="signup">Don't have account? </label>
                  <a href="signup.php" id="signup">Signup</a>
              </form>
            </div>
        </div>
      </div>
  </body>
</html>
