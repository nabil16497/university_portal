const threeline = document.querySelector(".threeline");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

threeline.addEventListener("click", () => {
	navLinks.classList.toggle("open");
	links.forEach(link => {
    	link.classList.toggle("fade");
  });
});
