//js
var menu_btn = document.querySelector(".menu-btn");

menu_btn.onclick = function(e) {
  e.preventDefault();
  menu_btn.classList.toggle('is-active');
  document.querySelector('.menu-nav').classList.toggle('is-active');
};

//menu_btn.onclick = function(e) {
//  document.querySelector('.menu-block').toggleClass('is-f-active');
//});
//
//document.querySelector('.menu-btn-l').on('click', function(e) {
//  e.preventDefault();
//  $(this).toggleClass('menu-btn-l_active');
//  document.querySelector('.menu-nav-l').toggleClass('menu-nav-l_active');
//});

document.querySelector("#glava").addEventListener("click","a", function (event) {
        event.preventDefault();
      var id  = document.querySelector(this).attr('href'),
       top = document.querySelector(id).offset().top;
        document.querySelector('body,html').animate({scrollTop: top}, 1500);

    });
    //$("#glava").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
  //      event.preventDefault();
        //забираем идентификатор бока с атрибута href
	//	var id  = $(this).attr('href'),
       //узнаем высоту от начала страницы до блока на который ссылается якорь
      // top = $(id).offset().top;
       //анимируем переход на расстояние - top за 1500 мс
       // $('body,html').animate({scrollTop: top}, 1500);

    //});
