<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belle You</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.4/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
    <!-- Navbar -->
    <nav class="py-10 md:flex lg:flex bg-[#FFFBEF] w-full border-b border-[#382B00] hidden">
        <div class="w-[30%] pl-10 lg:pl-24 font-inter font-bold"><a href="/">Belle For You</a></div>
        <ul class="flex space-x-8 w-[50%] font-medium">
            <a href=""><li class="flex font-inter">Category
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="mt-1 ml-2">
                    <path d="M5 8.40717L10 13.4072L15 8.40717" stroke="#382B00" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </li></a>
            <a href=""><li class="font-inter">Deals</li></a>
            <a href="/product"><li class="font-inter">What's New</li></a>
        </ul>

        <ul class="flex space-x-5 pr-10 lg:space-x-8 w-[20%] justify-end lg:pr-28 font-medium">
            <a href="/account"><li class="flex">Account
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-2">
                    <path d="M12.16 10.87C12.06 10.86 11.94 10.86 11.83 10.87C9.45 10.79 7.56 8.84 7.56 6.44C7.56 3.99 9.54 2 12 2C14.45 2 16.44 3.99 16.44 6.44C16.43 8.84 14.54 10.79 12.16 10.87Z" stroke="#382B00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7.16 14.56C4.74 16.18 4.74 18.82 7.16 20.43C9.91 22.27 14.42 22.27 17.17 20.43C19.59 18.81 19.59 16.17 17.17 14.56C14.43 12.73 9.92 12.73 7.16 14.56Z" stroke="#382B00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </li></a>

            <a href="/cart"><li class="flex">Cart
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-2">
                    <path d="M2 2H3.74001C4.82001 2 5.67 2.93 5.58 4L4.75 13.96C4.61 15.59 5.89999 16.99 7.53999 16.99H18.19C19.63 16.99 20.89 15.81 21 14.38L21.54 6.88C21.66 5.22 20.4 3.87 18.73 3.87H5.82001" stroke="#382B00" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.25 22C16.9404 22 17.5 21.4404 17.5 20.75C17.5 20.0596 16.9404 19.5 16.25 19.5C15.5596 19.5 15 20.0596 15 20.75C15 21.4404 15.5596 22 16.25 22Z" stroke="#382B00" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8.25 22C8.94036 22 9.5 21.4404 9.5 20.75C9.5 20.0596 8.94036 19.5 8.25 19.5C7.55964 19.5 7 20.0596 7 20.75C7 21.4404 7.55964 22 8.25 22Z" stroke="#382B00" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9 8H21" stroke="#382B00" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </li></a>
        </ul>
    </nav>
    <!-- /Navbar -->

    <!-- Mobile header -->
    <header class="bg-[#FFFBEF] w-full flex justify-between py-8 border border-[#382B00] lg:hidden md:hidden">
        <div class="pl-10 font-bold"><a href="/">Belle For You</a></div>
        
        <button id="hamburger" class="text-gray-700 focus:outline-none pr-10">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>                  
        </button>
    </header>

    <nav id="menu" class="flex flex-col pl-10 justify-start hidden font-inter font-semibold space-y-3 text-[#382B00] bg-white shadow-lg mt-5">
        <a href="#">Category</a>
        <a href="#">Deals</a>
        <a href="/product">What's New</a>
        <a href="/account">Account</a>
        <a href="/cart" class="pb-5">Cart</a>
    </nav>

    <!-- mobile end -->

 <!-- Hero -->
    <section class="md:px-10 py-8 relative w-full h-full px-3">
    <div class="z-50 absolute lg:mt-32 md:mt-16 mt-3 md:py-3 flex flex-col pl-10 md:space-y-2">
            
        <h1 class="md:text-3xl lg:text-5xl text-lg text-start font-bold text-white">Grab Upto 50% Off <br>On Our Asoebi</h1>
        <div class="justify-start flex md:flex-row flex-col md:space-y-3 text-sm md:text-lg justify-start text-start md:space-x-4">
            <button class="bg-white font-semibold px-2 py-1 md:px-6 md:py-3 rounded-3xl text-[#D4AF37]">Buy Now</button>
            <button class="text-white underline underline-offset-4 font-medium">View all Category</button>
        </div>
    </div>

    <div class="carousel w-full">
    
  <div id="slide1" class="carousel-item relative w-full">
    <img src="../images/hero.png" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-3/4">
      <a href="#slide4" class="w-4 h-4 w-4 h-4">❮</a> 
      <a href="#slide2" class="w-4 h-4 w-4 h-4">❯</a>
    </div>
  </div> 
  <div id="slide2" class="carousel-item relative w-full">
    <img src="../images/1.png" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-3/4">
      <a href="#slide1" class="w-4 h-4">❮</a> 
      <a href="#slide3" class="w-4 h-4">❯</a>
    </div>
  </div> 
  <div id="slide3" class="carousel-item relative w-full">
    <img src="../images/2.png" class="w-full"/>
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-3/4">
      <a href="#slide2" class="w-4 h-4">❮</a> 
      <a href="#slide4" class="w-4 h-4">❯</a>
    </div>
  </div> 
  <div id="slide4" class="carousel-item relative w-full">
    <img src="../images/3.png" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-3/4">
      <a href="#slide3" class="w-4 h-4">❮</a> 
      <a href="#slide1" class="w-4 h-4">❯</a>
    </div>
  </div>
