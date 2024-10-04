<nav id="navbar" class="navbar bg-white transition-all duration-300 ease-in-out">
    <div class="container mx-auto flex justify-between items-center p-4">
        <div class="flex items-center">
            <img src="/mrs_ndh/public/images/logo.png" alt="Logo" class="h-8 w-30">
        </div>
        <div class="flex space-x-4">
            <a href="/home" class="nav-link">Home</a>
            <a href="/about" class="nav-link">About</a>
            <a href="/contact" class="nav-link">Contact</a>
            <a href="/blank" class="nav-link">Blank</a>
        </div>
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-800 focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden md:hidden">
    <div class="flex flex-col space-y-2 p-4 bg-gray-800">
        <a href="/home" class="text-white">Home</a>
        <a href="/about" class="text-white">About</a>
        <a href="/contact" class="text-white">Contact</a>
        <a href="/blank" class="text-white">Blank</a>
    </div>
</div>
