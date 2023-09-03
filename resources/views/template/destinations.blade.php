@extends('layout.layout')
{{-- destinations --}}
@section('destinations')
    <div class="w-full flex md:flex-row flex-col min-h-fit justify-center my-[100px] gap-5 relative pt-[30px]" id="imagesParent"> 
        <div class="flex flex-col md:mx-[10%] mx-[5%] gap-3 max-w-[1440px] overflow-x-auto">
            <h1 class="text-bold text-[24px] font-[900]">ESSENTIAL ZAMBALES</h1>
            <div class="bg-blue-500 h-[5px] w-[200px]"></div>
            {{-- DO --}}
            <div class="mt-10 flex lg:flex-row flex-col gap-5">
                <div class="w-full lg:w-[25%]">
                    <h1 class="text-bold text-[24px] font-[900]">DO</h1>
                    <p>Places to see, ways to wander, and signature experiences.</p>
                </div>
                <div class="w-full lg:w-[75%]">
                    @php
                        $myItems = $myDo
                    @endphp
                    @include('partials.__swiperSlide')
                </div>
            </div>
            {{-- stay --}}
            <div class="mt-10 flex lg:flex-row flex-col gap-5">
                <div class="w-full lg:w-[25%]">
                    <h1 class="text-bold text-[24px] font-[900]">STAY</h1>
                    <p>A mix of the charming, modern, and tried and true.</p>
                </div>
                <div class="w-full lg:w-[75%]">
                    @php
                        $myItems = $myStay
                    @endphp
                    @include('partials.__swiperSlide')
                </div>
            </div>
            {{-- eat --}}
            <div class="mt-10 flex lg:flex-row flex-col gap-5">
                <div class="w-full lg:w-[25%]">
                    <h1 class="text-bold text-[24px] font-[900]">EAT</h1>
                    <p>Can't-miss spots to dine, drink, and feast.</p>
                </div>
                <div class="w-full lg:w-[75%]">
                    @php
                        $myItems = $myEat
                    @endphp
                    @include('partials.__swiperSlide')
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- destination modal --}}
@section('modalImage')
    <div class="w-full h-screen bg-black/30 fixed top-0 z-[5] hidden justify-center items-center p-5" id="imageModal">
        <img src="" alt="" id="ModalImage" class="w-full h-full object-contain">
    </div>
@endsection
{{-- js script --}}
@section('js')
    {{-- swiper --}}
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    {{-- modal image --}}
    <script src="{{ asset('assets/js/modalImage.js') }}"></script>
@endsection
{{-- review modal --}}
@section('reviewDestinations')
    @include('partials.__reviewModal')
@endsection