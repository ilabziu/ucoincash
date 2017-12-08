$(function(){
  
     
    //close pop up flag of country
   $("button.close").click(function(event) {
       /*$("#modal-pop-up").css("display","block");*/
       $("#div-select-country").removeClass("show-pop-up").addClass('hide-pop-up');
        $(".modal-backdrop.fade.in").remove();
       // $("#modal-pop-up").css("display","none");img-flag-identity

    });
    //close pop up flag of country
   $("#img-flag-identity,.slt-flag-ico").click(function(event) {
      $("#div-select-country").addClass('show-pop-up').css("display","block");
      $(".modal-backdrop.fade").addClass("in").css("display","block");
    });
   $(".img-flag").click(function(event) {
     var src=$(this).attr("src");
     $("#img-flag-identity").attr("src",src);
     $("#div-select-country").removeClass("show-pop-up").addClass('hide-pop-up');
     $(".modal-backdrop.fade.in").remove();
   });

});