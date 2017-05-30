<!DOCTYPE html>
<html lang="en" ng-app="myApp">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ippocratis</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" crossorigin="anonymous">-->
        <link rel="stylesheet" href="./main.css">
        <link rel="stylesheet" href="bower_components/angular-upload/src/directives/btnUpload.min.css">
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=greek,greek-ext,latin-ext" rel="stylesheet">
        <!--Angular-->
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
        <script src='bower_components/angular-upload/angular-upload.min.js'></script>

        <script src="js/app.js"></script>
        <script src="js/main.ctrl.js"></script>
        <script src="js/adsListing.ctrl.js"></script>
        <script src="js/adInfo.ctrl.js"></script>
        <script src="js/login.ctrl.js"></script>
        <script src="js/register.ctrl.js"></script>
        <script src="js/dashboard.ctrl.js"></script>
        <script src="js/new.ctrl.js"></script>
        <script src="js/dataSource.service.js"></script>
    </head>

    <body>
        
        <!--include Menu here-->
        <?php include 'includes/nav.php' ?>

        <ng-view class=""></ng-view>

        <!--include Menu here-->
        <?php include 'includes/footer.php' ?>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>