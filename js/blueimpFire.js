///////////////////////////////// Primo scaffale

$("#blueimp-gallery-fare-vela").click( function() {
    blueimp.Gallery([
        wpurl + "/wp-content/uploads/2015/09/d7ba25_3555cf66df3440eca78c81856d024398.jpg",
        wpurl + "/wp-content/uploads/2015/09/d7ba25_3d20a9163a6b4fa6903c27e4ab74138d.png",
        wpurl + "/wp-content/uploads/2015/09/d7ba25_3d20a9163a6b4fa6903c27e4ab74138d.png"

    ]);
});

$("#blueimp-gallery-intimo").click(function (){
    blueimp.Gallery([
        "/wp-content/uploads/2015/09/d7ba25_23ffe15296644bbdbab4bccb68044717-1.png",
        wpurl + "/wp-content/uploads/2015/09/d7ba25_e3063c858c824718b3164c54dc523238.png",
        wpurl + "/wp-content/uploads/2015/09/d7ba25_4a45b32f017548f497fc8343c44db8a6.png",
    ]);
});

$("#blueimp-gallery-menshealth").click(function () {
     blueimp.Gallery([
        wpurl + "/wp-content/uploads/2015/09/d7ba25_4201ad657587455d884fd08b9511165d.png",
        wpurl + "/wp-content/uploads/2015/09/d7ba25_7c86b2fee6824764be8be9f9376cbc5b.png",
        wpurl + "/wp-content/uploads/2015/09/d7ba25_c3dfbc1caf7145fba539f54a7e454a39.png"
     ]);
});

$("#blueimp-gallery-jersey-journal").click(function () {
     blueimp.Gallery([
        wpurl + "/wp-content/uploads/2015/09/jersey-journal-copertina.jpg",
     ]);
});

$("#blueimp-gallery-startup").click(function () {
     blueimp.Gallery([
        wpurl + "/wp-content/uploads/2015/09/copertina-startup.jpg",
        wpurl + "/wp-content/uploads/2015/09/startup-magazine1.jpg",
     ]);
});

$("#blueimp-gallery-thatsitalia").click(function () {
     blueimp.Gallery([
        wpurl + "/wp-content/uploads/2015/09/1834-1.jpg",
        wpurl + "/wp-content/uploads/2015/09/startup-magazine1.jpg",
        wpurl + "/wp-content/uploads/2015/09/1835.jpg"
     ]);
});

///////////////////////////////// Secondo scaffale

$("#blueimp-uomo-moderno").click(function () {
     blueimp.Gallery([
        wpurl + "/wp-content/uploads/2015/09/uomomoderno-copertina.jpg",
        wpurl + "/wp-content/uploads/2015/09/uomomoderno-contenuto.jpg"
     ]);
});

$("#blueimp-nautica").click(function () {
     blueimp.Gallery([
        wpurl + "/wp-content/uploads/2015/09/nautica-copertina.jpg",
        wpurl + "/wp-content/uploads/2015/09/nautica-contenuti.jpg"
     ]);
});

$("#blueimp-il-gommone").click(function () {
     blueimp.Gallery([
        wpurl + "/wp-content/uploads/2015/09/ilgommone-copertina.jpg",
        wpurl + "/wp-content/uploads/2015/09/il-gommone-content.jpg"
     ]);
});

//////////////////////////////////////// Premi

$("#the-start-something").click(function () {
     blueimp.Gallery([
        wpurl + "/wp-content/uploads/2015/09/d7ba25_b606913a1b39421c92e0c87b232f081a-1.jpg",
        wpurl + "/wp-content/uploads/2015/09/IMG_4763.jpg",
        wpurl + "/wp-content/uploads/2015/09/IMG_4764.jpg"
     ]);
});

$("#innovation-makers").click(function () {
     blueimp.Gallery([
        wpurl + "/wp-content/uploads/2015/09/d7ba25_b606913a1b39421c92e0c87b232f081a-1.jpg"
     ]);
});

