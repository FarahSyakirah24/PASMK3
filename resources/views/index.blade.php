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

         <!-- Submit Button -->
            
        <!-- <a href="/products" class="fixed top-6 right-6 bg-gradient-to-r from-[#4e3629] to-[#6f4f28] text-white px-6 py-3 rounded-full font-bold shadow-lg transform hover:scale-105 hover:rotate-2 transition duration-300 ease-in-out hover:shadow-2xl">
    Rekomendasi
</a>


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
                    <img src="assets/images/gambar orang.png" alt="Hero Image" class="w-full h-auto mb-2">
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

        <!-- Separator -->
        <div class="separator my-5 h-[2px] bg-[#F6EACB]"></div>

         <!-- Get in Touch Section -->
         <div class="get-in-touch bg-[#CCB67F] rounded-lg shadow-md px-8 py-10 flex flex-col lg:flex-row items-center lg:items-start gap-8">
            <!-- Form Section -->
            <div class="form-section flex-1">
                <h2 class="text-3xl font-bold mb-5 text-white">Send Your Message</h2>
                <p class="text-white mb-8">Give your suggestions and feedback about our website!</p>
                <form action="{{ route('send.message') }}" method="POST" class="space-y-4">
    @csrf <!-- Include this for CSRF protection -->
    <div>
        <input type="text" name="name" placeholder="Your Name" class="w-full px-4 py-3 rounded-md bg-[#F6EACB] text-gray-800 focus:outline-none focus:ring-2 focus:ring-white">
    </div>
    <div>
        <input type="email" name="email" placeholder="Your Email" class="w-full px-4 py-3 rounded-md bg-[#F6EACB] text-gray-800 focus:outline-none focus:ring-2 focus:ring-white">
    </div>
    <div>
        <textarea name="message" placeholder="Your Message" rows="4" class="w-full px-4 py-3 rounded-md bg-[#F6EACB] text-gray-800 focus:outline-none focus:ring-2 focus:ring-white"></textarea>
    </div>
    <button type="submit" class="px-6 py-3 bg-white text-[#CCB67F] rounded-md font-bold hover:bg-[#F6EACB] transition-colors">
        Send Message
    </button>
</form>
            </div>

            <!-- Image Section -->
            <div class="image-section flex-1 flex justify-center items-center">
                <img src="assets/images/email.png" alt="Contact Us" class="w-[350px] h-auto rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</body>
</html>