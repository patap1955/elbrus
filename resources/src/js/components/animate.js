document.addEventListener("DOMContentLoaded", () => {
    // Логическая функция вывода анимация
    // elem - массив блоков или отдельный блок для анимации
    // className - класс отвечающий за анимацию

    function animate(elem, className = "animate") {
        let windowCenter = (window.innerHeight / 1) + window.scrollY; // ширина экрана * 1.1 + высота на сколько просролили экран
        elem.forEach(el => {

            let observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        return entry.target.classList.add(className);
                    }
                });
            });

            let scrollOffset = el.offsetParent.offsetTop + (el.offsetHeight / 2);
            if (windowCenter >= scrollOffset) {
                observer.observe(el);
            }
        });
    }

    // animate__backInDown
    const firstScreenTitle = document.querySelectorAll('.first-screen__title')
    const firstScreenContainer = document.querySelectorAll('.first-screen__container')
    const firstScreenButton = document.querySelectorAll('.first-screen__button')
    const sectionTitleAbout = document.querySelectorAll('.section-title__about')
    const aboutTopList = document.querySelectorAll('.about__top-list')
    //const aboutTopImg = document.querySelectorAll('.about__top-img')
    const aboutBottomList = document.querySelectorAll('.about__bottom-list')
    //const aboutBottomRight = document.querySelectorAll('.about__bottom-right')
    const sectionTitleProject = document.querySelectorAll('.section-title__project')
    const projectBlockLeftText = document.querySelectorAll('.project__block-left-text')
    const projectBlockRight = document.querySelectorAll('.project__block-right')
    const sectionTitleFooter = document.querySelectorAll('.section-title__footer')
    const footerContactsPhone = document.querySelectorAll('.footer__contacts-phone')
    const footerContactsEmail = document.querySelectorAll('.footer__contacts-email')
    const footerContactsFrom = document.querySelectorAll('.footer__contacts-from')
    const footerMap = document.querySelectorAll('.footer__map')




    //const aboutTopLeft = document.querySelectorAll('.about__top-left')
    const projectBlockLeftImg = document.querySelectorAll('.project__block-left-img')
    const projectBlockCenterImg = document.querySelectorAll('.project__block-center-img')

    if (firstScreenTitle) animate(firstScreenTitle, 'animate__zoomIn')
    if (firstScreenContainer) animate(firstScreenContainer, 'animate__zoomIn')
    if (firstScreenButton) animate(firstScreenButton, 'animate__zoomIn')
    if (sectionTitleAbout) animate(sectionTitleAbout, 'animate__zoomIn')
    if (aboutTopList) animate(aboutTopList, 'animate__zoomIn')
    //if (aboutTopImg) animate(aboutTopImg, 'animate__zoomIn')
    if (aboutBottomList) animate(aboutBottomList, 'animate__backInLeft')
    //if (aboutBottomRight) animate(aboutBottomRight, 'animate__backInRight')
    if (sectionTitleProject) animate(sectionTitleProject, 'animate__zoomIn')
    if (projectBlockLeftText) animate(projectBlockLeftText, 'animate__zoomIn')
    if (projectBlockRight) animate(projectBlockRight, 'animate__backInRight')
    if (sectionTitleFooter) animate(sectionTitleFooter, 'animate__zoomIn')
    if (footerContactsPhone) animate(footerContactsPhone, 'animate__zoomIn')
    if (footerContactsEmail) animate(footerContactsEmail, 'animate__zoomIn')
    if (footerContactsFrom) animate(footerContactsFrom, 'animate__zoomIn')
    if (footerMap) animate(footerMap, 'animate__zoomIn')



    //if (aboutTopLeft) animate(aboutTopLeft, 'animate__backInLeft')
    if (projectBlockLeftImg) animate(projectBlockLeftImg, 'animate__backInLeft')
    if (projectBlockCenterImg) animate(projectBlockCenterImg, 'animate__zoomIn')


    window.addEventListener("scroll", () => {
        if (firstScreenTitle) animate(firstScreenTitle, 'animate__zoomIn')
        if (firstScreenContainer) animate(firstScreenContainer, 'animate__zoomIn')
        if (firstScreenButton) animate(firstScreenButton, 'animate__zoomIn')
        if (sectionTitleAbout) animate(sectionTitleAbout, 'animate__zoomIn')
        if (aboutTopList) animate(aboutTopList, 'animate__zoomIn')
        //if (aboutTopImg) animate(aboutTopImg, 'animate__zoomIn')
        if (aboutBottomList) animate(aboutBottomList, 'animate__backInLeft')
        //if (aboutBottomRight) animate(aboutBottomRight, 'animate__backInRight')
        if (sectionTitleProject) animate(sectionTitleProject, 'animate__zoomIn')
        if (projectBlockLeftText) animate(projectBlockLeftText, 'animate__zoomIn')
        if (projectBlockRight) animate(projectBlockRight, 'animate__backInRight')
        if (sectionTitleFooter) animate(sectionTitleFooter, 'animate__zoomIn')
        if (footerContactsPhone) animate(footerContactsPhone, 'animate__zoomIn')
        if (footerContactsFrom) animate(footerContactsFrom, 'animate__zoomIn')
        if (footerMap) animate(footerMap, 'animate__zoomIn')


        //if (aboutTopLeft) animate(aboutTopLeft, 'animate__backInLeft')
        if (projectBlockLeftImg) animate(projectBlockLeftImg, 'animate__backInLeft')
        if (projectBlockCenterImg) animate(projectBlockCenterImg, 'animate__zoomIn')
    });
});
(function () {
  var square = document.querySelector('.wrap-1');

  var observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      var entrySquare = entry.target.querySelector('.mask__home');
      if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
        return;
      }

      if (entry.isIntersecting) {
        entrySquare.classList.add('animate__zoomIn');
        return;
      }

      entrySquare.classList.remove('animate__zoomIn');
    });
  });

  observer.observe(square);
})();

(function () {
  var square = document.querySelector('.wrap-2');

  var observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      var entrySquare = entry.target.querySelector('.about__top-left');
      if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
        return;
      }

      if (entry.isIntersecting) {
        entrySquare.classList.add('animate__zoomIn');
        return;
      }

      entrySquare.classList.remove('animate__zoomIn');
    });
  });

  observer.observe(square);
})();

(function () {
  var square = document.querySelector('.wrap-3');

  var observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      var entrySquare = entry.target.querySelector('.aboutTopImg1');
      if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
        return;
      }

      if (entry.isIntersecting) {
        entrySquare.classList.add('animate__zoomIn');
        return;
      }

      entrySquare.classList.remove('animate__zoomIn');
    });
  });

  observer.observe(square);
})();

(function () {
  var square = document.querySelector('.wrap-4');

  var observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      var entrySquare = entry.target.querySelector('.aboutTopImg2');
      if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
        return;
      }

      if (entry.isIntersecting) {
        entrySquare.classList.add('animate__zoomIn');
        return;
      }

      entrySquare.classList.remove('animate__zoomIn');
    });
  });

  observer.observe(square);
})();

(function () {
  var square = document.querySelector('.wrap-5');

  var observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      var entrySquare = entry.target.querySelector('.aboutBottomRight');
      if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
        return;
      }

      if (entry.isIntersecting) {
        entrySquare.classList.add('animate__backInRight');
        return;
      }

      entrySquare.classList.remove('animate__backInRight');
    });
  });

  observer.observe(square);
})();
