var cta = document.querySelector(".cta");
var check = 0;
var join= document.getElementById("join");
join.addEventListener('click', slide2);

function slide2(e){
    
    var texto = document.getElementById("texto");
    var loginText = document.getElementById("expand");
    texto.classList.toggle('show-hide');
    check++;
    loginText.classList.toggle('expand');
    cta.innerHTML = "<i class=\"fas fa-chevron-up\"></i>";
}

cta.addEventListener('click', function(e){
    var text = e.target.nextElementSibling;
    var loginText = e.target.parentElement;
    var expand = document.getElementById("expand");
    text.classList.toggle('show-hide');
    loginText.classList.toggle('expand');
    if(check == 0)
    {
        
        cta.innerHTML = "<i class=\"fas fa-chevron-up\"></i>";
        check++;
    }
    else
    {
        cta.innerHTML = "<i class=\"fas fa-chevron-down\"></i>";
        check = 0;
    }
})



