<template>
    <div class="mui-content">
        <h5 class="title">
            <span class="mui-icon font-weight-bold" :class="$route.params.icon"></span>
            <span class="text-lighter">{{ decodeURI($route.params.tag) }}</span>
        </h5>
        <ul class="mui-table-view">
            <template v-for="list in lists" v-if="lists.length">
                <media-list
                        v-if="list.type == 'media'"
                        :key="list.id"
                        :list="list">
                </media-list>
                <text-list
                        v-if="list.type == 'text'"
                        :key="list.id"
                        :list="list">
                </text-list>
            </template>
        </ul>
    </div>
</template>

<style lang="scss">
    .mui-table-view  {
        .mui-media-object{
            line-height: 50px;
            max-width: 50px;
            height: 50px;
        }
        .mui-table-view-cell {
            padding: 10px 12px;
        }
        .mui-table-view-cell:after {
            left: 8px;
            background-color: #e8e8e8;
        }
        .mui-media-object.mui-pull-left,.mui-media-object.mui-pull-right {
            margin-right: 8px;
        }
    }
</style>

<script>

    export default {
        components: {
            'media-list': require('./MediaLst'),
            'text-list': require('./TextList')
        },
        data: function () {
            return {
                lists: [
                    {id: '1', tid: 1,type: 'media', title: '毛姆：诗歌是文学的春花与冠冕', summary: '首先，我要坚持的就是：阅读应该是一种享受。既不能帮你获得学位，也不能助你谋生糊口；不能教会你驾船', pic_url: '/images/1.jpg'},
                    {id: '2', tid: 1,type: 'media',title: '俯瞰西沙', summary: '路也，女，现执教于济南大学文学院。著有诗集、散文随笔集、中短篇小说集、长篇小说及文论', pic_url: '/images/2.jpg'},
                    {id: '3', tid: 1,type: 'text',title: '不在城里的人不知道黑色是残缺的', summary: '郑燮新竹高于旧竹枝，全凭老干为扶持。 下年再有新生者，十丈龙孙绕凤池', pic_url: ''},
                    {id: '4', tid: 1,type: 'media',title: '人有悲欢离合，月有阴晴圆缺，此事古难全', summary: '古来圣贤皆寂寞，惟有饮者留其名', pic_url: '/images/2.jpg'},
                    {id: '5', tid: 1,type: 'text',title: '击壤歌', summary: '五花马，千金裘，呼儿将出换美酒，与尔同销万古愁', pic_url: '/images/1.jpg'},
                    {id: '6', tid: 1,type: 'text',title: '这样的日子有何不自在谁还去羡慕帝王的权力凿一眼井就可以', summary: '太阳出来就去耕作田地，太阳落山就回家去休息凿一眼井就可以有水喝，种出庄稼就不会饿肚皮', pic_url: '/images/2.jpg'},
                    {id: '7', tid: 1,type: 'media',title: '击壤歌是一首淳朴的民谣', summary: '这位八九十岁的老人所歌的歌词就是：“日出而作，日入而息。凿井而饮，耕田而食', pic_url: '/images/1.jpg'},
                    {id: '8', tid: 1,type: 'text',title: '这首歌谣大约流传于距今4000多年前', summary: '老百姓过着安定舒适的日子。一位八九十岁的老人，一边悠闲地做着“击壤”的游戏，一边唱出了', pic_url: '/images/2.jpg'}
                ]
            }
        }
    }
</script>

<!--
<div class="mui-content">
    <div class="title">
        {{ decodeURI($route.params.tag) }}
    </div>
    <ul class="mui-table-view">
        <li v-for="(list, index) in lists" :key="list.id" class="mui-table-view-cell mui-media">
            <a href="">
                <img :class="{'mui-pull-left': (index + 1)%2,'mui-pull-right': !((index + 1 )%2)}" class="mui-media-object" :src="list.pic_url">
                <div class="mui-media-body">
                    {{ list.title }}
                    <p class='mui-ellipsis'>{{ list.summary }}</p>
                </div>
            </a>
        </li>
    </ul>
</div>
-->
