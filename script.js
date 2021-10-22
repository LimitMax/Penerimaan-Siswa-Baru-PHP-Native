$(document).ready(function () {
  $("#sidebar-toggle, .sidebar-overlay").click(function () {
    $(".sidebar").toggleClass("sidebar-show");
    $(".sidebar-overlay").toggleClass("d-block");
  });
});
