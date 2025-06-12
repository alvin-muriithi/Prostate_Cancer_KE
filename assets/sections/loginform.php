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
  <body class="bg-gray-100">        
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
    </body>
</html>