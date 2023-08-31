<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zambales | {{ $title }}</title>
    @include('partials.__cdn')
    <style>
        .custom-shape-divider-bottom-1693384394 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-bottom-1693384394 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 150px;
        }

        .custom-shape-divider-bottom-1693384394 .shape-fill {
            fill: #FFFFFF;
        }

        .custom-shape-divider-top-1693392761 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-top-1693392761 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 101px;
        }

        .custom-shape-divider-top-1693392761 .shape-fill {
            fill: #FFFFFF;
        }
    </style>
</head>
<body class="w-full min-h-screen select-none  font-[outfit]">
    {{-- header --}}
    <div class="flex justify-between items-center py-8 px-[5%] fixed z-[2] w-full top-0 left-0 bg-white/50 backdrop-blur-sm">
        <div>
            <p>DisoverZambales</p>
        </div>
        <div>
            {{-- desktop nav --}}
            <ul class="gap-5 md:flex hidden font-[500]">
                <a href="{{ route('homepage') }}" class="cursor-pointer hover:text-blue-600">Homepage</a>
                <a href="{{ route('about') }}" class="cursor-pointer hover:text-blue-600">About</a>
                <a href="{{ route('destinations') }}" class="cursor-pointer hover:text-blue-600">Destinations</a>
                <a href="{{ route('gallery') }}" class="cursor-pointer hover:text-blue-600">Gallery</a>
                <a href="{{ route('contactUs') }}" class="cursor-pointer hover:text-blue-600">Contact us</a>
            </ul>
            {{-- mobile nav --}}
            <ul class="gap-10 md:hidden hidden fixed flex-col top-0 right-0 p-5 min-h-screen w-[250px] bg-white pt-[50px]" id="mobileNav">
                <a href="{{ route('homepage') }}" class="cursor-pointer hover:text-blue-600">Homepage</a>
                <a href="{{ route('about') }}" class="cursor-pointer hover:text-blue-600">About</a>
                <a href="{{ route('destinations') }}" class="cursor-pointer hover:text-blue-600">Destinations</a>
                <a href="{{ route('gallery') }}" class="cursor-pointer hover:text-blue-600">Gallery</a>
                <a href="{{ route('contactUs') }}" class="cursor-pointer hover:text-blue-600">Contact us</a>
                <p class="absolute bottom-5 text-[14px] text-gray-300 right-5">2023©Jeffrey Lonzanida</p>
            </ul>
            {{-- mobile button --}}
            <label class="btn btn-circle swap swap-rotate md:hidden" id="mobileNavToggler">
                <input type="checkbox"/>
                <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z"/></svg>
                <svg class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><polygon points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49"/></svg>
            </label>
        </div>
    </div>

    {{-- homepage --}}
    @yield('hero')
    @yield('overview')

    {{-- about --}}
    @yield('heroabout')
    @yield('history')
    @yield('geography')
    @yield('cities')
    @yield('others')

    {{-- destination --}}
    @yield('herodestinations')
    @yield('destinations')

    {{-- gallery --}}

    {{-- contactus --}}

    {{-- footer --}}
    <div class="min-h-screen w-full items-center justify-center flex bg-cover bg-[url({{ asset('assets/images/overview-bg.jpg') }})] relative pt-[100px]">
        <div class="custom-shape-divider-top-1693392761 z-[1]">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V6c0,21.6,291,111.46,741,110.26,445.39,3.6,459-88.3,459-110.26V0Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 h-fit bg-center w-full md:mx-[10%] mx-[5%] bg-white p-5 shadow-lg rounded-sm max-w-[1440px]">
            <div class="flex flex-col">
                <p class="text-blue-500 text-[18px] font-[500] mb-3">Jeffrey Lonzanida</p>
            </div>
            <div class="flex flex-col">
                <p class="text-blue-500 text-[18px] font-[500] mb-3">Links</p>
            </div>
            <div class="flex flex-col">
                <p class="text-blue-500 text-[18px] font-[500] mb-3">Municipalities/Cities</p>
                <a href="/zambales/about/#botolan" class="hover:underline hover:text-blue-600">Botolan</a>
                <a href="http://" class="hover:underline hover:text-blue-600">Cabangan</a>
                <a href="http://" class="hover:underline hover:text-blue-600">Candelaria</a>
                <a href="http://" class="hover:underline hover:text-blue-600">Castillejos</a>
                <a href="http://" class="hover:underline hover:text-blue-600">Iba</a>
                <a href="http://" class="hover:underline hover:text-blue-600">Masinloc</a>
                <a href="http://" class="hover:underline hover:text-blue-600">Olongapo</a>
                <a href="http://" class="hover:underline hover:text-blue-600">Palauig</a>
                <a href="http://" class="hover:underline hover:text-blue-600">San Antonio</a>
                <a href="http://" class="hover:underline hover:text-blue-600">San Felipe</a>
                <a href="http://" class="hover:underline hover:text-blue-600">San Marcelino</a>
                <a href="http://" class="hover:underline hover:text-blue-600">San Narciso</a>
                <a href="http://" class="hover:underline hover:text-blue-600">Santa Cruz</a>
                <a href="http://" class="hover:underline hover:text-blue-600">Subic</a>
            </div>
        </div>
    </div>
    {{-- js --}}
    {{-- swiper js --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            const mobileNavBtn = document.querySelector("#mobileNavToggler");
            const mobileNav = document.querySelector("#mobileNav");
            const mobileNavCheckbox = document.querySelector("#mobileNavToggler input[type=checkbox]");
            mobileNavBtn.addEventListener('click', ()=>{
                if(mobileNavCheckbox.checked) {
                    mobileNav.classList.replace('hidden', 'flex');
                } else {
                    mobileNav.classList.replace('flex', 'hidden');
                }
            })
        });
        // swiper hero
        var swiper = new Swiper("#hero .mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        // swiper do
        var swiperDo = new Swiper("#best .mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                425: {
                    slidesPerView: "auto",
                    centeredSlides: false,
                    spaceBetween: 30,
                },
            },
        });
    </script>
</body>
</html>