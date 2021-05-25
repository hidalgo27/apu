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
    <header class="relative flex flex-col justify-between h-screen overflow-hidden">
        <div class="relative items-start grid grid-cols-3 justify-between z-30">
            <div class="fixed p-8">
                <button onclick="openModal(true)" class="bg-green-500 hover:bg-green-600 rounded text-gray-50 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                    </svg>
                </button>
            </div>
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
    <div id="modal_overlay" class="hidden fixed inset-0 bg-opacity-30 h-full w-full flex justify-start items-start md:items-center pt-10 md:pt-0 z-30">

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


    <div class="bg-black text-gray-50 py-12">

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
                        <h2 class="font-lusitana text-2xl mb-6">Textileria</h2>
                        <p class="font-montserrat font-light tracking-tight leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis culpa magni molestiae nisi vero. Ad, aspernatur cupiditate doloribus, dolorum eligendi error iusto nam nulla perspiciatis saepe sit unde voluptates.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-fixed h-128" style="background-image: url({{asset('images/banner3.jpg')}})"></div>


    <div class="py-12">
        <div class="container mx-auto">
            <div class="flex mx-auto  px-16 gap-12 my-12">
                <div class="w-3/5 h-full relative">
                    <img src="{{asset('images/interpretacion.jpg')}}" alt="" class="h-full w-full object-cover">
                    <div class="absolute top-0 bg-primary opacity-50 h-full w-1/4 left-0"></div>
                    <div class="absolute top-0 z-30 h-full p-6 w-1/4 left-0">
                        <h2 class="text-white font-lusitana font-bold text-2xl">hola</h2>
                    </div>
                </div>
                <div class="w-2/5 relative">
                    <img src="{{asset('images/interpretacion.jpg')}}" alt="" class="h-full w-full object-cover">
                    <div class="absolute bottom-0 left-0 bg-primary h-40 opacity-50 w-full"></div>
                    <div class="absolute bottom-0 left-0 z-30 h-40 p-6 w-full">
                        <h2 class="text-white font-lusitana font-bold text-2xl">hola</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
