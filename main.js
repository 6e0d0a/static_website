const body = document.querySelector("body");
const colors = ["red", "orange", "yellow", "green", "violet"];

let currentColor = 0;

function animation() {
  body.style.backgroundColor = colors[currentColor];
  currentColor++;
  if (currentColor >= colors.length) {
    currentColor = 0;
  }
}

setInterval(animation, 1000);
animation();
