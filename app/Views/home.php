<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <section id="home" class="bg-gray-900 text-white py-20">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Full-Stuck Programmer</h1>
                <h2 class="text-2xl md:text-3xl text-blue-400 mb-6">You mean have the problem with you're code? Nah, im the problem.</h2>
                <p class="text-gray-300 text-lg mb-8">Building application and website development within zero experiences.</p>
                <div class="flex space-x-4">
                    <a href="<?= base_url('/project') ?>" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">View Projects</a>
                    <a href="<?= base_url('/contact') ?>" class="bg-transparent border-2 border-blue-500 hover:bg-blue-500 text-white font-bold py-3 px-6 rounded-lg transition duration-300">Contact Me</a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="relative">
                    <div class="w-64 h-64 md:w-80 md:h-80 bg-blue-600 rounded-full opacity-20 absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"></div>
                    <div class="w-72 h-72 md:w-96 md:h-96 relative z-10">
                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#3B82F6" d="M45.3,-51.2C58.4,-40.6,68.9,-25.8,72.1,-9.2C75.3,7.4,71.3,25.8,60.8,38.9C50.4,52,33.3,59.9,14.6,65.2C-4.1,70.6,-24.4,73.3,-40.7,65.9C-57,58.4,-69.2,40.7,-73.1,21.7C-77.1,2.6,-72.8,-17.9,-62.3,-32.6C-51.8,-47.4,-35,-56.3,-18.7,-63.2C-2.3,-70.1,13.4,-74.9,27.2,-70.1C41.1,-65.2,52.8,-50.7,45.3,-51.2Z" transform="translate(100 100)" />
                        </svg>
                        <img src="https://avatars.githubusercontent.com/u/116718894?v=4?s=400" alt="Developer profile" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 rounded-full border-4 border-white h-48 w-48 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero 2 Section -->
    <section id="home" class="bg-white text-gray-900 py-20">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 flex justify-center">
                <div class="relative">
                    <div class="w-64 h-64 md:w-80 md:h-80 bg-blue-600 rounded-full opacity-20 absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"></div>
                    <div class="w-72 h-72 md:w-96 md:h-96 relative z-10">
                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#3B82F6" d="M45.3,-51.2C58.4,-40.6,68.9,-25.8,72.1,-9.2C75.3,7.4,71.3,25.8,60.8,38.9C50.4,52,33.3,59.9,14.6,65.2C-4.1,70.6,-24.4,73.3,-40.7,65.9C-57,58.4,-69.2,40.7,-73.1,21.7C-77.1,2.6,-72.8,-17.9,-62.3,-32.6C-51.8,-47.4,-35,-56.3,-18.7,-63.2C-2.3,-70.1,13.4,-74.9,27.2,-70.1C41.1,-65.2,52.8,-50.7,45.3,-51.2Z" transform="translate(100 100)" />
                        </svg>
                        <img src="https://avatars.githubusercontent.com/u/116718894?v=4?s=400" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 scale-x-[-1] rounded-full border-4 border-white h-48 w-48 object-cover">
                    </div>
                </div>
            </div>

            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Full-Stuck Programmer</h1>
                <h2 class="text-2xl md:text-3xl text-blue-400 mb-6">You mean have the problem with you're code? Nah, im the problem.</h2>
                <p class="text-gray-900 text-lg mb-8">Building application and website development within zero experiences.</p>
                <div class="flex space-x-4">
                    <a href="<?= base_url('/project') ?>" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">View Projects</a>
                    <a href="<?= base_url('/contact') ?>" class="bg-transparent border-2 border-blue-500 hover:bg-blue-500 text-gray-900 font-bold py-3 px-6 rounded-lg transition duration-300">Contact Me</a>
                </div>
            </div>
        </div>
</section>
<?= $this->endSection() ?>