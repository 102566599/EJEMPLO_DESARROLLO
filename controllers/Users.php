<?php
    class Users{        
        public function main(){
            require_once "views/roles/admin/header.view.php";            
            require_once "views/roles/admin/index.view.php";            
            require_once "views/roles/admin/footer.view.php";            
        }
        public function userCreate(){
            require_once "views/roles/admin/header.view.php";            
            require_once "views/modules/users/user_create.view.php";            
            require_once "views/roles/admin/footer.view.php";            
        }
        public function userRead(){
            require_once "views/roles/admin/header.view.php";            
            require_once "views/modules/users/user_read.view.php";            
            require_once "views/roles/admin/footer.view.php";            
        }
    }
?>