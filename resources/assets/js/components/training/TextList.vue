<template>
    <li class="mui-table-view-cell">
        <router-link :to="{name: 'detail', params: { tid: list.tid, id: list.id }}">
        <div class="mui-table">
            <div class="mui-table-cell mui-col-xs-10">
                <h5 class="subtitle mui-ellipsis">{{ list.title }}</h5>
                <p class="summary mui-ellipsis-2">{{ list.summary }}</p>
            </div>
        </div>
        </router-link>
    </li>
</template>

<style lang="scss">

</style>

<script>
    export default {
        props: {
            list: {
                type: Object,
                required: true,
                default:function () {
                   return {title: '', summary: ''};
                }
            }
        }
    }
</script>