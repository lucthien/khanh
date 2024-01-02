<?php
class Product extends Model
{
    public Database $db;


    public function __construct()
    {
        $this->db = new Database();
    }


    public function getHomeProduct()
    {
        // $db = new Database();        
        $select = 'SELECT * FROM sanpham LIMIT 6';
        $result = $this->db->getProduct($select);
        return $result;
    }
    public function getAllProduct($limit, $offset)
    {
        // $db = new Database();
        $select = 'SELECT * FROM sanpham order by gia LIMIT ' . $limit . ' OFFSET ' . $offset;
        $result = $this->db->getProduct($select);

        return $result;
    }
    public function getProduct_id($id)
    {
        $db = new Database();
        $select = 'SELECT * FROM sanpham WHERE id_loai = ' . $id;
        $result = $db->getIdProduct($select);
        return $result;
    }

    public function count()
    {
        $select = "SELECT count(id_san_pham) from sanpham ";
        $result = $this->db->countId($select);
        return $result;
    }
    public function getCart_prod($id) {
        $select = 'SELECT * FROM sanpham WHERE id_san_pham = '.$id;
        $result = $this->db->getProduct($select);
        return $result;
    }
}
