<?php include 'templates\header.php'; ?>
<?php include 'templates\navbar.php'; ?>

<?php
include 'C:\xampp\htdocs\Prostate_Cancer_KE\dbconfig.php';
$events = $pdo->query("SELECT * FROM events ORDER BY event_date ASC LIMIT 3")->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="py-16 bg-gray-50" id="events">
  <div class="container mx-auto px-6">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
        Events & Meetups
      </h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto serif">
        Join our community events to learn more about prostate cancer...
      </p>
    </div>

    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($events as $event): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden card-hover">
          <div class="h-48 overflow-hidden">
            <?php if (!empty($event['image_filename'])): ?>
              <img src="admin/uploads/<?= htmlspecialchars($event['image_filename']) ?>"
                   alt="Event Image"
                   class="w-full h-full object-cover object-top">
            <?php else: ?>
              <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-500">
                No Image Available
              </div>
            <?php endif; ?>
          </div>
          <div class="p-6">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 flex flex-col items-center justify-center bg-primary bg-opacity-10 rounded-lg text-primary">
                <span class="text-sm font-bold"><?= strtoupper(date('M', strtotime($event['event_date']))) ?></span>
                <span class="text-lg font-bold"><?= date('d', strtotime($event['event_date'])) ?></span>
              </div>
              <div class="ml-4">
                <p class="text-gray-600"><?= date('l, g:i A', strtotime($event['start_time'])) ?> - <?= date('g:i A', strtotime($event['end_time'])) ?></p>
                <p class="text-gray-600"><?= htmlspecialchars($event['location']) ?></p>
              </div>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3"><?= htmlspecialchars($event['title']) ?></h3>
            <p class="text-gray-600 mb-4 serif"><?= htmlspecialchars($event['description']) ?></p>
            <a href="#"
               class="whitespace-nowrap bg-primary text-white px-6 py-2 !rounded-button hover:bg-opacity-90 transition-all inline-block">
              <?= $event['registration_required'] ? 'Register' : 'Learn More' ?>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

    <!-- Support Section -->
    <section id="support" class="bg-white py-20 px-6">
        <div class="max-w-7xl mx-auto">
          <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800"> Join a Support Group</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto text-lg">
              You're not alone. Connect with other men who understand your journey. Get emotional, spiritual, and medical support.
            </p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Group Meetings -->
            <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition">
              <h3 class="text-xl font-semibold text-teal-600 mb-2">📅 Monthly Group Meetings</h3>
              <p class="text-gray-700 mb-4">
                Join our support group sessions held on the first Saturday of every month at Kenyatta National Hospital and via Zoom.
              </p>
              <a href="#" class="text-sm text-teal-600 font-semibold hover:underline">See Upcoming Events</a>
            </div>

            <!-- Join Online Group -->
            <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition">
              <h3 class="text-xl font-semibold text-teal-600 mb-2">📱 Join Online Community</h3>
              <p class="text-gray-700 mb-4">
                Prefer virtual connection? Join our WhatsApp and Telegram support groups to ask questions and receive encouragement anytime.
              </p>
              <a href="https://chat.whatsapp.com/yourgroup" target="_blank" class="text-sm text-teal-600 font-semibold hover:underline">Join WhatsApp Group</a>
              <br />
              <a href="https://t.me/yourtelegram" target="_blank" class="text-sm text-teal-600 font-semibold hover:underline">Join Telegram Group</a>
            </div>

            <!-- Member Testimonial -->
            <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition">
              <h3 class="text-xl font-semibold text-teal-600 mb-2">💬 Member Spotlight</h3>
              <p class="text-gray-700 italic">"Before joining, I felt alone. Now, I have brothers who walk with me, pray with me, and give me hope."</p>
              <p class="mt-4 text-sm text-gray-500">– Peter M., Survivor & Support Group Leader</p>
            </div>
          </div>

          <!-- Call to Action -->
          <div class="text-center mt-16">
            <a
              href="#contact"
              class="bg-teal-600 text-white px-8 py-3 rounded-full shadow hover:bg-teal-700 transition"
            >
              💌 Get in Touch to Join a Group
            </a>
          </div>
        </div>
      </section>
  
    <!-- Back to Top Button -->
    <button
      id="back-to-top"
      class="fixed bottom-8 right-8 w-12 h-12 bg-primary text-white rounded-full shadow-lg flex items-center justify-center opacity-0 invisible transition-all duration-300"
    >
      <i class="ri-arrow-up-line ri-lg"></i>
    </button>
  

<?php include 'assets\php\authentication.php'; ?>
<?php include 'templates\footer.php'; ?>
