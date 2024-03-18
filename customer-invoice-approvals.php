<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Customer Invoice Approvals | Raging Wolf Solutions</title>

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

    <script src="js/customer-invoice-approvals.js"></script>

    <script src="dmxAppConnect/dmxBootstrap4Navigation/dmxBootstrap4Navigation.js" defer></script>
</head>

<body is="dmx-app" id="index" class="body-bg" onload="loadUserData();">

    <?php include 'navbar.php'; ?>

    <section class="border-top rounded-1 rounded-0 border-secondary min-vh-75 bg-dark pb-5">
        <img src="assets/images/section-modal-bg-top-stone.png" class="w-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="d-flex flex-column">
                        <h5 class="text-warning text-uppercase"><span dmx-text="department">n/a</span> Team</h5>
                        <h1 class="text-left fw-bold text-light">Customer Invoice Approvals</h1>
                        <p class="mb-4 text-secondary">Explore past orders using this live and up-to-date information from Salesforce.</p>
                    </div>
                </div>
                <div class="col align-self-end">
                    <div class="d-flex justify-content-end align-items-end">
                        <div class="d-flex flex-row-reverse position-relative mb-4">
                            <input id="filter_loads_input" name="text1" type="text" class="form-control bg-light" placeholder="Search load number..." is="dmx-input" value="">
                            <i class="fa fa-search fa-fw position-absolute top-50 translate-middle-y pe-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container modules-container mt-auto mb-auto">
            <div class="row">
                <div class="col-md-12">
                    <dmx-api-datasource id="api1" is="dmx-fetch" url="https://staff.my.salesforce-sites.com/services/apexrest/Loads"></dmx-api-datasource>
                    <dmx-api-datasource id="api2" is="dmx-fetch" url="https://staff.my.salesforce-sites.com/services/apexrest/PrimarySalesRep"></dmx-api-datasource>
                    <div style="height: 480px; overflow-y: auto;">
                        <table id="loads_table" class="table table-hover table-sm table-dark">
                            <thead>
                                <tr>
                                    <th class="d-none">Load ID</th>
                                    <th class="ps-2 pe-2">Load #</th>
                                    <th>Customer</th>
                                    <th>Customer Rate</th>
                                    <th>Carrier&nbsp;</th>
                                    <th>Carrier Rate</th>
                                    <th>Created</th>
                                    <th>Status</th>
                                    <th class="visually-hidden">Primary Slales Rep.</th>
                                </tr>
                            </thead>
                            <tbody is="dmx-repeat" dmx-generator="bs5table" dmx-bind:repeat="api1.data.top(700)" id="tableRepeat2">
                                <tr>
                                    <td dmx-text="Name" class="d-none"></td>
                                    <td dmx-text="Load_Reference__c" class="ps-2 pe-2"></td>
                                    <td dmx-text="Customer_Name__c"></td>
                                    <td dmx-text="Total_Customer_Amount__c.formatCurrency(&quot;$&quot;,&quot;.&quot;,&quot;,&quot;,&quot;2&quot;)"></td>
                                    <td dmx-text="Carrier_Contact_Name__c"></td>
                                    <td dmx-text="Total_Carrier_Amount__c.formatCurrency(&quot;$&quot;,&quot;.&quot;,&quot;,&quot;,&quot;2&quot;)"></td>
                                    <td dmx-text="CreatedDate.toDate()"></td>
                                    <td dmx-text="FreightTM__Status__c"></td>
                                    <td dmx-text="Sales_Rep_Primary__c"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
      let input = document.getElementById('filter_loads_input');
      let table = document.getElementById('loads_table');
    
      input.addEventListener('keyup', function(event) {
        let filterValue = event.target.value.toUpperCase();
        let tableRows = table.getElementsByTagName('tr');
    
        for (let i = 0; i < tableRows.length; i++) {
          let loadNumberCell = tableRows[i].getElementsByTagName('td')[1];
    
          if (loadNumberCell) {
            let loadNumberText = loadNumberCell.textContent || loadNumberCell.innerText;
    
            if (loadNumberText.toUpperCase().indexOf(filterValue) > -1) {
              tableRows[i].style.display = '';
            } else {
              tableRows[i].style.display = 'none';
            }
          }
        }
      });
    });
    </script>


    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>