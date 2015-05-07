(function ($, Drupal) {

  Drupal.behaviors.angular = {
    attach: function(context, settings) {
      var dmci = angular.module('dmci', []);

      dmci.controller('newsPageController', function($scope, PollerNews) {
        // Response from service.
        $scope.newsPage = PollerNews.data;
      });

      dmci.controller('newsConsUpdateController', function($scope, PollerConsUpdate) {
        // Response from service.
        $scope.newsCons = PollerConsUpdate.data;
      });

      dmci.controller('newsLatestNewsController', function($scope, PollerLatestNews) {
        // Response from service.
        $scope.newsLatestNews = PollerLatestNews.data;
      });

      dmci.controller('userController', function($scope, PollerUser) {
        // Response from service.
        $scope.user = PollerUser.data;
      });

      // Run the news Poller.
      dmci.run(function(PollerNews) {});

      // Run the construction updates Poller.
      dmci.run(function(PollerConsUpdate) {});

      // Run the latest news Poller.
      dmci.run(function(PollerLatestNews) {});

      // Run the user Poller.
      dmci.run(function(PollerUser) {});

      // Create a poller for news that will create a request every 1000 ms.
      dmci.factory('PollerNews', function($http, $timeout) {
        var data = {
          response: {},
          calls: 0
        };

        var pollerNews = function() {
          $http.get('/data/page/news').then(function(r) {
            data.response = r.data;
            data.calls++;
            $timeout(pollerNews, 1000);
          });
        };
        pollerNews();

        return {
          data: data
        };
      });

      // Create a poller for construction update that will create a request every 1000 ms.
      dmci.factory('PollerConsUpdate', function($http, $timeout) {
        var data = {
          response: {},
          calls: 0
        };

        var pollerConsUpdate = function() {
          $http.get('/data/block/construction-updates').then(function(r) {
            data.response = r.data;
            data.calls++;
            $timeout(pollerConsUpdate, 1000);
          });
        };
        pollerConsUpdate();

        return {
          data: data
        };
      });

      // Create a poller for latest news that will create a request every 1000 ms.
      dmci.factory('PollerLatestNews', function($http, $timeout) {
        var data = {
          response: {},
          calls: 0
        };

        var pollerLatestNews = function() {
          $http.get('/data/news/latest-news').then(function(r) {
            data.response = r.data;
            data.calls++;
            $timeout(pollerLatestNews, 1000);
          });
        };
        pollerLatestNews();

        return {
          data: data
        };
      });

      // Create a poller for user that will create a request every 1000 ms.
      dmci.factory('PollerUser', function($http, $timeout) {
        var data = {
          response: {},
          calls: 0
        };

        var pollerUser = function() {
          $http.get('/data/user').then(function(r) {
            data.response = r.data;
            data.calls++;
            $timeout(pollerUser, 1000);
          });
        };
        pollerUser();

        return {
          data: data
        };
      });
    }
  };
})(jQuery, Drupal);
