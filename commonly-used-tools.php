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
</head>

<body is="dmx-app" id="index" class="body-bg">
    <section id="variables">
        <dmx-value id="blueship_password" dmx-bind:value="'Thepack1!'"></dmx-value>
        <dmx-value id="blueship_username" dmx-bind:value="'RagingRW'"></dmx-value>
        <dmx-value id="forwardair_password" dmx-bind:value="'fast2013'"></dmx-value>
        <dmx-value id="forwardair_username" dmx-bind:value="'gallaghe'"></dmx-value>
        <dmx-value id="dat_password" dmx-bind:value="'Ragingwolf2023*'"></dmx-value>
        <dmx-value id="dat_username" dmx-bind:value="'ops@ragingwolfsolutions.com'"></dmx-value>
        <dmx-value id="bluejay_password" dmx-bind:value="'Pack*2023'"></dmx-value>
        <dmx-value id="bluejay_username" dmx-bind:value="'adminRAG4'"></dmx-value>
        <dmx-value id="salesforce_password" dmx-bind:value="'Created by You'"></dmx-value>
        <dmx-value id="salesforce_username" dmx-bind:value="'RWS Email'"></dmx-value>
        <dmx-value id="truckstop_password" dmx-bind:value="'J2G4ySep!'"></dmx-value>
        <dmx-value id="truckstop_username" dmx-bind:value="'support@ragingwolfsolutions.com'"></dmx-value>
        <dmx-value id="creditsafe_password" dmx-bind:value="'9rHz_4948'"></dmx-value>
        <dmx-value id="creditsafe_username" dmx-bind:value="'RW8LFS'"></dmx-value>
        <dmx-value id="linearfootcalc_password" dmx-bind:value="'n/a'"></dmx-value>
        <dmx-value id="linearfootcalc_username" dmx-bind:value="'n/a'"></dmx-value>
        <dmx-value id="carrier411_password" dmx-bind:value="'aadfp8jy!'"></dmx-value>
        <dmx-value id="carrier411_username" dmx-bind:value="'wolfpack5'"></dmx-value>
    </section>
    <div class="modal fw-bolder" id="modal1" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-warning border-bottom border-secondary border-2">
                    <h5 class="modal-title text-light">Site Credentials</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark text-warning">
                    <div class="flex-container">
                        <div class="container-fluid gx-0" is="dmx-form-repeat" id="formRepeat1" dmx-bind:items="1">
                            <div class="row text-nowrap">
                                <div class="col-auto">
                                    <p class="h-100">Username: wolfpack5</p>
                                </div>
                                <div class="col"><button class="btn btn-outline-link text-warning pt-0 pb-0" data-bs-toggle="button">

                                        <i class="fas fa-copy fa-fw"></i><span class="badge bg-warning text-dark rounded-pill ms-2">Copy</span></button></div>
                            </div>
                        </div>
                        <div class="container-fluid gx-0" is="dmx-form-repeat" id="formRepeat2" dmx-bind:items="1">
                            <div class="row text-nowrap">
                                <div class="col-auto">
                                    <p class="h-100 ps-0 pe-4">Password: ********</p>
                                </div>
                                <div class="col"><button class="btn btn-outline-link text-warning pt-0 pb-0" data-bs-toggle="button">

                                        <i class="fas fa-copy fa-fw"></i><span class="badge bg-warning text-dark rounded-pill ms-2">Copy</span></button></div>
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

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light"></nav>
    </header>



    <main class="mt-5">
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
                            <div class="col-sm-6 col-lg-4 text-white-50">
                                <div class="tile-category h-tile-default text-start text-white-50 flex-column mb-3 pt-3 pb-3 ps-3 pe-3">
                                    <div class="d-flex cut-tool-logo mb-2"><img src="assets/images/Intranet/carrier411-logo-gray.png" class="img-fluid" alt="Carrier411">
                                    </div>

                                    <h6 class="style10 text-secondary text-start mb-3">
                                        <font color="#6c757d"><span style="font-size: 14px;">Find &amp; qualify registered freight carriers.</span></font>
                                    </h6>
                                    <div class="d-flex pt-2">
                                        <div class="container-fluid gx-0">
                                            <div class="row gx-3">
                                                <div class="col-lg-6">
                                                    <a href="https://www.carrier411.com/" target="_blank">
                                                        <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button">
                                                            <i class="fas fa-share-square"></i>&nbsp;Open
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">

                                                    <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button" data-bs-toggle="modal" data-bs-target="#modal1"><i class="fas fa-eye"></i>&nbsp;View Details</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 text-white-50 col-1">
                                <div class="tile-category h-tile-default text-start text-white-50 flex-column mb-3 pt-3 pb-3 ps-3 pe-3">
                                    <div class="d-flex cut-tool-logo mb-2"><img src="assets/images/Intranet/DAT_Solutions_Logo.png" class="img-fluid" alt="DAT">
                                    </div>

                                    <h6 class="style10 text-secondary text-start mb-3">
                                        <font color="#6c757d"><span style="font-size: 14px;">Post loads onto online load board.</span></font>
                                    </h6>
                                    <div class="d-flex pt-2">
                                        <div class="container-fluid gx-0">
                                            <div class="row gx-3">
                                                <div class="col-lg-6">
                                                    <a href="https://login.dat.com/login?state=hKFo2SBETnJlYkw1ektrcTQxbWdNMjJfeWU1dGpER3Zkbkl0c6FupWxvZ2luo3RpZNkgSENXelNibHJWS0xDRmJqc3JrdVl5VEkwb0ZoSHUxUTWjY2lk2SBQcHl2b1JHMk5CcGdiQlZmWGpsMUdhZ1RuaTRSWkh4UA&amp;client=PpyvoRG2NBpgbBVfXjl1GagTni4RZHxP&amp;protocol=oauth2&amp;redirect_uri=https:%2F%2Fpower.dat.com%2Fsignin-auth0&amp;response_mode=form_post&amp;response_type=code%20id_token%20token&amp;scope=openid%20profile%20offline_access%20email&amp;nonce=638132235803550326.MmM3ZTVmZjktZTc1MS00Zjg3LWI3ZTQtYzI3MDZkZDlkNjQ1ZDJlYTU5NmYtM2IxYi00MWI0LTkyYWEtN2Q2Njg3Y2JkZDFm&amp;app_name=Power&amp;page_mode=Legacy&amp;audience=https:%2F%2Fprod-api.dat.com&amp;x-client-SKU=ID_NET451&amp;x-client-ver=5.2.1.0&amp;capturedTime=1677626781197" target="_blank">
                                                        <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button">
                                                            <i class="fas fa-share-square"></i>&nbsp;Open
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">

                                                    <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button" data-bs-toggle="modal" data-bs-target="#modal2"><i class="fas fa-eye"></i>&nbsp;View Details</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 text-white-50">
                                <div class="tile-category h-tile-default text-start text-white-50 flex-column mb-3 pt-3 pb-3 ps-3 pe-3">
                                    <div class="d-flex cut-tool-logo mb-2"><img src="assets/images/Intranet/Truckstop_Logo.png" class="img-fluid" alt="Truckstop">
                                    </div>

                                    <h6 class="style10 text-secondary text-start mb-3">
                                        <font color="#6c757d"><span style="font-size: 14px;">Post loads to online load board.</span></font>
                                    </h6>
                                    <div class="d-flex pt-2">
                                        <div class="container-fluid gx-0">
                                            <div class="row gx-3">
                                                <div class="col-lg-6">
                                                    <a href="https://truckstop.com/" target="_blank">
                                                        <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button">
                                                            <i class="fas fa-share-square"></i>&nbsp;Open
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">

                                                    <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button" data-bs-toggle="modal" data-bs-target="#modal2"><i class="fas fa-eye"></i>&nbsp;View Details</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 text-white-50">
                                <div class="tile-category h-tile-default text-start text-white-50 flex-column mb-3 pt-3 pb-3 ps-3 pe-3">
                                    <div class="d-flex cut-tool-logo mb-2"><img src="assets/images/Intranet/Forward_Air_Logo.png" class="img-fluid" alt="ForwardAir">
                                    </div>

                                    <h6 class="style10 text-secondary text-start mb-3"><span style="font-size: 14px;">Quote &amp; book LTL shipments.</span></h6>
                                    <div class="d-flex pt-2">
                                        <div class="container-fluid gx-0">
                                            <div class="row gx-3">
                                                <div class="col-lg-6">
                                                    <a href="https://www.forwardair.com/login/premier" target="_blank">
                                                        <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button">
                                                            <i class="fas fa-share-square"></i>&nbsp;Open
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">

                                                    <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button" data-bs-toggle="modal" data-bs-target="#modal2"><i class="fas fa-eye"></i>&nbsp;View Details</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 text-white-50">
                                <div class="tile-category h-tile-default text-start text-white-50 flex-column mb-3 pt-3 pb-3 ps-3 pe-3">
                                    <div class="d-flex cut-tool-logo mb-2"><img src="assets/images/Intranet/132052600611026787.png" class="img-fluid" alt="BlueGrace/BlueShip">
                                    </div>

                                    <h6 class="style10 text-secondary text-start mb-3"><span style="font-size: 14px;">Quote &amp; book LTL shipments.</span></h6>
                                    <div class="d-flex pt-2">
                                        <div class="container-fluid gx-0">
                                            <div class="row gx-3">
                                                <div class="col-lg-6">
                                                    <a href="https://identity.myblueship.com/Account/Login?ReturnUrl=%2Fconnect%2Fauthorize%2Fcallback%3Fclient_id%3Dblueship4%26redirect_uri%3Dhttps%253A%252F%252Fbeta.myblueship.com%252Fauth-callback%26response_type%3Did_token%2520token%26scope%3Dopenid%2520profile%2520blueship-api%26state%3D9219d853608e4070839b073c7a1cf61a%26nonce%3Dac45e660001f453e848dd0ce55e225c1" target="_blank">
                                                        <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button">
                                                            <i class="fas fa-share-square"></i>&nbsp;Open
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">

                                                    <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button" data-bs-toggle="modal" data-bs-target="#modal2"><i class="fas fa-eye"></i>&nbsp;View Details</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 text-white-50">
                                <div class="tile-category h-tile-default text-start text-white-50 flex-column mb-3 pt-3 pb-3 ps-3 pe-3">
                                    <div class="d-flex cut-tool-logo mb-2"><img src="assets/images/Intranet/BluJay_Logo.png" class="img-fluid" alt="BlueJay">
                                    </div>

                                    <h6 class="style10 text-secondary text-start mb-3">
                                        <font color="#6c757d"><span style="font-size: 14px;">Alsides &amp; Sealed Air TMS system.</span></font>
                                    </h6>
                                    <div class="d-flex pt-2">
                                        <div class="container-fluid gx-0">
                                            <div class="row gx-3">
                                                <div class="col-lg-6">
                                                    <a href="https://app.tms.blujaysolutions.net/agent/webmessages.do?query.current=true" target="_blank">
                                                        <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button">
                                                            <i class="fas fa-share-square"></i>&nbsp;Open
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">

                                                    <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button" data-bs-toggle="modal" data-bs-target="#modal1"><i class="fas fa-eye"></i>&nbsp;View Details</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4 text-white-50">
                                <div class="tile-category h-tile-default text-start text-white-50 flex-column mb-3 pt-3 pb-3 ps-3 pe-3">
                                    <div class="d-flex cut-tool-logo mb-2"><img src="assets/images/Intranet/WPGLogoWeb3.png" class="img-fluid" alt="Linear Foot Calc.">
                                    </div>

                                    <h6 class="style10 text-secondary text-start mb-3">
                                        <font color="#6c757d"><span style="font-size: 14px;">Calculate linear feet for load.</span></font>
                                    </h6>
                                    <div class="d-flex pt-2">
                                        <div class="container-fluid gx-0">
                                            <div class="row gx-3">
                                                <div class="col-lg-6">
                                                    <a href="http://www.wpg.org/Member/LinearFootCalc3.asp" target="_blank">
                                                        <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button">
                                                            <i class="fas fa-share-square"></i>&nbsp;Open
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">

                                                    <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button" data-bs-toggle="modal" data-bs-target="#modal2"><i class="fas fa-eye"></i>&nbsp;View Details</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4 text-white-50">
                                <div class="tile-category h-tile-default text-start text-white-50 flex-column mb-3 pt-3 pb-3 ps-3 pe-3">
                                    <div class="d-flex cut-tool-logo mb-2"><img src="assets/images/Intranet/Creditsafe_Logo.png" class="img-fluid pt-1 pb-3" alt="CreditSafe">
                                    </div>

                                    <h6 class="style10 text-secondary text-start mb-3">
                                        <font color="#6c757d"><span style="font-size: 14px;">Check credit of new customers.</span></font>
                                    </h6>
                                    <div class="d-flex pt-2">
                                        <div class="container-fluid gx-0">
                                            <div class="row gx-3">
                                                <div class="col-lg-6">
                                                    <a href="https://mylogin.creditsafe.com/?ReturnUrl=%2Fconnect%2Fauthorize%2Fcallback%3Fclient_id%3Dupp%26redirect_uri%3Dhttps%253A%252F%252Fapp.creditsafe.com%252Fcallback%26response_type%3Dtoken%2520id_token%26scope%3Dopenid%2520profile%2520upp_api%2520connect_web%2520ubo_api_gateway%2520ubo_elastic_api%26state%3D9ff0ff02415844bd83d225e1bd4712db%26nonce%3Dcff3bc6842f948bd96812cdf619c8b68" target="_blank">
                                                        <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button">
                                                            <i class="fas fa-share-square"></i>&nbsp;Open
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">

                                                    <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button" data-bs-toggle="modal" data-bs-target="#modal1"><i class="fas fa-eye"></i>&nbsp;View Details</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4 text-white-50">
                                <div class="tile-category h-tile-default text-start text-white-50 flex-column mb-3 pt-3 pb-3 ps-3 pe-3">
                                    <div class="d-flex cut-tool-logo mb-2"><img src="assets/images/Intranet/Salesforce_Logo.png" class="img-fluid" alt="SalesForce">
                                    </div>

                                    <h6 class="style10 text-secondary text-start mb-3">
                                        <font color="#6c757d"><span style="font-size: 14px;">Find all information about all accounts.</span></font>
                                    </h6>
                                    <div class="d-flex pt-2">
                                        <div class="container-fluid gx-0">
                                            <div class="row gx-3">
                                                <div class="col-lg-6">
                                                    <a href="https://staff.my.salesforce.com/" target="_blank">
                                                        <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button">
                                                            <i class="fas fa-share-square"></i>&nbsp;Open
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">

                                                    <button class="btn btn-outline-secondary w-100 btn-sm text-nowrap mb-2" type="button" data-bs-toggle="modal" data-bs-target="#modal2"><i class="fas fa-eye"></i>&nbsp;View Details</button>

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
</body>

</html>