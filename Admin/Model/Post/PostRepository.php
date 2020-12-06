<?php

namespace Admin\Model\Post;

use Engine\Model;

class PostRepository extends Model
{
    /**
     * @return mixed
     */
    public function getPosts()
    {
        $sql = $this->queryBuilder->select()
        ->from('post')
        ->orderBy('id', 'DESC')
        ->sql();
        
        return $this->db->query($sql);
    }
    
    /**
     * @param $id
     * @return null|\stdClass
     */
    public function getPostData($id)
    {
        $post = new Post($id);
        
        return $post->findOne();
    }
    
    /**
     * @param $params
     * @return mixed
     */
    public function createPost($params, $files)
    {
        $post = new Post;
        $post->setTitle($params['title']);
        $post->setContent($params['content']);
        $post->setSubtitle(mb_strimwidth($params['content'], 0, 450, "..."));
        $post->setId($post->save());
        print_r($this->upload($files, $post->getId()));
        $post->setImage($this->upload($files, $post->getId()));
        
        return $post->save();
    }
    
    /**
     * @param $params
     */
    public function updatePost($params)
    {
        if(isset($params['post_id'])) {
            $post = new Post($params['post_id']);
            $post->setTitle($params['title']);
            $post->setContent($params['content']);
            $post->setImage($this->upload($files, $post->getId()));
            $post->setSubtitle(mb_strimwidth($params['content'], 0, 450, "..."));
            $post->save();
        }
    }

    public function deletePost($id)
    {
        $post = new Post($id);
        $post->delete();
    }

    private function upload($files, $id)
    {
  
        if(!empty($files)){
            $uploaddir = ROOT_DIR . '/uploads'; 
            $fileName = $id.'.jpg';
	    if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0755, true );
            foreach( $files as $file ){
		move_uploaded_file( $file['tmp_name'], "$uploaddir/$fileName" );
	    }
            $link = "/uploads/$fileName";
            $img = "<img src=\""."$link"."\" width=100% heigth=80% alt=\"$fileName\">";
            return $img;
        }
        return '</br>';    
    }
}