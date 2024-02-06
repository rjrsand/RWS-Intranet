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
    <main class="min-vh-100 bg-dark text-warning">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center mt-5 pb-4">
                        <a href="https://www.ragingwolfsolutions.com" class="w-50"><button id="btn1" class="btn btn-outline-warning w-100">
                                <i class="fas fa-arrow-left fa-fw me-2"></i>Return Home
                            </button></a>


                    </div>
                    <div class="d-flex justify-content-center mt-4 mb-4">
                        <h1>Load Summary</h1>
                    </div>
                    <div class="d-flex mb-3">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row" class="w-50 text-secondary">Load ID:&nbsp;<span>{Load_Reference__c}</span></th>
                                    <td class="w-50 fw-bold text-secondary">Customer PO:&nbsp;<span>{PO__c}</span></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="w-50 text-secondary">From:&nbsp;<span>{Pickup_Name_Address__c}</span></th>
                                    <td class="w-50 fw-bold text-secondary">To:&nbsp;<span>{Deliver_Name_Address__c}</span></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="w-50 text-secondary">Current Location:&nbsp;<span>{Location__c}</span></th>
                                    <td class="w-50 fw-bold text-secondary">Approx. Miles Remaining:&nbsp;<span>{Distance}</span></td>
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
                    <div id="mapCanvas" style="height: 400px; width: 100%;"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center mt-5 pb-4">
                        <a href="https://www.ragingwolfsolutions.com" class="w-50"><button id="btn2" class="btn btn-outline-warning w-100">
                                <i class="fas fa-arrow-left fa-fw me-2"></i>Return Home
                            </button></a>


                    </div>
                </div>
            </div>
        </div>


    </main>
    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>