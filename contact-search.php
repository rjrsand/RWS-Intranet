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
</head>
<body is="dmx-app" id="contactsearch">
<dmx-api-action id="contact_search" noload="true" method="post" data-type="json" url="https://api.apollo.io/v1/contacts/search?api_key=wR3xE_rF-PldnnS0Q0yFzw" dmx-header:cache-control="'no-cache'" dmx-header:content-type="'application/json'"></dmx-api-action>
<div class="container">
<div class="row mt-4 mb-4">
<div class="col-lg-4"><form id="form1">
<div class="d-flex"><input id="text1" name="text1" type="text" class="form-control mb-2 me-2" dmx-bind:value="$_POST.query"><button id="btn1" class="btn btn-primary mb-2" dmx-on:click="contact_search.load({})">Button</button></div>


</form></div>
</div>
<div class="row">
<div class="col"></div>
</div>
</div>

<script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>
</html>
