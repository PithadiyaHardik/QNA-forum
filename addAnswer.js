function changeAnswer(target) {
  let ans = target.innerHTML;
  let id = target.id;
  console.log(ans);
  $.ajax({
    type: "POST",
    url: "addAnswer.php",
    data: { answer: ans, id: id },
    success: function (data) {
      console.log("HEllo");
    },
    error: function (xhr, status, error) {
      console.error(xhr);
    },
  });
}
function deleteQuestion(target) {
  let id = target.getAttribute("question_no");
  let ele = document.getElementsByName(id)[0];
  $.ajax({
    type: "POST",
    url: "deleteQuestion.php",
    data: { id: id },
    success: function (data) {
      console.log("Hello");
      ele.remove();
    },
    error: function (xhr, status, error) {
      console.error(xhr);
      console.log("error");
    },
  });
}

function changeQuestion(target) {
  let q = target.innerHTML;
  let id = target.getAttribute("question_no");
  $.ajax({
    type: "POST",
    url: "changeQuestion.php",
    data: { question: q, id: id },
    success: function (data) {
      console.log("HEllo");
      console.log(data);
    },
    error: function (xhr, status, error) {
      console.error(xhr);
    },
  });
}
