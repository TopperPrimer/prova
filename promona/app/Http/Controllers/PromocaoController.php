<?php namespace promona\Http\Controllers;

use Illuminate\Support\Facades\DB;

use promona\Models\Promocao;

use Request;

class PromocaoController extends Controller{



    public function adicionarPromocao(){
    
        Promocao::create(Request::all());

        return redirect()
        ->action ('PromocaoController@listarPromocao');
        
    
    
    }

    public function formularioPromocao(){

        return view('promocao.adicionar');

    }
    
    
    public function listarPromocao(){
    
        $promocao = Promocao::all();

        return view('promocao.listar')->withpro($promocao);
            
    }
    
    public function removerPromocao($id){
    
        $promocao = Promocao::find($id);
        $promocao->delete();
        
        return redirect()
        ->action ('PromocaoController@listarPromocao');
            
    }

    public function editarPromocao()
    {
        $id                       = Request::input('id');
        $promocao                 = Promocao::find($id);
        $promocao->id             = Request::input('id');
        $promocao->descricao      = Request::input('descricao');
        $promocao->valor_desconto = Request::input('valor_desconto');
        $promocao->percentual     = Request::input('percentual');
        $promocao->ativo          = Request::input('ativo');
        $promocao->save();
        
        return redirect()
        ->action ('PromocaoController@listarPromocao');

    }
    
        


    public function formularioEditarPromocao($id){

        $promocao = Promocao::find($id);

        return view('promocao.editar')->withp($promocao);


    }

    
}
