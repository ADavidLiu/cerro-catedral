class Tabs {
    constructor() {
        this.control = $("[data-tab-show]");
        this.contentItem = $("[data-tab-target]");
        this.control.click(this.changeContent);
    }

    changeContent = e => {
        const $this = $(e.currentTarget);
        this.control.removeClass("navigation__item--active");
        $this.addClass("navigation__item--active");

        const target = $this.attr("data-tab-show");
        const $target = $(`[data-tab-target="${target}"]`);
        this.contentItem.removeClass("tabs__content-item--active");
        $target.addClass("tabs__content-item--active");
    }    
}