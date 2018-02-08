// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.school').select2();
    $('.major').select2();
});


$(function(){
    var $cat = $(".school"),
    $subcat = $(".major");
    console.log($cat)
    //this is the same thing if you write in your HTML onChange="" in first <select>
    $cat.on("change",function(){
      //store the value of first select every time it change
      var _rel = $(this).val();
      //clean the second select (value and option active) to prevent bad link (cat1 with subcat of cat2)
      $subcat.find("option").attr("style","");
      $subcat.val("");
      //if a option si selected i show the option linked by rel attr
      $subcat.find("[rel="+_rel+"]").prop('disabled', false);
      $.each(['eschool', 'college'], function(index, value){
        if(value!=_rel){
          console.log(value);
          $subcat.find("[rel="+value+"]").prop('disabled', true);
        }
      });
      $('.major').select2();
    });

});
