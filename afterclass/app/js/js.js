
/**
 * MENU HAMBURGUER
 * ACIONAMENTO DO MENU
 */
window.addEventListener("load", function(){

   var iconMenu = document.querySelector(".icon-menu");
   

   iconMenu.addEventListener("click", function(){
      var menu = document.querySelector(".menu");
      var topo = document.querySelector(".header");

      menu.classList.toggle('menu__move');
      topo.classList.toggle('menu__move'); 

   });
   var login = document.querySelector(".polymorph");

   login.addEventListener("click", function(){
      var form = document.querySelector('.form-move1');
      var form2 = document.querySelector('.form-move2');
   });

});
