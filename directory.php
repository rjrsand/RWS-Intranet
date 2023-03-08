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
</head>

<body is="dmx-app" id="directory" class="body-bg">

    <div class="modal fw-bolder" id="modal1" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-warning border-bottom border-secondary border-2">
                    <h5 class="modal-title text-light" id="Details">Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark text-warning">
                    <div class="container">
                        <table class="table text-warning">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
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
    <header></header>
    <main class="mt-5 mb-5">
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
                    <div class="container text-center">
                        <table class="table text-warning table-bordered border-secondary table-sm">
                            <thead class="fw-bolder">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone Number</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-warning">Scott B.</th>
                                    <td class="text-warning">330-592-6739</td>
                                    <td class="btn text-warning">scottb@raginwolfsolutions.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Rich M.</th>
                                    <td>330-858-8280</td>
                                    <td class="btn text-warning">richm@ragingwolfsolutions.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jenn R.</th>
                                    <td>216-798-6847</td>
                                    <td class="btn text-warning">accounting@ragingwolfsolutions.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ari V.</th>
                                    <td>330-860-7234</td>
                                    <td class="btn text-warning">arianna@ragingwolfsolutions.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Zak C.</th>
                                    <td>330-840-9522</td>
                                    <td class="btn text-warning">zakc@ragingwolfsolutions.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Brandon B.</th>
                                    <td>330-592-6902</td>
                                    <td class="btn text-warning">brandon@ragingwolfsolutions.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Rob S.</th>
                                    <td>812-314-1684</td>
                                    <td class="btn text-warning">robs@ragingwolfsolutions.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alaura R.</th>
                                    <td>330-931-1800</td>
                                    <td class="btn text-warning">alaura@ragingwolfsolutions.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Johnathan W.</th>
                                    <td>330-687-7662</td>
                                    <td class="btn text-warning">johnathan@ragingwolfsolutions.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <footer></footer>
    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>