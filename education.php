<?php include 'templates\header.php'; ?>
<?php include 'templates\navbar.php'; ?>
<?php
include 'C:\xampp\htdocs\Prostate_Cancer_KE\dbconfig.php';
$articles = $pdo->query("SELECT * FROM research_articles ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
?>


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
                src="assets/img/Prostate cancer is one of the most common diseases….jpeg"
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
                src="assets/img/Every individual man has different risk factors….jpeg"
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
                src="assets/img/Prostate Cancer_ Symptoms, Causes and Support… (1).jpeg"
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
                src="assets/img/Prostate cancer is known as the silent killer of….jpeg"
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
            Visual resources to help you better understand prostate cancer, and how it develoops in the human body.
          </p>
        </div>

        <div class="max-w-7xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
          
          <!-- Video Section -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="w-full h-0 pb-[56.25%] relative bg-gray-200">
              <video
                class="absolute top-0 left-0 w-full h-full object-cover"
                controls
                poster="assets/img/thumbnail.jpeg"
              >
                <source src="assets/img/video.mp4" type="video/mp4" />
                Your browser does not support the video tag.
              </video>
            </div>
          </div>

          <!-- Video Description Section -->
          <div>
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
              Video Summary: Understanding Prostate Cancer
            </h2>
            <p class="text-gray-700 mb-4">
              This 3D animated video provides a visual explanation of the development and spread of prostate cancer.
            </p>
            <ul class="list-disc pl-6 text-gray-700 space-y-2">
              <li>
                <strong>Anatomy of the Prostate:</strong> The video begins by showing the prostate gland’s location beneath the bladder and surrounding the urethra. It explains the prostate’s function in producing fluid that nourishes and transports sperm.
              </li>
              <li>
                <strong>Formation of Cancer:</strong> It illustrates how abnormal cells start growing within the prostate, forming a tumor. These cancerous cells divide uncontrollably and begin to invade surrounding tissues.
              </li>
              <li>
                <strong>Metastasis:</strong> The video demonstrates how prostate cancer can spread to other parts of the body such as bones and lymph nodes via the bloodstream and lymphatic system.
              </li>
              <li>
                <strong>Educational Purpose:</strong> The animation helps viewers understand the biological progression of prostate cancer, making it ideal for patients, students, or general public education.
              </li>
            </ul>
          </div>

        </div>
      </div>

        


      </div>
    </section>
    <!-- Research Section -->
<section id="research" class="bg-white py-16 px-6">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12" data-aos="fade-up">
      <h2 class="text-4xl font-bold text-gray-800">Featured Research Articles</h2>
      <p class="text-gray-800 max-w-xl mx-auto mt-2 text-lg">
        Explore in-depth research conducted by experts in the field of prostate cancer.
      </p>
    </div>

    <div class="space-y-10" id="researchArticles">
      <!-- JS will populate articles dynamically -->
    </div>
  </div>
</section>
<script>
document.querySelectorAll(".education-toggle").forEach(button => {
  button.addEventListener("click", () => {
    const targetId = button.getAttribute("data-target");
    const target = document.getElementById(targetId);
    if (target) {
      target.classList.toggle("hidden");
      button.querySelector("i").classList.toggle("ri-arrow-down-line");
      button.querySelector("i").classList.toggle("ri-arrow-right-line");
    }
  });
});
// Initialize AOS (Animate On Scroll) library for animations
AOS.init({ duration: 800, once: true });

const articles = <?= json_encode($articles); ?>;

const container = document.getElementById("researchArticles");

articles.forEach((article, index) => {
  const card = document.createElement("div");
  card.className = "bg-gray-50 border border-gray-200 p-6 rounded-xl shadow-md hover:shadow-xl transition relative";
  card.setAttribute("data-aos", "fade-up");
  card.setAttribute("data-aos-delay", index * 100);

  const image = article.image_filename
    ? `admin/uploads/research_images/${article.image_filename}`
    : "https://i.pravatar.cc/100?u=" + encodeURIComponent(article.researcher);

  const pdf = `admin/uploads/research_pdfs/${article.pdf_filename}`;

  card.innerHTML = `
    <div class="flex items-start gap-4">
      <img src="${image}" alt="${article.researcher}" class="w-16 h-16 rounded-full object-cover border border-gray-300" />
      <div>
        <h3 class="text-xl font-semibold text-teal-700">${article.title}</h3>
        <p class="text-sm text-gray-500">${article.researcher} — ${article.institution}</p>
      </div>
    </div>
    <p class="mt-4 text-gray-700">${article.summary}</p>
    <div class="hidden mt-4 text-gray-600 article-details">${article.content}</div>

    <div class="flex items-center justify-between mt-4">
      <button class="text-sm text-teal-600 font-semibold hover:underline toggle-btn">Read Full Summary</button>
      <a href="${pdf}" download class="text-sm bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700 transition">
        📄 Download PDF
      </a>
    </div>
  `;

  container.appendChild(card);
});

document.addEventListener("click", function (e) {
  const btn = e.target.closest(".toggle-btn");
  if (btn) {
    const details = btn.closest("div").parentElement.querySelector(".article-details");
    if (details) {
      details.classList.toggle("hidden");
      btn.textContent = details.classList.contains("hidden")
        ? "Read Full Summary"
        : "Show Less";
    }
  }
});

</script>


<!-- AOS animation library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Back to Top Button -->
    <button
      id="back-to-top"
      class="fixed bottom-8 right-8 w-12 h-12 bg-primary text-white rounded-full shadow-lg flex items-center justify-center opacity-0 invisible transition-all duration-300"
    >
      <i class="ri-arrow-up-line ri-lg"></i>
    </button>
    

<?php include 'assets\php\authentication.php'; ?>
<?php include 'templates\footer.php'; ?>
