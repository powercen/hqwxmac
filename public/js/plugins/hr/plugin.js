(function () {
var hr = (function () {
  'use strict';

  var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

  var register = function (editor) {
    editor.addCommand('InsertHorizontalRule', function () {
      editor.execCommand('mceInsertContent', false, '<hr />');
    });
  };
  var $_79zk62c4jg8yowf2 = { register: register };

  var register$1 = function (editor) {
    editor.addButton('hr', {
      icon: 'hr',
      tooltip: 'Horizontal line',
      cmd: 'InsertHorizontalRule'
    });
    editor.addMenuItem('hr', {
      icon: 'hr',
      text: 'Horizontal line',
      cmd: 'InsertHorizontalRule',
      context: 'insert'
    });
  };
  var $_9mdc8uc5jg8yowf3 = { register: register$1 };

  global.add('hr', function (editor) {
    $_79zk62c4jg8yowf2.register(editor);
    $_9mdc8uc5jg8yowf3.register(editor);
  });
  function Plugin () {
  }

  return Plugin;

}());
})();
