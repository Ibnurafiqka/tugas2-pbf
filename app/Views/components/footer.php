<footer class="bg-gray-900 text-white py-10">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 md:mb-0">
                <div class="flex items-center">
                    <svg class="h-8 w-8 mr-2 text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="16 18 22 12 16 6"></polyline>
                        <polyline points="8 6 2 12 8 18"></polyline>
                    </svg>
                    <span class="font-bold text-xl">Lily</span>
                </div>
                <p class="text-gray-400 mt-2 max-w-md">Passionate about building clean, efficient, and user-friendly web applications with modern technologies.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="<?= base_url('/') ?>" class="text-gray-400 hover:text-blue-500 transition duration-300">Home</a></li>
                        <li><a href="<?= base_url('/about') ?>" class="text-gray-400 hover:text-blue-500 transition duration-300">About</a></li>
                        <li><a href="<?= base_url('/project') ?>" class="text-gray-400 hover:text-blue-500 transition duration-300">Projects</a></li>
                        <li><a href="<?= base_url('/skill') ?>" class="text-gray-400 hover:text-blue-500 transition duration-300">Skills</a></li>
                        <li><a href="<?= base_url('/contact') ?>" class="text-gray-400 hover:text-blue-500 transition duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-blue-500 transition duration-300">Web Development</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-blue-500 transition duration-300">API Development</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-blue-500 transition duration-300">Database Design</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-blue-500 transition duration-300">UI/UX Design</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-blue-500 transition duration-300">Consulting</a></li>
                    </ul>
                </div>
                <div class="col-span-2 md:col-span-1 mt-8 md:mt-0">
                    <h3 class="text-lg font-semibold mb-4">Big Thanks To</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-blue-500 transition duration-300">God</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-blue-500 transition duration-300">My Parents</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-blue-500 transition duration-300">My Teacher</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-blue-500 transition duration-300">My Friends</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-blue-500 transition duration-300">My Self</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-800 mt-10 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400">&copy; 2025 Lily. All rights reserved.</p>
            <div class="mt-4 md:mt-0">
                <p class="text-gray-400">Built rapidly like <span class="text-red-500">🚀</span> | Using CodeIgniter 4 and Tailwind CSS V4</p>
            </div>
        </div>
    </div>
</footer>