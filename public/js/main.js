$(document).ready(function(){
//initial
var controller = new ScrollMagic.Controller();

$('.col-lg-4.animated').each(function(){

  //build scene

  var ourScene = new ScrollMagic.Scene({
    triggerElement: this,
    reverse:false

  })
  .setClassToggle(this,'fadeInUp') //add class
  .addTo(controller);
})

});
