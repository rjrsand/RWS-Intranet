// Initialize Firebase
var firebaseConfig = {
    apiKey: "AIzaSyAaQXNYPQNWe1fucHvFE28A8B2CGOmabRQ",
    authDomain: "raging-wolf-solutions.firebaseapp.com",
    projectId: "raging-wolf-solutions",
    storageBucket: "raging-wolf-solutions.appspot.com",
    messagingSenderId: "806897756992",
    appId: "1:806897756992:web:431cbc44a285af46ea28a5",
    measurementId: "G-NT24XFQC0C"
};
firebase.initializeApp(firebaseConfig);
var firestore = firebase.firestore();

// JavaScript Document
// Restrict access to authenticated users
function loadUserData() {
    firebase.auth().onAuthStateChanged(function (user) {
        if (user) {
            var userId = user.uid;
            firestore.collection("users").doc(userId).get().then(function (doc) {
                var firstName = doc.data().firstName;
                var lastName = doc.data().lastName;
                var email = user.email;
                var role = doc.data().role;
                var department = doc.data().department;
                var manager = doc.data().manager; // Retrieve the manager field

                // Assign values from Firestore data to DMX App Connect variables
                dmx.app.set("firstName", firstName);
                dmx.app.set("lastName", lastName);
                dmx.app.set("email", email);
                dmx.app.set("role", role);
                dmx.app.set("department", department);
                dmx.app.set("manager", manager); // Assign the manager value

                // Update data bindings on web page
                dmx.parse(document.body);
            });
        } else {
            // No user is signed in, redirect to 'login.php'
            window.location.href = "login.php";
        }
    });
    document.getElementById("logout-btn").addEventListener("click", function () {
        firebase.auth().signOut().then(function () {
            // Sign-out successful, redirect to 'login.php'
            window.location.href = "login.php";
        }).catch(function (error) {
            // An error occurred, handle it here
            console.log(error);
        });
    });
}

