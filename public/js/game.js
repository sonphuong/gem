var app = angular.module('gameApp', ["ngRoute",'MessageCenterModule'], function($interpolateProvider){
    //angularjs and laravel using the same symbol {{}} for display variable so need to change one of them to avoid conflict
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
/*app.config(function($routeProvider) {
    $routeProvider
    .when("/game/play", {
        templateUrl : "play.htm"
    });
});*/
app.controller('gameCtrl', ['$scope','$http','messageCenterService','$q','$window','$controller', function($scope,$http,messageCenterService,$q,$window,$controller){
    $scope.tools = ["rock","paper","scissors"];
    //$scope.options = {rock:"rock.png",paper:"paper.png",scissors:"scissors"};
    $scope.isPlayed = false;
    $scope.isShowResponse = false;
    $scope.showAll = function(){
        for (var i = 0; i <=  $scope.tools.length; i++) {
            $("#"+$scope.tools[i]).show();
        }
    }
    $scope.showCVSCAll = function(){
        for (var i = 0; i <=  $scope.tools.length; i++) {
            $("#"+$scope.tools[i]).show();
            $("#c"+$scope.tools[i]).show();
        }
    }
    $scope.showPlayAgain = function(){
        $scope.isPlayed = true;
    }
    $scope.showRespond = function(selected, response){
        //show only the selected item
        for (var i = 0; i <  $scope.tools.length; i++) {
            if(selected!=i){
                $("#"+$scope.tools[i]).hide();
            }
            if(response==i){
                $("#c"+$scope.tools[i]).show();
            }
            else{
                $("#c"+$scope.tools[i]).hide();   
            }
        }
        //show the response
    }
    $scope.play = function (intToolIdx) {
        var req = {
                    method: 'POST',
                    url: '/game/play',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {"intToolIdx": intToolIdx}
            };
            $http(req)
            .success(function (rtData) {
                if (rtData.rs == 1) {
                    $scope.showRS("You win",rtData.rs);
                }
                else if(rtData.rs == 0) {
                    $scope.showRS("Draw",rtData.rs);
                }
                else {
                    $scope.showRS("You loose",rtData.rs);
                }
                $scope.showRespond(intToolIdx, rtData.rp);
                $scope.showPlayAgain();
            })
            .error(function(){
                messageCenterService.add('danger', "Error", {timeout: 5000});
                $scope.showPlayAgain();
            });
    };
    $scope.showRS = function(msg,rs){
        switch(rs) {
            case 1:
                cl = "win";
                break;
            case -1:
                cl = "loose";
                break;            
            case 0:
                cl = "draw";
                break;
            default:
                cl = "";
        }
        $("#rs").html(""+msg+"");
        $("#rs").removeAttr('class');
        $("#rs").addClass(cl); 
    }
    $scope.playCVSC = function () {
        var req = {
                    method: 'POST',
                    url: '/game/playCVSC',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            };
            $http(req)
            .success(function (rtData) {
                if (rtData.rs == 1) {
                    $scope.showRS("Com1 win",rtData.rs);
                }
                else if(rtData.rs == 0) {
                    $scope.showRS("Draw",rtData.rs);
                }
                else {
                    $scope.showRS("Com2 win",1);
                }
                $scope.showRespond(rtData.com1, rtData.com2);
                $scope.showPlayAgain();
            })
            .error(function(){
                messageCenterService.add('danger', "Error", {timeout: 5000});
                $scope.showPlayAgain();
            });
    };
    $scope.resetGame = function(){
        $scope.isPlayed = false;
        $scope.showAll();
        messageCenterService.remove();
    }
    $scope.resetCVSCGame = function(){
        $scope.isPlayed = false;
        $scope.showCVSCAll();
        messageCenterService.remove();
    }
}]);