app.controller('register', function($scope, $http, $timeout, $location, $dataSource) {

    $scope.userData = {}
    $scope.submited = false
    $scope.message = null

    $scope.handleSubmit = function(userData) {
        $dataSource.register(userData).then(function(res) {
            $scope.handleServerResponse(res.data)
        })
    }

    $scope.handleServerResponse = function(data) {
        $scope.message = data.message || data._message || 'Username or email is in use.'
        if (!data.errors && !data.errmsg) {
            $timeout(function() { $location.path('/login') }, 2000)
        }
    }
});