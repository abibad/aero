@extends('layouts.public')

@section('titulo', 'Proyectos')

@section('content')
    <div class="min-h-screen w-screen text-white relative overflow-hidden">
    <!-- Sección de Introducción -->
    <section class="text-center mb-12 relative z-10 pt-24" data-aos="fade-down">
        <h1 id="typed-title" class="text-5xl font-extrabold bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 text-transparent bg-clip-text"></h1>
        <p class="text-lg text-gray-300 mt-4 max-w-2xl mx-auto">
            Descubre nuestros proyectos innovadores en el campo aeroespacial.
        </p>
    </section>

    <div id="typed-strings" class="hidden">
        <span>Proyectos Aeroespaciales</span>
        <span>Innovación en el Espacio</span>
        <span>Tecnología del Futuro</span>
    </div>

    <!-- Grid de Proyectos -->
    <div class="container mx-auto px-6 pb-24 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Proyecto 1 -->
            <div class="group" data-aos="fade-up" data-aos-delay="100">
                <div class="relative overflow-hidden rounded-xl bg-gray-800 p-8 border border-gray-700 hover:border-cyan-400 transition-all duration-300 transform hover:scale-105">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 h-16 w-16 rounded-full bg-gradient-to-r from-cyan-400 to-blue-500 opacity-50 blur-xl group-hover:opacity-75 transition-opacity"></div>
                    <h3 class="text-2xl font-bold text-cyan-300 mb-4">Satélite de Observación</h3>
                    <p class="text-gray-300 mb-6">Desarrollo de satélites avanzados para monitoreo ambiental y predicción climática.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-cyan-400">En Desarrollo</span>
                        <button class="px-4 py-2 bg-cyan-500 text-black rounded-lg hover:bg-cyan-400 transition-colors">Ver Detalles</button>
                    </div>
                </div>
            </div>

            <!-- Proyecto 2 -->
            <div class="group" data-aos="fade-up" data-aos-delay="200">
                <div class="relative overflow-hidden rounded-xl bg-gray-800 p-8 border border-gray-700 hover:border-cyan-400 transition-all duration-300 transform hover:scale-105">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 h-16 w-16 rounded-full bg-gradient-to-r from-purple-400 to-pink-500 opacity-50 blur-xl group-hover:opacity-75 transition-opacity"></div>
                    <h3 class="text-2xl font-bold text-cyan-300 mb-4">Propulsión Iónica</h3>
                    <p class="text-gray-300 mb-6">Investigación y desarrollo de sistemas de propulsión iónica para viajes espaciales de larga duración.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-purple-400">Investigación</span>
                        <button class="px-4 py-2 bg-cyan-500 text-black rounded-lg hover:bg-cyan-400 transition-colors">Ver Detalles</button>
                    </div>
                </div>
            </div>

            <!-- Proyecto 3 -->
            <div class="group" data-aos="fade-up" data-aos-delay="300">
                <div class="relative overflow-hidden rounded-xl bg-gray-800 p-8 border border-gray-700 hover:border-cyan-400 transition-all duration-300 transform hover:scale-105">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 h-16 w-16 rounded-full bg-gradient-to-r from-blue-400 to-green-500 opacity-50 blur-xl group-hover:opacity-75 transition-opacity"></div>
                    <h3 class="text-2xl font-bold text-cyan-300 mb-4">Hábitat Lunar</h3>
                    <p class="text-gray-300 mb-6">Diseño y desarrollo de módulos habitacionales para futuras colonias lunares.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-blue-400">Planificación</span>
                        <button class="px-4 py-2 bg-cyan-500 text-black rounded-lg hover:bg-cyan-400 transition-colors">Ver Detalles</button>
                    </div>
                </div>
            </div>

            <!-- Proyecto 4 -->
            <div class="group" data-aos="fade-up" data-aos-delay="400">
                <div class="relative overflow-hidden rounded-xl bg-gray-800 p-8 border border-gray-700 hover:border-cyan-400 transition-all duration-300 transform hover:scale-105">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 h-16 w-16 rounded-full bg-gradient-to-r from-red-400 to-orange-500 opacity-50 blur-xl group-hover:opacity-75 transition-opacity"></div>
                    <h3 class="text-2xl font-bold text-cyan-300 mb-4">Rover Marciano</h3>
                    <p class="text-gray-300 mb-6">Desarrollo de vehículos autónomos para exploración y análisis de la superficie marciana.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-red-400">Prototipo</span>
                        <button class="px-4 py-2 bg-cyan-500 text-black rounded-lg hover:bg-cyan-400 transition-colors">Ver Detalles</button>
                    </div>
                </div>
            </div>

            <!-- Proyecto 5 -->
            <div class="group" data-aos="fade-up" data-aos-delay="500">
                <div class="relative overflow-hidden rounded-xl bg-gray-800 p-8 border border-gray-700 hover:border-cyan-400 transition-all duration-300 transform hover:scale-105">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 h-16 w-16 rounded-full bg-gradient-to-r from-green-400 to-teal-500 opacity-50 blur-xl group-hover:opacity-75 transition-opacity"></div>
                    <h3 class="text-2xl font-bold text-cyan-300 mb-4">Telescopio Orbital</h3>
                    <p class="text-gray-300 mb-6">Diseño de telescopios espaciales de nueva generación para observación profunda del cosmos.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-green-400">Diseño</span>
                        <button class="px-4 py-2 bg-cyan-500 text-black rounded-lg hover:bg-cyan-400 transition-colors">Ver Detalles</button>
                    </div>
                </div>
            </div>

            <!-- Proyecto 6 -->
            <div class="group" data-aos="fade-up" data-aos-delay="600">
                <div class="relative overflow-hidden rounded-xl bg-gray-800 p-8 border border-gray-700 hover:border-cyan-400 transition-all duration-300 transform hover:scale-105">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 h-16 w-16 rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 opacity-50 blur-xl group-hover:opacity-75 transition-opacity"></div>
                    <h3 class="text-2xl font-bold text-cyan-300 mb-4">Estación Espacial</h3>
                    <p class="text-gray-300 mb-6">Desarrollo de módulos y sistemas para la próxima generación de estaciones espaciales.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-yellow-400">Conceptual</span>
                        <button class="px-4 py-2 bg-cyan-500 text-black rounded-lg hover:bg-cyan-400 transition-colors">Ver Detalles</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection