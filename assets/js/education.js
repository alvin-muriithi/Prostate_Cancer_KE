
  AOS.init({ duration: 800, once: true });

  const articles = [
  {
    title: "Prostate Cancer Screening Effectiveness",
    researcher: "Dr. James Kariuki",
    institution: "Kenyatta National Hospital",
    image: " ",
    summary: "A 3-year national screening initiative analyzed PSA test efficacy across 5 counties, showing a 27% increase in early diagnosis.",
    content: "This study highlights the importance of community-based screening efforts, examining how mobile testing stations reduced late-stage prostate cancer diagnoses.",
    pdf: "assets/research/screening-effectiveness.pdf"
  },
  {
    title: "Dietary Impacts on Prostate Cancer Progression",
    researcher: "Prof. Alice Wambui",
    institution: "University of Nairobi",
    image: " ",
    summary: "A longitudinal study on 400 men tracked how plant-based diets influence the rate of tumor growth and recurrence.",
    content: "Results suggest that anti-inflammatory foods — such as tomatoes, berries, and green tea — slowed progression in early-stage patients. Saturated fats correlated with faster spread.",
    pdf: "assets/research/diet-impact-study.pdf"
  },
  {
    title: "Genetic Markers Linked to Aggressive Prostate Cancer",
    researcher: "Dr. David Otieno",
    institution: "Moi Teaching & Referral Hospital",
    image: " ",
    summary: "Recent genetic sequencing efforts identified five new gene variants associated with aggressive prostate tumors in men under 50.",
    content: "These findings offer hope for earlier detection and targeted therapy, especially for patients with a family history. The research team recommends nationwide genetic screening by 2030.",
    pdf: "assets/research/genetic-markers-report.pdf"
  },
  {
    title: "Mental Health Effects During Prostate Cancer Treatment",
    researcher: "Dr. Grace Mwikali",
    institution: "Aga Khan University Hospital",
    image: "https://i.pravatar.cc/100?img=15",
    summary: "This psychological study revealed that 68% of prostate cancer patients experience moderate to severe anxiety during radiation therapy.",
    content: "Researchers found that integrated mental health support — including group counseling and guided meditation — significantly improved treatment outcomes and patient satisfaction.",
    pdf: "assets/research/mental-health-study.pdf"
  }
];

  const container = document.getElementById("researchArticles");

  articles.forEach((article, index) => {
    const card = document.createElement("div");
    card.className = "bg-gray-50 border border-gray-200 p-6 rounded-xl shadow-md hover:shadow-xl transition relative";
    card.setAttribute("data-aos", "fade-up");
    card.setAttribute("data-aos-delay", index * 100);

    card.innerHTML = `
      <div class="flex items-start gap-4">
        <img src="${article.image}" alt="${article.researcher}" class="w-16 h-16 rounded-full object-cover border border-gray-300" />
        <div>
          <h3 class="text-xl font-semibold text-teal-700">${article.title}</h3>
          <p class="text-sm text-gray-500">${article.researcher} — ${article.institution}</p>
        </div>
      </div>
      <p class="mt-4 text-gray-700">${article.summary}</p>
      <div class="hidden mt-4 text-gray-600 article-details">${article.content}</div>

      <div class="flex items-center justify-between mt-4">
        <button class="text-sm text-teal-600 font-semibold hover:underline toggle-btn">Read Full Summary</button>
        <a href="${article.pdf}" download class="text-sm bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700 transition">
          📄 Download PDF
        </a>
      </div>
    `;

    container.appendChild(card);
  });

  // Expand/collapse summary logic
  document.addEventListener("click", function (e) {
    if (e.target.classList.contains("toggle-btn")) {
      const article = e.target.closest("div");
      const details = article.querySelector(".article-details");
      details.classList.toggle("hidden");
      e.target.textContent = details.classList.contains("hidden")
        ? "Read Full Summary"
        : "Show Less";
    }
  })
