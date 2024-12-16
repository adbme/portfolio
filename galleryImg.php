<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Viewer</title>
    <link rel="shortcut icon" href="img/logo.svg" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Londrina+Solid:wght@100;300;400;900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-[#1e1b2e] to-[#3a1b47] text-white flex items-center justify-center h-screen">
    <?php
    $availableImages = [
        'BayartImage1' => 'img/projects/bayart/image1.png',
        'BayartImage2' => 'img/projects/bayart/image2.png',
        'BayartImage3' => 'img/projects/bayart/image3.png',
        'BayartImage4' => 'img/projects/bayart/image4.png',

        'LensOCRImage1' => 'img/projects/lensocr/image1.png',
        'LensOCRImage2' => 'img/projects/lensocr/image2.png',
        'LensOCRImage3' => 'img/projects/lensocr/image3.png',
        'LensOCRImage4' => 'img/projects/lensocr/image4.png',

        'USCImage1' => 'img/projects/usc/image1.png',
        'USCImage2' => 'img/projects/usc/image2.png',
        'USCImage3' => 'img/projects/usc/image3.png',
        'USCImage4' => 'img/projects/usc/image4.png',
    ];

    $currentImageKey = isset($_GET['img']) ? $_GET['img'] : null;

    if ($currentImageKey && array_key_exists($currentImageKey, $availableImages)) {
        $currentImagePath = $availableImages[$currentImageKey];

        $keys = array_keys($availableImages);
        $currentIndex = array_search($currentImageKey, $keys);
        $previousKey = $keys[($currentIndex - 1 + count($keys)) % count($keys)];
        $nextKey = $keys[($currentIndex + 1) % count($keys)];
        ?>
        <div class="relative w-full h-full flex items-center justify-center">
            <img src="<?php echo $currentImagePath; ?>" alt="Image Viewer" class="max-w-full max-h-full object-contain" />

            <a href="?img=<?php echo $previousKey; ?>"
                class="absolute left-5 top-1/2 -translate-y-1/2 text-white text-2xl bg-gradient px-4 py-2 rounded-full ">
                <svg class="w-[30px] h-[30px] fill-[currentColor]" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">

                    <path
                        d="M177.5 414c-8.8 3.8-19 2-26-4.6l-144-136C2.7 268.9 0 262.6 0 256s2.7-12.9 7.5-17.4l144-136c7-6.6 17.2-8.4 26-4.6s14.5 12.5 14.5 22l0 72 288 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32l-288 0 0 72c0 9.6-5.7 18.2-14.5 22z">
                    </path>

                </svg>
            </a>
            <a href="?img=<?php echo $nextKey; ?>"
                class="absolute right-5 top-1/2 -translate-y-1/2 text-white text-2xl bg-gradient px-4 py-2 rounded-full ">
                <svg class="w-[30px] h-[30px] fill-[currentColor]" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">

                    <path
                        d="M334.5 414c8.8 3.8 19 2 26-4.6l144-136c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22l0 72L32 192c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32l288 0 0 72c0 9.6 5.7 18.2 14.5 22z">
                    </path>

                </svg>
            </a>
        </div>
        <?php
    } else {
        ?>
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">Error</h1>
            <p class="text-xl">The image you are looking for does not exist or the parameter is missing.</p>
            <a href="?img=<?php echo array_key_first($availableImages); ?>"
                class="button mt-6 inline-block text-lg bg-gradient px-6 py-3 rounded-full transition">
                Go to the First Image
            </a>
        </div>
        <?php
    }
    ?>
</body>

</html>


<style>
    body {
        font-family: "Rubik", sans-serif;
    }


    .bg-gradient {
        transition: background 0.3s ease-in-out, transform 0.3s ease;
        background: linear-gradient(94.35deg, #FF3F47 0.74%, #FF875E 100%);
    }


    .button:hover {
        transform: scale(1.05);
    }

    .button:focus {
        transform: scale(0.95);
    }
</style>