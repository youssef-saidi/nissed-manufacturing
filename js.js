
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

    
    function playlist(e){
        document.getElementById("aplayer").style.bottom="0";
        ap.list.switch(e);
        ap.play();
        
            }
        const ap = new APlayer({
            container: document.getElementById('aplayer'),
            listFolded : true ,
            audio: [{
                name: 'Hallalujah',
                artist: 'Alexandra Burke',
                url: 'MUSIC/alexandra-bruke-hallelujah-lyrics.mp3',
                cover: 'image/hallelujah.png'
            },
            {
                name: 'Big in Japan ',
                artist: 'Alphaville',
                url: 'MUSIC/alphaville-big-in-japan-lyrics.mp3',
                cover: 'image/alphaville-big-in-japan.jpg'
        
            },
            {
                name: 'Billie Jean',
                artist: 'Michael Jackson',
                url: 'MUSIC/billie-jean-by-michael-jackson-w-lyrics.mp3',
                cover: 'image/Billie.jpg'
        
            },
            {
                name: 'Ayayay',
                artist: 'Tony Tonite',
                url: 'MUSIC/bratia-stereo-ayayay-ft-tony-tonite.mp3',
                cover: 'image/Ayayay.jpg'
        
            },

            {
                name: 'Meaningless',
                artist: 'Charlotte',
                url: 'MUSIC/charlotte-cardin-meaningless-lyrics.mp3',
                cover: 'image/meaningles.jpg'
        
            },

            {
                name: 'California',
                artist: 'Eagles-hotel',
                url: 'MUSIC/eagles-hotel-california-lyrics.mp3',
                cover: 'image/eagles.jpg'
        
            },

            {
                name: 'Island Blues',
                artist: 'Iziniga ft Acacia',
                url: 'MUSIC/iziniga-ft-acacia-island-blues-reggae-vergion.mp3',
                cover: 'image/island.jpg'
        
            },
            
            {
                name: 'Kaleo Way Down we go',
                artist: 'artist',
                url: 'MUSIC/kaleo-way-down-we-go-lyrics-logan-trailer-2-soundtrack-2017.mp3',
                cover: 'image/Kaleo.jpg'
        
            },
            
            
            
            
            
            ]
        });


        mybutton = document.getElementById("myBtn");
        navbar=document.getElementById("navbar");


        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
            navbar.style.background="#212121";
        

          } else {
            mybutton.style.display = "none";
            navbar.style.background= "transparent";
           
          }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0; // For Safari
          document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }


        let a=0;
        let menu=document.getElementById("toggle");
       
         function nav(){
             if(a==0){
 menu.style.display="flex";

 a=1;
             }else if(a==1){
                 menu.style.display="none";
                 
                 a=0; 
             }
 
         }
       


     
    