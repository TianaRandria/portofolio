const toTop = document.getElementById("toTop");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 200 ||
    document.documentElement.scrollTop > 200
  ) {
    toTop.style.display = "block";
  } else {
    toTop.style.display = "none";
  }
}

const box = document.querySelectorAll(".box");

box.forEach((item) => {
  let voir = item.firstElementChild.children[0].childNodes[1];

  item.addEventListener("mouseover", (event) => {
    voir.style.display = "block";
  });

  item.addEventListener("mouseout", (event) => {
    voir.style.display = "none";
  });
});
