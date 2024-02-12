import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.2/firebase-app.js";
import { getAuth, onAuthStateChanged, signOut } from "https://www.gstatic.com/firebasejs/10.7.2/firebase-auth.js";

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

const app = initializeApp(firebaseConfig)
const auth = getAuth(app);
const user = auth.currentUser;

//runs everytime a user login or logsout
onAuthStateChanged(auth, (user) => {

    console.log(user)
    if (user) {
      // User is signed in, call the updateUserProfile function
      updateUserProfile(user);
  
      const uid = user.uid;
      return uid;
  
    } else {
      // User is not signed in, redirect to the registration page
      alert("Create Account & login");
      window.location.href = "sign_in.php";
    }
  });
 
// Function to update the user profile
function updateUserProfile(user) {
    const userName = user.displayName;
    const userEmail = user.email;
    const userProfilePicture = user.photoURL;
  
    // Update the profile section with user data
    document.getElementById("userName").textContent = userName;
    document.getElementById("userEmail").textContent = userEmail;
    document.getElementById("userProfilePicture").src = userProfilePicture;
  }
  
  
  const logout = document.getElementById("log-out");
  logout.addEventListener('click', function logout() {
    signOut(auth).then(() => {
      // Sign-out successful.
      window.location.href = "sign_in.php"
    }).catch((error) => {
      // An error happened.
    });
  });