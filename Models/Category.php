<?php
class Category extends Model
{

    public function getCategory()
    {
        $db = new Database();
        $select = "SELECT * FROM loaisanpham ";
        $result = $db->category($select);
        return $result;
    }
    public function getBrand()
    {
        $db = new Database();
        $select = "SELECT distinct thuong_hieu FROM child_attribute ";
        $result = $db->category($select);
        return $result;
    }
    public function idCategory($id)
    {
        $db = new Database();
        $select = "SELECT * FROM loaisanpham WHERE id_loai = ".$id;
        $result = $db->category($select);
        return $result;
    }
}