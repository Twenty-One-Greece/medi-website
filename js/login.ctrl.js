app.controller('login', function($scope, $http, $dataSource, $location) {
    $scope.userData = {}

    $scope.handleSubmit = function(userData) {
        userData.user = true
        $dataSource.login(userData).then(function(res) {
            $scope.handleServerResponse(res.data)
        })
    }

    $scope.handleServerResponse = function(data) {
        if (data.err) return alert(data.message)
        $scope.saveUserInfo(data.user)
        return $location.path('dashboard')
    }

    $scope.saveUserInfo = function(user) {
        localStorage.setItem('id', user._id)
        localStorage.setItem('email', user.email)
        localStorage.setItem('username', user.username)
    }
});