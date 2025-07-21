(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.nav-bar').addClass('sticky-top shadow-sm');
        } else {
            $('.nav-bar').removeClass('sticky-top shadow-sm');
        }
    });

    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 5,
        time: 2000
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });


    // Testimonial-carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 2000,
        center: false,
        dots: false,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:2
            },
            1200:{
                items:2
            }
        }
    });

    
    
   // Back to top button
   $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


   

})(jQuery);

// Translator Code

function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        includedLanguages: 'en,fr,es,de,it,zh-CN,ar',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        autoDisplay: false
    }, 'google_translate_element');
}

document.addEventListener('DOMContentLoaded', function () {
    const languageMap = {
        'en': { name: 'English', flag: 'GB' },
        'fr': { name: 'Français', flag: 'FR' },
        'es': { name: 'Español', flag: 'ES' },
        'de': { name: 'Deutsch', flag: 'DE' },
        'it': { name: 'Italiano', flag: 'IT' },
        'zh-CN': { name: '中文', flag: 'CN' },
        'ar': { name: 'العربية', flag: 'SA' }
    };

    const translator = document.querySelector('.language-translator');
    const selectedLang = document.querySelector('.selected-language');
    const savedLang = getCurrentLanguageFromCookie();
    const langData = languageMap[savedLang] || languageMap['en'];

    selectedLang.querySelector('img').src = `https://flagsapi.com/${langData.flag}/flat/32.png`;
    selectedLang.querySelector('span').textContent = langData.name;

    selectedLang.addEventListener('click', function (e) {
        e.stopPropagation();
        translator.classList.toggle('active');
    });

    document.addEventListener('click', function () {
        translator.classList.remove('active');
    });

    // Load Google Translate script
    const script = document.createElement('script');
    script.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
    document.head.appendChild(script);
});

$(document).ready(function () {
    $('.language-options li').click(function () {
        const lang = $(this).data('lang');
        const flag = $(this).data('flag');
        const text = $(this).text();

        $('.selected-language img').attr('src', 'https://flagsapi.com/' + flag + '/flat/32.png');
        $('.selected-language span').text(text);

        setCookie('googtrans', '/en/' + lang, 1);
        document.cookie = "googtrans=/en/" + lang + ";path=/";

        location.reload();
    });

    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    const currentLang = getCurrentLanguageFromCookie();
    const currentFlag = $('.language-options li[data-lang="' + currentLang + '"]').data('flag');
    const currentText = $('.language-options li[data-lang="' + currentLang + '"]').text();

    $('.selected-language img').attr('src', 'https://flagsapi.com/' + currentFlag + '/flat/32.png');
    $('.selected-language span').text(currentText);
});

function getCurrentLanguageFromCookie() {
    const match = document.cookie.match(/googtrans=\/en\/([a-zA-Z\-]+)/);
    return match ? match[1] : 'en';
}

// End of Translator Code

