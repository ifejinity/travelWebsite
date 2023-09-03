@extends('layout.layout')
{{-- history --}}
@section('history')
    <div class="flex md:flex-row flex-col min-h-fit justify-center my-[100px] gap-5 relative pt-[30px]"> 
        <div class="flex flex-col md:mx-[10%] mx-[5%] gap-3 max-w-[1440px]">
            <h1 class="text-bold text-[24px] font-[900]">HISTORY</h1>
            <div class="bg-blue-500 h-[5px] w-[200px]"></div>
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-3">
                <iframe class="w-full max-w-[700px] h-[400px] lg:order-1 order-2" src="https://www.youtube.com/embed/Y2rTIM6Qp_g?si=Ll1ckeGm74JZimfH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <p class="indent-10 lg:order-2 order-1">The name of the province is derived from its earliest inhabitants, the Zambals, whom the Spanish found worshipping spirits called Anitos. 
                    They were referred to as "Sambali," from the Malay word samba, meaning "to worship." The term was later Hisparicized to "Zambal." When Juan de Salcedo came to explore the area in 1572, he landed at Cape Bolinao, then a part of Zambales. The Spaniards drove a group of Chinese pirates off the coast of Bolinao thereby earning the good will of the natives. Zambales was one of the earliest provinces created during the Spanish rule. As founded in the 16th century, it was composed of the area extending from Cape Bolinao in the north to Subic on the south. Due to their inaccessibility from the capital, seven towns in the northern portion of Zambales - from Bolinao to Infanta and including Alaminos - were later ceded to Pangasinan, forming that province's western part. Zambales is the home province of the seventh president of the Philippine Republic, Ramon Magsaysay, who was born in Iba and later moved to Castillejos, where His residence remains as a Museum these days.</p>
            </div>
                <p class="indent-10">Zambales has a natural beauty, it has been touched by civilization yet has maintained its rustic ambiance and beauty. The Zambales coastline is most famous for its sandy beaches and deep blue sea teeming with coral reefs. Zambales is perfectly suited for visitors seeking an authentic view of the Philippines without going too far from the national capital, Manila. It is located at the North Western part of Luzon, the center is Iba located 204 kilometers or approximately a three hour drive from Manila. The province has a vast area of lowlands along the coast where the town centers are located. The northern part is less developed. Mountain ranges line the East. Many containing large deposits of minerals, such as Chromate, Nickel, Copper and Gold, these Mountains also contain several Volcanos, the best know of which is <a href="" class="text-blue-500 font-[600] italic">Mt. Pinatubo</a>, which erupted in 1991. Fantastic views of the Mountain and it's lake filled crater can be seen from the air by light aircraft who's flights can originate in Clark, Pampanga or in Iba, Zambales. </p>
        </div>
    </div>
