app.controller('dashboard', function($scope, $http, $dataSource, $location) {

    $scope.getUserAds = function() {
        var id = { userId: localStorage.getItem('id') }
        $dataSource.getUserAds(id).then(function(res) {
            $scope.ads = res.data
        })
    }

    $scope.deleteAd = function(id) {
        $dataSource.deleteAd(id).then(function(res) {
            $scope.getAllAds()
        })
    }

    $scope.getUserAds()
});