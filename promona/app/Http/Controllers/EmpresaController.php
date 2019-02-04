<?php namespace promona\Http\Controllers;

use Illuminate\Support\Facades\DB;

use promona\Models\Empresa;

use Request;

class EmpresaController extends Controller{


    public function adicionarEmpresa(){
    
        $empresa = Empresa::create(Request::all());
        
        return redirect()
        ->action ('EmpresaController@listarEmpresa');
    
    }

    public function formularioEmpresa(){

        return view('empresa.adicionar');

    }


    public function listarEmpresa(){

        //$empresa = DB::select('select * from empresa');
        $empresa = Empresa::all();

        return view('/empresa/listar')->withemp($empresa);
        
    }

    public function removerEmpresa($id){

        $empresa = Empresa::find($id);
        $empresa->delete();

        return redirect()
        ->action ('EmpresaController@listarEmpresa');
        
    }

    public function editarEmpresa()
    {
        $id                        = Request::input('id');
        $empresa                   = Empresa::find($id);
        $empresa->id               = Request::input('id');
        $empresa->razao_social     = Request::input('razao_social');
        $empresa->nome_fantasia    = Request::input('nome_fantasia');
        $empresa->cnpj             = Request::input('cnpj');
        $empresa->nome_responsavel = Request::input('nome_responsavel');
        $empresa->ativo            = Request::input('ativo'); 
        $empresa->save();
        
        return redirect()
        ->action ('EmpresaController@listarEmpresa');

    }
    
        


    public function formularioEditarEmpresa($id){

        $empresa = Empresa::find($id);

        return view('promocao.editar')->withm($empresa);


    }

    
}




