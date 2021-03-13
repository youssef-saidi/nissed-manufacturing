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

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Nissed-Manufacturing-Services</title>
</head>
<body class="bg-gray-200">
      <!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
  <!----------->

  <header  class="fixed left-0 top-0 w-full z-50  ">
        <nav class="flex items-center bg-transparent p-3 flex-wrap " id="navbar" style="background-color: #212121;">
  
      <img src="image/Logo nissed VF_Plan de travail 1.png" class="w-32 h-16 items-center" alt="Nissed Manufacturing">
      <button class="text-black inline-flex p-3 hover:text-gray-500 rounded lg:hidden ml-auto" onclick="nav()" >  
        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 18H11M4 6H20H4ZM4 12H20H4Z" stroke="white" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </button>         
     <div id="navig" class="top-nav w-full lg:inline-flex lg:flex-grow lg:w-auto">
            <div class="lg:inline-flex lg:flex-row lg:m-auto flex flex-col font-semibold hidden " id="toggle">
                <a href="index.php" class="lg:inline-flex lg:w-auto px-3 py-2 rounded-full  text-white  menu w-24 " >
                  <span  ><?php echo $lang['navbar-item-1'] ?></span>
                </a>
                <a href="#" class="lg:inline-flex lg:w-auto px-3 py-2 rounded-full text-white menu w-24 ">
                    <span><?php echo $lang['navbar-item-2'] ?></span>
                </a>
                <a href="about1.php" class="lg:inline-flex lg:w-auto px-3 py-2 rounded-full text-white menu w-24">
                    <span><?php echo $lang['navbar-item-3'] ?></span>
                </a>
                <a href="#footer-contact" class="lg:inline-flex lg:w-auto px-3 py-2 rounded-full text-white menu w-24">
                    <span><?php echo $lang['navbar-item-4'] ?></span>
                </a>
            <div class=" relative mt-1 lg:left-1/2 left-4 text-white">
            <a href="service1.php?lang=fr" class=" hover:text-blue-500"><span>Fr</span></a> / <a href="service1.php?lang=en" class="hover:text-blue-500"><span >Eng</span></a>
              </div>
            </div>
        </div>
        <div class="flex items-center font-semibold ">
        
           
        </div>
        </nav>
     
    </header> 
  
   
   <div class="  grid   md:grid-cols-3 sm:grid-cols-2    grid-cols-1 justify-items-center mx-4 mt-24 lg:my-24 sm:my-56  ">
    <div  class="   w-max items-center font-semibold md:text-l  px-3 py-2 text-sm shadow    text-white  bg-gray-900 hover:bg-gray-800 rounded-md md:my-3 my-6  " data-aos="zoom-in"><a href="#1" > <?php echo $lang['title-CAO'] ?></a></div>
    <div  class=" w-max items-center font-semibold md:text-l  px-3 py-2 text-sm shadow   text-white  bg-gray-900 hover:bg-gray-800 rounded-md md:my-3 my-6  " data-aos="zoom-in"><a href="#2"><?php echo $lang['title-I'] ?> </a></div>
    <div  class=" w-max items-center font-semibold md:text-l px-3 py-2 text-sm shadow  text-white  bg-gray-900 hover:bg-gray-800 rounded-md md:my-3 my-6  " data-aos="zoom-in"><a href="#3"><?php echo $lang['title-C-Q'] ?></a></div>
    <div  class="  w-max items-center font-semibold md:text-l px-10 py-2 text-sm shadow   text-white  bg-gray-900 hover:bg-gray-800 rounded-md md:my-3 my-6  "data-aos="zoom-in"><a href="#4"><?php echo $lang['title-H'] ?></a></div>
    <div  class=" w-max items-center font-semibold md:text-l px-10 py-2 text-sm shadow   text-white  bg-gray-900 hover:bg-gray-800 rounded-md md:my-3 my-6  "data-aos="zoom-in"><a href="#5"><?php echo $lang['title-P'] ?></a></div>
    <div  class=" w-max items-center font-semibold md:text-l px-10 py-2 text-sm shadow   text-white  bg-gray-900 hover:bg-gray-800 rounded-md md:my-3 my-6  "data-aos="zoom-in"><a href="#6"><?php echo $lang['title-E'] ?></a></div>
    <div  class=" w-max items-center font-semibold md:text-l px-10 py-2 text-sm shadow   text-white  bg-gray-900 hover:bg-gray-800 rounded-md md:my-3 my-6  "data-aos="zoom-in"><a href="#7"><?php echo $lang['title-fao'] ?></a></div>

 
   
