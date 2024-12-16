<?php
// Tableau de données pour chaque hobby
$slides = [
    [
        "id" => "1",
        "title" => "Combat sports",
        "description" => "
        Passionate about combat sports since I was 16:

<br>
<br>

Kickboxing, Muay Thai, MMA, grappling… These disciplines are not merely about strength or violence; they are, above all, a pursuit of balance, respect, and self-mastery.

<br>
<br>

Contrary to common misconceptions, practicing a combat sport instills deep values. You learn to channel your strength, respect both your partners and opponents, develop resilience and calmness, master the strategy of combat, and above all, embrace humility.

<br>
<br>

These values form a code of honor, and anyone who fails to uphold them does not deserve a place in this world where everyone is equal.

                        ",
        "image" => "img/wt.png"
    ],
    [
        "id" => "2",
        "title" => "Modélisation 3d",
        "description" => "
    <ul class='list-disc list-inside text-white space-y-2'>
        <li>Blender</li>
        <li>Godot engine</li>
        <li>Three.js - Babylon.js</li>
        <li>Animation mouvements corps, expressions faciales</li>
        <li>Vidéo 3D cinématique</li>
        <li>Textures réalistes</li>
    </ul>
        ",
        "image" => "img/vector3d.png"
    ],
    [
        "id" => "3",
        "title" => "Hobby 3",
        "description" => "Description du hobby 3. Plongez dans cet univers passionnant.",
        "image" => "img/vector.png"
    ]
];
?>

