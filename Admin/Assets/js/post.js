var post = {
    ajaxMethod: 'POST',

    add: function() {
    var file;
$('input[type=file]').on('change', function(){
	file = $('#formFile');
});
        //file = $('#formFile')[0];
        
        var formData = new FormData();
        if( typeof file != 'undefined' ) formData.append( 'file_uploaded', 1 );
        formData.append('title', $('#formTitle').val());
        formData.append('content', $('.redactor-editor').html());
        formData.append('file', file);

        $.ajax({
            url: '/admin/post/add/',
            type: this.ajaxMethod,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            beforeSend: function(){
console.log(formData.get('file_uploaded'));
            },
            success: function(result){
                console.log(result);
                //window.location = '/admin/posts/edit/' + result;
            }
        });
    },

    update: function() {
        var formData = new FormData();

        formData.append('post_id', $('#formPostId').val());
        formData.append('title', $('#formTitle').val());
        formData.append('content', $('.redactor-editor').html());

        $.ajax({
            url: '/admin/post/update/',
            type: this.ajaxMethod,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            beforeSend: function(){

            },
            success: function(result){
                console.log(result);
            }
        });
    }
};