<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;
class PermissionTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $permission = [
            [
                'name' => 'role-list',
                'display_name' => 'Listagem de papeis',
                'description' => 'Listar papeis'
            ],
            [
                'name' => 'role-create',
                'display_name' => 'Cadastrar papel',
                'description' => 'Cadastrar novo papel'
            ],
            [
                'name' => 'role-edit',
                'display_name' => 'Editar papel',
                'description' => 'Editar papel'
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Excluir papel',
                'description' => 'Excluir papel'
            ],
            [
                'name' => 'gestao_usuario-list',
                'display_name' => 'Listagem de usuários',
                'description' => 'Listar usuários'
            ],
            [
                'name' => 'gestao_usuario-create',
                'display_name' => 'Cadastrar usuário',
                'description' => 'Cradastrar novo usuário'
            ],
            [
                'name' => 'gestao_usuario-edit',
                'display_name' => 'Editar usuário',
                'description' => 'Editar usuário'
            ],
            [
                'name' => 'gestao_usuario-delete',
                'display_name' => 'Excluir usuário',
                'description' => 'Excluir usuário'
            ],

            //Gestão planta
            [
                'name' => 'gestao_planta-list',
                'display_name' => 'Listagem de planta(s)',
                'description' => 'Listar planta(s)'
            ],
            [
                'name' => 'gestao_planta-create',
                'display_name' => 'Cadastrar planta',
                'description' => 'Cradastrar nova planta'
            ],
            [
                'name' => 'gestao_planta-edit',
                'display_name' => 'Editar planta',
                'description' => 'Editar planta'
            ],
            [
                'name' => 'gestao_planta-delete',
                'display_name' => 'Excluir planta',
                'description' => 'Excluir planta'
            ],

            //Gestão Familia Planta
            [
                'name' => 'gestao_familia_planta-list',
                'display_name' => 'Listagem de familia(s) da(s) planta(s)',
                'description' => 'Listar familia(s) da(s) planta(s)'
            ],
            [
                'name' => 'gestao_familia_planta-create',
                'display_name' => 'Cadastrar familia da planta',
                'description' => 'Cradastrar nova familia da planta'
            ],
            [
                'name' => 'gestao_familia_planta-edit',
                'display_name' => 'Editar familia da planta',
                'description' => 'Editar familia da planta'
            ],
            [
                'name' => 'gestao_familia_planta-delete',
                'display_name' => 'Excluir familia da planta',
                'description' => 'Excluir familia da planta'
            ],

            //Gestão Especie Planta

            [
                'name' => 'gestao_especie_planta-list',
                'display_name' => 'Listagem de especie(s) da(s) planta(s)',
                'description' => 'Listar especie(s) da(s) planta(s)'
            ],
            [
                'name' => 'gestao_especie_planta-create',
                'display_name' => 'Cadastrar especie da planta',
                'description' => 'Cradastrar nova especie da planta'
            ],
            [
                'name' => 'gestao_especie_planta-edit',
                'display_name' => 'Editar especie da planta',
                'description' => 'Editar especie da planta'
            ],
            [
                'name' => 'gestao_especie_planta-delete',
                'display_name' => 'Excluir especie da planta',
                'description' => 'Excluir especie da planta'
            ],

            //Gestão Genero Planta
            [
                'name' => 'gestao_genero_planta-list',
                'display_name' => 'Listagem de genero(s) da(s) planta(s)',
                'description' => 'Listar genero(s) da(s) planta(s)'
            ],
            [
                'name' => 'gestao_genero_planta-create',
                'display_name' => 'Cadastrar genero da planta',
                'description' => 'Cradastrar novo genero da planta'
            ],
            [
                'name' => 'gestao_genero_planta-edit',
                'display_name' => 'Editar genero da planta',
                'description' => 'Editar genero da planta'
            ],
            [
                'name' => 'gestao_genero_planta-delete',
                'display_name' => 'Excluir genero da planta',
                'description' => 'Excluir genero da planta'
            ],

            //Gestão Grupo Experimento
            [
                'name' => 'gestao_grupo_experimento-list',
                'display_name' => 'Listagem de grupo(s) de experimento(s)',
                'description' => 'Listar grupo(s) de experimento(s)'
            ],
            [
                'name' => 'gestao_grupo_experimento-create',
                'display_name' => 'Cadastrar grupo de experimento',
                'description' => 'Cradastrar novo grupo de experimento'
            ],
            [
                'name' => 'gestao_grupo_experimento-edit',
                'display_name' => 'Editar grupo de experimento',
                'description' => 'Editar grupo de experimento'
            ],
            [
                'name' => 'gestao_grupo_experimento-delete',
                'display_name' => 'Excluir grupo de experimento',
                'description' => 'Excluir grupo de experimento'
            ],

            //Gestão Animal
            [
                'name' => 'gestao_animal-list',
                'display_name' => 'Listagem de animal(is)',
                'description' => 'Listar animal(is)'
            ],
            [
                'name' => 'gestao_animal-create',
                'display_name' => 'Cadastrar animal',
                'description' => 'Cradastrar novo animal'
            ],
            [
                'name' => 'gestao_animal-edit',
                'display_name' => 'Editar animal',
                'description' => 'Editar animal'
            ],
            [
                'name' => 'gestao_animal-delete',
                'display_name' => 'Excluir animal',
                'description' => 'Excluir animal'
            ],

            //Gestão Via de Administracao
            [
                'name' => 'gestao_via_administracao-list',
                'display_name' => 'Listagem de via de administracao(is)',
                'description' => 'Listar via de administracao(is)'
            ],
            [
                'name' => 'gestao_via_administracao-create',
                'display_name' => 'Cadastrar via de administracao',
                'description' => 'Cradastrar nova via de administracao'
            ],
            [
                'name' => 'gestao_via_administracao-edit',
                'display_name' => 'Editar via de administracao',
                'description' => 'Editar via de administracao'
            ],
            [
                'name' => 'gestao_via_administracao-delete',
                'display_name' => 'Excluir via de administracao',
                'description' => 'Excluir via de administracao'
            ],

                //Gestão Parte da Planta
            [
                'name' => 'gestao_parte_planta-list',
                'display_name' => 'Listagem de parte planta(is)',
                'description' => 'Listar parte planta(is)'
            ],
            [
                'name' => 'gestao_parte_planta-create',
                'display_name' => 'Cadastrar parte planta',
                'description' => 'Cradastrar nova parte planta'
            ],
            [
                'name' => 'gestao_parte_planta-edit',
                'display_name' => 'Editar parte planta',
                'description' => 'Editar parte planta'
            ],
            [
                'name' => 'gestao_parte_planta-delete',
                'display_name' => 'Excluir parte planta',
                'description' => 'Excluir parte planta'
            ],

                   //Gestão Tipo de Extrato
            [
                'name' => 'gestao_tipo_extrato-list',
                'display_name' => 'Listagem de tipo extrato(s)',
                'description' => 'Listar tipo extrato(s)'
            ],
            [
                'name' => 'gestao_tipo_extrato-create',
                'display_name' => 'Cadastrar tipo extrato',
                'description' => 'Cradastrar nova tipo extrato'
            ],
            [
                'name' => 'gestao_tipo_extrato-edit',
                'display_name' => 'Editar tipo extrato',
                'description' => 'Editar tipo extrato'
            ],
            [
                'name' => 'gestao_tipo_extrato-delete',
                'display_name' => 'Excluir tipo extrato',
                'description' => 'Excluir tipo extrato'
            ],


            //Gestão Experimento
            [
                'name' => 'gestao_experimento-list',
                'display_name' => 'Listagem de experimento(s)',
                'description' => 'Listar experimento(s)'
            ],
            [
                'name' => 'gestao_experimento-create',
                'display_name' => 'Cadastrar experimento',
                'description' => 'Cradastrar novo experimento'
            ],
            [
                'name' => 'gestao_experimento-edit',
                'display_name' => 'Editar experimento',
                'description' => 'Editar experimento'
            ],
            [
                'name' => 'gestao_experimento-delete',
                'display_name' => 'Excluir experimento',
                'description' => 'Excluir experimento'
            ],

             //Gestão Triagem Farmacologica comportamental
            [
                'name' => 'gestao_triagem_farmacologica_comportamental-list',
                'display_name' => 'Listagem de triagem(ns)',
                'description' => 'Listar triagem(ns)'
            ],
            [
                'name' => 'gestao_triagem_farmacologica_comportamental-create',
                'display_name' => 'Cadastrar triagem',
                'description' => 'Cradastrar triagem'
            ],
            [
                'name' => 'gestao_triagem_farmacologica_comportamental-edit',
                'display_name' => 'Editar triagem',
                'description' => 'Editar triagem'
            ],
            [
                'name' => 'gestao_triagem_farmacologica_comportamental-delete',
                'display_name' => 'Excluir triagem',
                'description' => 'Excluir triagem'
            ],

            //Gestão Avaliacao Triagem Farmacologica comportamental
            [
                'name' => 'gestao_avaliacao_triagem_farmacologica-list',
                'display_name' => 'Listagem de avaliação(ões)',
                'description' => 'Listar avaliação(ões)'
            ],
            [
                'name' => 'gestao_avaliacao_triagem_farmacologica-create',
                'display_name' => 'Cadastrar avaliação',
                'description' => 'Cradastrar avaliação'
            ],
            [
                'name' => 'gestao_avaliacao_triagem_farmacologica-edit',
                'display_name' => 'Editar avaliação',
                'description' => 'Editar avaliação'
            ],
            [
                'name' => 'gestao_avaliacao_triagem_farmacologica-delete',
                'display_name' => 'Excluir avaliação',
                'description' => 'Excluir avaliação'
            ],

             //Gestão Toxidade Aguda
            [
                'name' => 'gestao_toxidade_aguda-list',
                'display_name' => 'Listagem de triagem(ns)',
                'description' => 'Listar triagem(ns)'
            ],
            [
                'name' => 'gestao_toxidade_aguda-create',
                'display_name' => 'Cadastrar triagem',
                'description' => 'Cradastrar triagem'
            ],
            [
                'name' => 'gestao_toxidade_aguda-edit',
                'display_name' => 'Editar triagem',
                'description' => 'Editar triagem'
            ],
            [
                'name' => 'gestao_toxidade_aguda-delete',
                'display_name' => 'Excluir triagem',
                'description' => 'Excluir triagem'
            ],

             //Gestão Avaliacao Toxidade Aguda
            [
                'name' => 'gestao_avaliacao_toxidade_aguda-list',
                'display_name' => 'Listagem de avaliação(ões)',
                'description' => 'Listar avaliação(ões)'
            ],
            [
                'name' => 'gestao_avaliacao_toxidade_aguda-create',
                'display_name' => 'Cadastrar avaliação',
                'description' => 'Cradastrar avaliação'
            ],
            [
                'name' => 'gestao_avaliacao_toxidade_aguda-edit',
                'display_name' => 'Editar avaliação',
                'description' => 'Editar avaliação'
            ],
            [
                'name' => 'gestao_avaliacao_toxidade_aguda-delete',
                'display_name' => 'Excluir avaliação',
                'description' => 'Excluir avaliação'
            ],


            // Telas iniciais
            [
                'name' => 'viewTelaAdministradorDoSistema',
                'display_name' => 'Tela de administrador do sistema',
                'description' => 'Tela de administrador do sistema'
            ],
            [
                'name' => 'relatorioUsuario',
                'display_name' => 'Gerar relatório de usuários',
                'description' => 'Gerar relatório de usuários'
            ]
        ];

$role = [
            [
                'name' => 'Administrador',
                'display_name' => 'Administrador',
                'description' => 'Administrador do Sistema'
            ],
            [
                'name' => 'Pesquisador',
                'display_name' => 'Pesquisador',
                'description' => 'Pesquisador do Projeto'
            ]         
                        
        ];
        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
        foreach ($role as $key => $value) {
            Role::create($value);
        }
    }


}
