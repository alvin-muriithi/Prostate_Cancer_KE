import {
  GoogleAuthProvider,
  signInWithPopup,
  signInWithEmailAndPassword,
  createUserWithEmailAndPassword,
  signOut,
  onAuthStateChanged
} from "https://www.gstatic.com/firebasejs/11.9.1/firebase-auth.js";
import { auth } from "assets\js\firebase-config.js";

document.addEventListener("DOMContentLoaded", () => {
  // Forms and modal
  const authModal = document.getElementById("authModal");
  const loginForm = document.getElementById("signin-form");
  const signupForm = document.getElementById("signupForm");
  

  const switchToSignup = document.getElementById("switchToSignup");
  const switchToLogin = document.getElementById("switchToLogin");
  const closeButtons = document.querySelectorAll(".close-modal");
  const adminLoginBtn = document.getElementById("adminLoginBtn");
  const googleButtons = document.querySelectorAll(".google-signin-btn");

  const loginFormElement = document.getElementById("loginFormElement");
  const signupFormElement = document.getElementById("signupFormElement");

  // Auth control buttons in navbar
  const loginBtn = document.getElementById("loginBtn");
  const signupBtn = document.getElementById("signupBtn");
  const logoutBtn = document.getElementById("logoutBtn");

  function showModal(form) {
    authModal.classList.remove("hidden");
    loginForm.classList.add("hidden");
    signupForm.classList.add("hidden");
    form.classList.remove("hidden");
  }

  function hideModal() {
    authModal.classList.add("hidden");
  }

  // Switch between forms
  loginBtn?.addEventListener("click", () => showModal(loginForm));
  signupBtn?.addEventListener("click", () => showModal(signupForm));
  switchToSignup?.addEventListener("click", () => showModal(signupForm));
  switchToLogin?.addEventListener("click", () => showModal(loginForm));
  closeButtons.forEach(btn => btn.addEventListener("click", hideModal));

  authModal?.addEventListener("click", (e) => {
    if (e.target === authModal) hideModal();
  });

  adminLoginBtn?.addEventListener("click", () => {
    window.location.href = "admin_dashboard.html";
  });

  // GOOGLE SIGN-IN
  const googleProvider = new GoogleAuthProvider();
  googleButtons.forEach(button => {
    button.addEventListener("click", () => {
      signInWithPopup(auth, googleProvider)
        .then(result => {
          const user = result.user;
          alert(`Welcome, ${user.displayName || user.email}`);
          hideModal();
        })
        .catch(error => {
          alert(`Google Sign-In Error: ${error.message}`);
        });
    });
  });

  // EMAIL/PASSWORD LOGIN
  loginFormElement?.addEventListener("submit", (e) => {
    e.preventDefault();
    const email = document.getElementById("loginEmail").value;
    const password = document.getElementById("loginPassword").value;

    signInWithEmailAndPassword(auth, email, password)
      .then(userCredential => {
        alert("Login successful!");
        hideModal();
      })
      .catch(error => {
        alert(`Login Error: ${error.message}`);
      });
  });

  // EMAIL/PASSWORD SIGNUP
  signupFormElement?.addEventListener("submit", (e) => {
    e.preventDefault();
    const email = document.getElementById("signupEmail").value;
    const password = document.getElementById("signupPassword").value;

    createUserWithEmailAndPassword(auth, email, password)
      .then(userCredential => {
        alert("Account created successfully!");
        hideModal();
      })
      .catch(error => {
        alert(`Signup Error: ${error.message}`);
      });
  });

  // LOGOUT
  logoutBtn?.addEventListener("click", () => {
    signOut(auth)
      .then(() => {
        alert("You’ve been logged out.");
      })
      .catch(error => {
        alert(`Logout Error: ${error.message}`);
      });
  });

  // AUTH STATE LISTENER
  onAuthStateChanged(auth, (user) => {
    if (user) {
      loginBtn?.classList.add("hidden");
      signupBtn?.classList.add("hidden");
      logoutBtn?.classList.remove("hidden");
    } else {
      loginBtn?.classList.remove("hidden");
      signupBtn?.classList.remove("hidden");
      logoutBtn?.classList.add("hidden");
    }
  });
});
