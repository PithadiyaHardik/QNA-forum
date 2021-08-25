function addQuestion(target) {
  let q = document.getElementById("question").innerHTML;
  let email = target.getAttribute("email");
  console.log(q);
  console.log(email);

  $.ajax({
    type: "POST",
    url: "addQuestion.php",
    data: { question: q, email: email },
    success: function (data) {
      console.log(q);
      console.log("HEllo");
      window.location.href = "Student_view_myquestion.php";
      console.log(email);
    },
    error: function (xhr, status, error) {
      console.error(xhr);
    },
  });
}
