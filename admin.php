<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Team Raging Wolf Solutions</title>

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

    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>

    <!-- Firebase Setup -->
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-storage.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-firestore.js"></script>

    <script src="js/univ.js"></script>

    <link rel="stylesheet" href="dmxAppConnect/dmxBootstrap5TableGenerator/dmxBootstrap5TableGenerator.css" />
</head>

<body is="dmx-app" id="index" class="body-bg" onload="loadUserData();">
    <div is="dmx-browser" id="browser1"></div>
    <dmx-data-detail id="data_detail1" dmx-bind:data="jsonDS1.data" key="title"></dmx-data-detail>
    <dmx-json-datasource id="jsonDS1" is="dmx-serverconnect" url="admincr.json"></dmx-json-datasource>
    <div class="modal fw-bolder" id="modal1" is="dmx-bs5-modal" tabindex="-1" data-bs-toggle="modal">
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
                                    <th scope="row" class="fw-normal">Username:</th>
                                    <td class="text-light" dmx-on:click="browser1.writeTextToClipboard(data_detail1.data.username);browser1.alert('Copied to clipboard!')">{{data_detail1.data.username}}&nbsp;<i class="far fa-copy"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal">Password:</th>
                                    <td class="text-light" dmx-on:click="browser1.writeTextToClipboard(data_detail1.data.password);browser1.alert('Copied to clipboard!')">{{data_detail1.data.password}}&nbsp;<i class="far fa-copy"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="fw-normal">Documentation Link:</th>
                                    <td class="text-light" dmx-on:click="browser1.writeTextToClipboard(data_detail1.data.docsUrl);browser1.alert('Copied to clipboard!')">{{data_detail1.data.docsUrl}}&nbsp;<i class="far fa-copy"></i></td>
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
    <dmx-value id="department"></dmx-value>
    <dmx-value id="lastName"></dmx-value>
    <dmx-value id="firstName"></dmx-value>
    <dmx-value id="role"></dmx-value>


    <?php include 'navbar.php'; ?>

    <main class="border-top rounded-0 rounded-1 border-secondary pt-5 pb-3">

        <div class="container">
            <div class="row min-vh-75">
                <div class="col">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="d-flex flex-column">
                                            <h5 class="text-warning text-uppercase"><span dmx-text="department">n/a</span> Team</h5>
                                            <h1 class="text-left fw-bold text-light">Welcome to RWS Admin</h1>
                                            <p class="mb-4 text-secondary">Here you can find all the helpful tools and resources that are used to access and dictate resource useability and security all accross RWS. Documentation links are also provided.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 h-tile-default tile-hover" dmx-on:click="browser1.goto('https://www.amplenote.com/notes/bcaa9814-2cbf-11ef-a5c4-b247aed906a4')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-id-card-alt"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">Credentials</h3>

                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credentials for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center card-container">
                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-ban"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light" dmx-on:click="browser1.goto('https://security.microsoft.com/tenantAllowBlockList?viewid=Sender&tid=8368b021-fc4f-4c05-ad66-58909315ad20')">Allow/Block Lists - Email</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr1">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">This allows access to the Allow/Block email list for Microsoft Defender, as well as the Quarentine list.</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/personal/johnathan_ragingwolfsolutions_com/_layouts/15/onedrive.aspx?id=%2Fsites%2FRagingWolf%2DIT%2FShared%20Documents%2FGeneral%2FAdmin&amp;listurl=https%3A%2F%2Fnetorg5121535%2Esharepoint%2Ecom%2Fsites%2FRagingWolf%2DIT%2FShared%20Documents&amp;viewid=18b87225%2Dd2cb%2D4a93%2Daf6f%2Dd81cc060a1b5')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-sun"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">Apollo</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr2">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-tag"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">Avery Design &amp; Print</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr3">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-paint-brush"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">Canva</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr4">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-mouse"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">ClickUp</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr5">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/personal/johnathan_ragingwolfsolutions_com/_layouts/15/onedrive.aspx?id=%2Fsites%2FRagingWolf%2DIT%2FShared%20Documents%2FGeneral%2FAdmin&amp;listurl=https%3A%2F%2Fnetorg5121535%2Esharepoint%2Ecom%2Fsites%2FRagingWolf%2DIT%2FShared%20Documents&amp;viewid=18b87225%2Dd2cb%2D4a93%2Daf6f%2Dd81cc060a1b5')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-directions"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">Custom Google Map Views</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr6">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-server"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">Domain/DNS Management</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr7">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/personal/johnathan_ragingwolfsolutions_com/_layouts/15/onedrive.aspx?id=%2Fsites%2FRagingWolf%2DIT%2FShared%20Documents%2FGeneral%2FAdmin&amp;listurl=https%3A%2F%2Fnetorg5121535%2Esharepoint%2Ecom%2Fsites%2FRagingWolf%2DIT%2FShared%20Documents&amp;viewid=18b87225%2Dd2cb%2D4a93%2Daf6f%2Dd81cc060a1b5')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-football-ball"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">Football Pool</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr8">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fab fa-google"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">Google Ads</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr9">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/personal/johnathan_ragingwolfsolutions_com/_layouts/15/onedrive.aspx?id=%2Fsites%2FRagingWolf%2DIT%2FShared%20Documents%2FGeneral%2FAdmin&amp;listurl=https%3A%2F%2Fnetorg5121535%2Esharepoint%2Ecom%2Fsites%2FRagingWolf%2DIT%2FShared%20Documents&amp;viewid=18b87225%2Dd2cb%2D4a93%2Daf6f%2Dd81cc060a1b5')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="far fa-file"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">Indeed</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr10">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-user-alt"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">Koala</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr11">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/personal/johnathan_ragingwolfsolutions_com/_layouts/15/onedrive.aspx?id=%2Fsites%2FRagingWolf%2DIT%2FShared%20Documents%2FGeneral%2FAdmin&amp;listurl=https%3A%2F%2Fnetorg5121535%2Esharepoint%2Ecom%2Fsites%2FRagingWolf%2DIT%2FShared%20Documents&amp;viewid=18b87225%2Dd2cb%2D4a93%2Daf6f%2Dd81cc060a1b5')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-envelope"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">MailFlow</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr12">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-server"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">ProofPoint Essentials</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr13">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/personal/johnathan_ragingwolfsolutions_com/_layouts/15/onedrive.aspx?id=%2Fsites%2FRagingWolf%2DIT%2FShared%20Documents%2FGeneral%2FAdmin&amp;listurl=https%3A%2F%2Fnetorg5121535%2Esharepoint%2Ecom%2Fsites%2FRagingWolf%2DIT%2FShared%20Documents&amp;viewid=18b87225%2Dd2cb%2D4a93%2Daf6f%2Dd81cc060a1b5')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-mail-bulk"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">ShippingEasy</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr14">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-network-wired"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">Spectrum</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr15">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/personal/johnathan_ragingwolfsolutions_com/_layouts/15/onedrive.aspx?id=%2Fsites%2FRagingWolf%2DIT%2FShared%20Documents%2FGeneral%2FAdmin&amp;listurl=https%3A%2F%2Fnetorg5121535%2Esharepoint%2Ecom%2Fsites%2FRagingWolf%2DIT%2FShared%20Documents&amp;viewid=18b87225%2Dd2cb%2D4a93%2Daf6f%2Dd81cc060a1b5')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-envelope"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">Support Email</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr16">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-inbox"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">WarmUp Inbox</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr17">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('https://netorg5121535-my.sharepoint.com/personal/johnathan_ragingwolfsolutions_com/_layouts/15/onedrive.aspx?id=%2Fsites%2FRagingWolf%2DIT%2FShared%20Documents%2FGeneral%2FAdmin&amp;listurl=https%3A%2F%2Fnetorg5121535%2Esharepoint%2Ecom%2Fsites%2FRagingWolf%2DIT%2FShared%20Documents&amp;viewid=18b87225%2Dd2cb%2D4a93%2Daf6f%2Dd81cc060a1b5')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fas fa-server"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">WordPress</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr18">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center card-container">

                                <div class="d-flex tile-category mb-3 pt-3 pb-3 ps-2 pe-2 align-items-center h-tile-default tile-hover" dmx-on:click="browser1.goto('')">
                                    <div class="d-flex align-items-center w-100p justify-content-center">
                                        <h1 class="mb-0 text-white-50"><i class="fab fa-youtube"></i></h1>
                                    </div>
                                    <div class="d-flex flex-column w-100">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="text-light">YouTube</h3>
                                            <button class="btn ml-auto border border-white-50 text-white-50 bg-transparent btn-secondary d-flex align-items-center h-75" dmx-on:click="modal1.show();data_detail1.set(jsonDS1.data, '{{title}}');" dmx-bind:id="{{title}}" id="cr19">View Details</button>
                                        </div>
                                        <p class="mb-0 text-secondary">View all necessary login credential for every account associated with RWS.</p>
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
            setTimeout(() => {
                const filterInput = document.getElementById('filter_index_input');
                const cardContainers = document.querySelectorAll('.card-container');

                if (filterInput) {
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
                }
        }, 100);
    });

    </script>
</body>

</html>