<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Untitled Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="dmxAppConnect/dmxAutocomplete/dmxAutocomplete.css" />
    <script src="dmxAppConnect/dmxAutocomplete/dmxAutocomplete.js" defer></script>
</head>

<body is="dmx-app" id="trakingph3">
    <header></header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center mt-5 mb-2">
                        <button id="btn1" class="btn w-50 border">
                            <i class="fas fa-arrow-left fa-fw me-2"></i>Return Home</button>

                    </div>
                    <div class="d-flex justify-content-center mt-4 mb-4">
                        <h1>Load Summary</h1>
                    </div>
                    <div class="d-flex mb-3">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row" class="w-50">Load ID:</th>
                                    <td class="w-50 fw-bold">Customer PO:</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="w-50">From:</th>
                                    <td class="w-50 fw-bold">To:</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="w-50">Current Location:</th>
                                    <td class="w-50 fw-bold">Approx. Miles Remaining:</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center fw-bold mt-3" id="map">Place Map here</div>
                </div>
            </div>
        </div>
    </main>
    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>