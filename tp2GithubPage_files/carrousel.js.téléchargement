(function(){
console.log("vive carrousel");

let boite__carrousel = document.querySelector('.boite__carrousel');
let boite__carrousel__naviguation = document.querySelector('.boite__carrousel__naviguation');
let boite__carrousel__fermeture = document.querySelector('.boite__carrousel__fermeture');
let galerie__img = document.querySelectorAll('.galerie img');
console.log(galerie__img.length);

boite__carrousel__fermeture.addEventListener('mousedown', function(){
    boite__carrousel.classList.remove('ouvrir');
    
})

let elmImg = document.createElement("img")
boite__carrousel.append(elmImg)
let index = 0; 

for (const img of galerie__img) {
    let bouton = document.createElement('button')
    bouton.dataset.index = index++
    boite__carrousel__naviguation.append(bouton)
    bouton.addEventListener('mousedown', function(){
        elmImg.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'))
    })
    console.log(img.tagName)
    img.addEventListener('mousedown', function(){
        console.log(this.getAttribute("src"));
        
        boite__carrousel.classList.add('ouvrir');
        console.log(boite__carrousel.classList);
        elmImg.setAttribute('src', this.getAttribute("src"))
    })
}
})()