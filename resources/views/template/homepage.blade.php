@extends('layout.layout')
{{-- header --}}
@section('homepageHeader')
    <div class="flex justify-between items-center py-8 px-[5%] fixed z-[2] w-full top-0 left-0 bg-white/50 backdrop-blur-sm">
        <div>
            <p>DisoverZambales</p>
        </div>
        <div>
            {{-- desktop nav --}}
            <ul class="gap-5 md:flex hidden font-[500]">
                <li>Homepage</li>
                <li>About</li>
                <li>Destinations</li>
                <li>Gallery</li>
                <li>Contact us</li>
            </ul>
            {{-- mobile nav --}}
            <ul class="gap-10 md:hidden hidden fixed flex-col top-0 right-0 p-5 min-h-screen w-[250px] bg-white pt-[50px]" id="mobileNav">
                <li>Homepage</li>
                <li>About</li>
                <li>Destinations</li>
                <li>Gallery</li>
                <li>Contact us</li>
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
@endsection
{{-- hero --}}
@section('hero')
    <div class="min-h-screen w-full relative" id="hero">
        <div class="swiper mySwiper cursor-grab">
            <div class="swiper-wrapper w-full h-screen relative">
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/hero-8.jpg') }}" class="w-full h-full object-cover bg-center"/>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/hero-2.jpg') }}" class="w-full h-full object-cover bg-center"/>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/hero-1.png') }}" class="w-full h-full object-cover bg-center"/>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/hero-5.jpg') }}" class="w-full h-full object-cover bg-center"/>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/hero-7.jpg') }}" class="w-full h-full object-cover bg-center"/>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/hero-6.jpg') }}" class="w-full h-full object-cover bg-center"/>
                </div>
            </div>
        </div>
        <div class="top-[40%] z-[1] absolute flex flex-col justify-center w-full items-center">
            <div class="flex flex-col justify-center items-center bg-white/20 md:p-10 p-5">
                <h1 class="text-[50px] md:text-[80px] font-bold text-white text-center underline-offset-[15px] underline">Discover Zambales</h1>
                <p class="text-[20px] md:text-[40px] font-bold text-center text-white">Wreck Diving Capital of the Philippines</p>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1693384394 z-[1]">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>
@endsection
{{-- overview --}}
@section('overview')
    <div class="flex md:flex-row flex-col min-h-fit my-[100px] gap-5 relative"> 
        {{-- <img src="{{ asset('assets/images/map-of-zambales-modern-outline-high-detailed-philippines-map-illustration-design-template-free-vector.jpg') }}" alt="zambales_map" class="absolute z-[-1] opacity-[.1] right-0"> --}}
        <div class="flex flex-col md:mx-[10%] mx-[5%] gap-3">
            {{-- introduction --}}
            <h1 class="text-bold text-[24px] font-[900]">EXPLORE ZAMBALES</h1>
            <div class="bg-blue-500 h-[5px] w-[200px]"></div>
            <p class="indent-10">Zambales as the second largest province in Central Luzon, which covers an area of 361, 103 hectares, shares common boundaries with Pangasinan on the North, Tarlac and Pampanga on the East and Bataan on the South. The entire stretch of the Province on the west is rimmed by the crystal clear water of vast China Sea. The topography of the province is generally irregular, with the coastal plains and valleys stretching from Lingayen Gulf down south towards Subic Bay along the western coast and further towards a 175 kms. stretch of shoreline.</p>
            {{-- brief history --}}
            <h1 class="text-bold text-[24px] font-[900] mt-10">BRIEF HISTORY</h1>
            <div class="bg-blue-500 h-[5px] w-[200px]"></div>
            <p class="indent-10">The province of Zambales was formally organized in 1572 after its exploration by Don Juan de Salcedo, and originally included the towns of Alaminos, Bolinao, San Isidro, Infanta, Anda, Bani, and Agno, which now belong to Pangasinan. Masinloc, one of its earliest municipalities organized in 1607, was its former capital. Its earliest inhabitants are the Malays from the Celebes Sea and the kinky haired Negritos and Aetas, which are up to now present in the province, and were then referred to as “Sambali” or “Zambals.” The name of the province was derived from the Malay word “Samba” meaning to worship as the Spaniards found the its inhabitants worshipping their “Anitos.”</p>
            <h1 class="text-bold text-[24px] font-[900] mt-10">FESTIVALS AND ATTRACTIONS</h1>
            <div class="bg-blue-500 h-[5px] w-[200px]"></div>
            <p>Feast of the Ina Poonbato (Botolan) – 24 January Singkamas Festival and Town Fiesta (San Marcelino) – 3rd week of February Town Fiest (San Narciso) – 19-25 February Pundakit Festival of the Arts (San Felipe) – February-July Zambales Multi Sports Festival and Senakulo – 3rd week of March Good Friday (Castillejos) – March or April Foundation Day Celebration (Palauig) – 10 April Grand Fiesta (Cabangan) – 21-25 April Zambales Mango Festival – March or April Paynawen Festival (Iba) – 3rd Tuesday of April Sibit-Sibit Festival (Olongapo) – 28-30 April Marunggay Festival and Town Fiesta (San Antonio) – last week of April Domorokdok Festival (Botolan) – 04 May Laruk Laruk Festival (Candelaria) – last week of October Ulo ng Apo Festival/ Mardi Gras (Olongapo) – 4th Friday/Saturday of October Binabayan Festival and Town Fiesta (Masinloc) – 30 November Kalgawan Ha Mayanan (Candelaria) – 29-30 December Mt. Pinatubo; Mt. Tapulao; Anawangin Cove; Potipot Island; Capones Island and Lighthouse</p>
        </div>
    </div>
@endsection
{{-- footer --}}
@section('footer')
    <div class="min-h-screen w-full items-center flex bg-cover bg-[url({{ asset('assets/images/overview-bg.jpg') }})] relative">
        <div class="custom-shape-divider-top-1693392761 z-[1]">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V6c0,21.6,291,111.46,741,110.26,445.39,3.6,459-88.3,459-110.26V0Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="grid grid-cols-3 h-fit bg-center w-full md:mx-[10%] mx-[5%] bg-white p-5 shadow-lg rounded-sm">
            <div>
                <p class="text-blue-500 text-[18px] font-[500]">Jeffrey Lonzanida</p>
            </div>
            <div>
                <p class="text-blue-500 text-[18px] font-[500]">Links</p>
            </div>
            <div>
                <p class="text-blue-500 text-[18px] font-[500]">Municipality</p>
            </div>
        </div>
    </div>
@endsection