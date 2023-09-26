<section>
    <h1 class="text-black text-6xl font-bold mb-4 italic">OUR WORKS</h1>
    <div class="relative w-full">
        <!-- Carousel wrapper -->
        <div class="relative h-96 overflow-hidden sm:h-80 xl:h-74 2xl:h-96">
                <!-- Item 1 -->
            <div id="work-item-1" class="hidden duration-700 ease-in-out">
                <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 px-24">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="relative bg-red-600 ">
                            <div class="h-64 flex justify-center items-center">
                                <img class="h-64 w-full object-cover" src="{{asset('asset/image/work/rexona.png')}}" alt="">
                            </div>
                            <div class="absolute bottom-4 left-4">
                                <div class="font-bold text-base text-white">REXONA MEN SOCCER STARS</div>
                            </div>
                        </div>
                        <div class="relative bg-red-600 ">
                            <div class="h-64 flex justify-center items-center">
                                <img class="h-64 w-full object-cover" src="{{asset('asset/image/work/bali_festival.png')}}" alt="">
                            </div>
                            <div class="absolute bottom-4 left-4">
                                <div class="font-bold text-base text-white">BALI UNITED FESTIVAL</div>
                            </div>
                        </div>
                        <div class="relative bg-red-600 ">
                            <div class="h-64 flex justify-center items-center">
                                <img class="h-64 w-full object-cover" src="{{asset('asset/image/work/indomie.png')}}" alt="">
                            </div>
                            <div class="absolute bottom-4 left-4">
                                <div class="font-bold text-base text-white">NEW INDOMIE VARIANT</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div id="work-item-2" class="hidden duration-700 ease-in-out">
                <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 px-24">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="relative bg-red-600 ">
                            <div class="h-64 flex justify-center items-center">
                                <img class="h-64 w-full object-cover" src="{{asset('asset/image/work/rexona.png')}}" alt="">
                            </div>
                            <div class="absolute bottom-4 left-4">
                                <div class="font-bold text-base text-white">REXONA MEN SOCCER STARS</div>
                            </div>
                        </div>
                        <div class="relative bg-red-600 ">
                            <div class="h-64 flex justify-center items-center">
                                <img class="h-64 w-full object-cover" src="{{asset('asset/image/work/bali_festival.png')}}" alt="">
                            </div>
                            <div class="absolute bottom-4 left-4">
                                <div class="font-bold text-base text-white">BALI UNITED FESTIVAL</div>
                            </div>
                        </div>
                        <div class="relative bg-red-600 ">
                            <div class="h-64 flex justify-center items-center">
                                <img class="h-64 w-full object-cover" src="{{asset('asset/image/work/indomie.png')}}" alt="">
                            </div>
                            <div class="absolute bottom-4 left-4">
                                <div class="font-bold text-base text-white">NEW INDOMIE VARIANT</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button id="work-indicator-1" type="button" class="w-6 h-1 rounded-full" aria-current="true" aria-label="Slide 1"></button>
            <button id="work-indicator-2" type="button" class="w-6 h-1 rounded-full" aria-current="false" aria-label="Slide 2"></button>
        </div>
        <!-- Slider controls -->
        <button id="data-work-prev" type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full border-2 border-black">
                <svg class="w-4 h-4 text-black dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button id="data-work-next" type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full border-2 border-black">
                <svg class="w-4 h-4 text-black dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>

    <hr class="my-12 h-0.5 border-t-0 bg-gray-300 opacity-50">
</section>