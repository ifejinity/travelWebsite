<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zambales | {{ $title }}</title>
    @include('partials.__cdn')
    <style>
        .custom-shape-divider-bottom-1693384394 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-bottom-1693384394 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 150px;
        }

        .custom-shape-divider-bottom-1693384394 .shape-fill {
            fill: #FFFFFF;
        }

        .custom-shape-divider-top-1693392761 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-top-1693392761 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 101px;
        }

        .custom-shape-divider-top-1693392761 .shape-fill {
            fill: #FFFFFF;
        }
    </style>
</head>
<body class="w-full min-h-screen select-none  font-[outfit]">
    {{-- homepage --}}
    @yield('homepageHeader')
    @yield('hero')
    @yield('overview')
    @yield('footer')
    {{-- js --}}
    {{-- swiper js --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            const mobileNavBtn = document.querySelector("#mobileNavToggler");
            const mobileNav = document.querySelector("#mobileNav");
            const mobileNavCheckbox = document.querySelector("#mobileNavToggler input[type=checkbox]");
            mobileNavBtn.addEventListener('click', ()=>{
                if(mobileNavCheckbox.checked) {
                    mobileNav.classList.replace('hidden', 'flex');
                } else {
                    mobileNav.classList.replace('flex', 'hidden');
                }
            })
        });
        // swiper hero
        var swiper = new Swiper("#hero .mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>
</html>