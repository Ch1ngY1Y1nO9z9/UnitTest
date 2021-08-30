<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $seo = App\Seo::find(1); ?>
    <meta name="keywords" content="{{$seo->keyword}}">
    <meta name="description" content="{{$seo->description}}" />
    <title>{{$seo->title}}</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-GXF49ZEXBX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-GXF49ZEXBX');
    </script>

    @yield('recaptcha') -->


    <link href="/css/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        body {
            background: url('/src/imgs/bg.png');
        }

        .swiper-button-next:after,
        .swiper-container-rtl .swiper-button-prev:after,
        .swiper-button-prev:after,
        .swiper-container-rtl .swiper-button-next:after {
            content: "";
        }
    </style>

    @yield('css')
</head>

<body>
    <header class="text-gray-600 body-font shadow bg-hmit-blue">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="/">
                <span class="ml-3 text-xl bg-white p-2 px-3">
                    <img class="h-10" src="/img/logo.png" alt="HMIT">
                </span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">

                <a class="inline-flex items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3" href="#">
                    About us
                </a>

                <a class="inline-flex items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3" href="#Classification">
                    Classification
                </a>

                <a class="inline-flex items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3" href="#">
                    Exhibition
                </a>

                <a class="inline-flex items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0 mr-3" href="#News">
                    News
                </a>
            </nav>
            <a class="inline-flex items-center text-white border-0 py-1 px-3 pb-1 hover:underline rounded text-base mt-4 md:mt-0"
                href="#ContactUs">
                Contact Us
            </a>
        </div>
    </header>



    @yield('content')

    <footer class="text-white body-font">
        <div class="bg-hmit-blue">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-white text-sm text-center sm:text-left">© 2021 HMIT, inc.</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    @yield('js')
</body>
</html>
