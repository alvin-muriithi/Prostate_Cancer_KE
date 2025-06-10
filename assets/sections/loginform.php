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