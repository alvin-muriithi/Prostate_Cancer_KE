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
      background-image: linear-gradient(to right, rgba(255, 255, 255, 0.9) 40%, rgba(255, 255, 255, 0.7) 60%, rgba(255, 255, 255, 0.5) 70%, rgba(255, 255, 255, 0) 100%), url('https://readdy.ai/api/search-image?query=Professional%20medical%20doctor%20in%20blue%20scrubs%20examining%20a%203D%20model%20of%20a%20prostate%2C%20with%20soft%20blue%20lighting%2C%20medical%20equipment%20in%20background%2C%20high-quality%20medical%20visualization%2C%20clean%20clinical%20environment%2C%20educational%20setting%2C%20detailed%20anatomical%20model%2C%20professional%20healthcare%20setting%2C%20soft%20focus%20background&width=1920&height=1080&seq=prostate1&orientation=landscape');
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
          <a href="index.php" class="text-2xl font-['Pacifico'] text-primary"
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
            href="events,php"
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
            href="index.html#about"
            class="text-gray-700 hover:text-primary transition-colors py-2"
            >About</a
          >
          <a
            href="education.html"
            class="text-gray-700 hover:text-primary transition-colors py-2"
            >Education</a
          >
          <a
            href="hospitals.html"
            class="text-gray-700 hover:text-primary transition-colors py-2"
            >Hospitals</a
          >
          <a
            href="index.html#events"
            class="text-gray-700 hover:text-primary transition-colors py-2"
            >Events</a
          >
          <a
            href="index.html#contact"
            class="text-gray-700 hover:text-primary transition-colors py-2"
            >Contact</a
          >
        </div>
      </div>
    </nav>
 <!-- Education Section -->
    <section class="py-16" id="education">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16 scroll-reveal">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
            Prostate Cancer Education
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto serif">
            Understanding prostate cancer is the first step toward prevention
            and early detection. Explore our comprehensive resources below.
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- What is Prostate Cancer -->
          <div
            class="bg-white rounded-lg shadow-md overflow-hidden card-hover scroll-reveal"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="https://readdy.ai/api/search-image?query=3D%20medical%20illustration%20of%20prostate%20gland%20with%20highlighted%20cancer%20cells%2C%20anatomical%20visualization%2C%20educational%20medical%20diagram%2C%20detailed%20cellular%20structure%2C%20professional%20medical%20textbook%20quality%2C%20blue%20background%2C%20high%20detail&width=600&height=400&seq=prostate2&orientation=landscape"
                alt="Prostate Cancer Illustration"
                class="w-full h-full object-cover object-top"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-3">
                What is Prostate Cancer?
              </h3>
              <p class="text-gray-600 mb-4 serif">
                Prostate cancer develops in the prostate gland, which is part of
                the male reproductive system. It typically grows slowly and
                initially remains confined to the prostate gland.
              </p>
              <button
                class="text-primary font-medium flex items-center education-toggle"
                data-target="what-content"
              >
                Learn more
                <i class="ri-arrow-right-line ml-2"></i>
              </button>
              <div class="mt-4 hidden" id="what-content">
                <p class="text-gray-600 mb-3 serif">
                  The prostate is a walnut-sized gland located below the bladder
                  and in front of the rectum. It produces fluid that nourishes
                  and transports sperm.
                </p>
                <p class="text-gray-600 mb-3 serif">
                  When cells in the prostate begin to grow uncontrollably,
                  prostate cancer develops. These abnormal cells can eventually
                  form a tumor and, in more advanced cases, spread to other
                  parts of the body.
                </p>
                <p class="text-gray-600 serif">
                  Most prostate cancers are adenocarcinomas, which develop from
                  the gland cells that produce prostatic fluid.
                </p>
              </div>
            </div>
          </div>
          <!-- Risk Factors -->
          <div
            class="bg-white rounded-lg shadow-md overflow-hidden card-hover scroll-reveal"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="https://readdy.ai/api/search-image?query=African%20man%20discussing%20with%20doctor%20about%20health%20risks%2C%20medical%20consultation%2C%20healthcare%20professional%20explaining%20medical%20chart%2C%20professional%20clinical%20setting%2C%20blue%20medical%20office%2C%20preventive%20healthcare%20discussion%2C%20patient%20education%20moment&width=600&height=400&seq=prostate3&orientation=landscape"
                alt="Risk Factors"
                class="w-full h-full object-cover object-top"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-3">Risk Factors</h3>
              <p class="text-gray-600 mb-4 serif">
                Several factors can increase your risk of developing prostate
                cancer, including age, family history, and ethnicity.
              </p>
              <button
                class="text-primary font-medium flex items-center education-toggle"
                data-target="risk-content"
              >
                Learn more
                <i class="ri-arrow-right-line ml-2"></i>
              </button>
              <div class="mt-4 hidden" id="risk-content">
                <ul class="list-disc pl-5 text-gray-600 serif space-y-2">
                  <li>Age: Risk increases significantly after age 50</li>
                  <li>
                    Family history: Having a father or brother with prostate
                    cancer doubles your risk
                  </li>
                  <li>Ethnicity: African men have higher risk rates</li>
                  <li>
                    Diet: High consumption of red meat and high-fat dairy
                    products
                  </li>
                  <li>
                    Obesity: Associated with more aggressive forms of prostate
                    cancer
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Symptoms -->
          <div
            class="bg-white rounded-lg shadow-md overflow-hidden card-hover scroll-reveal"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="https://readdy.ai/api/search-image?query=Medical%20infographic%20showing%20symptoms%20of%20prostate%20problems%2C%20visual%20representation%20of%20urinary%20symptoms%2C%20medical%20diagram%20with%20human%20silhouette%2C%20educational%20healthcare%20visual%2C%20professional%20medical%20illustration%2C%20blue%20color%20scheme%2C%20clean%20design&width=600&height=400&seq=prostate4&orientation=landscape"
                alt="Symptoms"
                class="w-full h-full object-cover object-top"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-3">Symptoms</h3>
              <p class="text-gray-600 mb-4 serif">
                Early prostate cancer often has no symptoms. Advanced cases may
                cause several urinary symptoms and other discomforts.
              </p>
              <button
                class="text-primary font-medium flex items-center education-toggle"
                data-target="symptoms-content"
              >
                Learn more
                <i class="ri-arrow-right-line ml-2"></i>
              </button>
              <div class="mt-4 hidden" id="symptoms-content">
                <ul class="list-disc pl-5 text-gray-600 serif space-y-2">
                  <li>Frequent urination, especially at night</li>
                  <li>Difficulty starting or stopping urination</li>
                  <li>Weak or interrupted urine flow</li>
                  <li>Blood in urine or semen</li>
                  <li>Painful ejaculation</li>
                  <li>Pain or burning during urination</li>
                  <li>Discomfort in the pelvic area</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Prevention -->
          <div
            class="bg-white rounded-lg shadow-md overflow-hidden card-hover scroll-reveal"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="https://readdy.ai/api/search-image?query=Healthy%20lifestyle%20choices%20for%20men%2C%20fresh%20vegetables%20and%20fruits%2C%20man%20exercising%20outdoors%2C%20Mediterranean%20diet%20plate%2C%20preventive%20healthcare%20visualization%2C%20blue%20sky%20background%2C%20healthy%20living%20concept%2C%20professional%20health%20photography&width=600&height=400&seq=prostate5&orientation=landscape"
                alt="Prevention"
                class="w-full h-full object-cover object-top"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-3">
                Prevention Strategies
              </h3>
              <p class="text-gray-600 mb-4 serif">
                While some risk factors cannot be changed, there are steps you
                can take to reduce your risk of prostate cancer.
              </p>
              <button
                class="text-primary font-medium flex items-center education-toggle"
                data-target="prevention-content"
              >
                Learn more
                <i class="ri-arrow-right-line ml-2"></i>
              </button>
              <div class="mt-4 hidden" id="prevention-content">
                <ul class="list-disc pl-5 text-gray-600 serif space-y-2">
                  <li>Maintain a healthy diet rich in fruits and vegetables</li>
                  <li>Exercise regularly</li>
                  <li>Maintain a healthy weight</li>
                  <li>
                    Regular screenings after age 45 (earlier if high risk)
                  </li>
                  <li>Limit consumption of red meat and high-fat dairy</li>
                  <li>
                    Consider including tomatoes, broccoli, and green tea in your
                    diet
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Video & Infographic Section -->
    <section class="py-16 bg-gray-50">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16 scroll-reveal">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
            Educational Resources
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto serif">
            Visual resources to help you better understand prostate cancer, its
            detection, and treatment options.
          </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
          <!-- Video Section -->
          <div
            class="bg-white rounded-lg shadow-md overflow-hidden scroll-reveal"
          >
            <div class="aspect-w-16 aspect-h-9 relative">
              <div class="w-full h-0 pb-[56.25%] relative bg-gray-200">
                <div class="absolute inset-0 flex items-center justify-center">
                  <div class="text-center">
                    <div
                      class="w-20 h-20 flex items-center justify-center mx-auto mb-4 bg-primary bg-opacity-20 rounded-full"
                    >
                      <i class="ri-video-line ri-2x text-primary"></i>
                    </div>
                    <p class="text-gray-600">Video player placeholder</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-3">
                Understanding Prostate Cancer Screening
              </h3>
              <p class="text-gray-600 serif">
                This educational video explains the importance of regular
                prostate cancer screening, the different screening methods
                available, and what to expect during a screening appointment.
              </p>
            </div>
          </div>
          <!-- Infographic -->
          <div
            class="bg-white rounded-lg shadow-md overflow-hidden scroll-reveal"
          >
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-6">
                Prostate Cancer: Facts & Figures
              </h3>
              <div class="infographic-container">
                <img
                  src="https://readdy.ai/api/search-image?query=Medical%20infographic%20about%20prostate%20cancer%20statistics%20and%20facts%2C%20professional%20data%20visualization%2C%20educational%20healthcare%20chart%2C%20blue%20color%20scheme%2C%20clean%20modern%20design%2C%20statistical%20information%20layout%2C%20medical%20information%20design%2C%20high%20quality%20information%20design&width=800&height=600&seq=prostate6&orientation=landscape"
                  alt="Prostate Cancer Infographic"
                  class="w-full rounded-lg"
                />
              </div>
              <div class="mt-6">
                <p class="text-gray-600 serif">
                  This infographic provides key statistics about prostate cancer
                  in Kenya, including prevalence rates, survival statistics, and
                  the impact of early detection on treatment outcomes.
                </p>
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
