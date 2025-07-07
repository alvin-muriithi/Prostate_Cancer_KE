document.addEventListener("DOMContentLoaded", function () {
  const amountButtons = document.querySelectorAll(".amount-btn");
  const amountInput = document.getElementById("amount");
  const donateBtn = document.getElementById("donate-btn");

  let selectedAmount = "";

  // Handle quick select amount buttons
  amountButtons.forEach(button => {
    button.addEventListener("click", () => {
      amountButtons.forEach(btn => {
        btn.classList.remove("bg-primary", "text-white");
        btn.classList.add("bg-white", "text-gray-700");
      });

      button.classList.remove("bg-white", "text-gray-700");
      button.classList.add("bg-primary", "text-white");

      selectedAmount = button.getAttribute("data-amount");
      amountInput.value = selectedAmount;
    });
  });

  // Donation submit
  donateBtn?.addEventListener("click", function (e) {
    e.preventDefault();

    const amount = amountInput.value.trim();
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();

    // Validate amount
    if (!amount || isNaN(amount) || parseInt(amount) < 1) {
      alert("Please enter a valid donation amount.");
      return;
    }

    // Validate phone (must be 9 digits, numbers only)
    const phonePattern = /^\d{9}$/;
    if (!phonePattern.test(phone)) {
      alert("Phone number must be 9 digits (without +254).");
      return;
    }

    // Optional: validate name/email if needed

    // Disable button to prevent double clicks
    donateBtn.disabled = true;
    donateBtn.innerText = "Processing...";

    fetch("assets/php/stkpush.php", {
      method: "POST",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: `amount=${encodeURIComponent(amount)}&phone=${encodeURIComponent(phone)}&name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}`
    })
      .then(res => {
        if (!res.ok) throw new Error("Network response not ok");
        return res.json();
      })
      .then(data => {
        alert("Payment prompt sent to your phone.");
        console.log(data);
      })
      .catch(err => {
        alert("Failed to initiate payment. Please try again.");
        console.error(err);
      })
      .finally(() => {
        donateBtn.disabled = false;
        donateBtn.innerText = "Donate Now";
      });
  });
});
