<section>
    <h1 class="text-black text-6xl font-bold mb-4 italic">WHAT MAKE US DIFFERENT</h1>
            <div class="relative w-full">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden sm:h-64 xl:h-80 2xl:h-96">
                     <!-- Item 1 -->
                     <div id="carousel-item-1" class="hidden duration-700 ease-in-out bg-white">
                        <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <div class="grid grid-cols-12">
                                <div class="sm:col-span-12 md:col-span-5 h-96 flex justify-end items-center bg-cover bg-primary">
                                    <img src="{{asset("/asset/card.png")}}" class="object-cover w-full h-full" alt="">
                                    <div class="absolute mr-12 text-right">
                                        <h2 class="text-8xl font-bold text-white">10.000</h2>
                                        <p class="text-right text-2xl font-bold text-white">COMMUNITY LEADER</p>
                                    </div>
                                </div>
        
                                <div class="hidden md:flex col-span-7 mx-12 h-96 items-center mr-24">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae lorem ac risus imperdiet ornare. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vulputate metus vitae euismod bibendum. Ut lacinia massa ligula, eget volutpat quam fermentum eu. Vivamus dictum mauris eget nisi accumsan, nec tempor lorem tempus. Integer sagittis pulvinar urna, nec tempus ligula semper id. Nam urna ex, viverra eu euismod sed, pharetra ut enim. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="carousel-item-2" class="hidden duration-700 ease-in-out">
                        <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <div class="grid grid-cols-12">
                                <div class="sm:col-span-12 md:col-span-5 h-96 flex justify-end items-center bg-cover bg-primary">
                                    <img src="{{asset("/asset/card.png")}}" class="object-cover w-full h-full" alt="">
                                    <div class="absolute mr-12 text-right">
                                        <h2 class="text-8xl font-bold text-white">10.000</h2>
                                        <p class="text-right text-2xl font-bold text-white">COMMUNITY LEADER</p>
                                    </div>
                                </div>
        
                                <div class="hidden md:flex col-span-7 mx-12 h-96 items-center mr-24">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae lorem ac risus imperdiet ornare. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vulputate metus vitae euismod bibendum. Ut lacinia massa ligula, eget volutpat quam fermentum eu. Vivamus dictum mauris eget nisi accumsan, nec tempor lorem tempus. Integer sagittis pulvinar urna, nec tempus ligula semper id. Nam urna ex, viverra eu euismod sed, pharetra ut enim. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button id="carousel-indicator-1" type="button" class="w-6 h-1 rounded-full" aria-current="true" aria-label="Slide 1"></button>
                    <button id="carousel-indicator-2" type="button" class="w-6 h-1 rounded-full" aria-current="false" aria-label="Slide 2"></button>
                </div>
                <!-- Slider controls -->
                <button id="data-corousel-prev" type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full border-2 border-black">
                        <svg class="w-4 h-4 text-black dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button id="data-corousel-next" type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full border-2 border-black">
                        <svg class="w-4 h-4 text-black dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>
    
            <hr class="my-12 mx-16 h-0.5 border-t-0 bg-gray-300 opacity-50">
</section>