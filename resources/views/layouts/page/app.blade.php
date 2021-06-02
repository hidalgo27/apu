<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
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
                <a href="/"><img src="{{asset('images/logo-apu.png')}}" alt="logo apu" class="p-6"></a>

                <div class="border border-2 mt-9 border-gray-100 border-opacity-30 mb-12"></div>

                <div class="grid grid-cols-1 gap-8 text-gray-100 ease-in-out">
                    <div>
                        <a href="{{route('textil')}}" class="text-sm bg-gray-900 p-3 rounded bg-opacity-30 border-primary hover:bg-opacity-50 transition duration-500">
                            Centro de Interpretación Cultural
                        </a>
                    </div>
                    <div>
                        <a href="{{route('chicha')}}" class="text-sm bg-gray-900 p-3 rounded bg-opacity-30 border-primary hover:bg-opacity-50 transition duration-500">
                            Sala de Exposición Cultural
                        </a>
                    </div>
                    <div>
                        <a href="{{route('casa')}}" class="text-sm truncate bg-gray-900 p-3 rounded bg-opacity-30 border-primary hover:bg-opacity-50 transition duration-500">
                            Casa Antigua a la Usanza Ancestral
                        </a>
                    </div>
                    <div>
                        <a href="{{route('hospedaje')}}" class="text-sm bg-gray-900 p-3 rounded bg-opacity-30 border-primary hover:bg-opacity-50 transition duration-500">
                            Hospedaje Rural
                        </a>
                    </div>
                </div>
            </div>

            {{--            <!-- footer -->--}}
                        <div class="absolute bottom-0 left-0  py-3  w-full flex  items-center">
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
    </div>


    @yield('content')

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
