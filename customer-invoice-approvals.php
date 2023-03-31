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

    <script src="dmxAppConnect/dmxDataTraversal/dmxDataTraversal.js" defer></script>
    <script src="dmxAppConnect/dmxTyped/dmxTyped.js" defer></script>
    <script src="dmxAppConnect/dmxTyped/typed.min.js" defer></script>
    <script src="dmxAppConnect/dmxBootstrap5Modal/dmxBootstrap5Modal.js" defer></script>
    <script src="dmxAppConnect/dmxFormRepeat/dmxFormRepeat.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxBootstrap5TableGenerator/dmxBootstrap5TableGenerator.css" />
    <script src="dmxAppConnect/dmxBootstrap5Offcanvas/dmxBootstrap5Offcanvas.js" defer></script>
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
    <script src="dmxAppConnect/dmxDatastore/dmxDatastore.js" defer></script>
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer></script>

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
                        // window.location.href = "login.php";
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
                
    </script>

    <script src="dmxAppConnect/dmxBootstrap4Navigation/dmxBootstrap4Navigation.js" defer></script>
</head>

<body is="dmx-app" id="index" class="body-bg" onload="loadUserData();">
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
                                    <h5 class="text-warning align-self-center mt-2">Hello, <span dmx-text="firstName">n/a</span></h5>
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

    <section class="border-top rounded-1 rounded-0 border-secondary min-vh-75 bg-dark">
        <img src="assets/images/section-modal-bg-top-stone.png" class="w-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="d-flex flex-column">
                        <h5 class="text-warning text-uppercase"><span dmx-text="department">n/a</span> Team</h5>
                        <h1 class="text-left fw-bold text-light">Customer Invoice Approvals</h1>
                        <p class="mb-4 text-secondary">Explore past orders using this live and up-to-date information from Salesforce.</p>
                    </div>
                </div>
                <div class="col align-self-end">
                    <div class="d-flex justify-content-end align-items-end">
                        <div class="d-flex flex-row-reverse position-relative mb-4">
                            <input id="filter_contacts_input" name="text1" type="text" class="form-control bg-light" placeholder="Search load number..." is="dmx-input" value="">
                            <i class="fa fa-search fa-fw position-absolute top-50 translate-middle-y pe-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container modules-container mt-auto mb-auto">
            <div class="row">
                <div class="col-md-12">
                    <dmx-api-datasource id="api1" is="dmx-fetch" url="https://staff.my.salesforce-sites.com/services/apexrest/Loads"></dmx-api-datasource>
                    <table class="table table-hover table-sm table-dark">
                        <thead>
                            <tr>
                                <th class="d-none">Load ID</th>
                                <th>Load #</th>
                                <th>Customer</th>
                                <th>Customer rate</th>
                                <th>Carrier&nbsp;</th>
                                <th>Carrier Rate</th>
                                <th>Created</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody is="dmx-repeat" dmx-generator="bs5table" dmx-bind:repeat="api1.data.top(100)" id="tableRepeat2">
                            <tr>
                                <td dmx-text="Name" class="d-none"></td>
                                <td dmx-text="Load_Reference__c"></td>
                                <td dmx-text="Customer_Name__c"></td>
                                <td dmx-text="Total_Customer_Amount__c.formatCurrency(&quot;$&quot;,&quot;.&quot;,&quot;,&quot;,&quot;2&quot;)"></td>
                                <td dmx-text="Carrier_Contact_Name__c"></td>
                                <td dmx-text="Total_Carrier_Amount__c.formatCurrency(&quot;$&quot;,&quot;.&quot;,&quot;,&quot;,&quot;2&quot;)"></td>
                                <td dmx-text="CreatedDate.toDate()"></td>
                                <td dmx-text="FreightTM__Status__c"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>