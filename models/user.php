<?php

class UserModel extends Model{
    public function register(){
       
         //sanitize POST
      $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
      if(isset($post['submit'])){
        if($post['name'] == '' || $post['email'] == '' || $post['password'] == ''){
          Messages::setMsg('Please fill in all fields', 'error');
          return;
        }
        $password = md5($post['password']);
        $this->query('Insert into users(name, email, password) VALUES(:name, :email, :password)');
        $this->bind(':name', $post['name']);
        $this->bind(':email', $post['email']);
        $this->bind(':password', $password);
        $this->execute();

        
        //check insertion
        if($this->lastInsertId())header('location:'.ROOT_URL.'users/login');
      }
       return;
    }

    public function login(){
          //sanitize POST
      $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
      if(isset($post['submit'])){
        $password = md5($post['password']);
        $this->query('select * from users where email = :email and password = :password');
        $this->bind(':email', $post['email']);
        $this->bind(':password', $password);

        $row = $this->single();

        if($row){
            $_SESSION['is_logged_in'] = true;
            $_SESSION['user_data'] = array(
                "id"    => $row['id'],
                "name"  => $row['name'],
                "email" => $row['email']
            );
            header('location:'.ROOT_URL.'shares');
        }else Messages::setMsg('Incorrect Login', 'error');
        
      }
       return;
    }
}