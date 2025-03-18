@extends('layouts.public')

@section('titulo', 'Blog')

@section('content')
<div class="min-h-screen w-screen text-white relative overflow-hidden">

    <div class="relative z-10 container mx-auto px-6 pt-28 pb-16">
        <!-- Encabezado del Blog -->
    
        <section class="text-center mb-12 relative z-10" data-aos="fade-down">
        <h1 id="typed-title1" class="text-5xl font-extrabold bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 text-transparent bg-clip-text mb-8"></h1>

            <p class="text-xl text-gray-300 mt-4 max-w-3xl mx-auto">
                Explora las últimas noticias, descubrimientos y avances en el campo aeroespacial.
            </p>

            
        </section>

        <!-- Artículos Destacados -->
        <section class="mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-cyan-400 mb-8">Artículos Destacados</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Artículo 1 -->
                <article class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-cyan-500/50 transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative">
                        <img src="{{ asset('images/marciana.png') }}" alt="Misión Espacial" class="w-full h-48 object-cover">
                        <div class="absolute top-0 right-0 bg-cyan-500 text-black px-3 py-1 m-2 rounded-full text-sm font-semibold">Destacado</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-cyan-300 mb-2">El Futuro de la Exploración Marciana</h3>
                        <p class="text-gray-300 mb-4">Nuevos descubrimientos y planes para la colonización del planeta rojo.</p>
                        <a href="#" class="inline-flex items-center text-cyan-400 hover:text-cyan-300">
                            Leer más <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </article>

                <!-- Artículo 2 -->
                <article class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-cyan-500/50 transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative">
                        <img src="{{ asset('images/cuantica.png') }}" alt="Tecnología Espacial" class="w-full h-48 object-cover">
                        <div class="absolute top-0 right-0 bg-purple-500 text-white px-3 py-1 m-2 rounded-full text-sm font-semibold">Tecnología</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-cyan-300 mb-2">Avances en Propulsión Cuántica</h3>
                        <p class="text-gray-300 mb-4">Revolucionando el viaje espacial con nuevas tecnologías de propulsión.</p>
                        <a href="#" class="inline-flex items-center text-cyan-400 hover:text-cyan-300">
                            Leer más <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </article>

                <!-- Artículo 3 -->
                <article class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-cyan-500/50 transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative">
                        <img src="{{ asset('images/exoplanetas.png') }}" alt="Descubrimientos" class="w-full h-48 object-cover">
                        <div class="absolute top-0 right-0 bg-blue-500 text-white px-3 py-1 m-2 rounded-full text-sm font-semibold">Descubrimiento</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-cyan-300 mb-2">Nuevos Exoplanetas Habitables</h3>
                        <p class="text-gray-300 mb-4">Identificación de planetas potencialmente habitables en sistemas cercanos.</p>
                        <a href="#" class="inline-flex items-center text-cyan-400 hover:text-cyan-300">
                            Leer más <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </article>
            </div>
        </section>

        <!-- Sección de Categorías -->
        <section class="mb-16" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-3xl font-bold text-cyan-400 mb-8">Explora por Categorías</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gray-800 p-6 rounded-lg border border-gray-700 hover:border-cyan-400 transition-colors cursor-pointer group">
                    <i class="fas fa-rocket text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4"></i>
                    <h3 class="text-xl font-semibold text-cyan-300 mb-2">Exploración Espacial</h3>
                    <p class="text-gray-300">Misiones actuales y futuras</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg border border-gray-700 hover:border-cyan-400 transition-colors cursor-pointer group">
                    <i class="fas fa-satellite text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4"></i>
                    <h3 class="text-xl font-semibold text-cyan-300 mb-2">Tecnología Satelital</h3>
                    <p class="text-gray-300">Innovaciones en comunicaciones</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg border border-gray-700 hover:border-cyan-400 transition-colors cursor-pointer group">
                    <i class="fas fa-user-astronaut text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4"></i>
                    <h3 class="text-xl font-semibold text-cyan-300 mb-2">Astronáutica</h3>
                    <p class="text-gray-300">Vida en el espacio</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg border border-gray-700 hover:border-cyan-400 transition-colors cursor-pointer group">
                    <i class="fas fa-planet-moon text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4"></i>
                    <h3 class="text-xl font-semibold text-cyan-300 mb-2">Astronomía</h3>
                    <p class="text-gray-300">Descubrimientos cósmicos</p>
                </div>
            </div>
        </section>

        <!-- Video Section -->
        <section class="mb-16" data-aos="fade-up" data-aos-delay="400">
            <h2 class="text-3xl font-bold text-cyan-400 mb-8">Videos Destacados</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Video 1 -->
                <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-cyan-500/50 transition-all duration-300 transform hover:-translate-y-2">
                <a href="https://www.youtube.com/watch?v=ahUX5zkDmGw&t=3s" target="_blank" rel="noopener noreferrer" class="block">
                    <div class="relative">
                        <img src="marte.png" alt="Video Thumbnail" class="w-full h-48 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center hover:bg-opacity-20 transition-all duration-300">
                            <i class="fas fa-play-circle text-4xl text-white"></i>
                        </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-cyan-300 mb-2">Exploración de Marte 2024</h3>
                            <p class="text-gray-300 mb-4">Últimos descubrimientos y misiones planificadas para el planeta rojo.</p>
                        </div>
                    </a>
                </div>

                <!-- Video 2 -->
                <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-cyan-500/50 transition-all duration-300 transform hover:-translate-y-2">
                    <a href="https://www.youtube.com/watch?v=0JU4z-iLmGQ" target="_blank" rel="noopener noreferrer" class="block">
                        <div class="relative">
                            <img src="https://img.youtube.com/vi/bwZvfwBWbKw/hqdefault.jpg" alt="Video Thumbnail" class="w-full h-48 object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center hover:bg-opacity-20 transition-all duration-300">
                                <i class="fas fa-play-circle text-4xl text-white"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-cyan-300 mb-2">Vida en la Estación Espacial</h3>
                            <p class="text-gray-300 mb-4">Un día en la vida de los astronautas en la ISS.</p>
                        </div>
                    </a>
                </div>

                <!-- Video 3 -->
                <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-cyan-500/50 transition-all duration-300 transform hover:-translate-y-2">
                    <a href="https://www.youtube.com/watch?v=LzMS9Mepujw" target="_blank" rel="noopener noreferrer" class="block">
                        <div class="relative">
                            <img src="https://img.youtube.com/vi/ULQqMW-uY7U/maxresdefault.jpg" alt="Video Thumbnail" class="w-full h-48 object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center hover:bg-opacity-20 transition-all duration-300">
                                <i class="fas fa-play-circle text-4xl text-white"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-cyan-300 mb-2">Tecnología de Cohetes SpaceX</h3>
                            <p class="text-gray-300 mb-4">Innovaciones en el transporte espacial comercial.</p>
                        </div>
                    </a>
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