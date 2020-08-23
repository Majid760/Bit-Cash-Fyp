<?php

namespace App\Http\Controllers\Admin;

use App\Store;
use App\Product;
use App\Category;
use App\PromotedProduct;
use Illuminate\Http\Request;
use App\Exports\ProductExport;
use App\Imports\ProductImport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PromotedProductImport;

class ExportImportController extends Controller
{
    //
    public function index() {
        $data=Product::with(['category'])->get();
        $catg=Category::with(['products'])->get();

        return view('backend.admin.import-product',compact('data','catg'));
    }


    // importing products to database

    public function product_import(Request $request){
        $this->validate($request,[
             'file' => 'required|mimes:xls,xlsx,csv,txt',
             ]);

            $i=0;
            if($request->file('file1')){
                $this->validate($request,[
                    'file1' => 'required|mimes:xls,xlsx,csv,txt',
                    ]);
                    $file=$request->file('file1');
                    Excel::import(new ProductImport, $file);
                    $i++;
            }

            $file=$request->file('file');
            Excel::import(new ProductImport, $file);
            $i++;



        return back()->with('message',$i.'file Products Imported Successfully In Database');
    }

    public function product_export(){
        return Excel::export(new ProductExport(), 'product.csv');
    }




    // promoted product function
    public function showPromotedView(){
        $promoData = PromotedProduct::with(['store'])->orderBy(DB::raw('RAND(123)'))->paginate(10);
        $store = Store::get();
        return view('backend.admin.promoted-product-view',compact('promoData','store'));
    }


    // Importing the promoted products
    public function promoted_product_import(Request $request){
        $this->validate($request,[
            'promoted-file' => 'required|mimes:xls,xlsx,csv,txt',
            ]);
        $file1=$request->file('promoted-file');
        Excel::import(new PromotedProductImport, $file1);

        return back()->with('message','Products Imported Successfully In Database');

    }
}
