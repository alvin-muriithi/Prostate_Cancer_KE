<?php include 'C:\xampp\htdocs\Prostate_Cancer_KE\admin\templates\header.php'; 
include 'C:/xampp/htdocs/Prostate_Cancer_KE/dbconfig.php';

// Fetch all research articles
$articles = $pdo->query("SELECT * FROM research_articles ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<body class="p-6">
    <h1 class="text-2xl font-bold text-blue-800 mb-4">Admin Dashboard</h1>
    <div class="flex space-x-4 mb-6">
        
        <button onclick="toggleForm('research')" class="btn bg-blue-200 text-blue-800 px-4 py-2 rounded">Add Research Article</button>
        <button onclick="toggleForm('survivor')" class="btn bg-green-200 text-green-800 px-4 py-2 rounded">Add Survivor Story</button>
        <button onclick="toggleForm('event')" class="btn bg-blue-200 text-blue-800 px-4 py-2 rounded">Add New Event</button>
    </div>

    <div id="donations-form" class="form-section">
        <div id="donations" class="mb-4"></div>
    </div>

    <div id="research-form" class="form-section hidden">
        <form action="add_research.php" method="POST" enctype="multipart/form-data" class="space-y-4">
        <input type="text" name="title" placeholder="Research Title" required class="w-full p-2 border rounded">
        <input type="text" name="researcher" placeholder="Researcher Name" required class="w-full p-2 border rounded">
        <input type="text" name="institution" placeholder="Institution" required class="w-full p-2 border rounded">
        <textarea name="summary" placeholder="Summary" required class="w-full p-2 border rounded"></textarea>
        <textarea name="content" placeholder="Full Content" required class="w-full p-2 border rounded"></textarea>

        <label class="block text-sm font-medium text-gray-700">Upload PDF</label>
        <input type="file" name="pdf" accept="application/pdf" required class="w-full text-sm">

        <label class="block text-sm font-medium text-gray-700">Upload Optional Image</label>
        <input type="file" name="image" accept="image/*" class="w-full text-sm">

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Submit Article</button>

        <button class="bg bg-blue-200 text-gray-700 px-4 py-2 rounded">
          <a href="research_list.php">View All Articles</a>
        </button>

        <?php foreach ($articles as $article): ?>
          <a href="edit_research.php?id=<?= $article['id'] ?>" class="bg-blue-200 text-gray-700 px-4 py-2 rounded text-sm font-semibold hover:bg-blue-300 transition">
            Edit Article
          </a>
        <?php endforeach; ?>


      </form>
    </div>


    <div id="survivor-form" class="form-section hidden">
      <form action="add_story.php"method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md space-y-6">
        <div>
          <label class="block text-sm font-medium text-gray-700">Name</label>
          <input type="text" name="name" required class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div class="grid grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-gray-700">Age</label>
            <input type="number" name="age" required class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700">Location</label>
            <input type="text" name="location" required class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">
          </div>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Story</label>
          <textarea name="story" required rows="5" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2"></textarea>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Upload Image</label>
          <input type="file" name="image" accept="image/*" required class="mt-1 block w-full text-sm">
        </div>

        <button type="submit" class="bg-teal-600 text-white px-6 py-2 rounded hover:bg-teal-700">
          Submit Story
        </button>
         <a href="stories_list.php" class="btn bg-green-200 text-green-800 px-4 py-2 rounded inline-block">View All Stories</a>
      </form>
    </div>

    <div id="event-form" class="form-section hidden">
        <form action="add_event.php" method="POST" enctype="multipart/form-data" class="space-y-6">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Event Title</label>
          <input type="text" name="title" required
            class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
          <textarea name="description" required rows="4"
            class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
            <input type="date" name="event_date" required
              class="w-full border border-gray-300 rounded-md px-4 py-2">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Start Time</label>
            <input type="time" name="start_time" required
              class="w-full border border-gray-300 rounded-md px-4 py-2">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">End Time</label>
            <input type="time" name="end_time" required
              class="w-full border border-gray-300 rounded-md px-4 py-2">
          </div>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Location</label>
          <input type="text" name="location" required
            class="w-full border border-gray-300 rounded-md px-4 py-2">
        </div>

        <div class="flex items-center space-x-2">
          <input type="checkbox" name="registration_required" id="reg_required" checked
            class="rounded border-gray-300 text-primary focus:ring-primary">
          <label for="reg_required" class="text-sm text-gray-700">Registration Required</label>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Upload Image</label>
          <input type="file" name="image" accept="image/*" required
            class="w-full border border-gray-300 rounded-md px-4 py-2 file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-primary file:text-black hover:file:bg-opacity-90">
        </div>

        <div class="pt-4">
          <button type="submit"
            class="bg-blue-500 text-white px-4 py-2 rounded">
            Add Event
          </button>
        </div>

        <button class="bg bg-blue-200 text-gray-700 px-4 py-2 rounded">
          <a href="events_list.php">View All Events</a>
        </button>
      </form>
    </div>
</body>

<?php include 'C:\xampp\htdocs\Prostate_Cancer_KE\admin\templates\footer.php'; ?>
