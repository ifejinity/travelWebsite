@extends('layout.layout')
@section('gallery')
    <div class="flex md:flex-row flex-col min-h-fit justify-center my-[100px] gap-5 relative pt-[30px]" id="gallery"> 
        <div class="flex flex-col md:mx-[10%] mx-[5%] gap-3 max-w-[1440px]">
            <h1 class="text-bold text-[24px] font-[900]">HIGHLIGHTS ZAMBALES</h1>
            <div class="bg-blue-500 h-[5px] w-[200px]"></div>
            {{-- delicacies --}}
            <div class="mt-10 flex lg:flex-row flex-col gap-5" id="gallery">
                <div class="w-full lg:w-[25%]">
                    <h1 class="text-bold text-[24px] font-[900]">DELICACIES</h1>
                    <p>Consistent with the rest of the Philippines, the Province of Zambales thrives on the more basic satisfiers of the good life.</p>
                </div>
                <div class="w-full lg:w-[75%]">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/delicacies/san-felipe-bagnet.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover imgDestination"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">San Felipe - Bagnet</h2>
                                        <p>This is Zambales’ answer to Ilocos’ Pork Chicharon. Meticulously prepared by the locals of San Felipe, this Zambales version of chicharon is crispy and too delicious to describe. Matched perfectly with a bowl of chili and vinegar, a bowl of hot steaming rice and local pinakbet, this dish will truly give one a taste of bliss. Bagnet is available at the San Felipe Public Market, best bought from 8 till 10 in the morning everyday. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/delicacies/zambales-mango.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover imgDestination"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Zambales Mangoes</h2>
                                        <p>Perhaps the most famous delight of Zambales is its sweet, sumptuous mangoes! Known for its incomparable sweetness and its taste beyond words, the DInamulag variety is the most popular among Zambales mango varieties. Having the provincial festival named after the Dinamulag variety, Zambales mangoes are one of the thousand reasons why people keep coming back to the province. Aside from bringing home a bagful of mangoes, Zambales mangoes are also transformed into delectable desserts, intriguing cocktail drinks and fresh mango thirst quenchers. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/delicacies/ginipang.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover imgDestination"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Ginipang of Sta. Cruz </h2>
                                        <p>Ginipa is a native delicacy of the northernmost town of Zambales, made of conspicuously dried rice grains flavored with a uniquely sweet concoction to taste. With its prices pegged affordably, this is a favorite pasalubong treat of visiting tourists. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/delicacies/pastillas.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover imgDestination"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Pastillas </h2>
                                        <p>A lot of places in the Philippines claim to produce the best pastilles in the country but wait till you get a taste of the carabao milk pastillas from the municipalities of Iba and Palauig. Produced by small households, Zambales pastilles are made from fresh carabao milk and delicately processed by womensfolk, wrapped in clean white Japanese paper and sealed in simple perfection. Once you have taken a bite of the Zambales pastille, you will realize that this is THE pastilles that you have been looking for all along. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/delicacies/linga.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover imgDestination"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Botolan - Linga</h2>
                                        <p>Popular dubbed by locals as linga, this is actually sesame candies. Zambales is one the very few producers of sesame seeds and Zambalenos in Botolan have created their own adaptation of sesame seeds at its ideal sweetest. Linga is always nutritiously preferred over regular sweet candies. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            {{-- festivals --}}
            <div class="mt-10 flex lg:flex-row flex-col gap-5" id="gallery">
                <div class="w-full lg:w-[25%]">
                    <h1 class="text-bold text-[24px] font-[900]">FESTIVALS</h1>
                    <p>Zambales also plays host to a number of festivals celebrated throughout the year. Want to join these festivities? Take a look at this list to find out more about the popular festivals in Zambales, Philippines.</p>
                </div>
                <div class="w-full lg:w-[75%]">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/festivals/dinamulag.webp') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover imgDestination"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Dinamulag Festival </h2>
                                        <p>This is Zambales’ answer to Ilocos’ Pork Chicharon. Meticulously prepared by the locals of San Felipe, this Zambales version of chicharon is crispy and too delicious to describe. Matched perfectly with a bowl of chili and vinegar, a bowl of hot steaming rice and local pinakbet, this dish will truly give one a taste of bliss. Bagnet is available at the San Felipe Public Market, best bought from 8 till 10 in the morning everyday. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/festivals/sibit-sibit.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover imgDestination"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Sibit-Sibit Summer Festival</h2>
                                        <p> The name Sibit-Sibit was derived from the name of small paddle-driven bancas used for fishing during the early days when Brgy. Barreto was yet called Sitio Maquinaya. During fiestas, fisherfolk hold banca race using pure human strength to win the competition. Today, the festival competition includes motorized banca race and sail boat competition to add fun and excitement to the activity. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/festivals/paynauen.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover imgDestination"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Paynauen ‘Duyan’ Festival</h2>
                                        <p>Paynauen ‘Duyan’ Festival is held every April 25 – May 1 in Iba, Zambales. It commemorates the provincial capital’s founding anniversary (founded in 1611) traces its origin from a Zambal word which means rest or pahingahan – the ancient name of Iba before the Spanish conquistadores founded the village on the shore of the Bancal River in 1611. The festival features photo competition and exhibit, sand sculpture competition, skate boarding, 2-cock derby, carabao race, beauty pageant, kite flying, banca race, boxing tournament, street dancing / Duyan Parade, among other activities.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/festivals/domorokdok.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover imgDestination"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Domorokdok Festival</h2>
                                        <p>Domorokdok Festival May 3 & 4 in Botolan.  This Festival is fast becoming one of the most popular in Zambales, also incorporating “Miss Botolan” and “Miss Botolan Tourism” beauty quests, this is a 2 day spectacular of Street Dancing, Bands, Beauty contests all culminating in the competition of the “Best and most colorful Street Dancing group” in the Municipality.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/festivals/grand-mardi-gras.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover imgDestination"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Olongapo Grand Mardi Gras</h2>
                                        <p>Olongapo City’s version of the German worldwide phenomena “Oktoberfest” took place this weekend. As the signature event of the city (together with the City Fiesta which takes place every December), the Olongapo City Mardi Gras was a three-day event celebrating the best in musical and dance attractions by featuring some of the most acclaimed bands, performers and entertainment personalities in the country.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/festivals/karakoa.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover imgDestination"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Subic Karakoa Festival</h2>
                                        <p>Subic Karakoa Festival Date TBA Venue Subic Bay Freeport, Zambales Description In honor of the warship Karakoa, a warship built by the Pintados tribe, SBMA sets the stage for a unique festival filled with colorful floats, parade and motorcade called Subic Karakoa Festival. It is meant to complement the annual Philippine Motorsports Festival and the Karakoa Food Festival.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- destination modal --}}
@section('modalImage')
    <div class="w-full min-h-screen bg-black/30 fixed top-0 z-[5] hidden justify-center items-center" id="imageModal">
        <img src="" alt="" id="ModalImage" class="w-full lg:max-w-[60%] max-w-[90%]">
    </div>
@endsection
{{-- js script --}}
@section('js')
    <script>
        // swiper destinations
        var swiperDo = new Swiper("#gallery .mySwiper", {
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
        // show the destination modal
        const destination = document.querySelector("#gallery");
        const destinationModal = document.querySelector("#imageModal");
        const destinationModalImage = document.querySelector("#ModalImage");
        // show destination modal image
        destination.addEventListener('click', (event) => {
            if(event.target.classList.contains('imgDestination')) {
                const imgSrc = event.target.getAttribute('src');
                destinationModal.classList.replace('hidden', 'flex');
                destinationModalImage.setAttribute('src', imgSrc);
            }
        })
        // hide destination modal image
        destinationModal.addEventListener('click', () => {
            destinationModal.classList.replace('flex', 'hidden');
        })
    </script>
@endsection