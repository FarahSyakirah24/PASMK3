<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution Skin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-[#F6EACB] text-white m-0 p-0">

    <!-- Container -->
    <div class="container mx-auto w-4/5 py-5">
        <!-- Logo -->
        <div class="logo mx-auto mb-5">
            <img src="assets/images/logo.png" alt="Solution Skin Logo" class="max-w-[150px] block mx-auto">
        </div>

        <!-- Header -->
        <div class="header bg-[#CCB67F] flex justify-between items-center px-20 h-[310px] relative rounded-lg">
            <div class="hero-content flex justify-between items-center w-full">
                <!-- Text Content -->
                <div class="text-content flex-1 text-left">
                    <h1 class="text-5xl font-bold my-3">Treat Your Skin Now!</h1>
                    <p class="text-lg">Find the skincare that suits you</p>
                </div>
                <!-- Image Content -->
                <div class="hero-image flex justify-center mt-8 md:mt-0">
                <img src="assets/images/gambar orang.png" alt="Product 2" class="w-full h-auto mb-2">
                </div>
            </div>
        </div>

        <!-- Separator -->
        <div class="separator my-5 h-[2px] bg-[#F6EACB]"></div>

        <!-- Skin Types Section -->
        <div class="skin-types flex flex-wrap justify-center gap-5">
            <!-- Card 1 -->
            <div class="skin-card bg-[#CCB67F] rounded-lg overflow-hidden w-[180px] shadow-md text-center">
                <img src="assets/images/Acne skin.png" alt="Acne Skin" class="w-full h-[145px] object-cover">
                <a href="/acne" class="block mt-3 mb-2 font-bold">ACNE</a>
            </div>
            <!-- Card 2 -->
            <div class="skin-card bg-[#CCB67F] rounded-lg overflow-hidden w-[180px] shadow-md text-center">
                <img src="assets/images/oily skin.png" alt="Oily Skin" class="w-full h-[150px] object-cover">
                <a href="/oily" class="block mt-3 mb-2 font-bold">OILY</a>
            </div>
            <!-- Card 3 -->
            <div class="skin-card bg-[#CCB67F] rounded-lg overflow-hidden w-[180px] shadow-md text-center">
                <img src="assets/images/dry skin.png" alt="Dry Skin" class="w-full h-[150px] object-cover">
                <a href="/dry" class="block mt-3 mb-2 font-bold">DRY</a>
            </div>
            <!-- Card 4 -->
            <div class="skin-card bg-[#CCB67F] rounded-lg overflow-hidden w-[180px] shadow-md text-center">
                <img src="assets/images/red skin.png" alt="Red Skin" class="w-full h-[150px] object-cover">
                <a href="/kemerahan" class="block mt-3 mb-2 font-bold">KEMERAHAN</a>
            </div>
            <!-- Card 5 -->
            <div class="skin-card bg-[#CCB67F] rounded-lg overflow-hidden w-[180px] shadow-md text-center">
                <img src="assets/images/kusam.png" alt="Kusam Skin" class="w-full h-[150px] object-cover">
                <a href="/kusam" class="block mt-3 mb-2 font-bold">KUSAM</a>
            </div>
        </div>
    </div>

</body>
</html>