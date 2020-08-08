<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Exports\ProductExport;
use App\Imports\ProductImport;
use App\Imports\PromotedProductImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Category;
use App\Product;

class ExportImportController extends Controller
{
    //
    public function index() {
        $data=Product::with(['category'])->get();

        foreach($data as $da) {
            dump($da->category_id->category->category_name);
            dump($da->product_id);

            dump($da->product_name);
            dump($da->product_url);
            dump($da->sale_price);
            dump($da->original_price);
            dump($da->product_url);
            dump($da->commission);
            dump($da->discount);
            dump($da->out_of_stock_date);
            dd();
        }
        dd($data);
        return view('backend.admin.import-product');
    }

    public function product_import(Request $request){
        $this->validate($request,[
             'file' => 'required|mimes:xls,xlsx,csv,txt',
             ]);

        $file=$request->file('file');
        // dd($file);
        Excel::import(new ProductImport, $file);


        return back()->with('message','Products Imported Successfully In Database');
    }

    public function product_export(){
        return Excel::export(new ProductExport(), 'product.csv');
    }



    // promoted product function

    public function showPromotedView(){
        return view('backend.admin.promoted-product-view');
    }

    public function promoted_product_import(Request $request){

        $file1=$request->file('promoted-file');
        Excel::import(new PromotedProductImport, $file1);

        return back()->with('message','Products Imported Successfully In Database');

    }
}
