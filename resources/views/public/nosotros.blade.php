@extends('layouts.public')

@section('titulo','Nosotros')

@section('content')
<div class="min-h-screen w-screen text-white relative overflow-hidden">
    <!-- Sección de Introducción con Parallax -->
    <section class="text-center mb-12 relative z-10 pt-24" data-aos="fade-down">
        <h1 id="typed-title" class="text-6xl font-extrabold bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 text-transparent bg-clip-text mb-4"></h1>
        <p class="text-xl text-gray-300 mt-6 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="300">
            Descubre nuestra historia, misión y al equipo que hace posible nuestra visión aeroespacial.
        </p>
    </section>
    
    <div id="typed-strings" class="hidden">
        <span>Sobre Nosotros</span>
        <span>Innovación Aeroespacial</span>
        <span>Explorando el Futuro</span>
    </div>
    
    <!-- Sección de Estadísticas Animadas -->
    <section class="py-12 bg-gray-900 bg-opacity-50 relative z-10" data-aos="fade-up">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
            <div class="stat-item transform hover:scale-110 transition-all duration-300">
                <div class="text-4xl font-bold text-cyan-400 counter" data-target="15">0</div>
                <p class="text-gray-300 mt-2">Años de Experiencia</p>
            </div>
            <div class="stat-item transform hover:scale-110 transition-all duration-300">
                <div class="text-4xl font-bold text-cyan-400 counter" data-target="50">0</div>
                <p class="text-gray-300 mt-2">Proyectos Completados</p>
            </div>
            <div class="stat-item transform hover:scale-110 transition-all duration-300">
                <div class="text-4xl font-bold text-cyan-400 counter" data-target="100">0</div>
                <p class="text-gray-300 mt-2">Estudiantes Formados</p>
            </div>
            <div class="stat-item transform hover:scale-110 transition-all duration-300">
                <div class="text-4xl font-bold text-cyan-400 counter" data-target="25">0</div>
                <p class="text-gray-300 mt-2">Premios Recibidos</p>
            </div>
        </div>
    </section>

    <!-- Sección de Misión, Visión y Valores con Hover Effects -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 relative z-10 container mx-auto px-6 py-16" data-aos="fade-up" data-aos-delay="200">
        <div class="p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 transform hover:scale-105 hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300 group">
            <div class="text-cyan-400 text-4xl mb-4 group-hover:scale-110 transition-transform">
                <i class="fas fa-rocket"></i>
            </div>
            <h2 class="text-3xl font-semibold text-cyan-300 group-hover:text-cyan-400 transition-colors">Nuestra Misión</h2>
            <p class="text-gray-300 mt-3 group-hover:text-white transition-colors">Innovar y liderar en el sector aeroespacial, brindando soluciones tecnológicas para el futuro de la exploración y aviación.</p>
        </div>
        <div class="p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 transform hover:scale-105 hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300 group">
            <div class="text-cyan-400 text-4xl mb-4 group-hover:scale-110 transition-transform">
                <i class="fas fa-eye"></i>
            </div>
            <h2 class="text-3xl font-semibold text-cyan-300 group-hover:text-cyan-400 transition-colors">Nuestra Visión</h2>
            <p class="text-gray-300 mt-3 group-hover:text-white transition-colors">Expandir los límites del conocimiento y la tecnología, inspirando a nuevas generaciones a alcanzar las estrellas.</p>
        </div>
        <div class="p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 transform hover:scale-105 hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300 group">
            <div class="text-cyan-400 text-4xl mb-4 group-hover:scale-110 transition-transform">
                <i class="fas fa-heart"></i>
            </div>
            <h2 class="text-3xl font-semibold text-cyan-300 group-hover:text-cyan-400 transition-colors">Nuestros Valores</h2>
            <p class="text-gray-300 mt-3 group-hover:text-white transition-colors">Compromiso, innovación, excelencia y trabajo en equipo son la base de nuestro éxito.</p>
        </div>
    </section>
    
    <!-- Sección del Equipo con Cards Interactivas -->
    <section class="text-center py-16 relative z-10 container mx-auto px-6" data-aos="fade-up" data-aos-delay="200">
        <h2 class="text-4xl font-bold text-cyan-400 mb-8">Nuestro Equipo</h2>
        <p class="text-gray-300 mt-3 max-w-2xl mx-auto mb-12 text-lg">Profesionales apasionados, dedicados a la innovación y desarrollo tecnológico.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-8">
            <div class="group relative">
                <div class="p-6 bg-gray-800 rounded-xl shadow-lg border border-gray-600 transform hover:scale-105 hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300" >
                    <div class="relative mb-6 overflow-hidden rounded-full w-32 h-32 mx-auto">
                        <img src="{{ asset('images/carmen.jpg') }}" alt="M. C. Maria del Carmen Santiago Díaz" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <h3 class="text-xl font-semibold text-cyan-300 group-hover:text-cyan-400 transition-colors">M. C. Maria del Carmen Santiago Díaz</h3>
                    <p class="text-gray-400 mb-4">Profesora</p>
                    <div class="flex justify-center space-x-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="group relative">
                <div class="p-6 bg-gray-800 rounded-xl shadow-lg border border-gray-600 transform hover:scale-105 hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300" >
                    <div class="relative mb-6 overflow-hidden rounded-full w-32 h-32 mx-auto">
                        <img src="{{ asset('images/doc.jpg') }}" alt="Dr. Gustavo Trinidiad Rubin Linares" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <h3 class="text-xl font-semibold text-cyan-300 group-hover:text-cyan-400 transition-colors">Dr. Gustavo Trinidiad Rubin Linares</h3>
                    <p class="text-gray-400 mb-4">Profesor</p>
                    <div class="flex justify-center space-x-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="group relative">
                <div class="p-6 bg-gray-800 rounded-xl shadow-lg border border-gray-600 transform hover:scale-105 hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300" >
                    <div class="relative mb-6 overflow-hidden rounded-full w-32 h-32 mx-auto">
                        <img src="{{ asset('images/claudia.jpg') }}" alt="M. C. Ana Claudia Zenteno Vazquez" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <h3 class="text-xl font-semibold text-cyan-300 group-hover:text-cyan-400 transition-colors">M. C. Ana Claudia Zenteno Vazquez</h3>
                    <p class="text-gray-400 mb-4">Profesora</p>
                    <div class="flex justify-center space-x-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script para el contador de estadísticas -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.counter');
            const speed = 200;

            const updateCount = (counter) => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(() => updateCount(counter), 1);
                } else {
                    counter.innerText = target;
                }
            };

            const handleIntersect = (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        updateCount(counter);
                    }
                });
            };

            const observer = new IntersectionObserver(handleIntersect, {
                threshold: 0.5
            });

            counters.forEach(counter => observer.observe(counter));
        });
    </script>
</div>
@endsection