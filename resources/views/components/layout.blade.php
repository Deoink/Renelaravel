<nav class="bg-blue-600 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-white text-xl font-bold">
            MyWebsite
        </a>

        <div class="space-x-6">
            <a href="{{ route('home') }}"
               class="text-white hover:text-gray-200 {{ request()->routeIs('home') ? 'font-bold underline' : '' }}">
                Home
            </a>

            <a href="{{ route('about') }}"
               class="text-white hover:text-gray-200 {{ request()->routeIs('about') ? 'font-bold underline' : '' }}">
                About
            </a>

            <a href="{{ route('contact') }}"
               class="text-white hover:text-gray-200 {{ request()->routeIs('contact') ? 'font-bold underline' : '' }}">
                Contact
            </a>
        </div>
    </div>
</nav>