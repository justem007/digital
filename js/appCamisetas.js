angular.module('Digital', ['angular-loading-bar', 'ngAnimate'])
    .config(['cfpLoadingBarProvider', function(cfpLoadingBarProvider) {
        cfpLoadingBarProvider.includeSpinner = false;
    }]);