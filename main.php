<body id="body" class="bg-gradient-to-br from-[#1e1b2e] to-[#3a1b47] text-white min-h-screen flex flex-col">
    <span id="loader" class="loader"></span>


    <!-- logo   -->
    <div id="home" class="min-h-screen flex items-center justify-center">

        <div class="z-50">
            <div
                class="transition-all fixed m-4 left-0 top-0 bg-gradient w-12 h-12 max-sm:w-8 max-sm:h-8 flex items-center justify-center rounded-lg">
                <span class="text-white font-extrabold text-[20px] max-sm:text-[10px]">
                    AB
                </span>
            </div>

            <a href="#home"
                class="fixed m-4 left-0 top-0 transition-all duration-300 hover:opacity-0 bg-white w-12 h-12 max-sm:w-8 max-sm:h-8 flex items-center justify-center rounded-lg">
                <span class="gradient-text font-extrabold text-[20px] max-sm:text-[10px]">
                    AB
                </span>
            </a>
        </div>







        <div class="container mx-auto px-4 md:px-8 lg:px-16">
            <div class="flex flex-col xl:flex-row items-center justify-between space-y-8 xl:space-y-0">
                <!-- Sidebar -->
                <div
                    class="flex md:h-[300px] flex-col items-center justify-center space-y-6 xl:space-y-8 max-xl:w-full max-xl:absolute max-xl:top-0 max-xl:p-2 m-4">

                    <!-- Icons -->
                    <div id="iconsDiv" class="z-50 fixed mt-0 flex flex-row xl:flex-col space-x-10 xl:space-x-0 xl:space-y-10">
                        <a data-tooltip-target="tooltip-projects" data-tooltip-placement="right" href="#projects" id="projects-link" class="text-white text-2xl hover:text-[#e75d4e]">
                            <svg class="w-6" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" style="stop-color:#FF3F47;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#FF875E;stop-opacity:1" />
                                    </linearGradient>
                                </defs>
                                <path fill="currentColor" d="M64 96c0-35.3 28.7-64 64-64H512c35.3 0 64 28.7 64 64V352H512V96H128V352H64V96zM0 403.2C0 392.6 8.6 384 19.2 384H620.8c10.6 0 19.2 8.6 19.2 19.2c0 42.4-34.4 76.8-76.8 76.8H76.8C34.4 480 0 445.6 0 403.2zM281 209l-31 31 31 31c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-48-48c-9.4-9.4-9.4-24.6 0-33.9l48-48c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM393 175l48 48c9.4 9.4 9.4 24.6 0 33.9l-48 48c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l31-31-31-31c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z"></path>
                            </svg>
                        </a>
                        
                       
                        
                        <div id="tooltip-projects" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            
                            Projects
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>


                        <a data-tooltip-target="tooltip-me" data-tooltip-placement="right" href="#me" class="text-white text-2xl hover:text-[#e75d4e]">
                            <svg class="w-6 fill-[currentColor]" viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg">

                                <path
                                    d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z">
                                </path>


                            </svg>
                        </a>

                        <div id="tooltip-me" role="tooltip" class="absolute w-[90px] z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            
                            About me
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <a data-tooltip-target="tooltip-github" data-tooltip-placement="right" href="#github" class="text-white text-2xl hover:text-[#e75d4e]">
                            <svg class="w-6 fill-[currentColor]" viewBox="0 0 496 512"
                                xmlns="http://www.w3.org/2000/svg">

                                <path
                                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                                </path>

                            </svg>
                            </i></a>

                            <div id="tooltip-github" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            
                                Github
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>


                        <a data-tooltip-target="tooltip-hobby" data-tooltip-placement="right" href="#hobby" class="text-white text-2xl hover:text-[#e75d4e]">
                            <svg class="w-6 fill-[currentColor]" viewBox="0 0 448 512"
                                xmlns="http://www.w3.org/2000/svg">

                                <path
                                    d="M159.3 5.4c7.8-7.3 19.9-7.2 27.7 .1c27.6 25.9 53.5 53.8 77.7 84c11-14.4 23.5-30.1 37-42.9c7.9-7.4 20.1-7.4 28 .1c34.6 33 63.9 76.6 84.5 118c20.3 40.8 33.8 82.5 33.8 111.9C448 404.2 348.2 512 224 512C98.4 512 0 404.1 0 276.5c0-38.4 17.8-85.3 45.4-131.7C73.3 97.7 112.7 48.6 159.3 5.4zM225.7 416c25.3 0 47.7-7 68.8-21c42.1-29.4 53.4-88.2 28.1-134.4c-4.5-9-16-9.6-22.5-2l-25.2 29.3c-6.6 7.6-18.5 7.4-24.7-.5c-16.5-21-46-58.5-62.8-79.8c-6.3-8-18.3-8.1-24.7-.1c-33.8 42.5-50.8 69.3-50.8 99.4C112 375.4 162.6 416 225.7 416z">
                                </path>

                            </svg>
                        </a>

                        <div id="tooltip-hobby" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            
                            hobby
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col-reverse items-center md:flex-row justify-between space-y-8 md:space-y-0">
                    <!-- Main Content -->
                    <div class="animate__animated animate__fadeInUp flex-1 text-center md:text-left">
                        <h1 class="text-3xl max-md:mt-4 md:text-5xl font-extrabold leading-tight">
                            Hi, I'm <span class="gradient-text">Adil Bouamrioune</span>
                        </h1>
                        <p class="mt-4 text-lg md:text-xl font-bold text-gray-100">Application developer &lt;/&gt; </p>
                        <p class="mt-4 text-sm text-gray-400 max-w-md mx-auto md:mx-0">
                            Passionate about software development 🖥️ , mma/muay thai 🥊, 3D modeling 🎥
                        </p>

                        <!-- Buttons -->
                        <div class="mt-8 flex flex-wrap justify-center md:justify-start gap-4">
                            <a href="#projects"
                                class="box-shadow-custom h-16 w-auto flex items-center gap-2 text-white px-4 py-2 rounded-full font-semibold bg-gradient transition-all sm:text-sm md:text-base">
                              

                               Scroll down
  <svg class="w-4" width="47" height="67" viewBox="0 0 47 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2" y="2" width="43" height="63" rx="21.5" stroke="white" stroke-width="4"/>
                                    <path d="M21 17C21 15.3431 22.3431 14 24 14V14C25.6569 14 27 15.3431 27 17V24C27 25.6569 25.6569 27 24 27V27C22.3431 27 21 25.6569 21 24V17Z" fill="url(#paint0_linear_38_15)"/>
                                    <defs>
                                    <linearGradient id="paint0_linear_38_15" x1="24" y1="14" x2="24" y2="27" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF3F47"/>
                                    <stop offset="1" stop-color="#FF875E"/>
                                    </linearGradient>
                                    </defs>
                                    </svg>
                               
                                    <svg class="w-4 fill-[white]" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                               
                                        </svg>

                            </a>
                            <a href="#"
                                class="box-shadow-custom w-auto flex items-center gap-2 text-[#191627] px-4 py-2 rounded-full font-semibold bg-white hover:bg-gray-200 transition-all sm:text-sm md:text-base">
                                Conctact me

                                <svg class="w-5 h-8" fill="currentColor" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 187.383 187.383" xml:space="preserve">
                                    <g>
                                        <path d="M185.439,57.992c-0.774-8.584,1.847-21.749-0.915-29.566c-0.238-0.673-0.819-1.223-1.514-1.316
        c-0.004-0.006-0.005-0.013-0.009-0.019c-4.027-5.607-15.182-3.842-20.966-3.96c-18.658-0.381-37.328-0.28-55.989-0.28
        c-33.891,0.002-68.694-1.656-102.487,1.42c-1.313,0.12-1.902,1.296-1.6,2.271c-0.946,0.565-1.572,1.644-1.233,3.143
        c4.997,22.128,5.212,45.077,4.736,67.658c-0.23,10.868-1.057,21.718-2.172,32.528c-0.885,8.579-4.695,18.537-2.739,27.061
        c0.464,2.023,3.465,3.104,4.998,1.57c12.18,8.393,38.403,5.012,51.832,5.479c16.529,0.575,32.902,1.101,49.439,0.979
        c17.874-0.133,35.762-0.398,53.613-1.353c5.741-0.307,19.281,0.98,22.239-5.886c0.514-1.189,0.283-2.519-0.359-3.503
        c1.52-4.409,0.918-9.561,0.849-14.196c-0.238-15.952,3.609-31.554,4.147-47.52C187.698,80.964,186.476,69.478,185.439,57.992z
         M36.423,31.137c19.548,0.955,39.132,0.828,58.698,0.896c18.92,0.066,37.842,0.01,56.761,0.193
        c3.59,0.035,9.599-0.424,15.188-0.602c-7.161,6.984-13.86,17.846-17.642,22.165c-12.88,14.713-40.091,50.246-61.972,39.522
        C69.563,84.544,56.149,63.06,42.737,48.919c-5.342-5.632-13.147-14.26-21.671-18.277C26.326,30.906,31.589,30.9,36.423,31.137z
         M22.178,40.666c8.307,6.547,15.188,15.044,22.118,22.965c7.578,8.664,15.782,19.925,25.355,28.519
        c-2.619,1.894-4.99,4.302-7.275,6.334c-8.156,7.258-15.834,15.076-23.644,22.699c-8.243,8.044-17.722,14.282-26.599,21.367
        c3.061-14.862,1.958-33.655,2.33-45.208C15.131,76.61,14.75,53.88,8.277,33.763C11.657,36.66,18.782,37.99,22.178,40.666z
         M147.146,154.956c-15.618,0.577-31.256,0.72-46.884,0.818c-14.334,0.093-28.553-0.502-42.881-1.01
        c-10.314-0.365-20.628-0.685-30.94-1.108c-4.425-0.183-9.124-0.924-13.641-0.784c7.848-3.747,18.076-13.317,22.007-16.369
        c8.408-6.527,15.79-14.716,23.454-22.077c5.636-5.412,13.359-10.435,18.894-16.366c2.88,1.928,5.88,3.55,9.022,4.735
        c10.816,4.079,21.13,0.715,30.408-5.274c10.231,9.97,19.917,20.312,29.112,31.295c6.329,7.562,13.283,19.632,21.663,26.437
        C159.979,155.471,151.277,154.803,147.146,154.956z M174.915,123.819c-0.814,5.608-0.941,10.605-0.812,16.201
        c0.052,2.246,0.064,4.492,0.04,6.737c-0.002,0.803,0.002,1.43,0.011,1.982c-5.448-9.511-15.941-18.476-22.626-25.755
        c-9.396-10.232-19.456-20.033-30.425-28.611c6.467-4.884,12.34-10.739,17.396-15.77c7.745-7.705,15.206-15.668,22.341-23.938
        c3.392-3.931,10.645-15.718,15.921-20.449c-3.476,11.759,0.822,34.112,1.267,40.825C179.118,91.52,177.289,107.492,174.915,123.819
        z" />
                                    </g>
                                </svg>



                            </a>

                            
                        </div>

                        

                        
                    </div>

                    <!-- Placeholder Image -->
                    <div
                        class="animate__animated animate__fadeInRight hover-trigger w-64 h-64 md:w-80 md:h-96 md:ml-20 max-md:mb-22 flex flex-col items-end group">
                        <div class="flags-container flex">
                            <img src="img/swissFlag.png"
                                class="flag-swiss w-10 object-contain z-20 transition-transform duration-500" alt="">
                            <img src="img/dzFlag.png"
                                class="flag-dz w-8 mb-10 ml-[-15px] object-contain transition-transform duration-500"
                                alt="">
                        </div>

                        <img src="img/homePhoto.png" class="h-full mt-[-70px] w-full object-contain homePhoto" alt="">

                     
                    </div>
                    
                </div> 
            </div>
           
        </div>

       
        

        <img src="img/backgroundLed.png" class="object-contain h-screen w-screen fixed z-[-10] animate-pulse" alt="">
    </div>

    <div id="projects" class="h-screen flex items-center justify-center">
        <?php

        require "projects.php"
        
        ?>
    </div>
    <div id="me" class="bg-blue-200 h-screen flex items-center justify-center">
        me
    </div>

    <div id="github" class="bg-green-200 h-screen flex items-center justify-center">
        github
    </div>
    <div id="hobby" class="bg-purple-200 h-screen flex items-center justify-center">
        hobby
    </div>

