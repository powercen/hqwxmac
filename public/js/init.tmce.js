
tinymce.init({
    selector: '#postext',
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code wordcount colorpicker textcolor",
        "insertdatetime media table contextmenu paste imagetools"
    ],
    toolbar: "insertfile undo redo styleselect removeformat forecolor backcolor bold italic" +
    "| alignleft aligncenter alignright | alignjustify  bullist numlist outdent  | indent  link image media table code",
    language_url : '../js/languages/zh_CN.js',
    language: 'zh_CN',

    automatic_uploads: true,
    image_title: true,
    images_upload_url: 'uploadImage',
    file_picker_types: 'image',
    setup: function (editor) {
        editor.on('init change', function () {
            editor.save();
        });
    },
    file_picker_callback: function(cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.onchange = function() {
            var file = this.files[0];

            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), { title: file.name });
            };
        };
        input.click();
    }


});
