<?php

class AuthController extends BaseController
{
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
    public function signin() {
        $data = 'hello';
        return $this->view('Auth.auth.signin', 'Auth.auth.signin', ['data' => $data]);
    }
    public function signup() {
        $data = '';
        return $this->view('Auth.auth.signup', 'Auth.auth.signup', ['data' => $data]);
    }
    public function login() {

        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        $check = $this->userModel->checkMail($email);
        $data = '';
        if($email == $check) {
            header("Location: index.php?controller=auth&action=signup&check=fail");
        } else {
            $data = $this->userModel->createAccount($name, $email, $password, $phone, $address);
        }
        return $this->view('Auth.auth.signin', 'Auth.auth.signin', ['data' => $data, 'check'=>$check]);
    }
    public function check() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $check_mail = $this->userModel->checkMail($email);
        $check_password = password_verify($password, $this->userModel->checkPass());

        $ckus = $this->userModel->getInfoUser($email);
        $ckidus = $this->userModel->Id($email);

        if ($check_password && $check_mail == $email) {
            header('Location: index.php');
            setcookie('ckus', $ckus, time() + (7200));
            setcookie('ckidus', $ckidus, time() + (7200));
        } else {
            header('Location: http://localhost:3000/PHP/khanh/index.php?controller=auth&action=signin&check=fail');
        }
    }
    public function logout() {
        if (isset($_COOKIE["ckus"])) {
            setcookie("ckus", "", time() - 1);
            setcookie("ckidus", "", time() - 1);
            header('Location: index.php');
        }
    }
}