</div>
        <!-- <div class="absolute md:top-28 py-3 flex flex-col px-10">
            
            <h1 class="md:text-5xl text-lg text-center md:text-center lg:text-start  font-bold text-white">Grab Upto 50% Off <br>On Our Asoebi</h1>
                <div class="py-2 flex justify-center text-sm md:text-lg lg:justify-start items-center lg:text-start space-x-4">
            <button class="bg-white font-semibold px-4 py-2 md:px-6 md:py-3 rounded-3xl text-[#D4AF37]">Buy Now</button>
            <button class="text-white underline underline-offset-4 font-medium">View all Category</button>
           
        </div>
        </div>
       
        <div>
        <img class="rounded-3xl h-fit w-fit md:h-96 w-full object-cover" src="../images/hero.png" alt="">  
     </div>  -->
    
    </section>

     <!-- /Hero -->
     
     <!-- Categories -->
     <section class="lg:px-20 md:px-10 px-3">
        <div class="flex lg:flex-row flex-col justify-between space-x-5">
            <div class="grid lg:grid-cols-6 md:grid-cols-3 grid-cols-2 gap-4">
                <button class="bg-gray-200 px-3 py-2 whitespace-nowrap md:px-6 md:py-2 rounded-3xl font-medium">Asoebi</button>
                <button class="bg-gray-200 px-3 py-2 whitespace-nowrap md:px-6 md:py-2 rounded-3xl font-medium">Trousers</button>
                <button class="bg-gray-200 px-3 py-2 whitespace-nowrap md:px-6 md:py-2 rounded-3xl font-medium">Skirts</button>
                <button class="bg-gray-200 px-3 py-2 whitespace-nowrap md:px-6 md:py-2 rounded-3xl font-medium">Dresses</button>
                <button class="bg-gray-200 px-3 py-2 whitespace-nowrap md:px-6 md:py-2 rounded-3xl font-medium">Office Wears</button>
                <button class="bg-gray-200 px-3 py-2 whitespace-nowrap md:px-2 md:py-2 rounded-3xl font-medium">2 Piece Trousers</button>
            </div>

            <div class="mt-5 lg:mt-0">
                <Button class="border border-2 border-gray-300 px-5 py-2 rounded-full font-medium text-center whitespace-nowrap">
                    Sort By
                    <select name="Sort By" id="">
                        <option value=""></option>
                    </select>
                </Button>
            </div>
        </div>
       
        
        </div>
     </section>
      <!-- /Categories -->

      <!-- Products -->
      <section class="lg:px-20 md:px-10 px-3">
            <h1 class="text-2xl font-medium mt-6 md:mt-10">Asoebi For You</h1>
           
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 my-10">
                     <!-- Items -->
                <div class="relative">
                    <span class="absolute top-0 right-0 h-16 w-16 flex p-4 justify-end "><i class="bi bi-heart"></i></span>
                    
                    <img class="bg-[#F5F5F5] rounded-xl py-2 object-contain h-48 w-96" src="../images/pngwing.png" alt="">
                    <div class="py-3 space-y-1">
                    <h1 class="text-lg">First Asoebi Product Name</h1>
                    <p class="text-2xl text-[#382B00] font-medium">&#8358;24,000</p>
                      <button class="bg-white  border-2 border-[#D4AF37] text-[#D4AF37] font-semibold px-4 py-2 md:px-8 md:py-2 rounded-3xl">Buy Now</button>
                   
                    </div>
                    </div>
                    <div class="relative">
                        <span class="absolute top-0 right-0 h-16 w-16 flex p-4 justify-end "><i class="bi bi-heart"></i></span>
                        
                        <img class="bg-[#F5F5F5] rounded-xl py-2 object-contain h-48 w-96 object-contain h-48 w-96" src="../images/pngwing2.png" alt="">
                        <div class="py-3 space-y-1">
                        <h1 class="text-lg">First Asoebi Product Name</h1>
                         <p class="text-2xl text-[#382B00] font-medium">&#8358;24,000</p>
                        <button class="bg-[#D4AF37]  border-2 border-[#D4AF37] text-white font-semibold px-4 py-2 md:px-8 md:py-2 rounded-3xl">Buy Now</button>
                   
                        </div>
                        </div>
                        <div class="relative">
                            <span class="absolute top-0 right-0 h-16 w-16 flex p-4 justify-end "><i class="bi bi-heart"></i></span>
                            
                            <img class="bg-[#F5F5F5] rounded-xl py-2 object-contain h-48 w-96" src="../images/pngwing3.png" alt="">
                            <div class="py-3 space-y-1">
                            <h1 class="text-lg">First Asoebi Product Name</h1>
                            <p class="text-2xl font-medium">&#8358;24,000</p>
                            <button class="bg-white  border-2 border-[#D4AF37] text-[#D4AF37] font-semibold px-4 py-2 md:px-8 md:py-2 rounded-3xl">Buy Now</button>
                   
                            </div>
                            </div>
                            <div class="relative">
                                <span class="absolute top-0 right-0 h-16 w-16 flex p-4 justify-end "><i class="bi bi-heart"></i></span>
                                
                                <img class="bg-[#F5F5F5] rounded-xl py-2 object-contain h-48 w-96" src="../images/pngwing.png" alt="">
                                <div class="py-3 space-y-1">
                                <h1 class="text-lg">First Asoebi Product Name</h1>
                                <p class="text-2xl font-medium">&#8358;24,000</p>
                                <button class="bg-white  border-2 border-[#D4AF37] text-[#D4AF37] font-semibold px-4 py-2 md:px-8 md:py-2 rounded-3xl">Buy Now</button>
                   
                                </div>
                                </div>
              
            </div>
                  
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 my-10">
                     <!--Items-->
                <div class="relative">
                    <span class="absolute top-0 right-0 h-16 w-16 flex p-4 justify-end"><i class="bi bi-heart"></i></span>
                    
                    <img class="bg-[#F5F5F5] rounded-xl py-2 object-contain h-48 w-96" src="../images/pngwing.png" alt="">
                    <div class="py-3 space-y-1">
                    <h1 class="text-lg">First Asoebi Product Name</h1>
                    <p class="text-2xl font-medium">&#8358;24,000</p>
                      <button class="bg-white  border-2 border-[#D4AF37] text-[#D4AF37] font-semibold px-4 py-2 md:px-8 md:py-2 rounded-3xl">Buy Now</button>
                   
                    </div>
                    </div>
                    <div class="relative">
                        <span class="absolute top-0 right-0 h-16 w-16 flex p-4 justify-end "><i class="bi bi-heart"></i></span>
                        
                        <img class="bg-[#F5F5F5] rounded-xl py-2 object-contain h-48 w-96" src="../images/pngwing2.png" alt="">
                        <div class="py-3 space-y-1">
                        <h1 class="text-lg">First Asoebi Product Name</h1>
                         <p class="text-2xl text-[#382B00] font-medium">&#8358;24,000</p>
                        <button class="bg-[#D4AF37]  border-2 border-[#D4AF37] text-white font-semibold px-4 py-2 md:px-8 md:py-2 rounded-3xl">Buy Now</button>
                   
                        </div>
                        </div>
                        <div class="relative">
                            <span class="absolute top-0 right-0 h-16 w-16 flex p-4 justify-end "><i class="bi bi-heart"></i></span>
                            
                            <img class="bg-[#F5F5F5] rounded-xl py-2 object-contain h-48 w-96" src="../images/pngwing3.png" alt="">
                            <div class="py-3 space-y-1">
                            <h1 class="text-lg">First Asoebi Product Name</h1>
                            <p class="text-2xl font-medium">&#8358;24,000</p>
                            <button class="bg-white  border-2 border-[#D4AF37] text-[#D4AF37] font-semibold px-4 py-2 md:px-8 md:py-2 rounded-3xl">Buy Now</button>
                   
                            </div>
                            </div>
                            <div class="relative">
                                <span class="absolute top-0 right-0 h-16 w-16 flex p-4 justify-end "><i class="bi bi-heart"></i></span>
                                
                                <img class="bg-[#F5F5F5] rounded-xl py-2 object-contain h-48 w-96" src="../images/pngwing.png" alt="">
                                <div class="py-3 space-y-1">
                                <h1 class="text-lg">First Asoebi Product Name</h1>
                                <p class="text-2xl font-medium">&#8358;24,000</p>
                                <button class="bg-white  border-2 border-[#D4AF37] text-[#D4AF37] font-semibold px-4 py-2 md:px-8 md:py-2 rounded-3xl">Buy Now</button>
                   
                                </div>
                                </div>
              
            </div>
              
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 my-10">
                     <!-- Items -->
                <div class="relative">
                    <span class="absolute top-0 right-0 h-16 w-16 flex p-4 justify-end "><i class="bi bi-heart"></i></span>
                    
                    <img class="bg-[#F5F5F5] rounded-xl py-2 object-contain h-48 w-96" src="../images/pngwing.png" alt="">
                    <div class="py-3 space-y-1">
                    <h1 class="text-lg">First Asoebi Product Name</h1>
                    <p class="text-2xl font-medium">&#8358;24,000</p>
                      <button class="bg-white  border-2 border-[#D4AF37] text-[#D4AF37] font-semibold px-4 py-2 md:px-8 md:py-2 rounded-3xl">Buy Now</button>
                   
                    </div>
                    </div>
                    <div class="relative">
                        <span class="absolute top-0 right-0 h-16 w-16 flex p-4 justify-end "><i class="bi bi-heart"></i></span>
                        
                        <img class="bg-[#F5F5F5] rounded-xl py-2 object-contain h-48 w-96" src="../images/pngwing2.png" alt="">
                        <div class="py-3 space-y-1">
                        <h1 class="text-lg">First Asoebi Product Name</h1>
                         <p class="text-2xl text-[#382B00] font-medium">&#8358;24,000</p>
                        <button class="bg-[#D4AF37]  border-2 border-[#D4AF37] text-white font-semibold px-4 py-2 md:px-8 md:py-2 rounded-3xl">Buy Now</button>
                   
                        </div>
                        </div>
                        <div class="relative">
                            <span class="absolute top-0 right-0 h-16 w-16 flex p-4 justify-end "><i class="bi bi-heart"></i></span>
                            
                            <img class="object-contain h-48 w-96 bg-[#F5F5F5] rounded-xl py-2" src="../images/pngwing3.png" alt="">
                            <div class="py-3 space-y-1">
                            <h1 class="text-lg">First Asoebi Product Name</h1>
                            <p class="text-2xl font-medium">&#8358;24,000</p>
                            <button class="bg-white  border-2 border-[#D4AF37] text-[#D4AF37] font-semibold px-4 py-2 md:px-8 md:py-2 rounded-3xl">Buy Now</button>
                   
                            </div>
                            </div>
                            <div class="relative">
                                <span class="absolute top-0 right-0 h-16 w-16 flex p-4 justify-end "><i class="bi bi-heart"></i></span>
                                
                                <img class="object-contain h-48 w-96 bg-[#F5F5F5] rounded-xl py-2" src="../images/pngwing.png" alt="">
                                <div class="py-3 space-y-1">
                                <h1 class="text-lg">First Asoebi Product Name</h1>
                                <p class="text-2xl font-medium">&#8358;24,000</p>
                                <button class="bg-white  border-2 border-[#D4AF37] text-[#D4AF37] font-semibold px-4 py-2 md:px-8 md:py-2 rounded-3xl">Buy Now</button>
                   
                                </div>
                                </div>
              
            </div>
            


