angular.module('starter.controllers')
    .controller('DeliverymanOrderCtrl', [
        '$scope', '$state', '$ionicLoading', 'DeliverymanOrder',
        function($scope, $state, $ionicLoading, DeliverymanOrder){
            $scope.items = [];

            $ionicLoading.show({
                template: 'Carregando...'
            });

            $scope.doRefresh = function(){
                getOrders().then(function(data){
                    $scope.items = data.data;
                    $scope.$broadcast('scroll.refreshComplete');
                }, function(error){
                    $scope.$broadcast('scroll.refreshComplete');
                });
            };

            $scope.openOrderDetail = function(order){
                console.log(order);
                $state.go('deliveryman.view_order', {id: order.id})
            };

            function getOrders(){
                return DeliverymanOrder.query({
                    id: null,
                    orderBy: 'created_at',
                    sortedBy: 'desc'
                }).$promise;
            }
            getOrders().then(function(data){
                $scope.items = data.data;
                $ionicLoading.hide();
            }, function(error){
                $ionicLoading.hide();
            });
        }]);