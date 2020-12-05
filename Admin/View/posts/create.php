<?php $this->theme->header(); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col page-title">
                    <h3>Create post</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <form id="formPage" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="formTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="formTitle" placeholder="Title post...">
                        </div>
                        <div class="form-group">
                            <label for="formContent">Content</label>
                            <textarea name="content" id="redactor" class="form-control" id="formContent"></textarea>
                        </div>
                        <input type="file" name="pic" multiple="multiple" accept="image/*" id="formFile">

                    </form>
                    
                </div>
                <div class="col-3">
                    <div>
                        <p>Publish this post</p>
                        <button type="submit" class="btn btn-primary" onclick="post.add()">
                            Publish
                        </button>
                    </div>
                </div>

                <form id="formTest" enctype="multipart/form-data" action="/admin/test/" method="POST">
                    <input type="file" name="pic" multiple="multiple" accept="image/*" id="file">
                    <input type="submit" value="ppppp" />
                 </form>
            </div>
        </div>
    </main>

<?php $this->theme->footer(); ?>