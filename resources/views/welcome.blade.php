<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibe Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-b from-purple-50 to-white">
<!-- Navbar -->
<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <span class="text-2xl font-bold text-purple-600">Vibe</span>
            <div class="hidden sm:flex space-x-4">
                <a href="#features" class="text-gray-600 hover:text-purple-600 px-3 py-2">Features</a>
                <a href="#about" class="text-gray-600 hover:text-purple-600 px-3 py-2">About</a>
                <a href="{{ route('login') }}" class="text-purple-600 hover:text-purple-700 px-3 py-2">Login</a>
                <a href="{{ route('register') }}" class="bg-purple-600 text-white px-4 py-2 rounded-md hover:bg-purple-700">Register</a>
            </div>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
    <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl md:text-6xl">
        Connect with your <span class="text-purple-600">Vibe</span>
    </h1>
    <p class="mt-3 max-w-md mx-auto text-gray-500 sm:text-lg md:text-xl">
        Join our secure platform where you can connect, share, and discover people who match your vibe.
    </p>
    <div class="mt-5">
        <a href="/register" class="px-8 py-3 text-white bg-purple-600 rounded-md hover:bg-purple-700">Get Started</a>
    </div>
</main>

<!-- Features Section -->
<section class="mt-24 grid gap-8 grid-cols-1 md:grid-cols-3 text-center">
    <div class="p-6">
        <div class="mx-auto h-12 w-12 text-purple-600">🔒</div>
        <h3 class="mt-4 text-xl font-semibold">Secure Platform</h3>
        <p class="mt-2 text-gray-500">Your privacy and security are our top priorities.</p>
    </div>
    <div class="p-6">
        <div class="mx-auto h-12 w-12 text-purple-600">🔍</div>
        <h3 class="mt-4 text-xl font-semibold">Smart Search</h3>
        <p class="mt-2 text-gray-500">Find your connections easily with our advanced search.</p>
    </div>
    <div class="p-6">
        <div class="mx-auto h-12 w-12 text-purple-600">👥</div>
        <h3 class="mt-4 text-xl font-semibold">Community</h3>
        <p class="mt-2 text-gray-500">Join a vibrant community of like-minded people.</p>
    </div>
</section>

<!-- Footer -->
<footer class="bg-white mt-24 py-12 px-4 sm:px-6 lg:px-8 text-center">
    <p class="text-gray-400">© 2025 Vibe. All rights reserved.</p>
</footer>
</body>
</html>
