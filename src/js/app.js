// App js
$('document').ready(function(){
  // console.log("jquery virker og hej");
  var splash = document.querySelector('.splash');
  setTimeout(function(){

    splash.classList.add('fadeIn');

  },
  300);

  var trainer = document.querySelectorAll('.trainer');
  console.log(trainer[1].childNodes);
  var length = trainer.length;
  $.ajax({
    url: 'https://randomuser.me/api/?results=3&nat=dk&gender=female',
    dataType: 'json',
    success: function(data){
      var trainerinfo = data;
      for (var i = 0; i < length; i++) {
        console.log(trainerinfo.results[i].picture.large);
        trainer[i].childNodes[1].src = trainerinfo.results[i].picture.large;
        console.log(trainer[i].childNodes[3].childNodes[1]);
        trainer[i].childNodes[3].childNodes[1].innerHTML = trainerinfo.results[i].name.first + ' ' + trainerinfo.results[i].name.last;
      }
    }
  });

});
