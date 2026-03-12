<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mark Cleo Calbang</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="icon" href="{{ asset('images/markypogi.png') }}">
        <link href="https://fonts.bunny.net/css?family=bebas-neue:400|montserrat:300,400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-black text-white overflow-x-hidden">
        <main class="relative min-h-screen w-full hero-bg overflow-hidden">
            <div class="relative z-10 flex min-h-screen w-full flex-col px-6 py-8 sm:px-10 lg:px-14">
                <header class="flex items-center justify-between text-xs uppercase tracking-[0.2em]">
                    <div class="flex items-center gap-3 font-semibold">
                        <span class="flex h-9 w-9 items-center justify-center rounded-full border border-white/70">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M7 8l-4 4 4 4"></path>
                                <path d="M17 8l4 4-4 4"></path>
                                <path d="M10 19l4-14"></path>
                            </svg>
                        </span>
                        <span>Marky</span>
                    </div>
                    <nav class="hidden items-center gap-10 font-medium sm:flex">
                        <a class="transition-opacity hover:opacity-60" href="#about">About</a>
                        <a class="transition-opacity hover:opacity-60" href="#portfolio">Portfolio</a>
                        <a class="transition-opacity hover:opacity-60" href="#contact">Contact</a>
                    </nav>
                    <button id="mobileMenuButton" class="flex h-10 w-10 items-center justify-center rounded-full border border-white/40 text-white sm:hidden" type="button" aria-controls="mobileMenu" aria-expanded="false">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M3 6h18"></path>
                            <path d="M3 12h18"></path>
                            <path d="M3 18h18"></path>
                        </svg>
                    </button>
                </header>

                <div id="mobileOverlay" class="fixed inset-0 z-30 hidden bg-black/60 backdrop-blur-sm sm:hidden"></div>
                <aside id="mobileMenu" class="fixed right-0 top-0 z-40 flex h-full w-72 translate-x-full flex-col gap-6 bg-black/95 px-6 py-10 text-sm uppercase tracking-[0.25em] text-white shadow-2xl transition-transform duration-300 sm:hidden">
                    <div class="flex items-center justify-between">
                        <span class="font-semibold">Menu</span>
                        <button id="mobileCloseButton" class="flex h-9 w-9 items-center justify-center rounded-full border border-white/40" type="button" aria-label="Close menu">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M6 6l12 12"></path>
                                <path d="M18 6l-12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <a class="transition-opacity hover:opacity-60" href="#about">About</a>
                    <a class="transition-opacity hover:opacity-60" href="#portfolio">Portfolio</a>
                    <a class="transition-opacity hover:opacity-60" href="#contact">Contact</a>
                </aside>

                <div class="absolute left-8 top-40 hidden flex-col gap-3 lg:flex">
                    <a class="flex h-6 w-6 items-center justify-center rounded-full border border-white/60 text-white/80 transition hover:border-white hover:text-white" href="https://github.com/MarkyWorks" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                        <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2C6.48 2 2 6.58 2 12.26c0 4.52 2.87 8.36 6.84 9.72.5.09.68-.22.68-.49 0-.24-.01-.87-.01-1.7-2.78.62-3.37-1.37-3.37-1.37-.45-1.18-1.11-1.49-1.11-1.49-.9-.64.07-.63.07-.63 1 .07 1.52 1.05 1.52 1.05.89 1.55 2.34 1.1 2.91.84.09-.66.35-1.1.64-1.35-2.22-.26-4.56-1.14-4.56-5.05 0-1.11.39-2.02 1.03-2.73-.1-.26-.45-1.3.1-2.71 0 0 .84-.27 2.75 1.05A9.23 9.23 0 0 1 12 7.3c.85 0 1.71.12 2.5.34 1.91-1.32 2.75-1.05 2.75-1.05.55 1.41.2 2.45.1 2.71.64.71 1.03 1.62 1.03 2.73 0 3.92-2.35 4.79-4.58 5.04.36.32.69.94.69 1.9 0 1.37-.01 2.47-.01 2.8 0 .27.18.59.69.49A10.05 10.05 0 0 0 22 12.26C22 6.58 17.52 2 12 2z"></path>
                        </svg>
                    </a>
                    <a class="flex h-6 w-6 items-center justify-center rounded-full border border-white/60 text-white/80 transition hover:border-white hover:text-white" href="https://www.facebook.com/Calbang05/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                        <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M22 12.06C22 6.52 17.52 2 11.94 2S2 6.52 2 12.06c0 5 3.66 9.13 8.44 9.94v-7.03H7.9v-2.9h2.54V9.86c0-2.52 1.49-3.91 3.77-3.91 1.09 0 2.23.2 2.23.2v2.46h-1.26c-1.24 0-1.62.77-1.62 1.56v1.87h2.76l-.44 2.9h-2.32V22c4.78-.81 8.44-4.94 8.44-9.94z"></path>
                        </svg>
                    </a>
                    <a class="flex h-6 w-6 items-center justify-center rounded-full border border-white/60 text-white/80 transition hover:border-white hover:text-white" href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7zm5 3.3a4.7 4.7 0 1 1 0 9.4 4.7 4.7 0 0 1 0-9.4zm0 2a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4zm5.45-2.35a1.1 1.1 0 1 1 0 2.2 1.1 1.1 0 0 1 0-2.2z"></path>
                        </svg>
                    </a>
                    <a class="flex h-6 w-6 items-center justify-center rounded-full border border-white/60 text-white/80 transition hover:border-white hover:text-white" href="tel:+09553745730" aria-label="Telephone">
                        <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24 11.7 11.7 0 0 0 3.67.59 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C11.3 21 3 12.7 3 2a1 1 0 0 1 1-1h3.47a1 1 0 0 1 1 1c0 1.27.2 2.5.59 3.67a1 1 0 0 1-.24 1.01l-2.2 2.11z"></path>
                        </svg>
                    </a>
                </div>


                <section class="mt-10 grid flex-1 items-center gap-12 lg:grid-cols-[1.1fr,1.2fr]">
                    <div class="uppercase text-center lg:pl-4 lg:text-left">
                        <div class="mb-6 flex items-center justify-center gap-3 lg:hidden">
                            <a class="flex h-6 w-6 items-center justify-center rounded-full border border-white/60 text-white/80 transition hover:border-white hover:text-white" href="https://github.com" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                                <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M12 2C6.48 2 2 6.58 2 12.26c0 4.52 2.87 8.36 6.84 9.72.5.09.68-.22.68-.49 0-.24-.01-.87-.01-1.7-2.78.62-3.37-1.37-3.37-1.37-.45-1.18-1.11-1.49-1.11-1.49-.9-.64.07-.63.07-.63 1 .07 1.52 1.05 1.52 1.05.89 1.55 2.34 1.1 2.91.84.09-.66.35-1.1.64-1.35-2.22-.26-4.56-1.14-4.56-5.05 0-1.11.39-2.02 1.03-2.73-.1-.26-.45-1.3.1-2.71 0 0 .84-.27 2.75 1.05A9.23 9.23 0 0 1 12 7.3c.85 0 1.71.12 2.5.34 1.91-1.32 2.75-1.05 2.75-1.05.55 1.41.2 2.45.1 2.71.64.71 1.03 1.62 1.03 2.73 0 3.92-2.35 4.79-4.58 5.04.36.32.69.94.69 1.9 0 1.37-.01 2.47-.01 2.8 0 .27.18.59.69.49A10.05 10.05 0 0 0 22 12.26C22 6.58 17.52 2 12 2z"></path>
                                </svg>
                            </a>
                            <a class="flex h-6 w-6 items-center justify-center rounded-full border border-white/60 text-white/80 transition hover:border-white hover:text-white" href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                                <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M22 12.06C22 6.52 17.52 2 11.94 2S2 6.52 2 12.06c0 5 3.66 9.13 8.44 9.94v-7.03H7.9v-2.9h2.54V9.86c0-2.52 1.49-3.91 3.77-3.91 1.09 0 2.23.2 2.23.2v2.46h-1.26c-1.24 0-1.62.77-1.62 1.56v1.87h2.76l-.44 2.9h-2.32V22c4.78-.81 8.44-4.94 8.44-9.94z"></path>
                                </svg>
                            </a>
                            <a class="flex h-6 w-6 items-center justify-center rounded-full border border-white/60 text-white/80 transition hover:border-white hover:text-white" href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7zm5 3.3a4.7 4.7 0 1 1 0 9.4 4.7 4.7 0 0 1 0-9.4zm0 2a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4zm5.45-2.35a1.1 1.1 0 1 1 0 2.2 1.1 1.1 0 0 1 0-2.2z"></path>
                                </svg>
                            </a>
                            <a class="flex h-6 w-6 items-center justify-center rounded-full border border-white/60 text-white/80 transition hover:border-white hover:text-white" href="tel:+09553745730" aria-label="Telephone">
                                <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24 11.7 11.7 0 0 0 3.67.59 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C11.3 21 3 12.7 3 2a1 1 0 0 1 1-1h3.47a1 1 0 0 1 1 1c0 1.27.2 2.5.59 3.67a1 1 0 0 1-.24 1.01l-2.2 2.11z"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="font-['Bebas_Neue'] text-6xl sm:text-7xl lg:text-8xl tracking-[0.35em] leading-[0.9]">Software</div>
                        <div class="mt-2 font-['Bebas_Neue'] text-5xl sm:text-6xl lg:text-7xl tracking-[0.6em] text-white/70">Maestro</div>
                        <div class="mt-6 text-sm tracking-[0.3em] text-white/55">Full Stack Developer</div>
                    </div>

                    <div class="relative flex items-center justify-center">
                        <div class="absolute -left-8 top-6 h-40 w-40 rounded-full bg-slate-200/20 blur-3xl"></div>
                        <div class="absolute -right-12 bottom-8 h-52 w-52 rounded-full bg-white/10 blur-3xl"></div>
                        <div class="relative h-[380px] w-[380px] overflow-hidden rounded-full bg-gray-600/60 shadow-[0_20px_40px_rgba(0,0,0,0.55)] sm:h-[420px] sm:w-[420px]">
                            <img
                                class="h-full w-full object-cover"
                                src="{{ asset('images/markypogi.png') }}"
                                alt="Portrait"
                            />
                        </div>
                        <div class="absolute bottom-0 right-0 hidden flex-col items-center gap-2 text-[10px] uppercase tracking-widest text-white/55 sm:flex">
                            <span>Scroll Down</span>
                            <span class="text-lg text-white animate-bounce">↓</span>
                        </div>

                    </div>

                </section>

                <section id="about" class="mt-14 rounded-3xl border border-white/10 bg-black/60 px-6 py-10 sm:px-10">
    <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
        <div class="max-w-2xl">
            <div class="text-xs uppercase tracking-[0.4em] text-amber-200/70">About</div>
            <h2 class="mt-3 font-['Bebas_Neue'] text-4xl tracking-[0.2em] text-white sm:text-5xl">Mark Cleo J. Calbang</h2>
            <p class="mt-4 text-sm leading-7 text-white/70 sm:text-base">
               Graduated SOFTWARE MAESTRO, BSIT at CTU-Daanbantayan – Cum Laude.
                FULL STACK DEVELOPER with expertise in Laravel,Inertia, React, Angular, Blade, PHP, MySQL, PostgreSQL, and basic Linux development fundamentals.
                Passionate about building scalable, high-quality web applications that solve real-world problems.
            </p>
        </div>
        <div class="flex flex-wrap gap-3">
            <span class="rounded-full border border-amber-200/40 bg-amber-200/10 px-4 py-2 text-xs uppercase tracking-[0.25em] text-amber-100">Web Development</span>
            <span class="rounded-full border border-amber-200/40 bg-amber-200/10 px-4 py-2 text-xs uppercase tracking-[0.25em] text-amber-100">Creative Design</span>
            <span class="rounded-full border border-amber-200/40 bg-amber-200/10 px-4 py-2 text-xs uppercase tracking-[0.25em] text-amber-100">Automation & Tools</span>
            <span class="rounded-full border border-amber-200/40 bg-amber-200/10 px-4 py-2 text-xs uppercase tracking-[0.25em] text-amber-100">Problem Solving</span>
        </div>
    </div>
