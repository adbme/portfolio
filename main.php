<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&display=swap" rel="stylesheet">


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
                    <div id="iconsDiv"
                        class="z-50 fixed mt-0 flex flex-row xl:flex-col space-x-10 xl:space-x-0 xl:space-y-10">
                        <a data-tooltip-target="tooltip-projects" data-tooltip-placement="right" href="#projects"
                            id="projects-link" class="text-white text-2xl hover:text-[#e75d4e]">
                            <svg class="w-6" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" style="stop-color:#FF3F47;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#FF875E;stop-opacity:1" />
                                    </linearGradient>
                                </defs>
                                <path fill="currentColor"
                                    d="M64 96c0-35.3 28.7-64 64-64H512c35.3 0 64 28.7 64 64V352H512V96H128V352H64V96zM0 403.2C0 392.6 8.6 384 19.2 384H620.8c10.6 0 19.2 8.6 19.2 19.2c0 42.4-34.4 76.8-76.8 76.8H76.8C34.4 480 0 445.6 0 403.2zM281 209l-31 31 31 31c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-48-48c-9.4-9.4-9.4-24.6 0-33.9l48-48c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM393 175l48 48c9.4 9.4 9.4 24.6 0 33.9l-48 48c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l31-31-31-31c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z">
                                </path>
                            </svg>
                        </a>



                        <div id="tooltip-projects" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">

                            Projects
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>


                        <a data-tooltip-target="tooltip-me" data-tooltip-placement="right" href="#me"
                            class="text-white text-2xl hover:text-[#e75d4e]">
                            <svg class="w-6 fill-[currentColor]" viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg">

                                <path
                                    d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z">
                                </path>


                            </svg>
                        </a>

                        <div id="tooltip-me" role="tooltip"
                            class="absolute w-[90px] z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">

                            About me
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <a data-tooltip-target="tooltip-hobbies" data-tooltip-placement="right" href="#hobbies"
                            class="text-white text-2xl hover:text-[#e75d4e]">
                            <svg class="w-6 fill-[currentColor]" viewBox="0 0 448 512"
                                xmlns="http://www.w3.org/2000/svg">

                                <path
                                    d="M159.3 5.4c7.8-7.3 19.9-7.2 27.7 .1c27.6 25.9 53.5 53.8 77.7 84c11-14.4 23.5-30.1 37-42.9c7.9-7.4 20.1-7.4 28 .1c34.6 33 63.9 76.6 84.5 118c20.3 40.8 33.8 82.5 33.8 111.9C448 404.2 348.2 512 224 512C98.4 512 0 404.1 0 276.5c0-38.4 17.8-85.3 45.4-131.7C73.3 97.7 112.7 48.6 159.3 5.4zM225.7 416c25.3 0 47.7-7 68.8-21c42.1-29.4 53.4-88.2 28.1-134.4c-4.5-9-16-9.6-22.5-2l-25.2 29.3c-6.6 7.6-18.5 7.4-24.7-.5c-16.5-21-46-58.5-62.8-79.8c-6.3-8-18.3-8.1-24.7-.1c-33.8 42.5-50.8 69.3-50.8 99.4C112 375.4 162.6 416 225.7 416z">
                                </path>

                            </svg>
                        </a>

                        <div id="tooltip-hobbies" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">

                            hobbies
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
                                <svg class="w-4" width="47" height="67" viewBox="0 0 47 67" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2" y="2" width="43" height="63" rx="21.5" stroke="white"
                                        stroke-width="4" />
                                    <path
                                        d="M21 17C21 15.3431 22.3431 14 24 14V14C25.6569 14 27 15.3431 27 17V24C27 25.6569 25.6569 27 24 27V27C22.3431 27 21 25.6569 21 24V17Z"
                                        fill="url(#paint0_linear_38_15)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_38_15" x1="24" y1="14" x2="24" y2="27"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FF3F47" />
                                            <stop offset="1" stop-color="#FF875E" />
                                        </linearGradient>
                                    </defs>
                                </svg>

                                <svg class="w-4 fill-[white]" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z">
                                    </path>

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
    <div id="me" class=" h-screen flex items-center justify-center">

        <?php require "me.php" ?>
    </div>

    <div id="hobbies" class="h-screen flex items-center justify-center">
        <?php require "hobbies.php" ?>
    </div>

</body>




<script>
    document.addEventListener('DOMContentLoaded', () => {
        const editorDiv = document.querySelector('.editor');
        let isInEditor = false;

        // Vérifie si l'utilisateur est dans la div .editor
        const checkIfInEditor = () => {
            isInEditor = editorDiv.contains(document.activeElement);
        };

        // Attacher un événement de focus pour détecter l'entrée dans la div
        document.addEventListener('focusin', checkIfInEditor);

        // Attacher un événement de blur pour détecter la sortie de la div
        document.addEventListener('focusout', checkIfInEditor);

        // Les événements de scroll et de changement de section ne s'exécutent que si l'utilisateur est en dehors de la div .editor
        const sections = document.querySelectorAll('div[id]');
        const links = document.querySelectorAll('a[href^="#"]');

        const applyGradient = (id) => {
            if (isInEditor) return;  // Si l'utilisateur est dans la div, ne pas appliquer le gradient
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
            if (isInEditor) return;  // Si l'utilisateur est dans la div, ne pas exécuter le scroll

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

        // Le code du second script (scrollToSection et gestion des événements de scroll et de clic) reste similaire

        let isScrolling = false;
        let currentSectionIndex = 0;

        const scrollToSection = (index) => {
            if (index < 0 || index >= sections.length || isInEditor) return; // Ne pas exécuter si on est dans .editor

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

        document.addEventListener('wheel', (e) => {
            if (isScrolling || isInEditor) return; // Ne pas gérer le scroll si dans .editor

            if (e.deltaY > 0 && currentSectionIndex < sections.length - 1) {
                currentSectionIndex++;
            } else if (e.deltaY < 0 && currentSectionIndex > 0) {
                currentSectionIndex--;
            } else {
                return;
            }

            scrollToSection(currentSectionIndex);
        });

        links.forEach((link) => {
            link.addEventListener('click', (e) => {
                e.preventDefault(); // Empêche le comportement par défaut du lien

                const targetId = link.getAttribute('href').substring(1);
                const targetIndex = Array.from(sections).findIndex(
                    (section) => section.id === targetId
                );

                if (targetIndex !== -1 && !isInEditor) {
                    currentSectionIndex = targetIndex;
                    scrollToSection(currentSectionIndex);
                }
            });
        });

        window.addEventListener('scroll', () => {
            if (isScrolling || isInEditor) return; // Ne pas gérer le scroll si dans .editor

            const newIndex = Array.from(sections).findIndex((section) => {
                const rect = section.getBoundingClientRect();
                return rect.top >= 0 && rect.top < window.innerHeight / 2;
            });

            if (newIndex !== -1 && newIndex !== currentSectionIndex) {
                currentSectionIndex = newIndex;

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
        const editorDiv = document.querySelector('.editor'); // Cibler la div de l'éditeur

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
            // Vérifier si l'utilisateur est dans l'éditeur
            if (editorDiv && editorDiv.contains(document.activeElement)) {
                return; // Si l'utilisateur est dans l'éditeur, on ne fait rien
            }

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