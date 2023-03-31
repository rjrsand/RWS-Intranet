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
</head>

<body is="dmx-app" id="directory" class="body-bg">
    <dmx-data-detail id="data_detail1" dmx-bind:data="jsonDS1.data" key="emailAddress"></dmx-data-detail>
    <dmx-json-datasource id="jsonDS1" is="dmx-serverconnect" url="directoryContacts.json"></dmx-json-datasource>
    <div is="dmx-browser" id="browser1"></div>

    <div class="modal fw-bolder" id="modal1" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-warning border-bottom border-secondary border-2">
                    <h5 class="modal-title text-light" id="Details">Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark text-warning">
                    <div class="container text-center">
                        <table class="table table-sm text-secondary border-secondary">
                            <thead>
                            </thead>
                            <tbody class="text-start">
                                <tr class="border-top-0">
                                    <th scope="row" class="fw-normal">Full Name</th>
                                    <td dmx-text="data_detail1.data.firstName+' '+data_detail1.data.lastName" class="text-light"></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal">Department</th>
                                    <td class="text-light">{{data_detail1.data.department}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal">Supervisor</th>
                                    <td class="text-light">{{data_detail1.data.supervisor}}<br></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal">Title</th>
                                    <td class="text-light">{{data_detail1.data.title}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal">Office Phone<br></th>
                                    <td dmx-on:click="browser1.writeTextToClipboard(data_detail1.data.officePhone);browser1.alert('Copied to clipboard!')" class="tile-hover text-light">{{data_detail1.data.officePhone}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal">Mobile Phone</th>
                                    <td dmx-on:click="browser1.writeTextToClipboard(data_detail1.data.mobilePhone);browser1.alert('Copied to clipboard!')" class="tile-hover text-light">{{data_detail1.data.mobilePhone}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal">Email</th>
                                    <td class="tile-hover text-light" dmx-on:click="browser1.writeTextToClipboard(data_detail1.data.emailAddress);browser1.alert('Copied to clipboard!')">{{data_detail1.data.emailAddress}}&nbsp;<i class="far fa-copy"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex-container">


                    </div>

                </div>
                <div class="modal-footer text-warning bg-dark border-0 justify-content-center">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
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
                                <h4 class="text-warning align-self-center mt-2">Hello, <span dmx-text="firstName">n/a</span></h4>
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
    <main class="border-top rounded-0 rounded-1 border-secondary mb-5 pt-5">
        <div class="container">
            <div class="row min-vh-75">
                <div class="col">

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h5 class="text-warning text-uppercase">The Pack</h5>
                                <h1 class="text-left fw-bold text-light">Directory</h1>
                                <p class="mb-4 text-secondary">Here you can find the contact information for everyone at RWS.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container" id="contacts">
                        <div class="row">
                            <div class="col-4" dmx-repeat:directory="jsonDS1.data">
                                <div class="d-flex justify-content-between tile-category mb-3 pt-3 pb-3 ps-3 pe-3">
                                    <div class="d-flex flex-column text-truncate">
                                        <h5 class="text-light"><span dmx-text="firstName">Rob</span>&nbsp;<span dmx-text="lastName">Sandlin</span></h5>
                                        <h6 class="text-white-50"><span dmx-text="department">Operations/IT</span>,&nbsp;<span dmx-text="title">Specialist</span></h6>
                                        <h6 class="text-white-50 tile-hover" dmx-on:click="browser1.writeTextToClipboard(emailAddress);browser1.alert('Copied to clipboard!')"><span dmx-text="emailAddress">robs@ragingwolfsolutions.com</span>&nbsp;<i class="far fa-copy"></i></h6>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <button id="btn1" class="btn btn-outline-warning border-0 pt-0 pb-0 ps-1 pe-1 text-nowrap" dmx-on:click="modal1.show();data_detail1.select(emailAddress)">More&nbsp;<i class="fas fa-external-link-alt"></i></button>
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