var typed = new Typed('.animate', {
       strings: [
         'PRTYBYZ',
         'Script Writter'
         ],
         typeSpeed: 100,
         backSpeed: 100,
         loop: true
     });

     function menu(x) {
      x.classList.toggle("change");
      document.querySelector('.menu-con .menu').classList.toggle('asyu');
    }
    