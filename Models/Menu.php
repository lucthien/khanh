<?php
class Menu extends Model
{

    public function getAllMenu($display)
    {
        $db = new Database();
        $select = 'SELECT * FROM menu WHERE display = '.$display;
        $result = $db->getMenu($select);
        return $result;
    }
    public function getLink($e) {
        $db = new Database();
        $select = 'SELECT*FROM menu WHERE '.$e;
        $result = $db->getMenu($select);
        return $result;
    }
}
