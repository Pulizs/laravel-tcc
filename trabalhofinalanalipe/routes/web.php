<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisciplinasController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserPDFController;
use App\Http\Controllers\DisciplinaPDFController;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

Route::get('send-mail',
    [MailController::class, 'index']);

Route::group([
    'namespace' => 'App\Http\Controllers'
], function () {
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group([
        'middleware' => [
            'guest'
        ]
    ], function () {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group([
        'middleware' => [
            'auth'
        ]
    ], function () {
 
        Route::get("/usuarios", "UsuariosController@index")->name("usuarios.index");
        Route::get("/usuarios/create", "UsuariosController@create")->name("usuarios.create");
        Route::post("/usuarios/create", "UsuariosController@store")->name("usuarios.store");
        Route::get('/usuarios/{usuario}/show', 'UsuariosController@show')->name('usuarios.show');
        Route::get('/usuarios/{usuario}/edit', 'UsuariosController@edit')->name('usuarios.edit');
        Route::patch('/usuarios/{usuario}/update', 'UsuariosController@update')->name('usuarios.update');
        Route::delete('/usuarios/{usuario}/delete', 'UsuariosController@destroy')->name('usuarios.destroy');

        Route::get("/disciplinas", "DisciplinasController@index")->name("disciplinas.index");
        Route::get("/disciplinas/create", "DisciplinasController@create")->name("disciplinas.create");
        Route::post("/disciplinas/create", "DisciplinasController@store")->name("disciplinas.store");
        Route::get('/disciplinas/{disciplina}/show', 'DisciplinasController@show')->name('disciplinas.show');
        Route::get('/disciplinas/{disciplina}/edit', 'DisciplinasController@edit')->name('disciplinas.edit');
        Route::patch('/disciplinas/{disciplina}/update', 'DisciplinasController@update')->name('disciplinas.update');
        Route::delete('/disciplinas/{disciplina}/delete', 'DisciplinasController@destroy')->name('disciplinas.destroy');
        
        Route::get("/postagens", "PostagensController@index")->name("postagens.index");
        Route::get("/postagens/create", "PostagensController@create")->name("postagens.create");
        Route::post("/postagens/create", "PostagensController@store")->name("postagens.store");
        Route::get('/postagens/{postagem}/show', 'PostagensController@show')->name('postagens.show');
        Route::get('/postagens/{postagem}/edit', 'PostagensController@edit')->name('postagens.edit');
        Route::patch('/postagens/{postagem}/update', 'PostagensController@update')->name('postagens.update');
        Route::delete('/postagens/{postagem}/delete', 'PostagensController@destroy')->name('postagens.destroy');

        Route::get("/solicitacoes", "SolicitacoesController@index")->name("solicitacoes.index");
        Route::get("/solicitacoes/create", "SolicitacoesController@create")->name("solicitacoes.create");
        Route::post("/solicitacoes/create", "SolicitacoesController@store")->name("solicitacoes.store");
        Route::delete('/solicitacoes/{solicitacao}/delete', 'SolicitacoesController@destroy')->name('solicitacoes.destroy');
        Route::get('/solicitacoes/{solicitacao}/show', 'SolicitacoesController@show')->name('solicitacoes.show');
        Route::get('/solicitacoes/{solicitacao}/edit', 'SolicitacoesController@edit')->name('solicitacoes.edit');
        Route::patch('/solicitacoes/{solicitacao}/update', 'SolicitacoesController@update')->name('solicitacoes.update');
        
        Route::get("/professores", "ProfessoresController@index")->name("professores.index");
        Route::get("/professores/create", "ProfessoresController@create")->name("professores.create");
        Route::post("/professores/create", "ProfessoresController@store")->name("professores.store");
        Route::get('/professores/{professor}/show', 'ProfessoresController@show')->name('professores.show');
        Route::get('/professores/{professor}/edit', 'ProfessoresController@edit')->name('professores.edit');
        Route::patch('/professores/{professor}/update', 'ProfessoresController@update')->name('professores.update');
        Route::delete('/professores/{professor}/delete', 'ProfessoresController@destroy')->name('professores.destroy');
        
        Route::get('/professores/{professor}/disciplinas', 'ProfessoresController@disciplinas')->name('professores.disciplinas');
               
        Route::Resource("/users/pdf", UserPDFController::class );
       
        Route::get("/disciplinas/pdf", "DisciplinaPDFController@index")->name("pdf.index");
        
        Route::get('/email/email{professor}', "MailController@index")->name("email.index");


        Route::get("/materiais", "MateriaisController@index")->name("materiais.index");
        
     
      
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
