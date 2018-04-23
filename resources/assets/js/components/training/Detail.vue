<template>
    <div class="mui-content px-3 detail-content">
        <h4 class="title mt-3 mb-2 pl-0">这是标题标题比萨老师的速度加快</h4>
        <ul class="nav justify-content-start mb-4">
            <li class="nav-item text-muted mr-3">王婷</li>
            <li class="nav-item text-muted">2018-04-21</li>
        </ul>
        <div class="content" v-html="content"></div>
        <ul class="nav footer mt-3 pb-3">
            <li class="nav-item text-muted mr-3">阅读 20254</li>
            <li class="nav-item text-muted">
                <span class="mui-icon mui-icon-star-filled"></span> 585
            </li>
        </ul>
    </div>
</template>

<style lang="scss">

</style>

<script>
    export default {
        data(){
            return {
                title: '标题',
                update_at: '4小时前发布',
                author: '王婷',
                content: '<p>&nbsp;</p>\n' +
                '<p style="text-align: center; font-size: 15px;"><img src="images/glyph-tinymce@2x.png" alt="TinyMCE" width="77" height="70" /></p>\n' +
                '<p style="text-align: center;">This demo includes our most popular Premium Plugins: <a href="powerpaste">PowerPaste</a>, <a href="enhanced-media-embed/">Enhanced Media Embed</a>, <a href="advanced-code-editor/">Advanced Code Editor</a>, <a href="link-checker/">Link Checker</a>, <a href="accessibility-checker">Accessibility Checker</a>, <a href="spell-checker-pro">Spell Checker Pro</a> &amp; <a href="http://www.moxiemanager.com">MoxieManager</a>.</p>\n' +
                '<p style="text-align: center;">TinyMCE is the world\'s #1 web-based HTML WYSIWYG editor control.</p>\n' +
                '<p style="text-align: center;">Used on more than 100 million websites and with upward of 70% market share*, <br />TinyMCE is the first and only choice for your next project.</p>\n' +
                '<p style="text-align: center;"><em>TinyMCE enables you to convert HTML textarea fields or other HTML elements to editor instances.</em><br />* Market share stats, Wappalyzer, 2017.</p>\n' +
                '<p style="text-align: center;">&nbsp;</p>\n' +
                '<div style="left: 0px; width: 100%; height: 0px; position: relative; padding-bottom: 56.25%; max-width: 650px;" data-ephox-embed-iri="https://v.qq.com/iframe/player.html?vid=p00263zf5sl&amp;tiny=0&amp;auto=0"><iframe style="border: 0; top: 0; left: 0; width: 100%; height: 100%; position: absolute;" src="https://v.qq.com/iframe/player.html?vid=p00263zf5sl&amp;auto=0" allowfullscreen="allowfullscreen"></iframe></div>'

            }
        },
        mounted: function () {
            let elem = this.$el.querySelector('iframe');
            if(elem){
                elem.width = '100%';
                elem.height = 'auto';
            }

        }
    }
</script>