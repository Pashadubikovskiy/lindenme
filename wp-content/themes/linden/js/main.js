
window.addEventListener("DOMContentLoaded", (event) => {
    if (document.querySelector('.front-main-section__title--highlited')) {
        let highlighted = document.querySelector('.front-main-section__title--highlited');
        let images = document.querySelectorAll('.front-main-section__picture');
        let interval;
        let i = 0;

        const animationFunc = (int) => {
            interval = setInterval(function (){
                let imageActive = document.querySelector('.front-main-section__picture--active');
                imageActive.classList.remove('front-main-section__picture--active');

                i<images.length-1?i++:i=0;

                images[i].classList.add('front-main-section__picture--active');
            }, int)
        }
        if (window.innerWidth < 768) {
            animationFunc(1500);
        } else {
            highlighted.onmouseover = function(event) {
                animationFunc(800)
            };

            highlighted.onmouseout = function(event) {
                clearInterval(interval)
            };
        }
    }
    const allBtns = document.querySelectorAll('.btn--secondary a, .c-button');

    allBtns.forEach(function(btn) {
        const rippleContainer = document.createElement('div');
        rippleContainer.classList.add('c-ripple', 'js-ripple');
        rippleContainer.innerHTML = '<span class="c-ripple__circle"></span>';
        btn.prepend(rippleContainer);
    })
    allBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            const target = e.currentTarget.querySelector('.js-ripple');
            const offset = target.parentElement.getBoundingClientRect();
            const circle = target.querySelector('.c-ripple__circle');

            const x = e.pageX - offset.left;
            const y = e.pageY - offset.top;

            circle.style.top = y + 'px';
            circle.style.left = x + 'px';


            target.classList.add('is-active');
        });

        btn.addEventListener('animationend', function(e) {
            e.currentTarget.querySelector('.js-ripple').classList.remove('is-active');
        });
    });

    if (document.querySelector('.front-main-section__btn--watch')) {
        const overlay = document.querySelector('.overlay');
        const overlayOpenTriggers = document.querySelectorAll('.front-main-section__btn--watch');
        const overlayCloseTriggers = document.querySelectorAll('.overlay__close, .overlay__bg');
        overlayOpenTriggers.forEach(elem => elem.addEventListener('click', ()=> {
            overlay.classList.add('active');
            overlay.querySelector('iframe').src = document.querySelector('.front-main-section__btn--watch').dataset.src;
        }))
        overlayCloseTriggers.forEach(elem => elem.addEventListener('click', ()=> {
            overlay.classList.remove('active');
            overlay.querySelector('iframe').src = '';
        }))
    }
    window.addEventListener('scroll', function() {
        var nav = document.querySelector('header#masthead');

        if (window.pageYOffset >= 50) {
            nav.classList.add('sticky');
        } else {
            nav.classList.remove('sticky');
        }
    });
    if (document.querySelectorAll('a[href="#contact"]').length > 0) {
        document.querySelectorAll('a[href="#contact"]').forEach(link => {
            let emailInput = document.querySelector('.wpcf7-email');
            link.addEventListener('click', (e)=> {
                e.preventDefault();
                console.log(emailInput.getBoundingClientRect().y+'px')
                window.scrollTo({
                    top: emailInput.getBoundingClientRect().y,
                    behavior: "smooth"
                });
                setTimeout(()=>emailInput.focus(), 1000)
            })
        })
    }
    document.addEventListener('wpcf7mailsent', function(event) {
        document.querySelector('.wpcf7-form').innerHTML += '<div class="result-success"><img src="wp-content/themes/linden/img/success.svg">Application submitted successfully!</div>';
        setTimeout(()=> {
            document.querySelector('.result-success').classList.add('active');
        }, 10)
        setTimeout(()=> {
            document.querySelector('.result-success').classList.remove('active');
        }, 2600)
        setTimeout(()=> {
            document.querySelector('.result-success').remove();
        }, 3000)
    });
});