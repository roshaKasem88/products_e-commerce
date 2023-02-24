<?php
class ProductType
{
    var $type_name;
    var $db;
    var $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function setTypeName($type_name)
    {
        $this->type_name = $type_name;
    }

    public function getTypeName(): string
    {
        return $this->type_name;
    }

    public function insertType($type_name)
    {
        $catName = $this->fm->clean($type_name);
        $catName = mysqli_real_escape_string($this->db->link, $catName);
        if (empty($catName)) {
            $msg = "<span class='error'>Type field must not be empty!</span>";
            return $msg;
        } else {
            $query = "INSERT INTO types(type_name) VALUES('$catName')";
            $catinsert = $this->db->insert($query);
            if ($catinsert) {
                $msg = "<h3 >Type Inserted Successfully</h3>";
                return $msg;
            } else {
                $msg = "<h3>Type Not Inserted Try Again.</h3>";
                return $msg;
            }
        }}



      public function updateType($type_name)
        {
            $catName = $this->fm->clean($type_name);
            $catName = mysqli_real_escape_string($this->db->link, $catName);
            if (empty($catName)) {
                $msg = "<span class='error'>Type field must not be empty!</span>";
                return $msg;
            } else {
                $query = "update  types(type_name) VALUES('$catName')";
                $op=$this->db->insert($query);
                $catinsert = $this->db->insert($op);
                if ($catinsert) {
                    $msg = "<h3 >Type Inserted Successfully</h3>";
                    header('Location: index.php');
                    return $msg;
                } else {
                    $msg = "<h3>Type Not Inserted Try Again.</h3>";
                    return $msg;
                }
            }




    }

   



    
            }
    
    













?>