angular.module('starter.controllers')
    .controller('DeliverymanViewOrderCtrl',
        ['$scope', '$ionicLoading', '$ionicPopup', '$stateParams', 'DeliverymanOrder', '$cordovaGeolocation',
            function($scope, $ionicLoading, $ionicPopup, $stateParams, DeliverymanOrder, $cordovaGeolocation){

                var wacth, lat = null, long;

                $scope.order = {};
                $ionicLoading.show({
                    template: 'Carregando...'
                });

                DeliverymanOrder.get({id: $stateParams.id, include: 'items,cupom'}, function(data){
                    $scope.order = data.data;
                    $ionicLoading.hide();
                }, function(dataError){
                    $ionicLoading.hide();
                });

                $scope.goToDelivery = function(){
                    $ionicPopup.alert({
                        title: 'Advertência',
                        template: 'Para parar a localização de ok.'
                    }).then(function(){
                        stopWatchPosition();
                    });

                    DeliverymanOrder.updateStatus({id: $stateParams.id}, {status: 1}, function(){
                        var watchOptions = {
                            timeout: 3000,
                            enableHighAccuracy: false
                        };

                        watch = $cordovaGeolocation.watchPosition(watchOptions);
                        watch.then(null, function(responseError){
                                //console.log(responseError);
                            },
                            function(position){
                                //console.log(position);
                                if(!lat) {
                                    lat = position.coords.latitude;
                                    long = position.coords.longitude;
                                }else {
                                    long -= 0.0444;
                                }


                                DeliverymanOrder.geo({id: $stateParams.id}, {
                                    lat:  lat,
                                    long: long

                                })
                            });
                    });
                };

                function stopWatchPosition(){
                    if(watch && typeof watch == 'object' && wacth.hasOwnProperty('watchID')){
                        $cordovaGeolocation.clearWatch(watch.watchID);
                    }
                }

                //DeliverymanOrder.updateStatus({id: $stateParams.id}, {status: 1}, function(data){
                //    console.log(data);
                //});
                //
                //DeliverymanOrder.geo({id: $stateParams.id}, {lat: -23.4444, long: -45.4444}, function(data){
                //    console.log(data);
                //});
            }]
    );