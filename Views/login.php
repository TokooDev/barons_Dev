
<!doctype html>
<html lang="en">
  <head>
    <title>Connexion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=BASE_URL?>/public/css/style.css">
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-10 col-sm-12 offset-lg-3 offset-md-2 mt-5">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 offset-sm-1 text-light text-center move-bg">
                        <i class="fa fa-3x fa-shekel-sign mt-2"></i>
                        <h3>Connexion</h3>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 offset-sm-1 move-text pt-4 white-bg">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                            <?php
                            if(isset($_SESSION['erreurMessage'])){
                                echo '<p class="alert alert-danger">'.$_SESSION['erreurMessage'].'</p>';
                                session_destroy();
                            }
                            ?>
                        </div>
                        <form method="post" action="<?=BASE_URL?>/users/login" id="login-form">
                            <div class="row form-group mt-2">
                            <div class="col-1">
                                <i class="fas fa-2x fa-user"></i>
                            </div>
                            <div class="col-11">
                                <input type="text" name="login" placeholder="Tapez votre login" class="form-control">
                            </div>
                            </div>
                            <div class="row form-group mt-4">
                            <div class="col-1 mt-4">
                                <i class="fas fa-2x fa-lock"></i>
                            </div>
                            <div class="col-11 mt-4">
                            <input type="password" name="password" placeholder="Tapez votre mot de passe" class="form-control">
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-4">
                                    <div class="form-group form-section">
                                    <input type="submit" name="loginbtn" value="Se connecter" class="btn btn-block btn-success move-btn">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="<?=BASE_URL?>/public/js/script.js"></script>
  </body>
</html>