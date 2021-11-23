var obiekttytulu = document.getElementById('title'); 
var obiektzawartosci = document.getElementById('content'); 
var obiektprzycisku = document.getElementById('submit');
function sprawdzCzyJestFormularzPoprawny() {
    if (obiektzawartosci.value.length >= 5 && obiekttytulu.value.length >= 5){
        obiektprzycisku.disabled = false;
    }else{
        obiektprzycisku.disabled = true;
    }
}

obiekttytulu.addEventListener("input", sprawdzCzyJestFormularzPoprawny);
obiektzawartosci.addEventListener("input", sprawdzCzyJestFormularzPoprawny);
sprawdzCzyJestFormularzPoprawny();