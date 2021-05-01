
    let url = "http://localhost:8000/api/products" ;
    const products = document.getElementById('products');
    //console.log(products);
    fetch(url)
    .then(res => res.json())
     .then(data => data.forEach((data) => { 
                products.innerHTML += `<div class="card col-md mx-3">
                <img src="/productImages/${data.image}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">${data.name}</h5>
                  <p class="card-text">${data.description}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">${data.price}</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Ajouter au panier </a>
                </div>
              </div>` ;
                      
            })
            );


