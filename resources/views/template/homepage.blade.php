@extends('layout.layout')
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
        <div class="top-0 z-[1] absolute flex flex-col justify-center w-full items-center bg-black/30 h-full">
            <div class="flex flex-col justify-center items-center bg-white/20 md:p-10 p-5">
                <h1 class="text-[50px] md:text-[80px] font-bold text-white text-center underline-offset-[15px] underline">Discover Zambales</h1>
                <p class="text-[20px] md:text-[40px] font-bold text-center text-white">Wreck Diving Capital of the Philippines</p>
            </div>
        </div>
    </div>
@endsection
{{-- overview --}}
@section('overview')
    <div class="flex md:flex-row flex-col min-h-fit my-[100px] justify-center gap-5 relative"> 
        <div class="flex flex-col md:mx-[10%] mx-[5%] gap-3 max-w-[1440px]">
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
            <a href="{{ route('about') }}" class="mt-5 self-end underline text-blue-600">See more details</a>
        </div>
    </div>
@endsection