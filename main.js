//get json data
$.getJSON("includes/courses.JSON", function (data) {
  console.log(data);

  for (var i = 0; i < data.length; i++) {
    $("#inputCourseName").append(
      '<option id="' +
      data[i]["id"] +
      '"' +
      "name=course" +
      data[i]["id"] +
      ">" +
      data[i]["name"] +
      "</option>"
    );
  }

  $("#inputCourseName").change(function () {
    $("#inputDate").empty();
    //Value from selected option
    var option_id =
      $(this)
      .children(":selected")
      .attr("id") - 1;
    //Dates for selected course
    var selected_course_dates = data[option_id].dates;
    selected_course_dates.sort();
    for (var i = 0; i < selected_course_dates.length; i++) {
      $("#inputDate").append(
        '<option class="date" id="date' +
        data[i]["id"] +
        '"' +
        "name=date" +
        data[i]["id"] +
        ">" +
        data[option_id]["dates"][i] +
        "</option>"
      );
    }
  });
});

//Add new Particpants section
$(document).ready(function () {
  count = 0;
  $("#add-btn").click(function () {
    //Count clicks
    count++;

    //Clone Participant boxes, prepend button and append to conatiner
    $("#participant-box")
      .clone()
      .attr("id", "participant-box" + count)
      .prepend(
        "<div class='remove-btn-box'>\
            <button type='button' id=" +
        count +
        " class=' btn  btn_remove'>X</button>\
        </div>"
      )
      .appendTo("#participant-container");

    //For every participant input give participant name 0, 1, 2...
    $(".input_part_name").each(function (i, object) {
      $(this).attr("name", "participantName" + i);
    });

    //For every participant input give participant phonenr. 0, 1, 2...
    $(".input_part_phone").each(function (i, object) {
      $(this).attr("name", "participantPhone" + i);
    });

    //For every participant input give participant email. 0, 1, 2...
    $(".input_part_email").each(function (i, object) {
      $(this).attr("name", "participantEmail" + i);
    });
    //Count total atendees
    var total_attendees = $(".part-box").length;
    //console.log(total_attendees);
    $("#total").val(total_attendees);
  });

  //Remove participant box
  $(document).on("click", ".btn_remove", function () {
    //New id to buttons
    var button_id = $(this).attr("id");
    $("#participant-box" + button_id + "").remove();
    var total_attendees = $(".part-box").length;

    //console.log(total_attendees);
    $("#total").val(total_attendees);

    //For every participant input give participant name 0, 1, 2...
    $(".input_part_name").each(function (i, object) {
      $(this).attr("name", "participantName" + i);
    });

    //For every participant input give participant phonenr. 0, 1, 2...
    $(".input_part_phone").each(function (i, object) {
      $(this).attr("name", "participantPhone" + i);
    });

    //For every participant input give participant email. 0, 1, 2...
    $(".input_part_email").each(function (i, object) {
      $(this).attr("name", "participantEmail" + i);
    });
  });
});