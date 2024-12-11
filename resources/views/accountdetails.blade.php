<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belle You - Account</title>
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
        <div class="w-[30%] pl-10 lg:pl-24 font-inter font-bold"><a href="">Belle For You</a></div>
        <ul class="flex space-x-8 w-[50%] font-medium">
            <a href=""><li class="flex font-inter">Category
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="mt-1 ml-2">
                    <path d="M5 8.40717L10 13.4072L15 8.40717" stroke="#382B00" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </li></a>
            <a href=""><li class="font-inter">Deals</li></a>
            <a href=""><li class="font-inter">What's New</li></a>
        </ul>

        <ul class="flex space-x-5 pr-10 lg:space-x-8 w-[20%] justify-end lg:pr-28 font-medium">
            <a href=""><li class="flex">Account
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-2">
                    <path d="M12.16 10.87C12.06 10.86 11.94 10.86 11.83 10.87C9.45 10.79 7.56 8.84 7.56 6.44C7.56 3.99 9.54 2 12 2C14.45 2 16.44 3.99 16.44 6.44C16.43 8.84 14.54 10.79 12.16 10.87Z" stroke="#382B00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7.16 14.56C4.74 16.18 4.74 18.82 7.16 20.43C9.91 22.27 14.42 22.27 17.17 20.43C19.59 18.81 19.59 16.17 17.17 14.56C14.43 12.73 9.92 12.73 7.16 14.56Z" stroke="#382B00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </li></a>

            <a href=""><li class="flex">Cart
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
        <div class="pl-10 font-bold"><a href="">Belle For You</a></div>
        
        <button id="hamburger" class="text-gray-700 focus:outline-none pr-10">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>                  
        </button>
    </header>

    <nav id="menu" class="flex flex-col pl-10 hidden">
        <a href="">Category</a>
        <a href="">Deals</a>
        <a href="">What's New</a>
        <a href="">Account</a>
        <a href="">Cart</a>
    </nav>
    <!-- mobile end -->

    <section class="flex lg:flex-row flex-col lg:mt-20 mt-3">
        <div class="lg:w-[20%] bg-white shadow-lg flex-col lg:ml-20 mb-5 h-full lg:mx-0 mx-5 space-y-3 pb-3">
            <a href="" class="flex font-inter text-[#382B00] text-lg mt-2`">
                <svg width="30" height="30" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="ml-5">
                    <rect width="36" height="36" fill="url(#pattern0_417_844)"/>
                    <defs>
                    <pattern id="pattern0_417_844" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_417_844" transform="scale(0.015625)"/>
                    </pattern>
                    <image id="image0_417_844" width="64" height="64" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEz0lEQVR4nO2aa2gcVRTHr2+t9YEWi0IVH58qtOjunrMJYqDgG6qIFfGDgvgWfH0RRJCiKAq1iFQUwX4Qqqydc2YXia1SQ1taFaJN5pxNYhSiaOsDtVCfNbWRM3s3SVPFpJlNZpb5wXzanf/unHvumfO4zuXk5OTk5OTMBWNj7iglvEwZnhLCbUIwooS/CcMfwrhHCXYo4dqIyl32XddOCOGNQrhLGcemdREO1Qmud1lHK10LhXFD88GE8TPzAA1ghdYK5/bWCguGu68+oS/oOMtWXhgeF8L6+PcJ1o+s7zrRZZHBsPMUYfjEP/ieOsGqsSfd0dPaKly6VRh+8oZ4p/fVwnEuS1Qqq45Rwk1+FT+Kqrh4phpCnRcq49cNDXzBZQnh8p2NlYfhoVph0RHrBMWSMhwQwoNKZXBZYGelfJIwfhu7bwArZqtnq+89qeqyQJ3hBu+2W5PQMw8Sgj+VYHQw7DzHpR0heN0MEAX4YGKajJWkNVuGBb3YA4JiKSnNiOAO71Vvu7QjhF81AmBxSVKa9Wrp4mZQdWlHGb63P2vJTVKaw91wqjfALy7tKMMX8X7dWLwgMc3K0uN9QrXfpR3xOb8EsDwpTa2Uz/AG+NGlHWHcklQOMCUrHDPvcmlHCdb51bo/KU3h0lW+Ltjs0o4Q3tcoaWFdUpoawiPeqC+5tCPc0ekj9sfJaWLYiCt4i0s7PT1dx1opK4x/DwSFs2er17d52clCsM/0kny1thRleMMHrXtmrUWl273Wey4r1Amv8XEgmk1/z7xJGQZNyxoqLlsNUOiPjRDiyiPVEYaHvSH7p9NNShURlW/2dfznto9ner8lUnHH2JohCeYUc4owvOv378szua+vCucLwW7fIV7rskp9Y8d5481Nwkenc09UxWVK8I2/Z1PmGqJTqYely62jE7sy42PuP7A9LoQPKeGvPunZYm111w5oiCuV4Xe/Hd604mby51FYKsaToUnzAJsXuHZCuKNzvFna6Bnc7Ych3RNTIfhBQ7jJtStDtcKi5rxg8mXRXhmf38XLT3dt/OB3WTWnjH8dPg+EA8Kw3UZj9RDRGiAuy/TE9UDs8quF8UN7wInBJ4za61FCuK1ROMGLzTbaIR5BsMNmAlYA2dvEpZ3eWmGBzfTiIEfw86EPhPuV8AMN4IF/K2higxFcadtAGXut8DlsmxCMCMOzGsJSlyaEi0uEYY0S7p3i1gO2ulEA1800E+ytFE6LArxCCJ9QgpoSfDdhCDwohFwPOy5x84lWuhYqw9MTr7f42mnDC8vkWnG4QghfsUMVk+LGGvM8N9dEcbaGQ80VUYK3BoLypXP024vjeSHBqP99tbMGbl6SGoL+gQDKbh4wg8cP34gPu2140vIfrTNeGwe0xsO/ZpNgN49YrGh2oS1IDlDpzNYWNgT7fJHynEsJljJb7Gl511gI3vevtA0uZdjYfPxNMYsGzP+c1PA5/JRCJi1EVLrXL5AkfsxO7PXTEH/GpRTrGwjDl/FcMiwVExUXgk9jYcaCSzHWPfILtTpp4b0mnPZqbXyERtCTqLD6TM+lHK2WL2rJQQrNiAGs5mjJQQrNiAFa9l81NwDmHqApvOz0+dR6pCXeKgzbs2KAuLdIuC1RA+Tk5OTk5Li24x9LCN1Bail0OgAAAABJRU5ErkJggg=="/>
                    </defs>
                </svg>
                <p class="ml-6">My Account</p>
            </a>

            <a href="" class="flex font-inter text-[#382B00] text-lg mt-2">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="ml-5">
                    <rect width="36" height="36" fill="url(#pattern0_417_845)"/>
                    <defs>
                    <pattern id="pattern0_417_845" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_417_845" transform="scale(0.015625)"/>
                    </pattern>
                    <image id="image0_417_845" width="64" height="64" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAACU0lEQVR4nO2ZwWoUQRCGOwc9RR9CcjIQFd2qSQwE8WF8CM0rKHoyvoFr0rV78aIoGLx5StXGkKsXlXhJLkECIz0zisqOmV26exq7PujLsmz99U91dW2PMYqiKIqiKDMgFt4LYZnyYoJdEwpJIMEuK7gBJlHUANIKKHULUA89QP5xOgTtyh31BQ8gfXXljvqCB5AZP4+tL3gAUQNwrq3he+LLywCL75IzQHJtgkywm7UBbagBlEkFyDn3BMEEddQXPIDM2K1j6wseQBK5J1ADKLEKkIB3iNlPgtLHVpREJsHeepHMMQmGOAWSMyA2agBpBZR9bYHvbgULkL4BcM+tYAH+k4k0OGoARaoA6eF1eJcXKfEMoLjJd00gugEmEmoAaQWUWW8BtnBcxRxuLGZqAE6qmLaALA0Qi4/qmPB4Hl3e9XLHkvTFZDxYFoIztnDKO3Ct7XvTEv04WrtU3z/AsTdBYvHA/ejeGFdMJNjCkybBT20mTDNAaHC9qZ59f2IIntWu4n0TiQ9bNy+whVfN0zx1huzvQPF7FU43ADcbrU+9iZnQ4G7dlOCzKzETCRlevVhXApx1mRgPX8JlIfhaGTCCO37FWHjbzOjPy9IsmIi4nsAWHzIhM8HJtLtGp4ktvmg+e+1dhIyLJSb4VpuAw5iVcB7uyf9KnvBob/vWlSCBxOL6TxOE4AtbfDAZrd6IdTr8oWW4sVjFrvZ8U/aER7xd3A4beFwsicU3ff1DbFuu7IM9+bbGyIRb7rj5e19GSZjgxE2Mrtt7b3iKoiiKopgc+AFLPynONXEXDQAAAABJRU5ErkJggg=="/>
                    </defs>
                </svg>
                <p class="ml-5">Orders</p>
            </a>

            <a href="" class="flex font-inter text-[#382B00] text-lg">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="ml-5">
                    <rect width="36" height="36" fill="url(#pattern0_417_846)"/>
                    <defs>
                    <pattern id="pattern0_417_846" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_417_846" transform="scale(0.015625)"/>
                    </pattern>
                    <image id="image0_417_846" width="64" height="64" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFFUlEQVR4nO1aTWhcVRS+1lrUuhH/f3An1IhtZXjnZEI14F9RigWxoJsuuqjWjQuFYqk2RjetuhBUqNVG3FTGzLkvUbFpawMKXWhpkzn3pV2IrcXfKmr9oRqtI+e9ezOTIT+TzHXyMnkfXJh5775zzzt/95xzn1IZMmTIkCFDhgwZMkwLLsIKJtjNhF8ajaNGYzklY9Ty9GapD5cr3yiX1XlM0M0az6XgZaccwiNrfFZ49iYAJuh2kjaE20u9+WWHd+YuUCmB8MKENxmNO5xlihD8mb2ONT9aKuLdKuVgHayOXULjOS/uwAS7Y+0TblceISZqCAYN4UGv5prw/KLl+Q0PxFCCS1lMTHlEFCI6v5XfXmn3BTcnPMOJhokZ61O+fd76qwteO3zSFl5dzGqYmLFMeuFsHF34fEwAhF/4p++Jb/M/CMDoYKWN1N/KSNYIVi4gAcDziebhVaPhtWQNeG4hCWAkpluEOyId3Gnd4PiCEEDkIrTGHwcHOxcXCuvONxpOx+uE0NbyAjAEz9Tu0ZLD23WenrcCMBoeYYL90w2n7Ujjfe5Z+W3jwOn6aODG1AmACQ/UXbAQfG0KbUvG1ii0LWGN38zg+f2pE4ApBFcbwr1VVRmbEO+Pwva7asdQMX9l7fNybaK5QiOmVckZ9spavvhWPgnF+b3GjYbwD2vSx6Iwf6tqJGASlKzW/zQaN5e3qUWpD4JRwviwS0dZY1e9jFf6D/i4fWkR5MhMBTnnu8CJns4LjYaXmfBfW0wdOPpe+3XTPVfqw6uY4IMqk397aGD50mbx7Z0QU7BmbJ8n+Opwf+7iyebKPZlT2RGCNbNdNzUCELDOd1ht/n6o0H6RmgRyT+YkQTTfoRpAqgRgbO7PBD3TzWWNb/moDVIjgPI2tcgQnhIaJWrvHLdjhPCgjOqOkMyx1nJqJoHTN98eYwDc42p+96LHwo5rmaCvKrkZMP25GypbadIraKQHmRoBGA177C6wNf5P8DATnnEFkQx7/0yJgkftFrjVusGeueLbC6HS+6suZQ1n466y1TATHLE7Qq9seTLkd1UG+ZG4QdLfh7NCY94KgAk3WU3uc9eiXrwxCoPba+dGBOuMhu/dbsEafrOWsanZfHsjZAg/i1+iiA/VbzG4s6b4+XReCqDUm19mtfmzZIUzeTYiWFtdHYrVzKUARmfTFpdgZ339ndmsK9YgjRKpBCeqHpvWFmcNJ2fTrmINW2zy062aDL8HIwS7ZnN44dpcHMJ61WSwhpes9e1qmJgJoc0Q/J2UtcHqupkgjJIACCtUExER3pvwC/8M6/ZbvBA1Gp9wPmUIX4iFUtXSqsXx/tzlUgZLktNIOjsTnxezjzWfKEvyiS6vi7DGxyqdHpe0wMmJavUSwQaX7IynAZ/U2/dr8AOJLt8nzjGGi3C9fHhgNB5yC45QcJmqQXzsnSQxDzRJAKMS8MTnvZn9VIg03OZy+dp7JY252PwJf5jKTeY1WMOTk7WnWcOH1j22qFYFV3p2m8ddD2G99f3vTKHzEtWKGCnmrpFIK2Yu6a67Ll1bJvg1Tl0J1qpWhSF4yub4B2s+pIrP+VnjK6pVcaSw6gpD8FPyoklSlDQ4Es2zxlBOe1UrYnCwc/FYgCPok3aVPah053U9afp20CuGBpYvZcJ3q5KNvyovLq0s2KBaGUz48QTJxy/yPZ64hWp1GA37JA1mwqOs4XWJ8lOd8GTIkCFDhgwZMqh5gP8AyQyxYNzEeTkAAAAASUVORK5CYII="/>
                    </defs>
                </svg>
                <p class="ml-5">Reviews</p>
            </a>

            <a href="" class="flex flex font-inter text-[#382B00] text-lg">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="ml-5">
                    <rect width="36" height="36" fill="url(#pattern0_417_847)"/>
                    <defs>
                    <pattern id="pattern0_417_847" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_417_847" transform="scale(0.015625)"/>
                    </pattern>
                    <image id="image0_417_847" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                    </defs>
                </svg>
                <p class="ml-5">Saved Products</p>
            </a>

            <a href="" class="bg-[#F5F5F5] flex font-inter text-[#382B00] text-lg">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="ml-5">
                    <rect width="36" height="36" fill="url(#pattern0_417_848)"/>
                    <defs>
                    <pattern id="pattern0_417_848" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_417_848" transform="scale(0.015625)"/>
                    </pattern>
                    <image id="image0_417_848" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                    </defs>
                </svg>
                <p class="ml-5">Account Settings</p>
            </a>
        </div>

        <div class="lg:w-[80%] bg-white shadow-lg flex-col lg:mx-20 lg:px-16 lg:mt-0 mt-10 mb-20 mx-5 px-8 py-5 lg:pb-8 pb-5">
            <p class="font-inter text-[#382B00] text-lg font-bold">Account Details</p>

            <svg class="w-full mt-4" height="2" viewBox="0 0 100 2" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <line x1="0" y1="0" x2="100" y2="0" stroke="#333333"/>
            </svg>

            <p class="font-inter text-[#382B00] text-lg flex justify-between mt-5">Client@gmail.com
                <span>
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="30" height="30" fill="url(#pattern0_418_1761)"/>
                        <defs>
                        <pattern id="pattern0_418_1761" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_418_1761" transform="scale(0.015625)"/>
                        </pattern>
                        <image id="image0_418_1761" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>
                </span>
            </p>

            <svg class="w-full mt-4" height="2" viewBox="0 0 100 2" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <line x1="0" y1="0" x2="100" y2="0" stroke="#333333"/>
            </svg>

            <p class="font-inter text-[#382B00] text-lg flex justify-between mt-5">0904 888 9999
                <span>
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="30" height="30" fill="url(#pattern0_418_1761)"/>
                        <defs>
                        <pattern id="pattern0_418_1761" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_418_1761" transform="scale(0.015625)"/>
                        </pattern>
                        <image id="image0_418_1761" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>
                </span>
            </p>

            <svg class="w-full mt-4" height="2" viewBox="0 0 100 2" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <line x1="0" y1="0" x2="100" y2="0" stroke="#333333"/>
            </svg>

            <p class="font-inter text-[#382B00] text-lg flex justify-between mt-5">House Number, & Block, Maybe Number <br>Street Name, Location And All <br>City, State
                <span>
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="30" height="30" fill="url(#pattern0_418_1761)"/>
                        <defs>
                        <pattern id="pattern0_418_1761" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_418_1761" transform="scale(0.015625)"/>
                        </pattern>
                        <image id="image0_418_1761" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>
                </span>
            </p>

            <svg class="w-full mt-4" height="2" viewBox="0 0 100 2" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <line x1="0" y1="0" x2="100" y2="0" stroke="#333333"/>
            </svg>

            <p class="font-inter text-[#382B00] text-lg flex justify-between mt-5">Password: XXXXXXXXXXXXXX
                <span>
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="30" height="30" fill="url(#pattern0_418_1761)"/>
                        <defs>
                        <pattern id="pattern0_418_1761" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_418_1761" transform="scale(0.015625)"/>
                        </pattern>
                        <image id="image0_418_1761" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>
                </span>
            </p>

            <svg class="w-full mt-4" height="2" viewBox="0 0 100 2" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <line x1="0" y1="0" x2="100" y2="0" stroke="#333333"/>
            </svg>

            <p class="text-[#D80000] font-inter text-lg mt-5">Delete Account</p>
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
                    <li><a href="#">Whats New</a></li>
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
            let hamburger = document.getElementById('hamburger');
            let menu = document.getElementById('menu');

            hamburger.addEventListener('click', function() {
                menu.classList.toggle('hidden');
            });
        </script>
    </body>
</html>