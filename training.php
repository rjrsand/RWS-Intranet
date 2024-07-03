<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Video Trainings</title>

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
    <script src="dmxAppConnect/dmxBootstrap5Tooltips/dmxBootstrap5Tooltips.js" defer></script>
    <script src="dmxAppConnect/dmxRouting/dmxRouting.js" defer></script>

    <!-- Firebase Setup -->
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-storage.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-firestore.js"></script>

    <script src="js/univ.js"></script>

    <link rel="icon" href="icons/favicon.ico">
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
                                    <td dmx-text="data_detail1.data.firstName+' '+data_detail1.data.lastName"></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal">Department</th>
                                    <td>{{data_detail1.data.department}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal">Supervisor</th>
                                    <td>{{data_detail1.data.supervisor}}<br></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal">Title</th>
                                    <td>{{data_detail1.data.title}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal">Office Phone<br></th>
                                    <td dmx-on:click="browser1.writeTextToClipboard(data_detail1.data.officePhone);browser1.alert('Copied to clipboard!')" class="tile-hover">{{data_detail1.data.officePhone}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal">Mobile Phone</th>
                                    <td dmx-on:click="browser1.writeTextToClipboard(data_detail1.data.mobilePhone);browser1.alert('Copied to clipboard!')" class="tile-hover">{{data_detail1.data.mobilePhone}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal">Email</th>
                                    <td class="tile-hover" dmx-on:click="browser1.writeTextToClipboard(data_detail1.data.emailAddress);browser1.alert('Copied to clipboard!')">{{data_detail1.data.emailAddress}}<i class="far fa-copy"></i></td>
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
            <div class="row">
                <div class="col">
                    <div class="container">
                        <div class="row">



                            <div class="col-lg-12">
                                <h5 class="text-warning text-uppercase"><span dmx-text="department">n/a</span> Team</h5>
                                <h1 class="text-left fw-bold text-light">Training Resources</h1>
                                <p class="mb-4 text-secondary">Here you can find video trainings needed within RWS, if you need additional information or resources, please contact your manager.</p>

                            </div>
                            <div class="col">
                                <div class="row justify-content-between mb-4">
                                    <div class="col-4">
                                        <div class="d-flex">
                                            <div class="d-flex flex-row-reverse position-relative w-100">
                                                <input id="filter_videos_input" name="text1" type="text" class="form-control bg-light" placeholder="Search this list..." is="dmx-input" value="">
                                                <i class="fa fa-search fa-fw position-absolute top-50 translate-middle-y pe-4"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="d-flex justify-content-between">

                                            <div class="d-flex align-items-center">
                                                <h5 class="text-nowrap mb-0 me-2 text-warning">Selected Department:&nbsp;</h5>
                                                <select id="select_dept" class="form-select bg-transparent btn-outline-secondary fw-bolder mb-0 pt-1 pb-1">
                                                    <option class="text-dark" value="All">All</option>
                                                    <option class="text-dark" value="Operations">Operations</option>
                                                    <option class="text-dark" value="Sales">Sales</option>
                                                    <option class="text-dark" value="Accounting">Accounting</option>
                                                    <option class="text-dark" value="Technology">Technology</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12" id="documents_container">
                                <div class="row">
                                    <div class="col-lg-6 align-self-center dept-operations">
                                        <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/:v:/g/personal/johnathan_ragingwolfsolutions_com/EeMBwIQS-bdMlGMYKtoq4TUBDXr099IRN_0m8kIUoMs8kQ?e=Nv6WHE')">
                                            <div class="d-flex align-items-center w-100p justify-content-center">
                                                <h1 class="mb-0 text-white-50"><i class="far fa-play-circle"></i></h1>
                                            </div>
                                            <div class="d-flex flex-column w-100 document-title">
                                                <h3 class="text-light">Invoice Tutorial</h3>
                                                <p class="mb-0 text-white-50">Click here to open the video.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 align-self-center dept-operations">
                                        <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/:v:/g/personal/johnathan_ragingwolfsolutions_com/ERhfcnwwTWRJt85vjQyWS7wBb4Rg5Xp57uoy3UEgiVLRxw?e=6Eiemd')">
                                            <div class="d-flex align-items-center w-100p justify-content-center">
                                                <h1 class="mb-0 text-white-50"><i class="far fa-play-circle"></i></h1>
                                            </div>
                                            <div class="d-flex flex-column w-100 document-title">
                                                <h3 class="text-light">POD Tutorial</h3>
                                                <p class="mb-0 text-white-50">Click here to open the video.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 align-self-center dept-operations">
                                        <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/:v:/g/personal/johnathan_ragingwolfsolutions_com/EfjAxmSvwP5KgnYZFctRrzIBL3AGM0dgg5GGxE1POtZSlg?e=5cVKHy')">
                                            <div class="d-flex align-items-center w-100p justify-content-center">
                                                <h1 class="mb-0 text-white-50"><i class="far fa-play-circle"></i></h1>
                                            </div>
                                            <div class="d-flex flex-column w-100 document-title">
                                                <h3 class="text-light">Shipping Order Tutorial</h3>
                                                <p class="mb-0 text-white-50">Click here to open the video.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 align-self-center dept-operations">
                                        <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="">
                                            <div class="d-flex align-items-center w-100p justify-content-center">
                                                <h1 class="mb-0 text-white-50"><i class="far fa-play-circle"></i></h1>
                                            </div>
                                            <div class="d-flex flex-column w-100 document-title">
                                                <h3 class="text-light">New Customer/Carrier Tutorial</h3>
                                                <p class="mb-0 text-white-50">Click here to open the video.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 align-self-center dept-operations">
                                        <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/:v:/g/personal/johnathan_ragingwolfsolutions_com/Ed283RDADtBCkN5W1nLFYP4B_QQvI2esOAQKFdKpaemg_A?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJTdHJlYW1XZWJBcHAiLCJyZWZlcnJhbFZpZXciOiJTaGFyZURpYWxvZy1MaW5rIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXcifX0%3D&amp;e=ZjWZJf')">
                                            <div class="d-flex align-items-center w-100p justify-content-center">
                                                <h1 class="mb-0 text-white-50"><i class="far fa-play-circle"></i></h1>
                                            </div>
                                            <div class="d-flex flex-column w-100 document-title">
                                                <h3 class="text-light">Load Tracking Setup &amp; Update Tutorial</h3>
                                                <p class="mb-0 text-white-50">Click here to open the video.</p>
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

    <?php include 'footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('filter_videos_input');
        
        searchInput.addEventListener('input', function() {
        const searchTerm = searchInput.value.toLowerCase();
        const documentTitles = document.querySelectorAll('.document-title');
        
        for (const title of documentTitles) {
        const documentTitle = title.textContent.toLowerCase();
        const parentDiv = title.closest('.col-lg-6');
        
        if (documentTitle.includes(searchTerm)) {
        parentDiv.style.display = 'block';
        } else {
        parentDiv.style.display = 'none';
        }
        }
        });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const selectDept = document.getElementById('select_dept');
            const documentRows = document.querySelectorAll('.row > .col-lg-6');
    
            function filterDocuments() {
                const selectedDept = selectDept.value;

                documentRows.forEach(row => {
                    if (row.classList.contains('dept-all')) {
                        row.style.display = 'block';
                    } else if (selectedDept === 'All' || row.classList.contains(`dept-${selectedDept.toLowerCase()}`)) {
                        row.style.display = 'block';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }
    
            selectDept.addEventListener('change', filterDocuments);
            filterDocuments();
        });
    </script>
    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>