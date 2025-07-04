<body>

  <!-- Auth Modal -->
  <div
    id="authModal"
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50"
  >
    <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4">
      <!-- Login Form -->
      <div id="loginForm" class="login-form-container">
        <div class="flex justify-between items-center mb-6">
          <h2 class="text-2xl font-bold text-gray-800">Login</h2>
          <button class="close-modal text-gray-500 hover:text-gray-700">
            <i class="ri-close-line ri-lg"></i>
          </button>
        </div>
        <form id="loginFormElement" class="space-y-4">
          <div>
            <label for="loginEmail" class="block text-gray-700 mb-2">Email Address</label>
            <input type="email" id="loginEmail" class="w-full px-4 py-3 bg-gray-50 rounded" required />
          </div>
          <div>
            <label for="loginPassword" class="block text-gray-700 mb-2">Password</label>
            <input type="password" id="loginPassword" class="w-full px-4 py-3 bg-gray-50 rounded" required />
          </div>
          <button type="submit" class="w-full bg-primary text-white px-6 py-3 rounded hover:bg-opacity-90">Login</button>
          <button type="button" class="w-full flex items-center justify-center gap-2 border border-gray-300 px-4 py-2 rounded hover:bg-gray-100 transition-all google-signin-btn">
            <img src="assets/img/google-icon.png" alt="Google" class="w-5 h-5" />
            Sign in Using Google
          </button>
          <p class="text-center text-gray-600">
            Don’t have an account? <button type="button" class="text-primary hover:underline" id="switchToSignup">Sign up</button>
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
            <label for="signupName" class="block text-gray-700 mb-2">Full Name</label>
            <input type="text" id="signupName" class="w-full px-4 py-3 bg-gray-50 rounded" required />
          </div>
          <div>
            <label for="signupEmail" class="block text-gray-700 mb-2">Email Address</label>
            <input type="email" id="signupEmail" class="w-full px-4 py-3 bg-gray-50 rounded" required />
          </div>
          <div>
            <label for="signupPassword" class="block text-gray-700 mb-2">Password</label>
            <input type="password" id="signupPassword" class="w-full px-4 py-3 bg-gray-50 rounded" required />
          </div>
          <button type="submit" class="w-full bg-primary text-white px-6 py-3 rounded hover:bg-opacity-90">Sign Up</button>
          <button type="button" class="w-full flex items-center justify-center gap-2 border border-gray-300 px-4 py-2 rounded hover:bg-gray-100 transition-all google-signin-btn">
            <img src="assets/img/google-icon.png" alt="Google" class="w-5 h-5" />
            Sign up Using Google
          </button>
          <button type="button" id="adminLoginBtn" class="w-full bg-indigo-700 text-white px-6 py-3 rounded hover:bg-indigo-800">Admin Login</button>
          <p class="text-center text-gray-600">
            Already have an account? <button type="button" class="text-primary hover:underline" id="switchToLogin">Login</button>
          </p>
        </form>
      </div>
    </div>
  </div>

  <script type="module" src="assets\js\firebase-config.js"></script>
  <script src="assets\js\auth-modal.js"></script>
</body>