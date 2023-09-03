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
    <div class="w-full h-screen bg-black/30 fixed top-0 z-[5] hidden justify-center items-center" id="imageModal">
        <img src="" alt="" id="ModalImage" class="w-full lg:max-w-[60%] max-w-[90%]">
    </div>
@endsection
{{-- js script --}}
@section('js')
    {{-- review response success --}}
    @if (session('success'))
        <script>
            Toastify({
                text: "Review Submitted!",
                className: "info",
                style: {
                    background: "#22c55e",
                }
            }).showToast();
        </script>
    @endif
    {{-- swiper --}}
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    {{-- modal image --}}
    <script src="{{ asset('assets/js/modalImage.js') }}"></script>
    {{-- get and set review --}}
    <script>
        $(document).ready(function () {
            // event delegation for opening the review modal
            const reviewParent = document.querySelector("#imagesParent");
            reviewParent.addEventListener("click", (event) => {
                const id = event.target.value;
                if(event.target.classList.contains('review')) {
                    getReview(id);
                }
            });
            // get the score per review
            function getScore(itemScore){
                let myScore = '';
                for(x = 1; x <= 5; x++) {
                    if(x == itemScore) {
                        myScore += `<input type="radio" class="mask mask-star radio-sm bg-orange-400" disabled checked />`
                    }
                    else {
                        myScore += `<input type="radio" class="mask mask-star radio-sm bg-orange-400" disabled />`
                    }
                }
                return myScore;
            }
            // get image src
            function getImageSrc(type, image) {
                let imageSrc = "";
                type == "delicacies" ? imageSrc = "assets/images/delicacies/" + image
                : type == "festivals" ? imageSrc = "assets/images/festivals/" + image
                : imageSrc = "assets/images/destinations/" + image;
                return `{{asset('${imageSrc}')}}`;
            }
            // get review function
            function getReview(id) {
                $.ajax({
                    type: "POST",
                    url: "{{ route('getReview') }}",
                    data: {id:id},
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        console.log(response);
                        if(response.status == 200) {
                            // get image src of clicked content review
                            let imageSrc = getImageSrc(response.myContent[0].type, response.myContent[0].image);
                            $('#reviewImage').attr('src', imageSrc);
                            // set content_id for review
                            $("#reviewId").val(id);
                            // show modal review
                            $('#modalReview').removeClass('hidden').addClass('flex');
                            // print title and description from backend to front end
                            $("#description").html(`
                                <h1 class="text-[18px] font-[600]">${response.myContent[0].title}</h1>
                                <p class="font-[300]">${response.myContent[0].description}</p>
                            `);
                            // loop to print all reviews on specific content
                            for (let x = 0; x < response.myReviews.length; x++) {
                                // get the score per review
                                let score = getScore(response.myReviews[x].score);
                                $("#reviews").append(`
                                    <div class="py-5 border-b-[1px] border-gray-200">
                                        <div class="flex justify-between">
                                            <div>
                                                <p>${response.myReviews[x].subject}</p>
                                                <p class="text-[14px]">${response.myReviews[x].message}</p>
                                            </div>
                                            <div class="score rating">
                                                ${score}
                                            </div>
                                        </div>
                                    </div>
                                `);
                            } 
                            if(response.myReviews.length == 0) {
                                $("#reviews").append(`<p class="text-center text-[20px] text-gray-300">No reviews</p>`);
                            }
                        }
                    }
                });
            }
            // hide review modal
            $('#hideReviewModal').click(function () { 
                $('#modalReview').removeClass('flex').addClass('hidden');
                $("#description").html("");
                $("#reviews").html("");
            });
        });
    </script>
@endsection
{{-- review modal --}}
@section('reviewDestinations')
    @include('partials.__reviewModal')
@endsection