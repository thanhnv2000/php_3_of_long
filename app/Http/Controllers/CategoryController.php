<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request){  
        $kwd = $request->has('keyword') ? $request->keyword : null;
         $msg = isset($_GET['msg']) ? $_GET['msg'] : null;
        if($kwd === null){
         $category = Category::paginate(4);
        
        }else{
             $category = Category::where('cate_name', 'like', "%$kwd%")->paginate(4);
             $category->withPath("?keyword=$kwd");
        }
       
    //     dd($products);
       // truyền dữ liệu ra màn hình
        return view('cate.list', [
            'cates' => $category,
            'keyword' => $kwd,
             'msg' => $msg
        ]);
   }

    public function delete($removeId)
    {
        //dd($removeId);
        $remove = $removeId;
        $molde = Category::find($remove)->delete($remove);
        return redirect()->route('categories', 'msg=Xóa Sản phẩm Thành Công');
    }

    // public function search(Request $request)
    // {
    //     $search = $request->keyword;
    //     //dd($search);
    //     $category = Category::where('cate_name', 'like', '%' . $search . '%')->paginate(2);
    //     $category->withPath("?keyword=$search");
    //     return view('cate.list', [
    //         'cates' => $category,
    //         'keyword' => $search
    //     ]);
    // }

    public function addCate(){
        return view('cate.add-category');
    }
    public function saveAdd(Request $request){
        $request->validate([
            'cate_name' => 'required|unique:categories|min:4',
            
        ],[
            'cate_name.required' => "hãy nhập tên danh mục",
            'cate_name.unique' => "tên danh mục đã tồn tại",
            'cate_name.min' => "nhập trên 4 ký tự",
            
            
        ]);
        
        $model = new Category();
        $model->fill($request->all());
        //$model->slug = $request->slug;
        // $model->cate_name = $request->cate_name;
        // $model->show_menu = $request->has('show_menu') ? $request->show_menu : null;
        $model->save();
        return redirect()->route('categories', 'msg= Thêm Danh Mục Thành Công');
    

    }

    public function edit($id){
        $model = Category::find($id);
        if(empty($model)){
            return redirect()->route('categories');
        }
        return view('cate.edit-category',[
            'cates' => $model
        ]);
    }

    public function saveEdit($id, Request $request){
        $request->validate([
            'cate_name' => 'required|unique:categories|min:4',
            
        ],[
            'cate_name.required' => "hãy nhập tên danh mục",
            'cate_name.unique' => "tên danh mục đã tồn tại",
            'cate_name.min' => "nhập trên 4 ký tự",
            
            
        ]);
        $model = Category::find($id);
        // $model->cate_name = $request->cate_name;
        $model->show_menu = $request->has('show_menu') ? $request->show_menu : null;
        $model->fill($request->all());
        $model->save();
        return redirect()->route('categories', 'msg= Sửa Danh Mục Thành Công');
    }
    
}
