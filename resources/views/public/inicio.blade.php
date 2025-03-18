@extends('layouts.public')

@section('titulo', 'Inicio')

@section('content')
<div class="min-h-screen w-screen text-white relative overflow-hidden">
    <div class="relative z-10 container mx-auto px-6 py-28">
        <!-- Hero Section with Dynamic Text -->
        <section class="text-center mb-24" data-aos="fade-down">
            <h1 id="typed-title" class="text-7xl font-extrabold bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 text-transparent bg-clip-text mb-8 animate-glow"></h1>
            
            <div id="typed-strings" class="hidden">
                <span>Explora el Universo Aeroespacial</span>
                <span>Descubre Nuevos Horizontes</span>
                <span>Viaja Más Allá de las Estrellas</span>
            </div>

            <p class="text-xl text-gray-300 mt-8 max-w-3xl mx-auto animate-pulse hover:text-cyan-300 transition-colors duration-300">
                Innovación y tecnología para conquistar el cielo y más allá.
            </p>

            <!-- Call to Action Buttons with Enhanced Hover Effects -->
            <div class="flex justify-center gap-6 mt-12">
                <a href="#explore" class="group px-8 py-3 bg-cyan-500 text-black font-bold rounded-full hover:bg-cyan-400 transform hover:scale-105 transition-all duration-300 relative overflow-hidden">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-cyan-400 to-blue-500 opacity-0 group-hover:opacity-50 transition-opacity duration-300"></span>
                    <span class="relative inline-flex items-center">
                        <i class="fas fa-rocket mr-2 group-hover:animate-bounce"></i>Explorar
                    </span>
                </a>
                <a href="#timeline" class="group px-8 py-3 border-2 border-cyan-500 text-cyan-500 font-bold rounded-full hover:bg-cyan-500 hover:text-black transform hover:scale-105 transition-all duration-300 relative overflow-hidden">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-cyan-400 to-blue-500 opacity-0 group-hover:opacity-50 transition-opacity duration-300"></span>
                    <span class="relative inline-flex items-center">
                        <i class="fas fa-clock mr-2 group-hover:rotate-180 transition-transform duration-500"></i>Nuestra Historia
                    </span>
                </a>
            </div>
        </section>

        <!-- Enhanced Tabs Navigation with Smooth Transitions -->
        <div x-data="{ activeTab: 'exploracion' }" class="mb-8" data-aos="fade-up" data-aos-delay="200">
            <div class="border-b border-gray-600">
                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                    <button @click="activeTab = 'exploracion'" :class="{'text-cyan-400 border-b-2 border-cyan-400': activeTab === 'exploracion', 'text-gray-300 hover:text-cyan-300': activeTab !== 'exploracion'}" class="py-4 px-1 font-medium transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-rocket mr-2 transition-transform duration-300 group-hover:rotate-45"></i>Exploración
                    </button>
                    <button @click="activeTab = 'tecnologia'" :class="{'text-cyan-400 border-b-2 border-cyan-400': activeTab === 'tecnologia', 'text-gray-300 hover:text-cyan-300': activeTab !== 'tecnologia'}" class="py-4 px-1 font-medium transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-microchip mr-2 transition-transform duration-300 group-hover:rotate-45"></i>Tecnología
                    </button>
                    <button @click="activeTab = 'investigacion'" :class="{'text-cyan-400 border-b-2 border-cyan-400': activeTab === 'investigacion', 'text-gray-300 hover:text-cyan-300': activeTab !== 'investigacion'}" class="py-4 px-1 font-medium transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-flask mr-2 transition-transform duration-300 group-hover:rotate-45"></i>Investigación
                    </button>
                </nav>
            </div>

            <!-- Enhanced Tab Contents with Dynamic Transitions -->
            <div class="relative mt-6">
                <!-- Exploración Tab with Enhanced Animations -->
                <!-- Exploración Tab -->
                <div x-show="activeTab === 'exploracion'" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 transform translate-x-4" x-transition:enter-end="opacity-100 transform translate-x-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-x-0" x-transition:leave-end="opacity-0 transform -translate-x-4">
                    <section class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12" data-aos="fade-right">
                        <div x-data="{ expanded: false }" @click="expanded = !expanded" class="group p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 bg-opacity-80 hover:scale-105 transition-all duration-300 cursor-pointer relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <h2 class="text-2xl font-semibold text-cyan-300 group-hover:text-cyan-400 transition-colors duration-300">Misiones Espaciales</h2>
                            <p class="text-gray-300 mt-3 group-hover:text-white transition-colors duration-300">Descubre las últimas misiones a Marte y más allá del sistema solar.</p>
                            <div x-show="expanded" x-transition.duration.500ms class="mt-4">
                                <p class="text-gray-300 mb-4 group-hover:text-white transition-colors duration-300">Explora nuestras misiones actuales, desde rovers en Marte hasta sondas en los confines del sistema solar.</p>
                            </div>
                            <button class="mt-4 inline-block px-6 py-2 bg-cyan-500 text-black font-semibold rounded-lg hover:bg-cyan-400 transition-all duration-300 transform group-hover:scale-105 group-hover:shadow-lg group-hover:shadow-cyan-500/50">Leer más</button>
                        </div>
                        <div x-data="{ expanded: false }" @click="expanded = !expanded" class="group p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 bg-opacity-80 hover:scale-105 transition-all duration-300 cursor-pointer relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <h2 class="text-2xl font-semibold text-cyan-300 group-hover:text-cyan-400 transition-colors duration-300">Física Espacial</h2>
                            <p class="text-gray-300 mt-3 group-hover:text-white transition-colors duration-300">Estudio de fenómenos físicos en el espacio exterior.</p>
                            <div x-show="expanded" x-transition.duration.500ms class="mt-4">
                                <p class="text-gray-300 mb-4 group-hover:text-white transition-colors duration-300">Descubre los misterios del universo, desde agujeros negros hasta materia oscura.</p>
                            </div>
                            <button class="mt-4 inline-block px-6 py-2 bg-cyan-500 text-black font-semibold rounded-lg hover:bg-cyan-400 transition-all duration-300 transform group-hover:scale-105 group-hover:shadow-lg group-hover:shadow-cyan-500/50">Leer más</button>
                        </div>
                    </section>
                </div>

                <!-- Tecnología Tab -->
                <div x-show="activeTab === 'tecnologia'" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 transform translate-x-4" x-transition:enter-end="opacity-100 transform translate-x-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-x-0" x-transition:leave-end="opacity-0 transform -translate-x-4">
                    <section class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12" data-aos="fade-right">
                        <div x-data="{ expanded: false }" @click="expanded = !expanded" class="group p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 bg-opacity-80 hover:scale-105 transition-all duration-300 cursor-pointer relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <h2 class="text-2xl font-semibold text-cyan-300 group-hover:text-cyan-400 transition-colors duration-300">Propulsión Avanzada</h2>
                            <p class="text-gray-300 mt-3 group-hover:text-white transition-colors duration-300">Sistemas de propulsión de última generación.</p>
                            <div x-show="expanded" x-transition.duration.500ms class="mt-4">
                                <p class="text-gray-300 mb-4 group-hover:text-white transition-colors duration-300">Innovaciones en motores iónicos y tecnologías de propulsión espacial.</p>
                            </div>
                            <button class="mt-4 inline-block px-6 py-2 bg-cyan-500 text-black font-semibold rounded-lg hover:bg-cyan-400 transition-all duration-300 transform group-hover:scale-105 group-hover:shadow-lg group-hover:shadow-cyan-500/50">Leer más</button>
                        </div>
                        <div x-data="{ expanded: false }" @click="expanded = !expanded" class="group p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 bg-opacity-80 hover:scale-105 transition-all duration-300 cursor-pointer relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <h2 class="text-2xl font-semibold text-cyan-300 group-hover:text-cyan-400 transition-colors duration-300">Sistemas Satelitales</h2>
                            <p class="text-gray-300 mt-3 group-hover:text-white transition-colors duration-300">Tecnología de comunicación espacial.</p>
                            <div x-show="expanded" x-transition.duration.500ms class="mt-4">
                                <p class="text-gray-300 mb-4 group-hover:text-white transition-colors duration-300">Redes de satélites y sistemas de comunicación avanzados.</p>
                            </div>
                            <button class="mt-4 inline-block px-6 py-2 bg-cyan-500 text-black font-semibold rounded-lg hover:bg-cyan-400 transition-all duration-300 transform group-hover:scale-105 group-hover:shadow-lg group-hover:shadow-cyan-500/50">Leer más</button>
                        </div>
                    </section>
                </div>

                <!-- Investigación Tab -->
                <div x-show="activeTab === 'investigacion'" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 transform translate-x-4" x-transition:enter-end="opacity-100 transform translate-x-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-x-0" x-transition:leave-end="opacity-0 transform -translate-x-4">
                    <section class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12" data-aos="fade-right">
                        <div x-data="{ expanded: false }" @click="expanded = !expanded" class="group p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 bg-opacity-80 hover:scale-105 transition-all duration-300 cursor-pointer relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <h2 class="text-2xl font-semibold text-cyan-300 group-hover:text-cyan-400 transition-colors duration-300">Astrobiología</h2>
                            <p class="text-gray-300 mt-3 group-hover:text-white transition-colors duration-300">Búsqueda de vida extraterrestre.</p>
                            <div x-show="expanded" x-transition.duration.500ms class="mt-4">
                                <p class="text-gray-300 mb-4 group-hover:text-white transition-colors duration-300">Investigación sobre la posibilidad de vida en otros planetas.</p>
                            </div>
                            <button class="mt-4 inline-block px-6 py-2 bg-cyan-500 text-black font-semibold rounded-lg hover:bg-cyan-400 transition-all duration-300 transform group-hover:scale-105 group-hover:shadow-lg group-hover:shadow-cyan-500/50">Leer más</button>
                        </div>
                        <div x-data="{ expanded: false }" @click="expanded = !expanded" class="group p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 bg-opacity-80 hover:scale-105 transition-all duration-300 cursor-pointer relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <h2 class="text-2xl font-semibold text-cyan-300 group-hover:text-cyan-400 transition-colors duration-300">Astronomía</h2>
                            <p class="text-gray-300 mt-3 group-hover:text-white transition-colors duration-300">Observación y estudio del cosmos.</p>
                            <div x-show="expanded" x-transition.duration.500ms class="mt-4">
                                <p class="text-gray-300 mb-4 group-hover:text-white transition-colors duration-300">Descubrimientos de exoplanetas y fenómenos cósmicos.</p>
                            </div>
                            <button class="mt-4 inline-block px-6 py-2 bg-cyan-500 text-black font-semibold rounded-lg hover:bg-cyan-400 transition-all duration-300 transform group-hover:scale-105 group-hover:shadow-lg group-hover:shadow-cyan-500/50">Leer más</button>
                        </div>
                    </section>
                </div>

                <!-- Timeline Section -->
                <section id="timeline" class="mt-24" data-aos="fade-up">
                    <h2 class="text-4xl font-bold text-center text-cyan-400 mb-16 hover:text-cyan-300 transition-colors duration-300">Hitos Espaciales</h2>
                    <div class="relative">
                        <!-- Timeline Line -->
                        <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-cyan-400 via-blue-500 to-purple-600 animate-pulse"></div>
                        
                        <!-- Timeline Items -->
                        <div class="space-y-24">
                            <!-- 1957 -->
                            <div class="relative flex items-center justify-between group" data-aos="fade-right">
                                <div class="w-5/12 pr-8 text-right transform group-hover:scale-105 transition-transform duration-300">
                                    <h3 class="text-2xl font-bold text-cyan-400 group-hover:text-cyan-300 transition-colors duration-300">1957</h3>
                                    <h4 class="text-xl text-white mb-2 group-hover:text-cyan-100 transition-colors duration-300">Inicio de la Era Espacial</h4>
                                    <p class="text-gray-300 group-hover:text-white transition-colors duration-300">Lanzamiento del Sputnik 1, el primer satélite artificial en órbita.</p>
                                </div>
                                <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-cyan-400 rounded-full border-4 border-gray-800 group-hover:scale-150 transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/50"></div>
                                <div class="w-5/12 pl-8"></div>
                            </div>

                            <!-- 1961 -->
                            <div class="relative flex items-center justify-between group" data-aos="fade-left">
                                <div class="w-5/12 pr-8"></div>
                                <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-cyan-400 rounded-full border-4 border-gray-800 group-hover:scale-150 transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/50"></div>
                                <div class="w-5/12 pl-8 transform group-hover:scale-105 transition-transform duration-300">
                                    <h3 class="text-2xl font-bold text-cyan-400 group-hover:text-cyan-300 transition-colors duration-300">1961</h3>
                                    <h4 class="text-xl text-white mb-2 group-hover:text-cyan-100 transition-colors duration-300">Primer Humano en el Espacio</h4>
                                    <p class="text-gray-300 group-hover:text-white transition-colors duration-300">Yuri Gagarin se convierte en el primer ser humano en viajar al espacio.</p>
                                </div>
                            </div>

                            <!-- 1969 -->
                            <div class="relative flex items-center justify-between group" data-aos="fade-right">
                                <div class="w-5/12 pr-8 text-right transform group-hover:scale-105 transition-transform duration-300">
                                    <h3 class="text-2xl font-bold text-cyan-400 group-hover:text-cyan-300 transition-colors duration-300">1969</h3>
                                    <h4 class="text-xl text-white mb-2 group-hover:text-cyan-100 transition-colors duration-300">Llegada a la Luna</h4>
                                    <p class="text-gray-300 group-hover:text-white transition-colors duration-300">Neil Armstrong y Buzz Aldrin son los primeros humanos en pisar la Luna.</p>
                                </div>
                                <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-cyan-400 rounded-full border-4 border-gray-800 group-hover:scale-150 transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/50"></div>
                                <div class="w-5/12 pl-8"></div>
                            </div>

                            <!-- 1981 -->
                            <div class="relative flex items-center justify-between group" data-aos="fade-left">
                                <div class="w-5/12 pr-8"></div>
                                <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-cyan-400 rounded-full border-4 border-gray-800 group-hover:scale-150 transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/50"></div>
                                <div class="w-5/12 pl-8 transform group-hover:scale-105 transition-transform duration-300">
                                    <h3 class="text-2xl font-bold text-cyan-400 group-hover:text-cyan-300 transition-colors duration-300">1981</h3>
                                    <h4 class="text-xl text-white mb-2 group-hover:text-cyan-100 transition-colors duration-300">Era del Transbordador Espacial</h4>
                                    <p class="text-gray-300 group-hover:text-white transition-colors duration-300">Primer lanzamiento del Transbordador Espacial Columbia.</p>
                                </div>
                            </div>

                            <!-- 2012 -->
                            <div class="relative flex items-center justify-between group" data-aos="fade-right">
                                <div class="w-5/12 pr-8 text-right transform group-hover:scale-105 transition-transform duration-300">
                                    <h3 class="text-2xl font-bold text-cyan-400 group-hover:text-cyan-300 transition-colors duration-300">2012</h3>
                                    <h4 class="text-xl text-white mb-2 group-hover:text-cyan-100 transition-colors duration-300">Curiosity en Marte</h4>
                                    <p class="text-gray-300 group-hover:text-white transition-colors duration-300">El rover Curiosity aterriza exitosamente en Marte.</p>
                                </div>
                                <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-cyan-400 rounded-full border-4 border-gray-800 group-hover:scale-150 transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/50"></div>
                                <div class="w-5/12 pl-8"></div>
                            </div>

                            <!-- 2020 -->
                            <div class="relative flex items-center justify-between group" data-aos="fade-left">
                                <div class="w-5/12 pr-8"></div>
                                <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-cyan-400 rounded-full border-4 border-gray-800 group-hover:scale-150 transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/50"></div>
                                <div class="w-5/12 pl-8 transform group-hover:scale-105 transition-transform duration-300">
                                    <h3 class="text-2xl font-bold text-cyan-400 group-hover:text-cyan-300 transition-colors duration-300">2020</h3>
                                    <h4 class="text-xl text-white mb-2 group-hover:text-cyan-100 transition-colors duration-300">SpaceX: Nueva Era Espacial</h4>
                                    <p class="text-gray-300 group-hover:text-white transition-colors duration-300">Primer vuelo tripulado comercial al espacio.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Enhanced Gallery Section with Dynamic Hover Effects -->
                <!-- Galería de Imágenes -->
                <section class="mt-16" data-aos="zoom-in">
                    <h2 class="text-3xl font-bold text-center text-cyan-400 hover:text-cyan-300 transition-colors duration-300">Galería Espacial</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-6">
                        <div class="group relative overflow-hidden rounded-lg shadow-lg transition-all duration-300 transform hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img src="{{ asset('images/espacio.jpg') }}" alt="Espacio" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg transition-all duration-300 transform hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img src="{{ asset('images/marciana.png') }}" alt="Estación Espacial" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg transition-all duration-300 transform hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img src="{{ asset('images/aeroespacio3.jpg') }}" alt="Astronauta" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                        </div>
                    </div>
                </section>

                <!-- Enhanced Call to Action Section -->
                <section class="text-center mt-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-cyan-400 hover:text-cyan-300 transition-colors duration-300">Únete a la Revolución Aeroespacial</h2>
                    <p class="text-gray-300 mt-3 max-w-xl mx-auto hover:text-white transition-colors duration-300">
                        Forma parte de la comunidad y mantente informado sobre las últimas tendencias.
                    </p>
                </section>
            </div>
        </div>
    </div>
</div>

<!-- Add custom styles for enhanced animations -->
<style>
    @keyframes glow {
        0%, 100% { text-shadow: 0 0 10px rgba(34, 211, 238, 0.5), 0 0 20px rgba(34, 211, 238, 0.3); }
        50% { text-shadow: 0 0 20px rgba(34, 211, 238, 0.7), 0 0 30px rgba(34, 211, 238, 0.5); }
    }
    .animate-glow {
        animation: glow 3s ease-in-out infinite;
    }
</style>
@endsection