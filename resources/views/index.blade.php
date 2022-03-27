<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="<%= BASE_URL %>favicon.ico">
    <title><%= htmlWebpackPlugin.options.title %></title>
</head>
<body>
<div id="app"></div>
{{--npm run prroducitonしたら自動的にこのファイルは作り変えられるので管理はこのIPでOK--}}
<script src="http://192.168.33.10:8080/js/app.js"></script>
<script src="http://192.168.33.10:8080/js/chunk-vendors.js"></script>
<!-- built files will be auto injected -->
</body>
</html>
