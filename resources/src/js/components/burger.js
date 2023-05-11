(function() {
    const burger = document.querySelector(".burger");
    const mobileMenu = document.querySelector(".mobile-menu");
    const mobileNav = document.querySelector(".mobile__nav");
    const navLink = document.querySelectorAll('.nav-link')
    const burgerSpan = document.querySelectorAll(".burger-span")

    burger.addEventListener('click', (e) => {
        mobileMenu.classList.toggle("active");
        mobileNav.classList.toggle("active");
        navLink.forEach((val) => {
            val.classList.toggle('active')
        })

        document.querySelector(".burger").classList.toggle("active");
        document.querySelector("body").classList.toggle("lock");

        burgerSpan.forEach((val) => {
            val.classList.toggle("active");
        });
    })

    navLink.forEach((val) => {
      val.addEventListener("click", (e) => {
          mobileMenu.classList.remove("active");
          mobileNav.classList.remove("active");
          navLink.forEach((val) => {
              val.classList.remove('active')
          })

          document.querySelector(".burger").classList.remove("active");
          document.querySelector("body").classList.remove("lock");

          burgerSpan.forEach((val) => {
              val.classList.remove("active");
          });

      })
  })
})();
