// Global scripts

window.onload = () => {
  // preloader handle
  const loader = document.getElementById("preloader");
  loader.style.display = "none";

  // scroll to top element
  const scrollToTopEL = document.getElementById("gotoTop");

  //event listener scroll to top
  scrollToTopEL.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
};

window.onscroll = () => {
  // scroll to top element
  const scrollToTopEL = document.getElementById("gotoTop");
  //handle scroll to top el on scroll
  let timer = null;

  if (window.scrollY > 400) {
    scrollToTopEL.style.display = "block";
  } else {
    scrollToTopEL.style.display = "none";
  }

  //remove the button after 5 sec if user do not scroll
  if (timer !== null) {
    clearTimeout(timer);
  }
  timer = setTimeout(function () {
    scrollToTopEL.style.display = "none";
  }, 5000);
};
