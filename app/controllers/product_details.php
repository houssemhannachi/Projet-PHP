
<?php
class Product_details extends Controller
{
    public function index($id)
    {
        $id = (int)$id;

        $user = $this->load_model('user');
        $user_data = $user->check_login();

        if (is_object($user_data)) {
            $data['user_data'] = $user_data;
        }

        $db = Database::newInstance();
        $ROW = $db->read("SELECT * from products WHERE id = :id",['id'=>$id]);

        $data['page_title'] = 'Product Details';
        $data['ROW'] = $ROW[0];
        $this->view("product-details", $data);
    }
}
