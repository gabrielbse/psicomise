<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', 'HomeController@index');

Route::auth();

Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', 'HomeController@index');
    Route::get('/areas/{id}', 'AreaController@getAreas');
    Route::get('/disc/{id}', 'DisciplinaController@getDisciplinas');

    //rotas de users
    Route::group(['prefix' => 'users', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'users.index', 'uses' => 'UserController@index', 'middleware' => ['permission:gestao_usuario-list|gestao_usuario-create|gestao_usuario-edit|gestao_usuario-delete']]);
        Route::get('/create', ['as' => 'users.create', 'uses' => 'UserController@create', 'middleware' => ['permission:gestao_usuario-create']]);
        Route::post('/create', ['as' => 'users.store', 'uses' => 'UserController@store', 'middleware' => ['permission:gestao_usuario-create']]);
        Route::get('/{id}', ['as' => 'users.show', 'uses' => 'UserController@show']);
        Route::get('/{id}/edit', ['as' => 'users.edit', 'uses' => 'UserController@edit', 'middleware' => ['permission:gestao_usuario-edit']]);
        Route::patch('/{id}', ['as' => 'users.update', 'uses' => 'UserController@update', 'middleware' => ['permission:gestao_usuario-edit']]);
        Route::delete('/{id}', ['as' => 'users.destroy', 'uses' => 'UserController@destroy', 'middleware' => ['permission:gestao_usuario-delete']]);
    });

    //rotas de roles
    Route::group(['prefix' => 'roles', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'roles.index', 'uses' => 'RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
        Route::get('/create', ['as' => 'roles.create', 'uses' => 'RoleController@create', 'middleware' => ['permission:role-create']]);
        Route::post('/create', ['as' => 'roles.store', 'uses' => 'RoleController@store', 'middleware' => ['permission:role-create']]);
        Route::get('/{id}', ['as' => 'roles.show', 'uses' => 'RoleController@show']);
        Route::get('/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit', 'middleware' => ['permission:role-edit']]);
        Route::patch('/{id}', ['as' => 'roles.update', 'uses' => 'RoleController@update', 'middleware' => ['permission:role-edit']]);
        Route::delete('/{id}', ['as' => 'roles.destroy', 'uses' => 'RoleController@destroy', 'middleware' => ['permission:role-delete']]);
    });

     //rotas de familia de plantas
    Route::group(['prefix' => 'familia', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'familia.index', 'uses' => 'FamiliaPlantaController@index', 'middleware' => ['permission:gestao_familia_planta-list']]);
        Route::get('/create', ['as' => 'familia.create', 'uses' => 'FamiliaPlantaController@create', 'middleware' => ['permission:gestao_familia_planta-create']]);
        Route::post('/create', ['as' => 'familia.store', 'uses' => 'FamiliaPlantaController@store', 'middleware' => ['permission:gestao_familia_planta-create']]);
        Route::get('/{id}', ['as' => 'familia.show', 'uses' => 'FamiliaPlantaController@show']);
        Route::get('/{id}/edit', ['as' => 'familia.edit', 'uses' => 'FamiliaPlantaController@edit', 'middleware' => ['permission:gestao_familia_planta-edit']]);
        Route::patch('/{id}', ['as' => 'familia.update', 'uses' => 'FamiliaPlantaController@update', 'middleware' => ['permission:gestao_familia_planta-edit']]);
        Route::delete('/{id}', ['as' => 'familia.destroy', 'uses' => 'FamiliaPlantaController@destroy', 'middleware' => ['permission:gestao_familia_planta-delete']]);
        });

    //rotas pra especie da planta
    Route::group(['prefix' => 'especie', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'especie.index', 'uses' => 'EspeciePlantaController@index', 'middleware' => ['permission:gestao_especie_planta-list']]);
        Route::get('/create', ['as' => 'especie.create', 'uses' => 'EspeciePlantaController@create', 'middleware' => ['permission:gestao_especie_planta-create']]);
        Route::post('/create', ['as' => 'especie.store', 'uses' => 'EspeciePlantaController@store', 'middleware' => ['permission:gestao_especie_planta-create']]);
        Route::get('/{id}', ['as' => 'especie.show', 'uses' => 'EspeciePlantaController@show']);
        Route::get('/{id}/edit', ['as' => 'especie.edit', 'uses' => 'EspeciePlantaController@edit', 'middleware' => ['permission:gestao_especie_planta-edit']]);
        Route::patch('/{id}', ['as' => 'especie.update', 'uses' => 'EspeciePlantaController@update', 'middleware' => ['permission:gestao_especie_planta-edit']]);
        Route::delete('/{id}', ['as' => 'especie.destroy', 'uses' => 'EspeciePlantaController@destroy', 'middleware' => ['permission:gestao_especie_planta-delete']]);
        });

    //rotas para genero da planta
    Route::group(['prefix' => 'genero', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'genero.index', 'uses' => 'GeneroPlantaController@index', 'middleware' => ['permission:gestao_genero_planta-list']]);
        Route::get('/create', ['as' => 'genero.create', 'uses' => 'GeneroPlantaController@create', 'middleware' => ['permission:gestao_genero_planta-create']]);
        Route::post('/create', ['as' => 'genero.store', 'uses' => 'GeneroPlantaController@store', 'middleware' => ['permission:gestao_genero_planta-create']]);
        Route::get('/{id}', ['as' => 'genero.show', 'uses' => 'GeneroPlantaController@show']);
        Route::get('/{id}/edit', ['as' => 'genero.edit', 'uses' => 'GeneroPlantaController@edit', 'middleware' => ['permission:gestao_genero_planta-edit']]);
        Route::patch('/{id}', ['as' => 'genero.update', 'uses' => 'GeneroPlantaController@update', 'middleware' => ['permission:gestao_genero_planta-edit']]);
        Route::delete('/{id}', ['as' => 'genero.destroy', 'uses' => 'GeneroPlantaController@destroy', 'middleware' => ['permission:gestao_genero_planta-delete']]);
        });

     //rotas para Planta
    Route::group(['prefix' => 'planta', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'planta.index', 'uses' => 'PlantaController@index', 'middleware' => ['permission:gestao_planta-list']]);
        Route::get('/create', ['as' => 'planta.create', 'uses' => 'PlantaController@create', 'middleware' => ['permission:gestao_planta-create']]);
        Route::post('/create', ['as' => 'planta.store', 'uses' => 'PlantaController@store', 'middleware' => ['permission:gestao_planta-create']]);
        Route::get('/{id}', ['as' => 'planta.show', 'uses' => 'PlantaController@show']);
        Route::get('/{id}/edit', ['as' => 'planta.edit', 'uses' => 'PlantaController@edit', 'middleware' => ['permission:gestao_planta-edit']]);
        Route::patch('/{id}', ['as' => 'planta.update', 'uses' => 'PlantaController@update', 'middleware' => ['permission:gestao_planta-edit']]);
        Route::delete('/{id}', ['as' => 'planta.destroy', 'uses' => 'PlantaController@destroy', 'middleware' => ['permission:gestao_planta-delete']]);
        });

    //rotas para Animal 
    Route::group(['prefix' => 'animal', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'animal.index', 'uses' => 'AnimalController@index', 'middleware' => ['permission:gestao_animal-list']]);
        Route::get('/create', ['as' => 'animal.create', 'uses' => 'AnimalController@create', 'middleware' => ['permission:gestao_animal-create']]);
        Route::post('/create', ['as' => 'animal.store', 'uses' => 'AnimalController@store', 'middleware' => ['permission:gestao_animal-create']]);
        Route::get('/{id}', ['as' => 'animal.show', 'uses' => 'AnimalController@show']);
        Route::get('/{id}/edit', ['as' => 'animal.edit', 'uses' => 'AnimalController@edit', 'middleware' => ['permission:gestao_animal-edit']]);
        Route::patch('/{id}', ['as' => 'animal.update', 'uses' => 'AnimalController@update', 'middleware' => ['permission:gestao_animal-edit']]);
        Route::delete('/{id}', ['as' => 'animal.destroy', 'uses' => 'AnimalController@destroy', 'middleware' => ['permission:gestao_animal-delete']]);
        });

    //rotas para Grupo de Experimento
    Route::group(['prefix' => 'grupoExperimento', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'grupoExperimento.index', 'uses' => 'GrupoExperimentoController@index', 'middleware' => ['permission:gestao_grupo_experimento-list']]);
        Route::get('/create', ['as' => 'grupoExperimento.create', 'uses' => 'GrupoExperimentoController@create', 'middleware' => ['permission:gestao_grupo_experimento-create']]);
        Route::post('/create', ['as' => 'grupoExperimento.store', 'uses' => 'GrupoExperimentoController@store', 'middleware' => ['permission:gestao_grupo_experimento-create']]);
        Route::get('/{id}', ['as' => 'grupoExperimento.show', 'uses' => 'GrupoExperimentoController@show']);
        Route::get('/{id}/edit', ['as' => 'grupoExperimento.edit', 'uses' => 'GrupoExperimentoController@edit', 'middleware' => ['permission:gestao_grupo_experimento-edit']]);
        Route::patch('/{id}', ['as' => 'grupoExperimento.update', 'uses' => 'GrupoExperimentoController@update', 'middleware' => ['permission:gestao_grupo_experimento-edit']]);
        Route::delete('/{id}', ['as' => 'grupoExperimento.destroy', 'uses' => 'GrupoExperimentoController@destroy', 'middleware' => ['permission:gestao_grupo_experimento-delete']]);
        });

    //rotas para Tipo de Extrato 
    Route::group(['prefix' => 'tipo_extrato', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'tipo_extrato.index', 'uses' => 'TipoExtratoController@index', 'middleware' => ['permission:gestao_tipo_extrato-list']]);
        Route::get('/create', ['as' => 'tipo_extrato.create', 'uses' => 'TipoExtratoController@create', 'middleware' => ['permission:gestao_tipo_extrato-create']]);
        Route::post('/create', ['as' => 'tipo_extrato.store', 'uses' => 'TipoExtratoController@store', 'middleware' => ['permission:gestao_tipo_extrato-create']]);
        Route::get('/{id}', ['as' => 'tipo_extrato.show', 'uses' => 'TipoExtratoController@show']);
        Route::get('/{id}/edit', ['as' => 'tipo_extrato.edit', 'uses' => 'TipoExtratoController@edit', 'middleware' => ['permission:gestao_tipo_extrato-edit']]);
        Route::patch('/{id}', ['as' => 'tipo_extrato.update', 'uses' => 'TipoExtratoController@update', 'middleware' => ['permission:gestao_tipo_extrato-edit']]);
        Route::delete('/{id}', ['as' => 'tipo_extrato.destroy', 'uses' => 'TipoExtratoController@destroy', 'middleware' => ['permission:gestao_tipo_extrato-delete']]);
        });

    //rotas para Parte da Planta 
    Route::group(['prefix' => 'parte_planta', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'parte_planta.index', 'uses' => 'PartePlantaController@index', 'middleware' => ['permission:gestao_parte_planta-list']]);
        Route::get('/create', ['as' => 'parte_planta.create', 'uses' => 'PartePlantaController@create', 'middleware' => ['permission:gestao_parte_planta-create']]);
        Route::post('/create', ['as' => 'parte_planta.store', 'uses' => 'PartePlantaController@store', 'middleware' => ['permission:gestao_parte_planta-create']]);
        Route::get('/{id}', ['as' => 'parte_planta.show', 'uses' => 'PartePlantaController@show']);
        Route::get('/{id}/edit', ['as' => 'parte_planta.edit', 'uses' => 'PartePlantaController@edit', 'middleware' => ['permission:gestao_parte_planta-edit']]);
        Route::patch('/{id}', ['as' => 'parte_planta.update', 'uses' => 'PartePlantaController@update', 'middleware' => ['permission:gestao_parte_planta-edit']]);
        Route::delete('/{id}', ['as' => 'parte_planta.destroy', 'uses' => 'PartePlantaController@destroy', 'middleware' => ['permission:gestao_parte_planta-delete']]);
        });

    //rotas para Via de Administração
    Route::group(['prefix' => 'via_administracao', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'via_administracao.index', 'uses' => 'ViaAdministracaoController@index', 'middleware' => ['permission:gestao_via_administracao-list']]);
        Route::get('/create', ['as' => 'via_administracao.create', 'uses' => 'ViaAdministracaoController@create', 'middleware' => ['permission:gestao_via_administracao-create']]);
        Route::post('/create', ['as' => 'via_administracao.store', 'uses' => 'ViaAdministracaoController@store', 'middleware' => ['permission:gestao_via_administracao-create']]);
        Route::get('/{id}', ['as' => 'via_administracao.show', 'uses' => 'ViaAdministracaoController@show']);
        Route::get('/{id}/edit', ['as' => 'via_administracao.edit', 'uses' => 'ViaAdministracaoController@edit', 'middleware' => ['permission:gestao_via_administracao-edit']]);
        Route::patch('/{id}', ['as' => 'via_administracao.update', 'uses' => 'ViaAdministracaoController@update', 'middleware' => ['permission:gestao_via_administracao-edit']]);
        Route::delete('/{id}', ['as' => 'via_administracao.destroy', 'uses' => 'ViaAdministracaoController@destroy', 'middleware' => ['permission:gestao_via_administracao-delete']]);
        });

    //rotas para Experimento
    Route::group(['prefix' => 'experimento', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'experimento.index', 'uses' => 'experimentoController@index', 'middleware' => ['permission:gestao_experimento-list']]);
        Route::get('/create', ['as' => 'experimento.create', 'uses' => 'experimentoController@create', 'middleware' => ['permission:gestao_experimento-create']]);
        Route::post('/create', ['as' => 'experimento.store', 'uses' => 'experimentoController@store', 'middleware' => ['permission:gestao_experimento-create']]);
        Route::get('/{id}', ['as' => 'experimento.show', 'uses' => 'experimentoController@show']);
        Route::get('/{id}/edit', ['as' => 'experimento.edit', 'uses' => 'experimentoController@edit', 'middleware' => ['permission:gestao_experimento-edit']]);
        Route::patch('/{id}', ['as' => 'experimento.update', 'uses' => 'experimentoController@update', 'middleware' => ['permission:gestao_experimento-edit']]);
        Route::delete('/{id}', ['as' => 'experimento.destroy', 'uses' => 'experimentoController@destroy', 'middleware' => ['permission:gestao_experimento-delete']]);
        });

    //rotas para Avaliação Triagem farmacologica
    Route::group(['prefix' => 'avaliacaoTriagemFarmacologica', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'avaliacaoTriagemFarmacologica.index', 'uses' => 'avaliacaoTriagemFarmacologicaController@index', 'middleware' => ['permission:gestao_avaliacao_triagem_farmacologica-list']]);
        Route::get('/create', ['as' => 'avaliacaoTriagemFarmacologica.create', 'uses' => 'avaliacaoTriagemFarmacologicaController@create', 'middleware' => ['permission:gestao_avaliacao_triagem_farmacologica-create']]);
        Route::post('/create', ['as' => 'avaliacaoTriagemFarmacologica.store', 'uses' => 'avaliacaoTriagemFarmacologicaController@store', 'middleware' => ['permission:gestao_avaliacao_triagem_farmacologica-create']]);
        Route::get('/{id}', ['as' => 'avaliacaoTriagemFarmacologica.show', 'uses' => 'avaliacaoTriagemFarmacologicaController@show']);
        Route::get('/{id}/edit', ['as' => 'avaliacaoTriagemFarmacologica.edit', 'uses' => 'avaliacaoTriagemFarmacologicaController@edit', 'middleware' => ['permission:gestao_avaliacao_triagem_farmacologica-edit']]);
        Route::patch('/{id}', ['as' => 'avaliacaoTriagemFarmacologica.update', 'uses' => 'avaliacaoTriagemFarmacologicaController@update', 'middleware' => ['permission:gestao_avaliacao_triagem_farmacologica-edit']]);
        Route::delete('/{id}', ['as' => 'avaliacaoTriagemFarmacologica.destroy', 'uses' => 'avaliacaoTriagemFarmacologicaController@destroy', 'middleware' => ['permission:gestao_avaliacao_triagem_farmacologica-delete']]);
        });

    //rotas para Triagem farmacologica Comportamental
    Route::group(['prefix' => 'triagemFarmacologicaComportamental', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'triagemFarmacologicaComportamental.index', 'uses' => 'triagemFarmacologicaComportamentalController@index', 'middleware' => ['permission:gestao_triagem_farmacologica_comportamental-list']]);
        Route::get('/create', ['as' => 'triagemFarmacologicaComportamental.create', 'uses' => 'triagemFarmacologicaComportamentalController@create', 'middleware' => ['permission:gestao_triagem_farmacologica_comportamental-create']]);
        Route::post('/create', ['as' => 'triagemFarmacologicaComportamental.store', 'uses' => 'triagemFarmacologicaComportamentalController@store', 'middleware' => ['permission:gestao_triagem_farmacologica_comportamental-create']]);
        Route::get('/{id}', ['as' => 'triagemFarmacologicaComportamental.show', 'uses' => 'triagemFarmacologicaComportamentalController@show']);
        Route::get('/{id}/edit', ['as' => 'triagemFarmacologicaComportamental.edit', 'uses' => 'triagemFarmacologicaComportamentalController@edit', 'middleware' => ['permission:gestao_triagem_farmacologica_comportamental-edit']]);
        Route::patch('/{id}', ['as' => 'triagemFarmacologicaComportamental.update', 'uses' => 'triagemFarmacologicaComportamentalController@update', 'middleware' => ['permission:gestao_triagem_farmacologica_comportamental-edit']]);
        Route::delete('/{id}', ['as' => 'triagemFarmacologicaComportamental.destroy', 'uses' => 'triagemFarmacologicaComportamentalController@destroy', 'middleware' => ['permission:gestao_triagem_farmacologica_comportamental-delete']]);
        });
    
    //rotas para Avaliação Toxidade Aguda
        Route::group(['prefix' => 'avaliacaoToxidadeAguda', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'avaliacaoToxidadeAguda.index', 'uses' => 'avaliacaoToxidadeAgudaController@index', 'middleware' => ['permission:gestao_avaliacao_toxidade_aguda-list']]);
        Route::get('/create', ['as' => 'avaliacaoToxidadeAguda.create', 'uses' => 'avaliacaoToxidadeAgudaController@create', 'middleware' => ['permission:gestao_avaliacao_toxidade_aguda-create']]);
        Route::post('/create', ['as' => 'avaliacaoToxidadeAguda.store', 'uses' => 'avaliacaoToxidadeAgudaController@store', 'middleware' => ['permission:gestao_avaliacao_toxidade_aguda-create']]);
        Route::get('/{id}', ['as' => 'avaliacaoToxidadeAguda.show', 'uses' => 'avaliacaoToxidadeAgudaController@show']);
        Route::get('/{id}/edit', ['as' => 'avaliacaoToxidadeAguda.edit', 'uses' => 'avaliacaoToxidadeAgudaController@edit', 'middleware' => ['permission:gestao_avaliacao_toxidade_aguda-edit']]);
        Route::patch('/{id}', ['as' => 'avaliacaoToxidadeAguda.update', 'uses' => 'avaliacaoToxidadeAgudaController@update', 'middleware' => ['permission:gestao_avaliacao_toxidade_aguda-edit']]);
        Route::delete('/{id}', ['as' => 'avaliacaoToxidadeAguda.destroy', 'uses' => 'avaliacaoToxidadeAgudaController@destroy', 'middleware' => ['permission:gestao_avaliacao_toxidade_aguda-delete']]);
        });

      //rotas para Toxidade Aguda
        Route::group(['prefix' => 'toxidadeAguda', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'toxidadeAguda.index', 'uses' => 'toxidadeAgudaController@index', 'middleware' => ['permission:gestao_toxidade_aguda-list']]);
        Route::get('/create', ['as' => 'toxidadeAguda.create', 'uses' => 'toxidadeAgudaController@create', 'middleware' => ['permission:gestao_toxidade_aguda-create']]);
        Route::post('/create', ['as' => 'toxidadeAguda.store', 'uses' => 'toxidadeAgudaController@store', 'middleware' => ['permission:gestao_toxidade_aguda-create']]);
        Route::get('/{id}', ['as' => 'toxidadeAguda.show', 'uses' => 'toxidadeAgudaController@show']);
        Route::get('/{id}/edit', ['as' => 'toxidadeAguda.edit', 'uses' => 'toxidadeAgudaController@edit', 'middleware' => ['permission:gestao_toxidade_aguda-edit']]);
        Route::patch('/{id}', ['as' => 'toxidadeAguda.update', 'uses' => 'toxidadeAgudaController@update', 'middleware' => ['permission:gestao_toxidade_aguda-edit']]);
        Route::delete('/{id}', ['as' => 'toxidadeAguda.destroy', 'uses' => 'toxidadeAgudaController@destroy', 'middleware' => ['permission:gestao_toxidade_aguda-delete']]);
        });

    //rotas para relatório
    Route::get('/relatorioUsuario', ['as' => 'relatorio.usuario', 'uses' => 'RelatorioController@relatorioUsuario', 'middleware' => ['permission:relatorioUsuario']]);

    Route::get('/{id}', ['as' => 'relatorio.solicitacao', 'uses' => 'RelatorioController@relatorioSolicitacao', 'middleware' => ['permission:relatorioUsuario']]);
});