<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" />
    <link rel="stylesheet" href="assets\css\style.css" />
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
            href="index.php"
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
          

          <!-- NEW: Logout Button -->
          <button
            id="logoutBtn"
            class="hidden whitespace-nowrap bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition-all"
          >
            Logout
          </button>

          <span id="welcomeText" class="ml-4 font-medium text-teal-700 hidden"></span>


          <a
            href="#donate"
            class="whitespace-nowrap bg-primary text-white px-6 py-2 !rounded-button hover:bg-opacity-90 transition-all"
          >
            Donate
          </a>
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


    <!-- Auth Modals -->
    <div
      id="authModal"
      class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
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
            <button id="adminLoginBtn" class="whitespace-nowrap bg-gray-100 text-gray-700 px-4 py-2 !rounded-button hover:bg-gray-200 transition-all">
              Admin? 
            </button>

            <button
              type="submit"
              class="w-full bg-primary text-white px-6 py-3 !rounded-button hover:bg-opacity-90 transition-all"
            >
              Sign Up
            </button>
            <button id="googleSignInBtn" class="w-full flex items-center justify-center gap-2 bg-white text-gray-700 border border-gray-300 px-4 py-2 rounded hover:bg-gray-100 transition-all">
              <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Logo" class="w-5 h-5" />
              Continue with Google
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
    
    
    <script type="module" src="assets/js/firebase-config.js"></script>
  <script type="module" src="sassets/js/auth-modal.js"></script>