</section>
       <!-- /Products -->

       <!-- Newsletter -->
       <section class="md:px-28 p-5">
            <div class="bg-[#FFF5D3] border-2 border-amber-800 rounded-3xl h-72 flex flex-col justify-center items-center lg:px-0">
                <h1 class="font-bold text-[#382B00] text-center text-3xl py-2">Sign Up for our Newsletter</h1>
                <p class="text-amber-900 text-[#382B00] text-xl py-2 text-center ">Be the first about release and industry news and insights.</p>
                <div class="flex justify-center items-center py-2">
                <input class="p-3 rounded-lg w-62 md:w-80 outline-none " type="email" name="email" id="" placeholder="Enter your email" >
                <input class="ml-4 bg-[#D4AF37] px-7 py-3 rounded-lg text-white font-medium" type="submit" value="Subscribe">
            </div>
            </div>
        </section>
        <!-- /Newsletter -->

       <!-- Footer -->
        <footer class="lg:px-28 p-5 bg-[#FFFBEF] border-t-2 border-amber-800 mt-10">
            <div class="flex md:flex-row flex-col lg:justify-between ">
               <div>
                <h1 class="lg:text-2xl md:text-xl text-2xl md:mb-0 mb-5 md:mt-2 font-bold">Belle For You</h1>
            </div>
            <div class="flex items-center md:mb-0 mb-8">
                <ul class="flex flex-col md:flex-row items-start md:items-center md:gap-0 gap-1 space-x-0 md:space-x-8 lg:space-x-12 md:ml-20 font-medium">
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Deals</a></li>
                    <li><a href="/product">Whats New</a></li>
                </ul>
            </div>
            <div class="flex items-center md:mb-0 mb-2">
                <ul class="flex items-center space-x-4 md:space-x-4 md:ml-20 font-medium">
                    <a href="#"><img src="../images/facebook.svg" alt="">
                    </a>
                    <a href="#"><img src="../images/wi.png" alt="">
                    </a>
                    <a href="#"><img src="../images/linkedin.png" alt="">
                    </a>
                    <a href="#"><img src="../images/insagram.png" alt="">
                    </a>
                </ul>
            </div>
        </footer>
</body>
</html>

<script src="/js/hamburger.js"></script>