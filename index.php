<?php include 'templates\header.php'; ?>
<?php include 'templates\navbar.php'; ?>
  
    <!-- Hero Section -->
    <section
      class="hero-section min-h-screen flex items-center pt-20"
      id="about"
    >
      <div class="container mx-auto px-6 w-full">
        <div class="max-w-2xl">
          <h1
            class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800 mb-6"
          >
            Understanding Prostate Cancer
          </h1>
          <p class="text-lg md:text-xl text-gray-700 mb-8 serif">
            Empowering men with knowledge for early detection, prevention, and
            treatment of prostate cancer in Kenya.
          </p>
          <div
            class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4"
          >
            <a
              href="education.php"
              class="whitespace-nowrap bg-primary text-white px-8 py-3 !rounded-button hover:bg-opacity-90 transition-all text-center"
              >Learn More</a
            >
            <a
              href="index.php#contact"
              class="whitespace-nowrap border-2 border-primary text-primary px-8 py-3 !rounded-button hover:bg-primary hover:text-white transition-all text-center"
              >Contact Us</a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- Key Statistics -->
    <section class="py-16 bg-gray-50">
      <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
          <div
            class="bg-white p-8 rounded-lg shadow-md text-center card-hover scroll-reveal"
          >
            <div
              class="w-16 h-16 flex items-center justify-center mx-auto mb-4 bg-secondary bg-opacity-20 rounded-full"
            >
              <i class="ri-user-heart-line ri-2x text-primary"></i>
            </div>
            <h3
              class="text-4xl font-bold text-gray-800 mb-2 counter"
              data-target="13500"
            >
              0
            </h3>
            <p class="text-gray-600">New cases annually in Kenya</p>
          </div>
          <div
            class="bg-white p-8 rounded-lg shadow-md text-center card-hover scroll-reveal"
          >
            <div
              class="w-16 h-16 flex items-center justify-center mx-auto mb-4 bg-secondary bg-opacity-20 rounded-full"
            >
              <i class="ri-calendar-line ri-2x text-primary"></i>
            </div>
            <h3
              class="text-4xl font-bold text-gray-800 mb-2 counter"
              data-target="50"
            >
              0
            </h3>
            <p class="text-gray-600">Average age of diagnosis</p>
          </div>
          <div
            class="bg-white p-8 rounded-lg shadow-md text-center card-hover scroll-reveal"
          >
            <div
              class="w-16 h-16 flex items-center justify-center mx-auto mb-4 bg-secondary bg-opacity-20 rounded-full"
            >
              <i class="ri-heart-pulse-line ri-2x text-primary"></i>
            </div>
            <h3
              class="text-4xl font-bold text-gray-800 mb-2 counter"
              data-target="98"
            >
              0
            </h3>
            <p class="text-gray-600">Survival rate with early detection (%)</p>
          </div>
          <div
            class="bg-white p-8 rounded-lg shadow-md text-center card-hover scroll-reveal"
          >
            <div
              class="w-16 h-16 flex items-center justify-center mx-auto mb-4 bg-secondary bg-opacity-20 rounded-full"
            >
              <i class="ri-health-book-line ri-2x text-primary"></i>
            </div>
            <h3
              class="text-4xl font-bold text-gray-800 mb-2 counter"
              data-target="45"
            >
              0
            </h3>
            <p class="text-gray-600">Percentage of men screened annually</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Survivor Stories Section -->
    <section id="survivors" class="bg-gray-50 py-20 px-6">
      <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-teal-700"> Survivor Stories</h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto mt-2">
            Real men. Real journeys. Inspiring stories of strength, faith, and healing.
          </p>
        </div>

        <div class="space-y-16">
          <!-- Story 1 -->
          <div class="flex flex-col md:flex-row items-center gap-10" data-aos="fade-up">
            <img src=" " alt="Peter" class="w-64 h-64 rounded-xl object-cover shadow-lg">
            <div>
              <h3 class="text-2xl font-semibold text-teal-600 mb-2">Peter M., 59 – Nairobi</h3>
              <p class="text-gray-700 leading-relaxed">
                “When I was diagnosed, I felt like my life had ended. But joining a support group gave me courage. I’ve learned to take life one day at a time and now advocate for early testing in my church.”
              </p>
            </div>
          </div>

          <!-- Story 2 (reversed) -->
          <div class="flex flex-col-reverse md:flex-row items-center gap-10" data-aos="fade-up" data-aos-delay="100">
            <div>
              <h3 class="text-2xl font-semibold text-teal-600 mb-2">Joseph N., 67 – Kisumu</h3>
              <p class="text-gray-700 leading-relaxed">
                “Radiation therapy scared me. But thanks to doctors at KNH and my family, I’m now cancer-free. Talking about it helped me heal emotionally too. I encourage young men to get screened early.”
              </p>
            </div>
            <img src=" " alt="Joseph" class="w-64 h-64 rounded-xl object-cover shadow-lg">
          </div>

          <!-- Story 3 -->
          <div class="flex flex-col md:flex-row items-center gap-10" data-aos="fade-up" data-aos-delay="200">
            <img src=" " alt="Samuel" class="w-64 h-64 rounded-xl object-cover shadow-lg">
            <div>
              <h3 class="text-2xl font-semibold text-teal-600 mb-2">Samuel O., 63 – Eldoret</h3>
              <p class="text-gray-700 leading-relaxed">
                “I ignored symptoms for months. It almost cost me my life. Now I speak to men in my village about why it’s okay to talk about your health — and get help early.”
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
      AOS.init({
        duration: 800,
        once: true
      });
    </script>
    <!-- Donation Section -->
    <section class="py-16 bg-white" id="donate">
      <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div class="scroll-reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
              Support Our Mission
            </h2>
            <p class="text-lg text-gray-600 mb-6 serif">
              Your donation helps us provide education, support services, and
              free screening events for men across Kenya. Together, we can save
              lives through early detection and prevention.
            </p>
            <div class="bg-gray-50 p-6 rounded-lg mb-6">
              <h3 class="text-xl font-bold text-gray-800 mb-4">Your Impact</h3>
              <ul class="space-y-3">
                <li class="flex items-start">
                  <div
                    class="w-6 h-6 flex items-center justify-center mt-0.5 text-primary"
                  >
                    <i class="ri-checkbox-circle-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600 serif">
                    KSh 1,000 provides educational materials for 10 men
                  </p>
                </li>
                <li class="flex items-start">
                  <div
                    class="w-6 h-6 flex items-center justify-center mt-0.5 text-primary"
                  >
                    <i class="ri-checkbox-circle-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600 serif">
                    KSh 5,000 funds a community awareness workshop
                  </p>
                </li>
                <li class="flex items-start">
                  <div
                    class="w-6 h-6 flex items-center justify-center mt-0.5 text-primary"
                  >
                    <i class="ri-checkbox-circle-line"></i>
                  </div>
                  <p class="ml-2 text-gray-600 serif">
                    KSh 10,000 sponsors free screening for 20 men
                  </p>
                </li>
              </ul>
            </div>
            <div class="flex items-center space-x-4">
              <img
                src="https://readdy.ai/api/search-image?query=M-Pesa%20logo%2C%20simple%20clean%20professional%20logo%20on%20white%20background%2C%20payment%20system%20logo%2C%20mobile%20money%20service%2C%20financial%20technology%20icon%2C%20professional%20brand%20identity&width=120&height=60&seq=mpesa&orientation=landscape"
                alt="M-Pesa"
                class="h-10 object-contain"
              />
              <p class="text-gray-600">M-Pesa donation method below</p>
            </div>
          </div>
          <div class="bg-gray-50 p-8 rounded-lg shadow-md scroll-reveal">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">
              Make a Donation
            </h3>
            <form action="assets\php\stkpush.php" method="POST" id="donation-form">
              <div class="mb-6">
                <label class="block text-gray-700 mb-2"
              for="amount"
                  >Donation Amount (KSh)</label
                >
                <div class="grid grid-cols-3 gap-4 mb-4">
                  <button
                    type="button"
                    class="whitespace-nowrap bg-white border border-gray-300 text-gray-700 px-4 py-2 !rounded-button hover:bg-gray-50 transition-all amount-btn"
                    data-amount="1000"
                  >
                    KSh 1,000
                  </button>
                  <button
                    type="button"
                    class="whitespace-nowrap bg-white border border-gray-300 text-gray-700 px-4 py-2 !rounded-button hover:bg-gray-50 transition-all amount-btn"
                    data-amount="5000"
                  >
                    KSh 5,000
                  </button>
                  <button
                    type="button"
                    class="whitespace-nowrap bg-white border border-gray-300 text-gray-700 px-4 py-2 !rounded-button hover:bg-gray-50 transition-all amount-btn"
                    data-amount="10000"
                  >
                    KSh 10,000
                  </button>
                </div>
                <div class="relative">
                  <span
                    class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"
                    >KSh</span
                  >
                  <input
                    type="text"
                    id="amount"
                    name="amount"
                    class="w-full pl-12 pr-4 py-3 border-none !rounded-button bg-white"
                    placeholder="Other amount"
                  />
                </div>
              </div>
              <div class="mb-6">
                <label class="block text-gray-700 mb-2" for="name"
                  >Full Name</label
                >
                <input
                  type="text"
                  id="name"
                  name="name"
                  class="w-full px-4 py-3 border-none !rounded-button bg-white"
                  placeholder="Enter your full name"
                />
              </div>
              <div class="mb-6">
                <label class="block text-gray-700 mb-2" for="email"
                  >Email Address</label
                >
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="w-full px-4 py-3 border-none !rounded-button bg-white"
                  placeholder="Enter your email address"
                />
              </div>
              <div class="mb-6">
                <label class="block text-gray-700 mb-2" for="phone"
                  >Phone Number</label>
                 <div class="flex items-center bg-white rounded-button overflow-hidden">
                <span class="pl-4 pr-2 text-gray-600">+254</span>
                <input
                  type="text"
                  id="phone"
                  name="phone"
                  class="w-full px-4 py-3 border-none !rounded-button bg-white"
                  placeholder="Enter your phone number"
                  maxlength="9"
                  pattern="\d{9}"
                  required
                />
              </div>
              <div class="mb-6">
                <label class="flex items-center">
                  <input type="checkbox" class="custom-checkbox" />
                  <span class="ml-2 text-gray-600"
                    >Make this a monthly donation</span
                  >
                </label>
              </div>
              <button
                id="donate-btn"
                type="submit"
                class="whitespace-nowrap w-full bg-primary text-white px-6 py-3 !rounded-button hover:bg-opacity-90 transition-all"
              >
                Donate Now
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section -->
    <section class="py-16 bg-gray-50" id="contact">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16 scroll-reveal">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
            Contact Us
          </h2>
          <p class="text-lg text-gray-600 max-w-3xl mx-auto serif">
            Have questions about prostate cancer or our services? We're here to
            help. Reach out to us through any of the channels below.
          </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
          <div class="bg-white rounded-lg shadow-md p-8 scroll-reveal">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">
              Send a Message
            </h3>
            <form action="send_message.php" method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                  <div>
                    <label class="block text-gray-700 mb-2" for="contact-name">Full Name</label>
                    <input
                      type="text"
                      id="contact-name"
                      name="contact-name"
                      class="w-full px-4 py-3 border-none !rounded-button bg-gray-50"
                      placeholder="Enter your full name"
                      required
                    />
                  </div>
                  <div>
                    <label class="block text-gray-700 mb-2" for="contact-email">Email Address</label>
                    <input
                      type="email"
                      id="contact-email"
                      name="contact-email"
                      class="w-full px-4 py-3 border-none !rounded-button bg-gray-50"
                      placeholder="Enter your email address"
                      required
                    />
                  </div>
                </div>
                <div class="mb-6">
                  <label class="block text-gray-700 mb-2" for="contact-subject">Subject</label>
                  <input
                    type="text"
                    id="contact-subject"
                    name="contact-subject"
                    class="w-full px-4 py-3 border-none !rounded-button bg-gray-50"
                    placeholder="Enter message subject"
                    required
                  />
                </div>
                <div class="mb-6">
                  <label class="block text-gray-700 mb-2" for="contact-message">Message</label>
                  <textarea
                    id="contact-message"
                    name="contact-message"
                    rows="5"
                    class="w-full px-4 py-3 border-none !rounded-button bg-gray-50"
                    placeholder="Enter your message"
                    required
                  ></textarea>
                </div>
                <button
                  type="submit"
                  class="whitespace-nowrap bg-primary text-white px-8 py-3 !rounded-button hover:bg-opacity-90 transition-all"
                >
                  Send Message
                </button>
              </form>
          </div>
          <div class="scroll-reveal">
            <div class="bg-white rounded-lg shadow-md p-8 mb-8">
              <h3 class="text-2xl font-bold text-gray-800 mb-6">
                Contact Information
              </h3>
              <div class="space-y-4">
                <div class="flex items-start">
                  <div
                    class="w-10 h-10 flex items-center justify-center bg-primary bg-opacity-10 rounded-full text-primary"
                  >
                    <i class="ri-map-pin-line"></i>
                  </div>
                  <div class="ml-4">
                    <h4 class="text-lg font-semibold text-gray-800">Address</h4>
                    <p class="text-gray-600">Kenyatta Avenue, Nairobi, Kenya</p>
                  </div>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-10 h-10 flex items-center justify-center bg-primary bg-opacity-10 rounded-full text-primary"
                  >
                    <i class="ri-phone-line"></i>
                  </div>
                  <div class="ml-4">
                    <h4 class="text-lg font-semibold text-gray-800">Phone</h4>
                    <p class="text-gray-600">+254 712 345 678</p>
                  </div>
                </div>
                <div class="flex items-start">
                  <div
                    class="w-10 h-10 flex items-center justify-center bg-primary bg-opacity-10 rounded-full text-primary"
                  >
                    <i class="ri-mail-line"></i>
                  </div>
                  <div class="ml-4">
                    <h4 class="text-lg font-semibold text-gray-800">Email</h4>
                    <p class="text-gray-600">info@prostatecarekenya.org</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-8">
              <h3 class="text-2xl font-bold text-gray-800 mb-6">
                Frequently Asked Questions
              </h3>
              <div class="space-y-4" id="faq-accordion">
                <div class="border-b border-gray-200 pb-4">
                  <button
                    class="flex justify-between items-center w-full text-left faq-toggle"
                    data-target="faq1"
                  >
                    <span class="text-lg font-semibold text-gray-800"
                      >At what age should I start prostate cancer
                      screening?</span
                    >
                    <i class="ri-arrow-down-s-line text-primary"></i>
                  </button>
                  <div class="mt-2 hidden" id="faq1">
                    <p class="text-gray-600 serif">
                      Most medical organizations recommend men begin prostate
                      cancer screening at age 50. However, men with higher risk
                      factors, such as African descent or family history, should
                      consider starting at age 45 or even earlier.
                    </p>
                  </div>
                </div>
                <div class="border-b border-gray-200 pb-4">
                  <button
                    class="flex justify-between items-center w-full text-left faq-toggle"
                    data-target="faq2"
                  >
                    <span class="text-lg font-semibold text-gray-800"
                      >What are the screening methods for prostate cancer?</span
                    >
                    <i class="ri-arrow-down-s-line text-primary"></i>
                  </button>
                  <div class="mt-2 hidden" id="faq2">
                    <p class="text-gray-600 serif">
                      The two main screening methods are the Prostate-Specific
                      Antigen (PSA) blood test and the Digital Rectal
                      Examination (DRE). These tests can help detect prostate
                      cancer early, even before symptoms appear.
                    </p>
                  </div>
                </div>
                <div class="border-b border-gray-200 pb-4">
                  <button
                    class="flex justify-between items-center w-full text-left faq-toggle"
                    data-target="faq3"
                  >
                    <span class="text-lg font-semibold text-gray-800"
                      >Is prostate cancer treatable?</span
                    >
                    <i class="ri-arrow-down-s-line text-primary"></i>
                  </button>
                  <div class="mt-2 hidden" id="faq3">
                    <p class="text-gray-600 serif">
                      Yes, prostate cancer is highly treatable, especially when
                      detected early. Treatment options include surgery,
                      radiation therapy, hormone therapy, chemotherapy, and in
                      some cases, active surveillance for slow-growing cancers.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Newsletter -->
    <section class="py-16 bg-primary bg-opacity-10">
      <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center scroll-reveal">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
            Stay Informed
          </h2>
          <p class="text-lg text-gray-600 mb-8 serif">
            Subscribe to our newsletter to receive updates on prostate cancer
            research, upcoming events, and health tips.
          </p>
          <form id="newsletterForm" class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
              <input
                type="email"
                name="subscriber_email"
                required
                placeholder="Enter your email address"
                class="flex-1 px-4 py-3 border-none !rounded-button bg-white"
            />
            <button
              type="submit"
              class="whitespace-nowrap bg-primary text-white px-6 py-3 !rounded-button hover:bg-opacity-90 transition-all"
            >
              Subscribe
            </button>
          </form>
          <!-- Confirmation Popup -->
              <div
                id="toastSuccess"
                class="hidden mt-4 bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-md transition"
              >
                🎉 You're successfully subscribed to the newsletter!
              </div>
            </div>
          </section>
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
