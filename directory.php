<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Directory | Raging Wolf Solutions</title>

    <link rel="icon" href="icons/favicon.ico">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
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

    <!-- Firebase Setup -->
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-storage.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-firestore.js"></script>

    <script src="js/univ.js"></script>

</head>

<body is="dmx-app" id="directory" class="body-bg" onload="loadUserData();">
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

    <?php include 'navbar.php'; ?>

    <main class="border-top rounded-0 rounded-1 border-secondary mb-5 pt-5">
        <div class="container">
            <div class="row min-vh-75">
                <div class="col ">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="d-flex flex-column">
                                    <h5 class="text-warning text-uppercase"><span dmx-text="department">n/a</span> Team</h5>
                                    <h1 class="text-left fw-bold text-light">Company Directory</h1>
                                    <p class="mb-4 text-secondary">Use the resources below to learn important information about the Raging Wolf Solutions team.</p>
                                </div>
                            </div>
                            <div class="col align-self-end">
                                <div class="d-flex justify-content-end align-items-end">
                                    <div class="d-flex flex-row-reverse position-relative mb-4">
                                        <input id="filter_contacts_input" name="text1" type="text" class="form-control bg-light" placeholder="Search this list..." is="dmx-input" value="">
                                        <i class="fa fa-search fa-fw position-absolute top-50 translate-middle-y pe-4"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container" id="contacts">
                        <div class="row">
                            <div class="col-12 col-xl-4 col-xxl-4 col-sm-12 col-md-6" dmx-repeat:directory="jsonDS1.data">
                                <div class="d-flex justify-content-between tile-category mb-3 pt-3 pb-3 ps-3 pe-3">
                                    <div class="d-flex flex-column text-truncate">
                                        <h5 class="text-light"><span dmx-text="firstName">Rob</span>&nbsp;<span dmx-text="lastName">Sandlin</span></h5>
                                        <h6 class="text-secondary"><span dmx-text="department">Operations/IT</span>,&nbsp;<span dmx-text="title">Specialist</span></h6>
                                        <h6 class="tile-hover text-secondary" dmx-on:click="browser1.writeTextToClipboard(data_detail1.data.emailAddress);browser1.alert('Copied to clipboard!')"><span dmx-text="emailAddress">robs@ragingwolfsolutions.com</span> <i class="far fa-copy"></i></h6><span dmx-text="emailAddress">robs@ragingwolfsolutions.com</span>&nbsp;<i class="far fa-copy"></i></h6>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <button id="btn1" class="btn btn-outline-warning border-0 pt-0 pb-0 ps-1 pe-1 text-nowrap fw-lighter" dmx-on:click="modal1.show();data_detail1.select(data_detail1.data.emailAddress)">More <i class="fas fa-external-link-alt fa-sm"></i></button>
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
    const filterInput = document.getElementById('filter_contacts_input');
    const contactsContainer = document.getElementById('contacts');

    filterInput.addEventListener('input', function() {
        const filterValue = filterInput.value.toLowerCase();
        const contactCards = contactsContainer.querySelectorAll('.col-12.col-xl-4.col-xxl-4.col-sm-12.col-md-6');

        for (const contactCard of contactCards) {
        const nameElement = contactCard.querySelector('h5.text-light');
        const nameText = nameElement.textContent.toLowerCase();

        if (nameText.includes(filterValue)) {
            contactCard.style.display = '';
        } else {
            contactCard.style.display = 'none';
        }
        }
    });
    });

    </script>
</body>
<!--
"emailAddress": "johnathon@ragingwolfsolutions.com",
"firstName": "Johnathan",
"lastName": "Wierzbicki",
"department": "I.T.",
"supervisor": "Scott Brownfield",
"title": "Manager",
"officePhone": "330-425-1400 ext. 07",
"mobilePhone": "330-687-7662"
-->

</html>