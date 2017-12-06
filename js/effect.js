$(function(){
   $("nav#nav-menu--push-left").addClass('show-to-right');
   $("#modal-pop-up").addClass('show-pop-up').css("display","block");
   $(window).scroll(function(event) {
      //position body
      var pos_body=$('body').scrollTop();
      //scroll to col-md-6 text_about
      var pos_text_about=$(".col-md-6.text_about").offset().top;
      pos_text_about=pos_text_about-73;
      //console.log(pos_body+"/"+pos_text_about);
      if(pos_body>=pos_text_about){
         $(".col-md-6.text_about").addClass("effect-text-about");
         $(".col-md-6.right_text_about").addClass("effect-right-text-about");
      //console.log("lon roi nhe");
     
  }
  //scroll to bonus
  var pos_bonus=$("#ico").offset().top;
   pos_bonus=pos_bonus-180;
      //console.log(pos_body+"/"+pos_bonus);
     if(pos_body>=pos_bonus){
         $(".bonus").addClass("zoom-in");
         //$(".col-md-6.right_text_about").addClass("effect-right-text-about");
      //console.log("lon roi nhe");
     
  }

 //scroll to roadmap
  var pos_roadmap=$("#roadmap").offset().top;
   pos_roadmap=pos_roadmap-101;
   var p=1310;
   //var child=1;
     // console.log(pos_body+"/"+pos_roadmap);
     /*if(pos_body>=pos_roadmap){
         $("#roadmap li:nth-child(2n-1)").addClass("effect-roadmap-left");
         $("#roadmap li:nth-child(2n)").addClass("effect-roadmap-right");
         //$(".col-md-6.right_text_about").addClass("effect-right-text-about");
      //console.log($(window).offset().top);
     
  }*/
 var n;
 n=parseInt((pos_body-p)/63)+1;
 if(n%2==0)
   $("#roadmap li:nth-child("+n+")").addClass("effect-roadmap-right");
 else   $("#roadmap li:nth-child("+n+")").addClass("effect-roadmap-left");
 console.log("n="+n+"/body="+pos_body);
         
         //$(".col-md-6.right_text_about").addClass("effect-right-text-about");
      /*console.log("lon roi nhe");
      for (var i=p;i<=pos_roadmap;i=i+63){
        console.log("i="+i+"=== pos_body"+pos_body)
         if(pos_body==i){
          if(child%2==0)
            $("#roadmap:nth-child("+child+")").addClass("effect-roadmap-right");
            else $(".bonus").addClass("effect-roadmap-left");
            child++;
         }
      }*/
     
  



   });

   //hieu ung menu truot
   //bat dang nhap su kien
   //copy text
  
   function checkCaptcha(){
    $.ajax({

                    url : "sources/dangnhap.php",
                    type : "post",
                    dataType:"text",
                    success : function (result){
                       /*if(result=='false'){
                         $('.div-msg-warn-item').html(result);
                          alert('Please input your user');      
                         return false;
                       }
                       else
                        {
                           alert('Please input your password');
                         $('.div-msg-warn-item').html(result);
                         return false;
                       }
                    }*/
                    alert(result);
                  }
                 
            });
            
   }
          
   $('#btn-signin').click(function(e) {   
        if(document.frmDN.tendangnhap.value==''){
              
            alert('Please input your user');          
            document.frmDN.tendangnhap.focus();         
            return false; 
          }
        if(document.frmDN.matkhau.value==''){
            alert('Please input your password');
            document.frmDN.matkhau.focus();
            return false; 
          }
   
         

          //document.frmDN.submit();
      
      }); 
   //ve bieu do
   //set color
   CanvasJS.addColorSet("colorChart",
                [//colorSet Array

                "#0050DB",
                "#90ee90",
                "#E91E63",
                "#4DD0E1",
                "#A0F"                
                ]);
   /*var chart = new CanvasJS.Chart("chartContainer",
    {
      colorSet: "colorChart",
      title:{
        /*text: "U.S Smartphone OS Market Share, Q3 2012",*/
       /* fontFamily: "Impact",
        fontWeight: "normal"
      },
      percentFormatString: "#0.##",
      legend:{
        verticalAlign: "bottom",
        horizontalAlign: "center"
      },
      data: [
      {
        //startAngle: 45,
       indexLabelFontSize: 15,
       indexLabelFontFamily: "arial",
       indexLabelFontColor: "darkgrey",
       indexLabelLineColor: "darkgrey",
       indexLabelPlacement: "outside",
       type: "doughnut",
       startAngle: 60,
       //innerRadius: 60,
       toolTipContent: "#percent%",
       dataPoints: [
       {  y: 10/*, legendText:"Android 53%", indexLabel: "Android 53%"*/ //},
     //  {  y: 60/*, legendText:"iOS 35%", indexLabel: "Apple iOS 35%" */},
      // {  y: 15/*, legendText:"Blackberry 7%", indexLabel: "Blackberry 7%" */},
      // {  y: 10/*, legendText:"Windows 2%", indexLabel: "Windows Phone 2%" */},
       //{  y: 5/*, legendText:"Others 5%", indexLabel: "Others 5%"*/ }
    /*   ]
     }
     ]
   });*/
   var chart = new CanvasJS.Chart("chartContainer", {
  colorSet: "colorChart",
  animationEnabled: true,
  title:{
    text:"20,000,000 TOTAL SUPPLY",
    horizontalAlign: "center",
    verticalAlign:"center",
    maxWidth: 150
  },
  data: [{
    type: "doughnut",
    startAngle: 60,
    //innerRadius: 60,
    indexLabelFontSize: 17,
    toolTipContent: "<b>{label}</b>  (#percent%)",
    dataPoints: [
      { y: 300},{ y: 2000},{ y: 4500},{ y: 3000},{ y: 200}
      
    ]
  }]
});

    chart.render();
  
                
    //slideshow flag
    $(".flipster__button.flipster__button--next").click(function(event) {
       
        $(".flipster__item.flipster__item--future.flipster__item--future-3").addClass('flipster__item--future-2');
        $(".flipster__item.flipster__item--future.flipster__item--future-3").removeClass('flipster__item--future-3');
       
       $(".flipster__item.flipster__item--future.flipster__item--future-2").addClass('flipster__item--future-1');
       $(".flipster__item.flipster__item--future.flipster__item--future-2").removeClass('flipster__item--future-2');
  
        $(".flipster__item.flipster__item--future.flipster__item--future-1").addClass('flipster__item--current');
        $(".flipster__item.flipster__item--future.flipster__item--future-1").removeClass('flipster__item--future flipster__item--future-1');
        $(".flipster__item.flipster__item--current").addClass('.flipster__item--past flipster__item--past-1');
        $(".flipster__item.flipster__item--current").removeClass('flipster__item--current');
        
        $(".flipster__item.flipster__item--past.flipster__item--past-2").addClass('flipster__item--past-3');
        $(".flipster__item.flipster__item--past.flipster__item--past-2").removeClass('flipster__item--past-2');
         
         $(".flipster__item.flipster__item--past.flipster__item--past-1").addClass('flipster__item--past-2');
         $(".flipster__item.flipster__item--past.flipster__item--past-1").removeClass('flipster__item--past-1');
        
        
        
    });
    // xu ly dong close pop up
    $(".img-responsive.close-button").click(function(event) {
       /*$("#modal-pop-up").css("display","block");*/
       $("#modal-pop-up").removeClass("show-pop-up").addClass('hide-pop-up');
        $(".modal-backdrop.fade.in").remove();
       // $("#modal-pop-up").css("display","none");

    });
    /*$(".navbar-toggle").click(function(event) {
      (".navbar-collapse.collapse").toggleClass('in');
      (".navbar-collapse.collapse").toggleClass('out');
    });*/
    $("button.navbar-toggle").click(function(event) {
     $(".navbar-collapse.collapse").slideToggle("slow")
    });
   


});