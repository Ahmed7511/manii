
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Contact</title>
</head>
<body>
   @include('layouts.app')
        <form id="form" class="mx-3">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Bertrand">
          </div><div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Thibaut">
          </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Multiple files input example</label>
            <input class="form-control" name="file" type="file" id="file" multiple>
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">Example textarea</label>
            <textarea class="form-control" name="content" id="content" rows="3"></textarea>
          </div>
            <div class="text-center">
                <input type="submit" value="envoyer">
           </div>
      </form>


      <footer class="bg-light text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
          <!--Grid row-->
          @include('layouts.entreprise')
            <!--Grid column-->
          </div>
      
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-dark" href="#">manii.com</a>
        </div>
        <!-- Copyright -->
      </footer>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
 </html>