let registration = document.querySelector(".registration"); 
let registrationForm = document.querySelector(".register");
let login = document.querySelector(".login"); 
let loginForm = document.querySelector(".login-form");

document.addEventListener('keydown', function(evt) {
	if (evt.keyCode === 27) {
    	registrationForm.classList.remove('register-bottom');
    	loginForm.classList.remove('register-bottom');
      menu.classList.remove('m-menu__active');
  	}
});
/*
registration.addEventListener('click', function () {
  	registrationForm.classList.toggle('register-bottom');
});
*/

/*___________________________________________________________________________________*/
const regMenu = () => {
  registrationForm.classList.toggle('register-bottom');
  loginForm.classList.remove('register-bottom');
  menu.classList.remove('m-menu__active');
}

registration.addEventListener('click', e => {
  e.stopPropagation();

  regMenu();
});

document.addEventListener('click', e => {
  let target = e.target;
  let its_registrationForm = target == registrationForm || registrationForm.contains(target);
  let its_registration = target == registration;
  let registrationForm_is_active = registrationForm.classList.contains('register-bottom');
  
  if (!its_registrationForm && !its_registration && registrationForm_is_active) {
    regMenu();
  }
})
/*___________________________________________________________________________________*/
const loginMenu = () => {
  loginForm.classList.toggle('register-bottom');
  registrationForm.classList.remove('register-bottom');
  menu.classList.remove('m-menu__active');
}

login.addEventListener('click', e => {
  e.stopPropagation();

  loginMenu();
});

document.addEventListener('click', e => {
  let target = e.target;
  let its_loginForm = target == loginForm || loginForm.contains(target);
  let its_login = target == login;
  let loginForm_is_active = loginForm.classList.contains('register-bottom');
  
  if (!its_loginForm && !its_login && loginForm_is_active) {
    loginMenu();
  }
})
/*___________________________________________________________________________________*/
let play = document.querySelector(".list");
let close = document.querySelector(".close-menu");
let menu = document.querySelector(".m-menu");

const rightMenu = () => {
  menu.classList.toggle('m-menu__active');
  registrationForm.classList.remove('register-bottom');
  loginForm.classList.remove('register-bottom');
}

play.addEventListener('click', e => {
  e.stopPropagation();

  rightMenu();
});

document.addEventListener('click', e => {
  let target = e.target;
  let its_menu = target == menu || menu.contains(target);
  let its_play = target == play;
  let menu_is_active = menu.classList.contains('m-menu__active');
  
  if (!its_menu && !its_play && menu_is_active) {
    rightMenu();
  }
})

close.addEventListener('click', function () {
    menu.classList.remove('m-menu__active');
});
/*_______________________________БОКОВОЕ МЕНЮ ДУБЛЬ_______________________________*/
let registration_menu = document.querySelector(".registration_menu"); 
let login_menu = document.querySelector(".login_menu"); 
/*______________________________________________________________*/
registration_menu.addEventListener('click', e => {
  e.stopPropagation();

  regMenu();
});

document.addEventListener('click', e => {
  let target = e.target;
  let its_registrationForm = target == registrationForm || registrationForm.contains(target);
  let its_registration_menu = target == registration_menu;
  let registrationForm_is_active = registrationForm.classList.contains('register-bottom');
  
  if (!its_registrationForm && !its_registration_menu && registrationForm_is_active) {
    regMenu();
  }
})
/*______________________________________________________________*/
login_menu.addEventListener('click', e => {
  e.stopPropagation();

  loginMenu();
});

document.addEventListener('click', e => {
  let target = e.target;
  let its_loginForm = target == loginForm || loginForm.contains(target);
  let its_login_menu = target == login_menu;
  let loginForm_is_active = loginForm.classList.contains('register-bottom');
  
  if (!its_loginForm && !its_login_menu && loginForm_is_active) {
    loginMenu();
  }
})
/*___________________________________________________________________________________*/