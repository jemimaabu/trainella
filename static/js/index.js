/** Handle menu scrolling */
const menu = document.getElementById("menu");
const title = document.getElementById("title");

function handleMenuScroll() {
  if (document.body.scrollTop > menu.clientHeight || document.documentElement.scrollTop > menu.clientHeight) {
		menu.classList.add("scrolled")
  } else {
		menu.classList.remove("scrolled")
  }
};

/** Handle title fading */
const handleTitleFade = () => {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
		title.classList.add("fade-out")
  } else {
		title.classList.remove("fade-out")
  }
}

var timer;

window.addEventListener("scroll", function() {
	handleMenuScroll();
	handleTitleFade()
});

/** Handle menu dropdown */
const menuButton = document.getElementById("menu-burger");
const menuDropdown = document.getElementById("menu-dropdown");

menuButton.addEventListener("click", function() {
	if (!menuDropdown.classList.contains("expanded")) {
		menuButton.classList.add("active");
		menuDropdown.classList.add("expanded");
	} else {
		menuButton.classList.remove("active");
		menuDropdown.classList.remove("expanded");
	}
})