var $ = require("jquery");
$(document).ready(function() {
  $.ajax({
      url: "http://localhost:8888/lezione-4/cd/database/db.php",
      method: "GET",
      success: function(data){
         compileCards(data);
      },
      error: function(){
         alert('error');
      }
  });
});
function compileCards (dbAnswer) {
  var source = $('#container-cards').html();
  var templateCd = Handlebars.compile(source);
    for (var i = 0; i < dbAnswer.length; i++) {
      var img = dbAnswer[i].poster;
      var title = dbAnswer[i].title;
      var author = dbAnswer[i].author;
      var year = dbAnswer[i].year;
      var context = {
        imgsrc : img,
        title: title,
        author: author,
        year: year,
      }
      var htmlContext = templateCd(context);
      $('.container-content').append(htmlContext);
  }
}
