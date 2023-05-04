if (document.querySelector('.front-main-section__title--highlited')) {
    let highlighted = document.querySelector('.front-main-section__title--highlited');
    let images = document.querySelectorAll('.front-main-section__picture');
    let interval;
    let i = 0;
    highlighted.onmouseover = function(event) {
        interval = setInterval(function (){
            let imageActive = document.querySelector('.front-main-section__picture--active');
            imageActive.classList.remove('front-main-section__picture--active');

            i<images.length-1?i++:i=0;

            images[i].classList.add('front-main-section__picture--active');
        }, 800)
    };

    highlighted.onmouseout = function(event) {
        clearInterval(interval)
    };
}