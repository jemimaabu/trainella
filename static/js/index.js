/** Handle menu scrolling */
const menu = document.getElementById("menu");

function handleMenuScroll() {
  if (document.body.scrollTop > menu.clientHeight || document.documentElement.scrollTop > menu.clientHeight) {
    menu.classList.add("scrolled")
  } else {
    menu.classList.remove("scrolled")
  }
};

var timer;

window.addEventListener("scroll", function() {
	if(timer) {
		window.clearTimeout(timer);
	}

	timer = window.setTimeout(function() {
		handleMenuScroll()
	}, 25);
});