@endsection
{{-- cities --}}
@section('cities')
    <div class="flex md:flex-row flex-col min-h-fit justify-center my-[100px] gap-5 relative"> 
        <div class="flex flex-col md:mx-[10%] mx-[5%] gap-3 max-w-[1440px]">
            <h1 class="text-bold text-[24px] font-[900]">MUNICIPALITY/CITIES</h1>
            <div class="bg-blue-500 h-[5px] w-[200px]"></div>
            <p class="indent-10">Zambales has 13 Municipalities, (North to South) Sta. Cruz, Candaleria, Palauig, Masinloc, Iba, Botolan, Cabangan, San Felipe, San Narciso, San Antonio, San Marcelino, Castillejos, Subic and one city, Olongapo. The provincial capital was first Masinloc and later Sta. Cruz, as both had natural harbors, then moved to Iba, due to it's central geographic location, which remains the Capital today. The earliest established Towns were Masinloc 1607, Sta. Cruz 1611 and Iba 1612.</p>
            {{-- botolan --}}
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5" id="botolan">
                <div class="w-full">
                    <img src="{{ asset('assets/images/baranggays/botolan.jpg') }}" class="" alt="botolan">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <h1 class="text-bold text-[20px] font-[900]">BOTOLAN</h1>
                    <div class="bg-blue-500 h-[5px] w-[200px]"></div>
                    <p>Botolan, officially the Municipality of Botolan, is a 1st class municipality in the province of Zambales, Philippines. According to the 2020 census, it has a population of 66,739 people. The municipality was founded by Spanish Governor-General Juan de Salcedo in 1572. Botolan is known for its larger Aeta population, wide gray sand beaches, and as the location of Mount Pinatubo.</p>
                    <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" checked="checked" /> 
                    <div class="collapse-title text-xl font-medium">
                        Etymology
                        </div>
                        <div class="collapse-content"> 
                            <p>The name Botolan came from the a native variety of banana common in the area called "Boto-an". The word "Boto-an" is a Sambal word which combines the word botol which means "seeds" and the locative prefix -an, referring to a place with many seeded bananas.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Geography
                        </div>
                        <div class="collapse-content"> 
                            <p>Located just south of the provincial capital of Iba, Botolan has the largest land area of the municipalities in Zambales. Botolan is 7 kilometres (4.3 mi) from Iba, 71 kilometres (44 mi) from Olongapo, and 197 kilometres (122 mi) from Manila.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Barangays
                        </div>
                        <div class="collapse-content"> 
                            <p>Botolan is politically subdivided into 31 barangays. Each barangay consists of puroks and some have sitios.</p>
                            <div class="w-full">
                                <p>Bancal, Bangan, Batonlapoc, Belbel, Beneg, Binuclutan, Burgos, Cabatuan, Capayawan, Carael, Danacbunga, Maguisguis, Malomboy, Mambog, Moraza, Nacolcol, Owaog-Nibloc, Paco (poblacion), Palis, Panan, Parel, Paudpod, Poonbato, Porac, San Isidro, San Juan, San Miguel, Santiago, Tampo (poblacion), Taugtog, Villar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- cabangan --}}
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 mt-10" id="cabangan">
                <div class="w-full lg:order-2 order-1">
                    <img src="{{ asset('assets/images/baranggays/cabangan.jpg') }}" class="" alt="botolan">
                </div>
                <div class="w-full flex flex-col gap-2 lg:order-1 order-2">
                    <h1 class="text-bold text-[20px] font-[900]">CABANGAN</h1>
                    <div class="bg-blue-500 h-[5px] w-[200px]"></div>
                    <p>Cabangan was formally established in 1680. Justo Alinea (1898) was the first “Capitan Municipal,” which is equivalent to the position of the mayor at present time. The first “Presidente” Municipal was Mr. Benito Rivera, from years 1901 to 1902. He was succeeded by Mr. Antero Mora (1903-1904). In 1905, during the term of Mr. Andres Dumaplin, Botolan and Cabangan were governed by the same Presidente. The usage of the term “Presidente Municipal” ended in 1906 and Mr. Raymundo Dacoroon was elected to succeed Mr. Dumaplin. Mr. Dacoroon's term ended in 1908. After this year, the people of Cabangan elected their officials in their town.</p>
                    <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" checked="checked" /> 
                    <div class="collapse-title text-xl font-medium">
                        Etymology
                        </div>
                        <div class="collapse-content"> 
                            <p>There was a time when this town was frequently visited by Moro pirates who were notoriously known for their skill in using spears. They came by means of their swift vintas and murdered some of the inhabitants and looted their properties. Because of this the early settlers decided to go further from the sea and left San Isidro. On their journey of finding a new settlement area, they passed through a hill were many palm trees were growing. These trees were growing. These trees bear fruits in the shape of large pots, locally known as the “banga”. The luxuriant palm trees were abundant in the locality that they called the place “Kabangaan”. When the Americans came, they could hardly pronounce the word Kabangaan, instead they pronounced it ‘Cabangan’. Since then, the people who settled permanently in that area adopted the name Cabangan.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Geography
                        </div>
                        <div class="collapse-content"> 
                            <p>Cabangan is 24 kilometres (15 mi) from Iba, 54 kilometres (34 mi) from Olongapo, and 180 kilometres (110 mi) from Manila.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Barangays
                        </div>
                        <div class="collapse-content"> 
                            <p>Cabangan is politically subdivided into 22 barangays. [5] Each barangay consists of puroks and some have sitios.</p>
                            <p>Anonang, Apo-apo, Arew, Banuanbayo (poblacion), Cadmang-Reserva, Camiing (St. Francis), Casabaan, Del Carmen (poblacion), Dolores (poblacion), Felmida-Diaz, Laoag, Lomboy, Longos, Mabanglit, New San Juan,San Antonio (poblacion) ,San Isidro, San Juan (poblacion),San Rafael, Santa Rita, Santo Niño, Tondo</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- candelaria --}}
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 mt-10" id="candelaria">
                <div class="w-full">
                    <img src="{{ asset('assets/images/baranggays/candelaria.jpg') }}" class="" alt="CANDELARIA">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <h1 class="text-bold text-[20px] font-[900]">CANDELARIA</h1>
                    <div class="bg-blue-500 h-[5px] w-[200px]"></div>
                    <p>Candelaria, officially the Municipality of Candelaria (Sambal: Babali nin Candelaria; Filipino: Bayan ng Candelaria), is a 3rd class municipality in the province of Zambales, Philippines. According to the 2020 census, it has a population of 30,263 people.</p>
                    <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" checked="checked" /> 
                    <div class="collapse-title text-xl font-medium">
                        Etymology
                        </div>
                        <div class="collapse-content"> 
                            <p>The name of the town could have come from the name of the wife of the first Alcalde Mayor, who named the town after her as a birthday gift. Candelaria is also the Spanish word for Candlemas, and that the Virgin of Candelaria is a Marian title popular in the Hispanic world.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Geography
                        </div>
                        <div class="collapse-content"> 
                            <p>Candelaria is 118 kilometres (73 mi) from Olongapo, 40 kilometres (25 mi) from the capital town of Iba, 244 kilometres (152 mi) from Manila. It is nestled at the foot of the Zambales Mountains in the east and lies along coastline of the South China Sea in the west, with a total land area of 33,359 hectares (82,430 acres), making it the third-largest town in terms of land area in Zambales. This municipality is known for Uacon Lake, the cleanest lake in Central Luzon, and for its numerous beach resorts.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Barangays
                        </div>
                        <div class="collapse-content"> 
                            <p>Candelaria is politically subdivided into 16 barangays. Each barangay consists of puroks and some have sitios.</p>
                            <div class="w-full">
                                <p>Babancal,Binabalian, Catol, Dampay, Lauis, Libertador, Malabon (San Roque), Malimanga, Pamibian, Panayonan, Pinagrealan, Poblacion, Sinabacan, Taposo, Uacon, Yamot</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- castillejos --}}
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 mt-10" id="castillejos">
                <div class="w-full lg:order-2 order-1">
                    <img src="{{ asset('assets/images/baranggays/castillejos.jpg') }}" class="" alt="botolan">
                </div>
                <div class="w-full flex flex-col gap-2 lg:order-1 order-2">
                    <h1 class="text-bold text-[20px] font-[900]">CASTILLEJOS</h1>
                    <div class="bg-blue-500 h-[5px] w-[200px]"></div>
                    <p>Castillejos, officially the Municipality of Castillejos (Ilocano: Ili ti Castillejos; Tagalog: Bayan ng Castillejos), is a 3rd class municipality in the province of Zambales, Philippines. According to the 2020 census, it has a population of 67,889 people.</p>
                    <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" checked="checked" /> 
                    <div class="collapse-title text-xl font-medium">
                        Etymology
                        </div>
                        <div class="collapse-content"> 
                            <p>Uguic was probably the first name of this town; but in the course of time, Uguic was written as Uguit by which name it was known until January 23, 1863. On that day, it was its own priest thereby putting an end to its spiritual dependence on Subic. And on that day, it was given its own priest the “Caillanes” did not only celebrate for having been given a priest of their own but also name the town “Castillejos".</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Geography
                        </div>
                        <div class="collapse-content"> 
                            <p>Castillejos is located between San Antonio, Subic and San Marcelino. It is 57 kilometres (35 mi) from Iba, 21 kilometres (13 mi) from Olongapo, and 147 kilometres (91 mi) from Manila.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Barangays
                        </div>
                        <div class="collapse-content"> 
                            <p>Castillejos is politically subdivided into 14 barangays. Each barangay consists of puroks and some have sitios.</p>
                            <p>Balaybay, Buenavista, Del Pilar, Looc, Magsaysay, Nagbayan, Nagbunga, San Agustin, San Jose (Poblacion), San Juan (Poblacion), San Nicolas, San Pablo (Poblacion), San Roque, Santa Maria</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- iba --}}
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 mt-10" id="iba">
                <div class="w-full">
                    <img src="{{ asset('assets/images/baranggays/iba.jpg') }}" class="" alt="iba">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <h1 class="text-bold text-[20px] font-[900]">IBA</h1>
                    <div class="bg-blue-500 h-[5px] w-[200px]"></div>
                    <p>Iba, officially the Municipality of Iba (Sambal: Babali nin Iba; Ilocano: Ili ti Iba; Tagalog: Bayan ng Iba), is a 1st class municipality and capital of the province of Zambales, Philippines. According to the 2020 census, it has a population of 55,581 people.</p>
                    <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" checked="checked" /> 
                    <div class="collapse-title text-xl font-medium">
                        Etymology
                        </div>
                        <div class="collapse-content"> 
                            <p>The municipality was named after the tree Phyllanthus acidus, which bears edible sour fruits. It is locally known as iba, a name which also applies to the similar kamias (Averrhoa bilimbi).</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Geography
                        </div>
                        <div class="collapse-content"> 
                            <p>The municipality of Iba is bounded by the municipalities of Botolan to the south, Palauig to the north, the province of Tarlac to the east, and the South China Sea to the west. Like most of the municipalities in the province, Iba is geographically bound by the coast in the west with the Zambales Mountains in the eastern portion of the municipality.As the capital of the province, it is second largest provincial capital in terms of land area in Central Luzon Region after Tarlac City.Iba is 78 kilometres (48 mi) from Olongapo and 204 kilometres (127 mi) from Manila.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Barangays
                        </div>
                        <div class="collapse-content"> 
                            <p>Iba is politically subdivided into 14 barangays. Each barangay consists of puroks and some have sitios. There are 9 barangays which are considered urban while the rest are considered rural.</p>
                            <div class="w-full">
                                <p>Amungan, Bangantalinga, Dirita-Baloguen, Lipay-Dingin-Panibuatan, Palanginan, San Agustin, Santa Barbara, Santo Rosario, Zone 1 Pob., Zone 2 Pob., Zone 3 Pob., Zone 4 Pob., Zone 5 Pob., Zone 6 Pob.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- masinloc --}}
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 mt-10" id="masinloc">
                <div class="w-full lg:order-2 order-1">
                    <img src="{{ asset('assets/images/baranggays/masinloc.webp') }}" class="">
                </div>
                <div class="w-full flex flex-col gap-2 lg:order-1 order-2">
                    <h1 class="text-bold text-[20px] font-[900]">MASINLOC</h1>
                    <div class="bg-blue-500 h-[5px] w-[200px]"></div>
                    <p>Masinloc, officially the Municipality of Masinloc (Sambal: Babali nin Masinloc; Filipino: Bayan ng Masinloc), is a 1st class municipality in the province of Zambales, Philippines. According to the 2020 census, it has a population of 54,529 people.</p>
                    <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" checked="checked" /> 
                    <div class="collapse-title text-xl font-medium">
                        Etymology
                        </div>
                        <div class="collapse-content"> 
                            <p>Uguic was probably the first name of this town; but in the course of time, Uguic was written as Uguit by which name it was known until January 23, 1863. On that day, it was its own priest thereby putting an end to its spiritual dependence on Subic. And on that day, it was given its own priest the “Caillanes” did not only celebrate for having been given a priest of their own but also name the town “Castillejos".</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Geography
                        </div>
                        <div class="collapse-content"> 
                            <p>Scarborough Shoal (under the names Pulo ng Panatag and Bajo de Masinloc) is claimed by the Philippine government as within the town's territorial jurisdiction. Due to the continued dispute over the shoal, this has negatively impacted fishermen of the community, reducing catch sizes and affecting other businesses. Masinloc is 107 kilometres (66 mi) from Olongapo, 29 kilometres (18 mi) from Iba, and 233 kilometres (145 mi) from Manila.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Barangays
                        </div>
                        <div class="collapse-content"> 
                            <p>Masinloc is politically subdivided into 13 barangays. Each barangay consists of puroks and some have sitios.</p>
                            <p>Buena, Tamban, Polong, Parang, Sibol, East Poblacion, Kung, Ipot, Agila, Pitang, Weast Poblacion, Parpar, Tapoc, Talon, Batolino, Matala, Baloganon</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- olongapo --}}
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 mt-10" id="olongapo">
                <div class="w-full">
                    <img src="{{ asset('assets/images/baranggays/olongapo.jpg') }}" class="" alt="">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <h1 class="text-bold text-[20px] font-[900]">OLONGAPO</h1>
                    <div class="bg-blue-500 h-[5px] w-[200px]"></div>
                    <p>Olongapo, officially the City of Olongapo (Filipino: Lungsod ng Olongapo; Ilocano: Siudad ti Olongapo; Sambal: Siyodad nin Olongapo), is a 1st class highly urbanized city in the Central Luzon region of the Philippines. Located in the province of Zambales but governed independently from the province, it has a population of 260,317 people according to the 2020 census. Along with the municipality of Subic, it comprises Metro Olongapo, one of the twelve metropolitan areas in the Philippines.</p>
                    <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" checked="checked" /> 
                    <div class="collapse-title text-xl font-medium">
                        Etymology
                        </div>
                        <div class="collapse-content"> 
                            <p>The villagers punished the culprits and in order to cherish and emulate the example of the leadership shown to them by Apo, they called their village ULO NG APO (head of the chieftain). Thus the community was named OLONGAPO.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Geography
                        </div>
                        <div class="collapse-content"> 
                            <p>Situated at the southern entry point of Zambales and the northeastern interior of the Subic Bay area, Olongapo City is 78 kilometres (48 mi) from Iba and 126 kilometres (78 mi) northwest of Manila. The land area of Olongapo is 103.3 square kilometres (39.9 sq mi). The city proper is located on 6.48 square kilometres (2.50 sq mi) of tidal flatland, with the rugged Zambales Mountains on its three sides, and Bataan and Subic Bay at its base. Because of this peculiar geographic location, development of city land is limited. Also, the territorial borders from nearby towns are not properly marked.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Barangays
                        </div>
                        <div class="collapse-content"> 
                            <p>Olongapo is politically subdivided into 17 barangays. Each barangay consists of puroks and some have sitios.</p>
                            <div class="w-full">
                                <p>Barretto, East Bajac-bajac, East Tapinac,Gordon Heights, Kalaklan, Mabayuan, New Asinan, New Banicain, New Cabalan, New Ilalim, New Kababae, New Kalalake, Old Cabalan, Pag-asa, Santa Rita, West Bajac-bajac, West Tapinac</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- palauig --}}
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 mt-10" id="palauig">
                <div class="w-full lg:order-2 order-1">
                    <img src="{{ asset('assets/images/baranggays/palauig.jpg') }}" class="">
                </div>
                <div class="w-full flex flex-col gap-2 lg:order-1 order-2">
                    <h1 class="text-bold text-[20px] font-[900]">PALAUIG</h1>
                    <div class="bg-blue-500 h-[5px] w-[200px]"></div>
                    <p>Palauig, officially the Municipality of Palauig (Sambal: Babali nin Palauig; Filipino: Bayan ng Palauig), is a 3rd class municipality in the province of Zambales, Philippines. According to the 2020 census, it has a population of 39,784 people. The municipality of Palauig is the nearest mainland to the Philippine-claimed EEZ Panatag Shoal, or Scarborough Shoal.</p>
                    <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" checked="checked" /> 
                    <div class="collapse-title text-xl font-medium">
                        Etymology
                        </div>
                        <div class="collapse-content"> 
                            <p>Palauig, comes from the Zambal dialect (sambalic language) 'Manlawig' meaning 'to pasture the carabao in the grass field'. The legend explains how the name Palauig came from its former name, came about.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Geography
                        </div>
                        <div class="collapse-content"> 
                            <p>Palauig is a coastal municipality in the province of Zambales. The municipality has a land area of 310.00 square kilometers or 119.69 square miles which constitutes 8.54% of Zambales's total area.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Barangays
                        </div>
                        <div class="collapse-content"> 
                            <p>Palauig is politically subdivided into 19 barangays. Each barangay consists of puroks and some have sitios.</p>
                            <p>Alwa, Bato, Bulawen, Cauyan, East Poblacion, Garreta, Libaba, Liozon, Lipay, Locloc, Macarang, Magalawa, Pangolingan, Salaza, San Juan, Santo Niño, Santo Tomas, San Vicente, West Poblacion</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- san antonio --}}
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 mt-10" id="san antonio">
                <div class="w-full">
                    <img src="{{ asset('assets/images/baranggays/san antonio.jpg') }}" class="" alt="">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <h1 class="text-bold text-[20px] font-[900]">SAN ANTONIO</h1>
                    <div class="bg-blue-500 h-[5px] w-[200px]"></div>
                    <p>San Antonio, officially the Municipality of San Antonio (Ilocano: Ili ti San Antonio; Tagalog: Bayan ng San Antonio; Sambal: Babali nin San Antonio), is a 2nd class municipality in the province of Zambales, Philippines. According to the 2020 census, it has a population of 37,450 people.</p>
                    <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" checked="checked" /> 
                    <div class="collapse-title text-xl font-medium">
                        Etymology
                        </div>
                        <div class="collapse-content"> 
                            <p>The first Ilocano families from Paoay, Ilocos Norte arrived in the year 1830 and founded the first settlement that grew and developed into what is now the town of San Antonio. The site of the first community is somewhere near barrio Currilapa, now Barangay Antipolo. On their arrival, the first settlers found on this place a family of Aetas and later met a hunter of deer in the area named Don Salvador dela Cruz, a prominent resident of the pueblo of Cabangan. San Antonio was then a hunting region where indigenous hunters from the northern towns of Zambales would hunt and gather.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Geography
                        </div>
                        <div class="collapse-content"> 
                            <p>The municipality has a land area of 188.12 square kilometers or 72.63 square miles which constitutes 5.18% of Zambales's total area. Its population as determined by the 2020 Census was 37,450. This represented 5.76% of the total population of Zambales province, or 0.30% of the overall population of the Central Luzon region. Based on these figures, the population density is computed at 199 inhabitants per square kilometer or 516 inhabitants per square mile.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Barangays
                        </div>
                        <div class="collapse-content"> 
                            <p>San Antonio is politically subdivided into 14 barangays. Each barangay consists of puroks and some have sitios.</p>
                            <div class="w-full">
                                <p>Angeles, Antipolo, Burgos (Poblacion), East Dirita, Luna (Poblacion), Pundaquit, Rizal (Poblacion) (Sentro Pueblo), San Esteban, San Gregorio (Poblacion), San Juan (Poblacion) (Sitio Mabanban), San Miguel, San Nicolas (Poblacion), Santiago (Poblacion) (Pamatawan), West Dirita</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- san felipe --}}
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 mt-10" id="san felipe">
                <div class="w-full lg:order-2 order-1">
                    <img src="{{ asset('assets/images/baranggays/san felipe.jpg') }}" class="">
                </div>
                <div class="w-full flex flex-col gap-2 lg:order-1 order-2">
                    <h1 class="text-bold text-[20px] font-[900]">SAN FELIPE</h1>
                    <div class="bg-blue-500 h-[5px] w-[200px]"></div>
                    <p>San Felipe, officially the Municipality of San Felipe (Filipino: Bayan ng San Felipe), is a 4th class municipality in the province of Zambales, Philippines. According to the 2020 census, it has a population of 25,033 people.</p>
                    <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" checked="checked" /> 
                    <div class="collapse-title text-xl font-medium">
                        Etymology
                        </div>
                        <div class="collapse-content"> 
                            <p>The name Bobulon was changed to San Felipe when it was founded in 1853. As to how the town of San Felipe got its present name, the most reliable fact learned so far was that four “saintly” brothers from Ilocandia, namely Marcelino, Antonio, Narciso and Felipe settled in the about to be organized pueblos which were later named San Marcelino, San Antonio, San Narciso and San Felipe. As a matter of fact, most of the inhabitants of these four towns were Ilocanos from the Ilocos region.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Geography
                        </div>
                        <div class="collapse-content"> 
                            <p>San Felipe is 36 kilometres (22 mi) from Iba, 42 kilometres (26 mi) from Olongapo, and 168 kilometres (104 mi) from Manila.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Barangays
                        </div>
                        <div class="collapse-content"> 
                            <p>San Felipe is subdivided into 11 barangays. Each barangay consists of puroks and some have sitios.</p>
                            <p>Amagna (Poblacion), Apostol (Poblacion), Balincaguing, Farañal (Poblacion), Feria (Poblacion), Maloma, Manglicmot (Poblacion), Rosete (Poblacion), San Rafael, Santo Niño, Sindol</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- san marcelino --}}
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 mt-10" id="san marcelino">
                <div class="w-full">
                    <img src="{{ asset('assets/images/baranggays/san marcelino.jpeg') }}" class="" alt="">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <h1 class="text-bold text-[20px] font-[900]">SAN MARCELINO</h1>
                    <div class="bg-blue-500 h-[5px] w-[200px]"></div>
                    <p>San Marcelino, officially the Municipality of San Marcelino (Ilocano: Ili ti San Marcelino; Tagalog: Bayan ng San Marcelino), is a 1st class municipality in the province of Zambales, Philippines. According to the 2020 census, it has a population of 37,719 people. The municipality is home to Mapanuepe Lake that formed after the 1991 eruption of Mount Pinatubo.</p>
                    <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" checked="checked" /> 
                    <div class="collapse-title text-xl font-medium">
                        Etymology
                        </div>
                        <div class="collapse-content"> 
                            <p>The town got its name after the first Capitan Municipal whose name was Marcelino de Oraá Lecumberri. The people of this municipality during that time were fond of saints, so they added "San" to the name Marcelino, thus making it San Marcelino. The first election was held on January 14, 1906, and Matias Apostol was the first elected president. San Marcelino was Christianized after the arrival of Father Guillermo and after his departure, the people rightfully chose San Guillermo as their town's patron saint.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Geography
                        </div>
                        <div class="collapse-content"> 
                            <p>San Marcelino is 51 kilometres (32 mi) from Iba, 27 kilometres (17 mi) from Olongapo, and 153 kilometres (95 mi) from Manila.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Barangays
                        </div>
                        <div class="collapse-content"> 
                            <p>San Marcelino is politically subdivided into 18 barangays. Each barangay consists of puroks and some have sitios.</p>
                            <div class="w-full">
                                <p>Aglao, Buhawen, Burgos (Poblacion), Central (Poblacion), Consuelo Norte, Consuelo Sur (Poblacion), La Paz (Poblacion), Laoag, Linasin, Linusungan, Lucero (Poblacion), Nagbunga, Rabanes, Rizal (Poblacion), San Guillermo (Poblacion), San Isidro (Poblacion), San Rafael, Santa Fe</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- san narciso --}}
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 mt-10" id="san narciso">
                <div class="w-full lg:order-2 order-1">
                    <img src="{{ asset('assets/images/baranggays/san narciso.webp') }}" class="">
                </div>
                <div class="w-full flex flex-col gap-2 lg:order-1 order-2">
                    <h1 class="text-bold text-[20px] font-[900]">SAN NARCISO</h1>
                    <div class="bg-blue-500 h-[5px] w-[200px]"></div>
                    <p>San Narciso, officially the Municipality of San Narciso (Ilocano: Ili ti San Narciso; Tagalog: Bayan ng San Narciso; Sambal: Babali nin San Narciso), is a 4th class municipality in the province of Zambales, Philippines. According to the 2020 census, it has a population of 30,759 people.</p>
                    <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" checked="checked" /> 
                    <div class="collapse-title text-xl font-medium">
                        Etymology
                        </div>
                        <div class="collapse-content"> 
                            <p>The Municipality of San Narciso was founded in the early part of 18th century. The migrants from the Ilocandia arrived in the area and established their settlement in Alusiis which was the first name of the pueblo that later became San Narciso. San Narcsio became the official name of the town by a Royal Decree issued by the Spanish Governor General Narciso Claveria and Archbishop Jose Soque on February 12, 1846.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Geography
                        </div>
                        <div class="collapse-content"> 
                            <p>San Narciso is located in a relatively flat plain. West of the town is the South China Sea and to the east is bordered by the Sto. Tomas river are the Zambales Mountain Ranges. Average elevation is 3.6 metres (12 ft) above sea level and the highest elevation is 800 metres (2,600 ft) above sea level. It is 41 kilometres (25 mi) from Iba, 37 kilometres (23 mi) from Olongapo, and 163 kilometres (101 mi) from Manila.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Barangays
                        </div>
                        <div class="collapse-content"> 
                            <p>San Narciso is subdivided into 17 barangays. Each barangay consists of puroks and some have sitios.</p>
                            <p>Alusiis, Beddeng, Candelaria (Poblacion), Dallipawen, Grullo, La Paz, Libertad (Poblacion), Namatacan, Natividad (Poblacion), Omaya, Paite, Patrocinio (Poblacion), San Jose (Poblacion), San Juan (Poblacion), San Pascual (Poblacion), San Rafael (Poblacion), Siminublan</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- santa cruz --}}
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 mt-10" id="santa cruz">
                <div class="w-full">
                    <img src="{{ asset('assets/images/baranggays/santa cruz.jpg') }}" class="" alt="">
                </div>
                <div class="w-full flex flex-col gap-2">
                    <h1 class="text-bold text-[20px] font-[900]">SANTA CRUZ</h1>
                    <div class="bg-blue-500 h-[5px] w-[200px]"></div>
                    <p>Santa Cruz, officially the Municipality of Santa Cruz (Sambal: Babali nin Santa Cruz; Filipino: Bayan ng Santa Cruz), is a 1st class municipality in the province of Zambales, Philippines. According to the 2020 census, it has a population of 63,839 people.</p>
                    <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" checked="checked" /> 
                    <div class="collapse-title text-xl font-medium">
                        Etymology
                        </div>
                        <div class="collapse-content"> 
                            <p>According to pioneers, Sta. Cruz originated its name way back in 1880 when Spaniards planted a cross under a shelter upon their failure to Christianize the settlers who continued to resist them.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Geography
                        </div>
                        <div class="collapse-content"> 
                            <p>Santa Cruz is 136 kilometres (85 mi) from Olongapo, 58 kilometres (36 mi) from Iba, and 262 kilometres (163 mi) from Manila.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Barangays
                        </div>
                        <div class="collapse-content"> 
                            <p>Santa Cruz is politically subdivided into 25 barangays. [5] Each barangay consists of puroks and some have sitios.</p>
                            <div class="w-full">
                                <p>Babuyan, Bangcol, Bayto, Biay, Bolitoc, Bulawon, Canaynayan, Gama, Guinabon, Guisguis, Lipay, Lomboy, Lucapon North, Lucapon South, Malabago, Naulo, Pagatpat, Pamonoran, Poblacion North, Poblacion South, Sabang, San Fernando, Tabalong, Tubotubo North, Tubotubo South</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- subic --}}
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 mt-10" id="subic">
                <div class="w-full lg:order-2 order-1">
                    <img src="{{ asset('assets/images/baranggays/subic.jpg') }}" class="">
                </div>
                <div class="w-full flex flex-col gap-2 lg:order-1 order-2">
                    <h1 class="text-bold text-[20px] font-[900]">SUBIC</h1>
                    <div class="bg-blue-500 h-[5px] w-[200px]"></div>
                    <p>Subic, officially the Municipality of Subic (Ilocano: Ili ti Subic; Tagalog: Bayan ng Subic), is a 1st class municipality in the province of Zambales, Philippines. According to the 2020 census, it has a population of 111,912 people. It is located along the northern coast of Subic Bay. Portions of the town also form part of the Subic Freeport Zone.</p>
                    <div class="collapse collapse-arrow bg-base-200">
                    <input type="radio" name="my-accordion-2" checked="checked" /> 
                    <div class="collapse-title text-xl font-medium">
                        Etymology
                        </div>
                        <div class="collapse-content"> 
                            <p>The native Zambales inhabitants called the area Hubek, which means "head of a plough"; Spanish missionary priests mispronounced the name as Subiq. By the time of the American occupation, "Subiq" was mispronounced as Subig. Eventually, the name reverted to "Subiq", but the letter 'q' was replaced with 'c'.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Geography
                        </div>
                        <div class="collapse-content"> 
                            <p>Subic is 66 kilometres (41 mi) from Iba, 12 kilometres (7.5 mi) from Olongapo, and 138 kilometres (86 mi) from Manila.</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" /> 
                        <div class="collapse-title text-xl font-medium">
                            Barangays
                        </div>
                        <div class="collapse-content"> 
                            <p>Aningway-Sacatihan, Asinan (Poblacion), Asinan Proper, Baraca-Camachile (Poblacion), Batiawan, Calapacuan, Calapandayan (Poblacion), Cawag, Ilwas (Poblacion), Mangan-Vaca, Matain, Naugsol, Pamatawan, San Isidro, Santo Tomas,Wawandue (Poblacion)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- geography --}}
