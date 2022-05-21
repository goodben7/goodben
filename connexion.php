<!DOCTYPE html>
<html lang="fr"> 

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Connexion -Goodben</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

  <link rel="stylesheet" type="text/css" href="assets/css/mainStyle.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
  crossorigin="anonymous">
</head>

<body>
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card my-5">
        <?php if (isset($_GET['err'])){?>
        <span class="badge bg-danger"><?php echo $_GET['err']; ?></span>
        <?php } ?>
        <?php if (isset($_GET['conf'])){?>
        <span class="badge rounded-pill bg-primary"><?php echo $_GET['conf']; ?></span>
        <?php } ?>
        <form method="post" action="" class="card-body cardbody-color p-lg-5">
          <div class="text-center">
            <a href="index.html"><img src="assets/img/Logo Noir .png" class="img-fluid profile-image-pic img-thumbnail"
            width="50%" alt="logo"></a>
          </div> <br> <br>
          <div class="mb-3">
            <input name="email"   maxlength="20"  type="emal" class="form-control" id="email" 
           	placeholder="E-mail" required>
          </div>
          <div class="mb-3">
            <input name="password" type="password" class="form-control" id="password" placeholder="Mot de passe" required>
          </div>
          <div class="text-center">
          	<button type="submit" class="btn btn-danger">Connexion</button>
          </div>
        </form>
        <div class="card-body cardbody-color p-lg-5">
          <div id="emailHelp" class="form-text text-center mb-5 text-dark">
            Not Registered? 
            <a href="inscription.php" class="text-dark fw-bold"> Create an Account </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
</body>
</html>