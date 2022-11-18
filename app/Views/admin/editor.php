<style>
    #editor—wrapper {
        border: 1px solid #ccc;
        z-index: 100;
        /* 按需定义 */
    }

    #toolbar-container {
        border-bottom: 1px solid #ccc;
    }

    #editor-container {
        height: 500px;
    }
</style>
<br />
<div class="mdui-container">
    <div id="editor—wrapper">
        <div id="toolbar-container">
        </div>
        <div id="editor-container">
        </div>
    </div>
</div>
<script>
    const {
        createEditor,
        createToolbar
    } = window.wangEditor

    const editorConfig = {
        placeholder: 'Type here...',
        onChange(editor) {
            const html = editor.getHtml()
            // 也可以同步到 <textarea>
        }
    }

    const editor = createEditor({
        selector: '#editor-container',
        html: '<p><br></p>',
        config: editorConfig,
        scroll: false
    })

    const toolbarConfig = {
        toolbarKeys: [
            'headerSelect', 'blockquote', 'underline', 'bold', 'italic', 'through', 'code', 'bulletedList', 'numberedList', 'emotion', 'insertLink', 'insertImage', 'insertVideo', 'codeBlock', 'divider', 'undo', 'redo', 'fullScreen'
        ]
    }

    const toolbar = createToolbar({
        editor,
        selector: '#toolbar-container',
        config: toolbarConfig,
    })
</script>