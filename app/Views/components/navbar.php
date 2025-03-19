<nav class="bg-gray-900 text-white py-8 shadow-md">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center">
                <svg class="h-8 w-8 mr-2 text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="16 18 22 12 16 6"></polyline>
                    <polyline points="8 6 2 12 8 18"></polyline>
                </svg>
                <span class="font-bold text-xl">Lily</span>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="<?= base_url('/') ?>" class="hover:text-blue-500 transition duration-300">Home</a>
                <a href="<?= base_url('/about') ?>" class="hover:text-blue-500 transition duration-300">About</a>
                <a href="<?= base_url('/project') ?>" class="hover:text-blue-500 transition duration-300">Projects</a>
                <a href="<?= base_url('/skill') ?>" class="hover:text-blue-500 transition duration-300">Skills</a>
                <a href="<?= base_url('/contact') ?>" class="hover:text-blue-500 transition duration-300">Contact</a>
            </div>
            <div class="md:hidden">
                <button class="text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div> 
    </nav>