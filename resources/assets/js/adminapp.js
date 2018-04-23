require('./adminboot');
window.Vue = require('vue');


if($('#adminapp').length){

    new Vue({
        el: '#adminapp',
        data: {
            selected: '',
            icons: ['icon-shanchu', 'icon-tuichu', 'icon-bianji']
        },
        methods: {
            changeSelected: function (event) {
                this.selected = $(event.target).data('icon');
            }
        }
    });
}


