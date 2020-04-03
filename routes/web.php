<?php



use App\Clases\Guzzle;
use App\User;
use GuzzleHttp\Psr7\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
Route::get('/principal', function () {
    return view('vistas.inicio');
});
Route::get('/otro', function () {
    return view('vistas.otro');
});
Route::get('/tuser', function () {
    return view('vistas.tiposdeusuarios');
});
Route::resource('user', 'TusersController');

//envio de mensajes
Route::get('/mensajes', function () {
    return view('vistas.mensajes');
});

Route::get('/mail', 'mail@index');

Route::post('/mensajes', 'SMSController@sendSMS');

Route::resource('/pagos', 'Pagos');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/consulta', function (Guzzle $client) {

   $ref='1103220136';
    $data= array (
        'public_key' => env('TOKEN_API'),
        'refCliente' => $ref,
        'resultadosPagina' => '9',

    );
    $headers = ['Content-Type' => 'application/json',
                 'Accept'=>'application/json' ];


    $res = $client->iniciar()->request('POST', 'https://apiservices.epayco.co/consulta/transaccion', ['json'=>$data, $headers] );
    $valor =$res->getBody()->getContents();
    $datos = json_decode($valor, true);

     foreach ($datos["data"]["data"] as $t) {
        echo $t["id_factura"] ."--------".$t["respuesta"]."</br>";
    }

    return $datos["data"]["data"];



});
Route::get('/generar', function (Guzzle $client) {

    $hora= date_create();

    $factura =date_timestamp_get($hora);
    $cliente= env('CUSTOMER_ID');
    $key= env('KEY_ID');
    $valor=rand(10000, 1000000);


 $a= md5("".$cliente."^".$key."^". $factura."^".$valor."^"."COP");

 $datos=array(
    1 =>$cliente,
    2 =>$key,
    3=>$factura,
    4=>$valor,
    5=>$a,
    6=>$client->ip(),

);

return view('vistas.pasarela', compact('datos'));

 });
 Route::post('response', function (Guzzle $client) {

  $param=$_POST['ref_payco'];
      $res = $client->iniciar()->request('GET', 'https://secure.epayco.co/validation/v1/reference/'.$param.'' );
      $valor =$res->getBody()->getContents();
      $datos = json_decode($valor, true);
      $f=hash('sha256', env('CUSTOMER_ID')."^".env('KEY_ID')."^".$datos['data']['x_ref_payco'].'^'.$datos['data']['x_transaction_id'].'^'.$datos['data']['x_amount'].'^'.$datos['data']['x_currency_code']);


       if( $f ===$datos['data']['x_signature']){
            echo $datos;
        }else{
            echo 'nada';
        }

    //  return User::all();
});

