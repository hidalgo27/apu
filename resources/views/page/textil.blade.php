@extends('layouts.page.app')
@section('content')
    <header class="relative   justify-between bg-secondary overflow-hidden">
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
    <div class="relative bg-secondary ">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 bg-secondary lg:max-w-2xl lg:w-full">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-primary transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="sm:text-center lg:text-left py-24">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-50 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Centro de </span>
                            <span class="block text-indigo-600 xl:inline">Interpretación Cultural</span>
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
            <img class="h-screen w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{asset('images/textil/_P3A6024.jpg')}}" alt="">
        </div>
    </div>

    <div class="md:py-12">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-1/2 order-2 md:order-1 md:py-5 z-30">
                    <img src="{{asset('images/textil.jpg')}}" alt="" class="h-full w-full md:rounded-lg object-cover">
                </div>
                <div class="flex justify-end order-1 items-center md:w-1/2 -ml-36 md:shadow-lg md:rounded-lg border-primary hover:border-gray-50 transition duration-500">
                    <div class="w-9/12 p-12">
                        <h2 class="font-lusitana text-2xl mb-6">Centro de Interpretación Cultural</h2>
                        <p class="font-montserrat mb-6 font-light tracking-tight leading-relaxed">El local del Centro de Interpretación Cultural Apu Antasaqa, está ubicado a una hora de la ciudad del Cusco, a 10 minutos del parque arqueológico y del templo de Chinchero. Cuenta con un ambiente acogedor de espacio amplio; con una arquitectura propia de los Andes. En dicho local nuestros visitantes podrán sentirse cómodos para apreciar  toda la manifestación cultural del arte textil. Igualmente; tendrán la opción de adquirir una infinidad de productos de calidad a base de lana de alpaca, oveja y algodón. Cabe recalcar que la lana utilizada en nuestros textiles fueron elaboradas y teñidas a base de tintes naturales al igual que la cochinilla.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="cotizar" class="container mx-auto my-12">
        @if (session('status'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 my-3 rounded relative" role="alert">
            <strong class="font-bold">Gracias por contactar con nosotros</strong><br>
            <span class="block sm:inline">Su mensaje fue enviado satisfactoriamente.</span>
        </div>
        @endif
        <div class="grid grid-cols-1 md:grid-cols-3 mx-auto gap-12">
            @foreach ($collection as $item)
                <div class="relative overflow-hidden">
                    <div class="p-3 border rounded">
                        <img src="{{asset($item[1])}}" alt="" class="rounded relative bg-cover min-w-full transition duration-500 ease-in-out transform hover:-translate-x-0 hover:scale-105">
                    </div>
                    <div class="px-3 py-3 rounded shadow-lg -mt-5 m-2 bg-gray-100 relative z-30">
                        <h3 class="font- font-lusitana text-2xl mb-6">{{$item[0]}}</h3>
                        <div class="flex gap-4">
                            <button type="button" onclick="toggleModal('modal-id{{$loop->index}}')" class="rounded  px-12 py-3 text-xs font-light bg-secondary text-gray-50 tracking-wider border border-secondary hover:bg-secondary hover:bg-opacity-80 hover:text-gray-50 transition duration-500 focus:outline-none focus:ring-2 focus:ring-gray-500">
                                Cotizar Ahora
                            </button>
                        </div>
                    </div>
                </div>

                <div class="hidden  overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center animated fadeIn faster" id="modal-id{{$loop->index}}">
                    <div class="relative animated fadeIn faster my-6 mx-auto">
                        <!--content-->
                        <div class="border-0 animated fadeIn faster rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                            <!--header-->
                            <div class="grid grid-cols-2 bg-secondary bg-opacity-90 mb-5 flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                                <div>
                                    <h3 class="text-2xl font-semibold text-white">
                                        Cotizar <span class="lowercase">{{$item[0]}}</span>
                                    </h3>
                                </div>
                                <div>
                                    <button class="p-1 ml-auto border-0 float-right text-3xl leading-none font-extrabold outline-none focus:outline-none mx-2" onclick="toggleModal('modal-id{{$loop->index}}')">
                                    <span class=" h-6 w-6 text-2xl block outline-none focus:outline-none">
                                        <svg class="fill-current text-gray-900 " xmlns="http://www.w3.org/2000/svg" width="25" height=25 viewBox="0 0 18 18">
                                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                        </svg>
                                    </span>
                                    </button>
                                </div>
                            </div>
                            <!--body-->
                            <form id="form font-lusitana" method="POST" action="{{route('cotizar')}}" class="mx-10">
                                @csrf
                                <input type="hidden" name="tProducto" value="{{$item[0]}}">
                                <div class="relative w-full mb-5 ">
                                    <input type="text" name="tNombre" placeholder="Nombre" class="font-medium p-3 block w-full mt-0 bg-transparent border-2 focus:outline-none border-gray-200 rounded-lg" required/>
                                </div>
                                <div class="relative w-full mb-5 border-b-1">
                                    <input type="email" name="tEmail" placeholder="Correo Electrónico" class="font-medium p-3 block w-full mt-0 bg-transparent border-2 focus:outline-none border-gray-200 rounded-lg" required/>
                                </div>
                                <div class="pb-3 text-center">
                                    <button type="submit" class="modal-close transition duration-500 transform hover:-translate-y-1 hover:scale-110 rounded  px-12 py-3 text-xs font-light bg-secondary text-gray-50 tracking-wider border border-secondary hover:bg-secondary hover:bg-opacity-80 hover:text-gray-50 transition duration-500 focus:outline-none focus:ring-2 focus:ring-gray-500">
                                        Enviar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="hidden bg-gray-900 opacity-70 modal fixed inset-0 z-40 animated fadeIn faster" id="modal-id{{$loop->index}}-backdrop"></div>
            @endforeach
        </div>
    </div>

    <div class="bg-fixed md:bg-cover hidden md:block bg-center h-128" style="background-image: url({{asset('images/banner-textil.png')}});"></div>


@endsection

    @push('scripts')
        <script>
            function toggleModal(modalID){
                document.getElementById(modalID).classList.toggle("hidden");
                document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                document.getElementById(modalID).classList.toggle("flex");
                document.getElementById(modalID + "-backdrop").classList.toggle("flex");
            }
        </script>
    @endpush

