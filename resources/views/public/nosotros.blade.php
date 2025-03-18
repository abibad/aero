@extends('layouts.public')

@section('titulo','Nosotros')

@section('content')
<div class="min-h-screen w-screen text-white relative overflow-hidden">
    
    <!-- Sección de Introducción -->
    <section class="text-center mb-12 relative z-10 pt-15" data-aos="fade-down">
        <h1 id="typed-title" class="text-5xl font-extrabold bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 text-transparent bg-clip-text"></h1>
        <p class="text-lg text-gray-300 mt-4 max-w-2xl mx-auto">
            Descubre nuestra historia, misión y al equipo que hace posible nuestra visión.
        </p>
    </section>
    
    <div id="typed-strings" class="hidden">
        <span>Sobre nosotros</span>
        <span>Nuestra historia, misión y valores en un solo lugar</span>
        <span>Conoce más sobre quiénes somos</span>
    </div>
    
    <!-- Sección de Misión, Visión y Valores -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 relative z-10 container mx-auto px-6" data-aos="fade-up" data-aos-delay="200">
        <div class="p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 hover:scale-105 hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300">
            <h2 class="text-3xl font-semibold text-cyan-300">Nuestra Misión</h2>
            <p class="text-gray-300 mt-3">Innovar y liderar en el sector aeroespacial, brindando soluciones tecnológicas para el futuro de la exploración y aviación.</p>
        </div>
        <div class="p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 hover:scale-105 hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300">
            <h2 class="text-3xl font-semibold text-cyan-300">Nuestra Visión</h2>
            <p class="text-gray-300 mt-3">Expandir los límites del conocimiento y la tecnología, inspirando a nuevas generaciones a alcanzar las estrellas.</p>
        </div>
        <div class="p-8 bg-gray-800 shadow-xl rounded-lg border border-gray-600 hover:scale-105 hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300">
            <h2 class="text-3xl font-semibold text-cyan-300">Nuestros Valores</h2>
            <p class="text-gray-300 mt-3">Compromiso, innovación, excelencia y trabajo en equipo son la base de nuestro éxito.</p>
        </div>
    </section>
    
    <!-- Sección del Equipo -->
    <section class="text-center mt-16 relative z-10 container mx-auto px-6" data-aos="fade-up" data-aos-delay="200">
        <h2 class="text-3xl font-bold text-cyan-400">Nuestro Equipo</h2>
        <p class="text-gray-300 mt-3 max-w-xl mx-auto">Profesionales apasionados, dedicados a la innovación y desarrollo tecnológico.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg border border-gray-600 hover:scale-105 hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300" >
                <img src="{{ asset('images/carmen.jpg') }}" alt="Miembro del equipo" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold text-cyan-300">M. C. Maria del Carmen Santiago Díaz </h3>
                <p class="text-gray-400">Profesora</p>
            </div>
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg border border-gray-600 hover:scale-105 hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300" >
                <img src="{{ asset('images/doc.jpg') }}" alt="Miembro del equipo" class="w-24 h-24 rounded-full mx-auto mb-5">
                <h3 class="text-xl font-semibold text-cyan-300">Dr. Gustavo Trinidiad Rubin Linares</h3>
                <p class="text-gray-400">Profesor</p>
            </div>
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg border border-gray-600 hover:scale-105 hover:shadow-cyan-500/50 hover:border-cyan-400 transition-all duration-300" >
                <img src="{{ asset('images/claudia.jpg') }}" alt="Miembro del equipo" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold text-cyan-300">M. C. Ana Claudia Zenteno Vazquez</h3>
                <p class="text-gray-400">Profesora</p>
            </div>
        </div>
    </section>
</div>
@endsection