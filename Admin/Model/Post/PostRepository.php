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
        if(isset($files)){
            $uploaddir = '/'; 
            $fileName = $post->getId().'.jpg';
	    if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0755, true );
            foreach( $files as $file ){
		move_uploaded_file( $file['tmp_name'], "$uploaddir/$fileName" );
	    }
            $post->setContent($params['content']."<img src=\""."$uploaddir/$fileName"."\" alt=\"$fileName\">");
            $post->setSubtitle(mb_strimwidth($params['content'], 0, 450, "..."));
            $post->save();
        }
        
        return $post->getId();
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
            $post->setSubtitle(mb_strimwidth($params['content'], 0, 450, "..."));
            $post->save();
        }
    }
}