angular.module('locationApp', [])
  .controller('LocationController', ['$scope', '$http', '$templateCache', function($scope, $http, $templateCache) {
      $scope.locations = [];

      $scope.load = function () {
          $http({
              method: 'GET',
              url: '/rest/location/1/1'
          }).success(function (data) {
              $scope.locations = data; // response data
          }).error(function (data) {

          });
      };
 

      $scope.reset = function () {
          if (confirm('Are you sure you want to discard the changes?')) {
              $scope.locations = [];
              $scope.load();
          }
      };
      $scope.load();
  }]);
;