$("#cerisdi").click(function () {
     blueimp.Gallery([
        wpurl + "/wp-content/uploads/2015/09/cerisdi.jpg"
     ]);
});

$("#siestas-award").click(function () {
     blueimp.Gallery([
        wpurl + "/wp-content/uploads/2015/09/innovation-maker.jpg"
     ]);
});

/////////////////////////////// VIDEO

$("#PlayVideos").click(function () {
    var fullscreenOptions = {
        // Defines if the gallery should open in fullscreen mode:
        fullScreen: false
    };

    blueimp.Gallery([
        {
            href: 'https://www.youtube.com/watch?v=kUwBjT7Bu8s',
            type: 'text/html',
            youtube: 'kUwBjT7Bu8s',
            poster: 'https://img.youtube.com/vi/kUwBjT7Bu8s/maxresdefault.jpg'
        },
        {
            href: 'https://www.youtube.com/watch?v=aTMjkFx1pbk',
            type: 'text/html',
            youtube: 'aTMjkFx1pbk',
            poster : '/wp-content/themes/seabagtemplate/img/seabag-intro.jpg'
        }
    ]);
});

$(".photos").click(function () {
    var a = $(this).find('img[src]');
    a = a[0].currentSrc; // La foto cliccata
    var b = [ // Tutte le foto
        wpurl + '/wp-content/uploads/2015/10/seabag-bianca.jpg',
        wpurl + '/wp-content/uploads/2015/08/schiuma.jpg',
        wpurl + '/wp-content/uploads/2015/07/1007.jpg',
        wpurl + '/wp-content/uploads/2015/08/seabagTWO1.jpg',
        wpurl + '/wp-content/uploads/2015/08/sundial-3.jpg',
        wpurl + '/wp-content/uploads/2015/08/modella.jpg',
        wpurl + '/wp-content/uploads/2015/08/lookatpareo.jpg',
        wpurl + '/wp-content/uploads/2015/10/seabag-splash.jpg',
        wpurl + '/wp-content/uploads/2015/10/bimba-seabag.jpg',
        wpurl + '/wp-content/uploads/2015/10/girl-seabag.jpg',
        wpurl + '/wp-content/uploads/2015/10/backpack-seabag.jpg',
        wpurl + '/wp-content/uploads/2015/10/kate-seabag.jpg',
        wpurl + '/wp-content/uploads/2015/10/sundial-seabag.jpg'
    ],
        c = skipPhoto(b, a); // metti in prima posizione la foto cliccata

    blueimp.Gallery(c);
});

$(".album-fabbrica").click(function () {
    var a = photoClicked($(this)); // La foto cliccata

    var b = [ // Tutte le foto
        wpTheme + "/img/company-foto/rotoli/rotolo.jpg",
        wpTheme + "/img/company-foto/pressa/pressa.jpg",
        wpTheme + "/img/company-foto/stampante/stampante.jpg",
        wpTheme + "/img/company-foto/strumenti pressa/pressa.jpg",
        wpTheme + "/img/company-foto/seabag/seabag.jpg",
        wpTheme + "/img/company-foto/floating/floating.jpg"
    ];
    c = skipPhoto(b, a); // metti in prima posizione la foto cliccata
    blueimp.Gallery(c);
});

////////////////////////////////////////////// Functs

function photoClicked(clickedPhoto) {
    var x = $(clickedPhoto).find('img[data-src]');

    x = x[0].currentSrc;
    x = x.split("-anteprima");
    x = x[0] + x[1];

    return(x);
}

function skipPhoto(photos, skipThat) {
    var skipToExaminate = photos,
        photosWithSkip = [];
    photosWithSkip.push(skipThat);
    for (i = 0; skipToExaminate.length > i; i ++) {
        if (skipToExaminate[i] !== skipThat) {
            photosWithSkip.push(skipToExaminate[i]);
        }
    }
    return(photosWithSkip);
}
