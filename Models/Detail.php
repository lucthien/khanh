<?php
class Detail extends Model
{

    public function detailProduct($e)
    {
        $db = new Database();
        $select = "SELECT * FROM sanpham WHERE id_san_pham = ".$e;
        $result = $db->getIdProduct($select);
        return $result;
    }
    public function productChild($e)
    {
        $db = new Database();
        $select = "SELECT * FROM child_attribute, sanpham WHERE child_attribute.serial = sanpham.serial AND id_san_pham = ".$e;
        $result = $db->getProduct($select);
        return $result;
    }
}