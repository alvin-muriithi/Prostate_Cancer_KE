<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../assets/css/style.css" />
</head>
<body class="bg-[#f9f9f9] flex items-center justify-center min-h-screen font-sans">
  <div class="bg-white rounded-lg shadow-xl w-full max-w-md p-8">
    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-6">Admin Login</h2>

    <?php if (isset($_SESSION['error'])): ?>
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 mb-4 rounded">
        <?= $_SESSION['error']; unset($_SESSION['error']); ?>
      </div>
    <?php endif; ?>

    <form action="admin_login_handler.php" method="POST" class="space-y-5">
      <div>
        <label for="email" class="block text-gray-700 mb-1 text-sm">Email Address</label>
        <input type="email" name="email" id="email" required
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent bg-gray-50" />
      </div>

      <div>
        <label for="password" class="block text-gray-700 mb-1 text-sm">Password</label>
        <input type="password" name="password" id="password" required
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent bg-gray-50" />
      </div>

      <button type="submit"
        class="w-full bg-primary text-green hoverrgb(249, 249, 249) py-2 rounded-md hover:bg-opacity-90 transition-all duration-200">
        Login
      </button>
    </form>

    <p class="mt-4 text-sm text-center text-gray-600">
      Not an admin? 
      <a href="../index.php" class="text-primary hover:underline">Go back</a>
    </p>
  </div>
</body>
</html>
