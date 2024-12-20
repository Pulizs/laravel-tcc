<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisciplinasController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserPDFController;
use App\Http\Controllers\DisciplinaPDFController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\PostagensController;

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

 Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
 Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
 Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
 Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
 


Route::get('send-mail',
    [MailController::class, 'index']);

Route::group([
    'namespace' => 'App\Http\Controllers'
], function () {
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');


    //telas que um usuario sem login pode acessar
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


        Route::get("/livros", "LivrosController@index")->name("livros.index");
        Route::get("/postagens", "PostagensController@index")->name("postagens.index");
    });

    Route::group([
        'middleware' => [
            'auth'
        ]
    ], function () {
 
        Route::get("/usuarios", "UsuariosController@index")->name("usuarios.index");
        Route::get("/usuarios/create", "UsuariosController@create")->name("usuarios.create");
        Route::post("/usuarios/create", "UsuariosController@store")->name("usuarios.store");
        Route::get('/usuarios/{usuario}/show', 'UsuariosController@show')->name('usuarios.show')->middleware('admin');
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




        Route::resource('postagens', PostagensController::class);

        Route::resource('livro', LivrosController::class);



       
        Route::get("/disciplinas/pdf", "DisciplinaPDFController@index")->name("pdf.index");
        
        Route::get('/email/email{professor}', "MailController@index")->name("email.index");


        Route::get("/livros", "LivrosController@index")->name("livros.index");
        Route::get("/livros/create", "LivrosController@create")->name("livros.create");
        Route::post("/livros/create", "LivrosController@store")->name("livros.store");
        Route::get('/livros/{livros}/show', 'LivrosController@show')->name('livros.show');
        Route::get('/livros/{livros}/edit', 'LivrosController@edit')->name('livros.edit');
        Route::patch('/livros/{livros}/update', 'LivrosController@update')->name('livros.update');
        Route::delete('/livros/{livros}/delete', 'LivrosController@destroy')->name('livros.destroy');

        Route::get("/perfil", "PerfilController@index")->name("perfil.index");
        Route::get("/perfil/create", "PerfilController@create")->name("perfil.create");
        Route::post("/perfil/create", "PerfilController@store")->name("perfil.store");
        Route::get('/perfil/{perfil}/show', 'PerfilController@show')->name('perfil.show');
        Route::get('/perfil/{perfil}/edit', 'PerfilController@edit')->name('perfil.edit');
        Route::patch('/perfil/{perfil}/update', 'PerfilController@update')->name('perfil.update');
        Route::delete('/perfil/{perfil}/delete', 'PerfilController@destroy')->name('perfil.destroy');

        Route::get("/duvidas", "DuvidasController@index")->name("duvidas.index");

        Route::get("/sobreNos", "sobreNosController@index")->name("sobreNos.index");
        Route::resource('sobreNos', SobreNosController::class);



        Route::get("/configuracao", "ConfiguracaoController@index")->name("configuracao.index");

        Route::get("/eventos", "EventosController@index")->name("eventos.index");
        Route::get("/eventos/create", "EventosController@create")->name("eventos.create");
        Route::post("/eventos/create", "EventosController@store")->name("eventos.store");
        Route::get('/eventos/{eventos}/show', 'EventosController@show')->name('eventos.show');
        Route::get('/eventos/{eventos}/edit', 'EventosController@edit')->name('eventos.edit');
        Route::patch('/eventos/{eventos}/update', 'EventosController@update')->name('eventos.update');
        Route::delete('/eventos/{eventos}/delete', 'EventosController@destroy')->name('eventos.destroy');



        Route::get("/telaAdmin", "TelaAdminController@index")->name("telaAdmin.index");
        Route::get('/telaAdmin/{user}/edit', 'TelaAdminController@edit')->name('telaAdmin.edit');
        Route::get('/telaAdmin/{user}/show', 'TelaAdminController@show')->name('telaAdmin.show');
        Route::patch('/telaAdmin/{user}/update', 'TelaAdminController@update')->name('telaAdmin.update');
        Route::delete('/telaAdmin/{user}/delete', 'TelaAdminController@destroy')->name('telaAdmin.destroy');
        
        Route::get("/comentarios", "ComentariosController@index")->name("comentarios.index");
        Route::get("/comentarios/create", "ComentariosController@create")->name("comentarios.create");
        Route::post("/comentarios/create", "ComentariosController@store")->name("comentarios.store");
      
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
