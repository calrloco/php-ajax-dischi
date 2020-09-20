var $ = require("jquery");
/// chiamata ajax
$(document).ready(function() {
  $.ajax({
    url: "http://localhost:8888/lezione-4/cd/database/db.php",
    method: "GET",
    success: function(data) {
      compileCards(data);
      compileNav(data);
    },
    error: function() {
      alert("error");
    },
  });
  //// cerca per autore
  $(document).on("click", ".nav__artist-name", function() {
    var artist = $(this).html();
    // se non e il tasto seleziona tutti faccio partire la ricerca artista
    if ($(this).hasClass("see-all") == false) {
      $(".container__cd").each(function() {
        var artistContainer = $(this).data("artist");
        if (artistContainer != artist) {
          $(this).hide();
        } else {
          $(this).show();
        }
      });
    } else {
      $(".container__cd").show();
    }
  });
});
/// compile cards
function compileCards(dbAnswer) {
  var source = $("#container-cards").html();
  var templateCd = Handlebars.compile(source);
  for (var i = 0; i < dbAnswer.length; i++) {
    var img = dbAnswer[i].poster;
    var title = dbAnswer[i].title;
    var author = dbAnswer[i].author;
    var year = dbAnswer[i].year;
    var context = {
      imgsrc: img,
      title: title,
      author: author,
      year: year,
    };
    var htmlContext = templateCd(context);
    $(".container-content").append(htmlContext);
  }
}
/// compila lista artisti nav
function compileNav(risp) {
  var source = $("#container-artists").html();
  var templateAuthor = Handlebars.compile(source);
  for (var i = 0; i < risp.length; i++) {
    var author = risp[i].author;
    var context = {
      artist: author,
    };
    var htmlContext = templateAuthor(context);
    $(".nav__artist").append(htmlContext);
  }
}
//////////////
