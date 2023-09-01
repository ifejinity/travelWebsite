<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zambales | {{ $title }}</title>
    {{-- cdns --}}
    @include('partials.__cdn')
    {{-- tailwind config --}}
    @include('partials.tailwindConfig')
    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
</head>
<body class="w-full min-h-screen select-none font-[outfit]">
    {{-- header --}}
    <div class="flex justify-between items-center py-5 px-[5%] fixed z-[2] w-full top-0 left-0 bg-white shadow-lg">
        <div>
            <p>DisoverZambales</p>
        </div>
        <div>
            {{-- desktop nav --}}
            <ul class="gap-2 md:flex hidden font-[500]">
                <a href="{{ route('homepage') }}" class="cursor-pointer hover:text-blue-600 p-2 rounded-lg {{ $title == 'Homepage' ? 'text-blue-600 bg-blue-100' : '' }}">Homepage</a>
                <a href="{{ route('about') }}" class="cursor-pointer hover:text-blue-600 p-2 rounded-lg {{ $title == 'About' ? 'text-blue-600 bg-blue-100' : '' }}">About</a>
                <a href="{{ route('destinations') }}" class="cursor-pointer hover:text-blue-600 p-2 rounded-lg {{ $title == 'Destinations' ? 'text-blue-600 bg-blue-100' : '' }}">Destinations</a>
                <a href="{{ route('gallery') }}" class="cursor-pointer hover:text-blue-600 p-2 rounded-lg {{ $title == 'Gallery' ? 'text-blue-600 bg-blue-100' : '' }}">Gallery</a>
                <a href="{{ route('contactUs') }}" class="cursor-pointer hover:text-blue-600 p-2 rounded-lg {{ $title == 'Contact us' ? 'text-blue-600 bg-blue-100' : '' }}">Contact us</a>
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
    @yield('history')
    @yield('geography')
    @yield('cities')
    @yield('others')

    {{-- destination --}}
    @yield('destinations')
    @yield('modalImage')

    {{-- gallery --}}
    @yield('gallery')

    {{-- contactus --}}

    {{-- 404 --}}
    @yield('404')

    {{-- footer --}}
    <div class="min-h-screen w-full items-center justify-center flex bg-cover bg-[url({{ asset('assets/images/overview-bg.jpg') }})] relative py-[50px]" id="parallax">
        <div class="flex flex-col w-full justify-center items-center md:mx-[10%] mx-[5%] bg-white lg:p-10 p-5 rounded-md max-w-[1440px]">
            <div class="grid lg:grid-cols-footer md:grid-cols-1 h-fit bg-center w-full gap-3">
                <div class="flex flex-col justify-center items-center">
                    <div class="grid grid-cols-2 gap-5">
                        <img src="{{ asset('assets/images/zambales-logo.png') }}" class="w-full max-w-[120px]">
                        <img src="{{ asset('assets/images/philippine-tourism.png') }}" class="w-full max-w-[120px]">
                    </div>
                    <img src="{{ asset('assets/images/philippines.png') }}" class="w-full max-w-[500px]">
                </div>
                <div class="grid xsm:grid-cols-2 grid-cols-1 gap-3">
                    <div class="flex flex-col">
                        <p class="text-blue-500 text-[18px] font-[500] mb-3">Quick links</p>
                        <p class="font-[500]">DESTINATIONS</p>
                        <a href="" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">Best to do</a>
                        <a href="http://" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">Best to stay</a>
                        <a href="http://" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">Best to eat</a>
                        <p class="mt-3 font-[500]">GALLERY</p>
                        <a href="http://" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">Delicacies</a>
                        <a href="http://" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">Festivals</a>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-blue-500 text-[18px] font-[500] mb-3">Municipalities/Cities</p>
                        <a href="/zambales/about/#botolan" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">Botolan</a>
                        <a href="http://" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">Cabangan</a>
                        <a href="http://" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">Candelaria</a>
                        <a href="http://" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">Castillejos</a>
                        <a href="http://" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">Iba</a>
                        <a href="http://" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">Masinloc</a>
                        <a href="http://" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">Olongapo</a>
                        <a href="http://" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">Palauig</a>
                        <a href="http://" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">San Antonio</a>
                        <a href="http://" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">San Felipe</a>
                        <a href="http://" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">San Marcelino</a>
                        <a href="http://" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">San Narciso</a>
                        <a href="http://" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">Santa Cruz</a>
                        <a href="http://" class="hover:underline hover:text-blue-600 link text-gray-500 w-fit font-[300]">Subic</a>
                    </div>
                </div>
            </div>
            <div class="w-full flex-col flex justify-center items-center mt-5 pt-5 border-t-2 border-gray-100 gap-2">
                <div class="flex gap-5">
                    <a class="bi bi-facebook text-[24px] text-gray-600"></a>
                    <a class="bi bi-envelope-at-fill text-[24px] text-gray-600"></a>
                    <a class="bi bi-telephone-fill text-[24px] text-gray-600"></a>
                </div>
                <h3 class="text-center text-[14px]">Copyright © 2023 Jeffrey Lonzanida</h3>
            </div>
        </div>
    </div>
    {{-- loader --}}
    {{-- <div class="w-full min-h-screen bg-white/90 fixed top-0 z-[6] flex justify-center items-center" id="loader">
        <span class="loading loading-spinner loading-lg"></span>
    </div> --}}
    {{-- js --}}
    {{-- swiper js --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    @yield('js')
    <script src="{{ asset('assets/js/index.js') }}"></script>
</body>
</html>