// Hides fields in case js is disabled they will be shown
$('.layer-2').addClass('dont-show');
$('.layer-3').addClass('dont-show');

// Toggles the dont-show class based on form select values
$("#card-type-interest").change(function(){
    $('.layer-2').addClass('dont-show');
    $('.layer-3').addClass('dont-show');
    if (this.value !=''){
   $    ('#'+this.value).toggleClass('dont-show');
    }
});

// Toggles the dont-show class based on form select values
$(".layer-2 select").change(function(){
    $('.layer-3').addClass('dont-show');
   $('#'+this.value).toggleClass('dont-show');
});


