document.addEventListener("DOMContentLoaded", function(){
    document.querySelector(".botonMenu").addEventListener("click", toggleMenu);
    
    function toggleMenu() {
        document.querySelector(".voltear").classList.toggle("mostrarMenuCompleto");
    }
})
