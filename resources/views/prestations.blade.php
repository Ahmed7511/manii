<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prestations</title>
</head>
<body>
@include('layouts.app')
        <h1>Présentation des préstations</h1>
    
    
    <div class="mb-3">
      <table class="table table-primary">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Prestations </th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
    
            <tr>
              <th scope="row">1</th>
              <td>Evénement</td>
              <td> L’organisation de manifestation culturelle dans le cadre de votre entreprise vous permet de valoriser 
               votre image vis à vis de votre public, et de vos collaborateurs. Nous nous chargeons d’organiser des expositions sur des thématiques chères à votre corporation. Exposition individuelle, exposition collective, performances
             Affirmer votre singularité
                  </td>
            </tr>
           <th scope="row">2</th>
            <td>Acquisition d'œuvres</td>
            <td> Quels sont les avantages de plébisciter l’art dans votre entreprise?

                  Vous souhaiter investir 
                  <em>Défiscalisation</em>
                 <em> Création d’une collection d’entreprise, 
                  Faire rentrer l’art dans vos actifs</em>
                 <em> Facteur différenciant</em>
                  <em>Optimisation fiscale</em>  
           </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Commande Spécial</td>
            <td> Vous souhaitez solliciter un de nos artistes partenaires 
            dans le cadre d’une commande spéciale telle une réalisation de fresque murale, </td>
          </tr>
           <tr>
            <th scope="row">4</th>
            <td>Aménagement & Conseil</td>
            <td>   Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
              molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
              aliquam voluptatem veniam, est atque cumque eum delectus sint!</td>
          </tr>
         
        
        </tbody>
      </table>
    </div>
    
        
       

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