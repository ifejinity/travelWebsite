<div class="lg:flex-row flex-col w-full h-screen fixed bg-white z-[5] top-0 hidden overflow-y-scroll" id="modalReview">
    <div class="flex flex-col gap-3 lg:w-[65%] w-full bg-black justify-center items-center p-5 relative">
        <button class="btn bi bi-x-lg rounded-full absolute top-[24px] left-[24px] bg-white/50 border-none" id="hideReviewModal"></button>
        <img src="" alt="" class="w-full h-full object-contain" id="reviewImage">
    </div>
    <div class="flex flex-col gap-3 lg:w-[35%] w-full lg:overflow-y-scroll relative h-full">
        <div class="shadow-md p-5 z-[2] bg-white" id="description"></div>
        <div class="p-5 flex-col flex" id="reviews">
            {{-- reviews go here --}}
        </div>
        <form action="{{ route('setReview') }}" method="POST" class="shadow-lg p-5 sticky bottom-0 z-[2] w-full flex gap-2 flex-col bg-white mt-auto" id="reviewForm">
            @csrf
            <input type="hidden" name="content_id" id="reviewId">
            <div class="rating self-end mb-1">
                <input type="radio" name="score" value=1 class="mask mask-star bg-orange-400 radio-sm" checked/>
                <input type="radio" name="score" value=2 class="mask mask-star bg-orange-400 radio-sm" />
                <input type="radio" name="score" value=3 class="mask mask-star bg-orange-400 radio-sm" />
                <input type="radio" name="score" value=4 class="mask mask-star bg-orange-400 radio-sm" />
                <input type="radio" name="score" value=5 class="mask mask-star bg-orange-400 radio-sm" />
            </div>
            @error('score')
                <p class="text-[14px] text-red-500">{{ $message }}</p>
            @enderror
            <input name="subject" type="text" placeholder="Subject" class="input w-full text-sm bg-gray-200" />
            @error('subject')
                <p class="text-[14px] text-red-500">{{ $message }}</p>
            @enderror
            <div class="relative w-full">
                <textarea name="message" class="textarea resize-none bg-gray-200 w-full" placeholder="Write a message.."></textarea>
                <button type="submit" class="btn bg-blue-500 hover:bg-blue-400 text-white self-end disabled:bg-blue-500 disabled:text-white absolute bottom-3 right-1 btn-sm bi bi-send-fill" id="reviewSend"></button>
            </div>
            @error('message')
                <p class="text-[14px] text-red-500">{{ $message }}</p>
            @enderror
        </form>
    </div>
</div>