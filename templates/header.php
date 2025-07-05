<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ProstateCare Kenya - Understanding Prostate Cancer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Merriweather:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script src="https://www.gstatic.com/firebasejs/10.8.0/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.8.0/firebase-auth-compat.js"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: { primary: "#40E0D0", secondary: "#87CEEB" },
            borderRadius: {
              none: "0px",
              sm: "4px",
              DEFAULT: "8px",
              md: "12px",
              lg: "16px",
              xl: "20px",
              "2xl": "24px",
              "3xl": "32px",
              full: "9999px",
              button: "8px",
            },
          },
        },
      };
    </script>
    <script src="https://www.gstatic.com/firebasejs/11.9.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/11.9.1/firebase-auth.js"></script>
    <script>
      const firebaseConfig = {
        apiKey: "AIzaSyAv0yaPAj1S6mfdrGarEPloVBM-h6-j9zQ",
        authDomain: "prostatecareauthapp.firebaseapp.com",
        projectId: "prostatecareauthapp",
        storageBucket: "prostatecareauthapp.firebasestorage.app",
        messagingSenderId: "37360920884",
        appId: "1:37360920884:web:0b1d5c6b6c7a374a555d61" 
      };
      firebase.initializeApp(firebaseConfig);
      const auth = firebase.auth();
    </script>
    <link rel="stylesheet" href="assets\css\style.css" />
  </head>