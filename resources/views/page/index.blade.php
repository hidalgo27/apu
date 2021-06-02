@extends('layouts.page.app')
@section('content')
    <header class="relative flex flex-col justify-between h-screen overflow-hidden">
        <div class="relative items-start grid grid-cols-3 justify-between z-30">
            <div></div>
            <div class="p-3">
                <a href="/"><img src="<?php echo e(asset('images/logo-apu.png')); ?>" alt="" class="w-60 mx-auto"></a>
            </div>
            <div class="flex justify-end p-8 invisible sm:visible">
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
                <h1 class="text-4xl font-cinzel text-gray-50 sm:text-6xl">Turismo Rural Comunitario</h1>
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
    <div class="bg-black z-30 text-gray-50 py-12">

        <h2 class="font-lusitana text-5xl text-center mb-6">Vara Pumayalli</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 items-center">
            <div class="p-16 order-2 sm:order-1">
                <p class="font-montserrat font-light tracking-tight leading-relaxed">heredero de un conocimiento amplio del arte textil; adquirido de padres a hijos, los cuales fueron profundizados en conocimiento a medida que pasaban los años en especial en los años 80 y 90. Ya con una amplia trayectoria en el arte textil de Chinchero; en los inicios del milenio, la familia Vara Pumayalli decide organizarse con mayor formalidad y toman la iniciativa de trabajar de manera organizada, con el fin de consolidar la preservación de la originalidad de este arte milenario, tomando en cuenta el diseño iconográfico así como la combinación de los colores originarios de Chinchero que son herencia invalorable de nuestros antepasados</p>
            </div>
            <div>
                <img src="{{asset('images/apu3.jpg')}}" alt="" class="w-full">
            </div>
        </div>

    </div>


    <div class="md:py-12">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-1/2 md:py-5 z-30">
                    <img src="{{asset('images/textil.jpg')}}" alt="" class="h-full w-full md:rounded-lg object-cover">
                </div>
                <div class="flex justify-end items-center md:w-1/2 -ml-36 md:shadow-lg md:rounded-lg border-primary hover:border-gray-50 transition duration-500">
                    <div class="w-9/12 p-12">
                        <h2 class="font-lusitana text-2xl mb-6">Centro de Interpretación Cultural</h2>
                        <p class="font-montserrat mb-6 font-light tracking-tight leading-relaxed">El local del Centro de Interpretación Cultural Apu Antasaqa, está ubicado a una hora de la ciudad del Cusco, a 10 minutos del parque arqueológico y del templo de Chinchero. Cuenta con un ambiente acogedor de espacio amplio; con una arquitectura propia de los Andes. En dicho local nuestros visitantes podrán sentirse cómodos para apreciar  toda la manifestación cultural del arte textil. Igualmente; tendrán la opción de adquirir una infinidad de productos de calidad a base de lana de alpaca, oveja y algodón. Cabe recalcar que la lana utilizada en nuestros textiles fueron elaboradas y teñidas a base de tintes naturales al igual que la cochinilla.</p>
                        <a href="{{route('textil')}}"  class=" px-12 py-3 text-xs font-light tracking-wider border border-primary hover:bg-primary hover:bg-opacity-50 hover:text-gray-50 transition duration-500 text-primary focus:outline-none focus:ring-2 focus:ring-gray-500">
                            Ver detalles
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-fixed bg-cover h-128" style="background-image: url({{asset('images/banner-textil.png')}})"></div>


    <div class="md:py-12">
        <div class="container mx-auto">

            <div class="flex flex-col md:flex-row mx-auto  md:px-16 md:gap-12 md:my-12">
                <div class=" md:w-3/5 h-full relative">

                    <div class="carousel relative shadow-2xl bg-white">
                        <div class="carousel-inner relative overflow-hidden">
                            <!--Slide 1-->
                            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                            <div class="carousel-item absolute opacity-0" style="height:75vh;">
                                <div class="block h-full relative w-full bg-yellow-500 text-white">
                                    <img src="{{asset('images/chicha/banner-chicha2.jpg')}}" alt="" class="h-full w-full object-cover">

                                    <div class="absolute top-0 bg-primary bg-opacity-50 z-30 h-full p-6 w-1/2 md:w-1/3 left-0 text-gray-50">
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
                                    <div class="absolute top-0 bg-primary bg-opacity-50 z-30 h-full p-6 w-1/2 md:w-1/3 left-0 text-gray-50">
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
                                    <div class="absolute top-0 bg-primary bg-opacity-50 z-30 h-full p-6 w-1/2 md:w-1/3 left-0 text-gray-50">
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
                <div class="md:w-2/5 relative">
                    <img src="{{asset('images/chicha/banner-chicha3.jpg')}}" alt="" class="h-full w-full object-cover">

                    <div class="absolute bottom-0 h-full md:h-auto left-0 bg-primary bg-opacity-50 z-30 p-6 w-full text-gray-50">
                        <p class="mb-8">En dicha  sala, los visitantes tendrán la oportunidad de  informarse sobre proceso completo de elaboración de la chicha así también los visitantes tendrán la opción de apreciar varios instrumentos de labor agrícola del hombre andino.</p>
                        <a href="{{route('chicha')}}"  class="px-12 py-3 text-xs font-light tracking-wider border border-gray-300 hover:bg-gray-200 hover:bg-opacity-5 transition duration-500 text-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300">Explorar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="bg-fixed bg-cover bg-center h-128" style="background-image: url({{asset('images/chicha/banner-chicha3.jpg')}})"></div>

    <div class="bg-black py-12">

        <div class="grid grid-cols-1 md:grid-cols-2 items-center">
            <div class="p-16">
                <h2 class="font-lusitana text-gray-50 text-2xl mb-6">Casa Antigua a la Usanza Ancestral de Chinchero</h2>
                <p class="font-montserrat font-light text-gray-50 mb-6 tracking-tight leading-relaxed">En otro ambiente, el visitante podrá apreciar una pequeña casa de infraestructura antigua al estilo del Ande. El cual mantiene una arquitectura esplendida de muchos años atrás. El día de hoy, esta construcción todavía mantiene su función tradicional de ser usada como una despensa familiar. La visita a este ambiente nos enseñara como el hombre del Ande almacena con las mismas técnicas ancestrales a fin de conservar refrigerada sus productos alimentarios por un periodo largo, para tal fin es utiliza algunos utensilios y vasijas de cerámica.</p>
                <a href="{{route('casa')}}"  class="px-12 py-3 text-xs font-light tracking-wider border border-gray-300 hover:bg-gray-200 hover:bg-opacity-5 transition duration-500 text-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300">Explorar</a>
            </div>
            <div class="carousel relative shadow-2xl bg-white">
                <div class="carousel-inner relative overflow-hidden">
                    <!--Slide 1-->
                    <input class="carousel-open" type="radio" id="carousel-4" name="carousel2" aria-hidden="true" hidden="" checked="checked">
                    <div class="carousel-item absolute opacity-0" style="height:75vh;">
                        <div class="block h-full relative w-full bg-yellow-500 text-white">
                            <img src="{{asset('images/casa/casa3.jpg')}}" alt="" class="h-full w-full object-cover">
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
        {{--                <img src="{{asset('images/casa/casa4.jpg')}}" alt="" class="w-full">--}}
        {{--            </div>--}}
        {{--            <div>--}}
        {{--                <img src="{{asset('images/casa/casa2.jpg')}}" alt="" class="w-full">--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
    <div class="bg-fixed bg-cover bg-center h-128" style="background-image: url({{asset('images/casa/casa4.jpg')}})"></div>

    <div class="md:py-12">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-1/2 md:py-5 z-30">
                    <img src="{{asset('images/hospedaje/hospedaje1.jpg')}}" alt="" class="h-full w-full md:rounded-lg object-cover">
                </div>
                <div class="flex justify-end items-center md:w-1/2 -ml-36 shadow-lg rounded-lg border-primary hover:border-gray-50 transition duration-500">
                    <div class="w-9/12 p-12">
                        <h2 class="font-lusitana text-2xl mb-6">Hospedaje Rural</h2>
                        <p class="font-montserrat mb-6 font-light tracking-tight leading-relaxed">Nuestro local cuenta con dos habitaciones acondicionadas para hospedaje, en un  lugar de ambiente agradable y tranquilo lejos del ruido de la ciudad. Dicho alojamiento presenta un estilo andino contemporáneo. Es ideal para personas que desean experimentar el Perú profundo en un ambiente rural. Check in 01:00 pm. Check out 09.00 am.</p>
                        <a href="{{route('hospedaje')}}"  class=" px-12 py-3 text-xs font-light tracking-wider border border-primary hover:bg-primary hover:bg-opacity-50 hover:text-gray-50 transition duration-500 text-primary focus:outline-none focus:ring-2 focus:ring-gray-500">
                            Ver detalles
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-fixed bg-cover h-128" style="background-image: url({{asset('images/hospedaje/hospedaje2.jpg')}})"></div>
@endsection
