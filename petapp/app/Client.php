<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use User;
use Store;
use App\Product;

class Client extends Model
{
  //Relacionamentos
  public function user(){ //herança
    return $this->belongsTo('App\User');
  }

  public function products(){
    return $this->belongsToMany('App\Product')
      ->withPivot('delivery_day');
  }

  public function stores(){
    return $this->belongsToMany('App\Store')
      ->withPivot('grade');
  }


  //Método responsável por criar um novo client
  public function createClient(Request $request){
    $this->birthdate = $request->birthdate;
    $this->cpf = $request->cpf;
    $this->save();
  }

  //Método para edição de dados do client
  public function updateClient(Request $request){
    if($request->birthdate){
      $this->birthdate = $request->birthdate;
    }
    if($request->cpf){
      $this->cpf = $request->cpf;
    }
    $this->save();
  }


  //Método responsável por representar a compra de um produto por cliente
  public function sale($product_id, $delivery_day){
    $this->products()->attach($product_id, ['delivery_day' => $delivery_day]);
    $this->save();
  }

  //Método responsável por represnetar a avaliação do cliente a uma loja
  public function rate($store, $grade){
    $this->stores()->attach($store, ['grade' => $grade]);
  }
}
