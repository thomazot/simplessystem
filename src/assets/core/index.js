import './reset.styl';


define(['scrollmagic'], (ScrollMagic) => {
    // init controller
    const controller = new ScrollMagic.Controller({
        // container: '#container'
    });

    const efects = ['solutions', 'products', 'codificadores', 'suprimentos', 'contact', 'blog'];
    efects.forEach((scene) => {
        // create a scene
        const box = document.querySelector(`#${ scene }`);
        if(box) {
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