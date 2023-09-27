<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100;0,400;0,500;0,600;0,700;0,800;1,100;1,400;1,500;1,600;1,700;1,800&family=Yesteryear&display=swap" rel="stylesheet">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    </head>
    
    <body class="font-hankenGrotesk">
        
        @include('landing.navbar')
        <div class="container mx-auto">
            @include('landing.information')
            @include('landing.product', $products)
            @include('landing.reason')
            @include('landing.service', $services)
            @include('landing.work')
            @include('landing.client') 
            
        </div>
        @include('landing.footer')
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
        <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous">
        </script>
        <script>
            $(document).ready(function(){
                $(window).scroll(function(){
                    var scroll = $(window).scrollTop();
                    if (scroll > 300) {
                        $('#nav').removeClass('text-white bg-transparent');
                        $('#nav').addClass('text-black bg-white');
                    }

                    else{
                        $('#nav').removeClass('text-black bg-white');
                        $('#nav').addClass('text-white bg-transparent');
                    }
                })
            })

            const items = [
                {
                    position: 0,
                    el: document.getElementById('carousel-item-1')
                },
                {
                    position: 1,
                    el: document.getElementById('carousel-item-2')
                },
            ];

            const options = {
                defaultPosition: 1,
                interval: 3000,
                
                indicators: {
                    activeClasses: 'bg-red-500',
                    inactiveClasses: 'bg-black',
                    items: [
                        {
                            position: 0,
                            el: document.getElementById('carousel-indicator-1')
                        },
                        {
                            position: 1,
                            el: document.getElementById('carousel-indicator-2')
                        },
                    ]
                },
                
                onNext: () => {
                    console.log('next slider item is shown');
                },
                onPrev: ( ) => {
                    console.log('previous slider item is shown');
                },
                onChange: ( ) => {
                    console.log('new slider item has been shown');
                }
            };


            const carousel = new Carousel(items, options);
            carousel.cycle()

            // pauses the cycling (automated sliding)
            carousel.pause()

            const $prevButton = document.getElementById('data-corousel-prev');
            const $nextButton = document.getElementById('data-corousel-next');

            $prevButton.addEventListener('click', () => {
                carousel.prev();
            });

            $nextButton.addEventListener('click', () => {
                carousel.next();
            });


            const workItems = [
                {
                    position: 0,
                    el: document.getElementById('work-item-1')
                },
                {
                    position: 1,
                    el: document.getElementById('work-item-2')
                },
            ];

            const workOptions = {
                defaultPosition: 1,
                interval: 3000,
                
                indicators: {
                    activeClasses: 'bg-red-500',
                    inactiveClasses: 'bg-black',
                    items: [
                        {
                            position: 0,
                            el: document.getElementById('work-indicator-1')
                        },
                        {
                            position: 1,
                            el: document.getElementById('work-indicator-2')
                        },
                    ]
                },
                
                // callback functions
                onNext: () => {
                    console.log('next slider item is shown');
                },
                onPrev: ( ) => {
                    console.log('previous slider item is shown');
                },
                onChange: ( ) => {
                    console.log('new slider item has been shown');
                }
            };


            const workCarousel = new Carousel(workItems, workOptions);
            workCarousel.cycle()

            // pauses the cycling (automated sliding)
            workCarousel.pause()

            const $workPrevButton = document.getElementById('data-work-prev');
            const $workNextButton = document.getElementById('data-work-next');

            $workPrevButton.addEventListener('click', () => {
                workCarousel.prev();
            });

            $workNextButton.addEventListener('click', () => {
                workCarousel.next();
            });




            const clientItems = [
                {
                    position: 0,
                    el: document.getElementById('client-item-1')
                },
                {
                    position: 1,
                    el: document.getElementById('client-item-2')
                }
            ];

            const clientOptions = {
                defaultPosition: 1,
                interval: 3000,
                indicators: {
                    activeClasses: 'bg-red-500',
                    inactiveClasses: 'bg-black',
                    items: []
                },
                // callback functions
                onNext: () => {
                    console.log('next slider client is shown');
                },
                onPrev: ( ) => {
                    console.log('previous slider item is shown');
                },
                onChange: ( ) => {
                    console.log('new slider item has been shown');
                }
            };


            const clientCarousel = new Carousel(clientItems, clientOptions);
            clientCarousel.cycle()

            // pauses the cycling (automated sliding)
            clientCarousel.pause()

            const $clientPrevButton = document.getElementById('data-client-prev');
            const $clientNextButton = document.getElementById('data-client-next');

            $clientPrevButton.addEventListener('click', () => {
                clientCarousel.prev();
            });

            $clientNextButton.addEventListener('click', () => {
                clientCarousel.next();
            });
        </script>
    </body>
</html>
