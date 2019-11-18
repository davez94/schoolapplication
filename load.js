//Load data to info modal
$(document).ready(function () {
  $("tbody tr").click(function () {
    $('tr').removeClass('highlight');
    var companyIdInfo = "";
    var companyIdInfo = this.id;
    $(this).addClass("highlight");
    console.log(companyIdInfo);

    $(".more-container-hidden").removeClass();
    $("#company_info").addClass("more-container")
    $("#btn-box").addClass("modal-btn-box");

    $("#company_info").load("load-company-info.php", {
      companyIdInfo
    });

  });
});

//remove modal on smaller screen
$(document).ready(function () {
  $("#modal-btn").click(function () {
    /*hide button*/
    $(".modal-btn-box").removeClass();
    $("#btn-box").addClass("modal-btn-box-hidden");
    /*hide modal box*/
    $(".more-container").removeClass();
    $("#company_info").addClass("more-container-hidden")

  });

});