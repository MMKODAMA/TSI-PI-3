<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function index(){
        return view('order.index')->with('orders', Pedido::where('user_id',Auth()->user()->id)->get());
    }
}
