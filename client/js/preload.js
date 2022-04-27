function preLoad() {
  let load = setTimeout(showWrapper, 5000);
}

//show Wrapper
function showWrapper() {
  document.querySelector(".loader").style.display = "none";
  document.querySelector(".wrapper").style.display = "block";
}
