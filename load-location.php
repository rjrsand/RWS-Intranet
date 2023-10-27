<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>The Wolves Den | Raging Wolf Solutions</title>

    <link rel="icon" href="icons/favicon.ico">

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
    <script src="https://maps.googleapis.com/maps/api/js?callback=Function.prototype&amp;key=&lt;p class=&quot;mb-4 text-secondary&quot;&gt;Here you can find helpful tools and resources that are commonly used in your department at Raging Wolf Solutions. If you need any additional information or resources, please contact your manager.&lt;/p&gt;"></script>
    <script src="dmxAppConnect/dmxGoogleMaps/dmxGoogleMaps.js" defer></script>
    <script src="dmxAppConnect/dmxStateManagement/dmxStateManagement.js" defer></script>
</head>

<body is="dmx-app" id="index" class="body-bg" onload="loadUserData();">
    <dmx-query-manager id="loadlocation"></dmx-query-manager>
    <dmx-value id="department"></dmx-value>
    <dmx-value id="lastName"></dmx-value>
    <dmx-value id="firstName"></dmx-value>
    <div is="dmx-browser" id="browser1"></div>

    <?php include 'navbar.php'; ?>

    <main class="border-top rounded-0 rounded-1 border-secondary pt-5 pb-3">
        <div class="container">
            <div class="row min-vh-75">
                <div class="col">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 text-center">
                                        <div class="d-flex flex-column">
                                            <h5 class="text-warning text-uppercase">Raging Wolf Solutions</h5>
                                            <h1 class="text-left fw-bold text-light mb-3">Shipment Location Update</h1>

                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-4">
                                    <div class="col-lg-8">
                                        <dmx-google-maps id="maps1"></dmx-google-maps>
                                    </div>
                                </div>

                                <div class="row justify-content-center mb-4">
                                    <div class="col-auto">

                                        <div class="table-responsive" style="min-width: 400px;">
                                            <table class="table text-secondary">
                                                <tbody>
                                                    <tr>
                                                        <td>Coordinates: </td>
                                                        <td class="text-light">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Last Update: </td>
                                                        <td class="text-light">---</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Load Reference:</td>
                                                        <td class="text-light">---</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-4">
                                    <div class="col-lg-7">
                                        <p class="text-secondary text-center">For more detailed information, please contact support@ragingwolfsolutions.com</p>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterInput = document.getElementById('filter_index_input');
            const cardContainers = document.querySelectorAll('.card-container');

            filterInput.addEventListener('input', function(event) {
                const filterText = event.target.value.toLowerCase();

                cardContainers.forEach(function(cardContainer) {
                const cardTitle = cardContainer.querySelector('h3').textContent.toLowerCase();
                const cardDescription = cardContainer.querySelector('p').textContent.toLowerCase();
                
                if (cardTitle.includes(filterText) || cardDescription.includes(filterText)) {
                    cardContainer.style.display = 'block';
                } else {
                    cardContainer.style.display = 'none';
                }
                });
            });
        });

    </script>
</body>

</html>