</div>
<section id="produit">

<!-- bloc1 -->
<div class=" flex md:flex-row flex-col justify-items-center z-20 lg:m-24 md:m-16 m-24  " id="1"> 
    <img src="image/CAO-DAO.jpeg" class="rounded-3xl  md:w-1/2 w-full md:w-96 h-56  lg:ml-24 md:ml-5   " data-aos="fade-down"  data-aos-duration="2000" alt="CAO-DAO.jpeg">
   <div class="md:px-10  sm:py-1/2 w-full h-1/2  ">
       <h1 class="md:text-left text-center pt-5 pb-10 font-bold sm:text-4xl text-xl title-h2 "><?php echo $lang['title-CAO'] ?> </h1>
        <p class="md:text-left text-left text-sm lg:w-3/4  md:w-full   " data-aos="zoom-in" data-aos-duration="1500"><?php echo $lang['Para-C-A-D'] ?></p>
    
        <div>  <ul class="about-link justify-items-center sm:w-full  w-3/4 "> 
        <li><a href="https://www.facebook.com/Nissed-Manufacturing-108347454661551" ><i class="fa fa-facebook sm:m-0  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>       
         <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope sm:m-0  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>
          <li><a href="https://www.linkedin.com/company/nissed-manufacturing/?fbclid=IwAR0DD_gSt0AOF9xRgKS6rcXIHgZfkZJNurmtZ6D4za8S__3iqvTBSK9pmqA"><i class="fa fa-linkedin  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>
    
    
        </ul></div>  
    </div> 
    
  </div>
  <!-- bloc2 -->
<div class=" flex md:flex-row flex-col justify-items-center z-20 lg:m-24 md:m-16 m-24  " id="2"> 
    <img src="image/sourcing industriel5.jpeg" class="rounded-3xl md:w-1/2 w-full md:w-96 h-56  lg:ml-24 md:ml-5   " data-aos="fade-down"  data-aos-duration="2000" alt="sourcing industriel">
   <div class="md:px-10  sm:py-1/2 w-full h-1/2 ">
       <h1 class="md:text-left text-center pt-5 pb-10 font-bold sm:text-4xl text-xl title-h2 "><?php echo $lang['title-I'] ?></h1>
        <p class="md:text-left text-left text-sm lg:w-3/4  md:w-full " data-aos="zoom-in-left" data-aos-duration="1500"><?php echo $lang['Para-I'] ?></p>
    
        <div>  <ul class="about-link justify-items-center sm:w-full  w-3/4 "> 
        <li><a href="https://www.facebook.com/Nissed-Manufacturing-108347454661551" ><i class="fa fa-facebook sm:m-0  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>       
         <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope sm:m-0 sm:w-12 sm:h-12 w-10 h-10"></i></a></li>
          <li><a href="https://www.linkedin.com/company/nissed-manufacturing/?fbclid=IwAR0DD_gSt0AOF9xRgKS6rcXIHgZfkZJNurmtZ6D4za8S__3iqvTBSK9pmqA"><i class="fa fa-linkedin  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>
    
    
        </ul></div>
    </div> 
  
  </div>
  <!-- bloc3 -->
<div class=" flex md:flex-row flex-col justify-items-center z-20 lg:m-24 md:m-16 m-24  " id="3"> 
    <img src="image/CONTROLE QUALITE.jpeg" class="rounded-3xl md:w-1/2 w-full md:w-96 h-56  lg:ml-24 md:ml-5   " data-aos="fade-down"  data-aos-duration="2000" alt="CONTROLE QUALITE">
   <div class="md:px-10  sm:py-1/2 w-full h-1/2 ">
       <h1 class="md:text-left text-center pt-5 pb-10 font-bold sm:text-4xl text-xl title-h2 "><?php echo $lang['title-C-Q'] ?></h1>
        <p class="md:text-left text-left text-sm lg:w-3/4  md:w-full   " data-aos="zoom-in" data-aos-duration="1500"><?php echo $lang['Para-C-Q'] ?></p>
    
        <div>  <ul class="about-link justify-items-center sm:w-full  w-3/4 "> 
        <li><a href="https://www.facebook.com/Nissed-Manufacturing-108347454661551" ><i class="fa fa-facebook sm:m-0  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>       
         <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope sm:m-0  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>
          <li><a href="https://www.linkedin.com/company/nissed-manufacturing/?fbclid=IwAR0DD_gSt0AOF9xRgKS6rcXIHgZfkZJNurmtZ6D4za8S__3iqvTBSK9pmqA"><i class="fa fa-linkedin  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>
    
    
        </ul></div>
    </div> 
  
  </div>
  <!-- bloc4 -->
