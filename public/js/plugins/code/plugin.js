(function () {
var code = (function () {
  'use strict';

  var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

  var global$1 = tinymce.util.Tools.resolve('tinymce.dom.DOMUtils');

  var getMinWidth = function (editor) {
    return editor.getParam('code_dialog_width', 600);
  };
  var getMinHeight = function (editor) {
    return editor.getParam('code_dialog_height', Math.min(global$1.DOM.getViewPort().h - 200, 500));
  };
  var $_4clgja9ljg8yow5s = {
    getMinWidth: getMinWidth,
    getMinHeight: getMinHeight
  };

  var setContent = function (editor, html) {
    editor.focus();
    editor.undoManager.transact(function () {
      editor.setContent(html);
    });
    editor.selection.setCursorLocation();
    editor.nodeChanged();
  };
  var getContent = function (editor) {
    return editor.getContent({ source_view: true });
  };
  var $_9zyx8n9njg8yow5u = {
    setContent: setContent,
    getContent: getContent
  };

  var open = function (editor) {
    var minWidth = $_4clgja9ljg8yow5s.getMinWidth(editor);
    var minHeight = $_4clgja9ljg8yow5s.getMinHeight(editor);
    var win = editor.windowManager.open({
      title: 'Source code',
      body: {
        type: 'textbox',
        name: 'code',
        multiline: true,
        minWidth: minWidth,
        minHeight: minHeight,
        spellcheck: false,
        style: 'direction: ltr; text-align: left'
      },
      onSubmit: function (e) {
        $_9zyx8n9njg8yow5u.setContent(editor, e.data.code);
      }
    });
    win.find('#code').value($_9zyx8n9njg8yow5u.getContent(editor));
  };
  var $_bcixqd9kjg8yow5r = { open: open };

  var register = function (editor) {
    editor.addCommand('mceCodeEditor', function () {
      $_bcixqd9kjg8yow5r.open(editor);
    });
  };
  var $_9erc1z9jjg8yow5p = { register: register };

  var register$1 = function (editor) {
    editor.addButton('code', {
      icon: 'code',
      tooltip: 'Source code',
      onclick: function () {
        $_bcixqd9kjg8yow5r.open(editor);
      }
    });
    editor.addMenuItem('code', {
      icon: 'code',
      text: 'Source code',
      onclick: function () {
        $_bcixqd9kjg8yow5r.open(editor);
      }
    });
  };
  var $_76a7v89ojg8yow5v = { register: register$1 };

  global.add('code', function (editor) {
    $_9erc1z9jjg8yow5p.register(editor);
    $_76a7v89ojg8yow5v.register(editor);
    return {};
  });
  function Plugin () {
  }

  return Plugin;

}());
})();
