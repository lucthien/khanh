<?php

class Cart extends Model
{
    public Database $db;


    public function __construct()
    {
        $this->db = new Database();
    }
    public function getCart() {

        $select = 'SELECT * FROM cart INNER JOIN sanpham ON cart.id_product = sanpham.id_san_pham';
        $result = $this->db->cart($select);
        return $result;
    }
    public function sl() {
        $select = 'SELECT id FROM cart';
        $result = $this->db->cart($select);
        $count = count($result);
        return $count;
    }

    public function addCart($id, $name, $price, $quantity, $id_us) {

        $sql = "INSERT INTO cart (id_product, name_product, price, quantity, id_us) VALUES ('$id','$name','$price','$quantity','$id_us')";
        $insert = $this->db->signUp($sql);
        return $insert;
    }
    public function rm($id) {
        $select = 'DELETE FROM cart WHERE id ='.$id;
        $result = $this->db->cart($select);
        return $result;
    }
    public function countItem() {
        $select = "SELECT SUM(quantity) FROM cart";
        $result = $this->db->cart($select);
        return $result;
    }
    public function sale() {
        $select = "SELECT SUM(price) FROM cart";
        $result = $this->db->cart($select);
        return $result;
    }
    public function insertInvoice($id_cart, $id_user, $payment) {
        $sql = "INSERT INTO hoa_don (id_cart, id_user, payment) VALUES ('$id_cart','$id_user','$payment')";
        $insert = $this->db->Invoice($sql);
        return $insert;
    }
    public function clearCart() {
        
    }
}