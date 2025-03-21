@extends('layouts.public')

@section('titulo', 'Blog')

@section('content')
<div class="min-h-screen w-screen text-white relative overflow-hidden">

    <div class="relative z-10 container mx-auto px-6 pt-28 pb-16">
        <!-- Encabezado del Blog con animación de entrada -->
        <section class="text-center mb-12 relative z-10" data-aos="fade-down" data-aos-duration="1000">
            <h1 id="typed-title1" class="text-5xl font-extrabold bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 text-transparent bg-clip-text mb-8 animate-pulse"></h1>
            <p class="text-xl text-gray-300 mt-4 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Explora las últimas noticias, descubrimientos y avances en el campo aeroespacial.
            </p>
        </section>

        <!-- Artículos Destacados con efectos de hover mejorados -->
        <section class="mb-16" data-aos="fade-up" data-aos-delay="300">
            <h2 class="text-3xl font-bold text-cyan-400 mb-8 hover:text-cyan-300 transition-colors duration-300">Artículos Destacados</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Artículo 1 con animación mejorada -->
                <article class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-cyan-500/50 transition-all duration-500 transform hover:-translate-y-2 hover:scale-105 group">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/marciana.png') }}" alt="Misión Espacial" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute top-0 right-0 bg-cyan-500 text-black px-3 py-1 m-2 rounded-full text-sm font-semibold transform group-hover:scale-110 transition-transform">
                            Destacado
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-cyan-300 mb-2 group-hover:text-cyan-400 transition-colors">El Futuro de la Exploración Marciana</h3>
                        <p class="text-gray-300 mb-4">Nuevos descubrimientos y planes para la colonización del planeta rojo.</p>
                        <a href="#" class="inline-flex items-center text-cyan-400 hover:text-cyan-300 transition-all duration-300 group-hover:translate-x-2">
                            Leer más <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </article>

                <!-- Artículo 2 con animación mejorada -->
                <article class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-purple-500/50 transition-all duration-500 transform hover:-translate-y-2 hover:scale-105 group">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/cuantica.png') }}" alt="Tecnología Espacial" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute top-0 right-0 bg-purple-500 text-white px-3 py-1 m-2 rounded-full text-sm font-semibold transform group-hover:scale-110 transition-transform">
                            Tecnología
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-cyan-300 mb-2 group-hover:text-purple-400 transition-colors">Avances en Propulsión Cuántica</h3>
                        <p class="text-gray-300 mb-4">Revolucionando el viaje espacial con nuevas tecnologías de propulsión.</p>
                        <a href="#" class="inline-flex items-center text-purple-400 hover:text-purple-300 transition-all duration-300 group-hover:translate-x-2">
                            Leer más <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </article>

                <!-- Artículo 3 con animación mejorada -->
                <article class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-blue-500/50 transition-all duration-500 transform hover:-translate-y-2 hover:scale-105 group">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/exoplanetas.png') }}" alt="Descubrimientos" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute top-0 right-0 bg-blue-500 text-white px-3 py-1 m-2 rounded-full text-sm font-semibold transform group-hover:scale-110 transition-transform">
                            Descubrimiento
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-cyan-300 mb-2 group-hover:text-blue-400 transition-colors">Nuevos Exoplanetas Habitables</h3>
                        <p class="text-gray-300 mb-4">Identificación de planetas potencialmente habitables en sistemas cercanos.</p>
                        <a href="#" class="inline-flex items-center text-blue-400 hover:text-blue-300 transition-all duration-300 group-hover:translate-x-2">
                            Leer más <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </article>
            </div>
        </section>

        <!-- Sección de Categorías con efectos interactivos -->
        <section class="mb-16" data-aos="fade-up" data-aos-delay="400">
            <h2 class="text-3xl font-bold text-cyan-400 mb-8">Explora por Categorías</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gray-800 p-6 rounded-lg border border-gray-700 hover:border-cyan-400 transition-all duration-300 cursor-pointer group transform hover:scale-105 hover:shadow-lg hover:shadow-cyan-500/30">
                    <i class="fas fa-rocket text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4 transition-transform group-hover:rotate-12"></i>
                    <h3 class="text-xl font-semibold text-cyan-300 mb-2 group-hover:text-cyan-400">Exploración Espacial</h3>
                    <p class="text-gray-300 group-hover:text-white">Misiones actuales y futuras</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg border border-gray-700 hover:border-cyan-400 transition-all duration-300 cursor-pointer group transform hover:scale-105 hover:shadow-lg hover:shadow-cyan-500/30">
                    <i class="fas fa-satellite text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4 transition-transform group-hover:rotate-12"></i>
                    <h3 class="text-xl font-semibold text-cyan-300 mb-2 group-hover:text-cyan-400">Tecnología Satelital</h3>
                    <p class="text-gray-300 group-hover:text-white">Innovaciones en comunicaciones</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg border border-gray-700 hover:border-cyan-400 transition-all duration-300 cursor-pointer group transform hover:scale-105 hover:shadow-lg hover:shadow-cyan-500/30">
                    <i class="fas fa-user-astronaut text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4 transition-transform group-hover:rotate-12"></i>
                    <h3 class="text-xl font-semibold text-cyan-300 mb-2 group-hover:text-cyan-400">Astronáutica</h3>
                    <p class="text-gray-300 group-hover:text-white">Vida en el espacio</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg border border-gray-700 hover:border-cyan-400 transition-all duration-300 cursor-pointer group transform hover:scale-105 hover:shadow-lg hover:shadow-cyan-500/30">
                    <i class="fas fa-planet-moon text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4 transition-transform group-hover:rotate-12"></i>
                    <h3 class="text-xl font-semibold text-cyan-300 mb-2 group-hover:text-cyan-400">Astronomía</h3>
                    <p class="text-gray-300 group-hover:text-white">Descubrimientos cósmicos</p>
                </div>
            </div>
        </section>

        <!-- Video Section con efectos mejorados -->
        <section class="mb-16" data-aos="fade-up" data-aos-delay="500">
            <h2 class="text-3xl font-bold text-cyan-400 mb-8">Videos Destacados</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Video 1 con animación mejorada -->
                <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-cyan-500/50 transition-all duration-500 transform hover:-translate-y-2 group">
                    <a href="https://www.youtube.com/watch?v=ahUX5zkDmGw&t=3s" target="_blank" rel="noopener noreferrer" class="block relative group">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('images/marte.png') }}" alt="Video Thumbnail" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center group-hover:bg-opacity-20 transition-all duration-300">
                                <i class="fas fa-play-circle text-5xl text-white transform transition-transform group-hover:scale-125"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-cyan-300 mb-2 group-hover:text-cyan-400 transition-colors">Exploración de Marte 2024</h3>
                            <p class="text-gray-300 mb-4">Últimos descubrimientos y misiones planificadas para el planeta rojo.</p>
                        </div>
                    </a>
                </div>

                <!-- Video 2 con animación mejorada -->
                <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-cyan-500/50 transition-all duration-500 transform hover:-translate-y-2 group">
                    <a href="https://www.youtube.com/watch?v=0JU4z-iLmGQ" target="_blank" rel="noopener noreferrer" class="block relative group">
                        <div class="relative overflow-hidden">
                            <img src="https://img.youtube.com/vi/bwZvfwBWbKw/hqdefault.jpg" alt="Video Thumbnail" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center group-hover:bg-opacity-20 transition-all duration-300">
                                <i class="fas fa-play-circle text-5xl text-white transform transition-transform group-hover:scale-125"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-cyan-300 mb-2 group-hover:text-cyan-400 transition-colors">Vida en la Estación Espacial</h3>
                            <p class="text-gray-300 mb-4">Un día en la vida de los astronautas en la ISS.</p>
                        </div>
                    </a>
                </div>

                <!-- Video 3 con animación mejorada -->
                <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-cyan-500/50 transition-all duration-500 transform hover:-translate-y-2 group">
                    <a href="https://www.youtube.com/watch?v=LzMS9Mepujw" target="_blank" rel="noopener noreferrer" class="block relative group">
                        <div class="relative overflow-hidden">
                            <img src="https://img.youtube.com/vi/ULQqMW-uY7U/maxresdefault.jpg" alt="Video Thumbnail" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center group-hover:bg-opacity-20 transition-all duration-300">
                                <i class="fas fa-play-circle text-5xl text-white transform transition-transform group-hover:scale-125"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-cyan-300 mb-2 group-hover:text-cyan-400 transition-colors">Tecnología de Cohetes SpaceX</h3>
                            <p class="text-gray-300 mb-4">Innovaciones en el transporte espacial comercial.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- Sección de Comentarios Mejorada -->
        <section class="mb-16 relative z-10" data-aos="fade-up" data-aos-delay="400">
            <h2 class="text-3xl font-bold text-cyan-400 mb-8">Comentarios de la Comunidad</h2>
            
            <!-- Formulario de Comentarios con Efectos -->
            <div class="bg-gray-800 rounded-xl p-6 mb-8 transform hover:scale-101 transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/30">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-cyan-400 to-blue-500 flex items-center justify-center text-white text-xl font-bold">U</div>
                    </div>
                    <div class="flex-grow">
                        <textarea class="w-full bg-gray-700 rounded-lg p-4 text-white placeholder-gray-400 border border-gray-600 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400 focus:outline-none transition-all duration-300 resize-none" rows="4" placeholder="Comparte tus pensamientos sobre este artículo..."></textarea>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <button class="text-gray-400 hover:text-cyan-400 transition-colors">
                                    <i class="far fa-image"></i> Añadir imagen
                                </button>
                                <button class="text-gray-400 hover:text-cyan-400 transition-colors">
                                    <i class="far fa-smile"></i> Emoji
                                </button>
                            </div>
                            <button class="px-6 py-2 bg-gradient-to-r from-cyan-500 to-blue-500 text-white font-semibold rounded-lg hover:from-cyan-400 hover:to-blue-400 transform hover:scale-105 transition-all duration-300 flex items-center">
                                <i class="fas fa-paper-plane mr-2"></i> Comentar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Lista de Comentarios con Animaciones -->
            <div class="space-y-6">
                <!-- Comentario 1 -->
                <div class="bg-gray-800 rounded-xl p-6 transform hover:scale-101 transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/30">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-r from-purple-400 to-pink-500 flex items-center justify-center text-white text-xl font-bold">A</div>
                        </div>
                        <div class="flex-grow">
                            <div class="flex items-center justify-between mb-2">
                                <h4 class="text-lg font-semibold text-cyan-300">Ana Espacial</h4>
                                <span class="text-gray-400 text-sm">Hace 2 horas</span>
                            </div>
                            <p class="text-gray-300 mb-4">¡Increíble artículo! Los avances en propulsión cuántica son fascinantes. Me pregunto cómo afectará esto a las futuras misiones tripuladas a Marte.</p>
                            <div class="flex items-center space-x-6">
                                <button class="flex items-center space-x-2 text-gray-400 hover:text-cyan-400 transition-colors group">
                                    <i class="far fa-heart group-hover:scale-110 transition-transform"></i>
                                    <span>24</span>
                                </button>
                                <button class="flex items-center space-x-2 text-gray-400 hover:text-cyan-400 transition-colors">
                                    <i class="far fa-comment"></i>
                                    <span>Responder</span>
                                </button>
                                <div class="flex items-center space-x-2">
                                    <button class="text-gray-400 hover:text-yellow-400 transition-colors">🚀</button>
                                    <button class="text-gray-400 hover:text-blue-400 transition-colors">🌟</button>
                                    <button class="text-gray-400 hover:text-green-400 transition-colors">🛸</button>
                                </div>
                            </div>
        
                            <!-- Respuesta al Comentario -->
                            <div class="mt-4 ml-8 pl-4 border-l-2 border-gray-700">
                                <div class="flex items-start space-x-4">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-400 to-green-500 flex items-center justify-center text-white text-lg font-bold">C</div>
                                    </div>
                                    <div class="flex-grow">
                                        <div class="flex items-center justify-between mb-2">
                                            <h4 class="text-lg font-semibold text-cyan-300">Carlos Nova</h4>
                                            <span class="text-gray-400 text-sm">Hace 1 hora</span>
                                        </div>
                                        <p class="text-gray-300 mb-4">Totalmente de acuerdo. La eficiencia en el consumo de combustible será revolucionaria.</p>
                                        <div class="flex items-center space-x-6">
                                            <button class="flex items-center space-x-2 text-gray-400 hover:text-cyan-400 transition-colors group">
                                                <i class="far fa-heart group-hover:scale-110 transition-transform"></i>
                                                <span>12</span>
                                            </button>
                                            <button class="flex items-center space-x-2 text-gray-400 hover:text-cyan-400 transition-colors">
                                                <i class="far fa-comment"></i>
                                                <span>Responder</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Comentario 2 -->
                <div class="bg-gray-800 rounded-xl p-6 transform hover:scale-101 transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/30">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 flex items-center justify-center text-white text-xl font-bold">M</div>
                        </div>
                        <div class="flex-grow">
                            <div class="flex items-center justify-between mb-2">
                                <h4 class="text-lg font-semibold text-cyan-300">María Cosmos</h4>
                                <span class="text-gray-400 text-sm">Hace 3 horas</span>
                            </div>
                            <p class="text-gray-300 mb-4">Me encantaría ver más contenido sobre los desafíos psicológicos de las misiones de larga duración. ¿Tienen planeado cubrir ese tema?</p>
                            <div class="flex items-center space-x-6">
                                <button class="flex items-center space-x-2 text-gray-400 hover:text-cyan-400 transition-colors group">
                                    <i class="far fa-heart group-hover:scale-110 transition-transform"></i>
                                    <span>18</span>
                                </button>
                                <button class="flex items-center space-x-2 text-gray-400 hover:text-cyan-400 transition-colors">
                                    <i class="far fa-comment"></i>
                                    <span>Responder</span>
                                </button>
                                <div class="flex items-center space-x-2">
                                    <button class="text-gray-400 hover:text-red-400 transition-colors">❤️</button>
                                    <button class="text-gray-400 hover:text-purple-400 transition-colors">🔬</button>
                                    <button class="text-gray-400 hover:text-blue-400 transition-colors">🌍</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="bg-gray-800 rounded-xl p-8 text-center" data-aos="fade-up" data-aos-delay="300">
            <h2 class="text-3xl font-bold text-cyan-400 mb-4">Mantente Informado</h2>
            <p class="text-gray-300 mb-6 max-w-2xl mx-auto">Suscríbete a nuestro newsletter para recibir las últimas noticias y actualizaciones del mundo aeroespacial.</p>
            <form class="flex flex-col sm:flex-row gap-4 justify-center items-center max-w-2xl mx-auto">
                <input type="email" placeholder="Tu correo electrónico" class="w-full sm:w-96 px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400 focus:outline-none text-white">
                <button type="submit" class="px-6 py-2 bg-cyan-500 text-black font-semibold rounded-lg hover:bg-cyan-400 transition-colors transform hover:scale-105">
                    Suscribirse
                </button>
            </form>
        </section>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let typed = new Typed('#typed-title', {
            stringsElement: '#typed-strings',
            typeSpeed: 50,
            backSpeed: 30,
            loop: true,
            showCursor: true,
        });
    });
</script>
@endsection