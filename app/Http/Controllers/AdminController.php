<?php
namespace App\Http\Controllers;
use App\Models\Producto;
class AdminController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('index', [
            'productos' => $productos
        ]);
    }
    public function detalle($id)
    {
        $producto = Producto::find($id);
        return view('detalleProducto', [
            'producto' => $producto
        ]);
    }
}
