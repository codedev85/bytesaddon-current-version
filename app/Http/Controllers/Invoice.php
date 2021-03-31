<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Order;
use Cart;
use PDF;

class Invoice extends Controller
{
    public function view($id){

        $categories  = Category::with('subcategories')->get();
        $cartCollection = Cart::getContent();
        $order= Order::where('id',$id)->firstOrfail();

        return view('Users-account.invoice', compact('categories','cartCollection','order'));
    }

    public function downloadPdf($id){

        $order= Order::where('id',$id)->firstOrfail();
        // share data to view
        view()->share('order',$order);

        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        $pdf = PDF::loadView('Users-account.invoice-pdf', $order);

        toastr()->info('Invoice downloaded successfully!');
        // download PDF file with download method
        return $pdf->download('invoice.pdf');
    }


    public function viewInvoiceAdmin($id){

        $categories  = Category::with('subcategories')->get();
        $cartCollection = Cart::getContent();
        $order= Order::where('id',$id)->firstOrfail();

        return view('admin-invoice.invoice', compact('categories','cartCollection','order'));
    }

    public function AdminDownloadPdf($id){

        $order= Order::where('id',$id)->firstOrfail();
        // share data to view
        view()->share('order',$order);

        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        $pdf = PDF::loadView('Users-account.invoice-pdf', $order);

        toastr()->info('Invoice downloaded successfully!');
        // download PDF file with download method
        return $pdf->download('admin-invoice.admin-invoice-pdf');
    }



}
