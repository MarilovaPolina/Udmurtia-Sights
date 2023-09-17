

/*меню навигации*/
const nav = document.querySelector('#nav');
const navBtn = document.querySelector('#menu_btn');
const navBtnImg = document.querySelector('#menu_btn_img');

navBtn.onclick = function() {
    if (nav.classList.toggle('open')) {
        navBtnImg.src = "./assets/img/close.svg";
    } else {
        navBtnImg.src = './assets/img/menu.svg';
    }
}

/*активные ссылки подсвечиваются красным*/
const doc = window.document;
const links = doc.querySelectorAll(".nav-link"); 
const linksCount = links.length;
const currentURL = doc.URL;

for (let i = 0; i < linksCount; i++) {
    let linkURL = links[i].href;

    if (currentURL.startsWith(linkURL)) {
        links[i].classList.add("r");
    }
}

/*модальное окно*/
function delModalPost(){
    alert('Публикация удалена');
}
    
function delModalUser(){
    alert('Администратор удален');
}