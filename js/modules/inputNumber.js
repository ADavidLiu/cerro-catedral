class InputNumber {
    constructor() {
        this._$btn = $(".form__input-control");
        this._$btn.click(this.updateVal);
    }

    updateVal = e => {
        const _$this = $(e.currentTarget);
        const _action = _$this.attr("class").split("--")[1];
        const _$input = _$this.parent(".form__input-controls").siblings("input");
        let _currentVal = _$input.val();
        if (_action === "add") {
            _currentVal++
        } else if(_currentVal <= _$input.attr("min")) {
            _currentVal = _$input.attr("min");
        } else {
            _currentVal--
        }
        _$input.val(_currentVal);
    }
}