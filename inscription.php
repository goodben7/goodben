<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Inscription -Goodben</title>
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
        <form method="post" action="" class="card-body cardbody-color p-lg-5">
          <div class="text-center">
            <a href="index.html"><img src="assets/img/Logo Noir .png" 
            class="img-fluid profile-image-pic img-thumbnail" width="50%" alt="logo"></a>
          </div> <br> <br>
          <div class="mb-3">
            <input name="name" pattern="^[a-z-A-Z ]{1,40}$"  type="text" 
            class="form-control" id="Name" 
            aria-describedby="emailHelp" placeholder="Nom" required="required">
          </div>

          <div class="mb-3">
          <input name="middleName" pattern="^[a-z-A-Z ]{1,40}$" 
          pattern="^[A-Z][a-z- ]{1,40}$" type="text" class="form-control" id="middleName" 
          placeholder="Post-Nom" required="required">
          </div>

          <div class="mb-3">
            <input name="firstName" pattern="^[a-z-A-Z ]{1,40}$"
            type="text" class="form-control" id="firstName" 
            placeholder="Prenom" required="required">
          </div>

          <div class="mb-3">
            <input name="email"   maxlength="20"  type="emal" class="form-control" id="email" 
            placeholder="E-mail" required>
          </div>

          <div class="mb-3">
            <input name="password" type="password" class="form-control" id="password" 
            placeholder="Mot de passe" required="required">
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-danger">Inscription</button>
          </div>
        </form>
        <div class="card-body cardbody-color p-lg-5">
          <div  class="form-text text-center mb-5 text-dark">
            you have an account? 
            <a href="connexion.php" class="text-dark fw-bold">Login</a>
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