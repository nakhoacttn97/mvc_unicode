<?php
class ProductController extends BaseController{
    protected $data;
    public function index(){
        echo 'Danh sach san pham';
    }

    public function list_product(){
        $product = $this->model('ProductModel');
        $dataProduct = $product->getProductList();

        // handle data
        $title = "Danh sach san pham";

        $this->data['product_list'] = $dataProduct;
        $this->data['page_title'] = $title;

        //Render view
        $this->render('products/list', $this->data);
    }

    public function detail($id){
        $product = $this->model('ProductModel');
        $this->data['sub_content']['info'] = $product->getDetail($id);
        $this->data['sub_content']['title'] = 'Tieu de cua noi dung';
    
        $this->data['page_title'] = 'Chi tiet san pham';
        $this->data['content'] = 'products/detail';
        $this->render('layouts/client_layout', $this->data);
    }
}