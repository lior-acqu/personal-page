const initialImageMargin = 0;
window.addEventListener("scroll", () => {
  var scroll = window.scrollY - document.getElementById("skills").offsetTop;
  var newPosition = initialImageMargin + scroll / 3; // change intensity of parallax
  document.querySelector(".skill-img").style.top = newPosition + "px";
});

var dropped = false;
function dropDown() {
  if (!dropped) {
    document.querySelector(".dropdown-list").style.display = "flex";
    dropped = true;
  } else {
    document.querySelector(".dropdown-list").style.display = "none";
    dropped = false;
  }
}
