angular.module('ngrepeatSelect', [])
 .controller('ExampleController', ['$scope', function($scope) {
   $scope.data = {
    repeatSelect: null,
    availableOptions: [
      {value: 'kansai',   name: '関西'},
      {value: 'kanto',    name: '関東'},
      {value: 'shikoku',  name: '四国'},
      {value: 'tohoku',   name: '東北'},
      {value: 'hokuriku', name: '北陸'},
      {value: 'kishu',    name: '紀州'},
      {value: 'sanin',    name: '山陰'},
      {value: 'toyama',   name: '富山'},
      {value: 'shimokita',name: '下北'},
      {value: 'tango',    name: '丹後'},
      {value: 'shikoku',  name: '四国'},
      {value: 'kyushu',   name: '九州'},
    ],
   };
}]);