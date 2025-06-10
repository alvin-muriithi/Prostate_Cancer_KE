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