</body>



<style>
    * {
        font-family: "Rubik", sans-serif;
    }

    .gradient-text {
        background: linear-gradient(94.92deg, #FF3E47 -4.46%, #FF875E 66.23%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
    }

    .bg-gradient {
        transition: background 0.3s ease-in-out, transform 0.3s ease;
        background: linear-gradient(94.35deg, #FF3F47 0.74%, #FF875E 100%);
    }

    a:hover {
        transform: scale(1.05);
    }

    a:focus {
        transform: scale(0.95);
    }

    .custom-bg {
        background-image: url("img/backgroundLed.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

    }

    .hover-trigger .flag-swiss {
        transition: 0.3s;
    }

    .homePhoto {
        transition: 0.1s;
    }

    .homePhoto:hover {
        margin-bottom: 10px;
        transform: rotate(-4deg) scale(0.9);
    }

    @layer utilities {
        .hover-trigger:hover .flag-swiss {
            transform: rotate(-15deg);
            margin-right: 10px;
            margin-top: 10px;
        }

        .hover-trigger:hover .flag-dz {
            transform: rotate(10deg);
        }
    }

    .box-shadow-custom {
        box-shadow: inset 4px -5px 4px rgba(0, 0, 0, 0.25);
    }

    html {
        scroll-behavior: smooth;

    }

    html::-webkit-scrollbar {
        display: none;
    }

    body {
        /* overflow: hidden;*/
    }

    html {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    .no-scroll {
        overflow: hidden !important;
    }

    .loader {
        opacity: 0.8;
        display: none;
  width: 0;
  height: 4.8px;
  position: relative;
  background: linear-gradient(to right, #FF3F47, #FF875E);
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
  box-sizing: border-box;
  animation: animFw 1s linear infinite;
  position: fixed;
  top: 0;
}
  .loader::after,
  .loader::before {
    content: '';
    width: 10px;
    height: 1px;
    background: #FF875E;
    position: absolute;
    top: 9px;
    right: -2px;
    opacity: 0;
    transform: rotate(-45deg) translateX(0px);
    box-sizing: border-box;
    animation: coli1 0.3s linear infinite;
  }
  .loader::before {
    top: -4px;
    transform: rotate(45deg);
    animation: coli2 0.3s linear infinite;
  }

@keyframes animFw {
    0% {
  width: 0;
}
    100% {
  width: 100%;
}
  }

  

@keyframes coli1 {
    0% {
  transform: rotate(-45deg) translateX(0px);
  opacity: 0.7;
}
    100% {
  transform: rotate(-45deg) translateX(-45px);
  opacity: 0;
}
  }

@keyframes coli2 {
    0% {
  transform: rotate(45deg) translateX(0px);
  opacity: 1;
}
    100% {
  transform: rotate(45deg) translateX(-45px);
  opacity: 0.7;
}
  }
</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sections = document.querySelectorAll('div[id]');
        const links = document.querySelectorAll('a[href^="#"]');
        let isScrolling = false;
        let currentSectionIndex = 0;

        // Fonction pour faire défiler vers une section
        const scrollToSection = (index) => {
            if (index < 0 || index >= sections.length) return;

        isScrolling = true;
        sections[index].scrollIntoView({ behavior: 'smooth' });

        const hash = `#${sections[index].id}`;
            if (window.location.hash !== hash) {
                history.replaceState(null, '', hash);
            }
        document.getElementById("body").classList.add("no-scroll");
        document.getElementById("loader").style.display = "inline-block";
        document.getElementById("iconsDiv").style.pointerEvents = "none";
        document.getElementById("iconsDiv").style.opacity = "0.5";

        
        setTimeout(() => {
            isScrolling = false;
            document.getElementById("body").classList.remove("no-scroll");
            document.getElementById("loader").style.display = "none";
            document.getElementById("iconsDiv").style.pointerEvents = "auto";
            document.getElementById("iconsDiv").style.opacity = "1";
        }, 1000);
    };

        // Gestion du scroll avec la molette
        document.addEventListener('wheel', (e) => {
            if (isScrolling) return;

            if (e.deltaY > 0 && currentSectionIndex < sections.length - 1) {
                currentSectionIndex++;
            } else if (e.deltaY < 0 && currentSectionIndex > 0) {
                currentSectionIndex--;
            } else {
                return;
            }

            scrollToSection(currentSectionIndex);
        });

        // Gestion des clics sur les liens d'ancrage
        links.forEach((link) => {
            link.addEventListener('click', (e) => {
                e.preventDefault(); // Empêche le comportement par défaut du lien

                const targetId = link.getAttribute('href').substring(1);
                const targetIndex = Array.from(sections).findIndex(
                    (section) => section.id === targetId
                );

                if (targetIndex !== -1) {
                    currentSectionIndex = targetIndex;
                    scrollToSection(currentSectionIndex);
                }
            });
        });

        // Mise à jour de l'index de section au scroll
        window.addEventListener('scroll', () => {
            if (isScrolling) return;

            const newIndex = Array.from(sections).findIndex((section) => {
                const rect = section.getBoundingClientRect();
                return rect.top >= 0 && rect.top < window.innerHeight / 2;
            });

            if (newIndex !== -1 && newIndex !== currentSectionIndex) {
                currentSectionIndex = newIndex;

                // Mise à jour de l'URL
                const hash = `#${sections[newIndex].id}`;
                if (window.location.hash !== hash) {
                    history.replaceState(null, '', hash);
                }
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sections = document.querySelectorAll('div[id]');
        const links = document.querySelectorAll('a[href^="#"]');

        const applyGradient = (id) => {
            links.forEach((link) => {
                const path = link.querySelector('path');
                if (path) {
                    if (link.getAttribute('href') === `#${id}`) {
                        path.setAttribute('fill', 'url(#gradient)');
                    } else {
                        path.setAttribute('fill', 'currentColor');
                    }
                }
            });
        };

        const onScroll = () => {
            let currentSectionId = null;

            sections.forEach((section) => {
                const rect = section.getBoundingClientRect();
                if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            if (currentSectionId) {
                applyGradient(currentSectionId);
            }
        };

        window.addEventListener('scroll', onScroll);
        onScroll(); // Call onScroll initially to set the active state
    });
</script>
