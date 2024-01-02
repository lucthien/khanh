<?php


class ProductController extends BaseController
{
    public $menuModel;
    public $productModel;
    public $detailModel;
    public $categoryModel;
    public $cartModel;

    public function __construct()
    {
        require_once(PATH . "/Models/Menu.php");
        require_once(PATH . "/Models/Products.php");
        require_once(PATH . "/Models/Detail.php");
        require_once(PATH . "/Models/Category.php");
        require_once(PATH . "/Models/Cart.php");

        $this->productModel = new Product();
        $this->menuModel = new Menu();
        $this->detailModel = new Detail();
        $this->categoryModel = new Category();
        $this->cartModel = new Cart();
    }

    public function index()
    {
        return $this->view('Layout.master', 'page.product');
    }
    public function showMenu()
    {
        $data = $this->menuModel->getAllMenu(1);
        return $this->view('Layout.master', 'page.product', ['menu' => $data]);
    }
    public function showProduct()
    {
        $data = $this->productModel->getHomeProduct();
        return $this->view('Layout.master', 'page.product', ['product' => $data]);
    }
    public function list()
    {
        $cat = $_GET['name'];
        $limit = $_GET['limit'];
        $offset = $_GET['offset'];


        // debug
        // echo $limit;
        // echo $offset;

        if (!isset($limit)) {
            $limit = 8;
        }
        if (!isset($limit)) {
            $offset = 0;
        }

        $skip = $limit * $offset;

        $data = $this->productModel->getAllProduct($limit, $skip);
        $total = $this->productModel->count();
        return $this->view("page.$cat", "page.$cat", ["product" => $data, "totalProduct" => $total]);
    }
    public function detail()
    {
        $cat = $_GET['id'];
        $data = $this->detailModel->detailProduct($cat);
        $serial = $this->detailModel->productChild($cat);

        return $this->view("page.detail", "page.detail", ['detail' => $data, 'serial' => $serial]);
    }
    public function filter()
    {
        $selectedOption = $_GET['id'];
        if ($selectedOption == '') {
            $data = $this->productModel->getHomeProduct();
        } else {

            $data = $this->productModel->getProduct_id($selectedOption);
        }

        return $this->view("page.product", "page.product", ['filter' => $data]);
    }

    public function cart()
    {
        $data = $this->cartModel->getCart();
        return $this->view("page.cart", "page.cart", ['cart' => $data]);
    }
    public function addToCart()
    {
        if (!isset($_COOKIE['ckidus'])) {
            header('Location: http://localhost:3000/PHP/khanh/index.php?controller=auth&action=signin');
        } else {
            $ck = $_COOKIE['ckidus'];
            $getId = $_POST['id'];
            $getName = $_POST['name'];
            $getPrice = $_POST['price'];
            $getQuantity = $_POST['quantity'];
            $data = $this->cartModel->addCart($getId, $getName, $getPrice, $getQuantity, $ck);

            header('Location: http://localhost:3000/PHP/khanh/index.php?controller=product&action=cart');
        }
    }
    public function removeCart()
    {
        $getId = $_GET['id'];

        $data = $this->cartModel->rm($getId);
        header('Location: http://localhost:3000/PHP/khanh/index.php?controller=product&action=cart');
    }
    public function invoice()
    {
        if (!isset($_COOKIE['ckidus'])) {
            header('Location: http://localhost:3000/PHP/khanh/index.php?controller=auth&action=signin');
        } else {
            $ck = $_COOKIE['ckidus'];
            $id = $_POST['id'];
            $total_quantity = $_POST['total_quantity'];
            $sale = $_POST['sale'];
            $shipping = $_POST['shipping'];
            $total = $_POST['total'];

            $pay = $total;
            
            $data = $this->cartModel->insertInvoice($id, $ck, $pay);
            
            header('Location: http://localhost:3000/PHP/khanh/index.php?controller=product&action=cart&pay=done');
        }
    }
}
