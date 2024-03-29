$(document).ready(function () {
    // Send Search Text to the server
    $("#wyszukanie").keyup(function () {
      let searchText = $(this).val();
      if (searchText != "") {
        $.ajax({
          url: "action.php",
          method: "post",
          data: {
            query: searchText,
          },
          success: function (response) {
            $("#lista").html(response);
          },
        });
      } else {
        $("#lista").html("");
      }
    });
    // Set searched text in input field on click of search button
    $(document).on("click", "a", function () {
      $("#wyszukanie").val($(this).text());
      $("#lista").html("");
    });
  });