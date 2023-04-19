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

    <script src="js/univ.js"></script>

    <link rel="stylesheet" href="dmxAppConnect/dmxBootstrap5TableGenerator/dmxBootstrap5TableGenerator.css" />
</head>

<body is="dmx-app" id="index" class="body-bg" onload="loadUserData();">
    <dmx-value id="department"></dmx-value>
    <dmx-value id="lastName"></dmx-value>
    <dmx-value id="firstName"></dmx-value>
    <div is="dmx-browser" id="browser1"></div>

    <?php include 'navbar'; ?>

    <main class="border-top rounded-0 rounded-1 border-secondary pt-5">
        <div class="container">
            <div class="row min-vh-75">
                <div class="col">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="d-flex flex-column">
                                            <h5 class="text-warning text-uppercase"><span dmx-text="department">n/a</span> Team</h5>
                                            <h1 class="text-left fw-bold text-light">Standard Operating Procedures</h1>
                                            <p class="mb-4 text-secondary">Here you can find helpful tools and guides for Standard Operating Procedures according to your department. If you need further information, please contact your manager.</p>
                                        </div>
                                    </div>
                                    <div class="col align-self-end">
                                        <div class="d-flex justify-content-end align-items-end">
                                            <div class="d-flex flex-row-reverse position-relative mb-4">
                                                <input id="filter_carriers_input" name="text1" type="text" class="form-control bg-light mb-1" placeholder="Search this list..." is="dmx-input" value="">
                                                <i class="fa fa-search fa-fw position-absolute top-50 translate-middle-y pe-4 pb-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://help.salesforce.com/s/articleView?id=sf.essentials.htm&amp;type=5')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fab fa-salesforce"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <h3 class="text-light">SalesForce Resources</h3>
                                        <p class="mb-0 text-secondary">Use this page to learn general information about using SalesForce.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('assets/Docs/CreditSafe%20SOP%2003-27-2023.pdf')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-credit-card"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <h3 class="text-light">CreditSafe Tutorial</h3>
                                        <p class="mb-0 text-secondary">Access this page to learn what to look for when checking a prospect's credit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('assets/Docs/Shipping-Order-Tutorial.dotx')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fab fa-salesforce"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <h3 class="text-light">Shipping Order Tutorial</h3>
                                        <p class="mb-0 text-secondary">Use this page to learn general information uploading SO's.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('document.php')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-credit-card"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <h3 class="text-light">xxx</h3>
                                        <p class="mb-0 text-secondary">xxx</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>