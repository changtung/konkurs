 
jQuery.fn.exists = function(){return this.length>0;}

$(document).ready(function () {
  
  $(function(){
    $("ul.dropdown li").hover(function(){
        $(this).addClass("hover");
        $('ul:first',this).css('visibility', 'visible');
    }, function(){
        $(this).removeClass("hover");
        $('ul:first',this).css('visibility', 'hidden');
    });
    $("ul.dropdown li ul li:has(ul)").find("a:first").append(" &raquo; ");
  });  
  
  $(function() {
    $( "#tabs" ).tabs();
  });
   
  var heightLeft = $(".left-side").height();
  var heightRight = $(".right-side").height();
  $(".left-side").height(heightRight); 
   
  if ($("a[rel^='prettyPhoto']").exists()) {
    $("a[rel^='prettyPhoto']").prettyPhoto();
  } 
   
        
  
        
});