<div class=" flex md:flex-row flex-col justify-items-center z-20 lg:m-24 md:m-16 m-24  " id="4"> 
    <img src="image/FAO.jpg" class="rounded-3xl md:w-1/2 w-full md:w-96 h-56  lg:ml-24 md:ml-5   " data-aos="fade-down"  data-aos-duration="2000" alt="Hydraulic">
   <div class="md:px-10  sm:py-1/2 w-full h-1/2 ">
       <h1 class="md:text-left text-center pt-5 pb-10 font-bold sm:text-4xl text-xl title-h2 "><?php echo $lang['title-H'] ?></h1>
        <p class="md:text-left text-left text-sm lg:w-3/4  md:w-full   " data-aos="zoom-in" data-aos-duration="1500"><?php echo $lang['Para-H'] ?></p>
    
        <div>  <ul class="about-link justify-items-center sm:w-full  w-3/4 "> 
        <li><a href="https://www.facebook.com/Nissed-Manufacturing-108347454661551" ><i class="fa fa-facebook sm:m-0  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>       
         <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope sm:m-0  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>
          <li><a href="https://www.linkedin.com/company/nissed-manufacturing/?fbclid=IwAR0DD_gSt0AOF9xRgKS6rcXIHgZfkZJNurmtZ6D4za8S__3iqvTBSK9pmqA"><i class="fa fa-linkedin  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>
    
    
        </ul></div>
    </div> 
  
  </div>
  <!-- bloc5 -->
<div class=" flex md:flex-row flex-col justify-items-center z-20 lg:m-24 md:m-16 m-24  " id="5"> 
    <img src="image/CAO-DAO.jpeg" class="rounded-3xl md:w-1/2 w-full md:w-96 h-56  lg:ml-24 md:ml-5" data-aos="fade-down"  data-aos-duration="2000" alt="Pneumatic">
   <div class="md:px-10  sm:py-1/2 w-full h-1/2 ">
       <h1 class="md:text-left text-center pt-5 pb-10 font-bold sm:text-4xl text-xl title-h2 "><?php echo $lang['title-P'] ?></h1>
        <p class="md:text-left text-left text-sm lg:w-3/4  md:w-full   " data-aos="zoom-in" data-aos-duration="1500"><?php echo $lang['Para-P'] ?></p>
    
        <div>  <ul class="about-link justify-items-center sm:w-full  w-3/4 "> 
        <li><a href="https://www.facebook.com/Nissed-Manufacturing-108347454661551" ><i class="fa fa-facebook sm:m-0  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>       
         <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope sm:m-0  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>
          <li><a href="https://www.linkedin.com/company/nissed-manufacturing/?fbclid=IwAR0DD_gSt0AOF9xRgKS6rcXIHgZfkZJNurmtZ6D4za8S__3iqvTBSK9pmqA"><i class="fa fa-linkedin  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>
    
    
        </ul></div>
    </div> 
  
  </div>
