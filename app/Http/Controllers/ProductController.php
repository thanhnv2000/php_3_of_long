<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Category;


class ProductController extends Controller
{
    public function index(Request $request){  
         $kwd = $request->has('keyword') ? $request->keyword : null;
          $msg = isset($_GET['msg']) ? $_GET['msg'] : null;
         if($kwd === null){
          $products = Product::paginate(10);
         }else{
              $products = Product::where('name', 'like', "%$kwd%")->paginate(4);
              $products->withPath("?keyword=$kwd");
         }
        
     //     dd($products);
        // truyền dữ liệu ra màn hình
         return view('product.product', [
              'product' => $products,
              'keyword' => $kwd,
              'msg' => $msg
         ]);
    }


    public function delete($id){
          $model = Product::find($id);
          if(!$model){
            return redirect()->route('index', 'msg= Id Không Tồn Tại !');
          }
          $model= Product::find($id)->delete();
          return redirect()->route('index', 'msg= Xóa Sản Phẩm Thành Công');
    }

    public function addPro(){
         $categories = Category::all();
         return view('product.add-product',[
              'cates' => $categories
         ]);
    }

  

        public function savePro(Request $request){
     $request->validate([
          'name' => 'required|unique:products|min:4',
          'price' => 'required|min:4',
          'short_desc' => 'required|min:10',
          'star' => 'required',
          'views' => 'required',
          'detail' => 'required|:min:10'


      ],[
          'name.required' => "hãy nhập tên sản phẩm",
          'name.unique' => "tên sản phẩm đã tồn tại",
          'name.min' => "nhập trên 4 ký tự",
          'price.required' => "Hãy nhập giá sản phẩm",
          'price.min' => "nhập trên 3 ký tự",
          'short_desc.required' => "Nhập mô tả ngắn",
          'short_desc.min' => "nhập trên 10 ký tự",
          'star.required' => "Hãy nhập đánh giá",
          'views.required' => "Hãy nhập lượt view sản phẩm",
          'detail.required' => "Hãy nhập mô tả chi tiết",
          'detail.min' => "nhập trên 10 ký tự"    
      ]);
 
     
     
     
      $model = new Product();
      $model->fill($request->all());
      if($request->hasFile('image')){
          $extension = $request->image->extension();
          //dd($extension);
          $filename =  uniqid(). "." . $extension;
          $path = $request->image->storeAs(
            'products', $filename, 'public'
          );
          $model->image = "storage/".$path;  
      }
      $model->save();

      return redirect()->route('index','msg= thêm sản phẩm thành công');
    }





    
    public function edit($id){
       
     $model = Product::find($id);
     //dd($model);

     if(!$model){
         return redirect()->route('index','msg=id Không Tồn tại !');
     }   
     $cate = Category::all();
     
     return view('product.edit-product',[
         'product' =>$model,
         'cates' => $cate
     ]);
     
 }
 

 public function saveEdit($id, Request $request){
     $request->validate([
         'name' => 'required|unique:products|min:4',
         'price' => 'required|min:4',
         'short_desc' => 'required|min:10',
         'star' => 'required',
         'views' => 'required',
         'detail' => 'required|:min:10'


     ],[
         'name.required' => "hãy nhập tên sản phẩm",
         'name.unique' => "tên sản phẩm đã tồn tại",
         'name.min' => "nhập trên 4 ký tự",
         'price.required' => "Hãy nhập giá sản phẩm",
         'price.min' => "nhập trên 3 ký tự",
         'short_desc.required' => "Nhập mô tả ngắn",
         'short_desc.min' => "nhập trên 10 ký tự",
         'star.required' => "Hãy nhập đánh giá",
         'views.required' => "Hãy nhập lượt view sản phẩm",
         'detail.required' => "Hãy nhập mô tả chi tiết",
         'detail.min' => "nhập trên 10 ký tự"    
     ]);
     

     $model = Product::find($id);
    
     if(!$model){
         return redirect()->route('index','msg= ID Không Tồn Tại');
         die;
     }
     $filename = $model->image;

     if($request->hasFile('image')){
        $extension = $request->image->extension();
        //dd($extension);
        $filename =  uniqid(). "." . $extension;
        $path = $request->image->storeAs(
          'products', $filename, 'public'
        );
        $model->image = "storage/".$path;  
        //dd($model->image);
    }
    
     //$model->image = $filename;
     $model->fill($request->all());
     $model->save();
     return redirect()->route('index','msg= Sửa Sản Phẩm Thành Công');
 }

    
}
