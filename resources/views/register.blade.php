<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F6EACB]  flex justify-center items-center h-screen">

    <!-- Container form login -->
    <div class="bg-[#fef5e7] rounded-xl shadow-md p-10 w-[350px] text-center">
        <!-- Logo -->
        <div class="hero-image flex justify-center mt-8 md:mt-0">
                <img src="assets/images/logo.png" alt="Hero Image" class="max-w-[70%] rounded-2xl">
            </div>

        <!-- Title -->
        <h2 class="text-2xl font-bold text-[#8B4513] mb-5">LOGIN</h2>

        <!-- Form -->
        <form id="loginForm" class="space-y-4">
            <!-- Email Field -->
            <div>
                <label for="email" class="block text-left font-bold text-[#8B4513] mb-1">Email:</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#ccb67f]"
                >
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-left font-bold text-[#8B4513] mb-1">Password:</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#ccb67f]"
                >
            </div>

            <!-- Submit Button -->
            
         <a href="/index" class="bg-white text-black px-4 py-2 rounded font-bold no-underline">
            Login
        </a>
        </form>
    </div>

</body>
</html>