@section('geography')
    <div class="flex md:flex-row flex-col min-h-fit justify-center my-[100px] gap-5 relative"> 
        <div class="flex flex-col md:mx-[10%] mx-[5%] gap-3 max-w-[1440px]">
            <h1 class="text-bold text-[24px] font-[900]">GEOGRAPHY</h1>
            <div class="bg-blue-500 h-[5px] w-[200px]"></div>
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-3">
                <div class="flex flex-col gap-2">
                    <p>Boarded by the South China Sea on the West, with 173 Kilometers of coastline and the Zambales Mountains on the East, with a land area of 3,700 square kilometers, Zambales is the second largest among the six provinces of Central Luzon. It has a population density of 170 people per square kilometer, one of the lowest in the country. The province is noted for its fishing and agriculture and especially for it's mangoes, which are listed in the Guinness Book of records as"the sweetest Mangos in the World" which are abundant from January to May.</p>
                    <p>The Zambales provinceis divided into 13 Municipalities and 1 Independent City:</p>
                    <div class="w-full grid lg:grid-cols-3 grid-cols-2 gap-2">
                        <a href="#botolan" class="btn bg-[#f0b113] hover:bg-[#f0b113]/90">Botolan</a>
                        <a href="#cabangan" class="btn bg-[#f5822e] hover:bg-[#f5822e]/90">Cabangan</a>
                        <a href="#candelaria" class="btn bg-[#ed1b4c] hover:bg-[#ed1b4c]/90">Candelaria</a>
                        <a href="#castillejos" class="btn bg-[#39b749] hover:bg-[#39b749]/90">Castillejos</a>
                        <a href="#iba" class="btn bg-[#3cb749] hover:bg-[#3cb749]/90">Iba</a>
                        <a href="#masinloc" class="btn bg-[#ba54a2] hover:bg-[#ba54a2]/90">Masinloc</a>
                        <a href="#olongapo" class="btn bg-[#ee1b4d] hover:bg-[#ee1b4d]/90">Olongapo</a>
                        <a href="#palauig" class="btn bg-[#13bff0] hover:bg-[#13bff0]/90">Palauig</a>
                        <a href="#san antonio" class="btn bg-[#f5822f] hover:bg-[#f5822f]/90">San Antonio</a>
                        <a href="#san felipe" class="btn bg-[#ec214f] hover:bg-[#ec214f]/90">San Felipe</a>
                        <a href="#san marcelino" class="btn bg-[#13bff0] hover:bg-[#13bff0]/90">San Marcelino</a>
                        <a href="#san narciso" class="btn bg-[#ec214f] hover:bg-[#ec214f]/90">San Narciso</a>
                        <a href="#santa cruz" class="btn bg-[#f5822f] hover:bg-[#f5822f]/90">Santa Cruz</a>
                        <a href="#subic" class="btn bg-[#f5822f] hover:bg-[#f5822f]/90">Subic</a>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('assets/images/zambales geography.webp') }}" alt="zambales-geography" class="w-full">
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- language --}}
@section('others')
    <div class="flex md:flex-row flex-col min-h-fit justify-center my-[100px] gap-5 relative"> 
        <div class="flex flex-col md:mx-[10%] mx-[5%] gap-3 max-w-[1440px]">
            <h1 class="text-bold text-[24px] font-[900]">OTHER DETAILS</h1>
            <div class="bg-blue-500 h-[5px] w-[200px]"></div>
            <h1 class="text-bold text-[18px] font-[900]">LANGUAGE</h1>
            <p>Tagalog is the predominant dialect followed by Ilocano and two dialects of Zambal, "highland"' used mostly by the original aborigines (known as Aeta's) and "Lowland", spoken by many of the farmers. English is also spoken by the large proportion of the population throughout the Province.</p>
            <h1 class="text-bold text-[18px] font-[900]">WEATHER</h1>
            <p>There are two pronounced seasons: Dry from October to June, and Wet July through September.</p>
            <h1 class="text-bold text-[18px] font-[900]">SUMMER HOLIDAYS</h1>
            <p>Zambales has become a favorite place to enjoy the Summer Holidays,(April to June) it's pristine beaches and unspoiled Coral reefs, Rivers and Mountains, make it an ideal Holiday destination. There are a number of Resorts within the Province, the largest number located in Iba Botolan and Pundaquit San Antonio. It is well advised to have a reservation during these months, especially on weekends. The cooler months of December, January and February Zambales is fast becoming a popular destination for Europeans, Scandanavians and North Americans to escape the Cold Winter weather in their home Countries. A number of Resorts, such as Rama International Beach Resort have special rates and special self contained accommodations to suit their needs.</p>
            <h1 class="text-bold text-[18px] font-[900]">DEVELOPMENT</h1>
            <p>With the opening of the Subic - Clark - Tarlac Expressway in April of 2008, travel time, by private vehicle, was cut by more than an hour, to around 2 hours from Manila to Southern Zambales (Olongapo / Subic) 3 - 3 1/2 hours to Central Zambales (Botolan - Iba) and 4 - 4 1/2 hours to Sta.Cruz, the Provinces most Northern town. With the recent announcement by the Zambales Provincial Government of the Construction of a new road connecting Botolan and Iba to Clark - Tarlac and the North Luzon Expressway completion of this road, (expected 2017 - 19) will cut travel time Central Zambales to Manila to around 1 1/2 Hours and Central Zambales to Clark (Diosdado Macapagal) International Airport which is is being developed into the premier airport for Central Luzon, including Manila, to around 40 minutes. The present administration has a very active "Provincial Tourism, Investment and Promotion Office" with expert staff that can advise on Investments, such as Mining, Resort Industry, Industrial and Agricultural, within the Province. Their Office can be reached at 047 811 7216 or 047 811 7218 
            Zambales is currently one of the fastest developing Provinces within the Philippines, it has an extremely good road network that is constantly expanding, efficient and reliable Public Transport system, 3 major Port areas, 5 landing strips for small aircraft and 1 International Airport at Subic plus easy access to Clark. A large area of the Subic Bay Metropolitan Area (SBMA) is also located in Zambales, housing Manufacturing and assembly businesses, the largest of which is Hanjin Ship Building facility. Plus many more. SBMA also has some of the best preserved Rain Forest in Zambales.</p>
        </div>
    </div>
@endsection