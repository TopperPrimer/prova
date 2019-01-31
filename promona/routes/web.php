<?php

Route::get('/', 'PrincipalController@principal');

Route::get('/empresa/adicionar', 'EmpresaController@formularioEmpresa');

Route::get('/empresa/listar', 'EmpresaController@listarEmpresa');

Route::get('/membro/adicionar', 'MembroController@formularioMembro');

Route::get('/promocao/adicionar', 'PromocaoController@formularioPromocao');