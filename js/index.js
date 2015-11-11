/*global ace */
var editor = ace.edit("editor");
editor.setTheme("ace/theme/monokai");
editor.getSession().setMode("ace/mode/javascript");
editor.setOption("enableEmmet", true);

$('#treeview span').click(function(){
    
    $.ajax({
        url: 'getPage.php',
    
        data: {
            caminho: $(this).data('url')
        },
        success: function( response ) {
            editor.setValue(response);
        }
    });
    
    var extension = $(this).data('url')
    extension = extension.split(".");
    extension = extension[extension.length-1];
    console.log('A extensao é '+extension)
    editor.getSession().setMode("ace/mode/"+extension);
    $('body').attr('data-url', $(this).data('url'));
    
});

$('.save-button').click(function(){
    
    $('.save-button').attr('disabled', 'true');
    
    $.ajax({
        url: 'savePage.php',
    
        data: {
            caminho: $('body').data('url'),
            texto: editor.getValue()
        },
        success: function( response ) {
            $('.save-button').removeAttr('disabled');
            console.log(response);
        }
    });
    
    
})