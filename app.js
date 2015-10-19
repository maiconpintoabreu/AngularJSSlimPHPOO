angular.module('locationApp', [])
  .controller('LocationController', ['$scope', '$http', function($scope, $http) {
    $scope.url = '/rest/location';
    $scope.countries = [];
    $scope.cities = [];
    $scope.locations = [];
    $scope.selectedCountry = null;
    $scope.selectedCity = null;

    $scope.load = function (option) {
      $http({
          method: 'GET',
          url: $scope.url,
          params: {country: $scope.selectedCountry, city: $scope.selectedCity}
      }).success(function (data) {
        switch (option) {
          case 1:
            $scope.cities = data;
          break;
          case 2:
            $scope.locations = data;
          break;
          default:
            $scope.countries = data;
          break;
        }
      }).error(function (data) {

      });
    };
    $scope.loadCities = function () {
            $scope.cities = [];
            $scope.selectedCity = null;
            $scope.load(1);
    };
    $scope.loadLocation = function () {
            $scope.locations = [];
            $scope.load(2);
    };

    $scope.reset = function () {
        if (confirm('Are you sure you want to discard the changes?')) {
            $scope.locations = [];
            $scope.cities = [];
            $scope.countries = [];
            $scope.selectedCountry = null;
            $scope.selectedCity = null;
            $scope.load();
        }
    };
    $scope.load();
  }]);
;