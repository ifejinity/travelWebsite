@extends('layout.layout')
{{-- hero --}}
@section('herodestinations')
    <div class="w-full h-screen relative mb-[150px]">
        <div class="absolute w-full min-h-screen flex justify-center items-end bottom-[-100px]">
            <div class="bg-white w-full max-w-[1000px] h-[600px] shadow-lg mx-[5%] rounded-lg p-10">

            </div>
        </div>
        <video id="background-video" autoplay loop muted poster="" class="w-full h-screen object-cover">
            <source src="{{ asset('assets/videos/aboutvideo.mp4') }}" title="YouTube video player" frameborder="0" allow="accelerometer" type="video/mp4">
        </video>
    </div>
@endsection
{{-- destinations --}}
@section('destinations')
    <div class="flex md:flex-row flex-col min-h-fit justify-center my-[100px] gap-5 relative"> 
        <div class="flex flex-col md:mx-[10%] mx-[5%] gap-3 max-w-[1440px]">
            <h1 class="text-bold text-[24px] font-[900]">ESSENTIAL ZAMBALES</h1>
            <div class="bg-blue-500 h-[5px] w-[200px]"></div>
            {{-- DO --}}
            <div class="mt-10 flex lg:flex-row flex-col gap-5" id="best">
                <div class="w-full lg:w-[25%]">
                    <h1 class="text-bold text-[24px] font-[900]">DO</h1>
                    <p>Places to see, ways to wander, and signature experiences.</p>
                </div>
                <div class="w-full lg:w-[75%]">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Camp at Anawangin Cove</h2>
                                        <p>Anawangin Cove is one of the most popular camping spots in Zambales. The sheltered bay boasts and ash-colored beach due to the Mt. Pinatubo volcanic eruption. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/candelaria.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Unwind at Nagsasa Cove</h2>
                                        <p>Similar to Anawangin Cove, Nagsasa Cove is also carpeted with ash-colored sand and surrounded by pine-like Agoho trees. It has all the good things Anawangin is known for, but this one has a more relaxed atmosphere. Hike up the hill to enjoy the breathtaking view. From there, you should see the aqua blue water encircled with nature’s greenery in all its glory.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Take Photos at Capones Island</h2>
                                        <p>The island was previously known as “Isla de Gran Capon” during the Spanish era. It’s covered in rocks on one end and white sand on the other. It’s a great attraction for surfers and divers alike. The island is legendary for its lighthouse which was built in 1890, with Filipino’s bare hands. The famous landmark sits atop the sharp cliff. The tower is perfect for photoshoots since it displays an inviting cinematic scene. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Spend a Weekend at Crystal Beach Resort</h2>
                                        <p>Crystal Beach Resort offers a heavenly stay where nature and comfort is wrapped into one. It is conveniently located in San Narciso, Zambales. It’s a favorite hangout place for thrill-seekers, especially for surfing enthusiasts and beginners who yearn to ride big waves near the metro. The resort offers a variety of lodging options, from air-conditioned rooms to glamping tents.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Play at Inflatable Island Subic</h2>
                                        <p>Inflatable Island is essentially a big playground set above the open sea in Subic built for kids and kids-at-heart. From shaky bridges to the crowd favorite Tarzan swing, you’ll never run out of obstacles here. The biggest attraction yet? The gigantic unicorn that is just cuteness overload!</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Hike Mt. Pinatubo</h2>
                                        <p>Mt. Pinatubo is one of the top attractions in Central Luzon, covering not just Zambales but Pampanga and Tarlac as well. This active volcano can be explored by trekking and by riding 4x4 vehicles along its bumpy lahar roads. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Escape to Talisayen Cove</h2>
                                        <p>Mt. Pinatubo is one of the top attractions in Central Luzon, covering not just Zambales but Pampanga and Tarlac as well. This active volcano can be explored by trekking and by riding 4x4 vehicles along its bumpy lahar roads. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Stop Over at Camara Island</h2>
                                        <p>It’s a small island that’s no bigger than the size of a football field. It may be humble in size, but it has an astonishing view of Pundaquit and its scenic mountains. Overnight camping here is prohibited, and drinking isn’t allowed. Since it’s a relatively small island, the most exciting activity you can do here is snorkeling. The island is perfect as the first stop to your island-hopping tour in Zambales. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Ride Horses at El Kabayo Stables</h2>
                                        <p>El Kabayo is arguably the best place to learn and go horseback riding in the country. The establishment is tucked in Subic Bay Freeport Zone, Zambales and is home to healthy and friendly horses. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Harvest Mangoes at Rosa Farms</h2>
                                        <p>Zambales is home to the Philippine Carabao Mango. Pick and savor on some sweet mangoes at Rosa Farms. It’s a 12.5-hectare mango orchard situated along the National Highway in San Marcelino-San Antonio Boundary, Zambales. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Learn History at Ramon Magsaysay Museum</h2>
                                        <p>Go on a side trip and experience Zambales’ historical side with the beloved former Philippine President, Ramon Magsaysay’s ancestral house, in the town of Castillejos. The house was restored and converted into a museum back in 1990. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Visit Animals at Botolan Wildlife Farm</h2>
                                        <p>The animal ranch stretches to a 55,000-sqm area. The place serves as a habitat for a wide range of exotic animals and plants around the world.  You’ll find rare species of animals there, like the Brahminy Kite (a now endangered bird), adorable owls, colorful birds, the Philippines’ Brown Deer, and a Siberian tiger among others.</p>
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
            {{-- stay --}}
            <div class="mt-10 flex lg:flex-row flex-col gap-5" id="best">
                <div class="w-full lg:w-[25%]">
                    <h1 class="text-bold text-[24px] font-[900]">STAY</h1>
                    <p>A mix of the charming, modern, and tried and true.</p>
                </div>
                <div class="w-full lg:w-[75%]">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Camp at Anawangin Cove</h2>
                                        <p>Anawangin Cove is one of the most popular camping spots in Zambales. The sheltered bay boasts and ash-colored beach due to the Mt. Pinatubo volcanic eruption. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/candelaria.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Unwind at Nagsasa Cove</h2>
                                        <p>Similar to Anawangin Cove, Nagsasa Cove is also carpeted with ash-colored sand and surrounded by pine-like Agoho trees. It has all the good things Anawangin is known for, but this one has a more relaxed atmosphere. Hike up the hill to enjoy the breathtaking view. From there, you should see the aqua blue water encircled with nature’s greenery in all its glory.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Take Photos at Capones Island</h2>
                                        <p>The island was previously known as “Isla de Gran Capon” during the Spanish era. It’s covered in rocks on one end and white sand on the other. It’s a great attraction for surfers and divers alike. The island is legendary for its lighthouse which was built in 1890, with Filipino’s bare hands. The famous landmark sits atop the sharp cliff. The tower is perfect for photoshoots since it displays an inviting cinematic scene. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Spend a Weekend at Crystal Beach Resort</h2>
                                        <p>Crystal Beach Resort offers a heavenly stay where nature and comfort is wrapped into one. It is conveniently located in San Narciso, Zambales. It’s a favorite hangout place for thrill-seekers, especially for surfing enthusiasts and beginners who yearn to ride big waves near the metro. The resort offers a variety of lodging options, from air-conditioned rooms to glamping tents.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Play at Inflatable Island Subic</h2>
                                        <p>Inflatable Island is essentially a big playground set above the open sea in Subic built for kids and kids-at-heart. From shaky bridges to the crowd favorite Tarzan swing, you’ll never run out of obstacles here. The biggest attraction yet? The gigantic unicorn that is just cuteness overload!</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Hike Mt. Pinatubo</h2>
                                        <p>Mt. Pinatubo is one of the top attractions in Central Luzon, covering not just Zambales but Pampanga and Tarlac as well. This active volcano can be explored by trekking and by riding 4x4 vehicles along its bumpy lahar roads. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Escape to Talisayen Cove</h2>
                                        <p>Mt. Pinatubo is one of the top attractions in Central Luzon, covering not just Zambales but Pampanga and Tarlac as well. This active volcano can be explored by trekking and by riding 4x4 vehicles along its bumpy lahar roads. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Stop Over at Camara Island</h2>
                                        <p>It’s a small island that’s no bigger than the size of a football field. It may be humble in size, but it has an astonishing view of Pundaquit and its scenic mountains. Overnight camping here is prohibited, and drinking isn’t allowed. Since it’s a relatively small island, the most exciting activity you can do here is snorkeling. The island is perfect as the first stop to your island-hopping tour in Zambales. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Ride Horses at El Kabayo Stables</h2>
                                        <p>El Kabayo is arguably the best place to learn and go horseback riding in the country. The establishment is tucked in Subic Bay Freeport Zone, Zambales and is home to healthy and friendly horses. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Harvest Mangoes at Rosa Farms</h2>
                                        <p>Zambales is home to the Philippine Carabao Mango. Pick and savor on some sweet mangoes at Rosa Farms. It’s a 12.5-hectare mango orchard situated along the National Highway in San Marcelino-San Antonio Boundary, Zambales. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Learn History at Ramon Magsaysay Museum</h2>
                                        <p>Go on a side trip and experience Zambales’ historical side with the beloved former Philippine President, Ramon Magsaysay’s ancestral house, in the town of Castillejos. The house was restored and converted into a museum back in 1990. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Visit Animals at Botolan Wildlife Farm</h2>
                                        <p>The animal ranch stretches to a 55,000-sqm area. The place serves as a habitat for a wide range of exotic animals and plants around the world.  You’ll find rare species of animals there, like the Brahminy Kite (a now endangered bird), adorable owls, colorful birds, the Philippines’ Brown Deer, and a Siberian tiger among others.</p>
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
            {{-- eat --}}
            <div class="mt-10 flex lg:flex-row flex-col gap-5" id="best">
                <div class="w-full lg:w-[25%]">
                    <h1 class="text-bold text-[24px] font-[900]">EAT</h1>
                    <p>Can't-miss spots to dine, drink, and feast.</p>
                </div>
                <div class="w-full lg:w-[75%]">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Camp at Anawangin Cove</h2>
                                        <p>Anawangin Cove is one of the most popular camping spots in Zambales. The sheltered bay boasts and ash-colored beach due to the Mt. Pinatubo volcanic eruption. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/candelaria.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Unwind at Nagsasa Cove</h2>
                                        <p>Similar to Anawangin Cove, Nagsasa Cove is also carpeted with ash-colored sand and surrounded by pine-like Agoho trees. It has all the good things Anawangin is known for, but this one has a more relaxed atmosphere. Hike up the hill to enjoy the breathtaking view. From there, you should see the aqua blue water encircled with nature’s greenery in all its glory.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Take Photos at Capones Island</h2>
                                        <p>The island was previously known as “Isla de Gran Capon” during the Spanish era. It’s covered in rocks on one end and white sand on the other. It’s a great attraction for surfers and divers alike. The island is legendary for its lighthouse which was built in 1890, with Filipino’s bare hands. The famous landmark sits atop the sharp cliff. The tower is perfect for photoshoots since it displays an inviting cinematic scene. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Spend a Weekend at Crystal Beach Resort</h2>
                                        <p>Crystal Beach Resort offers a heavenly stay where nature and comfort is wrapped into one. It is conveniently located in San Narciso, Zambales. It’s a favorite hangout place for thrill-seekers, especially for surfing enthusiasts and beginners who yearn to ride big waves near the metro. The resort offers a variety of lodging options, from air-conditioned rooms to glamping tents.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Play at Inflatable Island Subic</h2>
                                        <p>Inflatable Island is essentially a big playground set above the open sea in Subic built for kids and kids-at-heart. From shaky bridges to the crowd favorite Tarzan swing, you’ll never run out of obstacles here. The biggest attraction yet? The gigantic unicorn that is just cuteness overload!</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Hike Mt. Pinatubo</h2>
                                        <p>Mt. Pinatubo is one of the top attractions in Central Luzon, covering not just Zambales but Pampanga and Tarlac as well. This active volcano can be explored by trekking and by riding 4x4 vehicles along its bumpy lahar roads. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Escape to Talisayen Cove</h2>
                                        <p>Mt. Pinatubo is one of the top attractions in Central Luzon, covering not just Zambales but Pampanga and Tarlac as well. This active volcano can be explored by trekking and by riding 4x4 vehicles along its bumpy lahar roads. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Stop Over at Camara Island</h2>
                                        <p>It’s a small island that’s no bigger than the size of a football field. It may be humble in size, but it has an astonishing view of Pundaquit and its scenic mountains. Overnight camping here is prohibited, and drinking isn’t allowed. Since it’s a relatively small island, the most exciting activity you can do here is snorkeling. The island is perfect as the first stop to your island-hopping tour in Zambales. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Ride Horses at El Kabayo Stables</h2>
                                        <p>El Kabayo is arguably the best place to learn and go horseback riding in the country. The establishment is tucked in Subic Bay Freeport Zone, Zambales and is home to healthy and friendly horses. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Harvest Mangoes at Rosa Farms</h2>
                                        <p>Zambales is home to the Philippine Carabao Mango. Pick and savor on some sweet mangoes at Rosa Farms. It’s a 12.5-hectare mango orchard situated along the National Highway in San Marcelino-San Antonio Boundary, Zambales. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Learn History at Ramon Magsaysay Museum</h2>
                                        <p>Go on a side trip and experience Zambales’ historical side with the beloved former Philippine President, Ramon Magsaysay’s ancestral house, in the town of Castillejos. The house was restored and converted into a museum back in 1990. </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Visit Animals at Botolan Wildlife Farm</h2>
                                        <p>The animal ranch stretches to a 55,000-sqm area. The place serves as a habitat for a wide range of exotic animals and plants around the world.  You’ll find rare species of animals there, like the Brahminy Kite (a now endangered bird), adorable owls, colorful birds, the Philippines’ Brown Deer, and a Siberian tiger among others.</p>
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