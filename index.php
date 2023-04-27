<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>The Den</title>

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
                                            <h1 class="text-left fw-bold text-light">Welcome to Raging Wolf Solutions</h1>
                                            <p class="mb-4 text-secondary">Here you can find helpful tools and resources that are commonly used in your department at Raging Wolf Solutions. If you need any additional information or resources, please contact your manager.</p>
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

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('customer-invoice-approvals.php')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-file-invoice-dollar"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <h3 class="text-light">Customer Invoice Approvals</h3>
                                        <p class="mb-0 text-secondary">Click here to add or edit a customer's invoice.</p>
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
                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('s-o-p.php')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-thumbs-up"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <h3 class="text-light">Standard Operating Procedures</h3>
                                        <p class="mb-0 text-secondary">Procedures for various aspects of the business.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/personal/johnathan_ragingwolfsolutions_com/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fjohnathan%5Fragingwolfsolutions%5Fcom%2FDocuments%2FRaging%20Wolf%20Solutions%2FMISC%2E%20DOCUMENTS%20to%20SHARE%2FTraining&amp;view=0')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-link"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <h3 class="text-light">Video Trainings</h3>
                                        <p class="mb-0 text-secondary">Use this page to view all trainings.</p>
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