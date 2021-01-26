jQuery(function($){


        
      $('.divi-grid .divi-box').each(function(i){

        setTimeout(function(){
          $('.divi-grid .divi-box').eq(i).addClass('is-showing');
        }, 175 * (i+1));
        console.log("condition" + i + "met");
      });

    
});