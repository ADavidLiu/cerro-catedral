class Nav {
    constructor($btn, $nav) {
        this._$btn = $btn;
        this._originalBtnClass = this._$btn.attr("class");
        this._$backdrop = $(".backdrop");
        this._$nav = $nav;
        this._originalNavClass = this._$nav.attr("class");

        this._$btn.click(this.toggleNav);
        this._$backdrop.click(this.toggleNav);
    }

    toggleNav = () => {
        this._$btn.toggleClass(`${this._originalBtnClass}--active`);
        this._$backdrop.toggleClass("backdrop--active");
        this._$nav.toggleClass(`${this._originalNavClass}--active`);
    }
}