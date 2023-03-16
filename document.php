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
    <script src="dmxAppConnect/dmxBootstrap5Tooltips/dmxBootstrap5Tooltips.js" defer></script>
    <script src="dmxAppConnect/dmxRouting/dmxRouting.js" defer></script>
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
    <main class="border-top rounded-0 rounded-1 border-secondary mb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h5 class="text-warning text-uppercase">Documentaion</h5>
                                <h1 class="text-left fw-bold text-light">RWS Documents</h1>
                                <p class="mb-4 text-secondary">Here you can find all the documents needed within RWS, if you need additional information or resources, please contact your manager.</p>
                                <h5 class="text-warning fw-bolder text-center">Select your department:</h5>
                            </div>
                            <div class="row fw-bolder container-fluid">

                                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">

                                    <div class="d-flex">
                                        <button id="btn_operations3" class="btn btn-outline-secondary btn-md lh-1 fw-bolder mb-2 w-100" wappler-command="editContent" is="dmx-button" value="">Operations</button>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                    <div class="d-flex">
                                        <button id="btn_sales1" class="btn btn-md btn-outline-secondary lh-1 fw-bolder mb-2 w-100" wappler-command="editContent" is="dmx-button" value="">Sales</button>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                    <div class="d-flex">
                                        <button id="btn_accounting3" class="btn btn-outline-secondary btn-md lh-1 fw-bolder mb-2 w-100" wappler-command="editContent" is="dmx-button" value="">Accounting</button>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                                    <div class="d-flex">
                                        <button id="btn_technology3" class="btn btn-outline-secondary btn-md lh-1 fw-bolder w-100 mb-2" wappler-command="editContent" is="dmx-button" value="">Technology</button>
                                    </div>
                                </div>
                                flex
                                <div class="mb-4">




                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-lg-6 align-self-center">
                                            <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/:w:/r/personal/johnathan_ragingwolfsolutions_com/_layouts/15/Doc.aspx?sourcedoc=%7B297BCCB9-BC3F-4245-A3A0-178F50150AD2%7D&amp;file=Broker-Carrier%20Agreement_Printable.docx&amp;action=default&amp;mobileredirect=true')">
                                                <div class="d-flex align-items-center w-100p justify-content-center">
                                                    <h1 class="mb-0 text-white-50"><i class="fas fa-link"></i></h1>
                                                </div>
                                                <div class="d-flex flex-column w-100">
                                                    <h3 class="text-light">Broker-Carrier Agreement</h3>
                                                    <p class="mb-0 text-secondary">Click here to open a document.</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 align-self-center">
                                            <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/:w:/r/personal/johnathan_ragingwolfsolutions_com/_layouts/15/Doc.aspx?sourcedoc=%7BB57044A2-E59D-4497-AAAF-463AB38A7EEA%7D&amp;file=OT_Request.docx&amp;action=default&amp;mobileredirect=true')">
                                                <div class="d-flex align-items-center w-100p justify-content-center">
                                                    <h1 class="mb-0 text-white-50"><i class="fas fa-link"></i></h1>
                                                </div>
                                                <div class="d-flex flex-column w-100">
                                                    <h3 class="text-light">Overtime Request</h3>
                                                    <p class="mb-0 text-secondary">Click here to open a document.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/personal/johnathan_ragingwolfsolutions_com/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fjohnathan%5Fragingwolfsolutions%5Fcom%2FDocuments%2FRaging%20Wolf%20Solutions%2FMISC%2E%20DOCUMENTS%20to%20SHARE%2FOnboarding%2FHandbook%20revisions%20included%5F090721%2Epdf&amp;parent=%2Fpersonal%2Fjohnathan%5Fragingwolfsolutions%5Fcom%2FDocuments%2FRaging%20Wolf%20Solutions%2FMISC%2E%20DOCUMENTS%20to%20SHARE%2FOnboarding')">
                                                <div class="d-flex align-items-center w-100p justify-content-center">
                                                    <h1 class="mb-0 text-white-50"><i class="fas fa-link"></i></h1>
                                                </div>
                                                <div class="d-flex flex-column w-100">
                                                    <h3 class="text-light">Employee Handbook</h3>
                                                    <p class="mb-0 text-secondary">Click here to open document.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/:w:/r/personal/johnathan_ragingwolfsolutions_com/_layouts/15/Doc.aspx?sourcedoc=%7BF82AB7E1-CAE8-4A74-9DE6-8B8201B7C64D%7D&amp;file=Employee%20Handbook%20Acknowledgement%20and%20Receipt_Printable.docx&amp;action=default&amp;mobileredirect=true')">
                                                <div class="d-flex align-items-center w-100p justify-content-center">
                                                    <h1 class="mb-0 text-white-50"><i class="fas fa-link"></i></h1>
                                                </div>
                                                <div class="d-flex flex-column w-100">
                                                    <h3 class="text-light lh-1">Employee Handbook Acknowledgement</h3>
                                                    <p class="mb-0 text-secondary">Click here to open document.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">

                                        <div class="col-lg-6 align-self-center">
                                            <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/:w:/r/personal/johnathan_ragingwolfsolutions_com/_layouts/15/Doc.aspx?sourcedoc=%7B4D2D1119-EE4F-4582-8E6A-8BD8E5EB7AB6%7D&amp;file=Employee%20Emergency%20Contacts_Printable.docx&amp;action=default&amp;mobileredirect=true')">
                                                <div class="d-flex align-items-center w-100p justify-content-center">
                                                    <h1 class="mb-0 text-white-50"><i class="fas fa-link"></i></h1>
                                                </div>
                                                <div class="d-flex flex-column w-100">
                                                    <h3 class="text-light">Emergency Contact</h3>
                                                    <p class="mb-0 text-secondary">Click here to open a document.</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/:w:/r/personal/johnathan_ragingwolfsolutions_com/_layouts/15/Doc.aspx?sourcedoc=%7B38EEC441-D87A-438E-A768-03C197C05542%7D&amp;file=Direct%20Deposit%20Authorization_Printable.docx&amp;action=default&amp;mobileredirect=true')">
                                                <div class="d-flex align-items-center w-100p justify-content-center">
                                                    <h1 class="mb-0 text-white-50"><i class="fas fa-link"></i></h1>
                                                </div>
                                                <div class="d-flex flex-column w-100">
                                                    <h3 class="text-light">Direct Deposite Authorization</h3>
                                                    <p class="mb-0 text-secondary">Click here to open document.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://www.irs.gov/pub/irs-pdf/fw4.pdf')">
                                                <div class="d-flex align-items-center w-100p justify-content-center">
                                                    <h1 class="mb-0 text-white-50"><i class="fas fa-link"></i></h1>
                                                </div>
                                                <div class="d-flex flex-column w-100">
                                                    <h3 class="text-light">Federal W-4</h3>
                                                    <p class="mb-0 text-secondary">Click here to open document.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 align-self-center">
                                            <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://tax.ohio.gov/static/forms/employer_withholding/generic/wth-it4-combined.pdf')">
                                                <div class="d-flex align-items-center w-100p justify-content-center">
                                                    <h1 class="mb-0 text-white-50"><i class="fas fa-link"></i></h1>
                                                </div>
                                                <div class="d-flex flex-column w-100">
                                                    <h3 class="text-light">Ohio Income Tax Form</h3>
                                                    <p class="mb-0 text-secondary">Click here to open a document.</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-lg-6 align-self-center">
                                            <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/:w:/r/personal/johnathan_ragingwolfsolutions_com/_layouts/15/Doc.aspx?sourcedoc=%7B5D77C555-EB3C-43F4-A3B2-083FA2BE612A%7D&amp;file=Employee%20Review_Printable.docx&amp;action=default&amp;mobileredirect=true')">
                                                <div class="d-flex align-items-center w-100p justify-content-center">
                                                    <h1 class="mb-0 text-white-50"><i class="fas fa-link"></i></h1>
                                                </div>
                                                <div class="d-flex flex-column w-100">
                                                    <h3 class="text-light">Employee Review</h3>
                                                    <p class="mb-0 text-secondary">Click here to open a document.</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/:w:/r/personal/johnathan_ragingwolfsolutions_com/_layouts/15/Doc.aspx?sourcedoc=%7BC27E4B03-9FA6-41D9-B635-9BAD567F73BE%7D&amp;file=Employee%20Disciplanary%20Action%20Form_Printable.docx&amp;action=default&amp;mobileredirect=true')">
                                                <div class="d-flex align-items-center w-100p justify-content-center">
                                                    <h1 class="mb-0 text-white-50"><i class="fas fa-link"></i></h1>
                                                </div>
                                                <div class="d-flex flex-column w-100">
                                                    <h3 class="text-light">Employee Disciplanary Action Form</h3>
                                                    <p class="mb-0 text-secondary">Click here to open document.</p>
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