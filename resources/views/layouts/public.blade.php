<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')-AEROESPACIAL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <style>
        #starfield {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: black;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 2000,
                once: true,
                offset: 100
            });
        });
    </script>
</head>
<body>
    <canvas id="starfield"></canvas>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const canvas = document.getElementById('starfield');
            const ctx = canvas.getContext('2d');
            
            // Set canvas size to window size
            function resizeCanvas() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            }
            resizeCanvas();
            window.addEventListener('resize', resizeCanvas);
            
            // Star class with enhanced features
            class Star {
                constructor() {
                    this.reset();
                    this.color = this.getRandomColor();
                }
                
                reset() {
                    this.x = Math.random() * canvas.width;
                    this.y = Math.random() * canvas.height;
                    this.size = Math.random() * 3;
                    this.opacity = Math.random();
                    this.speed = Math.random() * 0.5 + 0.1;
                    this.depth = Math.random() * 3;
                    this.isShootingStar = Math.random() < 0.01;
                    if (this.isShootingStar) {
                        this.angle = Math.random() * Math.PI * 2;
                        this.tailLength = 50 + Math.random() * 50;
                    }
                }

                getRandomColor() {
                    const colors = [
                        '255, 255, 255',  // White
                        '173, 216, 230',   // Light Blue
                        '255, 223, 186',   // Light Orange
                        '218, 165, 32'     // Goldenrod
                    ];
                    return colors[Math.floor(Math.random() * colors.length)];
                }
                
                update() {
                    if (this.isShootingStar) {
                        this.x += Math.cos(this.angle) * this.speed * 5;
                        this.y += Math.sin(this.angle) * this.speed * 5;
                        if (this.x < 0 || this.x > canvas.width || this.y < 0 || this.y > canvas.height) {
                            this.reset();
                        }
                    } else {
                        this.y += this.speed * this.depth;
                        if (this.y > canvas.height) {
                            this.y = 0;
                        }
                        this.opacity += Math.random() * 0.02 - 0.01;
                        this.opacity = Math.max(0.2, Math.min(1, this.opacity));
                    }
                }
                
                draw() {
                    ctx.beginPath();
                    if (this.isShootingStar) {
                        const gradient = ctx.createLinearGradient(
                            this.x + Math.cos(this.angle) * this.tailLength,
                            this.y + Math.sin(this.angle) * this.tailLength,
                            this.x,
                            this.y
                        );
                        gradient.addColorStop(0, `rgba(${this.color}, 0)`);
                        gradient.addColorStop(1, `rgba(${this.color}, ${this.opacity})`);
                        ctx.strokeStyle = gradient;
                        ctx.lineWidth = this.size;
                        ctx.moveTo(
                            this.x + Math.cos(this.angle) * this.tailLength,
                            this.y + Math.sin(this.angle) * this.tailLength
                        );
                        ctx.lineTo(this.x, this.y);
                        ctx.stroke();
                    } else {
                        ctx.arc(this.x, this.y, this.size * this.depth, 0, Math.PI * 2);
                        ctx.fillStyle = `rgba(${this.color}, ${this.opacity})`;
                        ctx.fill();
                    }
                }
            }
            
            // Create more stars for a denser universe
            const stars = Array.from({ length: 300 }, () => new Star());
            
            // Enhanced animation loop with nebula effect
            function animate() {
                ctx.fillStyle = 'rgba(0, 0, 0, 0.1)';
                ctx.fillRect(0, 0, canvas.width, canvas.height);
                
                // Add subtle nebula effect
                const gradient = ctx.createRadialGradient(
                    canvas.width / 2, canvas.height / 2, 0,
                    canvas.width / 2, canvas.height / 2, canvas.width / 2
                );
                gradient.addColorStop(0, 'rgba(25, 25, 112, 0.03)');
                gradient.addColorStop(0.5, 'rgba(138, 43, 226, 0.02)');
                gradient.addColorStop(1, 'rgba(0, 0, 0, 0)');
                ctx.fillStyle = gradient;
                ctx.fillRect(0, 0, canvas.width, canvas.height);
                
                stars.forEach(star => {
                    star.update();
                    star.draw();
                });
                
                requestAnimationFrame(animate);
            }
            
            animate();
        });
    </script>
    
    <header class="bg-gray-950 bg-opacity-90 text-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="{{route('inicio')}}" class="-m-1.5 p-1.5">
                    <span class="sr-only">AEROESPACIAL</span>
                    <img class="h-15 w-auto" src="{{ asset('images/LOGO.png') }}" alt="">
                </a>
            </div>
            <!-- Mobile menu button -->
            <div class="flex lg:hidden">
                <button type="button" class="mobile-menu-button inline-flex items-center justify-center rounded-md p-2.5 text-white hover:bg-blue-800">
                    <span class="sr-only">Open main menu</span>
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
            <!-- Desktop menu -->
            <div class="hidden lg:flex lg:gap-x-12">
                @foreach([
                    'inicio'=>['Inicio', 'fas fa-home'], 
                    'proyectos'=>['Proyectos', 'fa fa-star'],
                    'blog'=>['blog', 'fas fa-rocket'],
                    'nosotros'=>['Nosotros', 'fas fa-users'],
                    'contacto'=>['Contacto', 'fas fa-envelope']
                ] as $route=> [$label, $icon])
                <a href="{{route($route)}}" class="text-sm/6 font-semibold text-white hover:text-gray-300 transition-colors">
                    <i class="{{$icon}}"></i> {{$label}}
                </a>
                @endforeach
            </div>
        </nav>
        <!-- Mobile menu -->
        <div class="mobile-menu hidden lg:hidden">
            <div class="space-y-1 px-4 pb-3 pt-2">
                @foreach([
                    'inicio'=>['Inicio', 'fas fa-home'], 
                    'proyectos'=>['Proyectos', 'fa fa-star'],
                    'blog'=>['blog', 'fas fa-rocket'],
                    'contacto'=>['Contacto', 'fas fa-envelope'], 
                    'nosotros'=>['Nosotros', 'fas fa-users']
                ] as $route=> [$label, $icon])
                <a href="{{route($route)}}" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-blue-800 transition-colors">
                    <i class="{{$icon}}"></i> {{$label}}
                </a>
                @endforeach
            </div>
        </div>
    </header>
    <main class="flex-1 relative overflow-hidden">
        @yield('content')
    </main>
    <footer class="bg-gray-950 bg-opacity-90 text-white py-12 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- About Section -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-cyan-400">AEROESPACIAL</h3>
                <p class="text-gray-300 text-sm">Explorando los límites del espacio y la tecnología aeroespacial. Innovación y excelencia en cada proyecto.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-cyan-400 transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-cyan-400 transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-cyan-400 transition-colors">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-cyan-400 transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-cyan-400">Enlaces Rápidos</h3>
                <ul class="space-y-2">
                    <li><a href="{{route('inicio')}}" class="text-gray-300 hover:text-cyan-400 transition-colors"><i class="fas fa-chevron-right mr-2"></i>Inicio</a></li>
                    <li><a href="{{route('proyectos')}}" class="text-gray-300 hover:text-cyan-400 transition-colors"><i class="fas fa-chevron-right mr-2"></i>Proyectos</a></li>
                    <li><a href="{{route('blog')}}" class="text-gray-300 hover:text-cyan-400 transition-colors"><i class="fas fa-chevron-right mr-2"></i>Blog</a></li>
                    <li><a href="{{route('nosotros')}}" class="text-gray-300 hover:text-cyan-400 transition-colors"><i class="fas fa-chevron-right mr-2"></i>Nosotros</a></li>
                    <li><a href="{{route('contacto')}}" class="text-gray-300 hover:text-cyan-400 transition-colors"><i class="fas fa-chevron-right mr-2"></i>Contacto</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-cyan-400">Contacto</h3>
                <ul class="space-y-2">
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-map-marker-alt mt-1 text-cyan-400"></i>
                        <span class="text-gray-300">Av San Claudio 1814, 72570 Puebla, Puebla</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-phone text-cyan-400"></i>
                        <span class="text-gray-300">222 229 5500</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-envelope text-cyan-400"></i>
                        <span class="text-gray-300">contacto@aeroespacial.com</span>
                    </li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-cyan-400">Boletín Informativo</h3>
                <p class="text-gray-300 text-sm">Suscríbete para recibir las últimas noticias y actualizaciones.</p>
                <form class="space-y-2">
                    <input type="email" placeholder="Tu correo electrónico" class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-md focus:outline-none focus:border-cyan-400 text-gray-300">
                    <button type="submit" class="w-full px-4 py-2 bg-cyan-500 text-black font-semibold rounded-md hover:bg-cyan-400 transition-colors">Suscribirse</button>
                </form>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="mt-8 pt-8 border-t border-gray-800 text-center">
            <p class="text-gray-400">&copy; 2025 AEROESPACIAL. Todos los derechos reservados.</p>
            <p class="text-sm text-gray-500 mt-2">Desarrollado con excelencia y profesionalismo por el equipo de AEROESPACIAL.</p>
        </div>
    </footer>
</body>
</html>
