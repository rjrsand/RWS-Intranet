<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Untitled Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Lustria&amp;family=Muli:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansation" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <link rel="stylesheet" href="css/intranet.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer></script>

    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>

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
        
        // Assign values from Firestore data to DMX App Connect variables
        dmx.app.set("firstName", firstName);
        dmx.app.set("lastName", lastName);
        dmx.app.set("email", email);
        dmx.app.set("role", role);
        dmx.app.set("department", department);
        
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
        document.addEventListener("DOMContentLoaded", function() {
        loadUserData();
        });
        }
    </script>

</head>

<body is="dmx-app" id="index" class="body-bg">
    <dmx-value id="department"></dmx-value>
    <dmx-value id="lastName"></dmx-value>
    <dmx-value id="firstName"></dmx-value>
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



    <main class="border-top rounded-0 rounded-1 border-secondary pt-5">
        <div class="container">
            <div class="row min-vh-75">
                <div class="col">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h5 class="text-warning text-uppercase">Operations Team</h5>
                                <h1 class="text-left fw-bold text-light">Welcome to Raging Wolf Solutions</h1>
                                <p class="mb-4 text-secondary">Here you can find helpful tools and resources that are commonly used in your department at Raging Wolf Solutions. If you need any additional information or resources, please contact your manager.</p>
                                <p class="mb-4 text-secondary" dmx-text="email">TEST</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-link"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <h3 class="text-light">Training Resource Center</h3>
                                        <p class="mb-0 text-secondary">Use this page to learn more about commonly used tools.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('document.php')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="far fa-file-alt"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <h3 class="text-light">Document Center</h3>
                                        <p class="mb-0 text-secondary">Use this page to access RWS employee documents.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('directory.php')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-address-book"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <h3 class="text-light">Directory</h3>
                                        <p class="mb-0 text-secondary">Use this page to access RWS directory.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('commonly-used-tools.php')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-toolbox"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <h3 class="text-light">Commonly Used Tools</h3>
                                        <p class="mb-0 text-secondary">Access this page to use RWS day-to-day tools.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-key"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <h3 class="text-light">New Hire Packet</h3>
                                        <p class="mb-0 text-secondary">Access all necessary new-hire documentation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-toolbox"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <h3 class="text-light">Unknown</h3>
                                        <p class="mb-0 text-secondary">As of yet, this tile is unknown.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
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
</body>

</html>