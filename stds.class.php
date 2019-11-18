<?php
    require 'dbconnexion.php';
    class stds  
    {
        private $cnx;
         public function __construct()
         {
            $db = new database;
            $this->cnx = $db->connectdb();
         }
         public function readstds()
         {
             try {
                 $req = 'SELECT * FROM students';
                 $result= $this->cnx->prepare($req);
                 $result->execute();
                 return $result;
             } catch (Exception $e) {
                 echo $e->getMessage();
             }
         }
         public function readonestd()
         {
             try {
                $req=$this->cnx->prepare('SELECT * FROM students where id= :param_id');
                $req->bindParam(':param_id',$_GET['id']);
                $req->execute();
                return $req;
             } catch (Exeption $e) {
                 echo $e->getMessage();
             }
         }
         public function createstds()
         {
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            
            $req=$this->cnx->prepare("INSERT INTO students VALUES (null, :firstname , :lastname , :email , :phone)");
            
            $req->bindParam(':firstname',$firstname);
            $req->bindParam(':lastname',$lastname);
            $req->bindParam(':email',$email);
            $req->bindParam(':phone',$phone);
            
            $req->execute();
            
            header('Location:index.php?alerte=add');
         }
         public function updatestds()
         {
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $id=$_POST['id'];
            
            $req=$this->cnx->prepare('UPDATE students SET firstname=:firstname , lastname=:lastname , email=:email , phone=:phone WHERE id=:id');
            
            $req->bindParam(':firstname',$firstname);
            $req->bindParam(':lastname',$lastname);
            $req->bindParam(':email',$email);
            $req->bindParam(':phone',$phone);
            $req->bindParam(':id',$id);
            $req->execute();
            header('Location:index.php?alerte=edit');
         }
         public function deletestd()
         {
            $req=$this->cnx->prepare("DELETE FROM students where id=:id");
            $req->bindParam(':id',$_GET['id']);
            $req->execute();
            header('Location:index.php?alerte=delete');
         }
    }
?>