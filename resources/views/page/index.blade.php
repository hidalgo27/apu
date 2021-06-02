<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <style>
        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }
        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3,
        #carousel-4:checked ~ .control-4,
        #carousel-5:checked ~ .control-5{
            display: block;
        }
        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }
        #carousel-1:checked
        ~ .control-1
        ~ .carousel-indicators
        li:nth-child(1)
        .carousel-bullet,
        #carousel-2:checked
        ~ .control-2
        ~ .carousel-indicators
        li:nth-child(2)
        .carousel-bullet,
        #carousel-3:checked
        ~ .control-3
        ~ .carousel-indicators
        li:nth-child(3)
        .carousel-bullet,
        #carousel-4:checked
        ~ .control-4
        ~ .carousel-indicators
        li:nth-child(4)
        .carousel-bullet,
        #carousel-5:checked
        ~ .control-5
        ~ .carousel-indicators
        li:nth-child(5)
        .carousel-bullet {
            color: #ffb317; /*Set to match the Tailwind colour you want the active one to be */
        }

    </style>
</head>
<body>
<div id="app">
    <div class="fixed z-40 p-8">
        <button onclick="openModal(true)" class="bg-green-500 hover:bg-green-600 rounded text-gray-50 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
            </svg>
        </button>
    </div>
    <header class="relative flex flex-col justify-between h-screen overflow-hidden">
        <div class="relative items-start grid grid-cols-3 justify-between z-30">
            <div></div>
            <div class="p-3">
                <img src="<?php echo e(asset('images/logo-apu.png')); ?>" alt="" class="w-60 mx-auto">
            </div>
            <div class="flex justify-end p-8">
                <a href="#" target="_blank" class="mx-2">
                    <i data-feather="facebook" class="text-gray-50" stroke-width="1"></i>
                </a>
                <a href="#" target="_blank" class="mx-2">
                    <i data-feather="twitter" class="text-gray-50" stroke-width="1"></i>
                </a>
                <a href="#" target="_blank" class="mx-2">
                    <i data-feather="youtube" class="text-gray-50" stroke-width="1"></i>
                </a>
                <a href="#" target="_blank" class="mx-2">
                    <i data-feather="instagram" class="text-gray-50" stroke-width="1"></i>
                </a>
            </div>
        </div>
        <div class="relative grid grid-cols-1 gap-12 place-items-center text-center justify-center text-white z-30">
            <div>
                <h1 class="text-6xl font-cinzel text-gray-50">Turismo Rural Comunitario</h1>
            </div>
            <div>
                <a href="#"  class="px-12 py-3 text-xs font-light tracking-wider border border-gray-300 hover:bg-gray-200 hover:bg-opacity-5 transition duration-500 text-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300">Explorar</a>
            </div>
        </div>
        <div class="relative z-30 p-5 flex justify-center">
            <a href="#" class="text-gray-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="animate-bounce h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
        <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
{{--            <source src="https://assets.mixkit.co/videos/preview/mixkit-set-of-plateaus-seen-from-the-heights-in-a-sunset-26070-large.mp4" type="video/mp4" />Your browser does not support the video tag.--}}
            <source src="{{asset('media/intro.mp4')}}" type="video/mp4" />Your browser does not support the video tag.
        </video>
{{--        <div class="vimeo-wrapper absolute z-10 w-auto min-w-full min-h-full max-w-none">--}}
{{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"--}}
{{--                    frameborder="0"  class="absolute z-10 w-auto min-w-full min-h-full max-w-none"></iframe>--}}
{{--        </div>--}}
        <div class="absolute z-10 w-auto min-w-full min-h-full bg-gray-900 max-w-none opacity-50">

        </div>
        <div class="bg-footer-texture bg-repeat-x absolute h-6 bg-12 bottom-0 w-full z-30"></div>

    </header>
    <!-- Alpine Js -->

    <!-- This example requires Tailwind CSS v2.0+ -->
    <!-- This example requires Tailwind CSS v2.0+ -->

    <!-- overlay -->
    <div id="modal_overlay" class="hidden fixed inset-0 bg-opacity-30 h-full w-full flex justify-start items-start md:items-center pt-10 md:pt-0 z-50">

        <!-- modal -->
        <div id="modal" class="opacity-0 transform -translate-x-full scale-150 relative w-1/4 md:w-1/4 h-full md:h-full bg-transparent rounded transition-opacity transition-transform duration-300">

            <svg
                class="absolute inset-0 w-full h-full text-primary"
                style="filter: drop-shadow(10px 0 10px #00000030)"
                preserveAspectRatio="none"
                viewBox="0 0 309 800"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M268.487 0H0V800H247.32C207.957 725 207.975 492.294 268.487 367.647C329 243 314.906 53.4314 268.487 0Z"
                />
            </svg>
            <!-- button close -->
            <button
                onclick="openModal(false)"
                class="absolute z-30 top-5 -right-8 bg-primary hover:bg-primary text-2xl w-10 h-10 rounded-full focus:outline-none text-gray-50">
                &cross;
            </button>

            <!-- header -->


            <!-- body -->
            <div class="w-full p-3 text-gray relative z-20">
                <img src="{{asset('images/logo-apu.png')}}" alt="">
            </div>

            {{--            <!-- footer -->--}}
            {{--            <div class="absolute bottom-0 left-0 px-4 py-3 border-t border-gray-200 w-full flex justify-end items-center gap-3">--}}

        </div>
    </div>


    <div class="bg-black z-30 text-gray-50 py-12">

        <h2 class="font-lusitana text-5xl text-center mb-6">Vara Pumayalli</h2>

            <div class="grid grid-cols-2 items-center">
                <div class="p-16">
                    <p class="font-montserrat font-light tracking-tight leading-relaxed">heredero de un conocimiento amplio del arte textil; adquirido de padres a hijos, los cuales fueron profundizados en conocimiento a medida que pasaban los años en especial en los años 80 y 90. Ya con una amplia trayectoria en el arte textil de Chinchero; en los inicios del milenio, la familia Vara Pumayalli decide organizarse con mayor formalidad y toman la iniciativa de trabajar de manera organizada, con el fin de consolidar la preservación de la originalidad de este arte milenario, tomando en cuenta el diseño iconográfico así como la combinación de los colores originarios de Chinchero que son herencia invalorable de nuestros antepasados</p>
                </div>
                <div>
                    <img src="{{asset('images/apu3.jpg')}}" alt="" class="w-full">
                </div>
            </div>

    </div>


    <div class="py-12">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="w-1/2 py-5 z-30">
                    <img src="{{asset('images/textil.jpg')}}" alt="" class="h-full w-full rounded-lg object-cover">
                </div>
                <div class="flex justify-end items-center w-1/2 -ml-36 shadow-lg rounded-lg border-primary hover:border-gray-50 transition duration-500">
                    <div class="w-9/12 p-12">
                        <h2 class="font-lusitana text-2xl mb-6">Centro de Interpretación Cultural</h2>
                        <p class="font-montserrat mb-6 font-light tracking-tight leading-relaxed">El local del Centro de Interpretación Cultural Apu Antasaqa, está ubicado a una hora de la ciudad del Cusco, a 10 minutos del parque arqueológico y del templo de Chinchero. Cuenta con un ambiente acogedor de espacio amplio; con una arquitectura propia de los Andes. En dicho local nuestros visitantes podrán sentirse cómodos para apreciar  toda la manifestación cultural del arte textil. Igualmente; tendrán la opción de adquirir una infinidad de productos de calidad a base de lana de alpaca, oveja y algodón. Cabe recalcar que la lana utilizada en nuestros textiles fueron elaboradas y teñidas a base de tintes naturales al igual que la cochinilla.</p>
                        <a href="#"  class=" px-12 py-3 text-xs font-light tracking-wider border border-primary hover:bg-primary hover:bg-opacity-50 hover:text-gray-50 transition duration-500 text-primary focus:outline-none focus:ring-2 focus:ring-gray-500">
                            Ver detalles
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-fixed bg-cover h-128" style="background-image: url({{asset('images/banner-textil.png')}})"></div>


    <div class="py-12">
        <div class="container mx-auto">

            <div class="flex mx-auto  px-16 gap-12 my-12">
                <div class="w-3/5 h-full relative">

                    <div class="carousel relative shadow-2xl bg-white">
                        <div class="carousel-inner relative overflow-hidden">
                            <!--Slide 1-->
                            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                            <div class="carousel-item absolute opacity-0" style="height:75vh;">
                                <div class="block h-full relative w-full bg-yellow-500 text-white">
                                    <img src="{{asset('images/chicha/banner-chicha2.jpg')}}" alt="" class="h-full w-full object-cover">
                                    <div class="absolute top-0 bg-primary opacity-50 h-full w-1/3 left-0"></div>
                                    <div class="absolute top-0 z-30 h-full p-6 w-1/3 left-0 text-gray-50">
                                        <h2 class="font-lusitana font-bold text-2xl mb-6">Sala de Exposición Cultural </h2>
                                        <p class="">La Sala de Exposición Cultural, es un pequeño museo compuesta por todo los utensilios de elaboración de la chicha, la bebida ancestral de los Inkas.</p>
                                    </div>

                                </div>
                            </div>
                            <label for="carousel-3" class="prev control-1  absolute right-0 bottom-0 cursor-pointer hidden bg-white opacity-70 z-10 mr-16 border-r border-gray-400">
                                    <div class="w-16 h-16 text-center align-bottom my-auto flex justify-center items-center">
                                        &#x276E;
                                    </div>
                            </label>
                            <label for="carousel-2" class="next control-1 absolute z-10 hidden bottom-0 right-0 bg-white opacity-70 w-16 h-16 cursor-pointer">
                                <div class="w-16 h-16 text-center align-bottom my-auto flex justify-center items-center">
                                    &#x276F;
                                </div>
                            </label>

                            <!--Slide 2-->
                            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                            <div class="carousel-item absolute opacity-0" style="height:75vh;">
                                <div class="block h-full w-full relative bg-yellow-500 text-white">
                                    <img src="{{asset('images/banner4.jpg')}}" alt="" class="h-full w-full object-cover">
                                    <div class="absolute top-0 bg-primary opacity-50 h-full w-1/3 left-0"></div>
                                    <div class="absolute top-0 z-30 h-full p-6 w-1/3 left-0 text-gray-50">
                                        <h2 class="font-lusitana font-bold text-2xl mb-6">Sala de Exposición Cultural </h2>
                                        <p class="">La Sala de Exposición Cultural, es un pequeño museo compuesta por todo los utensilios de elaboración de la chicha, la bebida ancestral de los Inkas.</p>
                                    </div>
                                </div>
                            </div>
                            <label for="carousel-1" class="prev control-2  absolute right-0 bottom-0 cursor-pointer hidden bg-white opacity-70 z-10 mr-16 border-r border-gray-400">
                                <div class="w-16 h-16 text-center align-bottom my-auto flex justify-center items-center">
                                    &#x276E;
                                </div>
                            </label>
                            <label for="carousel-3" class="next control-2 absolute z-10 hidden bottom-0 right-0 bg-white opacity-70 w-16 h-16 cursor-pointer">
                                <div class="w-16 h-16 text-center align-bottom my-auto flex justify-center items-center">
                                    &#x276F;
                                </div>
                            </label>

                            <!--Slide 3-->
                            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                            <div class="carousel-item absolute opacity-0" style="height:75vh;">
                                <div class="block h-full relative w-full bg-yellow-500 text-white">
                                    <img src="{{asset('images/chicha/banner-chicha1.jpg')}}" alt="" class="h-full w-full object-cover">
                                    <div class="absolute top-0 bg-primary opacity-50 h-full w-1/3 left-0"></div>
                                    <div class="absolute top-0 z-30 h-full p-6 w-1/3 left-0 text-gray-50">
                                        <h2 class="font-lusitana font-bold text-2xl mb-6">Sala de Exposición Cultural </h2>
                                        <p class="">La Sala de Exposición Cultural, es un pequeño museo compuesta por todo los utensilios de elaboración de la chicha, la bebida ancestral de los Inkas.</p>
                                    </div>
                                </div>
                            </div>
                            <label for="carousel-2" class="prev control-3  absolute right-0 bottom-0 cursor-pointer hidden bg-white opacity-70 z-10 mr-16 border-r border-gray-400">
                                <div class="w-16 h-16 text-center align-bottom my-auto flex justify-center items-center">
                                    &#x276E;
                                </div>
                            </label>
                            <label for="carousel-1" class="next control-3 absolute z-10 hidden bottom-0 right-0 bg-white opacity-70 w-16 h-16 cursor-pointer">
                                <div class="w-16 h-16 text-center align-bottom my-auto flex justify-center items-center">
                                    &#x276F;
                                </div>
                            </label>

                            <!-- Add additional indicators for each slide-->
{{--                            <ol class="carousel-indicators">--}}
{{--                                <li class="inline-block mr-3">--}}
{{--                                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>--}}
{{--                                </li>--}}
{{--                                <li class="inline-block mr-3">--}}
{{--                                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>--}}
{{--                                </li>--}}
{{--                                <li class="inline-block mr-3">--}}
{{--                                    <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>--}}
{{--                                </li>--}}
{{--                            </ol>--}}

                        </div>
                    </div>

                </div>
                <div class="w-2/5 relative">
                    <img src="{{asset('images/chicha/banner-chicha3.jpg')}}" alt="" class="h-full w-full object-cover">
                    <div class="absolute bottom-0 left-0 bg-primary h-60 opacity-50 w-full"></div>
                    <div class="absolute bottom-0 left-0 z-30 p-6 w-full text-gray-50">
                        <p class="mb-8">En dicha  sala, los visitantes tendrán la oportunidad de  informarse sobre proceso completo de elaboración de la chicha así también los visitantes tendrán la opción de apreciar varios instrumentos de labor agrícola del hombre andino.</p>
                        <a href="#"  class="px-12 py-3 text-xs font-light tracking-wider border border-gray-300 hover:bg-gray-200 hover:bg-opacity-5 transition duration-500 text-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300">Explorar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="bg-fixed bg-cover h-128" style="background-image: url({{asset('images/chicha/banner-chicha3.jpg')}})"></div>

    <div class="bg-black py-12">



        <div class="grid grid-cols-2 items-center">
            <div class="p-16">
                <h2 class="font-lusitana text-gray-50 text-2xl mb-6">Casa Antigua a la Usanza Ancestral de Chinchero</h2>
                <p class="font-montserrat font-light text-gray-50 mb-6 tracking-tight leading-relaxed">En otro ambiente, el visitante podrá apreciar una pequeña casa de infraestructura antigua al estilo del Ande. El cual mantiene una arquitectura esplendida de muchos años atrás. El día de hoy, esta construcción todavía mantiene su función tradicional de ser usada como una despensa familiar. La visita a este ambiente nos enseñara como el hombre del Ande almacena con las mismas técnicas ancestrales a fin de conservar refrigerada sus productos alimentarios por un periodo largo, para tal fin es utiliza algunos utensilios y vasijas de cerámica.</p>
                <a href="#"  class="px-12 py-3 text-xs font-light tracking-wider border border-gray-300 hover:bg-gray-200 hover:bg-opacity-5 transition duration-500 text-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300">Explorar</a>
            </div>
            <div class="carousel relative shadow-2xl bg-white">
                <div class="carousel-inner relative overflow-hidden">
                    <!--Slide 1-->
                    <input class="carousel-open" type="radio" id="carousel-4" name="carousel2" aria-hidden="true" hidden="" checked="checked">
                    <div class="carousel-item absolute opacity-0" style="height:75vh;">
                        <div class="block h-full relative w-full bg-yellow-500 text-white">
                            <img src="{{asset('images/casa/casa3.JPG')}}" alt="" class="h-full w-full object-cover">
                        </div>
                    </div>
                    <label for="carousel-5" class="prev control-4  absolute right-0 bottom-0 cursor-pointer hidden bg-white opacity-70 z-10 mr-16 border-r border-gray-400">
                        <div class="w-16 h-16 text-center align-bottom my-auto flex justify-center items-center">
                            &#x276E;
                        </div>
                    </label>
                    <label for="carousel-5" class="next control-4 absolute z-10 hidden bottom-0 right-0 bg-white opacity-70 w-16 h-16 cursor-pointer">
                        <div class="w-16 h-16 text-center align-bottom my-auto flex justify-center items-center">
                            &#x276F;
                        </div>
                    </label>

                    <!--Slide 2-->
                    <input class="carousel-open" type="radio" id="carousel-5" name="carousel2" aria-hidden="true" hidden="">
                    <div class="carousel-item absolute opacity-0" style="height:75vh;">
                        <div class="block h-full w-full relative bg-yellow-500 text-white">
                            <img src="{{asset('images/casa/casa2.jpg')}}" alt="" class="h-full w-full object-cover">
                        </div>
                    </div>
                    <label for="carousel-4" class="prev control-5  absolute right-0 bottom-0 cursor-pointer hidden bg-white opacity-70 z-10 mr-16 border-r border-gray-400">
                        <div class="w-16 h-16 text-center align-bottom my-auto flex justify-center items-center">
                            &#x276E;
                        </div>
                    </label>
                    <label for="carousel-4" class="next control-5 absolute z-10 hidden bottom-0 right-0 bg-white opacity-70 w-16 h-16 cursor-pointer">
                        <div class="w-16 h-16 text-center align-bottom my-auto flex justify-center items-center">
                            &#x276F;
                        </div>
                    </label>


                    <!-- Add additional indicators for each slide-->
                    {{--                            <ol class="carousel-indicators">--}}
                    {{--                                <li class="inline-block mr-3">--}}
                    {{--                                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="inline-block mr-3">--}}
                    {{--                                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="inline-block mr-3">--}}
                    {{--                                    <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>--}}
                    {{--                                </li>--}}
                    {{--                            </ol>--}}

                </div>
            </div>
        </div>

{{--        <div class="grid grid-cols-2 items-center">--}}
{{--            <div>--}}
{{--                <img src="{{asset('images/casa/casa1.JPG')}}" alt="" class="w-full">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <img src="{{asset('images/casa/casa2.jpg')}}" alt="" class="w-full">--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <div class="bg-fixed bg-cover bg-center h-128" style="background-image: url({{asset('images/casa/casa1.JPG')}})"></div>

    <div class="py-12">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="w-1/2 py-5 z-30">
                    <img src="{{asset('images/hospedaje/hospedaje1.jpg')}}" alt="" class="h-full w-full rounded-lg object-cover">
                </div>
                <div class="flex justify-end items-center w-1/2 -ml-36 shadow-lg rounded-lg border-primary hover:border-gray-50 transition duration-500">
                    <div class="w-9/12 p-12">
                        <h2 class="font-lusitana text-2xl mb-6">Hospedaje Rural</h2>
                        <p class="font-montserrat mb-6 font-light tracking-tight leading-relaxed">Nuestro local cuenta con dos habitaciones acondicionadas para hospedaje, en un  lugar de ambiente agradable y tranquilo lejos del ruido de la ciudad. Dicho alojamiento presenta un estilo andino contemporáneo. Es ideal para personas que desean experimentar el Perú profundo en un ambiente rural. Check in 01:00 pm. Check out 09.00 am.</p>
                        <a href="#"  class=" px-12 py-3 text-xs font-light tracking-wider border border-primary hover:bg-primary hover:bg-opacity-50 hover:text-gray-50 transition duration-500 text-primary focus:outline-none focus:ring-2 focus:ring-gray-500">
                            Ver detalles
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-fixed bg-cover h-128" style="background-image: url({{asset('images/hospedaje/hospedaje2.jpg')}})"></div>
<footer class="relative bg-primary pt-6">
    <div class="bg-footer-texture bg-repeat-x h-6 bg-12 top-0 w-full z-30"></div>
    <div class="container mx-auto text-center text-gray-50 py-3">
        Copyright Nebula 2021 All Rights Reserved
    </div>
</footer>
</div>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script>
    feather.replace();
    const modal_overlay = document.querySelector('#modal_overlay');
    const modal = document.querySelector('#modal');

    function openModal (value){
        const modalCl = modal.classList
        const overlayCl = modal_overlay

        if(value){
            overlayCl.classList.remove('hidden')
            setTimeout(() => {
                modalCl.remove('opacity-0')
                modalCl.remove('-translate-x-full')
                modalCl.remove('scale-150')
            }, 100);
        } else {
            modalCl.add('-translate-x-full')
            setTimeout(() => {
                modalCl.add('opacity-0')
                modalCl.add('scale-150')
            }, 100);
            setTimeout(() => overlayCl.classList.add('hidden'), 600);
        }
    }
    openModal(false);
</script>
</body>
</html>
