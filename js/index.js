/*global ace */
var editor = ace.edit("editor");
editor.setTheme("ace/theme/monokai");
editor.getSession().setMode("ace/mode/javascript");

$('#treeview span').click(function(){
    
    $.ajax({
        url: 'getPage.php',
    
        data: {
            caminho: $(this).data('url')
        },
        success: function( response ) {
            console.log(response);
            editor.setValue(response);
        }
    });
    
    var extension = $(this).data('url')
    extension = extension.split(".");
    extension = extension[extension.length-1];
    console.log('A extensao é '+extension)
    editor.getSession().setMode("ace/mode/"+extension);
});

$('.save-button').click(function(){
    
})