<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Untitled Document</title>

    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Muli&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="dmxAppConnect/dmxBootstrap4TableGenerator/dmxBootstrap4TableGenerator.css">
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer=""></script>
    <script src="dmxAppConnect/dmxBootstrap4Collapse/dmxBootstrap4Collapse.js" defer=""></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxAnimateCSS/animate.min.css">
    <script src="dmxAppConnect/dmxAnimateCSS/dmxAnimateCSS.js" defer=""></script>

</head>

<body is="dmx-app" id="index" class="body-bg">
    <!-- Wappler include head-page="index.php" appconnect="local" is="dmx-app" bootstrap5="local" fontawesome_5="cdn" jquery_slim_35="local" components="{dmxBootstrap5Navigation:{}}" id="index" -->
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
                    <dmx-api-datasource id="api1" is="dmx-fetch" url="https://staff.my.salesforce-sites.com/services/apexrest/Loads"></dmx-api-datasource>
                    <table class="table table-sm table-hover style10 table-dark">
                        <thead class="style3">
                            <tr class="text-dark">
                                <th class="d-none">Load ID</th>
                                <th class="text-h3 text-secondary">Load Reference</th>
                                <th class="text-h3 text-secondary">Customer</th>
                                <th class="text-h3 text-secondary">Total Customer Amount</th>
                                <th class="text-h3 text-secondary">Carrier (OLD)</th>
                                <th class="text-h3 text-secondary">Carrier (NEW)</th>
                                <th class="text-h3 text-secondary">Total Carrier Amount</th>
                                <th class="text-h3 text-secondary">Created</th>
                                <th class="text-h3 text-secondary">Status</th>
                            </tr>
                        </thead>
                        <tbody is="dmx-repeat" dmx-generator="bs4table" dmx-bind:repeat="api1.data.top(100)" id="tableRepeat1" class="style1 text-body">
                            <tr>
                                <td dmx-text="Name" class="d-none"></td>
                                <td dmx-text="Load_Reference__c"></td>
                                <td dmx-text="Customer_Name__c"></td>
                                <td dmx-text="Total_Customer_Amount__c.formatCurrency(&quot;$&quot;,&quot;.&quot;,&quot;,&quot;,&quot;2&quot;)"></td>
                                <td dmx-text="Carrier_Name__c"></td>
                                <td dmx-text="Carrier_Contact_Name__c"></td>
                                <td dmx-text="Total_Carrier_Amount__c.formatCurrency(&quot;$&quot;,&quot;.&quot;,&quot;,&quot;,&quot;2&quot;)"></td>
                                <td dmx-text="CreatedDate.toDate()"></td>
                                <td dmx-text="FreightTM__Status__c"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>