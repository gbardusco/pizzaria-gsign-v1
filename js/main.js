$(".vertical-anchor").on("click", function(event) {
  event.preventDefault();
  $("html, body").animate(
    {
      scrollTop: $(this.hash).offset().top
    },
    500
  );
});

$(".left-anchor").on("click", function(event) {
  event.preventDefault();
  $("html, body").animate(
    {
      scrollLeft: $(this.hash).offset().left
    },
    500
  );
});

$(".right-anchor").on("click", function(event) {
  event.preventDefault();
  var scroll = $(this.hash).scrollLeft($(this.hash).scrollLeft());
  var right = scroll["0"]["clientWidth"];
  $("html, body").animate(
    {
      scrollLeft: $(this.hash).offset().left - right
    },
    500
  );
});

$(".diagonal-anchor").on("click", function(event) {
  event.preventDefault();
  var scrollL = $(this.hash).scrollLeft($(this.hash).scrollLeft());
  var scrollT = $(this.hash).scrollLeft($(this.hash).scrollTop());
  var left = scrollL["0"]["clientWidth"];
  var top = scrollT["0"]["clientHeight"];
  $("html, body").animate(
    {
      scrollLeft: $(this.hash).offset().left + left,
      scrollTop: $(this.hash).offset().top + top
    },
    500
  );
});
