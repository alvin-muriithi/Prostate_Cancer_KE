
// Firebase Config and Initialization
import { initializeApp } from "https://www.gstatic.com/firebasejs/11.9.1/firebase-app.js";
import { getAuth } from "https://www.gstatic.com/firebasejs/11.9.1/firebase-auth.js";

const firebaseConfig = {
  apiKey: "AIzaSyAv0yaPAj1S6mfdrGarEPloVBM-h6-j9zQ",
  authDomain: "prostatecareauthapp.firebaseapp.com",
  projectId: "prostatecareauthapp",
  storageBucket: "prostatecareauthapp.appspot.com",
  messagingSenderId: "37360920884",
  appId: "1:37360920884:web:0b1d5c6b6c7a374a555d61"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
export const auth = getAuth(app);
