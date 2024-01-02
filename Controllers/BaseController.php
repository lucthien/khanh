<?php
class BaseController
{
    // duong dan thu muc view
    const PATH_VIEW = "Views";
    public $menuModel;
    public $productModel;
    public $categoryModel;
    public $userModel;
    public $cartModel;


    public function __construct()
    {
        require_once(PATH . "/Models/Menu.php");
        require_once(PATH . "/Models/Products.php");
        require_once(PATH . "/Models/Category.php");
        require_once(PATH . "/Models/User.php");
        require_once(PATH . "/Models/Cart.php");


        $this->menuModel = new Menu();
        $this->productModel = new Product();
        $this->categoryModel = new Category();
        $this->userModel = new User();
        $this->cartModel = new Cart();
    }
    public function view($layout = null, $view = null, array $data = [])
    {
        $menu = $this->menuModel->getAllMenu(1);
        $prod = $this->productModel->getHomeProduct();
        $category = $this->categoryModel->getCategory();
        $brand = $this->categoryModel->getBrand();
        $allProduct = $this->productModel->getAllProduct(8, 1);
        $sl = $this->cartModel->sl();
        $totalProduct = $this->productModel->count();
        $total_quantity = $this->cartModel->countItem();
        $sale = $this->cartModel->sale();


        foreach ($data as $key => $value) {
            $$key = $value;
        }


        $view = $this->getPath($view);
        require_once $this->getPath($layout);
    }
    private function getPath($path)
    {
        $path = str_replace(".", "/", $path);
        $path = self::PATH_VIEW . "/" . $path . ".php";
        return $path;
    }
}
