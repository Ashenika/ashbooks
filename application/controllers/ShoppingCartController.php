<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 11/10/2018
 * Time: 9:26 AM
 */

class ShoppingCartController extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct(){
        parent::__construct();
        $this->load->library('auth_lib');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->library('cart');

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('array');

        $this->load->model('category');
        $this->load->model('admin');
        $this->load->model('book');
        $this->load->model('bookImage');
        $this->load->model('shoppingCart');

    }


    public function viewShoppingCart(){
        $cart_session = $this->session->userdata('cart_session');
       // $this->data['cart_session'] = $cart_session;
        $data = array(
            'items'  =>  $cart_session,
        );
        print_r(json_encode($data));
        return;
        $this->load->view('shopping_cart',$data);
    }

    public function addToCart($id){
        $qty = $this->input->post('quantity');
       // $id  = $this->input->post('bookid');

        $cart_data=$this->shoppingCart->getCartProduct($id);
        foreach ($cart_data as $val){
            $item = array(
                'id'         => $val->id,
                'isbn_no'    => $val->isbn_no,
                'title'      => $val->title,
                'file_path'  => $val->file_path,
                'price'      => $val->price,
                'quantity'   => $qty
            );
        }

        if($this->session->userdata('cart_session')){

            $cart_session = $this->session->userdata('cart_session');

            foreach($cart_session as $id=>$val){
                $product_cart[$id] = $val;
            }


        }

        if($this->input->post('quantity')){
            $qty_add = $this->input->post('quantity');
        } else {
            $qty_add = 1;
        }

        $product_cart[$this->input->post('product_id')] = $qty_add;
        $this->session->set_userdata('cart_session',$item);

        $cart_session = $this->session->userdata('cart_session');

//        $data = array(
//            'status' => 'Success',
//            'items'  =>  $cart_session,
//            'count'  =>$this->cart->total_items(),
//        );
        return $cart_session;
    }

}