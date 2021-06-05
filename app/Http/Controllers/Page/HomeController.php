<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('page.index');
    }
    public function textil(){
        return view('page.textil');
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
    public function email(Request $request ){
        $from = 'info@nebulaperu.com';
        $nombre = $request->tNombre;
        $email = $request->tEmail;
        $url=url()->previous();
        $url2=explode('https://nebulaperu.com/',$url);    
        $url3=str_replace('-', ' ', $url2[1]);
        try {
            Mail::send(['html' => 'email.messageClient'], ['nombre' => $nombre],
                function ($messaje) use ($email, $nombre) { $messaje->to($email, $nombre)
                    ->subject('Nebula')
                    ->from('info@nebulaperu.com', 'APU');
            });
            Mail::send(['html' => 'email.messageContact'], [
                'nombre' => $nombre,
                'email' => $email,
                'url' =>$url3,],
                function ($messaje) use ($from) { $messaje->to($from, 'APU')
                    ->subject('APU - Formulario de Contacto')
                    ->from('info@nebulaperu.com', 'APU');
            });
            return Redirect::to(URL::previous())->with('status', 'Registro satisfactorio.');
        }
        catch (Exception $e){
            return $e;
        }
    }
    public function contactForm(Request $request ){
        $from = 'info@nebulaperu.com';
        $nombre = $request->tNombre;
        $email = $request->tEmail;
        $mensaje=$request->tMensaje;
        $url=url()->previous();
        $url2=explode('https://nebulaperu.com/',$url);    
        $url3=str_replace('-', ' ', $url2[1]);
        try {
            Mail::send(['html' => 'email.messageClient'], ['nombre' => $nombre],
                function ($messaje) use ($email, $nombre) { $messaje->to($email, $nombre)
                    ->subject('Nebula')
                    ->from('info@nebulaperu.com', 'APU');
            });
            Mail::send(['html' => 'email.messageContact'], [
                'nombre' => $nombre,
                'email' => $email,
                'url' =>$url3,],
                function ($messaje) use ($from) { $messaje->to($from, 'APU')
                    ->subject('APU - Formulario de Contacto')
                    ->from('info@nebulaperu.com', 'APU');
            });
            return Redirect::to(URL::previous())->with('status', 'Registro satisfactorio.');
        }
        catch (Exception $e){
            return $e;
        }
    }
}
