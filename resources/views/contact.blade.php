
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Contact</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="./">Accueil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./prestations">Nos préstations </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active"  href="./Actualité">Actualités / Revue de presse</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active"  href="./Galerie">Galerie</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="./contact">Nos Contactez</a>
              </li>
            </ul>
            
          </div>
        </div>
        </nav>
        
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
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase">QUI SOMME NOUS ?</h5>
      
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                aliquam voluptatem veniam, est atque cumque eum delectus sint!
              </p>
            </div>
          
            </div>
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