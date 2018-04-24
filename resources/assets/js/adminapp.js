require('./adminboot');
window.Vue = require('vue');

if($('#adminapp').length){

    const vm = new Vue({
        el: '#adminapp',
        data: {
            selected: '',
            icons: ['icon-shanchu', 'icon-tuichu', 'icon-bianji']
        },
        methods: {
            changeSelected: function (event) {
                this.selected = $(event.target).data('icon');
            }
        },

        mounted: function () {
             let tag_icon = $('.position-absolute .iconfont').data('tag-icon')
            if(tag_icon){
                this.selected = tag_icon;
            }

        }

    });




}


