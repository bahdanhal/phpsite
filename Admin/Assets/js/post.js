var post = {
    ajaxMethod: 'POST',

    add: function() {
        
        var formData = new FormData();
        formData.append('title', $('#formTitle').val());
        formData.append('content', $('#formContent').val());
        formData.append('file', $('#formFile')[0].files[0]);

        $.ajax({
            url: '/admin/post/add/',
            type: this.ajaxMethod,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            beforeSend: function(){
            },
            success: function(result){
                console.log(result);
                window.location = '/admin/posts/edit/' + result;
            }
        });
    },

    update: function() {

        var formData = new FormData();
        formData.append('title', $('#formTitle').val());
        formData.append('content', $('#formContent').val());
        formData.append('file', $('#formFile')[0].files[0]);

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