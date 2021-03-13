<?php 
include('fb.php');
?>
<!DOCTYPE html>
<html lang="en">
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

     <!-- AOS -->
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Nissed-Manufacturing-About</title>
</head>
<body>
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> AOS.init();</script>
    <!-- ----- -->

    <header  class="fixed left-0 top-0 w-full z-50  ">
        <nav class="flex items-center bg-transparent p-3 flex-wrap " id="navbar" >
      <img src="image/Logo nissed VF_Plan de travail 1.png" class="w-32 h-16 items-center" alt="Nissed Manufacturing">
      <button class="text-black inline-flex p-3 hover:text-gray-500 rounded lg:hidden ml-auto" onclick="nav()" >  
        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 18H11M4 6H20H4ZM4 12H20H4Z" stroke="white" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </button>       
       <div id="navig" class="top-nav w-full lg:inline-flex lg:flex-grow lg:w-auto">
            <div class="lg:inline-flex lg:flex-row lg:m-auto flex flex-col font-semibold hidden  " id="toggle">
                <a href="index.php" class="lg:inline-flex lg:w-auto px-3 py-2 rounded-full  text-black  menu w-24 " >
                    <span  ><?php echo $lang['navbar-item-1'] ?></span>
                </a>
                <a href="service1.php" class="lg:inline-flex lg:w-auto px-3 py-2 rounded-full text-white menu w-24 ">
                    <span><?php echo $lang['navbar-item-2'] ?></span>
                </a>
                <a href="#" class="lg:inline-flex lg:w-auto px-3 py-2 rounded-full text-white menu w-24">
                    <span><?php echo $lang['navbar-item-3'] ?></span>
                </a>
                <a href="#footer-contact" class="lg:inline-flex lg:w-auto px-3 py-2 rounded-full text-white menu w-24">
                    <span><?php echo $lang['navbar-item-4'] ?></span>
                </a>
            <div class=" relative mt-1 lg:left-1/2 left-4 text-white">
                <a href="about1.php?lang=fr" class=" hover:text-blue-500"><span>Fr</span></a> / <a href="about1.php?lang=en" class="hover:text-blue-500"><span >Eng</span></a>
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
            
              <a href="#societe"><img src="image/arrow.png" class="animate-bounce w-16 h-24" alt=""></a>
            </div>
         <img src="image/abou3.jpg" class="filter-dark w-full h-auto md:min-h-auto min-h-screen object-cover" alt="">
        
        </div>
    </main>

    <img src="image/wave.svg" class=" relative  lg:-top-52 md:-top-44 sm:-top-36   -top-16" alt="">





    <div class=" flex flex-col md:flex-row lg:ml-48 md:m-24   " id="societe">
        <div class="flex flex-col md:w-1/2 w-full">
            <h1 class="title-h1 w-3/4 my-10 md:text-left text-center md:text-5xl  text-3xl " data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"><?php echo $lang['title-society'] ?></h1>
            <p class=" w-full md:text-left text-center" data-aos="fade-down"
                data-aos-duration="1000"
                data-aos-easing="ease-in-sine"><?php echo $lang['para-society'] ?></p>

        </div>
       <div class="flex justify-center md:w-1/2 w-full "><img src="image/abou1.jpg" class="rounded-full shadow-2xl border-4 p-2 md:mt-0 mt-24   sm:w-96 sm:h-96  w-62 h-62"  data-aos="fade-down"  data-aos-duration="2000" alt="Nissed manufacturing"></div> 
    </div>

    <section id="members">
        <div  class="flex  justify-center"><h1 class=" text-center md:text-5xl  text-3xl title-h1 " data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"><?php echo $lang['title-mem'] ?></h1></div>

        <div class="grid sm:grid-cols-3  grid-cols-1 lg:m-44  md:m-2 m-16 justify-center ">
            <!-- member1 -->
            <div class="border-l-4 border-gray-800 mb-10 " data-aos="fade-down"
  data-aos-easing="linear"
  data-aos-duration="1500">
                <p class="px-5"><?php echo $lang['para-m1'] ?></p>
                <div class="flex mx-8 pt-5">
<img src="image/MEMBRE 1.jpg" class="w-14 h-14 rounded-full  " alt="Laurent Baumgartner">
<div class="flex flex-col m-2">
    <h1 class="font-bold"><?php echo $lang['title-m1'] ?></h1>
    <p><?php echo $lang['trav-m1'] ?></p>
</div>

                </div>
                </div>

                  <!-- member2 -->
            <div class="border-l-4 border-gray-800 mb-10 " data-aos="fade-down"
  data-aos-easing="linear"
  data-aos-duration="2000">
                <p class="px-5"><?php echo $lang['para-m2'] ?></p>
                <div class="flex mx-8 pt-5">
<img src="image/MEMBRE 2.jpeg" class="w-14 h-14 rounded-full  " alt="Malek Lassoued">
<div class="flex flex-col m-2">
    <h1 class="font-bold"><?php echo $lang['title-m2'] ?></h1>
    <p><?php echo $lang['trav-m2'] ?> </p>
</div>

                </div>
                </div>

                  <!-- member3 -->
            <div class="border-l-4 border-gray-800 mb-10 " data-aos="fade-down"
  data-aos-easing="linear"
  data-aos-duration="2500">
                <p class="px-5"><?php echo $lang['para-m3'] ?></p>
                <div class="flex mx-8 pt-5">
<img src="image/MEMBRE 3.jpeg" class="w-14 h-14 rounded-full  " alt="Aymen Tarchoun">
<div class="flex flex-col m-2">
    <h1 class="font-bold"><?php echo $lang['title-m3'] ?></h1>
    <p><?php echo $lang['trav-m3'] ?></p>
</div>

                </div>
                </div>

        </div>
    </section>

    <section id="contact">
        <div  class="flex  justify-center"><h1 class=" text-center md:text-5xl  text-3xl title-h1 "  data-aos="fade-down-right"  data-aos-duration="3000"><?php echo $lang['title-S-media'] ?></h1></div>
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
        <div class="mb-10" data-aos="fade-down" data-aos-duration="1500"><p class="text-gray-300 font-sm"><?php echo $lang['footer-para'] ?></p>
        </div>
        <div class=" flex flex-col mb-10 sm:justify-self-center" data-aos="fade-down" data-aos-duration="1500"> 
            <h1 class="font-bold text-white mb-5 "> Links</h1>
            <a href="index.php" class="text-light text-white hover:text-gray-400"><?php echo $lang['navbar-item-1'] ?></a>
            <a href="service1.php" class="text-light text-white hover:text-gray-400"><?php echo $lang['navbar-item-2'] ?></a>
            <a href="about1.php" class="text-light text-white hover:text-gray-400"><?php echo $lang['navbar-item-3'] ?></a>
            <a href=" " class="text-light text-white hover:text-gray-400"><?php echo $lang['navbar-item-4'] ?></a>

          
        </div>
        <div class=" flex flex-col mb-10 sm:justify-self-center" data-aos="fade-down" data-aos-duration="1500"> 
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
    
    <button onclick="topFunction()"  id="myBtn" class="myBtn" title="Go to top">^</button>
      <script >

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