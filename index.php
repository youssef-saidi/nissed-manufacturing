<?php 
include('fb.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Meta---- -->
    <meta name="description" content="Jeune start up tunisienne, née de la rencontre d’étudiants en école d’ingénieur, travaillants pour payer leurs études et d’un industriel français.
L’idée est vite apparue qu’il était intéressant de proposer les services de jeunes diplômés tunisiens">
<meta name="keywords" content=" Nissed ,NISSED,Nissef manufacturing,Manufacturing,MANUFACTURING,CAO,Sourcing ,Sourcing Industriel">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nissed.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<!-- favicon -->
	<link rel="shortcut icon" type="image/Logo N.png"  href="image/Logo N.png">




  
    
      <!-- Aplayer css -->
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  
    <title>Nissed-Manufacturing-Home</title>
</head>
<body>

<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> AOS.init();</script>
  <!-- ----- -->

    <header  class="fixed left-0 top-0 w-full z-50  ">
        <nav class="flex items-center bg-transparent p-3 flex-wrap " id="navbar" >
      <img src="image/Logo nissed VF_Plan de travail 1.png" class="w-44 h-24 items-center" alt="Nissed Manufacturing">
        <button class="text-black inline-flex p-3 hover:text-gray-500 rounded lg:hidden ml-auto" onclick="nav()" >  
            <svg width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 18H11M4 6H20H4ZM4 12H20H4Z" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>  
        <div id="navig" class="top-nav w-full lg:inline-flex lg:flex-grow lg:w-auto ">
            <div class="lg:inline-flex lg:flex-row lg:m-auto flex flex-col font-semibold hidden  " id="toggle">
                <a href="#" class="lg:inline-flex lg:w-auto px-3 py-2 rounded-full  text-white   menu w-24 " >
                    <span  ><?php echo $lang['navbar-item-1'] ?></span>
                </a>
                <a href="service1.php" class="lg:inline-flex lg:w-auto px-3 py-2 rounded-full text-white menu w-24 ">
                    <span><?php echo $lang['navbar-item-2'] ?></span>
                </a>
                <a href="about1.php" class="lg:inline-flex lg:w-auto px-3 py-2 rounded-full text-white menu w-24">
                    <span><?php echo $lang['navbar-item-3'] ?></span>
                </a>
                <a href="#footer-contact" class="lg:inline-flex lg:w-auto px-3 py-2 rounded-full text-white menu w-24">
                    <span><?php echo $lang['navbar-item-4'] ?></span>
                </a>
            <div class=" relative mt-1 lg:left-1/2 left-4 text-white">
                    <a href="index.php?lang=fr" class=" hover:text-blue-500"><span>Fr</span></a> / <a href="index.php?lang=en" class="hover:text-blue-500"><span >Eng</span></a>
              </div>
            </div>
        </div>
        <div class="flex items-center font-semibold ">
        
           
        </div>
        </nav>
     
    </header>
    <main>
        <div class="relative flex w-full">
            <div
                class="z-20 absolute left-0 top-0 flex flex-col items-center justify-center w-full h-full text-white p-4">
            
                <a data-aos="zoom-in"  data-aos-duration="3000" title="Choose Music" href="#about"
                    class="animate-bounce mt-10 px-10 py-3 md:text-xl sm:text-lg text-sm btn1">
                    <?php echo $lang['choose-mus'] ?>
                </a>
            </div>
            <video
                src="video/vd1.mp4"
                class="filter-dark w-full h-auto md:min-h-auto min-h-screen object-cover" autoplay muted
                loop></video>
        
        </div>
    </main>
    
<img src="image/wave.svg" class=" relative xl:-top-60 lg:-top-52 md:-top-44 sm:-top-36   -top-16" alt="wave">


    <section id="music " class=" h-full">
    
            <div  class="flex  justify-center"><h1 class=" text-center md:text-5xl  text-3xl title-h1 " data-aos="fade-down-right"  data-aos-duration="2000" ><?php echo $lang['title-musi'] ?></h1></div>
            <div  class="flex  justify-center animate-bounce"  ><h1 class=" show-btn text-xl  w-10 h-10 mt-7 rounded-full text-center transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-90 pt-2  " style="background-color:#000000;"  >v</h1></div>
          



<div class="grid grid-cols-1 md:grid-cols-4  justify-center m-24 ">
   <!-- music1 -->
<div class="flex flex-col" data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="1000" onclick="playlist(0)">
    <img src="image/hallelujah.png" class="rounded-lg w-full sm:h-56 h-24  md:w-3/4 transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-90    " alt="">
    <h1 class="font-extrabold md:text-base text-sm">Hallalujah</h1>
    <p class="sm:w-3/4 w-full font-thin text-xs">Alexandra Burke</p>
   
</div>
 <!-- music2 -->
 <div class="flex flex-col" data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="1000" onclick="playlist(1)">
    <img src="image/alphaville-big-in-japan.jpg" class="rounded-lg w-full sm:h-56 h-24 md:w-3/4 transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-90    " alt="">
    <h1 class="font-extrabold md:text-base text-sm">Big in Japan</h1>
    <p class="sm:w-3/4 w-full font-thin text-sm">Alphaville</p>
   
</div>
 <!-- music3 -->
 <div class="flex flex-col" data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="1000" onclick="playlist(2)">
    <img src="image/Billie.jpg" class="rounded-lg w-full sm:h-56 h-24  md:w-3/4 transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-90    " alt="">
    <h1 class="font-extrabold md:text-base text-sm">Billie Jean</h1>
    <p class="sm:w-3/4 w-full font-thin text-sm">Michael Jackson</p>
   
</div>

 <!-- music4 -->
 <div class="flex flex-col" data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="1000" onclick="playlist(3)">
    <img src="image/Ayayay.jpg" class="rounded-lg w-full sm:h-56 h-24  md:w-3/4 transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-90    " alt="">
    <h1 class="font-extrabold md:text-base text-sm">Ayayay</h1>
    <p class="sm:w-3/4 w-full font-thin text-sm">Tony Tonite</p>
   
</div>

 <!-- music5 -->
 <div class="flex flex-col" data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="1000" onclick="playlist(4)">
    <img src="image/meaningles.jpg" class="rounded-lg w-full sm:h-56 h-24  md:w-3/4 transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-90    " alt="">
    <h1 class="font-extrabold md:text-base text-sm">Meaningles</h1>
    <p class="sm:w-3/4 w-full font-thin text-sm">Charlotte</p>
   
</div>

 <!-- music6 -->
 <div class="flex flex-col" data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="1300" onclick="playlist(5)">
    <img src="image/eagles.jpg" class="rounded-lg w-full sm:h-56 h-24  md:w-3/4 transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-90    " alt="">
    <h1 class="font-extrabold md:text-base text-sm">California</h1>
    <p class="sm:w-3/4 w-full font-thin text-sm">Eagles-hotel</p>
   
</div>

 <!-- music7 -->
 <div class="flex flex-col" data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="1300" onclick="playlist(6)">
    <img src="image/island.jpg" class="rounded-lg w-full sm:h-56 h-24  md:w-3/4 transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-90    " alt="">
    <h1 class="font-extrabold md:text-base text-sm">Island Blues</h1>
    <p class="sm:w-3/4 w-full font-thin text-sm">Iziniga ft Acacia</p>
   
</div>

 <!-- music8 -->
 <div class="flex flex-col" data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="1300" onclick="playlist(7)">
    <img src="image/Kaleo.jpg" class="rounded-lg w-full sm:h-56 h-24  md:w-3/4 transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-90    " alt="">
    <h1 class="font-extrabold md:text-base text-sm">Kaleo Way Down we go</h1>
    <p class="sm:w-3/4 w-full font-thin text-sm">Artist</p>
   
</div>




</div>

<div  class="flex  justify-center mb-10"><h1 class=" text-center md:text-5xl  text-3xl title-h1" data-aos="fade-down-right"  data-aos-duration="3000">Services</h1></div>
    </section>
    
<div id="aplayer" ></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#BDBDBD" fill-opacity="1" d="M0,96L60,90.7C120,85,240,75,360,106.7C480,139,600,213,720,245.3C840,277,960,267,1080,245.3C1200,224,1320,192,1380,176L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
  </svg>
<section id="service">

    <div class="container">
        
		<div class="card" data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine">
			<div class="content">
				<h2 class="title-card"><?php echo $lang['title-CAO'] ?></h2>
				<p><?php echo $lang['text-CAO'] ?></p>
				<a href="Service.html"><?php echo $lang['read-more'] ?></a>
			</div>
		</div>
		<div class="card" data-aos="fade-down"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine" >
			<div class="content">
				<h2 class=" title-card1"><?php echo $lang['title-I'] ?></h2>
				<p><?php echo $lang['text-I'] ?></p>
				<a href="Service.html"><?php echo $lang['read-more'] ?></a>
			</div>
		</div>
		<div class="card" data-aos="fade-left"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine" >
			<div class="content">
				<h2 class=" title-card1 " ><?php echo $lang['title-C-Q'] ?></h2>
				<p><?php echo $lang['text-C-Q'] ?></p>
				<a href="Service.html"><?php echo $lang['read-more'] ?></a>
			</div>
        </div>
        

        <div class="card" data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine">
			<div class="content">
				<h2 class=" title-card1 "> <?php echo $lang['title-H'] ?></h2>
				<p><?php echo $lang['text-H'] ?></p>
				<a href="Service.html"><?php echo $lang['read-more'] ?></a>
			</div>
		</div>
		<div class="card" data-aos="fade-down"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine" >
			<div class="content">
				<h2 class=" title-card1 "><?php echo $lang['title-P'] ?></h2>
				<p><?php echo $lang['text-P'] ?></p>
				<a href="Service.html"><?php echo $lang['read-more'] ?></a>
			</div>
		</div>
		<div class="card" data-aos="fade-left"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine" >
			<div class="content">
				<h2 class=" title-card1 "><?php echo $lang['title-E'] ?></h2>
				<p><?php echo $lang['text-E'] ?></p>
				<a href="Service.html"><?php echo $lang['read-more'] ?></a>
			</div>
        </div>
        <div class="card" data-aos="fade-left"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine" >
			<div class="content">
				<h2 class=" title-card1 "><?php echo $lang['title-fao'] ?></h2>
				<p><?php echo $lang['text-fao']?></p>
				<a href="Service.html"  ><?php echo $lang['read-more'] ?></a>
			</div>
		</div>
        <div class="card" data-aos="fade-left"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine" >
			<div class="content">
				<h2 class=" title-card2"><?php echo $lang['title-web'] ?></h2>
				<p><?php echo $lang['text-web'] ?></p>
				<a href="Service.html"><?php echo $lang['read-more'] ?></a>
			</div>
        </div>
		
    </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F5F5F5" fill-opacity="1" d="M0,96L60,90.7C120,85,240,75,360,106.7C480,139,600,213,720,245.3C840,277,960,267,1080,245.3C1200,224,1320,192,1380,176L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>


<section id="contact">
    <div  class="flex  justify-center"><h1 class=" text-center md:text-5xl  text-3xl title-h1 " data-aos="fade-down-right"  data-aos-duration="3000"> <?php echo $lang['title-S-media'] ?></h1></div>
  <div class="flex justify-center ">
      <a href="https://www.facebook.com/Nissed-Manufacturing-108347454661551" ><img src="image/facebook.png" class="w-10 h-10 m-5 transition duration-300 ease-in-out  transform hover:-translate-y-1 hover:scale-150" alt=""></a>
      <a href="https://mail.google.com/mail/u/0/#inbox" ><img src="image/gmail.png" class="w-10 h-10 m-5 transition duration-300 ease-in-out  transform hover:-translate-y-1 hover:scale-150" alt=""></a>
      <a href="https://www.linkedin.com/company/nissed-manufacturing/?fbclid=IwAR0DD_gSt0AOF9xRgKS6rcXIHgZfkZJNurmtZ6D4za8S__3iqvTBSK9pmqA" ><img src="image/linkedin.png" class="w-10 h-10 m-5 transition duration-300 ease-in-out  transform hover:-translate-y-1 hover:scale-150" alt=""></a>
  </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#212121" fill-opacity="1" d="M0,96L60,128C120,160,240,224,360,208C480,192,600,96,720,85.3C840,75,960,149,1080,181.3C1200,213,1320,203,1380,197.3L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
  </svg>
  <footer >
    <div class="grid sm:grid-cols-3 py-16 sm:px-24 grid-cols-1 px-16 " id="footer-contact" >
        <div class="mb-10" data-aos="fade-right" data-aos-duration="1500"><p class="text-gray-300 font-sm"><?php echo $lang['footer-para'] ?></p>
        </div>
        <div class=" flex flex-col mb-10 sm:justify-self-center" data-aos="fade-down" data-aos-duration="1500"> 
            <h1 class="font-bold text-white mb-5 "> Links</h1>
            <a href="index.php" class="text-light text-white hover:text-gray-400"><?php echo $lang['navbar-item-1'] ?></a>
            <a href="service1.php" class="text-light text-white hover:text-gray-400"><?php echo $lang['navbar-item-2'] ?></a>
            <a href="about1.php" class="text-light text-white hover:text-gray-400"><?php echo $lang['navbar-item-3'] ?></a>
            <a href=" " class="text-light text-white hover:text-gray-400"><?php echo $lang['navbar-item-4'] ?></a>

          
        </div>
        <div class=" flex flex-col mb-10 sm:justify-self-center" data-aos="fade-left" data-aos-duration="1500"> 
            <h1 class="font-bold text-white mb-5 "> <?php echo $lang['navbar-item-1'] ?></h1>
        <div>
            <h2 class="font-extrabold text-white text-sm">Location:</h2>
            <p class="text-gray-300 text-xs"><?php echo $lang['location'] ?></p>
        </div>
        <div>
            <h2 class="font-extrabold text-white text-sm">Email:</h2>
            <p class="text-gray-300 text-xs">contact@nissedmanufacturing.com</p>
        </div>
        <div>
            <h2 class="font-extrabold text-white text-sm">Phone:</h2>
            <p class="text-gray-300 text-xs">+216 99 16 43 88</p>
        </div>
        

          
        </div>
    </div>
</footer>

<button onclick="topFunction()" id="myBtn" class="myBtn" title="Go to top">^</button>
<script src="nissed.js"></script>
<script>
     
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
       



</script>

</body>
</html>