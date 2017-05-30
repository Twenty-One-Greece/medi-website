app.factory('$dataSource', function($http, $location) {
    var URL = 'http://locaslhost:3000'
        // var URL = 'http://medi.twenty-one-cloud.eu'

    checkIfLoggedIn = function() {
        var id = localStorage.getItem('_id')
        if (!id) $scope.redirectToLogin()
    }

    redirectToLogin = function() {
        $location.path('/login')
    }

    return {
        register: function(userData) {
            return $http.post(URL + '/users/register', userData)
        },
        login: function(userData) {
            return $http.post(URL + '/users/login', userData)
        },
        getAds: function() {
            return $http.post(URL + '/ads/all')
        },
        getUserAds: function(id) {
            return $http.post(URL + '/ads/user-all', id)
        },
        getSingleAd: function(id) {
            return $http.post(URL + '/ads/' + id)
        },
        updateAd: function(ad) {
            return $http.put(URL + '/ads', ad)
        },
        deleteAd: function(id) {
            return $http.delete(URL + '/ads/' + id)
        },
        createAd: function(ad) {
            return $http.post(URL + '/ads/new', ad)
        },
        getSingleUser: function(id) {
            return $http.post(URL + '/users/one/' + id)
        },
        updateUser: function(user) {
            return $http.put(URL + '/users/', user)
        },
        checkIfLoggedIn: function() {
            var id = localStorage.getItem('_id')
            if (!id) redirectToLogin()
        }
    };
});