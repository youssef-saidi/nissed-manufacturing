
    $(document).ready(function(){
 var count = 0;
 var counter = setInterval(function(){
     if(count<101){
         $('.count').text(count + '%');
         $('.loader').css( 'width',  count/6 + '%');
         $('#body').css( 'display', 'none');
         count++;
     }
     else{
         $('#body').css( 'display', 'block');
         clearInterval(counter);
     }
 },80)
 
 
    }) 
     
    