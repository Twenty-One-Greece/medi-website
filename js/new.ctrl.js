app.controller('new', function($scope, $http, $dataSource, $location) {
    $scope.ad = {}

    $scope.handleSubmit = function(ad) {
        ad.userId = localStorage.getItem('id')
        ad.username = localStorage.getItem('username')
        $dataSource.createAd(ad).then(function(res) {
            $scope.handleServerResponse(res.data)
        })
    }

    $scope.handleServerResponse = function(data) {
        if (!data.err) $location.path('/dashboard')
    }


});