<nav id="nav" class="fixed inset-x-0 top-0 flex flex-row justify-between z-10">
    <div class="p-4">
        <div class="font-extrabold tracking-widest text-xl">
            <a href="#" class="transition duration-500 hover:text-indigo-500">
                <img src="{{ asset('asset/logo.png') }}" class="h-12" alt="">
            </a>
        </div>
    </div>

    <div class="p-4 md:flex flex-row justify-between font-bold">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
        <line x1="3" y1="12" x2="21" y2="12"></line>
        <line x1="3" y1="6" x2="21" y2="6"></line>
        <line x1="3" y1="18" x2="21" y2="18"></line>
      </svg>
    </div>

    
  </nav>

  <div class="h-screen bg-black flex items-center bg-cover bg-black]">
    <img src="{{asset("/asset/hero.png")}}" class="object-cover w-screen h-screen" alt="">
    <div class="absolute mx-16">
      <h1 class="text-white font-white text-4xl font-bold italic leading-none">20 MILLION <br>COMMUNITY</h1>
      <div class="inline-flex">
        <button class="px-6 py-2 my-10 mx-2 bg-transparent border-white text-white rounded-md border-2">LETS WORK WITH US</button>
      </div>
    </div>
  </div>
</nav>