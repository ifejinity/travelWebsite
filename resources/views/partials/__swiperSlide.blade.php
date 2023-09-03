<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        @foreach ($myItems as $item)
        <div class="swiper-slide pb-10 w-fit">
            <div class="card card-compact max-w-[350px] rounded-none">
                <figure>
                    <img src="{{ $item['type'] == 'delicacies' ? asset('assets/images/delicacies/'.$item['image'])
                            : ($item['type'] == 'festivals' ? asset('assets/images/festivals/'.$item['image'])
                            : asset('assets/images/destinations/'.$item['image'])) }}"
                        alt=""
                        class="w-full max-w-[350px] h-[250px] object-cover modalItems"
                    />
                </figure>
                <div class="card-body">
                    <div class="flex justify-between">
                        {{-- print the total review --}}
                        <p class="">{{$myReviews->where('content_id', $item['content_id'])->count() }} Reviews</p>
                        {{-- get the score of content --}}
                        <p class="text-end">{{$score = number_format($myReviews->where('content_id', $item['content_id'])->avg('score'), 2) ?? '0' }}/5</p>
                    </div>
                    <div class="card-actions justify-between items-center">
                        <button class="btn btn-sm normal-case review" value="{{ $item['content_id'] }}">Review</button>
                        <div class="rating">
                            @for ($i = 1; $i <= 5; $i++)
                                <input
                                    type="radio"
                                    name="rating-{{ $item['content_id'] }}"
                                    class="mask mask-star radio-sm {{ $score >= $i ? 'bg-orange-400' : 'bg-gray-300' }}"
                                    disabled
                                />
                            @endfor
                        </div>
                    </div>
                    <h2 class="card-title">{{ $item['title'] }}</h2>
                    <p>{{ $item['description'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>