<!-- bloc6 -->
  <div class=" flex md:flex-row flex-col justify-items-center z-20 lg:m-24 md:m-16 m-24  " id="6"> 
    <img src="image/ELECTRICITE.jpg" class="rounded-3xl md:w-1/2 w-full md:w-96 h-56  lg:ml-24 md:ml-5   " data-aos="fade-down"  data-aos-duration="2000" alt="ELECTRICITE">
   <div class="md:px-10  sm:py-1/2 w-full h-1/2 ">
       <h1 class="md:text-left text-center pt-5 pb-10 font-bold sm:text-4xl text-xl title-h2 "><?php echo $lang['title-E'] ?></h1>
        <p class="md:text-left text-left text-sm lg:w-3/4  md:w-full   " data-aos="zoom-in" data-aos-duration="1500"><?php echo $lang['Para-E'] ?></p>
    
        <div>  <ul class="about-link justify-items-center sm:w-full  w-3/4 "> 
        <li><a href="https://www.facebook.com/Nissed-Manufacturing-108347454661551" ><i class="fa fa-facebook sm:m-0  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>       
         <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope sm:m-0  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>
          <li><a href="https://www.linkedin.com/company/nissed-manufacturing/?fbclid=IwAR0DD_gSt0AOF9xRgKS6rcXIHgZfkZJNurmtZ6D4za8S__3iqvTBSK9pmqA"><i class="fa fa-linkedin  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>
    
    
        </ul></div>
    </div> 
  
  </div>
<!-- bloc7 -->
  <div class=" flex md:flex-row flex-col justify-items-center z-20 lg:m-24 md:m-16 m-24  " id="7"> 
    <img src="image/CAO-DAO.jpeg" class="rounded-3xl   md:w-1/2 w-full md:w-96 h-56  lg:ml-24 md:ml-5   " data-aos="fade-down"  data-aos-duration="2000" alt="CAO-DAO">
   <div class="md:px-10  sm:py-1/2 w-full h-1/2 ">
       <h1 class="md:text-left text-center pt-5 pb-10 font-bold sm:text-4xl text-xl title-h2 "><?php echo $lang['title-fao'] ?></h1>
        <p class="md:text-left text-left text-sm lg:w-3/4  md:w-full   " data-aos="zoom-in" data-aos-duration="1500"><?php echo $lang['Para-fao'] ?></p>
    
        <div>  <ul class="about-link justify-items-center sm:w-full  w-3/4 "> 
        <li><a href="https://www.facebook.com/Nissed-Manufacturing-108347454661551" ><i class="fa fa-facebook sm:m-0  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>       
         <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope sm:m-0 sm:w-12 sm:h-12 w-10 h-10"></i></a></li>
          <li><a href="https://www.linkedin.com/company/nissed-manufacturing/?fbclid=IwAR0DD_gSt0AOF9xRgKS6rcXIHgZfkZJNurmtZ6D4za8S__3iqvTBSK9pmqA"><i class="fa fa-linkedin  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>
    
    
        </ul></div>
    
    </div> 
  
  </div>
  <!-- bloc8 -->
  <div class=" flex md:flex-row flex-col justify-items-center z-20 lg:m-24 md:m-16 m-24  " id="6"> 
    <img src="image/CREATION SITE WEB LOGO CHARTE GRAPHIQUE PACKAGING.jpeg" class="rounded-3xl md:w-1/2 w-full md:w-96 h-56  lg:ml-24 md:ml-5 " data-aos="fade-down"  data-aos-duration="2000" alt="CREATION SITE WEB LOGO CHARTE GRAPHIQUE PACKAGING">
   <div class="md:px-10  sm:py-1/2 w-full h-1/2 ">
       <h1 class="md:text-left text-center pt-5 pb-10 font-bold  sm:text-4xl text-xl title-h2 "><?php echo $lang['title-web'] ?></h1>
        <p class="md:text-left text-left text-sm lg:w-3/4  md:w-full   " data-aos="zoom-in" data-aos-duration="1500"><?php echo $lang['Para-web'] ?></p>
    
        <div>  <ul class="about-link justify-items-center sm:w-full  w-3/4 "> 
            <li><a href="https://www.facebook.com/Nissed-Manufacturing-108347454661551" ><i class="fa fa-facebook sm:m-0  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>       
         <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope sm:m-0  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>
          <li><a href="https://www.linkedin.com/company/nissed-manufacturing/?fbclid=IwAR0DD_gSt0AOF9xRgKS6rcXIHgZfkZJNurmtZ6D4za8S__3iqvTBSK9pmqA"><i class="fa fa-linkedin  sm:w-12 sm:h-12 w-10 h-10"></i></a></li>
    
        </ul></div>
    </div> 
  
  </div>
 
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

<button onclick="topFunction()" class="myBtn" id="myBtn" title="Go to top">^</button>
  <script>
      mybutton = document.getElementById("myBtn");
    


        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
         
        

          } else {
            mybutton.style.display = "none";
           
           
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