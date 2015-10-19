<!DOCTYPE html>

<html ng-app="locationApp">

<head>

    <meta name="viewport" content="width=device-width" />

    <title>Index</title>

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body ng-controller="LocationController">

    <div class="container">

        <div class="row">

            <h2>Locations</h2>

        </div>
        <div class="row">
            <div class="col-md-6">
                <select class="form-control">
                  <option>Countries</option>
                  <option ng-repeat="country in countries" value="{{country.id}}">{{country.name}}</option>
                </select>
            </div>
            <div class="col-md-6">
                <select class="form-control">
                  <option>Cities</option>
                  <option ng-repeat="city in cities" value="{{city.id}}">{{city.name}}</option>
                </select>
            </div>
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



