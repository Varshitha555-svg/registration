$(document).ready(function() {
  $(".container").hover(function() {
    $(this).css("box-shadow", "0 0 20px rgba(0, 153, 204, 0.5)");
  }, function() {
    $(this).css("box-shadow", "0 0 15px rgba(0,0,0,0.1)");
  });
  $("#registerForm").on("submit", function(e) {
    const name = $("#name").val().trim();
    const email = $("#email").val().trim();
    const gender = $("#gender").val();
    const phone = $("#phone").val().trim();
    if (name === "" || email === "" || gender === "" || phone === "") {
      e.preventDefault();
      alert("⚠️ Please fill all required fields!");
      return;
    }
                         const phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone)) {
      e.preventDefault();
      alert("⚠️ Please enter a valid 10-digit phone number!");
      return;
    }
    $("#submitBtn").prop("disabled", true).text("Submitting...");
    $("form").fadeOut(800, function() {
      $("#message").text("Form submitted successfully! Redirecting...").fadeIn(600);
    });
  });
});


