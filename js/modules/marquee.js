class Marquee {
    constructor($elem) {
        $elem.marquee({
            duration: 15000,
            gap: 5,
            delayBeforeStart: 0,
            direction: 'left',
            duplicated: true
        });
    }
}