@extends('layouts.public')

@section('titulo', 'Proyectos')

@section('content')
<div class="min-h-screen w-screen text-white relative overflow-hidden">
    <!-- Sección de Introducción con animación mejorada -->
    <section class="text-center mb-12 relative z-10 pt-24" data-aos="fade-down">
        <h1 id="typed-title" class="text-6xl font-extrabold bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 text-transparent bg-clip-text mb-4"></h1>
        <p class="text-xl text-gray-300 mt-4 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
            Explora nuestros proyectos revolucionarios que están dando forma al futuro de la exploración espacial.
        </p>
    </section>

    <div id="typed-strings" class="hidden">
        <span>Proyectos Revolucionarios</span>
        <span>Innovación Espacial</span>
        <span>El Futuro es Ahora</span>
    </div>

    <!-- Filtros de Proyectos -->
    <div class="container mx-auto px-6 mb-12" data-aos="fade-up" data-aos-delay="300">
        <div class="flex flex-wrap justify-center gap-4">
            <button class="px-6 py-2 rounded-full bg-gray-800 text-cyan-400 hover:bg-cyan-500 hover:text-black transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                Todos
            </button>
            <button class="px-6 py-2 rounded-full bg-gray-800 text-cyan-400 hover:bg-cyan-500 hover:text-black transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                En Desarrollo
            </button>
            <button class="px-6 py-2 rounded-full bg-gray-800 text-cyan-400 hover:bg-cyan-500 hover:text-black transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                Investigación
            </button>
            <button class="px-6 py-2 rounded-full bg-gray-800 text-cyan-400 hover:bg-cyan-500 hover:text-black transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                Completados
            </button>
        </div>
    </div>

    <!-- Grid de Proyectos Mejorado -->
    <div class="container mx-auto px-6 pb-24 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Proyecto 1: Satélite de Observación -->
            <div class="group perspective" data-aos="fade-up" data-aos-delay="100">
                <div class="relative transform-gpu transition-all duration-500 group-hover:rotate-y-12 group-hover:scale-105">
                    <div class="rounded-xl bg-gray-800 p-8 border border-gray-700 hover:border-cyan-400 shadow-xl backdrop-blur-sm">
                        <div class="absolute top-0 right-0 -mt-4 -mr-4 h-24 w-24 rounded-full bg-gradient-to-r from-cyan-400 to-blue-500 opacity-50 blur-2xl group-hover:opacity-75 transition-opacity"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-2xl font-bold text-cyan-300">Satélite de Observación</h3>
                                <span class="px-3 py-1 rounded-full bg-cyan-500/20 text-cyan-400 text-sm font-medium">En Desarrollo</span>
                            </div>
                            <div class="mb-6">
                                <div class="relative pt-1">
                                    <div class="flex mb-2 items-center justify-between">
                                        <div class="text-sm text-gray-300">Progreso del Proyecto</div>
                                        <div class="text-sm text-cyan-400">75%</div>
                                    </div>
                                    <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-700">
                                        <div class="w-3/4 shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-gradient-to-r from-cyan-400 to-blue-500"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-300 mb-6">Desarrollo de satélites avanzados para monitoreo ambiental y predicción climática con tecnología de última generación.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex -space-x-2">
                                    <img class="w-8 h-8 rounded-full border-2 border-gray-800" src="{{ asset('images/claudia.jpg') }}" alt="Miembro 1">
                                    <img class="w-8 h-8 rounded-full border-2 border-gray-800" src="{{ asset('images/doc.jpg') }}" alt="Miembro 2">
                                    <img class="w-8 h-8 rounded-full border-2 border-gray-800" src="{{ asset('images/carmen.jpg') }}" alt="Miembro 3">
                                </div>
                                <button class="px-4 py-2 bg-gradient-to-r from-cyan-500 to-blue-500 text-black rounded-lg hover:from-cyan-400 hover:to-blue-400 transition-all duration-300 transform hover:scale-105 font-medium">
                                    Ver Detalles
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proyecto 2: Propulsión Iónica -->
            <div class="group perspective" data-aos="fade-up" data-aos-delay="200">
                <div class="relative transform-gpu transition-all duration-500 group-hover:rotate-y-12 group-hover:scale-105">
                    <div class="rounded-xl bg-gray-800 p-8 border border-gray-700 hover:border-purple-400 shadow-xl backdrop-blur-sm">
                        <div class="absolute top-0 right-0 -mt-4 -mr-4 h-24 w-24 rounded-full bg-gradient-to-r from-purple-400 to-pink-500 opacity-50 blur-2xl group-hover:opacity-75 transition-opacity"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-2xl font-bold text-purple-300">Propulsión Iónica</h3>
                                <span class="px-3 py-1 rounded-full bg-purple-500/20 text-purple-400 text-sm font-medium">Investigación</span>
                            </div>
                            <div class="mb-6">
                                <div class="relative pt-1">
                                    <div class="flex mb-2 items-center justify-between">
                                        <div class="text-sm text-gray-300">Progreso del Proyecto</div>
                                        <div class="text-sm text-purple-400">45%</div>
                                    </div>
                                    <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-700">
                                        <div class="w-5/12 shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-gradient-to-r from-purple-400 to-pink-500"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-300 mb-6">Investigación y desarrollo de sistemas de propulsión iónica revolucionarios para viajes espaciales de larga duración.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex -space-x-2">
                                    <img class="w-8 h-8 rounded-full border-2 border-gray-800" src="{{ asset('images/doc.jpg') }}" alt="Miembro 1">
                                    <img class="w-8 h-8 rounded-full border-2 border-gray-800" src="{{ asset('images/claudia.jpg') }}" alt="Miembro 2">
                                </div>
                                <button class="px-4 py-2 bg-gradient-to-r from-purple-500 to-pink-500 text-black rounded-lg hover:from-purple-400 hover:to-pink-400 transition-all duration-300 transform hover:scale-105 font-medium">
                                    Ver Detalles
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proyecto 3: Hábitat Lunar -->
            <div class="group perspective" data-aos="fade-up" data-aos-delay="300">
                <div class="relative transform-gpu transition-all duration-500 group-hover:rotate-y-12 group-hover:scale-105">
                    <div class="rounded-xl bg-gray-800 p-8 border border-gray-700 hover:border-blue-400 shadow-xl backdrop-blur-sm">
                        <div class="absolute top-0 right-0 -mt-4 -mr-4 h-24 w-24 rounded-full bg-gradient-to-r from-blue-400 to-green-500 opacity-50 blur-2xl group-hover:opacity-75 transition-opacity"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-2xl font-bold text-blue-300">Hábitat Lunar</h3>
                                <span class="px-3 py-1 rounded-full bg-blue-500/20 text-blue-400 text-sm font-medium">Planificación</span>
                            </div>
                            <div class="mb-6">
                                <div class="relative pt-1">
                                    <div class="flex mb-2 items-center justify-between">
                                        <div class="text-sm text-gray-300">Progreso del Proyecto</div>
                                        <div class="text-sm text-blue-400">25%</div>
                                    </div>
                                    <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-700">
                                        <div class="w-1/4 shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-gradient-to-r from-blue-400 to-green-500"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-300 mb-6">Diseño y desarrollo de módulos habitacionales autosostenibles para futuras colonias lunares permanentes.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex -space-x-2">
                                    <img class="w-8 h-8 rounded-full border-2 border-gray-800" src="{{ asset('images/carmen.jpg') }}" alt="Miembro 1">
                                    <img class="w-8 h-8 rounded-full border-2 border-gray-800" src="{{ asset('images/doc.jpg') }}" alt="Miembro 2">
                                </div>
                                <button class="px-4 py-2 bg-gradient-to-r from-blue-500 to-green-500 text-black rounded-lg hover:from-blue-400 hover:to-green-400 transition-all duration-300 transform hover:scale-105 font-medium">
                                    Ver Detalles
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Proyecto 4: Telescopio Cuántico -->
            <div class="group perspective" data-aos="fade-up" data-aos-delay="400">
                <div class="relative transform-gpu transition-all duration-500 group-hover:rotate-y-12 group-hover:scale-105">
                    <div class="rounded-xl bg-gray-800 p-8 border border-gray-700 hover:border-green-400 shadow-xl backdrop-blur-sm">
                        <div class="absolute top-0 right-0 -mt-4 -mr-4 h-24 w-24 rounded-full bg-gradient-to-r from-green-400 to-teal-500 opacity-50 blur-2xl group-hover:opacity-75 transition-opacity"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-2xl font-bold text-green-300">Telescopio Cuántico</h3>
                                <span class="px-3 py-1 rounded-full bg-green-500/20 text-green-400 text-sm font-medium">En Desarrollo</span>
                            </div>
                            <div class="mb-6">
                                <div class="relative pt-1">
                                    <div class="flex mb-2 items-center justify-between">
                                        <div class="text-sm text-gray-300">Progreso del Proyecto</div>
                                        <div class="text-sm text-green-400">60%</div>
                                    </div>
                                    <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-700">
                                        <div class="w-3/5 shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-gradient-to-r from-green-400 to-teal-500"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-300 mb-6">Desarrollo de un telescopio revolucionario que utiliza principios de la mecánica cuántica para observar el universo distante.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex -space-x-2">
                                    <img class="w-8 h-8 rounded-full border-2 border-gray-800" src="{{ asset('images/claudia.jpg') }}" alt="Miembro 1">
                                    <img class="w-8 h-8 rounded-full border-2 border-gray-800" src="{{ asset('images/carmen.jpg') }}" alt="Miembro 2">
                                </div>
                                <button class="px-4 py-2 bg-gradient-to-r from-green-500 to-teal-500 text-black rounded-lg hover:from-green-400 hover:to-teal-400 transition-all duration-300 transform hover:scale-105 font-medium">
                                    Ver Detalles
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proyecto 5: Exploración de Exoplanetas -->
            <div class="group perspective" data-aos="fade-up" data-aos-delay="500">
                <div class="relative transform-gpu transition-all duration-500 group-hover:rotate-y-12 group-hover:scale-105">
                    <div class="rounded-xl bg-gray-800 p-8 border border-gray-700 hover:border-pink-400 shadow-xl backdrop-blur-sm">
                        <div class="absolute top-0 right-0 -mt-4 -mr-4 h-24 w-24 rounded-full bg-gradient-to-r from-pink-400 to-red-500 opacity-50 blur-2xl group-hover:opacity-75 transition-opacity"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-2xl font-bold text-pink-300">Exploración de Exoplanetas</h3>
                                <span class="px-3 py-1 rounded-full bg-pink-500/20 text-pink-400 text-sm font-medium">Investigación</span>
                            </div>
                            <div class="mb-6">
                                <div class="relative pt-1">
                                    <div class="flex mb-2 items-center justify-between">
                                        <div class="text-sm text-gray-300">Progreso del Proyecto</div>
                                        <div class="text-sm text-pink-400">35%</div>
                                    </div>
                                    <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-700">
                                        <div class="w-1/3 shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-gradient-to-r from-pink-400 to-red-500"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-300 mb-6">Investigación avanzada para la detección y análisis de exoplanetas potencialmente habitables en sistemas estelares cercanos.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex -space-x-2">
                                    <img class="w-8 h-8 rounded-full border-2 border-gray-800" src="{{ asset('images/doc.jpg') }}" alt="Miembro 1">
                                    <img class="w-8 h-8 rounded-full border-2 border-gray-800" src="{{ asset('images/claudia.jpg') }}" alt="Miembro 2">
                                </div>
                                <button class="px-4 py-2 bg-gradient-to-r from-pink-500 to-red-500 text-black rounded-lg hover:from-pink-400 hover:to-red-400 transition-all duration-300 transform hover:scale-105 font-medium">
                                    Ver Detalles
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proyecto 6: Nave Espacial Sostenible -->
            <div class="group perspective" data-aos="fade-up" data-aos-delay="600">
                <div class="relative transform-gpu transition-all duration-500 group-hover:rotate-y-12 group-hover:scale-105">
                    <div class="rounded-xl bg-gray-800 p-8 border border-gray-700 hover:border-yellow-400 shadow-xl backdrop-blur-sm">
                        <div class="absolute top-0 right-0 -mt-4 -mr-4 h-24 w-24 rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 opacity-50 blur-2xl group-hover:opacity-75 transition-opacity"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-2xl font-bold text-yellow-300">Nave Espacial Sostenible</h3>
                                <span class="px-3 py-1 rounded-full bg-yellow-500/20 text-yellow-400 text-sm font-medium">Planificación</span>
                            </div>
                            <div class="mb-6">
                                <div class="relative pt-1">
                                    <div class="flex mb-2 items-center justify-between">
                                        <div class="text-sm text-gray-300">Progreso del Proyecto</div>
                                        <div class="text-sm text-yellow-400">15%</div>
                                    </div>
                                    <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-700">
                                        <div class="w-1/6 shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-gradient-to-r from-yellow-400 to-orange-500"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-300 mb-6">Diseño de una nave espacial con sistemas de reciclaje avanzados y tecnologías de energía renovable para misiones de larga duración.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex -space-x-2">
                                    <img class="w-8 h-8 rounded-full border-2 border-gray-800" src="{{ asset('images/carmen.jpg') }}" alt="Miembro 1">
                                    <img class="w-8 h-8 rounded-full border-2 border-gray-800" src="{{ asset('images/doc.jpg') }}" alt="Miembro 2">
                                </div>
                                <button class="px-4 py-2 bg-gradient-to-r from-yellow-500 to-orange-500 text-black rounded-lg hover:from-yellow-400 hover:to-orange-400 transition-all duration-300 transform hover:scale-105 font-medium">
                                    Ver Detalles
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.perspective {
    perspective: 1000px;
}

.rotate-y-12 {
    transform: rotateY(12deg);
}
</style>

@endsection