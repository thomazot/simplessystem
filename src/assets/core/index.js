import './reset.styl';


define(['scrollmagic', 'jquery'], (ScrollMagic, $) => {
    // init controller
    const controller = new ScrollMagic.Controller({
        // container: '#container'
    });

    const efects = ['solutions', 'products', 'codificadores', 'suprimentos', 'contact', 'blog'];
    let index = 1;
    efects.forEach((scene) => {
        // create a scene
        const box = document.querySelector(`#${ scene }`);
        if(box) {
            $(box).css({ 'position': 'relative', 'z-index': index++  });
            box.classList.add('scrollmagic');

            const sceneMagic = new ScrollMagic.Scene({
                triggerElement: `#${ scene }`,
                duration: 100,
                reverse: true
            })
                .setClassToggle(`.${ scene }__container`, `${ scene }__container--show`)
                .addTo(controller);
                
                sceneMagic.on('end', ()=> sceneMagic.removeClassToggle());
        }
    });

})