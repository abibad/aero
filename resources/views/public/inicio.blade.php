@extends('layouts.public')

@section('titulo', 'Inicio')

@section('content')
<div class="min-h-screen w-screen text-white relative overflow-hidden">
    <!-- Imagen de fondo -->
     

    <div class="relative z-10 container mx-auto px-6 py-28">
        <!-- Sección de bienvenida con mayor espacio -->
        <section class="text-center mb-24" data-aos="fade-down">
            <h1 id="typed-title" class="text-7xl font-extrabold bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 text-transparent bg-clip-text mb-8"></h1>
            
            <!-- Elemento oculto con las frases de colores -->
            <div id="typed-strings" class="hidden">
                <span>Explora el Universo Aeroespacial</span>
                <span>Descubre Nuevos Horizontes</span>
                <span>Viaja Más Allá de las Estrellas</span>
            </div>

            <p class="text-xl text-gray-300 mt-8 max-w-3xl mx-auto">
                Innovación y tecnología para conquistar el cielo y más allá.
            </p>
        </section>

        <!-- Tabs Navigation -->
        <div x-data="{ activeTab: 'exploracion' }" class="mb-8" data-aos="fade-up" data-aos-delay="200">
            <div class="border-b border-gray-600">
                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                    <button @click="activeTab = 'exploracion'" :class="{'text-cyan-400 border-b-2 border-cyan-400': activeTab === 'exploracion', 'text-gray-300 hover:text-cyan-300': activeTab !== 'exploracion'}" class="py-4 px-1 font-medium transition-colors duration-200">
                        <i class="fas fa-rocket mr-2"></i>Exploración
                    </button>
                    <button @click="activeTab = 'tecnologia'" :class="{'text-cyan-400 border-b-2 border-cyan-400': activeTab === 'tecnologia', 'text-gray-300 hover:text-cyan-300': activeTab !== 'tecnologia'}" class="py-4 px-1 font-medium transition-colors duration-200">
                        <i class="fas fa-microchip mr-2"></i>Tecnología
                    </button>
                    <button @click="activeTab = 'investigacion'" :class="{'text-cyan-400 border-b-2 border-cyan-400': activeTab === 'investigacion', 'text-gray-300 hover:text-cyan-300': activeTab !== 'investigacion'}" class="py-4 px-1 font-medium transition-colors duration-200">
                        <i class="fas fa-flask mr-2"></i>Investigación
                    </button>
                </nav>
            </div>

            <!-- Tab Contents -->
            <div class="relative mt-6">
                <!-- Exploración Tab -->
                <div x-show="activeTab === 'exploracion'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-x-4" x-transition:enter-end="opacity-100 transform translate-x-0">
                    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12" data-aos="fade-right">
                        <div x-data="{ expanded: false }" @click="expanded = !expanded" class="p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 bg-opacity-80 hover:scale-105 transition-transform cursor-pointer">
                            <h2 class="text-2xl font-semibold text-cyan-300">Misiones Espaciales</h2>
                            <p class="text-gray-300 mt-3">Descubre las últimas misiones a Marte y más allá del sistema solar.</p>
                            <div x-show="expanded" x-transition.duration.300ms class="mt-4">
                                <p class="text-gray-300 mb-4">Explora nuestras misiones actuales, desde rovers en Marte hasta sondas en los confines del sistema solar. Descubre los últimos hallazgos y avances en la exploración espacial.</p>
                            </div>
                            <button class="mt-4 inline-block px-6 py-2 bg-cyan-500 text-black font-semibold rounded-lg hover:bg-cyan-600 transition-colors">Leer más</button>
                        </div>
                        <div x-data="{ expanded: false }" @click="expanded = !expanded" class="p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 bg-opacity-80 hover:scale-105 hover:shadow-lg hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300 cursor-pointer">
                            <h2 class="text-2xl font-semibold text-cyan-300">Estación Espacial</h2>
                            <p class="text-gray-300 mt-3">Conoce la vida en la Estación Espacial Internacional.</p>
                            <div x-show="expanded" x-transition.duration.300ms class="mt-4">
                                <p class="text-gray-300 mb-4">Descubre cómo viven y trabajan los astronautas en la ISS, los experimentos que realizan y cómo esta estación orbital contribuye a la ciencia espacial.</p>
                            </div>
                            <button class="mt-4 inline-block px-6 py-2 bg-cyan-500 text-black font-semibold rounded-lg hover:bg-cyan-600 transition-colors">Leer más</button>
                        </div>
                        <div x-data="{ expanded: false }" @click="expanded = !expanded" class="p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 bg-opacity-80 hover:scale-105 hover:shadow-lg hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300 cursor-pointer">
                            <h2 class="text-2xl font-semibold text-cyan-300">Exploración Lunar</h2>
                            <p class="text-gray-300 mt-3">Las nuevas misiones para regresar a la Luna.</p>
                            <div x-show="expanded" x-transition.duration.300ms class="mt-4">
                                <p class="text-gray-300 mb-4">Conoce los planes para el retorno a la Luna, las misiones Artemis y cómo se está preparando la humanidad para establecer una presencia permanente en nuestro satélite natural.</p>
                            </div>
                            <button class="mt-4 inline-block px-6 py-2 bg-cyan-500 text-black font-semibold rounded-lg hover:bg-cyan-600 transition-colors">Leer más</button>
                        </div>
                    </section>
                </div>

                <!-- Tecnología Tab -->
                <div x-show="activeTab === 'tecnologia'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-x-4" x-transition:enter-end="opacity-100 transform translate-x-0">
                    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12" data-aos="fade-right">
                        <div x-data="{ expanded: false }" @click="expanded = !expanded" class="p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 bg-opacity-80 hover:scale-105 hover:shadow-lg hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300 cursor-pointer">
                            <h2 class="text-2xl font-semibold text-cyan-300">Propulsión Avanzada</h2>
                            <p class="text-gray-300 mt-3">Sistemas de propulsión de última generación para viajes espaciales.</p>
                            <div x-show="expanded" x-transition.duration.300ms class="mt-4">
                                <p class="text-gray-300 mb-4">Explora las últimas innovaciones en sistemas de propulsión espacial, desde motores iónicos hasta propulsión nuclear, que nos permitirán viajar más lejos en el espacio.</p>
                            </div>
                            <button class="mt-4 inline-block px-6 py-2 bg-cyan-500 text-black font-semibold rounded-lg hover:bg-cyan-600 transition-colors">Leer más</button>
                        </div>
                        <div x-data="{ expanded: false }" @click="expanded = !expanded" class="p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 bg-opacity-80 hover:scale-105 hover:shadow-lg hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300 cursor-pointer">
                            <h2 class="text-2xl font-semibold text-cyan-300">Satélites</h2>
                            <p class="text-gray-300 mt-3">Tecnología satelital y sus aplicaciones en la vida diaria.</p>
                            <div x-show="expanded" x-transition.duration.300ms class="mt-4">
                                <p class="text-gray-300 mb-4">Descubre cómo los satélites modernos están revolucionando las comunicaciones, la navegación y la observación terrestre, mejorando nuestra vida cotidiana.</p>
                            </div>
                            <button class="mt-4 inline-block px-6 py-2 bg-cyan-500 text-black font-semibold rounded-lg hover:bg-cyan-600 transition-colors">Leer más</button>
                        </div>
                        <div x-data="{ expanded: false }" @click="expanded = !expanded" class="p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 bg-opacity-80 hover:scale-105 hover:shadow-lg hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300 cursor-pointer">
                            <h2 class="text-2xl font-semibold text-cyan-300">Robótica Espacial</h2>
                            <p class="text-gray-300 mt-3">Robots y rovers para la exploración planetaria.</p>
                            <div x-show="expanded" x-transition.duration.300ms class="mt-4">
                                <p class="text-gray-300 mb-4">Conoce los últimos avances en robótica espacial, desde rovers marcianos hasta robots diseñados para reparar satélites y construir bases espaciales.</p>
                            </div>
                            <button class="mt-4 inline-block px-6 py-2 bg-cyan-500 text-black font-semibold rounded-lg hover:bg-cyan-600 transition-colors">Leer más</button>
                        </div>
                    </section>
                </div>

                <!-- Investigación Tab -->
                <div x-show="activeTab === 'investigacion'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-x-4" x-transition:enter-end="opacity-100 transform translate-x-0">
                    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12" data-aos="fade-right">
                        <div x-data="{ expanded: false }" @click="expanded = !expanded" class="p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 bg-opacity-80 hover:scale-105 hover:shadow-lg hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300 cursor-pointer">
                            <h2 class="text-2xl font-semibold text-cyan-300">Astrobiología</h2>
                            <p class="text-gray-300 mt-3">Búsqueda de vida en otros planetas y lunas del sistema solar.</p>
                            <div x-show="expanded" x-transition.duration.300ms class="mt-4">
                                <p class="text-gray-300 mb-4">Explora cómo los científicos buscan señales de vida en otros mundos, desde los océanos subterráneos de Europa hasta la atmósfera de Venus.</p>
                            </div>
                            <button class="mt-4 inline-block px-6 py-2 bg-cyan-500 text-black font-semibold rounded-lg hover:bg-cyan-600 transition-colors">Leer más</button>
                        </div>
                        <div x-data="{ expanded: false }" @click="expanded = !expanded" class="p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 bg-opacity-80 hover:scale-105 hover:shadow-lg hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300 cursor-pointer">
                            <h2 class="text-2xl font-semibold text-cyan-300">Física Espacial</h2>
                            <p class="text-gray-300 mt-3">Estudio de fenómenos físicos en el espacio exterior.</p>
                            <div x-show="expanded" x-transition.duration.300ms class="mt-4">
                                <p class="text-gray-300 mb-4">Descubre los misterios del universo, desde agujeros negros hasta materia oscura, y cómo estos fenómenos influyen en nuestra comprensión del cosmos.</p>
                            </div>
                            <button class="mt-4 inline-block px-6 py-2 bg-cyan-500 text-black font-semibold rounded-lg hover:bg-cyan-600 transition-colors">Leer más</button>
                        </div>
                        <div x-data="{ expanded: false }" @click="expanded = !expanded" class="p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 bg-opacity-80 hover:scale-105 hover:shadow-lg hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300 cursor-pointer">
                            <h2 class="text-2xl font-semibold text-cyan-300">Astronomía</h2>
                            <p class="text-gray-300 mt-3">Descubrimientos recientes sobre el universo.</p>
                            <div x-show="expanded" x-transition.duration.300ms class="mt-4">
                                <p class="text-gray-300 mb-4">Mantente al día con los últimos descubrimientos astronómicos, desde exoplanetas habitables hasta galaxias distantes y fenómenos cósmicos extraordinarios.</p>
                            </div>
                            <button class="mt-4 inline-block px-6 py-2 bg-cyan-500 text-black font-semibold rounded-lg hover:bg-cyan-600 transition-colors">Leer más</button>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- Sección de Historia Aeroespacial -->
        <section class="mt-16 relative" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-center text-cyan-400">Historia Aeroespacial</h2>
            <div class="space-y-8">
                <!-- Timeline Item 1 -->
                <div class="flex items-center gap-4 group">
                    <div class="w-24 text-right text-cyan-300 font-bold group-hover:text-cyan-400 transition-colors">1957</div>
                    <div class="w-4 h-4 rounded-full bg-cyan-400 border-4 border-gray-800 group-hover:bg-cyan-300 transition-colors"></div>
                    <div class="flex-1 bg-gray-800 p-4 rounded-lg border border-gray-600 hover:border-cyan-400 transition-colors">
                        <h3 class="text-xl font-semibold text-cyan-300 mb-2">Lanzamiento del Sputnik 1</h3>
                        <p class="text-gray-300">Primer satélite artificial en orbitar la Tierra, marcando el inicio de la era espacial.</p>
                    </div>
                </div>
                <!-- Timeline Item 2 -->
                <div class="flex items-center gap-4 group">
                    <div class="w-24 text-right text-cyan-300 font-bold group-hover:text-cyan-400 transition-colors">1961</div>
                    <div class="w-4 h-4 rounded-full bg-cyan-400 border-4 border-gray-800 group-hover:bg-cyan-300 transition-colors"></div>
                    <div class="flex-1 bg-gray-800 p-4 rounded-lg border border-gray-600 hover:border-cyan-400 transition-colors">
                        <h3 class="text-xl font-semibold text-cyan-300 mb-2">Yuri Gagarin en el Espacio</h3>
                        <p class="text-gray-300">Primer ser humano en viajar al espacio exterior, orbitando la Tierra en la nave Vostok 1.</p>
                    </div>
                </div>
                <!-- Timeline Item 3 -->
                <div class="flex items-center gap-4 group">
                    <div class="w-24 text-right text-cyan-300 font-bold group-hover:text-cyan-400 transition-colors">1969</div>
                    <div class="w-4 h-4 rounded-full bg-cyan-400 border-4 border-gray-800 group-hover:bg-cyan-300 transition-colors"></div>
                    <div class="flex-1 bg-gray-800 p-4 rounded-lg border border-gray-600 hover:border-cyan-400 transition-colors">
                        <h3 class="text-xl font-semibold text-cyan-300 mb-2">Llegada a la Luna</h3>
                        <p class="text-gray-300">La misión Apollo 11 logra el primer alunizaje tripulado, con Neil Armstrong y Buzz Aldrin caminando sobre la superficie lunar.</p>
                    </div>
                </div>
                <!-- Timeline Item 4 -->
                <div class="flex items-center gap-4 group">
                    <div class="w-24 text-right text-cyan-300 font-bold group-hover:text-cyan-400 transition-colors">1981</div>
                    <div class="w-4 h-4 rounded-full bg-cyan-400 border-4 border-gray-800 group-hover:bg-cyan-300 transition-colors"></div>
                    <div class="flex-1 bg-gray-800 p-4 rounded-lg border border-gray-600 hover:border-cyan-400 transition-colors">
                        <h3 class="text-xl font-semibold text-cyan-300 mb-2">Era del Transbordador Espacial</h3>
                        <p class="text-gray-300">Inicio de las misiones del Transbordador Espacial, revolucionando el transporte espacial reutilizable.</p>
                    </div>
                </div>
                <!-- Timeline Item 5 -->
                <div class="flex items-center gap-4 group">
                    <div class="w-24 text-right text-cyan-300 font-bold group-hover:text-cyan-400 transition-colors">2020</div>
                    <div class="w-4 h-4 rounded-full bg-cyan-400 border-4 border-gray-800 group-hover:bg-cyan-300 transition-colors"></div>
                    <div class="flex-1 bg-gray-800 p-4 rounded-lg border border-gray-600 hover:border-cyan-400 transition-colors">
                        <h3 class="text-xl font-semibold text-cyan-300 mb-2">Nueva Era Espacial Comercial</h3>
                        <p class="text-gray-300">SpaceX realiza el primer vuelo espacial tripulado comercial, marcando una nueva era en la exploración espacial.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Galería de Imágenes -->
        <section class="mt-16" data-aos="zoom-in">
            <h2 class="text-3xl font-bold text-center text-cyan-400">Galería Espacial</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-6">
                <div class="overflow-hidden rounded-lg shadow-lg hover:scale-110 transition-transform">
                    <img src="{{ asset('images/aeroespacio1.png') }}" alt="Espacio" class="w-full h-64 object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg hover:scale-110 transition-transform">
                    <img src="{{ asset('images/aeroespacio2.png') }}" alt="Estación Espacial" class="w-full h-64 object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg hover:scale-110 transition-transform">
                    <img src="{{ asset('images/aeroespacio3.jpg') }}" alt="Astronauta" class="w-full h-64 object-cover">
                </div>
            </div>
        </section>

        <!-- Sección de llamada a la acción -->
        <section class="text-center mt-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-cyan-400">Únete a la Revolución Aeroespacial</h2>
            <p class="text-gray-300 mt-3 max-w-xl mx-auto">
                Forma parte de la comunidad y mantente informado sobre las últimas tendencias.
            </p>
        </section>
    </div>
</div>
@endsection