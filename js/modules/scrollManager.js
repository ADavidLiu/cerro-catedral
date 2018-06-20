class ScrollManager {
    constructor() {
        this._$trigger = $("[data-scroll-to]");

        this._$trigger.click(this.scroll);
    }

    scroll = e => {
        const _$this = $(e.currentTarget);
        const _target = _$this.attr("data-scroll-to");
        const _$target = $(`[data-scroll-target="${_target}"]`);
        $.scrollTo(_$target, 500);
    }
}