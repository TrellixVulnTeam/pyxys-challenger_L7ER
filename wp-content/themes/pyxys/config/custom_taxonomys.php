<?php

function cptui_register_my_taxes_categorias_conteudos() {

    /**
     * Taxonomy: Categorias de Conteúdos.
     */

    $labels = [
        "name" => __( "Categorias de Conteúdos", "sage" ),
        "singular_name" => __( "Categoria de Conteúdo", "sage" ),
        "menu_name" => __( "Categorias de Conteúdos", "sage" ),
        "all_items" => __( "Todos as Categorias de Conteúdos", "sage" ),
        "edit_item" => __( "Editar Categoria de Conteúdo", "sage" ),
        "view_item" => __( "Ver Categoria de Conteúdo", "sage" ),
        "update_item" => __( "Atualizar nome do Categoria de Conteúdo", "sage" ),
        "add_new_item" => __( "Adicionar novo Categoria de Conteúdo", "sage" ),
        "new_item_name" => __( "Novo Categoria de Conteúdo", "sage" ),
        "parent_item" => __( "Categoria de Conteúdo ascendente", "sage" ),
        "parent_item_colon" => __( "Categoria de Conteúdo ascendente:", "sage" ),
        "search_items" => __( "Pesquisar Categorias de Conteúdos", "sage" ),
        "popular_items" => __( "Categorias de Conteúdos mais populares", "sage" ),
        "separate_items_with_commas" => __( "Separe Categorias de Conteúdos com vírgulas", "sage" ),
        "add_or_remove_items" => __( "Adicionar ou excluir Categorias de Conteúdos", "sage" ),
        "choose_from_most_used" => __( "Escolher entre os termos mais usados de Categorias de Conteúdos", "sage" ),
        "not_found" => __( "Nenhum Categorias de Conteúdos encontrado", "sage" ),
        "no_terms" => __( "Nenhum Categorias de Conteúdos", "sage" ),
        "items_list_navigation" => __( "Navegação na lista de Categorias de Conteúdos", "sage" ),
        "items_list" => __( "Lista de Categorias de Conteúdos", "sage" ),
        "back_to_items" => __( "Voltar para Categorias de Conteúdos", "sage" ),
    ];


    $args = [
        "label" => __( "Categorias de Conteúdos", "sage" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'categorias_conteudos', 'with_front' => true,  'hierarchical' => true, ],
        "show_admin_column" => true,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "rest_base" => "categorias_conteudos",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => true,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "categorias_conteudos", [ "conteudos" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_categorias_conteudos' );
