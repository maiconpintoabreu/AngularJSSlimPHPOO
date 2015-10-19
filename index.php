<!DOCTYPE html>

<html ng-app="locationApp">

<head>

    <meta name="viewport" content="width=device-width" />

    <title>Index</title>

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

</head>

<body ng-controller="LocationController">

    <div class="container">

        <div class="row">

            <h2>Locations</h2>

        </div>

        <div class="hs-location" id="hs-location">

            <form novalidate class="simple-form">

                <div ng-repeat="location in locations">

                    <div class="row table-bordered location-row">

                        <div class="container">

                            <p>id: {{location.id}}</p>

                            <p>Location: {{location.name}}</p>

                        </div>

                    </div>

                </div>

            </form>

        </div>

        <div class="pull-right">

            <input type="button" ng-click="reset()" value="Discard Changes" />

        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular.min.js"></script>

    <script src="./app.js"></script>

    

</body>

</html>



