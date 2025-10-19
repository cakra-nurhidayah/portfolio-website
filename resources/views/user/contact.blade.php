<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Cakra Portfolio</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #4599b3;
        }

        .gradient-text {
            background: linear-gradient(135deg, #F9B654, #FFD580, #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .contact-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .contact-card:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-3px);
        }

        .social-icon {
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: scale(1.1) rotate(5deg);
        }

        .cv-button {
            background: linear-gradient(135deg, #F9B654, #FFD580);
            transition: all 0.3s ease;
        }

        .cv-button:hover {
            background: linear-gradient(135deg, #FFD580, #F9B654);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(249, 182, 84, 0.3);
        }

        .form-input {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .form-input:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: #F9B654;
            outline: none;
            box-shadow: 0 0 0 3px rgba(249, 182, 84, 0.1);
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .submit-button {
            background: linear-gradient(135deg, #4599b3, #2d5a87);
            transition: all 0.3s ease;
        }

        .submit-button:hover {
            background: linear-gradient(135deg, #2d5a87, #4599b3);
            transform: translateY(-2px);
        }

        /* Animasi untuk elemen yang muncul */
        .fade-in {
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Pattern background */
        .pattern-bg {
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(249, 182, 84, 0.1) 0%, transparent 50%);
        }
    </style>
</head>

<body class="pattern-bg min-h-screen">
    <!-- Include Navbar -->
    @include('user.navbar')

    <!-- Main Content -->
    <main class="relative z-10">
        <!-- Hero Section -->
        <section class="pt-20 pb-16 px-6 lg:px-8">
            <div class="max-w-6xl mx-auto text-center">
                <div class="fade-in">
                    <h1 class="text-4xl lg:text-6xl font-bold gradient-text mb-6">
                        Let's Connect!
                    </h1>
                    <p class="text-xl lg:text-2xl text-white/90 mb-8 max-w-3xl mx-auto leading-relaxed">
                        Ready to bring your ideas to life? I'm here to help you create amazing digital experiences.
                        Let's start a conversation!
                    </p>
                </div>
            </div>
        </section>

        <!-- Contact Content -->
        <section id="contact" class="py-16 px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    
                    <!-- Contact Information -->
                    <div class="space-y-8 fade-in">
                        <div class="text-center lg:text-left">
                            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
                                Get In Touch
                            </h2>
                            <p class="text-lg text-white/80 leading-relaxed">
                                I'm always excited to work on new projects and collaborate with amazing people. 
                                Don't hesitate to reach out!
                            </p>
                        </div>

                        <!-- Contact Cards -->
                        <div class="space-y-6">
                            <!-- Email Card -->
                            <div class="contact-card rounded-2xl p-6">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-gradient-to-r from-red-500 to-pink-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-envelope text-white text-lg"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-white mb-1">Email</h3>
                                        <a href="mailto:cakranurhidayah01@gmail.com" 
                                           class="text-white/80 hover:text-white transition-colors duration-300">
                                            cakranurhidayah01@gmail.com
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Location Card -->
                            <div class="contact-card rounded-2xl p-6">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-teal-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-map-marker-alt text-white text-lg"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-white mb-1">Location</h3>
                                        <p class="text-white/80">Indonesia</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Availability Card -->
                            <div class="contact-card rounded-2xl p-6">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-clock text-white text-lg"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-white mb-1">Availability</h3>
                                        <p class="text-white/80">Open for new projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CV Download Button -->
                        <div class="text-center lg:text-left">
                            <a href="#" 
                               class="cv-button inline-flex items-center px-8 py-4 rounded-xl text-black font-bold text-lg shadow-lg hover:shadow-xl transition-all duration-300">
                                <i class="fas fa-download mr-3"></i>
                                Download My CV
                            </a>
                        </div>

                        <!-- Social Media -->
                        <div class="text-center lg:text-left">
                            <h3 class="text-xl font-semibold text-white mb-4">Follow Me</h3>
                            <div class="flex justify-center lg:justify-start space-x-4">
                                <!-- LinkedIn -->
                                <a href="https://www.linkedin.com/in/cakra-nurhidayah/" target="_blank"
                                   class="social-icon w-12 h-12 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-blue-600 transition-all duration-300">
                                    <img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn" 
                                         class="w-6 h-6 filter brightness-0 invert hover:brightness-100 hover:invert-0 transition-all duration-300">
                                </a>

                                <!-- Instagram -->
                                <a href="https://www.instagram.com/astra_zen1/" target="_blank"
                                   class="social-icon w-12 h-12 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-gradient-to-r hover:from-pink-500 hover:to-purple-600 transition-all duration-300">
                                    <img src="{{ asset('images/instagram.png') }}" alt="Instagram" 
                                         class="w-6 h-6 filter brightness-0 invert hover:brightness-100 hover:invert-0 transition-all duration-300">
                                </a>

                                <!-- X (Twitter) -->
                                <a href="https://x.com/YourUsername" target="_blank"
                                   class="social-icon w-12 h-12 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-black/80 transition-all duration-300">
                                    <img src="{{ asset('images/X3.png') }}" alt="X" 
                                         class="w-6 h-6 filter brightness-0 invert hover:brightness-100 hover:invert-0 transition-all duration-300">
                                </a>

                                <!-- Email -->
                                <a href="mailto:cakranurhidayah01@gmail.com"
                                   class="social-icon w-12 h-12 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-red-600 transition-all duration-300">
                                    <img src="{{ asset('images/mail.png') }}" alt="Email" 
                                         class="w-6 h-6 filter brightness-0 invert hover:brightness-100 hover:invert-0 transition-all duration-300">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="fade-in">
                        <div class="contact-card rounded-2xl p-8">
                            <h2 class="text-3xl font-bold text-white mb-6 text-center">Send Me a Message</h2>
                            
                            <form class="space-y-6">
                                <!-- Name -->
                                <div>
                                    <label for="name" class="block text-white font-semibold mb-2">
                                        <i class="fas fa-user mr-2"></i>Full Name
                                    </label>
                                    <input type="text" id="name" name="name" required
                                           class="form-input w-full px-4 py-3 rounded-xl text-white placeholder-white/70"
                                           placeholder="Your full name">
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-white font-semibold mb-2">
                                        <i class="fas fa-envelope mr-2"></i>Email Address
                                    </label>
                                    <input type="email" id="email" name="email" required
                                           class="form-input w-full px-4 py-3 rounded-xl text-white placeholder-white/70"
                                           placeholder="your.email@example.com">
                                </div>

                                <!-- Subject -->
                                <div>
                                    <label for="subject" class="block text-white font-semibold mb-2">
                                        <i class="fas fa-tag mr-2"></i>Subject
                                    </label>
                                    <input type="text" id="subject" name="subject" required
                                           class="form-input w-full px-4 py-3 rounded-xl text-white placeholder-white/70"
                                           placeholder="What's this about?">
                                </div>

                                <!-- Message -->
                                <div>
                                    <label for="message" class="block text-white font-semibold mb-2">
                                        <i class="fas fa-comment mr-2"></i>Message
                                    </label>
                                    <textarea id="message" name="message" rows="5" required
                                              class="form-input w-full px-4 py-3 rounded-xl text-white placeholder-white/70 resize-none"
                                              placeholder="Tell me about your project or idea..."></textarea>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button type="submit" 
                                            class="submit-button px-8 py-4 rounded-xl text-white font-bold text-lg shadow-lg hover:shadow-xl transition-all duration-300">
                                        <i class="fas fa-paper-plane mr-2"></i>
                                        Send Message
                                    </button>
                                </div>
                            </form>

                            <!-- Additional Info -->
                            <div class="mt-8 text-center">
                                <p class="text-white/70 text-sm">
                                    <i class="fas fa-clock mr-1"></i>
                                    I typically respond within 24 hours
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="py-16 px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <div class="contact-card rounded-2xl p-8 fade-in">
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
                        Ready to Start Your Project?
                    </h2>
                    <p class="text-lg text-white/80 mb-8 leading-relaxed">
                        Whether you have a clear vision or just an idea, I'm here to help you bring it to life. 
                        Let's create something amazing together!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="mailto:cakranurhidayah01@gmail.com" 
                           class="cv-button inline-flex items-center px-8 py-4 rounded-xl text-black font-bold text-lg shadow-lg hover:shadow-xl transition-all duration-300">
                            <i class="fas fa-envelope mr-3"></i>
                            Send Email
                        </a>
                        <a href="{{ route('projects') }}" 
                           class="submit-button inline-flex items-center px-8 py-4 rounded-xl text-white font-bold text-lg shadow-lg hover:shadow-xl transition-all duration-300">
                            <i class="fas fa-eye mr-3"></i>
                            View My Work
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Include Footer -->
    @include('user.footer')

    <!-- JavaScript for form handling and animations -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Form submission handling
            const form = document.querySelector('form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Get form data
                    const formData = new FormData(form);
                    const name = formData.get('name');
                    const email = formData.get('email');
                    const subject = formData.get('subject');
                    const message = formData.get('message');
                    
                    // Create mailto link
                    const mailtoLink = `mailto:cakranurhidayah01@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(`Name: ${name}\nEmail: ${email}\n\nMessage:\n${message}`)}`;
                    
                    // Open email client
                    window.location.href = mailtoLink;
                    
                    // Show success message
                    alert('Your email client will open with the message pre-filled. Thank you for reaching out!');
                });
            }

            // CV download handling
            const cvButton = document.querySelector('.cv-button');
            if (cvButton) {
                cvButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert('CV download feature will be implemented soon. For now, please contact me directly for my CV.');
                });
            }

            // Smooth scroll for anchor links
            const anchorLinks = document.querySelectorAll('a[href^="#"]');
            anchorLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        const offsetTop = targetElement.offsetTop - 100;
                        window.scrollTo({
                            top: offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Add animation on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                    }
                });
            }, observerOptions);

            // Observe elements for animation
            const animatedElements = document.querySelectorAll('.contact-card, .fade-in');
            animatedElements.forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>

</html>
