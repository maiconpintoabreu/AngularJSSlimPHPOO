angular.module('locationApp',[])
  .controller('locationController', locationController)
  .factory('locationService', locationService);

locationController.$inject = ['locationService'];
function locationController(locationService) {
  var vm = this;
  vm.url = 'rest/location';
  vm.countries = [];
  vm.cities = [];
  vm.locations = [];
  vm.selectedCountry = null;
  vm.selectedCity = null;

  vm.load = function (option) {
    locationService.getLocations(vm.url, vm.selectedCountry,  vm.selectedCity).then(function(data){
      switch(option){
        case 1:
          vm.cities = data;
        break;
        case 2:
          if(vm.selectedCity == null){
            vm.locations = [];
            return;
          }
          vm.locations = data;
        break;
        default:
          vm.countries = data;
        break;
      }
    });
  };
  vm.loadCities = function () {
          vm.cities = [];
          vm.selectedCity = null;
          vm.load(1);
  };
  vm.loadLocation = function () {
          vm.locations = [];
          vm.load(2);
  };

  vm.reset = function () {
      if (confirm('Are you sure you want to discard the changes?')) {
          vm.locations = [];
          vm.cities = [];
          vm.countries = [];
          vm.selectedCountry = null;
          vm.selectedCity = null;
          vm.load();
      }
  };
  vm.load();
}

locationService.$inject = ['$http'];
function locationService($http){
  return {
      getLocations: getLocations
  };
  function getLocations($url,$country,$city) {
    return $http.get($url, {params:{"country": $country, "city": $city}})
          .then(getLocationsComplete);

    function getLocationsComplete(response) {
        return response.data;
    }

    function getLocationsFailed(error) {
        return "error";
    }
  }
}