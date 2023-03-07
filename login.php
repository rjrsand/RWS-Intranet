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
    <link rel="stylesheet" href="css/intranet.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer></script>

</head>

<body is="dmx-app" id="index" class="body-bg">
    <!-- Wappler include head-page="index.php" appConnect="local" is="dmx-app" bootstrap5="local" fontawesome_5="cdn" jquery_slim_35="local" components="{dmxBootstrap5Navigation:{}}" -->
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

    <section class="border-top rounded-1 rounded-0 border-secondary min-vh-75 bg-dark">
        <img src="assets/images/section-modal-bg-top-stone.png" class="w-100">
        <div class="container modules-container mt-auto mb-auto">
            <div class="row">

                <div class="col-md-12">
                    <div class="row justify-content-center">
                        <div class="module-card border rounded-0 rounded-1 border-secondary mt-3 mb-3 ms-3 me-3 pt-4 pb-4 ps-3 pe-3 col-10">
                            <h4 class="text-light lh-sm text-center text-uppercase mt-2 mb-3">Log in</h4>
                            <div class="row justify-content-center">
                                <div class="col-7">
                                    <div class="d-flex flex-column">

                                        <p class="text-center mb-4 text-light">Access is restricted to Raging Wolf Solutions employees.</p>
                                        <form id="login_microsoft" method="post" action="https://usebasin.com/f/dd70a6a52004">
                                            <div class="row justify-content-center">
                                                <div class="col-md-9 text-center"><button id="btn4" class="btn module-cta-btn btn-warning btn-lg mb-3 ps-5 pe-5" type="submit">Log In With Microsoft&nbsp;<i class="fab fa-windows"></i></button>
                                                    <p class="text-center mb-4 text-white-50">Having trouble logging in? Contact us.</p>
                                                </div>
                                            </div>
                                        </form>
                                        <form id="onboarding">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group md-3 text-light mb-2"> <label for="firstName" class="form-label">First Name</label>
                                                        <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="input1_help" placeholder="Your first name">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group md-3 text-light col-md-12 mb-2"> <label for="lastName" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="input1_help" placeholder="Your last name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group md-3 text-light col"> <label for="input1" class="form-label">Department</label>
                                                <select id="department" class="form-select text-secondary">
                                                    <option value="">Make a selection...</option>
                                                    <option value="operations">Operations</option>
                                                    <option value="sales">Sales</option>
                                                    <option value="accounting">Accounting</option>
                                                    <option value="technology">I.T.</option>
                                                </select>
                                                <small id="input1_help" class="form-text text-muted">If you are unsure of which department to choose, contact your manager.</small>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>