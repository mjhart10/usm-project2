<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\AdminModels;

    class MasterAdmin extends BaseController {
    	public function index(){
        
            return view('admin/index');
    	}

    }