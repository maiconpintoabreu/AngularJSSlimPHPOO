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

    <body ng-controller="locationController as vm">

        <div class="container">
            <div class="jumbotron">
              <h1>Locations</h1>
              <p>Live demo</p>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-control" ng-change="vm.loadCities()" ng-model="vm.selectedCountry">
                              <option value="">Countries</option>
                              <option ng-repeat="country in vm.countries" value="{{country.idLocation}}">{{country.descName}}</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" ng-change="vm.loadLocation()" ng-model="vm.selectedCity">
                              <option value="">Cities</option>
                              <option ng-repeat="city in vm.cities" value="{{city.idLocation}}">{{city.descName}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="well">
                        <div ng-repeat="location in vm.locations">
                            <p>id: {{location.idLocation}}</p>
                            <p>Location: {{location.descName}}</p>
                            <p>Country: {{location.fkLocation}}</p>
                            <p>Description: {{location.descDescription}}</p>
                        </div>
                    </div>
                    <div class="pull-right">
                        <input type="button" ng-click="vm.reset()" value="Discard Changes" />
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular.min.js"></script>
        <script src="./app.js"></script>
    </body>
</html>