<!-- Slider -->
<div class="relative w-[70vw] overflow-hidden mx-auto">
    <div id="slider" class="relative max-md:h-screen md:h-[50vh]  p-2">
        <?php foreach ($slides as $slide): ?>
            <div style="overflow-y: auto"
                class="slide min-w-full flex max-lg:flex-col items-center justify-between absolute inset-0 flex opacity-0 scale-75 transition-all duration-700 ease-in-out">

                <?php if ($slide["id"] != 3) {

                    ?>
                    <div class="flex h-full items-start justify-center w-[60%] flex-col">
                        <h2 class="font-bold text-3xl mb-2"><?= $slide['title'] ?></h2>
                        <p class="flex flex-col gap-4 text-sm text-gray-400 max-w-md">

                            <?= $slide['description'] ?>

                        </p>
                    </div>

                    <?php
                }
                ?>
                <?php if ($slide["id"] == 3) {

                    ?>



                    <?php
                }
                ?>

                <div class="flex  h-auto items-center <?php if ($slide["id"] == 3) {
                    echo 'justify-center w-full';
                } else {
                    echo 'w-[50%]';
                } ?>">
                    <img src="<?= $slide['image'] ?>" alt="Slide" class="<?php if ($slide["id"] == 2) {
                          echo 'w-[60%]';
                      } elseif ($slide["id"] == 3) {
                          echo 'hidden';
                      } else {
                          echo 'w-[80%]';
                      } ?> object-contain max-h-[450px]">


                    <!-- Slide 3 -->
                    <?php
                    if ($slide["id"] == 3) {
                        ?>

                        <div class="w-[80%] flex items-center justify-center">
                            <img id="image-to-pulse" src="<?= $slide['image'] ?>" alt="Slide3Image"
                                class=" object-contain w-[80%] max-h-[450px]">
                            <div class="absolute">

                                <button id="hover-button"
                                    class=" px-8 py-4 border-white hover:bg-white hover:text-[#FF6252] border-2 font-bold rounded-full w-fit flex items-center gap-2 transition-all duration-300 ease-in-out">

                                    My skills

                                    <svg class="w-4 fill-[currentColor]" viewBox="0 0 512 512"
                                        xmlns="http://www.w3.org/2000/svg">

                                        <path
                                            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM184 296c0 13.3 10.7 24 24 24s24-10.7 24-24V232h64c13.3 0 24-10.7 24-24s-10.7-24-24-24H232V120c0-13.3-10.7-24-24-24s-24 10.7-24 24v64H120c-13.3 0-24 10.7-24 24s10.7 24 24 24h64v64z">
                                        </path>

                                    </svg>
                                </button>
                            </div>



                        </div>

                        <?php
                    }
                    ?>
                    <!-- Slide 2 -->
                    <?php if ($slide["id"] == 2): ?>


                        <img src="img/vector3d2.png" alt="3D Tech" class="absolute w-[33%] mt-[-45px]">
                    <?php endif; ?>




                    <?php if ($slide["id"] == 1) {
                        ?>
                        <div class="lg:ml-[-100px] mb-auto lg:mt-20 flex items-center gap-2">


                            <svg class="w-20 animate-bounce" width="35" height="17" viewBox="0 0 35 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.1717 6.21937C27.2398 6.43274 23.1372 7.04114 22.1822 7.76776M26.5418 1.93758C28.3411 1.82513 32.0798 1.61927 32.6403 1.69539C33.341 1.79055 34.9499 3.07945 33.8513 3.28705C32.7528 3.49466 31.3516 3.30422 30.253 3.51183C29.1544 3.71943 28.0558 3.92704 25.8586 4.34225C23.6614 4.75745 25.5559 3.94433 22.5628 4.96506C19.5698 5.98579 20.3657 5.38027 17.6754 6.79891C14.9852 8.21755 15.0803 7.51688 13.8866 8.42516C12.6928 9.33344 11.1012 10.5445 10.3053 11.15C9.66867 11.6344 9.97662 11.819 10.2102 11.8507C10.9109 11.9458 12.3728 12.2157 12.615 12.5341C12.9177 12.932 14.4142 12.4216 13.5232 13.7278C12.6323 15.034 14.7343 15.3195 12.2343 15.3368C10.2344 15.3506 9.53256 15.0888 9.43164 14.9561C7.99858 14.9994 4.91272 15.1274 4.03385 15.2935C2.93526 15.5011 2.6325 15.1032 2.23458 15.4059C1.83667 15.7087 0.738078 15.9163 0.833234 15.2156C0.928389 14.5149 1.42146 13.5115 1.51662 12.8108C1.61177 12.1102 2.59791 10.1033 2.99583 9.80053C3.39374 9.49777 6.2743 6.67777 7.16529 5.37158C8.05628 4.06538 8.85211 3.45987 9.64794 2.85435C10.4438 2.24883 11.4472 2.7419 10.6514 3.34742C9.85554 3.95294 10.1583 4.35085 9.36247 4.95637C8.56664 5.56189 8.07357 6.56533 7.67565 6.86808C7.27774 7.17084 6.67222 6.37501 6.48191 7.77636C7.7881 8.66735 7.7881 8.66735 8.58393 8.06183C9.37976 7.45631 9.87283 6.45288 10.9714 6.24527C12.07 6.03767 14.1547 3.82319 14.8554 3.91835C15.5561 4.0135 18.6443 2.2921 19.3449 2.38726C20.0456 2.48241 23.4365 1.15892 24.8379 1.34924C25.959 1.50148 26.441 1.8049 26.5418 1.93758Z"
                                    stroke="white" />
                            </svg>

                            <span class="font-extrabold text-white">
                                @WHITE TIGER MMA
                            </span>

                        </div><?php
                    }
                    ?>
                </div>



            </div>
        <?php endforeach; ?>
    </div>

    <!-- Navigation -->
    <div class="nav flex items-start justify-start gap-4 mt-6 mb-4">
        <button id="prev" class="bg-white text-gray-800 p-4 hover:bg-gray-200 shadow-md rounded-full">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z">
                </path>
            </svg>
        </button>
        <div class="flex items-center justify-center">

        
        <button id="next" class="bg-white text-gray-800 z-40 p-4 hover:bg-gray-200 shadow-md rounded-full">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                </path>
            </svg>
        </button>

        <button class="p-5 absolute bg-gradient animate-ping rounded">

        </button>
    
    </div>
    </div>
