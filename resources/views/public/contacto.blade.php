@extends('layouts.public')

@section('titulo','Contacto')

@section('content')
<div class="min-h-screen w-screen text-white relative overflow-hidden">
    <!-- Sección de Encabezado -->
    <section class="text-center mb-12 relative z-10 container mx-auto px-6 py-12" data-aos="fade-down">
        <h1 id="typed-title" class="text-5xl font-extrabold bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 text-transparent bg-clip-text"></h1>
        <p class="text-lg text-gray-300 mt-4 max-w-2xl mx-auto">Estamos aquí para escucharte. Tu opinión es valiosa para nosotros.</p>
    </section>

    <div id="typed-strings" class="hidden">
        <span>¡Conecta con Nosotros!</span>
        <span>Tu Voz en el Espacio</span>
        <span>Exploremos Juntos el Futuro</span>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            <!-- Formulario de Contacto -->
            <section class="bg-gray-900/80 backdrop-blur-sm rounded-xl shadow-2xl p-8 border border-cyan-500/30 transform hover:scale-[1.02] transition-all duration-300" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-cyan-400 mb-6">Envíanos tu Mensaje</h2>
                <form id="contactForm" class="space-y-6">
                    <div class="space-y-4">
                        <div>
                            <label for="nombre" class="block text-lg font-semibold text-cyan-300 mb-2">Nombre Completo</label>
                            <div class="relative">
                                <i class="fas fa-user absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                <input type="text" id="nombre" name="nombre" class="w-full pl-10 pr-4 py-3 bg-gray-800/90 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/50 transition-all" placeholder="Tu nombre" required>
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-lg font-semibold text-cyan-300 mb-2">Correo Electrónico</label>
                            <div class="relative">
                                <i class="fas fa-envelope absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                <input type="email" id="email" name="email" class="w-full pl-10 pr-4 py-3 bg-gray-800/90 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/50 transition-all" placeholder="tu@email.com" required>
                            </div>
                        </div>

                        <div>
                            <label for="asunto" class="block text-lg font-semibold text-cyan-300 mb-2">Asunto</label>
                            <div class="relative">
                                <i class="fas fa-heading absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                <input type="text" id="asunto" name="asunto" class="w-full pl-10 pr-4 py-3 bg-gray-800/90 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/50 transition-all" placeholder="Asunto de tu mensaje" required>
                            </div>
                        </div>

                        <div>
                            <label for="mensaje" class="block text-lg font-semibold text-cyan-300 mb-2">Mensaje</label>
                            <div class="relative">
                                <i class="fas fa-message absolute left-3 top-3 text-gray-400"></i>
                                <textarea id="mensaje" name="mensaje" rows="6" class="w-full pl-10 pr-4 py-3 bg-gray-800/90 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/50 transition-all" placeholder="Escribe tu mensaje aquí" required></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 text-white py-4 px-6 rounded-lg font-bold text-lg hover:from-cyan-600 hover:to-blue-700 transform hover:scale-[1.02] transition-all duration-300 flex items-center justify-center gap-2">
                        <i class="fas fa-paper-plane"></i>
                        Enviar Mensaje
                    </button>
                </form>
            </section>

            <!-- Información de Contacto -->
            <section class="space-y-8" data-aos="fade-left">
                <!-- Tarjeta de Información Principal -->
                <div class="bg-gray-900/80 backdrop-blur-sm rounded-xl shadow-2xl p-8 border border-cyan-500/30 transform hover:scale-[1.02] transition-all duration-300">
                    <h2 class="text-3xl font-bold text-cyan-400 mb-6">Información de Contacto</h2>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="bg-cyan-500/20 p-3 rounded-lg">
                                <i class="fas fa-location-dot text-cyan-400 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-cyan-300">Ubicación</h3>
                                <p class="text-gray-300">Av San Claudio 1814, 72570 Puebla, Puebla</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-cyan-500/20 p-3 rounded-lg">
                                <i class="fas fa-phone text-cyan-400 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-cyan-300">Teléfono</h3>
                                <p class="text-gray-300">222 229 5500</p>
                                <p class="text-gray-400 text-sm">Lunes a Viernes 9:00 - 18:00</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-cyan-500/20 p-3 rounded-lg">
                                <i class="fas fa-envelope text-cyan-400 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-cyan-300">Email</h3>
                                <p class="text-gray-300">contacto@aeroespacial.com</p>
                                <p class="text-gray-400 text-sm">¡Responderemos lo antes posible!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Redes Sociales -->
                <div class="bg-gray-900/80 backdrop-blur-sm rounded-xl shadow-2xl p-8 border border-cyan-500/30 transform hover:scale-[1.02] transition-all duration-300">
                    <h2 class="text-3xl font-bold text-cyan-400 mb-6">Síguenos en Redes</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <a href="#" class="flex items-center space-x-3 text-gray-300 hover:text-cyan-400 p-3 rounded-lg hover:bg-cyan-500/10 transition-all duration-300">
                            <i class="fab fa-facebook text-2xl"></i>
                            <span>Facebook</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 text-gray-300 hover:text-cyan-400 p-3 rounded-lg hover:bg-cyan-500/10 transition-all duration-300">
                            <i class="fab fa-twitter text-2xl"></i>
                            <span>Twitter</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 text-gray-300 hover:text-cyan-400 p-3 rounded-lg hover:bg-cyan-500/10 transition-all duration-300">
                            <i class="fab fa-linkedin text-2xl"></i>
                            <span>LinkedIn</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 text-gray-300 hover:text-cyan-400 p-3 rounded-lg hover:bg-cyan-500/10 transition-all duration-300">
                            <i class="fab fa-instagram text-2xl"></i>
                            <span>Instagram</span>
                        </a>
                    </div>
                </div>

                <!-- Mapa de Ubicación -->
                <div class="bg-gray-900/80 backdrop-blur-sm rounded-xl shadow-2xl overflow-hidden border border-cyan-500/30 transform hover:scale-[1.02] transition-all duration-300">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.4456046825413!2d-98.20459772379776!3d19.005935682127923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc0d719e7c293%3A0x2bd434b0cc2850f3!2sBUAP%20Ciudad%20Universitaria!5e0!3m2!1ses-419!2smx!4v1704858540311!5m2!1ses-419!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
        </div>

        <!-- FAQ Section -->
        <section class="bg-gray-900/80 backdrop-blur-sm rounded-xl shadow-2xl p-8 border border-cyan-500/30 mb-12" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-cyan-400 mb-6 text-center">Preguntas Frecuentes</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-6 bg-gray-800/50 rounded-lg border border-gray-700 hover:border-cyan-500/30 transition-all duration-300">
                    <h3 class="text-xl font-semibold text-cyan-300 mb-3">¿Cuál es el tiempo de respuesta?</h3>
                    <p class="text-gray-300">Nos esforzamos por responder a todas las consultas dentro de las 24-48 horas hábiles.</p>
                </div>
                <div class="p-6 bg-gray-800/50 rounded-lg border border-gray-700 hover:border-cyan-500/30 transition-all duration-300">
                    <h3 class="text-xl font-semibold text-cyan-300 mb-3">¿Ofrecen visitas presenciales?</h3>
                    <p class="text-gray-300">Sí, puedes agendar una visita a nuestras instalaciones contactándonos previamente.</p>
                </div>
                <div class="p-6 bg-gray-800/50 rounded-lg border border-gray-700 hover:border-cyan-500/30 transition-all duration-300">
                    <h3 class="text-xl font-semibold text-cyan-300 mb-3">¿Tienen programas educativos?</h3>
                    <p class="text-gray-300">Ofrecemos diversos programas educativos y visitas guiadas para instituciones.</p>
                </div>
                <div class="p-6 bg-gray-800/50 rounded-lg border border-gray-700 hover:border-cyan-500/30 transition-all duration-300">
                    <h3 class="text-xl font-semibold text-cyan-300 mb-3">¿Cómo puedo colaborar?</h3>
                    <p class="text-gray-300">Tenemos diferentes programas de colaboración. Contáctanos para más información.</p>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    if(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            // Aquí iría la lógica de envío del formulario
            alert('¡Gracias por tu mensaje! Te contactaremos pronto.');
            form.reset();
        });
    }
});
</script>
@endsection
