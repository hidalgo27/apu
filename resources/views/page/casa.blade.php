@extends('layouts.page.app')
@section('content')
    <header class="relative   justify-between bg-black overflow-hidden">
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
    @if (session('status'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Gracias por contactar con nosotros</strong><br>
        <span class="block sm:inline">Su mensaje fue enviado satisfactoriamente.</span>
    </div>
    @endif
    <div class="relative bg-black ">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 bg-black lg:max-w-2xl lg:w-full">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-black transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="sm:text-center lg:text-left py-32">
                        <h1 class="text-4xl mb-8 tracking-tight font-extrabold text-gray-50 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Casa Antigua a la  </span>
                            <span class="block text-indigo-600 xl:inline">Usanza Ancestral de Chinchero</span>
                        </h1>
                        <a href="#"  class="modal-open  px-12 py-3 text-xs font-bold bg-secondary text-gray-50 tracking-wider border border-secondary hover:bg-secondary hover:bg-opacity-80 hover:text-gray-50 transition duration-500 focus:outline-none focus:ring-2 focus:ring-gray-500">
                            Reserve Ahora
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=51958123295" target="_blank"  class="ml-3 px-12 py-3 text-xs font-light tracking-wider border border-gray-50 hover:bg-gray-500 hover:bg-opacity-50 hover:text-gray-100 transition duration-500 text-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500">
                            Alguna Duda?
                        </a>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-screen w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{asset('images/apu3.jpg')}}" alt="">
        </div>
        
    </div>


    <div class="bg-black py-12">

        <div class="grid grid-cols-1 md:grid-cols-2 items-center">
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
    <div class="bg-fixed md:bg-cover hidden md:block bg-center h-128" style="background-image: url({{asset('images/casa/casa4.jpg')}})"></div>

    <!--Modal-->
    <div class="modal m-0 opacity-0 pointer-events-none fixed w-full h-full z-40 top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

        <div class="modal-container bg-white w-11/12 md:max-w-2xl mx-auto rounded shadow-lg z-50 overflow-y-auto">

            <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
                <span class="text-sm">(Esc)</span>
            </div>

            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="p-5 mb-5 grid grid-cols-2 bg-secondary bg-opacity-90 flex justify-between items-center">
                    <div>
                        <p class="text-2xl font-bold text-white">Reservar</p>
                    </div>
                    <div class="modal-close cursor-pointer z-50 ">
                        <svg class="fill-current text-black float-right" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </div>
                </div>

                <form id="form font-lusitana" method="POST" action="{{route('reservar')}}" class="mx-5 mb-3">
                    @csrf
                    <div class="relative w-full mb-5">
                        <input type="text" name="tNombre" placeholder="Nombre" class="font-medium p-3 block w-full mt-0 bg-transparent border-2 focus:outline-none border-gray-200 rounded-lg" required/>
                    </div>
                    <div class="relative w-full mb-5">
                        <input type="email" name="tEmail" placeholder="Correo Electrónico" class="font-medium p-3 block w-full mt-0 bg-transparent border-2 focus:outline-none border-gray-200 rounded-lg" required/>
                    </div> 
                    <div class="relative w-full mb-5">
                        <input type="date" name="tDate" placeholder="Correo Electrónico" class="font-medium p-3 block w-full mt-0 bg-transparent border-2 focus:outline-none border-gray-200 rounded-lg" required/>
                    </div> 
                    <div class="pb-3 text-center">
                        <button type="submit" class="rounded  px-12 py-3 text-xs font-light bg-secondary text-gray-50 tracking-wider border border-secondary hover:bg-secondary hover:bg-opacity-80 hover:text-gray-50 transition duration-500 focus:outline-none focus:ring-2 focus:ring-gray-500">
                            Reservar
                        </button>     
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        var openmodal = document.querySelectorAll('.modal-open')
        for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function(event){
                event.preventDefault()
                toggleModal()
            })
        }

        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)

        var closemodal = document.querySelectorAll('.modal-close')
        for (var i = 0; i < closemodal.length; i++) {
            closemodal[i].addEventListener('click', toggleModal)
        }

        document.onkeydown = function(evt) {
            evt = evt || window.event
            var isEscape = false
            if ("key" in evt) {
                isEscape = (evt.key === "Escape" || evt.key === "Esc")
            } else {
                isEscape = (evt.keyCode === 27)
            }
            if (isEscape && document.body.classList.contains('modal-active')) {
                toggleModal()
            }
        };


        function toggleModal () {
            const body = document.querySelector('body')
            const modal = document.querySelector('.modal')
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
            body.classList.toggle('modal-active')
        }
    </script>
@endpush
