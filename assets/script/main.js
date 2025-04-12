
const toggle = document.getElementById("toggle-switch");
toggle.addEventListener("change", () => {
  document.body.classList.toggle("light-mode");
});