<template>
    <li class="mui-table-view-cell mui-media">
        <router-link :to="{name: 'detail', params: { tid: list.tid, id: list.id}}">
            <img class="mui-media-object mui-pull-left" :src="list.pic_url" :class="alignImage">
            <div class="mui-media-body">
                <h5 class="subtitle mui-ellipsis">{{ list.title }}</h5>
                <p class='summary mui-ellipsis'>{{ list.summary }}</p>
            </div>
        </router-link>
    </li>
</template>

<script>
    export default {
        props: {
            list: {
                type: Object,
                required: true,
                default:function () {
                    return {title: '', pic_url: '', summary: ''};
                }
            }
        },

        data(){
            return {
                randomBoolean: Math.random() > 0.5
            }
        },

        computed: {
            alignImage: function () {
                return {
                    'mui-pull-left': this.randomBoolean,
                    'mui-pull-right': !this.randomBoolean,
                }
            }
        }


    }
</script>