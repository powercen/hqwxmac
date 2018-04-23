<template>
    <div class="mui-content">
        <ul class="mui-table-view mui-grid-view mui-grid-9">
            <router-link :to="{name: 'trainingList', params: {id: tag.id, icon: tag.icon, tag: encodeURI(tag.title)}}"
                         v-for="tag in tags"
                         :key="tag.id"
                         class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3" tag="li"><a>
                <span class="mui-icon" :class="tag.icon"></span>
                <div class="mui-media-body">{{ tag.title }}</div></a></router-link>
        </ul>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                tags: [
                    {id: '1', icon: 'mui-icon-email', title: '厂部培训'},
                    {id: '2', icon: 'mui-icon-contact', title: '数字化知识'},
                    {id: '3', icon: 'mui-icon-home', title: '采油知识'},
                    {id: '4', icon: 'mui-icon-map', title: '集输知识'},
                    {id: '5', icon: 'mui-icon-chat', title: '专业技术'},
                    {id: '6', icon: 'mui-icon-contact', title: '数字化知识'},
                    {id: '7', icon: 'mui-icon-home', title: '采油知识'},
                    {id: '8', icon: 'mui-icon-map', title: '集输知识'},
                    {id: '9', icon: 'mui-icon-chat', title: '专业技术'},
                    {id: '10', icon: 'mui-icon-map', title: '集输知识'},
                    {id: '11', icon: 'mui-icon-chat', title: '专业技术'},
                    {id: '12', icon: 'mui-icon-chat', title: '专业技术'},
                    {id: '13', icon: 'mui-icon-map', title: '集输知识'},
                    {id: '14', icon: 'mui-icon-chat', title: '专业技术'},
                    {id: '15', icon: 'mui-icon-contact', title: '数字化知识'},
                    {id: '16', icon: 'mui-icon-home', title: '采油知识'},
                    {id: '17', icon: 'mui-icon-map', title: '集输知识'},
                    {id: '18', icon: 'mui-icon-chat', title: '专业技术'},
                    {id: '19', icon: 'mui-icon-map', title: '集输知识'},
                    {id: '20', icon: 'mui-icon-gear', title: '专业技术'},
                    {id: '21', icon: 'mui-icon-chat', title: '专业技术'},
                    {id: '22', icon: 'mui-icon-map', title: '集输知识'},
                    {id: '23', icon: 'mui-icon-chat', title: '专业技术'},
                    {id: '24', icon: 'mui-icon-contact', title: '数字化知识'},
                    {id: '25', icon: 'mui-icon-home', title: '采油知识'},
                    {id: '26', icon: 'mui-icon-map', title: '集输知识'},
                    {id: '27', icon: 'mui-icon-chat', title: '专业技术'},
                    {id: '28', icon: 'mui-icon-map', title: '集输知识'},
                    {id: '29', icon: 'mui-icon-chat', title: '专业技术'}
                ]
            }
        }
    }
</script>
