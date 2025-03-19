<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">About Me</h2>
                <div class="w-16 h-1 bg-blue-600 mx-auto"></div>
            </div>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <img src="https://dwblog-ecdf.kxcdn.com/wp-content/uploads/2022/08/Logo-Codeigniter-1024x576.jpg" alt="Working on code" class="rounded-lg shadow-xl">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Hello, I'm <span class="text-blue-600">Rafioka</span></h3>
                    <p class="text-gray-600 mb-4">I'm a passionate full-stack developer with 5+ years of experience in building web applications. I specialize in CodeIgniter 4, Laravel, and modern front-end technologies.</p>
                    <p class="text-gray-600 mb-6">My journey in software development began when I built my first website at 15. Since then, I've worked with startups and established companies to create scalable and maintainable applications.</p>
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-blue-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">CodeIgniter Expert</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-blue-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Full-Stack Developer</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-blue-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">UI/UX Enthusiast</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-blue-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Problem Solver</span>
                        </div>
                    </div>
                    <a href="#contact" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">Let's Work Together</a>
                </div>
            </div>
        </div>
</section>
<?= $this->endSection() ?>