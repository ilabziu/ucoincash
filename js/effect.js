$(function(){
	
   $("nav#nav-menu--push-left").addClass('show-to-right');
   $(window).scroll(function(event) {
   	  //position body
	 console.log("hhh");
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
      
  }

 //scroll to roadmap
  var pos_roadmap=$("#roadmap").offset().top;
   pos_roadmap=pos_roadmap-101;
   var p=1310;
  
 var n;
 n=parseInt((pos_body-p)/63)+1;
 if(n%2==0)
 	 $("#roadmap li:nth-child("+n+")").addClass("effect-roadmap-right");
 else   $("#roadmap li:nth-child("+n+")").addClass("effect-roadmap-left");
 console.log("n="+n+"/body="+pos_body);
      
   });

   function checkCaptcha(){
    $.ajax({

                    url : "sources/dangnhap.php",
                    type : "post",
                    dataType:"text",
                    success : function (result){                      
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
   
      
      }); 
   
   CanvasJS.addColorSet("colorChart",
                [//colorSet Array

                "#0050DB",
                "#90ee90",
                "#E91E63",
                "#4DD0E1",
                "#A0F"                
                ]);
 
   var chart = new CanvasJS.Chart("chartContainer", {
	  colorSet:"colorChart",
	  animationEnabled: true,
	  title:{
		text:"10,000,000 TOTAL SUPPLY",
		horizontalAlign: "center",
		verticalAlign:"center",
		maxWidth: 150
  },
  data: [{
    type: "doughnut",
    startAngle: 45,
    //innerRadius: 60,
    indexLabelFontSize: 17,
    toolTipContent: "<b>{label}</b>  (#percent%)",
    dataPoints: [
      { y: 3},{ y: 45},{ y: 20},{ y: 30},{ y: 2}
      
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


});