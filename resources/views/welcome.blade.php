<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopEase - Modern E-commerce</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-indigo-600 font-bold text-2xl">ShopEase</span>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="#" class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Home
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Products
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Categories
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            About
                        </a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <div class="flex space-x-4">
                        <button class="bg-gray-100 p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none">
                            <span class="sr-only">Search</span>
                            <i class="fas fa-search w-6 h-6"></i>
                        </button>
                        <button class="bg-gray-100 p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none">
                            <span class="sr-only">View cart</span>
                            <i class="fas fa-shopping-cart w-6 h-6"></i>
                        </button>
                        <button class="bg-gray-100 p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none">
                            <span class="sr-only">View account</span>
                            <i class="fas fa-user w-6 h-6"></i>
                        </button>
                    </div>
                    <div class="ml-3 relative">
                        <div>
                            <a href="#" class="ml-4 px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                Sign In
                            </a>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="pt-2 pb-3 space-y-1">
                <a href="#" class="bg-indigo-50 border-indigo-500 text-indigo-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Home
                </a>
                <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Products
                </a>
                <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Categories
                </a>
                <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    About
                </a>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <i class="fas fa-user-circle text-gray-400 w-10 h-10"></i>
                    </div>
                    <div class="ml-3">
                        <a href="#" class="text-base font-medium text-indigo-600 hover:text-indigo-500">
                            Sign In
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <div class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Shop the latest</span>
                            <span class="block text-indigo-600 xl:inline"> trending products</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Discover our curated collection of premium products. From fashion to electronics, we've got everything you need.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                    Shop Now
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="/api/placeholder/800/600" alt="E-commerce banner">
        </div>
    </div>

    <!-- Featured Categories -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-32 lg:max-w-none">
                <h2 class="text-3xl font-extrabold text-gray-900">Shop by Category</h2>

                <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
                    <div class="group relative">
                        <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="/api/placeholder/400/320" alt="Electronics" class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="mt-6 text-base font-semibold text-gray-900">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Electronics
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">Shop the latest gadgets and tech.</p>
                    </div>

                    <div class="group relative">
                        <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="/api/placeholder/400/320" alt="Fashion" class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="mt-6 text-base font-semibold text-gray-900">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Fashion
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">Trendy clothing and accessories.</p>
                    </div>

                    <div class="group relative">
                        <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="/api/placeholder/400/320" alt="Home & Living" class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="mt-6 text-base font-semibold text-gray-900">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Home & Living
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">Stylish home decor and essentials.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Products -->
    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-32 lg:max-w-none">
                <h2 class="text-3xl font-extrabold text-gray-900">Featured Products</h2>
                <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-4 lg:gap-x-6">
                    <!-- Product 1 -->
                    <div class="group">
                        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden">
                            <img src="/api/placeholder/320/320" alt="Wireless Earbuds" class="w-full h-full object-center object-cover group-hover:opacity-75">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Wireless Earbuds
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Black</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$99.99</p>
                        </div>
                        <button class="mt-4 w-full bg-indigo-600 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none">
                            Add to cart
                        </button>
                    </div>

                    <!-- Product 2 -->
                    <div class="group">
                        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden">
                            <img src="/api/placeholder/320/320" alt="Smart Watch" class="w-full h-full object-center object-cover group-hover:opacity-75">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Smart Watch Pro
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Silver</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$159.99</p>
                        </div>
                        <button class="mt-4 w-full bg-indigo-600 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none">
                            Add to cart
                        </button>
                    </div>

                    <!-- Product 3 -->
                    <div class="group">
                        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden">
                            <img src="/api/placeholder/320/320" alt="Leather Backpack" class="w-full h-full object-center object-cover group-hover:opacity-75">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Leather Backpack
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Brown</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$79.99</p>
                        </div>
                        <button class="mt-4 w-full bg-indigo-600 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none">
                            Add to cart
                        </button>
                    </div>

                    <!-- Product 4 -->
                    <div class="group">
                        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden">
                            <img src="/api/placeholder/320/320" alt="Portable Speaker" class="w-full h-full object-center object-cover group-hover:opacity-75">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Portable Speaker
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Blue</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$49.99</p>
                        </div>
                        <button class="mt-4 w-full bg-indigo-600 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:py-16 lg:px-8">
            <div class="px-6 py-6 bg-indigo-700 rounded-lg md:py-12 md:px-12 lg:py-16 lg:px-16 xl:flex xl:items-center">
                <div class="xl:w-0 xl:flex-1">
                    <h2 class="text-2xl font-extrabold tracking-tight text-white sm:text-3xl">
                        Want product news and updates?
                    </h2>
                    <p class="mt-3 max-w-3xl text-lg leading-6 text-indigo-200">
                        Sign up for our newsletter to stay up to date.
                    </p>
                </div>
                <div class="mt-8 sm:w-full sm:max-w-md xl:mt-0 xl:ml-8">
                    <form class="sm:flex">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email-address" type="email" autocomplete="email" required class="w-full border-white px-5 py-3 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white rounded-md" placeholder="Enter your email">
                        <button type="submit" class="mt-3 w-full flex items-center justify-center px-5 py-3 border border-transparent shadow text-base font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="space-y-8 xl:col-span-1">
                    <span class="text-white font-bold text-2xl">ShopEase</span>
                    <p class="text-gray-300 text-base">
                        Making online shopping easier and more enjoyable since 2025.
                    </p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-gray-300">
                            <span class="sr-only">Facebook</span>
                            <i class="fab fa-facebook w-6 h-6"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-300">
                            <span class="sr-only">Instagram</span>
                            <i class="fab fa-instagram w-6 h-6"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-300">
                            <span class="sr-only">Twitter</span>
                            <i class="fab fa-twitter w-6 h-6"></i>
                        </a>
                    </div>
                </div>
                <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                Shop
                            </h3>
                            <ul class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Products
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Categories
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        New Arrivals
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Deals
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                Support
                            </h3>
                            <ul class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Help Center
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Returns
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Shipping
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        FAQs
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                Company
                            </h3>
                            <ul class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Careers
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Press
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                Legal
                            </h3>
                            <ul class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Privacy
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Terms
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-300 hover:text-white">
                                        Cookie Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-700 pt-8">
                <p class="text-base text-gray-400 xl:text-center">
                    &copy; 2025 ShopEase, Inc. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>