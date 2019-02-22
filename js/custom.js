// Restricts date fields to today or the future
// Adapted from here https://stackoverflow.com/questions/43274559/how-do-i-restrict-past-dates-in-html5-input-type-date
$(function() {

  $(document).ready(function () {

   var currentDate = new Date();

    // Max date attribute is in "YYYY-MM-DD".  Need to format today's date accordingly

    var month = ("0" + (currentDate.getMonth() + 1)).slice(-2);  // MM

    var day = ("0" + currentDate.getDate()).slice(-2); //slice needed for single digit date


    var currentDateFormated = (currentDate.getFullYear() + "-" + month + "-" + day);

     
    // Now to set the max date value for the calendar to be today's date

    $('.form-control.booking-date').attr('max',currentDateFormated);

  });

});


$('.layer-2').addClass('dont-show');
$('.layer-3').addClass('dont-show');

$("#card-type-interest").change(function(){
     console.log( this.value );
    $('.layer-2').addClass('dont-show');
    $('.layer-3').addClass('dont-show');
   $('#'+this.value).toggleClass('dont-show');

});

$(".layer-2 select").change(function(){
     console.log( this.value );
    $('.layer-3').addClass('dont-show');
    $('.layer-3').addClass('dont-show');
   $('#'+this.value).toggleClass('dont-show');
});


