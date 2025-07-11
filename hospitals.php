<?php include 'templates\header.php'; ?>
<?php include 'templates\navbar.php'; ?>


    <!-- Hospital Listings -->
    <section class="py-16" id="hospitals">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16 scroll-reveal">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
            Specialized Hospitals
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto serif">
            These leading Kenyan hospitals offer comprehensive prostate cancer
            screening, diagnosis, and treatment services.
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Kenyatta National Hospital -->
          <div
            class="bg-white rounded-lg shadow-md overflow-hidden card-hover scroll-reveal"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="assets/img/knh.png"
                alt="Kenyatta National Hospital"
                class="w-full h-full object-cover object-top"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-2">
                Kenyatta National Hospital
              </h3>
              <p class="text-gray-600 mb-4 serif">
                Kenya's largest referral and teaching hospital with
                comprehensive oncology services.
              </p>
              <div class="space-y-2">
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-map-pin-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">
                    Hospital Road, Upper Hill, Nairobi
                  </p>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-phone-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">+254 20 2726300</p>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-global-line"></i>
                  </div>
                  <p></p>
                  <a 
                    href="https://knh.or.ke/" 
                    class="ml-2 text-gray-600 hover:text-primary transition-colors"
                    rel="noopener noreferrer"
                    target="blank"
                  >
                    knh.or.ke 
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Aga Khan University Hospital -->
          <div
            class="bg-white rounded-lg shadow-md overflow-hidden card-hover scroll-reveal"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="assets/img/aga khan.png"
                alt="Aga Khan University Hospital"
                class="w-full h-full object-cover object-top"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-2">
                Aga Khan University Hospital
              </h3>
              <p class="text-gray-600 mb-4 serif">
                Private teaching hospital with state-of-the-art cancer
                diagnostic and treatment facilities.
              </p>
              <div class="space-y-2">
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-map-pin-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">
                    3rd Parklands Avenue, Nairobi
                  </p>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-phone-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">+254 20 3662000</p>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-global-line"></i>
                  </div>
                  <p></p>
                  <a 
                    href="https://hospitals.aku.edu/nairobi/Pages/default.aspx" 
                    class="ml-2 text-gray-600 hover:text-primary transition-colors"
                    rel="noopener noreferrer"
                    target="blank"
                  >
                    hospitals.aku.edu 
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Nairobi Hospital -->
          <div
            class="bg-white rounded-lg shadow-md overflow-hidden card-hover scroll-reveal"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="assets/img/nairobi hospital.png"
                alt="Nairobi Hospital"
                class="w-full h-full object-cover object-top"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-2">
                Nairobi Hospital
              </h3>
              <p class="text-gray-600 mb-4 serif">
                Leading private hospital with specialized urology and oncology
                departments.
              </p>
              <div class="space-y-2">
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-map-pin-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">
                    Argwings Kodhek Road, Nairobi
                  </p>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-phone-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">+254 20 2845000</p>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-global-line"></i>
                  </div>
                  <p></p>
                  <a 
                    href="https://thenairobihosp.org/" 
                    class="ml-2 text-gray-600 hover:text-primary transition-colors"
                    rel="noopener noreferrer"
                    target="blank"
                  >
                    thenairobihosp.org 
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- MP Shah Hospital -->
          <div
            class="bg-white rounded-lg shadow-md overflow-hidden card-hover scroll-reveal"
          >
            <div class="h-48 overflow-hidden">
              <img
                src="assets/img/mp shah.png"
                alt="MP Shah Hospital"
                class="w-full h-full object-cover object-top"
              />
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-2">
                MP Shah Hospital
              </h3>
              <p class="text-gray-600 mb-4 serif">
                Multi-specialty hospital with advanced diagnostic imaging and
                cancer treatment facilities.
              </p>
              <div class="space-y-2">
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-map-pin-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">
                    Shivachi Road, Parklands, Nairobi
                  </p>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-phone-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600">+254 20 3746000</p>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-5 h-5 flex items-center justify-center mt-1 text-primary"
                  >
                    <i class="ri-global-line"></i>
                  </div>
                  <a 
                    href="https://mpshahhosp.org/" 
                    class="ml-2 text-gray-600 hover:text-primary transition-colors"
                    target="_blank" 
                    rel="noopener noreferrer"
                  >
                    mpshahhosp.org
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Treatments Section -->
    <section class="bg-gray-50 py-16 px-6" id="treatments">
  <div class="max-w-7xl mx-auto text-center mb-10">
    <h2 class="text-4xl font-bold text-gray-800">Prostate Cancer Treatments</h2>
    <p class="text-gray-600 mt-2 text-lg max-w-2xl mx-auto">
      Explore the most common and effective treatment options available for prostate cancer in Kenya.
    </p>
  </div>

  <div class="swiper mySwiper max-w-6xl mx-auto px-4">
    <div class="swiper-wrapper">

      <!-- Slide 1 -->
      <div class="swiper-slide bg-white shadow-md rounded-xl p-6">
        <h3 class="text-xl font-semibold text-teal-600 mb-2"> Hormone Therapy</h3>
        <p class="text-gray-700">
          Reduces testosterone levels to slow cancer growth. Available via medication or surgery (orchiectomy).
        </p>
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide bg-white shadow-md rounded-xl p-6">
        <h3 class="text-xl font-semibold text-teal-600 mb-2"> Radiation Therapy</h3>
        <p class="text-gray-700">
          Uses high-energy rays to kill cancer cells. External beam radiation is available in public and private hospitals.
        </p>
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide bg-white shadow-md rounded-xl p-6">
        <h3 class="text-xl font-semibold text-teal-600 mb-2"> Chemotherapy</h3>
        <p class="text-gray-700">
          Drug-based treatment for advanced or hormone-resistant prostate cancer. Common drugs include docetaxel.
        </p>
      </div>

      <!-- Slide 4 -->
      <div class="swiper-slide bg-white shadow-md rounded-xl p-6">
        <h3 class="text-xl font-semibold text-teal-600 mb-2"> Surgery (Prostatectomy)</h3>
        <p class="text-gray-700">
          Surgical removal of the prostate. Done as open surgery or minimally invasive laparoscopic procedures.
        </p>
      </div>

      <!-- Slide 5 -->
      <div class="swiper-slide bg-white shadow-md rounded-xl p-6">
        <h3 class="text-xl font-semibold text-teal-600 mb-2"> Active Surveillance</h3>
        <p class="text-gray-700">
          Monitors slow-growing cancer in early stages with regular checkups. Avoids immediate side effects of treatment.
        </p>
      </div>
    </div>

    <!-- Navigation buttons -->
    <div class="flex justify-center mt-6 gap-6">
      <div class="swiper-button-prev !text-teal-700"></div>
      <div class="swiper-button-next !text-teal-700"></div>
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


