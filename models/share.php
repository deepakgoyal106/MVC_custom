<?php

class ShareModel extends Model{
    public function Index(){
        $this->query('select * from shares order by create_date DESC');
        return $rows = $this->resultSet();
    }

    public function add(){
         //sanitize POST
      $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      
      if(isset($post['submit'])){
         if($post['title'] == '' || $post['body'] == '' || $post['link'] == ''){
          Messages::setMsg('Please fill in all fields', 'error');
          return;
        }
        $this->query('Insert into shares(title, body, link, user_id) VALUES(:title, :body, :link, :user_id)');
        $this->bind(':title', $post['title']);
        $this->bind(':body', $post['body']);
        $this->bind(':link', $post['link']);
        $this->bind(':user_id', 1);
        $this->execute();

        
        //check insertion
        if($this->lastInsertId())header('location:'.ROOT_URL.'shares');
      }
       return;
    } 
} 