</section>

<section id="portfolio" class="mt-10 rounded-3xl border border-white/10 bg-gradient-to-br from-black/80 via-black/60 to-amber-900/20 px-6 py-10 sm:px-10">
    <div class="text-xs uppercase tracking-[0.4em] text-amber-200/70">Portfolio</div>
    <h2 class="mt-3 font-['Bebas_Neue'] text-4xl tracking-[0.2em] text-white sm:text-5xl">Projects & Creations</h2>
    <div class="mt-8 grid gap-6 md:grid-cols-3">
        <div class="rounded-2xl border border-white/10 bg-black/70 p-6">
            <div class="text-xs uppercase tracking-[0.3em] text-amber-200/70">01</div>
            <h3 class="mt-3 text-lg font-semibold text-white">Faculty Performance Evaluation System</h3>
            <p class="mt-2 text-sm text-white/65">A web-based capstone project approved for tracking and analyzing faculty performance efficiently.</p>
        </div>
        <div class="rounded-2xl border border-white/10 bg-black/70 p-6">
            <div class="text-xs uppercase tracking-[0.3em] text-amber-200/70">02</div>
            <h3 class="mt-3 text-lg font-semibold text-white">Inspired Creators Community Forums</h3>
            <p class="mt-2 text-sm text-white/65">A social platform for creators to share knowledge, collaborate, and engage with like-minded enthusiasts.</p>
        </div>
        <div class="rounded-2xl border border-white/10 bg-black/70 p-6">
            <div class="text-xs uppercase tracking-[0.3em] text-amber-200/70">03</div>
            <h3 class="mt-3 text-lg font-semibold text-white">Mini E-commerce & Contact Management</h3>
            <p class="mt-2 text-sm text-white/65">Includes a food ordering system and a contact management system for practical mini-projects.</p>
        </div>
    </div>
