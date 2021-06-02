@extends('layouts.page.app')
@section('content')
    <header class="relative   justify-between bg-primary overflow-hidden">
        <div class="relative items-start grid grid-cols-3 justify-between z-30">
            <div></div>
            <div class="p-3">
                <a href="/"><img src="<?php echo e(asset('images/logo-apu.png')); ?>" alt="" class="w-60 mx-auto"></a>
            </div>
            <div class="flex justify-end p-8 invisible md:visible">
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



    </header>
    <div class="relative bg-primary ">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 bg-primary lg:max-w-2xl lg:w-full">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-secondary transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="sm:text-center lg:text-left py-32">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-50 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Sala de </span>
                            <span class="block text-indigo-600 xl:inline">Exposición Cultural</span>
                        </h1>
                        {{--                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">--}}
                        {{--                            El local del Centro de Interpretación Cultural Apu Antasaqa, está ubicado a una hora de la ciudad del Cusco, a 10 minutos del parque arqueológico y del templo de Chinchero. Cuenta con un ambiente acogedor de espacio amplio; con una arquitectura propia de los Andes. En dicho local nuestros visitantes podrán sentirse cómodos para apreciar  toda la manifestación cultural del arte textil. Igualmente; tendrán la opción de adquirir una infinidad de productos de calidad a base de lana de alpaca, oveja y algodón. Cabe recalcar que la lana utilizada en nuestros textiles fueron elaboradas y teñidas a base de tintes naturales al igual que la cochinilla.--}}
                        {{--                        </p>--}}
                        {{--                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">--}}
                        {{--                            <div class="rounded-md shadow">--}}
                        {{--                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">--}}
                        {{--                                    Get started--}}
                        {{--                                </a>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="mt-3 sm:mt-0 sm:ml-3">--}}
                        {{--                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">--}}
                        {{--                                    Live demo--}}
                        {{--                                </a>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-screen w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{asset('images/chicha/banner-chicha3.jpg')}}" alt="">
        </div>
    </div>

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

                        </div>
                    </div>

                </div>
                <div class=" md:w-2/5 relative">
                    <img src="{{asset('images/chicha/banner-chicha3.jpg')}}" alt="" class="h-full w-full object-cover">

                    <div class="absolute bottom-0 h-full md:h-auto left-0 bg-primary bg-opacity-50 z-30 p-6 w-full text-gray-50">
                        <p class="mb-8">En dicha  sala, los visitantes tendrán la oportunidad de  informarse sobre proceso completo de elaboración de la chicha así también los visitantes tendrán la opción de apreciar varios instrumentos de labor agrícola del hombre andino.</p>
                        <a href="#"  class="px-12 py-3 text-xs font-light tracking-wider border border-gray-300 hover:bg-gray-200 hover:bg-opacity-5 transition duration-500 text-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-300">Explorar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="bg-fixed bg-cover bg-center h-128" style="background-image: url({{asset('images/chicha/banner-chicha3.jpg')}})"></div>
@endsection
