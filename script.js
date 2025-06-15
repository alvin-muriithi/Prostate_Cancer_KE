import { getAuth } from "firebase/auth";
const auth = getAuth(app);

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyAv0yaPAj1S6mfdrGarEPloVBM-h6-j9zQ",
  authDomain: "prostatecareauthapp.firebaseapp.com",
  projectId: "prostatecareauthapp",
  storageBucket: "prostatecareauthapp.firebasestorage.app",
  messagingSenderId: "37360920884",
  appId: "1:37360920884:web:0b1d5c6b6c7a374a555d61"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

document.addEventListener("DOMContentLoaded", function (){
  console.log("Page loaded successfully!");
  
  const backToTopButton = document.getElementById("back-to-top");
  if (backToTopButton) {
    backToTopButton.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }
});
