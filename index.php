<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logo.svg" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Londrina+Solid:wght@100;300;400;900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

</head>

<body class="bg-gradient-to-br from-[#1e1b2e] to-[#3a1b47] text-white min-h-screen flex flex-col">

    <!-- logo   -->
    <div class="h-screen flex items-center justify-center">

        <div class="z-50">
            <div
                class="transition-all absolute m-4 left-0 top-0 bg-gradient w-12 h-12 max-sm:w-8 max-sm:h-8 flex items-center justify-center rounded-lg">
                <span class="text-white font-extrabold text-[20px] max-sm:text-[10px]">
                    AB
                </span>
            </div>

            <div
                class="absolute m-4 left-0 top-0 transition-all duration-300 hover:opacity-0 bg-white w-12 h-12 max-sm:w-8 max-sm:h-8 flex items-center justify-center rounded-lg">
                <span class="gradient-text font-extrabold text-[20px] max-sm:text-[10px]">
                    AB
                </span>
            </div>
        </div>







        <div class="container mx-auto px-4 md:px-8 lg:px-16">
            <div class="flex flex-col xl:flex-row items-center justify-between space-y-8 xl:space-y-0">
                <!-- Sidebar -->
                <div
                    class="flex flex-col items-center space-y-6 xl:space-y-8 max-xl:w-full max-xl:absolute max-xl:top-0 max-xl:p-2 m-4">

                    <!-- Icons -->
                    <div class="flex flex-row xl:flex-col space-x-10 xl:space-x-0  xl:space-y-10">
                        <a href="#" class="text-white text-2xl hover:text-[#e75d4e]"><svg
                                class="w-6 fill-[currentColor]" viewBox="0 0 640 512"
                                xmlns="http://www.w3.org/2000/svg">

                                <path
                                    d="M64 96c0-35.3 28.7-64 64-64H512c35.3 0 64 28.7 64 64V352H512V96H128V352H64V96zM0 403.2C0 392.6 8.6 384 19.2 384H620.8c10.6 0 19.2 8.6 19.2 19.2c0 42.4-34.4 76.8-76.8 76.8H76.8C34.4 480 0 445.6 0 403.2zM281 209l-31 31 31 31c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-48-48c-9.4-9.4-9.4-24.6 0-33.9l48-48c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM393 175l48 48c9.4 9.4 9.4 24.6 0 33.9l-48 48c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l31-31-31-31c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z">
                                </path>

                            </svg></a>
                        <a href="#" class="text-white text-2xl hover:text-[#e75d4e]">
                            <svg class="w-6 fill-[currentColor]" viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg">

                                <path
                                    d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z">
                                </path>


                            </svg>
                        </a>
                        <a href="#" class="text-white text-2xl hover:text-[#e75d4e]">
                            <svg class="w-6 fill-[currentColor]" viewBox="0 0 496 512"
                                xmlns="http://www.w3.org/2000/svg">

                                <path
                                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                                </path>

                            </svg>
                            </i></a>


                        <a href="#" class="text-white text-2xl hover:text-[#e75d4e]">
                            <svg class="w-6 fill-[currentColor]" viewBox="0 0 448 512"
                                xmlns="http://www.w3.org/2000/svg">

                                <path
                                    d="M159.3 5.4c7.8-7.3 19.9-7.2 27.7 .1c27.6 25.9 53.5 53.8 77.7 84c11-14.4 23.5-30.1 37-42.9c7.9-7.4 20.1-7.4 28 .1c34.6 33 63.9 76.6 84.5 118c20.3 40.8 33.8 82.5 33.8 111.9C448 404.2 348.2 512 224 512C98.4 512 0 404.1 0 276.5c0-38.4 17.8-85.3 45.4-131.7C73.3 97.7 112.7 48.6 159.3 5.4zM225.7 416c25.3 0 47.7-7 68.8-21c42.1-29.4 53.4-88.2 28.1-134.4c-4.5-9-16-9.6-22.5-2l-25.2 29.3c-6.6 7.6-18.5 7.4-24.7-.5c-16.5-21-46-58.5-62.8-79.8c-6.3-8-18.3-8.1-24.7-.1c-33.8 42.5-50.8 69.3-50.8 99.4C112 375.4 162.6 416 225.7 416z">
                                </path>

                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col-reverse items-center md:flex-row justify-between space-y-8 md:space-y-0">
                    <!-- Main Content -->
                    <div class="flex-1 text-center md:text-left">
                        <h1 class="text-3xl max-md:mt-4 md:text-5xl font-extrabold leading-tight">
                            Hi, I'm <span class="gradient-text">Adil Bouamrioune</span>
                        </h1>
                        <p class="mt-4 text-lg md:text-xl font-bold text-gray-300">Application developer</p>
                        <p class="mt-4 text-sm text-gray-400 max-w-md mx-auto md:mx-0">
                            Passionate about software development 🖥️ , mma/muay thai 🥊, 3D modeling 🎥
                        </p>

                        <!-- Buttons -->
                        <div class="mt-8 flex flex-wrap justify-center md:justify-start gap-4">
                            <a href="#projects"
                                class="box-shadow-custom w-auto flex items-center gap-2 text-white px-4 py-2 rounded-full font-semibold bg-gradient transition-all sm:text-sm md:text-base">
                                Take a look

                                <svg class="w-5 h-8" viewBox="0 0 51 155" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M49.9277 80.5832C49.4155 77.512 45.3106 75.4645 42.2325 76.4883C39.787 77.4648 36.8771 78.4397 33.9447 79.4154C32.1624 80.6358 30.4565 81.5342 29.2545 82.1673L29.2523 82.1685C29.0342 82.2833 28.8328 82.3894 28.6505 82.4871C26.7034 83.5307 25.1696 83.6451 24.079 82.8809C23.6629 82.5893 23.345 82.1912 23.1063 81.7249C18.8039 82.1153 14.1426 82.0759 9.91251 81.607C3.75632 80.5832 0.67824 88.2613 4.7832 91.3325C-10.0942 97.9868 14.0175 142.52 19.1468 151.734C21.1997 155.829 28.3828 156.341 30.434 151.734C39.6683 130.747 47.3626 109.248 50.4407 86.2138C51.4668 83.6545 50.9537 81.6061 49.9277 80.5832ZM35.3867 77.0428C45.5374 61.385 42.7677 50.3645 40.5 28.5001C39.925 22.9562 40.6983 28.7628 40.5 25C40.5 -8.5574 31.4592 0.318988 26.5 8.50005C26.9069 14.7959 27.4182 20.7884 28 27.5001C30.2799 53.8004 30.0868 50.1801 23.8593 74.7166C23.6651 75.4819 23.4624 76.2431 23.2509 77.0002C22.8224 78.2848 23.1109 79.5695 23.8178 80.8541C23.9559 81.1051 24.11 81.356 24.2778 81.607L24.2074 81.6147C24.3389 81.7962 24.4875 81.9461 24.6528 82.062C25.2747 82.4977 26.3471 82.5871 28.1781 81.6057C28.3945 81.4897 28.6393 81.3628 28.908 81.2235C30.5247 80.3851 33.0064 79.0981 35.3867 77.0428ZM8.88732 92.3563C11.3503 95.6338 13.1566 102.846 14.0421 106.383C14.2629 107.264 14.4266 107.918 14.5288 108.224C17.6069 116.414 20.685 124.091 24.79 132.281C25.1067 131.368 25.4234 130.458 25.7394 129.549C30.0308 117.212 34.1994 105.228 36.5893 92.3563C27.8681 94.9156 16.5826 93.8919 8.88732 92.3563Z"
                                        fill="currentColor" />
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
                        class="hover-trigger w-64 h-64 md:w-80 md:h-96 md:ml-20 max-md:mb-22 flex flex-col items-end group">
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

        <img src="img/backgroundLed.png" class="object-contain h-screen w-screen absolute z-[-10] animate-pulse" alt="">
    </div>

    <div id="projects" class="bg-red-200 h-screen flex items-center justify-center">
        test
        </div>

</body>

</html>

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

html {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
</style>