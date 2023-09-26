<section>
        <div class="flex justify-between items-center mb-4">
            <div>
                <h3 class="text-2xl">Services</h3>
                <p class="text-primary text-base">What we can do for you</p>
            </div>
            <div class="inline-flex">
                <button class="px-6 py-2 my-5 mx-2 bg-transparent border-red-600 text-red-600 rounded-md border-2">VIEW ALL</button>
              </div>
        </div>

        <div class="grid grid-cols-3 gap-4">
            @foreach ($services as $service)
            <div class="relative bg-red-600 ">
                <div class="h-64 flex justify-center items-center">
                    <img class="h-64 w-full object-cover" src="{{asset($service->image)}}">
                </div>
                <div class="absolute bottom-4 left-4">
                    <div class="font-bold text-base text-white">{{ $service->name }}</div>
                </div>
            </div>
            @endforeach
        </div>

    <hr class="mt-12 mb-1 mx-32 h-0.5 border-t-0 bg-gray-300 opacity-50">
    <hr class="mb-12 mx-32 h-0.5 border-t-0 bg-gray-300 opacity-50">
</section>