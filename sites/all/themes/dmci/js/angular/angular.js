(function ($, Drupal) {

  Drupal.behaviors.angular = {
    attach: function(context, settings) {
      var news = angular.module('news', []);

      news.controller('appController', function($scope, $http, Poller) {
        // Response from service.
        $scope.data = Poller.data ;
      });

      // Run the Poller.
      news.run(function(Poller) {});
      // Create a poller that will create a request to
      // the endpoint every 1000 ms.
      news.factory('Poller', function($http, $timeout) {
        var data = {
          response: {},
          calls: 0
        };

        var poller = function() {
          $http.get('/data/page/news').then(function(r) {
            data.response = r.data;
            data.calls++;
            $timeout(poller, 1000);
          });
        };
        poller();

        return {
          data: data
        };
      });
    }
  };
})(jQuery, Drupal);
