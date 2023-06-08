function lock_out() {
  sessionStorage.setItem("status", "0");
  sessionStorage.setItem("username", "Login");
}
function check_status() {
  let status = sessionStorage.getItem("status");
  if (status == "1") {
    document
      .getElementById("dropdown")
      .addEventListener("mouseover", mouseOver);
    document
      .getElementById("dropdown")
      .addEventListener("mouseout", mouseOut);
  }
}
function mouseOver() {
  document.getElementById("dropdown").style.display = "block";
  document.getElementById("dropdown-content").style.display = "block";
}

function mouseOut() {
  
  document.getElementById("dropdown-content").style.display = "none";
}
//kiem tra trang thi nguoi dung
check_status();
