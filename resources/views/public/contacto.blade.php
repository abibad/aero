@extends('layouts.public')

@section('titulo','Contacto')

@section('content')
<div class="min-h-screen w-screen text-white relative overflow-hidden">

    <section class="text-center mb-12 relative z-10 container mx-auto px-6 py-12" data-aos="fade-down">
    <h1 id="typed-title" class="text-5xl font-extrabold bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 text-transparent bg-clip-text"></h1>
        <p class="text-lg text-gray-300 mt-4 max-w-2xl mx-auto">Si tienes alguna pregunta, sugerencia o comentario, no dudes en enviarnos un mensaje.</p>
    </section>

    <div id="typed-strings" class="hidden">
        <span>Estamos aquí para ayudarte</span>
        <span>Contáctanos si tienes dudas!</span>
        <span>Tu opinión es importante para nosotros, ¡escríbenos!</span>
    </div>
    <!-- Formulario de Contacto -->
    <section class="py-12 px-6 bg-gray-900/80 backdrop-blur-sm rounded-lg shadow-xl max-w-2xl mx-auto mb-12 relative z-10 border border-cyan-500/30" id="formularioContacto" data-aos="fade-up" data-aos-delay="200">
        <h2 class="text-3xl font-bold text-cyan-600 mb-6 text-center">Envíanos tu mensaje</h2>
        <p class="text-lg text-gray-700 mb-8 text-center">Nos encantaría saber tu opinión. Completa el formulario y te responderemos lo antes posible.</p>

        <form action="#" method="POST" class="bg-gray-800/90 p-8 rounded-lg shadow-lg border border-cyan-600/20 hover:border-cyan-500/50 transition-all duration-300" data-aos="zoom-in" data-aos-delay="300">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-left text-lg font-semibold text-cyan-300">Tu Nombre</label>
                <input type="text" id="nombre" name="nombre" class="w-full p-3 mt-2 bg-gray-700/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-all" placeholder="Escribe tu nombre" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-left text-lg font-semibold text-cyan-300">Tu Correo Electrónico</label>
                <input type="email" id="email" name="email" class="w-full p-3 mt-2 bg-gray-700/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-all" placeholder="Ejemplo: tu@correo.com" required>
            </div>

            <div class="mb-4">
                <label for="mensaje" class="block text-left text-lg font-semibold text-cyan-300">Tu Mensaje</label>
                <textarea id="mensaje" name="mensaje" class="w-full p-3 mt-2 bg-gray-700/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-all" rows="6" placeholder="Escribe tu mensaje aquí" required></textarea>
            </div>

            <button type="submit" class="w-full bg-cyan-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-cyan-500 transition-all">Enviar Mensaje</button>
        </form>
    </section>

    <!-- Información de Contacto Adicional -->
    <section class="py-12 px-6 bg-gray-900/80 backdrop-blur-sm rounded-lg shadow-xl max-w-2xl mx-auto relative z-10 mb-[25px] border border-cyan-500/30 hover:border-cyan-400/50 transition-all duration-300" id="informacionContacto" data-aos="fade-up" data-aos-delay="400">
        <h2 class="text-3xl font-bold text-cyan-400 mb-6 text-center hover:text-cyan-300 transition-colors">¿Prefieres llamarnos?</h2>
        <p class="text-lg text-gray-300 mb-8 text-center">Si deseas hablar directamente con nosotros, no dudes en llamarnos o enviarnos un correo electrónico.</p>

        <div class="flex flex-col md:flex-row justify-center items-center space-y-6 md:space-y-0 md:space-x-12">
            <div class="text-center">
                <h3 class="text-xl font-semibold text-cyan-400 hover:text-cyan-300 transition-colors">222 229 5500</h3>
                <p class="text-lg text-gray-300">Télefono</p>
            </div>
            <div class="text-center">
                <h3 class="text-xl font-semibold text-cyan-400 hover:text-cyan-300 transition-colors">contacto@aeroespacial.com</h3>
                <p class="text-lg text-gray-300">Correo electrónico</p>
            </div>
        </div>
    </section>
</div>
@endsection
