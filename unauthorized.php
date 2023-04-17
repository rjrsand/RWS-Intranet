<!doctype html>
<html>

<head>
    <base href="/" id="browser1">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Untitled Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Lustria&amp;family=Muli:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansation" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/intranet.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer></script>

    <!-- Firebase Setup -->
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-storage.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-firestore.js"></script>
    <script>
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
    </script>

</head>

<body is="dmx-app" id="index" class="body-bg">
    <!-- Wappler include head-page="index.php" appConnect="local" is="dmx-app" bootstrap5="local" fontawesome_5="cdn" jquery_slim_35="local" components="{dmxBootstrap5Navigation:{},dmxBrowser:{}}" -->
    <div is="dmx-browser" id="browser1"></div>
    <header id="navbar_main" class="border-top rounded-1 border-secondary rounded-0 pb-0">
        <div class="container-fluid navbar-container pb-1 bg-dark">
            <div class="row bg-dark">
                <div class="col">
                    <div class="container-xl header-container ps-3 pe-3">
                        <nav class="header-navbar navbar navbar-expand-lg navbar-dark bg-transparent align-items-stretch pt-0 pb-0">

                            <!-- Quote Modal -->

                            <!-- End Quote Modal -->

                            <a class="navbar-brand mt-1 mb-1 align-self-center" href="index.php">
                                <img src="assets/images/navbar-logo.png" class="logo-img"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar1_collapse" aria-controls="navbar1_collapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end align-items-stretch" id="navbar1_collapse">
                                <div class="navbar-nav align-items-stretch text-center">
                                    <a class="nav-item nav-separator ms-2 me-2"></a><a class="nav-item nav-link active rws-nav-item" href="index.php"><i class="fas fa-arrow-left"></i>&nbsp;Go Back</a>
                                    <a class="nav-item nav-separator ms-2 me-2"></a>





                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


    </header>
    <main>
        <section class="border-top rounded-1 rounded-0 border-secondary min-vh-75 bg-dark">
            <img src="assets/images/section-modal-bg-top-stone.png" class="w-100">
            <div class="container modules-container mt-auto mb-auto">
                <div class="row">

                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="module-card border rounded-0 rounded-1 border-secondary mt-3 mb-3 ms-3 me-3 pt-4 pb-4 align-self-center text-center col-8">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <div class="d-flex flex-column">

                                            <a><img src="assets/images/Intranet/access_denied-removebg-preview.png" class="img-fluid"></a>

                                            <h1 class="text-warning">HALT! WHO GOES THERE!?</h1>
                                            <p class="text-center mb-4 text-white-50">You do no have authorization to access this page. Please go back and login using the correct credential.</p>
                                            <button id="btn1" class="btn align-self-center btn-lg tile-hover fw-bolder bg-warning text-dark" dmx-on:click="browser1.goto('https://team.ragingwolfsolutions.com/login')">Go Home</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="wappler-block bg-dark pt-5 border-top border-secondary">
        <div class="container">
            <div class="row align-items-top">
                <div class="col-md-4 col-md text-center">
                    <div class="d-flex justify-content-center">
                        <img src="assets/images/navbar-logo.png" class="img-fluid footer-logo mb-3">
                    </div>
                </div>
                <div class="col-md-4 col-md text-center">
                    <h5 class="text-secondary">Raging Wolf</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">About</a>
                        <li><a class="text-muted" href="#">Official Website</a></li>
                        </li>
                        <li><a class="text-muted" href="#">Handbook</a></li>
                        <li><a class="text-muted" href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-md text-center">
                    <h5 class="text-secondary">Your Manager</h5>
                    <ul class="list-unstyled text-small">
                        <li class="text-secondary">&lt;MANAGER NAME&gt;</li>
                        <li class="text-secondary">&lt;MANAGER EMAIL&gt;</li>
                        <li><a class="text-muted" href="#">Privacy</a></li>
                        <li><a class="text-muted" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3 border-top border-secondary">
                <div class="col">
                    <p class="text-secondary text-center small pt-3">© Copyright 2023. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>




    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>

    <!-- Firebase OAuth Login Handler -->
    <script>
        // Get the sign-in button
var microsoftSignInButton = document.getElementById("microsoftsigninbutton");

// Add a click event listener to the button
microsoftSignInButton.addEventListener("click", function () {
    // Sign in with Microsoft
    var provider = new firebase.auth.OAuthProvider("microsoft.com");
    provider.setCustomParameters({
        tenant: "ragingwolfsolutions.com"
    });
    firebase.auth().signInWithPopup(provider)
        .then(function (result) {
            var user = result.user;
            var userId = user.uid;
            var userRef = firebase.firestore().collection("users").doc(userId);

            userRef.get().then(function (doc) {
                if (doc.exists) {
                    // User record already exists, redirect to index.php
                    window.location.href = "index.php";
                } else {
                    // User record does not exist, prompt user to enter first name, last name, and profile image
                    document.getElementById("onboarding").classList.remove("d-none");
                    document.getElementById("login_microsoft").classList.add("d-none");

                    // Handle button click instead of form submission
                    var nameFormButton = document.getElementById("submit-name-btn");
                    nameFormButton.addEventListener("click", function () {
                        var firstName = document.getElementById("firstName").value;
                        var lastName = document.getElementById("lastName").value;
                        var department = document.getElementById("department").value;

                        // Create new user record in Firestore
                        userRef.set({
                            firstName: firstName,
                            lastName: lastName,
                            department: department,
                        })
                            .then(function () {

                                // Redirect to index.php after successful creation of user record
                                window.location.href = "index.php";
                            })
                            .catch(function (error) {
                                console.log("Error creating user document:", error);
                            });
                    });
                }
            })
                .catch(function (error) {
                    console.log("Error getting user document:", error);
                });
        })
        .catch(function (error) {
            // Handle sign-in errors
            console.error("Error signing in with Microsoft:", error);
            $("#error-card").text(error.message).show();
        });
});
    </script>
</body>

</html>