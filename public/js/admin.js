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
              <a href="update-product?id=${data.id}" class="card-link">modifier ce produit</a>
              <a  onclick="deleteProduct(${data.id})" class="card-link">supprimer ce produit  </a>
            </div>
          </div>
          ` ;
                  
        })
        );



    function deleteProduct(id){
           fetch("http://localhost:8000/api/products/"+id ,
             {method : "DELETE", 
            headers: {
            'Content-type': 'application/json'
        }})
            .then(res => res.json())
            .then(data =>console.log(data))
               window.location.reload();
        }
        document.getElementById("form").addEventListener("submit", function (e) {
              postProduct()
        })
       const postProduct = async function (e){
           let name = document.getElementById("name").value ;
           let image = document.getElementById("image").value ;
           let price = document.getElementById("price").value ;
           let description = document.getElementById("description").value ;
           var product = {name, image, price, description}
           console.log(product)
           e.preventDefault();
            // fetch("http://localhost:8000/api/products/" ,
            //   {method : "POST", 
            //  headers: {
            //  'Content-type': 'application/json'
            //         },
            //   body: JSON.stringify({ products }), // envoyer le body en json
            //    })
            //  .then(res => res.json())
            //  .then(data =>console.log(data))
            //     window.location.reload();
         }