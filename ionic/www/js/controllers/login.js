angular.module('starter.controllers')
    .controller('LoginCtrl', [
        '$scope', 'OAuth', 'OAuthToken','$ionicPopup','$state','UserData','User','$localStorage','$redirect',
        function ($scope, OAuth, OAuthToken, $ionicPopup, $state, UserData, User, $localStorage, $redirect) {

        $scope.user = {
            username: '',
            password:''
        };


    $scope.login = function(){
     var promise = OAuth.getAccessToken($scope.user);
     promise
         .then(function (data) {
             var token = $localStorage.get('device_token');
             return User.updateDeviceToken({},{device_token: token}).$promise;
         })
         .then(function (data) {
            return User.authenticated({include: 'client'}).$promise;
         })
         .then(function (data) {

             UserData.set(data.data);
             $redirect.redirectAfterLogin();

        }, function (responseError) {
             UserData.set(null);
             OAuthToken.removeToken();
             $ionicPopup.alert({
                 title: 'Advertencia',
                 template: 'Login e/ou senha inválidos'
             });
             console.debug(responseError);
        });
    }
}]);
