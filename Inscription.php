<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registre</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap//dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap\site\docs\4.1\examples\checkout\form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <h2>CREATE YOUR ACCOUNT</h2>
      </div>

      <div class="row">
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Let's Strat  </h4>
          <form class="needs-validation" method="POST" action="verif.php" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" name="nom" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" name="prenom"class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">PHONE</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">+216</span>
                </div>
                <input type="text" name="tel" class="form-control" id="username" placeholder="Phone" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email </label>
              <input type="email" name="AdresseMail" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
                   <div class="mb-3">
              <label for="email"> Passowrd </label>
              <input type="password" name="Mdp" class="form-control" id="email" placeholder="">
              <div class="invalid-feedback">
                Please enter Password 
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" name="Rue" class="form-control" id="address" placeholder="Rue ... " required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Ville</label>
                <select name ="Ville" class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>Ariana</option>
                  <option>Béja</option>
                  <option>Ben Arous</option>
                  <option>Bizerte</option>
                  <option>Gabes</option>
                  <option>Gafsa</option>
                  <option>Jendouba</option>
                  <option>Kairouan</option>
                  <option>Kasrine</option>
                  <option>Soussa</option>
                  <option>Monastir</option>
                  <option>Sfax</option>
                  <option>Mahdia</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
             <div class="col-md-3 mb-3">
                <label for="zip">City</label>
                <input name="City" type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                Zip Code required.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
          
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit1" >Create Accout</button>
          </form>
        </div>
      </div>
    </div>
   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
  </body>
</html>
    </body>
</html>
