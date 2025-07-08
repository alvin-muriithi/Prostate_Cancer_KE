<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleForm(section) {
            document.querySelectorAll('.form-section').forEach(form => form.classList.add('hidden'));
            document.getElementById(section + '-form').classList.remove('hidden');
        }
        function showDonations() {
            fetch('get_donations.php')
                .then(response => response.json())
                .then(data => {
                    const donationsDiv = document.getElementById('donations');
                    donationsDiv.innerHTML = '<h3 class="text-lg font-bold">Donations</h3>' + 
                        data.map(d => `<p>${d.amount} - ${d.date}</p>`).join('');
                });
        }
        window.onload = showDonations;
    </script>
    <style>
        body { background-color: #e6f0fa; }
        .btn { transition: transform 0.2s; }
        .btn:hover { transform: scale(1.05); }
    </style>
</head>