var hearts = document.querySelectorAll(".heart-i");


for(var x = 0; x <= hearts.length; x++){
    hearts[x].addEventListener('click', function(e){
        e.target.classList.toggle("heart-bg");
    })
}
