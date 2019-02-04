<?php namespace promona\Http\Controllers;

use Illuminate\Support\Facades\DB;

use promona\Models\Membro;

use Request;

class MembroController extends Controller{


    public function adicionarMembro()
    {
        
        Membro::create(Request::all());

        return redirect()
        ->action ('MembroController@listarMembro');     
    }

    public function formularioMembro()
    {
        return view('membro.adicionar');

    }
    
    
    public function listarMembro()
    {
        $membro = Membro::all();
        
        return view('membro.listar')->withmem($membro);       
    }
    
    public function removerMembro($id){
    
        $membro = Membro::find($id);
        $membro->delete();
        
        return redirect()
        ->action ('MembroController@listarMembro');
            
    }

    public function editarMembro()
    {
        $id                    = Request::input('id');
        $membro                = Membro::find($id);
        $membro->id            = Request::input('id');
        $membro->primeiro_nome = Request::input('primeiro_nome');
        $membro->sobrenome     = Request::input('sobrenome');
        $membro->cpf           = Request::input('cpf');
        $membro->ativo         = Request::input('ativo'); 
        $membro->save();
        
        return redirect()
        ->action ('MembroController@listarMembro');

    }
    
        


    public function formularioEditarMembro($id)
    {

        $membro = Membro::find($id);

        return view('membro.editar')->withm($membro);


    }

    
}
