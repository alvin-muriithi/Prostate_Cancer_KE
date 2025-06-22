<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ProstateCare Kenya - Understanding Prostate Cancer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Merriweather:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"
    />
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script src="https://www.gstatic.com/firebasejs/10.8.0/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.8.0/firebase-auth-compat.js"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: { primary: "#40E0D0", secondary: "#87CEEB" },
            borderRadius: {
              none: "0px",
              sm: "4px",
              DEFAULT: "8px",
              md: "12px",
              lg: "16px",
              xl: "20px",
              "2xl": "24px",
              "3xl": "32px",
              full: "9999px",
              button: "8px",
            },
          },
        },
      };
    </script>
    <script src="https://www.gstatic.com/firebasejs/11.9.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/11.9.1/firebase-auth.js"></script>
    <script>
      const firebaseConfig = {
        apiKey: "AIzaSyAv0yaPAj1S6mfdrGarEPloVBM-h6-j9zQ",
        authDomain: "prostatecareauthapp.firebaseapp.com",
        projectId: "prostatecareauthapp",
        storageBucket: "prostatecareauthapp.firebasestorage.app",
        messagingSenderId: "37360920884",
        appId: "1:37360920884:web:0b1d5c6b6c7a374a555d61" 
      };
      firebase.initializeApp(firebaseConfig);
      const auth = firebase.auth();
    </script>

    <style>
      :where([class^="ri-"])::before { content: "\f3c2"; }
      body {
      font-family: 'Montserrat', sans-serif;
      scroll-behavior: smooth;
      }
      .serif {
      font-family: 'Merriweather', serif;
      }
      .hero-section {
      background-image: linear-gradient(to right, rgba(255, 255, 255, 0.9) 40%, rgba(255, 255, 255, 0.7) 60%, rgba(255, 255, 255, 0.5) 70%, rgba(255, 255, 255, 0) 100%), url('family.png');
      background-size: cover;
      background-position: center right;
      }
      .card-hover {
      transition: all 0.3s ease;
      }
      .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
      }
      .nav-link {
      position: relative;
      }
      .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -2px;
      left: 0;
      background-color: #40E0D0;
      transition: width 0.3s ease;
      }
      .nav-link:hover::after {
      width: 100%;
      }
      .custom-checkbox {
      appearance: none;
      -webkit-appearance: none;
      width: 20px;
      height: 20px;
      border: 2px solid #40E0D0;
      border-radius: 4px;
      outline: none;
      transition: all 0.2s ease;
      position: relative;
      }
      .custom-checkbox:checked {
      background-color: #40E0D0;
      }
      .custom-checkbox:checked::after {
      content: '';
      position: absolute;
      top: 2px;
      left: 6px;
      width: 5px;
      height: 10px;
      border: solid white;
      border-width: 0 2px 2px 0;
      transform: rotate(45deg);
      }
      .scroll-reveal {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s ease, transform 0.6s ease;
      }
      .scroll-reveal.revealed {
      opacity: 1;
      transform: translateY(0);
      }
      input[type="number"]::-webkit-inner-spin-button,
      input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
      }
    </style>
  </head>
  <body class="bg-white">
    <!-- Navigation -->
    <nav
      class="fixed w-full bg-white bg-opacity-95 shadow-sm z-50 transition-all duration-300"
    >
      <div
        class="container mx-auto px-6 py-3 flex justify-between items-center"
      >
        <div class="flex items-center">
          <a href="index.html" class="text-2xl font-['Pacifico'] text-primary"
            >ProstateCare</a
          >
        </div>
        <div class="hidden md:flex items-center space-x-8">
          <a
            href="index.php#about"
            class="nav-link text-gray-700 hover:text-primary transition-colors"
            >About</a
          >
          <a
            href="education.php"
            class="nav-link text-gray-700 hover:text-primary transition-colors"
            >Education</a
          >
          <a
            href="hospitals.php"
            class="nav-link text-gray-700 hover:text-primary transition-colors"
            >Hospitals</a
          >
          <a
            href="events.php"
            class="nav-link text-gray-700 hover:text-primary transition-colors"
            >Events</a
          >
          <a
            href="index.php#contact"
            class="nav-link text-gray-700 hover:text-primary transition-colors"
            >Contact</a
          >
        </div>
        <div class="flex items-center space-x-4">
          <button
            id="loginBtn"
            class="whitespace-nowrap text-gray-700 hover:text-primary transition-colors"
          >
            Login
          </button>
          <button
            id="signupBtn"
            class="whitespace-nowrap bg-gray-100 text-gray-700 px-4 py-2 !rounded-button hover:bg-gray-200 transition-all"
          >
            Sign Up
          </button>
          <a
            href="#donate"
            class="whitespace-nowrap bg-primary text-white px-6 py-2 !rounded-button hover:bg-opacity-90 transition-all"
            >Donate</a
          >
          <button
            class="md:hidden w-10 h-10 flex items-center justify-center text-gray-700"
            id="mobile-menu-button"
          >
            <i class="ri-menu-line ri-lg"></i>
          </button>
        </div>
      </div>
      <!-- Mobile Menu -->
      <div id="mobile-menu" class="md:hidden bg-white hidden">
        <div class="container mx-auto px-6 py-3 flex flex-col space-y-4">
          <a
            href="index.php#about"
            class="text-gray-700 hover:text-primary transition-colors py-2"
            >About</a
          >
          <a
            href="education.php"
            class="text-gray-700 hover:text-primary transition-colors py-2"
            >Education</a
          >
          <a
            href="hospitals.php"
            class="text-gray-700 hover:text-primary transition-colors py-2"
            >Hospitals</a
          >
          <a
            href="events.php"
            class="text-gray-700 hover:text-primary transition-colors py-2"
            >Events</a
          >
          <a
            href="index.php#contact"
            class="text-gray-700 hover:text-primary transition-colors py-2"
            >Contact</a
          >
        </div>
      </div>
    </nav>
    <!-- Hospital Listings -->
    <section class="py-16" id="hospitals">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16 scroll-reveal">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
            Specialized Hospitals
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto serif">
            These leading Kenyan hospitals offer comprehensive prostate cancer
            screening, diagnosis, and treatment services.
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Kenyatta National Hospital -->
          <div
            class="bg-white rounded-lg shadow-md overflow-hidden card-hover scroll-reveal"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="https://readdy.ai/api/search-image?query=Modern%20hospital%20building%20exterior%2C%20Kenyan%20healthcare%20facility%2C%20professional%20medical%20center%20architecture%2C%20blue%20sky%2C%20clean%20medical%20facility%2C%20contemporary%20hospital%20design%2C%20welcoming%20entrance&width=600&height=400&seq=hospital1&orientation=landscape"
                alt="Kenyatta National Hospital"
                class="w-full h-full object-cover object-top"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-2">
                Kenyatta National Hospital
              </h3>
              <p class="text-gray-600 mb-4 serif">
                Kenya's largest referral and teaching hospital with
                comprehensive oncology services.
              </p>
              <div class="space-y-2">
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-map-pin-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">
                    Hospital Road, Upper Hill, Nairobi
                  </p>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-phone-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">+254 20 2726300</p>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-global-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">knh.or.ke</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Aga Khan University Hospital -->
          <div
            class="bg-white rounded-lg shadow-md overflow-hidden card-hover scroll-reveal"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="https://readdy.ai/api/search-image?query=Modern%20hospital%20building%20with%20glass%20facade%2C%20premium%20healthcare%20facility%2C%20professional%20medical%20center%20architecture%2C%20blue%20sky%2C%20clean%20medical%20facility%2C%20contemporary%20hospital%20design%2C%20welcoming%20entrance&width=600&height=400&seq=hospital2&orientation=landscape"
                alt="Aga Khan University Hospital"
                class="w-full h-full object-cover object-top"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-2">
                Aga Khan University Hospital
              </h3>
              <p class="text-gray-600 mb-4 serif">
                Private teaching hospital with state-of-the-art cancer
                diagnostic and treatment facilities.
              </p>
              <div class="space-y-2">
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-map-pin-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">
                    3rd Parklands Avenue, Nairobi
                  </p>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-phone-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">+254 20 3662000</p>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-global-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">hospitals.aku.edu</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Nairobi Hospital -->
          <div
            class="bg-white rounded-lg shadow-md overflow-hidden card-hover scroll-reveal"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="https://readdy.ai/api/search-image?query=Modern%20hospital%20building%20with%20landscaped%20entrance%2C%20premium%20healthcare%20facility%2C%20professional%20medical%20center%20architecture%2C%20blue%20sky%2C%20clean%20medical%20facility%2C%20contemporary%20hospital%20design%2C%20welcoming%20entrance&width=600&height=400&seq=hospital3&orientation=landscape"
                alt="Nairobi Hospital"
                class="w-full h-full object-cover object-top"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-2">
                Nairobi Hospital
              </h3>
              <p class="text-gray-600 mb-4 serif">
                Leading private hospital with specialized urology and oncology
                departments.
              </p>
              <div class="space-y-2">
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-map-pin-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">
                    Argwings Kodhek Road, Nairobi
                  </p>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-phone-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">+254 20 2845000</p>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-global-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">nairobihospital.org</p>
                </div>
              </div>
            </div>
          </div>
          <!-- MP Shah Hospital -->
          <div
            class="bg-white rounded-lg shadow-md overflow-hidden card-hover scroll-reveal"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="https://readdy.ai/api/search-image?query=Modern%20hospital%20building%20with%20circular%20driveway%2C%20premium%20healthcare%20facility%2C%20professional%20medical%20center%20architecture%2C%20blue%20sky%2C%20clean%20medical%20facility%2C%20contemporary%20hospital%20design%2C%20welcoming%20entrance&width=600&height=400&seq=hospital4&orientation=landscape"
                alt="MP Shah Hospital"
                class="w-full h-full object-cover object-top"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-2">
                MP Shah Hospital
              </h3>
              <p class="text-gray-600 mb-4 serif">
                Multi-specialty hospital with advanced diagnostic imaging and
                cancer treatment facilities.
              </p>
              <div class="space-y-2">
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-map-pin-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">
                    Shivachi Road, Parklands, Nairobi
                  </p>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-phone-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">+254 20 3746000</p>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-global-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">mpshahhosp.org</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
      <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
          <div>
            <h3 class="text-xl font-bold mb-4">ProstateCare Kenya</h3>
            <p class="text-gray-300 mb-4">
              Dedicated to prostate cancer awareness, education, and support
              across Kenya.
            </p>
            <div class="flex space-x-4">
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-700 hover:bg-primary transition-colors"
              >
                <i class="ri-facebook-fill"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-700 hover:bg-primary transition-colors"
              >
                <i class="ri-twitter-fill"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-700 hover:bg-primary transition-colors"
              >
                <i class="ri-instagram-fill"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-700 hover:bg-primary transition-colors"
              >
                <i class="ri-youtube-fill"></i>
              </a>
            </div>
          </div>
          <div>
            <h3 class="text-xl font-bold mb-4">Quick Links</h3>
            <ul class="space-y-2">
              <li>
                <a
                  href="#about"
                  class="text-gray-300 hover:text-primary transition-colors"
                  >About Us</a
                >
              </li>
              <li>
                <a
                  href="#education"
                  class="text-gray-300 hover:text-primary transition-colors"
                  >Education</a
                >
              </li>
              <li>
                <a
                  href="#hospitals"
                  class="text-gray-300 hover:text-primary transition-colors"
                  >Hospitals</a
                >
              </li>
              <li>
                <a
                  href="#events"
                  class="text-gray-300 hover:text-primary transition-colors"
                  >Events</a
                >
              </li>
              <li>
                <a
                  href="#donate"
                  class="text-gray-300 hover:text-primary transition-colors"
                  >Donate</a
                >
              </li>
            </ul>
          </div>
          <div>
            <h3 class="text-xl font-bold mb-4">Resources</h3>
            <ul class="space-y-2">
              <li>
                <a
                  href="#"
                  class="text-gray-300 hover:text-primary transition-colors"
                  >Research Articles</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-300 hover:text-primary transition-colors"
                  >Treatment Options</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-300 hover:text-primary transition-colors"
                  >Support Groups</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-300 hover:text-primary transition-colors"
                  >Survivor Stories</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-300 hover:text-primary transition-colors"
                  >FAQs</a
                >
              </li>
            </ul>
          </div>
          <div>
            <h3 class="text-xl font-bold mb-4">Contact</h3>
            <ul class="space-y-2">
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                >
                  <i class="ri-map-pin-line"></i>
                </div>
                <span class="ml-2 text-gray-300"
                  >Kenyatta Avenue, Nairobi, Kenya</span
                >
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                >
                  <i class="ri-phone-line"></i>
                </div>
                <span class="ml-2 text-gray-300">+254 712 345 678</span>
              </li>
              <li class="flex items-start">
                <div
                  class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                >
                  <i class="ri-mail-line"></i>
                </div>
                <span class="ml-2 text-gray-300"
                  >info@prostatecarekenya.org</span
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="pt-8 border-t border-gray-700 text-center">
          <p class="text-gray-400">
            &copy; 2025 ProstateCare Kenya. All rights reserved.
          </p>
        </div>
      </div>
    </footer>
    <!-- Auth Modals -->
    <div
      id="authModal"
      class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50"
    >
      <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4">
        <!-- Login Form -->
        <div id="loginForm" class="hidden">
          <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Login</h2>
            <button class="close-modal text-gray-500 hover:text-gray-700">
              <i class="ri-close-line ri-lg"></i>
            </button>
          </div>
          <form id="loginFormElement" class="space-y-4">
            <div>
              <label class="block text-gray-700 mb-2" for="loginEmail"
                >Email Address</label
              >
              <input
                type="email"
                id="loginEmail"
                class="w-full px-4 py-3 border-none !rounded-button bg-gray-50"
                required
              />
            </div>
            <div>
              <label class="block text-gray-700 mb-2" for="loginPassword"
                >Password</label
              >
              <input
                type="password"
                id="loginPassword"
                class="w-full px-4 py-3 border-none !rounded-button bg-gray-50"
                required
              />
            </div>
            <button
              type="submit"
              class="w-full bg-primary text-white px-6 py-3 !rounded-button hover:bg-opacity-90 transition-all"
            >
              Login
            </button>
            <p class="text-center text-gray-600">
              Don't have an account?
              <button
                type="button"
                class="text-primary hover:underline"
                id="switchToSignup"
              >
                Sign up
              </button>
            </p>
          </form>
        </div>
        <!-- Signup Form -->
        <div id="signupForm" class="hidden">
          <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Create Account</h2>
            <button class="close-modal text-gray-500 hover:text-gray-700">
              <i class="ri-close-line ri-lg"></i>
            </button>
          </div>
          <form id="signupFormElement" class="space-y-4">
            <div>
              <label class="block text-gray-700 mb-2" for="signupName"
                >Full Name</label
              >
              <input
                type="text"
                id="signupName"
                class="w-full px-4 py-3 border-none !rounded-button bg-gray-50"
                required
              />
            </div>
            <div>
              <label class="block text-gray-700 mb-2" for="signupEmail"
                >Email Address</label
              >
              <input
                type="email"
                id="signupEmail"
                class="w-full px-4 py-3 border-none !rounded-button bg-gray-50"
                required
              />
            </div>
            <div>
              <label class="block text-gray-700 mb-2" for="signupPassword"
                >Password</label
              >
              <input
                type="password"
                id="signupPassword"
                class="w-full px-4 py-3 border-none !rounded-button bg-gray-50"
                required
              />
            </div>
            <button
              type="submit"
              class="w-full bg-primary text-white px-6 py-3 !rounded-button hover:bg-opacity-90 transition-all"
            >
              Sign Up
            </button>
            <button id="googleSignInBtn" class="bg-red-500 text-white    px-4 py-2 rounded">
            Sign in with Google
            </button>
            <p class="text-center text-gray-600">
              Already have an account?
              <button
                type="button"
                class="text-primary hover:underline"
                id="switchToLogin"
              >
                Login
              </button>
            </p>
          </form>
        </div>
      </div>
    </div>
    <!-- Back to Top Button -->
    <button
      id="back-to-top"
      class="fixed bottom-8 right-8 w-12 h-12 bg-primary text-white rounded-full shadow-lg flex items-center justify-center opacity-0 invisible transition-all duration-300"
    >
      <i class="ri-arrow-up-line ri-lg"></i>
    </button>
    <script id="navigation-script">
      document.addEventListener("DOMContentLoaded", function () {
        const mobileMenuButton = document.getElementById("mobile-menu-button");
        const mobileMenu = document.getElementById("mobile-menu");
        const nav = document.querySelector("nav");
        // Mobile menu toggle
        mobileMenuButton.addEventListener("click", function () {
          mobileMenu.classList.toggle("hidden");
        });
        // Navbar scroll effect
        window.addEventListener("scroll", function () {
          if (window.scrollY > 50) {
            nav.classList.add("py-2");
            nav.classList.add("shadow-md");
          } else {
            nav.classList.remove("py-2");
            nav.classList.remove("shadow-md");
          }
        });
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
          anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const targetId = this.getAttribute("href");
            if (targetId === "#") return;
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
              window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: "smooth",
              });
              // Close mobile menu if open
              if (!mobileMenu.classList.contains("hidden")) {
                mobileMenu.classList.add("hidden");
              }
            }
          });
        });
      });
    </script>
    <script id="scroll-animations-script">
      document.addEventListener("DOMContentLoaded", function () {
        const scrollRevealElements = document.querySelectorAll(".scroll-reveal");
        const backToTopButton = document.getElementById("back-to-top");
        // Counter animation
        const counterElements = document.querySelectorAll(".counter");
        let countersStarted = false;
        function startCounters() {
          if (countersStarted) return;
          counterElements.forEach((counter) => {
            const target = parseInt(counter.getAttribute("data-target"));
            const duration = 2000; // 2 seconds
            const step = target / (duration / 16); // 60fps
            let current = 0;
            const updateCounter = () => {
              current += step;
              if (current < target) {
                counter.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
              } else {
                counter.textContent = target;
              }
            };
            updateCounter();
          });
          countersStarted = true;
        }
        // Scroll reveal animation
        function checkScrollReveal() {
          scrollRevealElements.forEach((element) => {
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (elementTop < windowHeight * 0.85) {
              element.classList.add("revealed");
              // Start counters when the stats section is visible
              if (element.querySelector(".counter")) {
                startCounters();
              }
            }
          });
          // Back to top button visibility
          if (window.scrollY > 500) {
            backToTopButton.classList.remove("opacity-0", "invisible");
            backToTopButton.classList.add("opacity-100", "visible");
          } else {
            backToTopButton.classList.add("opacity-0", "invisible");
            backToTopButton.classList.remove("opacity-100", "visible");
          }
        }
        // Initial check
        checkScrollReveal();
        // Check on scroll
        window.addEventListener("scroll", checkScrollReveal);
        // Back to top button functionality
        backToTopButton.addEventListener("click", function () {
          window.scrollTo({
            top: 0,
            behavior: "smooth",
          });
        });
      });
    </script>
    <script id="firebase-config">
      const firebaseConfig = {
        // Add your Firebase configuration here
        apiKey: "AIzaSyAv0yaPAj1S6mfdrGarEPloVBM-h6-j9zQ",
        authDomain: "prostatecareauthapp.firebaseapp.com",
        projectId: "prostatecareauthapp",
        storageBucket: "prostatecareauthapp.firebasestorage.app",
        messagingSenderId: "37360920884",
        appId: "1:37360920884:web:0b1d5c6b6c7a374a555d61"
      };
      firebase.initializeApp(firebaseConfig);
      const auth = firebase.auth();
    </script>
    <script id="auth-script">
      document.addEventListener("DOMContentLoaded", function () {
        const authModal = document.getElementById("authModal");
        const loginForm = document.getElementById("loginForm");
        const signupForm = document.getElementById("signupForm");
        const loginBtn = document.getElementById("loginBtn");
        const signupBtn = document.getElementById("signupBtn");
        const switchToSignup = document.getElementById("switchToSignup");
        const switchToLogin = document.getElementById("switchToLogin");
        const closeButtons = document.querySelectorAll(".close-modal");
        // Show/hide modal functions
        function showModal(form) {
          authModal.classList.remove("hidden");
          loginForm.classList.add("hidden");
          signupForm.classList.add("hidden");
          form.classList.remove("hidden");
        }
        function hideModal() {
          authModal.classList.add("hidden");
        }
        // Event listeners for opening modals
        loginBtn.addEventListener("click", () => showModal(loginForm));
        signupBtn.addEventListener("click", () => showModal(signupForm));
        switchToSignup.addEventListener("click", () => showModal(signupForm));
        switchToLogin.addEventListener("click", () => showModal(loginForm));
        // Close modal
        closeButtons.forEach((button) => {
          button.addEventListener("click", hideModal);
        });
        // Click outside to close
        authModal.addEventListener("click", (e) => {
          if (e.target === authModal) hideModal();
        });
        // Handle login
        document.getElementById("loginFormElement").addEventListener("submit", async (e) => {
          e.preventDefault();
          const email = document.getElementById("loginEmail").value;
          const password = document.getElementById("loginPassword").value;

          try {
            const res = await fetch("/Prostate_Cancer_KE/api/login.php", {
              method: "POST",
              headers: { "Content-Type": "application/json" },
              body: JSON.stringify({ email, password })
            });
            const data = await res.json();
            if (!res.ok) throw new Error(data.message);

            hideModal();
            updateAuthUI(true, data.user);
          } catch (error) {
            showError(error.message);
          }
        });
        // Handle signup
        document.getElementById("signupFormElement").addEventListener("submit", async (e) => {
          e.preventDefault();
          const full_name = document.getElementById("signupName").value;
          const email = document.getElementById("signupEmail").value;
          const password = document.getElementById("signupPassword").value;

          try {
            const res = await fetch("/Prostate_Cancer_KE/api/signup.php", {
              method: "POST",
              headers: { "Content-Type": "application/json" },
              body: JSON.stringify({ full_name, email, password })
            });
            const data = await res.json();
            if (!res.ok) throw new Error(data.message);

            hideModal();
            updateAuthUI(true, { full_name, email }); // Assume immediate login
          } catch (error) {
            showError(error.message);
          }
        });

        //Handle Google Sign-In
        document.getElementById("googleSignInBtn").addEventListener("click", async () => {
          const provider = new firebase.auth.GoogleAuthProvider();

          try {
            const result = await auth.signInWithPopup(provider);
            const user = result.user;
            const token = await user.getIdToken();

            // Send user info to backend to sync with MySQL
            const res = await fetch("/Prostate_Cancer_KE/api/sync_user.php", {
              method: "POST",
              headers: { "Content-Type": "application/json" },
              body: JSON.stringify({
                email: user.email,
                name: user.displayName
              })
            });

            const data = await res.json();
            if (!res.ok) throw new Error(data.message);

            hideModal();
            updateAuthUI(true, { full_name: user.displayName, email: user.email });
          } catch (err) {
            showError(err.message);
          }
        });

       

        // Update UI based on auth state
        function updateAuthUI(isLoggedIn, user = null) {
          const userArea = document.getElementById("userArea");
          if (isLoggedIn) {
            loginBtn.classList.add("hidden");
            signupBtn.classList.add("hidden");

            const logoutBtn = document.createElement("button");
            logoutBtn.textContent = "Logout";
            logoutBtn.className = "text-gray-700 hover:text-primary transition-colors";
            logoutBtn.addEventListener("click", () => {
              localStorage.removeItem("user");
              updateAuthUI(false);
            });

            signupBtn.parentNode.insertBefore(logoutBtn, signupBtn);
            localStorage.setItem("user", JSON.stringify(user));
            userArea.innerText = `Welcome, ${user.full_name}`;
          } else {
            loginBtn.classList.remove("hidden");
            signupBtn.classList.remove("hidden");
            const logoutBtn = document.querySelector('button:contains("Logout")');
            if (logoutBtn) logoutBtn.remove();
            userArea.innerText = "";
          }
        }
        // Optional: on load
        const storedUser = localStorage.getItem("user");
        if (storedUser) updateAuthUI(true, JSON.parse(storedUser));

        // Show error message
        function showError(message) {
          // You can implement your own error display logic here
          console.error(message);
        }
        // Check auth state on page load
        auth.onAuthStateChanged((user) => {
          updateAuthUI(!!user);
        });
      });
    </script>
    <script id="interactive-elements-script">
      document.addEventListener("DOMContentLoaded", function () {
        // Education section toggles
        const educationToggles = document.querySelectorAll(".education-toggle");
        educationToggles.forEach((toggle) => {
          toggle.addEventListener("click", function () {
            const targetId = this.getAttribute("data-target");
            const targetContent = document.getElementById(targetId);
            if (targetContent.classList.contains("hidden")) {
              targetContent.classList.remove("hidden");
              this.innerHTML = 'Show less <i class="ri-arrow-up-line ml-2"></i>';
            } else {
              targetContent.classList.add("hidden");
              this.innerHTML = 'Learn more <i class="ri-arrow-right-line ml-2"></i>';
            }
          });
        });
        // FAQ toggles
        const faqToggles = document.querySelectorAll(".faq-toggle");
        faqToggles.forEach((toggle) => {
          toggle.addEventListener("click", function () {
            const targetId = this.getAttribute("data-target");
            const targetContent = document.getElementById(targetId);
            const icon = this.querySelector("i");
            if (targetContent.classList.contains("hidden")) {
              // Close all other FAQs
              document.querySelectorAll(".faq-toggle").forEach((otherToggle) => {
                if (otherToggle !== toggle) {
                  const otherId = otherToggle.getAttribute("data-target");
                  const otherContent = document.getElementById(otherId);
                  const otherIcon = otherToggle.querySelector("i");
                  otherContent.classList.add("hidden");
                  otherIcon.classList.remove("ri-arrow-up-s-line");
                  otherIcon.classList.add("ri-arrow-down-s-line");
                }
              });
              targetContent.classList.remove("hidden");
              icon.classList.remove("ri-arrow-down-s-line");
              icon.classList.add("ri-arrow-up-s-line");
            } else {
              targetContent.classList.add("hidden");
              icon.classList.remove("ri-arrow-up-s-line");
              icon.classList.add("ri-arrow-down-s-line");
            }
          });
        });
        // Donation amount buttons
        const amountButtons = document.querySelectorAll(".amount-btn");
        const amountInput = document.getElementById("amount");
        amountButtons.forEach((button) => {
          button.addEventListener("click", function () {
            // Remove active class from all buttons
            amountButtons.forEach((btn) => {
              btn.classList.remove("bg-primary", "text-white");
              btn.classList.add("bg-white", "text-gray-700");
            });
            // Add active class to clicked button
            this.classList.remove("bg-white", "text-gray-700");
            this.classList.add("bg-primary", "text-white");
            // Set amount in input
            amountInput.value = this.getAttribute("data-amount");
          });
        });
      });
    </script>
  </body>
</html>