</section>

<section id="contact" class="mt-10 rounded-3xl border border-white/10 bg-black/70 px-6 py-10 sm:px-10">
    <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
        <div>
            <div class="text-xs uppercase tracking-[0.4em] text-amber-200/70">Contact</div>
            <h2 class="mt-3 font-['Bebas_Neue'] text-4xl tracking-[0.2em] text-white sm:text-5xl">Let's Collaborate</h2>
            <p class="mt-4 text-sm text-white/65 sm:text-base">
                I'm always looking for new challenges and creative opportunities. Reach out to discuss projects, collaborations, or innovative ideas.
            </p>
        </div>
                        <div class="flex flex-wrap gap-3">
                            <a class="rounded-full border border-amber-200/50 bg-amber-200/10 px-5 py-2 text-xs uppercase tracking-[0.3em] text-amber-100 transition hover:bg-amber-200/20" href="mailto:markcleocalbang05@gmail.com">Email</a>
                            <a class="rounded-full border border-white/20 bg-white/10 px-5 py-2 text-xs uppercase tracking-[0.3em] text-white transition hover:bg-white/20" href="#portfolio">View Work</a>
                            <a class="rounded-full border border-white/20 bg-white/10 px-5 py-2 text-xs uppercase tracking-[0.3em] text-white transition hover:bg-white/20" href="https://github.com/MarkyWorks" target="_blank" rel="noopener noreferrer">GitHub</a>
                            <a class="rounded-full border border-white/20 bg-white/10 px-5 py-2 text-xs uppercase tracking-[0.3em] text-white transition hover:bg-white/20" href="https://facebook.com/Calbang05" target="_blank" rel="noopener noreferrer">Facebook</a>
                            <a class="rounded-full border border-white/20 bg-white/10 px-5 py-2 text-xs uppercase tracking-[0.3em] text-white transition hover:bg-white/20" href="tel:09553745730">Tel</a>
        </div>
    </div>
</section>


            </div>
        </main>
        <script>
            const mobileMenuButton = document.getElementById('mobileMenuButton');
            const mobileCloseButton = document.getElementById('mobileCloseButton');
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileOverlay = document.getElementById('mobileOverlay');

            const openMenu = () => {
                mobileMenu.classList.remove('translate-x-full');
                mobileOverlay.classList.remove('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'true');
            };

            const closeMenu = () => {
                mobileMenu.classList.add('translate-x-full');
                mobileOverlay.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
            };

            mobileMenuButton.addEventListener('click', openMenu);
            mobileCloseButton.addEventListener('click', closeMenu);
            mobileOverlay.addEventListener('click', closeMenu);
        </script>
    </body>
</html>
