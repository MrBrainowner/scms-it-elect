
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.2/firebase-app.js";
  import { getAuth, GoogleAuthProvider, signInWithPopup, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.7.2/firebase-auth.js";

  const firebaseConfig = {
    apiKey: "AIzaSyDrJQHpgtPzw13K1w-vL8bN2MvR3NkpVW8",
    authDomain: "scms-2.firebaseapp.com",
    databaseURL: "https://scms-2-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "scms-2",
    storageBucket: "scms-2.appspot.com",
    messagingSenderId: "1071390795091",
    appId: "1:1071390795091:web:b9e6efa5ff235fedbe6da6",
    measurementId: "G-S1GZ57CV4J"
  };

  const app = initializeApp(firebaseConfig);
  const auth = getAuth(app);
  const provider = new GoogleAuthProvider();
  auth.useDeviceLanguage()

  const signIn = document.getElementById("google-sign");


  signIn.addEventListener('click', function(){
    signInWithPopup(auth, provider)
    .then((result) => {
      const credential = GoogleAuthProvider.credentialFromResult(result);
      const user = result.user;
      window.location.href = "bridge.php";
    }).catch((error) => {
      const errorCode = error.code;
      const errorMessage = error.message;
    });
  })

  //grab
const register = document.getElementById("button");
register.addEventListener("click", function (event) {
  event.preventDefault()

  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;


  createUserWithEmailAndPassword(auth, email, password)
    .then((userCredential) => {

      const user = userCredential.user;
      window.location.href = "user_page.php";
    })
    .catch((error) => {
      const errorCode = error.code;
      const errorMessage = error.message;
    });
})

