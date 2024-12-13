<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belle You - Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/inter.css">

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

    <section class="flex lg:flex-row flex-col lg:mt-10 mt-3 flex justify-between w-full">
        <div class="lg:w-[70%] lg:mx-10 md:mx-6 lg:px-16 lg:pb-8 pb-10 mx-5 px-3 flex flex-col">
            <div class="font-inter bg-[#ffffff] shadow-lg text-center text-xl font-semibold py-3 mb-10 text-[#382B00]">
                My Cart (5)
            </div>

            <div class="bg-[#ffffff] shadow-lg mt-8 pb-10 md:px-10 px-5">
                <div class="flex flex-row justify-between">
                    <div class="flex md:flex-row mt-5 flex-col">
                        <div class="w-full h-full">
                            <img src="/images/frame10.png" alt="">
                        </div>
                    
                        <div class="flex flex-col lg:text-lg text-base md:ml-10 md:mt-0 mt-5 md:space-y-4">
                            <p class="font-inter text-[#382B00]">First Asoebi Product Name</p>
                            <p class="font-inter text-[#382B00]">₦23,300</p>

                            <div class="bg-[#F5F5F5] mt-5 text-gray-700 font-semibold rounded-full px-5 py-1  items-center justify-between flex mb-5">
                                <span class="text-base font-inter text-[#382B00]">Size</span>

                                <button>
                                    <svg class="fill-current w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M5.293 7.707a1 1 0 011.414 0L10 11.414l3.293-3.707a1 1 0 011.414 0 1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                                    </svg>
                                </button>
                            </div>

                            <div class="flex items-center justify-between bg-[#F5F5F5] rounded-full px-5 lg:mx-5 py-1">
                                <button id="subtract" class="text-gray-700 font-semibold text-[#382B00]">
                                    -
                                </button>
                                
                                <span id="quantity" class="text-lg font-inter text-[#382B00]">1</span>
                                
                                <button id="add" class="text-gray-700 font-semibold text-[#382B00]">
                                    +
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-col mt-7">
                        <a href="#" class="text-[#D4AF37] flex items-end">
                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.707107" y1="1.29289" x2="14.3137" y2="14.8995" stroke="black" stroke-width="2"/>
                                <line x1="14.3138" y1="2.70711" x2="0.707219" y2="16.3137" stroke="black" stroke-width="2"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex justify-between md:mt-10 mt-7">
                    <div class="flex md:flex-row flex-col">
                        <div class="w-full h-full">
                            <img src="/images/frame10.png" alt="">
                        </div> 

                        <div class="flex flex-col lg:text-lg text-base md:ml-10 md:mt-0 mt-5 md:space-y-4">
                            <p class="font-inter text-[#382B00]">First Asoebi Product Name</p>
                            <p class="font-inter text-[#382B00]">₦23,300</p>

                            <div class="bg-[#F5F5F5] mt-5 text-gray-700 font-semibold rounded-full px-5 py-1  items-center justify-between flex mb-5">
                                <span class="text-base font-inter text-[#382B00]">Size</span>

                                <button>
                                    <svg class="fill-current w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M5.293 7.707a1 1 0 011.414 0L10 11.414l3.293-3.707a1 1 0 011.414 0 1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                                    </svg>
                                </button>
                            </div>

                            <div class="flex items-center justify-between bg-[#F5F5F5] rounded-full px-5 lg:mx-5 py-1">
                                <button id="subtract" class="text-gray-700 font-semibold text-[#382B00]">
                                    -
                                </button>
                                
                                <span id="quantity" class="text-lg font-inter text-[#382B00]">1</span>
                                
                                <button id="add" class="text-gray-700 font-semibold text-[#382B00]">
                                    +
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-col mt-2">
                        <a href="#" class="text-[#D4AF37] flex items-end">
                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.707107" y1="1.29289" x2="14.3137" y2="14.8995" stroke="black" stroke-width="2"/>
                                <line x1="14.3138" y1="2.70711" x2="0.707219" y2="16.3137" stroke="black" stroke-width="2"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="flex justify-between md:mt-10 mt-7">
                    <div class="flex md:flex-row flex-col">
                        <div class="w-full h-full">
                            <img src="/images/frame10.png" alt="">
                        </div>   

                        <div class="flex flex-col lg:text-xl md:text-lg text-base text-base md:ml-10 md:mt-0 mt-5 md:space-y-4">
                            <p class="font-inter text-[#382B00]">First Asoebi Product Name</p>
                            <p class="font-inter text-[#382B00]">₦23,300</p>

                            <div class="bg-[#F5F5F5] mt-5 text-gray-700 font-semibold rounded-full px-5 py-1  items-center justify-between flex mb-5">
                                <span class="text-base font-inter text-[#382B00]">Size</span>

                                <button>
                                    <svg class="fill-current w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M5.293 7.707a1 1 0 011.414 0L10 11.414l3.293-3.707a1 1 0 011.414 0 1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                                    </svg>
                                </button>
                            </div>

                            <div class="flex items-center justify-between bg-[#F5F5F5] rounded-full px-5 lg:mx-5 py-1">
                                <button id="subtract" class="text-gray-700 font-semibold text-[#382B00]">
                                    -
                                </button>
                                
                                <span id="quantity" class="text-lg font-inter text-[#382B00]">1</span>
                                
                                <button id="add" class="text-gray-700 font-semibold text-[#382B00]">
                                    +
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-col mt-2">
                        <a href="#" class="text-[#D4AF37] flex items-end">
                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.707107" y1="1.29289" x2="14.3137" y2="14.8995" stroke="black" stroke-width="2"/>
                                <line x1="14.3138" y1="2.70711" x2="0.707219" y2="16.3137" stroke="black" stroke-width="2"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
       

        <div class="lg:w-[30%] lg:h-[20%] bg-white shadow-lg flex flex-col lg:mx-20 lg:px-16 lg:mt-0 mt-10 mb-20 mx-5 px-8 py-5 lg:pb-8 pb-5">
            <p class="font-inter text-[#382B00] text-lg font-bold mb-5">Account Details</p>

            <svg class="w-full mt-4" height="2" viewBox="0 0 100 2" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <line x1="0" y1="0" x2="100" y2="0" stroke="#333333"/>
            </svg>

            <div class="flex justify-between mt-5">
                <p class="font-inter font-semibold text-lg text-[#382B00]">Subtotal</p>

                <p class="font-inter text-[#382B00] text-lg">₦116,500</p>
            </div>

            <svg class="w-full mt-4" height="2" viewBox="0 0 100 2" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <line x1="0" y1="0" x2="100" y2="0" stroke="#333333"/>
            </svg>

            <button class="bg-[#D4AF37] px-10 py-2 rounded-full text-white mt-16">CHECKOUT ₦69,900</button>
        </div>
    </section>

    
        
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
        <script>
    </body>
</html>

<script src="/js/hamburger.js"></script>