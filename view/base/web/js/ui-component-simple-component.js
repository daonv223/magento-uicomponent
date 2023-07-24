define(['uiElement', 'ko'], function (Element, ko) {
    return Element.extend({
        defaults: {
            template: 'DaoNguyen_UiComponent/ui-component-simple-component'
        },
        message: ko.observable('Hello Knockout.js!')
    });
});
