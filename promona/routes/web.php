<?php

Route::get('/', 'PrincipalController@principal');

//Empresa
Route::get('/empresa/adicionar', 'EmpresaController@formularioEmpresa');

Route::POST('/empresa/add', 'EmpresaController@adicionarEmpresa');

Route::get('/empresa/listar', 'EmpresaController@listarEmpresa');

Route::get('/empresa/remover/{id}', 'EmpresaController@removerEmpresa');

Route::get('/empresa/editar/{id}', 'EmpresaController@formularioEditarEmpresa');

Route::POST('/empresa/edit', 'EmpresaController@editarEmpresa');


//Membro
Route::get('/membro/adicionar', 'MembroController@formularioMembro');

Route::post('/membro/add', 'MembroController@adicionarMembro');

Route::get('/membro/listar', 'MembroController@listarMembro');

Route::get('/membro/remover/{id}', 'MembroController@removerMembro');

Route::get('/membro/editar/{id}', 'MembroController@formularioEditarMembro');

Route::post('/membro/edit', 'MembroController@editarMembro');




//Promocao
Route::get('/promocao/adicionar', 'PromocaoController@formularioPromocao');

Route::post('/promocao/add', 'PromocaoController@adicionarPromocao');

Route::get('/promocao/listar', 'PromocaoController@listarPromocao');

Route::get('/promocao/remover/{id}', 'PromocaoController@removerPromocao');

Route::get('/promocao/editar/{id}', 'PromocaoController@formularioEditarPromocao');

Route::post('/promocao/edit', 'PromocaoController@editarPromocao');