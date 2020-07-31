<?php 
class laptop extends Controller
{
	function __construct()
	{
		$this->model = $this->model("ProductModel");
	}
	public function default()
	{
        $group = "Laptop";
        $this->view("master-1", [
        	"page" => "category",
        	"Laptop" => $this->model->ShowAll($group),
        	"categ" => "Laptop",
            "num" => $this->model->Count($group)
        ]);
	}
	public function detail($id){
		$id = (int)$id[0];
    	$this->view("master-1",
    	[
    		"page" => "detail",
    		"product" => $this->model->ViewProduct($id),
    		"categ" => "detail-lap"
    	]);
    }
}
?>