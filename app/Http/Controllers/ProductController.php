<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $data = $request -> all();
        $data['colores'] = array_map('trim',explode(",", $data['colores']));
        
        $image_url = $data['imagen_url'];
        //validar que sea una imagen 
        if(!@getimagesize($image_url)){
            return back()->with('error',' El enlace proporcionado no es una imagen valida, Intenta con otra URL.');
        }
        //Validar que no se repita un nombre
        $filename = basename(parse_url($image_url, PHP_URL_PATH));
        $filename = uniqid(). '_'. $filename;
        $savePath = storage_path('app/public/uploads/'.$filename);
        //Descargar y guardar
        $imgContents = file_get_contents($image_url);
        file_put_contents($savePath, $imgContents);
        //actualizar el path antes de guardar
        $data['imagen_url'] = 'storage/uploads/' . $filename;

        Product::create($data);
        return redirect('/admin')->with('success', 'Producto guardado existosamente');
    }

    public function api(){
        return response()->json(Product::all());
    }
}
