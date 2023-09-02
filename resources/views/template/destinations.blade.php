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
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/anawangin.JPG') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
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
                                    <figure><img src="{{ asset('assets/images/destinations/nagsasa.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
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
                                    <figure><img src="{{ asset('assets/images/destinations/capones-island.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
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
                                    <figure><img src="{{ asset('assets/images/destinations/crystal-beach.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
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
                                    <figure><img src="{{ asset('assets/images/destinations/inflatable-island.jpeg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
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
                                    <figure><img src="{{ asset('assets/images/destinations/mt-pinatubo.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
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
                                    <figure><img src="{{ asset('assets/images/destinations/talisayen.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
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
                                    <figure><img src="{{ asset('assets/images/destinations/camara-island.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
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
                                    <figure><img src="{{ asset('assets/images/destinations/el-kabayo.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
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
                                    <figure><img src="{{ asset('assets/images/destinations/rosa-farms.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
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
                                    <figure><img src="{{ asset('assets/images/destinations/ramon-magsaysay-museum.JPG') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
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
                                    <figure><img src="{{ asset('assets/images/destinations/botolan-wildlife-farm.webp') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
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
            <div class="mt-10 flex lg:flex-row flex-col gap-5">
                <div class="w-full lg:w-[25%]">
                    <h1 class="text-bold text-[24px] font-[900]">STAY</h1>
                    <p>A mix of the charming, modern, and tried and true.</p>
                </div>
                <div class="w-full lg:w-[75%]">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/sunset-villas.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Sunset Villas Palauig Zambales</h2>
                                        <p>Sunset Villas Palauig Zambales features a garden, terrace, a restaurant and bar in Palauig. There is a barbecue and guests can make use of free WiFi and free private parking.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/acme.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">ACME Inn Subic</h2>
                                        <p>Featuring 1-star accommodation, ACME Inn Subic is set in Olongapo, less than 1 km from Harbor Point and 2.4 km from Subic Bay Convention Center.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/palms-resort.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">The Palms Resort & Bar</h2>
                                        <p>Situated in San Narciso, 90 metres from La Paz Beach and 39 km from Harbor Point, The Palms Resort & Bar features accommodation with free WiFi, air conditioning, a rooftop pool and a terrace.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/villa-janella.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Villa Janella Residences and Beach Resort</h2>
                                        <p>Set in Zambales, a few steps from Pundaquit Beach, Villa Janella Residences and Beach Resort offers accommodation with an outdoor swimming pool, free private parking, a garden and a shared lounge.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/lazerena.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">LaZerena Lodge</h2>
                                        <p>Set in Zambales, a few steps from San Felipe Beach, LaZerena Lodge offers accommodation with a shared lounge, free private parking, a terrace and a restaurant.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/whiterock.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Whiterock Beach Hotel and Waterpark</h2>
                                        <p>White Rock Waterpark and Beach Hotel is a beachfront property located in Subic, offering an outdoor swimming pool, private restaurant and private beach area, the hotel also boasts an on-site.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/segara.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Segara Residencias</h2>
                                        <p>Located in Olongapo, 1 km from Harbor Point, Segara Residencias provides accommodation with a garden, free private parking, a terrace and a restaurant.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/central-park-reef.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Central Park Reef Resort</h2>
                                        <p>Set in Olongapo, 600 metres from Driftwood Beach, Central Park Reef Resort offers accommodation with an outdoor swimming pool, free private parking, a restaurant and a bar.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/casa-saudade.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Casa Saudade Condotels and Transient Rooms</h2>
                                        <p>Casa Saudade Condotels and Transient Rooms is located in the Subic Bay Freeport Zone district of Olongapo, 8.1 km from Harbor Point and 7 km from Subic Bay Convention Center.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/oyo.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">OYO 869 Jnv Dream Hotel</h2>
                                        <p>Featuring 3-star accommodation, OYO 869 Jnv Dream Hotel is located in Zambales, 1 km from White Rock Beach and 1.7 km from Baloy Beach.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/subic-bay-view.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Subic Bay View Diamond Hotel</h2>
                                        <p>Set in Olongapo, Subic Bay View Diamond Hotel has a fitness centre, restaurant, bar, and free WiFi throughout the property. The hotel offers an outdoor swimming pool and room service.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/youhan.jpg') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Youhan Beach Resort</h2>
                                        <p>Located in San Antonio, 400 metres from Pundaquit Beach, Youhan Beach Resort provides accommodation with an outdoor swimming pool, free private parking, a garden and a terrace.</p>
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
            <div class="mt-10 flex lg:flex-row flex-col gap-5">
                <div class="w-full lg:w-[25%]">
                    <h1 class="text-bold text-[24px] font-[900]">EAT</h1>
                    <p>Can't-miss spots to dine, drink, and feast.</p>
                </div>
                <div class="w-full lg:w-[75%]">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/agoho-restaurant.webp') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Agoho Restaurant</h2>
                                        <p>Agoho, located in Surf Theori in Zambales, is a charming restaurant that serves homemade European cuisine. With its cozy and intimate setting, guests can enjoy a variety of dishes made from fresh, locally sourced, and imported ingredients. From homemade ice cream to freshly baked pizza made with homegrown sourdough crust, Agoho Restaurant is the perfect place for foodies who are looking for a unique dining experience.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/sestra-liwa.webp') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Sestra Liwa</h2>
                                        <p>Sestra Liwa is a fun and vibrant restaurant in Zambales that serves delicious Mediterranean food and coffee. The restaurant’s chic, aesthetic interiors and handpainted murals add to the dining experience. Whether you’re looking for a quick coffee fix or a full Mediterranean meal, Sestra Liwa is definitely worth a visit.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/kwentong-dagat.webp') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Kwentong Dagat</h2>
                                        <p>Kwentong Dagat, one of the first vegan resorts of its kind in the Philippines, offers a unique and eco-friendly experience. Apart from being able to enjoy a vacation with your furry friends, they have an onsite restaurant that serves a variety of vegan meals, from local Filipino cuisine to international dishes. Guests can enjoy delicious and wholesome food while enjoying the resort’s beautiful beachfront location.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/taco-joint.webp') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Taco Joint</h2>
                                        <p>Get ready for a fiesta in your mouth at Taco Joint! It’s a fun and vibrant spot that offers a short but sweet menu of Mexican favorites; tacos, burritos, and quesadillas. The colorful decor and lively atmosphere make it the perfect place to grab a quick and tasty bite with friends or family.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/cafe-de-liwa.webp') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Cafe De Liwa</h2>
                                        <p>You’ll find Cafe De Liwa located inside Liwalize It, a resort known for its tropical-style accommodations. Known for its finest brick oven pizza, their mouthwatering dishes will surely leave you wanting more. With their commitment to spreading good vibes, Cafe De Liwa in Liwalize It is the perfect destination for those looking to unwind and relax.
                                        </p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/sunday-liwa.webp') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Sunday Liwa</h2>
                                        <p>From chicken burger to chicken wings, enjoy all things chicken at Sunday Liwa’s kitchen and bar. Pair their dishes with a bottle of beer and the picturesque view of the beach and you have yourself the perfect day.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/kapitan-liwa.webp') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Kapitan’s Liwa Resort</h2>
                                        <p>Kapitan’s Liwa Resort offers a diverse range of dishes that are sure to satisfy any craving. From the crispy kare-kare to the succulent chicken wings and hearty ramen, there’s something for everyone at this restaurant.</p>
                                        <div class="card-actions justify-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-10 w-fit">
                                <div class="card card-compact max-w-[350px] rounded-none">
                                    <figure><img src="{{ asset('assets/images/destinations/seazzle-spot.webp') }}" alt="" class="w-full max-w-[350px] h-[250px] object-cover modalItems"/></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">Seazzle Spot</h2>
                                        <p>If you’re looking for a unique and sizzling dining experience in Zambales, head over to this one-stop shop that serves sizzling food on hot metal plates. Indulge in their mouthwatering dishes, from savory meats like a porterhouse steak to liempo and sisig.
                                        </p>
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
    {{-- swiper --}}
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    {{-- modal image --}}
    <script src="{{ asset('assets/js/modalImage.js') }}"></script>
@endsection