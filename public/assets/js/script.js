
let prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  const currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("menuScroll").style.top = "0";
  } else {
    document.getElementById("menuScroll").style.top = "-60px";
  }
  prevScrollpos = currentScrollPos;
};

function showPass() {
  const passwords = document.querySelectorAll(".myPass");
  passwords.forEach((password) => {
    if (password.type === "password") {
      password.type = "text";
    } else {
      password.type = "password";
    }
  });
}
