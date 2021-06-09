<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    protected $email="info@apuantasaqa.com";
    public function home(){
        return view('page.index');
    }
    public function textil(){
        $collection=collect([['Barbijo inca','images/chicha/p1.jpg'],['Barbijo inca2','images/chicha/p2.jpg'],['Barbijo inca3','images/chicha/p3.jpg']]);
        return view('page.textil', compact('collection'));
    }
    public function chicha(){
        return view('page.chicha');
    }
    public function casa(){
        return view('page.casa');
    }
    public function hospedaje(){
        return view('page.hospedaje');
    }
    public function formulario(){
        return view('page.formulario');
    }
    public function cotizar(Request $request ){
        $from = $this->email;
        $nombre = $request->tNombre;
        $email = $request->tEmail;
        $producto=$request->tProducto;
        $url3=$this->getUrl();
        try {
            Mail::send(['html' => 'page.email.emailCliente'], ['nombre' => $nombre],
                function ($messaje) use ($email, $nombre) { $messaje->to($email, $nombre)
                    ->subject('APU ANTASAQA')
                    ->from('info@apuantasaqa.com', 'APU ANTASAQA');
            });
            Mail::send(['html' => 'page.email.emailTextil'], [
                'nombre' => $nombre,
                'email' => $email,
                'producto' =>$producto,
                'url' =>$url3,],
                function ($messaje) use ($from) { $messaje->to($from, 'APU ANTASAQA')
                    ->subject('APU - Formulario de Cotizar')
                    ->from('info@apuantasaqa.com', 'APU ANTASAQA');
            });
            return Redirect::to(URL::previous() . '#cotizar')->with('status', 'Registro satisfactorio.');
        }
        catch (Exception $e){
            return $e;
        }
    }
    public function contactForm(Request $request ){
        $from = $this->email;
        $nombre = $request->tNombre;
        $email = $request->tEmail;
        $mensaje=$request->tMensaje;
        $url3=$this->getUrl();
        try {
            Mail::send(['html' => 'page.email.emailCliente'], ['nombre' => $nombre],
                function ($messaje) use ($email, $nombre) { $messaje->to($email, $nombre)
                    ->subject('APU ANTASAQA')
                    ->from('info@apuantasaqa.com', 'APU ANTASAQA');
            });
            Mail::send(['html' => 'page.email.emailContacto'], [
                'nombre' => $nombre,
                'email' => $email,
                'url' =>$url3,
                'mensaje' => $mensaje,],
                function ($messaje) use ($from) { $messaje->to($from, 'APU ANTASAQA')
                    ->subject('APU - Formulario de Contacto')
                    ->from('info@apuantasaqa.com', 'APU ANTASAQA');
            });
            return Redirect::to(URL::previous() . "#contacto")->with('status', 'Registro satisfactorio.');
        }
        catch (Exception $e){
            return $e;
        }
    }
    public function reservar(Request $request ){
        $from = $this->email;
        $nombre = $request->tNombre;
        $email = $request->tEmail;
        $date=date('d/m/Y', strtotime($request->tDate));
        $url3=$this->getUrl();
        try {
            Mail::send(['html' => 'page.email.emailCliente'], ['nombre' => $nombre],
                function ($messaje) use ($email, $nombre) { $messaje->to($email, $nombre)
                    ->subject('APU ANTASAQA')
                    ->from('info@apuantasaqa.com', 'APU ANTASAQA');
            });
            Mail::send(['html' => 'page.email.emailReserva'], [
                'nombre' => $nombre,
                'email' => $email,
                'url' =>$url3,
                'date' => $date,],
                function ($messaje) use ($from) { $messaje->to($from, 'APU ANTASAQA')
                    ->subject('APU - Formulario de Reserva')
                    ->from('info@apuantasaqa.com', 'APU ANTASAQA');
            });
            return Redirect::to(URL::previous())->with('status', 'Registro satisfactorio.');
        }
        catch (Exception $e){
            return $e;
        }
    }
    public function getUrl(){
        $url=url()->previous();
        $url2=explode('http://apuantasaqa.com',$url);
        return $url3=str_replace('-', ' ', $url2[1]);
    }

}
