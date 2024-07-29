<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Carro;
use App\Models\Category;
use App\Http\Requests\StoreCarros;
class CarrosController extends Controller
{
    //
    public function index(){
       $car = Carro::orderBy('id','desc')->get();
        return view('index', ['carros'=>$car]);
    }

    public function create(){
        $categoria = Category::all();
        return view('create', ['categoria'=>$categoria]);
    }

    public function help($name_carros, $categoria=null){
        $date = Now();
        return view('show', ['nameCars'=>$name_carros, 
                             'categoryCars'=>$categoria,
                             'fecha'=>$date]);        
    }

    public function storeCarros(StoreCarros $request){

        // $car = new Carro;
        // $car->nombre=$request->nombre;
        // $car->category_id=$request->category_id;
        // $car->active=1;
        // $car->save();
        Carro::create($request->all());

        return redirect()->route('carss');
    }

    public function view($carro_id){
        $car = Carro::find($carro_id);
        $categoria = Category::all();
        return view('update', ['categoria'=>$categoria, 'car'=>$car]);
    }
    
    public function updateCarros(StoreCarros $request){

        $car = Carro::find($request->car_id);
        $car->nombre=$request->name_carros;
        $car->category_id=$request->categoria_id;
        $car->active=1;
        $car->save();

        return redirect()->route('carss');
    }

    public function delete($carro_id){
        $car = Carro::find($carro_id);
        $car->delete();
        return redirect()->route('carss');

    }
}
