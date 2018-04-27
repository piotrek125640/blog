$(document).ready(function(){
//initial
var controller = new ScrollMagic.Controller();

$('.col-lg-4.animated').each(function(){

  //build scene

  var ourScene = new ScrollMagic.Scene({
    triggerElement: this,
  })
  .setClassToggle(this,'fadeIn') //add class
  .addTo(controller);
})

});
