<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PaymentsMail;
use App\Mail\ContactMail;
use App\Models\Milk;
use App\Models\Header_Transaksi;
use App\Models\Detail_Transaksi;

class MilkyController extends Controller
{
    public function home()
    {
        return view('MILKY WAY/home');
    }

    public function about()
    {
        return view('MILKY WAY/profile');
    }
    
    public function more()
    {
        return view('MILKY WAY/read_more');
    }

    // --------------------------------------- CONTACT-US --------
    public function contact()
    {
        return view('MILKY WAY/contact');
    }

    public function contactSubmit(Request $request)
    {
        Mail::send('mail.ContactMail', [
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'msg'     => $request->msg
        ], function($mail) use($request) {
            $mail->from(env('MAIL_FROM_ADDRESS'), $request->name);
            $mail->to("nadyaaazahraa@gmail.com")->subject('Contact Us Message');
        });

        return view('MILKY WAY/contact');
    }


    // --------------------------------------- PRODUCT --------
    public function product()
    {
        $milks = Milk::all();
        return view('MILKY WAY/product', compact('milks'));

        session()->forget("cart");
    }


    // --------------------------------------- CART --------
    public function addToCart($id)
    {
        $cart = session("cart");

        $milks = Milk::findOrFail($id);

        $cart[$id] = [
            "judul"  => $milks->judul,
            "harga"  => $milks->harga,
            "jumlah" => 1
        ];

        session(["cart" => $cart]);

        return redirect('/home/cart');
    }

    public function cart()
    {
        $cart = session("cart");
        return view('MILKY WAY/cart')->with("cart",$cart);
    }

    public function removeCart($id)
    {
        $cart = session("cart");
        unset($cart[$id]);
        session(["cart" => $cart]);
        return redirect('/home/cart');
    }


    // --------------------------------------- PAYMENT --------
    public function paymentSubmit(Request $request)
    {
        $cart = session("cart");
        $id_header_transaksi = Header_Transaksi::tambah_header_transaksi();

        foreach( $cart as $cr => $val ) {

            $id = $cr;
            $jumlah = $val["jumlah"];

            Detail_Transaksi::tambah_detail_transaksi($id, $id_header_transaksi, $jumlah, $request);
        }

        // sending notification mail
        Mail::to("to@example.com")->send(new PaymentsMail());

        session()->forget("cart");

        return view('MILKY WAY/cart');
    }
}