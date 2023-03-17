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
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>


</head>

<body is="dmx-app" id="index" class="body-bg">
    <dmx-json-datasource id="jsonDS2" is="dmx-serverconnect" url="commonlyUsedtools.json"></dmx-json-datasource>

    <dmx-data-detail id="jsonDS1" dmx-bind:data="jsonDS1.data" key="siteName" dmx-bind:value="jsonDS1.data.id"></dmx-data-detail>
    <div is="dmx-browser" id="browser1"></div>
    <section id="variables">
        <dmx-value id="activeTool"></dmx-value>
    </section>
    <div class="modal fw-bolder" id="modal1" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-warning border-bottom border-secondary border-2">
                    <h5 class="modal-title text-light">Site Credentials</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark text-warning" id="siteNameCarrier411">
                    <div class="flex-container">
                        <div class="container-fluid gx-0" is="dmx-form-repeat" id="formRepeat1" dmx-bind:items="1">
                            <div class="row">
                                <div class="col">
                                    <h6 class="text-light" dmx-text="jsonDS2.data.username">SiteName</h6>
                                </div>
                            </div>
                            <div class="row text-nowrap tile-hover" dmx-on:click="browser1.writeTextToClipboard(carrier411_username.value);browser1.alert('Copied to clipboard!')" dmx-bind:title="">
                                <div class="col-auto w-50">
                                    <p class="h-100">Username: wolfpack5</p>
                                </div>
                                <div class="col"><button class="btn btn-outline-link text-warning pt-0 pb-0" data-bs-toggle="button" dmx-on:click="">

                                        <span class="badge bg-warning text-dark rounded-pill ms-2" dmx-on:click="">Copy</span></button></div>
                            </div>
                        </div>
                        <div class="container-fluid gx-0" is="dmx-form-repeat" id="formRepeat2" dmx-bind:items="1">
                            <div class="row text-nowrap tile-hover" dmx-on:click="browser1.writeTextToClipboard(carrier411_password.value);browser1.alert('Copied to clipboard!')">
                                <div class="col-auto w-50">
                                    <p class="h-100 ps-0 pe-4">Password: ********</p>
                                </div>
                                <div class="col"><button class="btn btn-outline-link text-warning pt-0 pb-0" data-bs-toggle="button" dmx-on:click="browser1.writeTextToClipboard(jsonDS1.data.password);browser1.alert('Copied to clipboard!')">

                                        <span class="badge bg-warning text-dark rounded-pill ms-2">Copy</span></button></div>
                            </div>
                        </div>


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



    <main class="border-top border-secondary mb-5 pt-5">
        <div class="container">
            <div class="row min-vh-75">
                <div class="col">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h5 class="text-warning text-uppercase">Operations Team</h5>
                                <h1 class="text-left fw-bold text-light">Commonly Used Tools</h1>
                                <p class="mb-4 text-secondary">Here you can find helpful links and logins used in the daily operations of RWS.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-lg-4 text-white-50" dmx-repeat:commonlyusedtools-repeat="jsonDS2.data">
                                <div class="tile-category h-tile-default text-start text-white-50 flex-column mb-3 pt-3 pb-3 ps-3 pe-3">
                                    <div class="d-flex cut-tool-logo mb-2"><img src="assets/images/Intranet/carrier411-logo-gray.png" class="img-fluid" alt="Carrier411" dmx-bind:src="img_src">
                                    </div>

                                    <h6 class="style10 text-secondary text-start mb-3" dmx-text="title">
                                        <font color="#6c757d"><span style="font-size: 14px;">Find &amp; qualify registered freight carriers.</span></font>
                                    </h6>
                                    <div class="d-flex pt-2">
                                        <div class="container-fluid gx-0">
                                            <div class="row gx-3">
                                                <div class="col-lg-6">
                                                    <a target="_blank" dmx-bind:href="link">
                                                        <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button">
                                                            <i class="fas fa-share-square"></i>&nbsp;Open
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">

                                                    <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button" data-bs-toggle="modal" data-bs-target="#modal1" dmx-on:click="activeTool.setValue('Carrier411');dmx.parse('jsonDS2', 'commonlyUsedtools.json');dmx.data('jsonDS2').where('service_name', activeTools, '==').select('username', 'password')"><i class="fas fa-eye"></i>&nbsp;View Details</button>

                                                </div>
                                            </div>
                                        </div>
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
                    <div class="d-flex">
                        <img src="assets/images/navbar-logo.png" class="img-fluid footer-logo">
                    </div>

                </div>
                <div class="col-md-4 col-md text-center">
                    <h5 class="text-secondary">Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Resource</a></li>
                        <li><a class="text-muted" href="#">Resource name</a></li>
                        <li><a class="text-muted" href="#">Another resource</a></li>
                        <li><a class="text-muted" href="#">Final resource</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-md text-center">
                    <h5 class="text-secondary">About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Team</a></li>
                        <li><a class="text-muted" href="#">Locations</a></li>
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
    <script>

    </script>
</body>

</html>