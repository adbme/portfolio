<div class="max-w-screen-xl bg-white mx-auto h-full">

    <div class="w-full  h-[63%] flex items-center justify-center">

        <!-- Colonne gauche -->
        <div class="h-full flex flex-col gap-y-[3%] w-full">
            <!-- Ligne d'images -->
            <div class="flex h-[65%] justify-between items-center gap-2">
                <div class="h-full w-[49.2%] p-2 backgroundimg shadow"
                    style="background-image: url('<?= $project['image1'] ?>')">
                </div>
                <div class="h-full w-[49.2%] p-2 backgroundimg shadow"
                    style="background-image: url('<?= $project['image2'] ?>')">
                </div>

            </div>

            <div class="flex h-full justify-between">
               <div class="h-full w-[75%] backgroundimg shadow"
                style="background-image: url('<?= $project['image3'] ?>')">

            </div> 

            <div class="h-full w-[23%] backgroundimg shadow"
                style="background-image: url('<?= $project['image4'] ?>')">

            </div> 
            </div>
            <!-- Image pleine hauteur -->
            
        </div>

        <div class="bg-white absolute rounded-full aspect-square shadow border w-1/5 mb-10 backgroundimg"
            style="background-image: url('<?= $project['logo'] ?>')">

        </div>


    </div>

    <!-- Section inférieure -->
    <div class="w-full h-[38%]">


      
    <div class="w-full absolute pointer-events-none h-[37%] rounded flex justify-between flex-col p-2">
            <div class="w-full h-fit flex justify-start">
                <img class="w-6" src="img/squareLeft.png" alt="">
            </div>

            <div class="w-full h-fit flex justify-end">
                <img class="w-8" src="img/squareRight.png" alt="">
            </div>


        </div> 

        <div class="w-full absolute h-[35%] flex justify-between flex-col p-10">

            <div class="flex items-center gap-4 text-black">
                <div class="bg-white rounded-full aspect-square shadow border w-1/6 max-w-[70px] backgroundimg"
                    style="background-image: url('<?= $project['logo'] ?>')">
                </div>

                <div class="flex items-end gap-2">
                <h2 class="font-extrabold text-4xl"><?= $project['name'] ?></h2>

                <span class="text-gray-400">
                    - <?= $project['creation'] ?>
                </span>
                </div>
            </div>

            <p class="text-gray-600"><?= $project['description'] ?></p>

            <div class="flex items-center gap-[30px]">
                <?php

                $badges =  $project['tech'];

                echo '<h1 class="text-black font-bold text-[18px]">';
                echo implode(', ', $badges);


                echo '</h1>';
                require "badgeLanguage.php"
                    ?>
            </div>

            <a href="<?= $project['link'] ?>" class="p-2 rounded bg-gradient w-fit flex items-center gap-2" target="_blank">
           
                Aller voir

                <svg class="w-4 fill-[currentColor]" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">

<path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V32c0-17.7-14.3-32-32-32H352zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"></path>

</svg>
            </a>

        </div> 

    </div>


</div>


<style>
    .backgroundimg {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

    }
</style>