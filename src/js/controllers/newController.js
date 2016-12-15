angular.module('directoryApp', [])
  .controller('directoryController', function(){

    var dirList = this;

    dirList.list = [
      {name:'Scott', age: 29},
      {name:'Bjarke', age: 26},
      {name:'Trevor', age: 40},
      {name:'Ben', age: 55},
      {name:'Jimmy', age: 20}
    ];

    dirList.addPerson = function(){
      dirList.list.push({name: dirList.name, age: dirList.age});
      dirList.name = '';
      dirList.age = 0;
    };
  });
