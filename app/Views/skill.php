<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section id="skills" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Technical Skills</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Here are the technologies and tools I work with on a daily basis.</p>
                <div class="w-16 h-1 bg-blue-600 mx-auto mt-4"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div>
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Back-End Development</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">CodeIgniter 4</span>
                                <span class="text-gray-600">95%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">Laravel</span>
                                <span class="text-gray-600">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">PHP</span>
                                <span class="text-gray-600">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">MySQL/PostgreSQL</span>
                                <span class="text-gray-600">88%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 88%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">RESTful APIs</span>
                                <span class="text-gray-600">92%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Front-End Development</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">HTML/CSS</span>
                                <span class="text-gray-600">95%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">Tailwind CSS</span>
                                <span class="text-gray-600">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">JavaScript</span>
                                <span class="text-gray-600">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">Alpine.js</span>
                                <span class="text-gray-600">80%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">Vue.js</span>
                                <span class="text-gray-600">75%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-16">
                <h3 class="text-xl font-bold text-gray-800 mb-6 text-center">Other Tools & Technologies</h3>
                <div class="flex flex-wrap justify-center gap-6">
                    <div class="flex flex-col items-center p-4 bg-gray-50 rounded-lg shadow-sm w-24">
                        <svg class="h-10 w-10 text-gray-700 mb-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" />
                        </svg>
                        <span class="text-gray-700 text-sm">Git</span>
                    </div>
                    <div class="flex flex-col items-center p-4 bg-gray-50 rounded-lg shadow-sm w-24">
                        <svg class="h-10 w-10 text-gray-700 mb-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path>
                            <line x1="2" y1="20" x2="2" y2="20"></line>
                        </svg>
                        <span class="text-gray-700 text-sm">CI/CD</span>
                    </div>
                    <div class="flex flex-col items-center p-4 bg-gray-50 rounded-lg shadow-sm w-24">
                        <svg class="h-10 w-10 text-gray-700 mb-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                            <line x1="6" y1="6" x2="6.01" y2="6"></line>
                            <line x1="6" y1="18" x2="6.01" y2="18"></line>
                        </svg>
                        <span class="text-gray-700 text-sm">Docker</span>
                    </div>
                    <div class="flex flex-col items-center p-4 bg-gray-50 rounded-lg shadow-sm w-24">
                        <svg class="h-10 w-10 text-gray-700 mb-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 10h-4v4h4v-4z"></path>
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="2" y1="21" x2="22" y2="21"></line>
                        </svg>
                        <span class="text-gray-700 text-sm">UI/UX</span>
                    </div>
                    <div class="flex flex-col items-center p-4 bg-gray-50 rounded-lg shadow-sm w-24">
                        <svg class="h-10 w-10 text-gray-700 mb-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17l10 5 10-5"></path>
                            <path d="M2 12l10 5 10-5"></path>
                        </svg>
                        <span class="text-gray-700 text-sm">AWS</span>
                    </div>
                </div>
            </div>
        </div>
</section>
<?= $this->endSection() ?>