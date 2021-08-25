function fileUpload(target) {
  ele = target.nextElementSibling;
  console.log(ele);
  console.log(target.files[0]);
  ele.innerHTML =
    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-image" viewBox="0 0 16 16"><path d="M6.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/><path d="M14 14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5V14zM4 1a1 1 0 0 0-1 1v10l2.224-2.224a.5.5 0 0 1 .61-.075L8 11l2.157-3.02a.5.5 0 0 1 .76-.063L13 10V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4z"></svg><font>Attachement</font>';
  ele.nextElementSibling.style.display = "inline";
}

function fileSubmit(target) {
  let btn = target.children[2];
  let f1 = new FormData(target);
  console.log(f1);
  $.ajax({
    type: "POST",
    url: "fileUpload.php",
    data: f1,
    processData: false,
    contentType: false,
    success: function (data) {
      btn.style.display = "none";

      // console.log(q);
      // console.log("HEllo");
      // window.location.href = "Student_view_myquestion.php";
      // console.log(email);
    },
    error: function (xhr, status, error) {
      console.error(xhr);
    },
  });
  return true;
}

function showAttachement(target) {
  let id = target.getAttribute("path");
  let str1 = "showImage.php?path=";
  let path = id;
  let final_path = str1.concat(path);
  window.open(final_path);
}
