<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section id="projects" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Recent Projects</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Here are some of my recent projects built with CodeIgniter 4 and other modern technologies.</p>
                <div class="w-16 h-1 bg-blue-600 mx-auto mt-4"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform transform hover:scale-105">
                    <img src="https://10web.io/blog/wp-content/uploads/sites/2/2023/03/screencapture-unstack-2023-03-13-16_04_44-1484x673.png" alt="Project 1" class="w-full h-58 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold text-gray-800">E-Commerce Platform</h3>
                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">CodeIgniter 4</span>
                        </div>
                        <p class="text-gray-600 mb-4">A complete e-commerce solution with inventory management, payment integration, and analytics dashboard.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded">CodeIgniter 4</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded">MySQL</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded">Tailwind CSS</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded">AlpineJS</span>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            View Details
                            <svg class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform transform hover:scale-105">
                    <img src="https://cdn.dribbble.com/userupload/8371643/file/original-7661dd617bc6d887fea64e1664174c71.png?resize=1440x900" alt="Project 2" class="w-full h-58 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold text-gray-800">Task Management System</h3>
                            <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded-full">Laravel 11</span>
                        </div>
                        <p class="text-gray-600 mb-4">A collaborative task management platform with real-time updates, file sharing, and progress tracking.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded">Laravel</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded">Vue.js</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded">PostgreSQL</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded">WebSockets</span>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            View Details
                            <svg class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform transform hover:scale-105">
                    <img src="https://savvycomsoftware.com/wp-content/uploads/2023/06/Learning-Management-System-2.webp" alt="Project 3" class="w-full h-58 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold text-gray-800">Learning Management System</h3>
                            <span class="bg-violet-100 text-violet-800 text-xs px-2 py-1 rounded-full">Bootstrap</span>
                        </div>
                        <p class="text-gray-600 mb-4">An educational platform with course management, video streaming, quizzes, and student progress tracking.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded">CodeIgniter 4</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded">MySQL</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded">Bootstrap CSS</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded">jQuery</span>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            View Details
                            <svg class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="#" class="bg-transparent border-2 border-blue-600 hover:bg-blue-600 text-blue-600 hover:text-white font-bold py-3 px-6 rounded-lg transition duration-300">View All Projects</a>
            </div>
        </div>
</section>
<?= $this->endSection() ?>