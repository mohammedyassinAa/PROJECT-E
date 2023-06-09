<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Product;
use PDF;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $products = Product::get();
  
        $data = [
            'title' => 'Welcome to YSN Shop',
            'date' => date('m/d/Y'),
            // 'products' => $products
        ]; 
            
        $pdf = PDF::loadView('products.index', $data);
        dd($products);
        return $pdf->download('products.pdf');
    }
}