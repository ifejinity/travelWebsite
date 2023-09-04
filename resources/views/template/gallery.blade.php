@extends('layout.layout')
{{-- gallery --}}
@section('gallery')
    <div class="flex md:flex-row flex-col min-h-fit justify-center my-[100px] gap-5 relative pt-[30px]" id="imagesParent"> 
        <div class="flex flex-col md:mx-[10%] mx-[5%] gap-3 max-w-[1440px] overflow-x-auto">
            <h1 class="text-bold text-[24px] font-[900]">HIGHLIGHTS ZAMBALES</h1>
            <div class="bg-blue-500 h-[5px] w-[200px]"></div>
            {{-- delicacies --}}
            <div class="mt-10 flex lg:flex-row flex-col gap-5" id="delicacies">
                <div class="w-full lg:w-[25%]">
                    <h1 class="text-bold text-[24px] font-[900]">DELICACIES</h1>
                    <p>Consistent with the rest of the Philippines, the Province of Zambales thrives on the more basic satisfiers of the good life.</p>
                </div>
                <div class="w-full lg:w-[75%]">
                    @php
                        $myItems = $myDelicacies
                    @endphp
                    @include('partials.__swiperSlide')
                </div>
            </div>
            {{-- festivals --}}
            <div class="mt-10 flex lg:flex-row flex-col gap-5" id="festivals">
                <div class="w-full lg:w-[25%]">
                    <h1 class="text-bold text-[24px] font-[900]">FESTIVALS</h1>
                    <p>Zambales also plays host to a number of festivals celebrated throughout the year. Want to join these festivities? Take a look at this list to find out more about the popular festivals in Zambales, Philippines.</p>
                </div>
                <div class="w-full lg:w-[75%]">
                    @php
                        $myItems = $myFestivals
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
{{-- gallery review modal --}}
@section('reviewGallery')
    @include('partials.__reviewModal')
@endsection
{{-- js script --}}
@section('js')
    {{-- swiper --}}
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    {{-- modal image --}}
    <script src="{{ asset('assets/js/modalImage.js') }}"></script>
@endsection