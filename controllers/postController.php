<?php

class PostController
{

    public function show(){
        require_once('./views/postShowView.php');    
    }
    
    public function list(){
        require_once('./views/postListView.php');    
    }
}