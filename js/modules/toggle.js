class Toggle {
    constructor() {
        this._$trigger = $("[data-toggle]");
        this._$triggerIcon = this._$trigger.children(".toggle__trigger-icon");
        this._plusIconSrc = this._$triggerIcon.attr("src");
        this._minusIconSrc = "images/i-menos-primary.svg";

        this._$trigger.click(e => {
            const _$this = $(e.currentTarget);
            const _currentIconSrc = this._$triggerIcon.attr("src");
            _currentIconSrc === this._plusIconSrc ? this._$triggerIcon.attr("src", this._minusIconSrc) : this._$triggerIcon.attr("src", this._plusIconSrc);

            const _target = _$this.attr("data-toggle");
            const _$target = $(`[data-toggle-target="${_target}"]`);
            _$target.slideToggle();
        });
    }
}