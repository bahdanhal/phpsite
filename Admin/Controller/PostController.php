<?php

namespace Admin\Controller;

class PostController extends AdminController
{
    public function listing()
    {
        $this->load->model('Post');

        $this->data['posts'] = $this->model->post->getPosts();

        $this->view->render('/posts/list', $this->data);
    }

    public function create()
    {
        $this->view->render('/posts/create');
    }

    public function edit($id)
    {
        $this->load->model('Post');

        $this->data['post'] = $this->model->post->getPostData($id);

        $this->view->render('/posts/edit', $this->data);
    }

    public function add()
    {
        $this->load->model('Post');
        $params = $this->request->post;
        $files = $this->request->files;
        if (isset($params['title'])){
            $postId = $this->model->post->createPost($params, $files);
            echo $postId;
        }
    }

    public function delete($id)
    {
        $this->load->model('Post');
        if (isset($id)){
            $this->model->post->deletePost($id);
        }
        header('Location: /admin/posts/');
    }

    public function update()
    {
        $this->load->model('Post');

        $params = $this->request->post;

        if (isset($params['title'])) {
            $postId = $this->model->post->updatePost($params);
            echo $postId;
        }
    }

}