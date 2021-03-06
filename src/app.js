var $ = require("jquery");
////////jquery e stato installato con npm////////////
/// chiamata ajax
$(document).ready(function() {
  homepage();
  //// cerca per autore
  $(document).on("click", ".nav__artist-name", function() {
    var artist = $(this).data("value");
    filtraArtista(artist);
  });
  $(document).on("click", ".burger__menu-data", function() {
    var artist = $(this).data("value");
    filtraArtista(artist);
  });
});
//// chimata ajax per l'homepage
function homepage() {
  $.ajax({
    url: "http://localhost:8888/lezione-4/cd/database/server.php",
    method: "GET",
    success: function(data) {
      compileCards(data);
      authorsNav(data);
    },
    error: function() {
      $(".nav").hide();
      $(".error__page").show();
    },
  });
}
/// chimata ajax per l'artista
function filtraArtista(name) {
  $(".container-content").empty();
  $.ajax({
    url: "http://localhost:8888/lezione-4/cd/database/server.php",
    method: "GET",
    data: {
      author: name,
    },
    success: function(data) {
      compileCards(data);
    },
    error: function() {
      $(".nav").hide();
      $(".error__page").show();
    },
  });
}
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
/// compila lista artisti nav senza doppioni
function authorsNav(risp) {
  var authorsNav = [];
  for (var i = 0; i < risp.length; i++) {
    if (!authorsNav.includes(risp[i].author)) {
        authorsNav.push(risp[i].author);
      }
  }   
  var source = $("#container-artists").html();
  var templateAuthor = Handlebars.compile(source);
  for (var i = 0; i < authorsNav.length; i++) {
    var author = authorsNav[i];
    var context = {
      artist: author,
    };
    var htmlContext = templateAuthor(context);
    $(".nav__artist").append(htmlContext);
  }
}
