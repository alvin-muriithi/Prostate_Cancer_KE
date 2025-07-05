document.addEventListener("DOMContentLoaded", function () {
  const amountButtons = document.querySelectorAll(".amount-btn");
  const amountInput = document.getElementById("amount");
  const donateBtn = document.getElementById("donate-btn");

  let selectedAmount = '';

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

  donateBtn?.addEventListener("click", function (e) {
    e.preventDefault();

    const amount = amountInput.value.trim();
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();

    if (!amount || !phone) {
      alert("Please fill in the amount and phone number.");
      return;
    }

    fetch("stk_push.php", {
      method: "POST",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: `amount=${encodeURIComponent(amount)}&phone=${encodeURIComponent(phone)}&name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}`
    })
      .then(res => res.json())
      .then(data => {
        alert("Payment prompt sent to your phone.");
        console.log(data);
      })
      .catch(err => {
        alert("Failed to initiate payment.");
        console.error(err);
      });
  });
});