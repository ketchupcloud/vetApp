<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Client;
use App\User;
use App\Store;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Notifications\buyConfirmation;
use App\Notifications\saleConfirmation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Notifications\Notifiable;

class ClientController extends Controller
{

  public function construct () {
    $this->middleware('checkClient')->except('registerClient');
  }

  //Método que retorna lista com todos os clients
  public function listClient(){
    $clients = Client::all();
    $array=[];
    $cont=0;
    foreach ($clients as $client) {
      $user = User::where('id', $client->user_id)->get();
      $client->user = $user;
      $array[$cont] = $client;
      $cont++;
    }
    return response()->json([$array]);
  }

  //Método responsavel por exibir o client com o id informado
  public function showClient($id){
    $client = Client::findOrFail($id);
    $user = User::where('id', $client->user_id)->get();
    $client->user = $user;
    return response()->json([$client]);
  }
  //Método responsável por listar os produtos comprados pelo client
  public function listProductAdmin($id){
    $client = Client::findOrFail($id);
    return response()->json($client->products);
  }

  //Método responsável por listar as lojas avaliadas pelo cliente
  public function listRateAdmin($id){
    $client = Client::findOrFail($id);
    return response()->json($client->stores);
  }

  //Método para edição de dados do cliente
  public function updateClient(Request $request){
    $user = Auth::user();
    $client = Client::where('user_id', '$user->id');

    if($request->birthdate || $request->cpf)
      $client->updateClient($request);

    if($request->name || $request->email || $request->password || $request->phone || $request->address){
      $user->updateUser($request);
    }
    else{
      Storage::delete($user->photo);
      $file = $request->file('photo');
      $filename = $user->id.'.'.$file->getClientOriginalExtension();
      $path = $file->storeAs('localUserPhotos', $filename);
      $user->photo = $path;
      $user->save();
    }
    return response()->json([$user]);
  }

  //Método responsável por representar a compra de um produto por cliente
  public function sale($product_id){
    $current = Carbon::now();
    $user = Auth::user();
    $client = Client::where('user_id', $user->id)->first();

    $product = Product::find($product_id);

    $delivery_day = $current->addWeek();
    $client->sale($product_id, $delivery_day);
    $delivery_day = $delivery_day->format('d-m-Y');

    $product->stock--;

    $client->save();
    $product->save();

    $store = Store::findOrFail($product->store_id);
    $userStore = User::findOrFail($store->user_id);

    $user->notify(new buyConfirmation($user, $delivery_day));
    $userStore->notify(new saleConfirmation($userStore, $user, $product, $delivery_day));
    return response()->json(['Compra realizada']);
  }

  //Método responsável por listar os produtos comprados pelo client logado
  public function listProduct(){
    $user = Auth::user();
    $client = Client::where('user_id', $user->id)->first();
    return response()->json($client->products);
  }

  //Método responsável por represnetar a avaliação do cliente a uma loja
  public function rate($store_id, $grade){
    $user = Auth::user();
    $client = Client::where('user_id', $user->id)->first();
    $store = Store::find($store_id);
    $client->rate($store, $grade);
    $store->avgRate();
    $client->save();
    $store->save();
    return response()->json(['Avaliação concluida', $grade]);
  }

  //Método responsável por listar as lojas avaliadas pelo client logado
  public function listRate(){
    $user = Auth::user();
    $client = Client::where('user_id', $user->id)->first();
    return response()->json($client->stores);
  }
}
