let scroll = document.querySelector(".scroll");
let scrolled;
let timer;
let navBar = document.getElementById("top");
let header = document.getElementById("header");

window.onscroll = function () {
  
  console.log(window.pageYOffset);
  if (window.pageYOffset >= 400) {
  	scroll.style.display = "flex";
  } else if (window.pageYOffset < 400) {
  	scroll.style.display = "none";
  }

  if (window.pageYOffset >= 100) {
  	navBar.classList.remove("top");
  	navBar.classList.add("top__fixed");
  	header.classList.add("header");
  } else if (window.pageYOffset < 100) {
  	navBar.classList.remove("top__fixed");
  	navBar.classList.add("top");
  	header.classList.remove("header");
  }
}


scroll.onclick = function() {
	scrolled = window.pageYOffset;
	scrollToTop();
}

function scrollToTop() {
	if (scrolled > 0) {
		window.scrollTo(0, scrolled);
		scrolled = scrolled - 100;
		timer = setTimeout(scrollToTop, 50);
	} else {
		clearTimeout(timer);
		window.scrollTo(0,0);
	}
}