</div>


<div id="popup"
    class="animate__animated animate__fadeIn fixed inset-0 bg-gradient-to-br from-[#1e1b2e]/90 to-[#3a1b47]/90 bg-opacity-90 flex items-center justify-center hidden z-50">
    <div class="absolute top-5 left-5">
        <!-- Close Button -->
        <button id="close-popup"
            class="text-white text-xl fixed font-bold z-[99999] flex items-center justify-center bg-red-500/60 p-2 rounded-full hover:bg-red-600 transition duration-300">
            <svg class="w-[20px] h-[20px] fill-white" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">

                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z">
                </path>

            </svg>
        </button>
    </div>
    <div class="text-center text-white">
        <?php
        require 'bubbles.php';
        ?>
    </div>

</div>

<style>
    .slide {
        opacity: 0;
        transform: scale(0.75);
        visibility: hidden;
    }

    .slide::-webkit-scrollbar {
        display: none;
    }

    .slide.active {
        opacity: 1;
        transform: scale(1);
        visibility: visible;
        z-index: 10;
    }

    .nav button {
        box-shadow: inset 4px -5px 4px rgba(0, 0, 0, 0.25);
        border-radius: 15px;
        transition: box-shadow 0.2s ease, transform 0.2s ease;
    }

    /* Effet au survol */
    .nav button:hover {
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2), inset -2px 2px 5px rgba(0, 0, 0, 0.1);
        transform: translateY(-2px);
    }

    /* Effet au clic */
    .nav button:active {
        box-shadow: inset 2px -3px 6px rgba(0, 0, 0, 0.4);
        transform: translateY(2px);
    }
</style>

<script>
    const slides = document.querySelectorAll('.slide');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');

    let currentIndex = 0;

    // Fonction pour afficher une diapositive
    function showSlide(index) {
        // Réinitialiser toutes les diapositives
        slides.forEach(slide => slide.classList.remove('active'));

        // Activer la diapositive courante
        slides[index].classList.add('active');
    }

    // Gestion des boutons
    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex === 0) ? slides.length - 1 : currentIndex - 1;
        showSlide(currentIndex);
    });

    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex === slides.length - 1) ? 0 : currentIndex + 1;
        showSlide(currentIndex);
    });

    // Initialiser le slider
    showSlide(currentIndex);
</script>

<script>
    const button = document.getElementById('hover-button');
    const image = document.getElementById('image-to-pulse');

    button.addEventListener('mouseenter', () => {
        image.classList.add('animate-pulse');
    });

    button.addEventListener('mouseleave', () => {
        image.classList.remove('animate-pulse');
    });
</script>

<script>
    // Select elements
    const openPopupButton = document.getElementById('hover-button');
    const closePopupButton = document.getElementById('close-popup');
    const popup = document.getElementById('popup');

    // Function to update the URL parameter
    function updateURLParam(param, value) {
        const url = new URL(window.location);
        if (value) {
            url.searchParams.set(param, value);
        } else {
            url.searchParams.delete(param);
        }
        window.history.replaceState({}, '', url);
    }

    // Event to open the popup
    openPopupButton.addEventListener('click', () => {
        popup.classList.remove('hidden'); // Show popup
        updateURLParam('skills', 'true'); // Add skills=true to URL
    });

    // Event to close the popup
    closePopupButton.addEventListener('click', () => {
        popup.classList.add('hidden'); // Hide popup
        updateURLParam('skills', null); // Remove skills from URL
    });

    // On page load, check if skills=true is in the URL
    window.addEventListener('DOMContentLoaded', () => {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('skills') === 'true') {
            popup.classList.remove('hidden'); // Show popup if skills=true
        }
    });
</script>

