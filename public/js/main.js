/****** VARIABLES***********
 ***************************/
let buttonCookie;
let photo1;
let photos;

/******FONCTIONS***********
 ***************************/


function addCookie() {
    $.get('index.php?page=FrontController')
    // pour cacher la barre cookiebar
    document.getElementById("cookiebar").style.transform = "translateY(100px)";
}


//carrousel
function bigImage() {
    let bigImage = document.getElementById('bigImage')
    // met la 1ère fois en grand dans div Big Image
    let content = document.querySelector('.photos');
    bigImage.innerHTML = `<img src="${content.src}">`;

    // choisit la grande image selon le click
    let photos = document.querySelectorAll('.photos')
    for (let i = 0; i < photos.length; i++) {
        photos[i].addEventListener('mouseover', function() {
            console.log(photos[i])
            bigImage.innerHTML = `<img src="${this.src}">`

        })
    }
}

function showCart()
{
    let modal = document.getElementById('cart-modal');
    modal.classList.add('visible');
    
    fetch('index.php?page=ajaxBasket')
    .then(function(response)
    {
        // appelle json.parse sur le resultat
        return response.json();        
    })
    .then(function( basket )
    {
        if(basket.length != 0 )
        {
            let emptyMessage = document.getElementById("cart-empty");
            emptyMessage.innerHTML = '';
        }
        
        
        let table = document.getElementById("cart-table");
        table.classList.remove('hidden');    
    
        let ul = document.querySelector('#cart-table ul');
        
        for( let i = 0 ; i < basket.length; i++)
        {
            console.log('lol');
            let total = basket[i].product.prix * basket[i].quantity;
            ul.innerHTML += `<li> ${basket[i].product.nom} - 
                ${basket[i].quantity} - ${total} </li>`;
        }
    })
}

/*********CODE***********
 ***************************/

document.addEventListener('DOMContentLoaded', function() {

    // add event listener pour clic bouton cookie barre
    /*buttonCookie = document.getElementById('cookieOk');
    buttonCookie.addEventListener('click', addCookie);
    // pour faire la transition avec la cookie barre
    document.getElementById("cookiebar").style.transform = "translateY(-100px)";*/

    /*
    // pour faire le carroussel
    photo1 = document.querySelector('.photos');
    // pour faire la big Image par defaut
    bigImage()*/
    
    // Modal
    
    let cart = document.getElementById("cart-button");
    cart.addEventListener('click', showCart );


})
