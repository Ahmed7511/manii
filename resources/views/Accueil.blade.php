<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
</head>

  @extends('layouts.app')

      @section('content')

        <div class="card bg-dark text-white">
          <img class="card-img" src="/image/main.gif" alt="Card image">
          <div class="card-img-overlay">
            <h5 class="card-title">NOS VALEURS :</h5>
            <p class="card-text">
            On évoque souvent la dite démocratisation de l’art, or il en reste pourtant vrai qu’une majeure partie du public demeure hermétique, à l’hégémonie d’un art issu d’une démarche purement conceptuelle, ou le discours primerait sur l’œuvre, ce qui par conséquent nous amènerait à nous questionner, et remettre sans cesse en cause sa définition. Que est-ce que l’art? L’art est-il définissable? Loin d’avoir la prétention de soumettre des réponses à ces questions, nous avons la conviction que l’art n’est pas qu’une valeur thésaurisable, qui serait en possession de quelques poignées d’initiés, l’art est un bien commun à tous.

En valorisant les savoir-faire, par une recherche d'authenticité, nous souhaitons replacer l'homme au cœur de la création artistiques, valoriser les échanges..........
.......L'emprise du virtuel sur notre quotidien, qui tend a changer considérablement notre perception du réel........



......Les chiffres stratosphériques émanant des maisons de vente aux enchères n’aide pas un public qui serait............

            </p>
          </div>
        </div>
        
       

        <footer class="bg-light text-center text-lg-start">
          <!-- Grid container -->
          <div class="container p-4">
            <!--Grid row-->
            @include('layouts.entreprise')
        
          <!-- Grid container -->
        </div>
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="#">manii.com</a>
          </div>
          <!-- Copyright -->
        </footer>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    @endsection
</html>