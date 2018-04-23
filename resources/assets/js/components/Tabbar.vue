<template>
    <nav class="mui-bar mui-bar-tab">
        <router-link :to="{name: 'home'}" class="hqwx-tab-item">
            <span class="mui-icon mui-icon-home"></span>
            <span class="mui-tab-label">培训首页</span>
        </router-link>
        <router-link :to="{name: 'interaction'}" class="hqwx-tab-item">
            <span class="mui-icon mui-icon-email"><span class="mui-badge">9</span></span>
            <span class="mui-tab-label">华庆互动</span>
        </router-link>
        <router-link :to="{name: 'punchcard'}" class="hqwx-tab-item">
            <span class="mui-icon mui-icon-contact"></span>
            <span class="mui-tab-label">考勤成绩</span>
        </router-link>
    </nav>
</template>

<script>

    export default {
        // computed:{
        //     iscurr: function () {
        //         return this.$route.name == 'trainingList' || this.$route.name == 'home'
        //     }
        // }
    }
</script>
