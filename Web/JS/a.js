const image = document.getElementById("scroll-image");

window.addEventListener("scroll", () => {
  const scrollPosition = window.scrollY;
  if (scrollPosition > 500) {
    image.style.display = "block";
  } else {
    image.style.display = "none";
  }
});
