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
        
        // Work with the response
        success: function( response ) {
            console.log(response);
            editor.setValue(response);
        }
    });
});