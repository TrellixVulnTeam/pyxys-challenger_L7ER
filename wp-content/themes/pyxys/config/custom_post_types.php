<?php

function cptui_register_my_cpts_conteudos() {

    /**
     * Post Type: Conteúdos.
     */

    $labels = [
        "name" => __( "Conteúdos", "sage" ),
        "singular_name" => __( "Conteúdo", "sage" ),
        "menu_name" => __( "Conteúdos", "sage" ),
        "all_items" => __( "Todos os Conteúdos", "sage" ),
        "add_new" => __( "Adicionar novo", "sage" ),
        "add_new_item" => __( "Adicionar novo Conteúdo", "sage" ),
        "edit_item" => __( "Editar Conteúdo", "sage" ),
        "new_item" => __( "Novo Conteúdo", "sage" ),
        "view_item" => __( "Ver Conteúdo", "sage" ),
        "view_items" => __( "Ver Conteúdos", "sage" ),
        "search_items" => __( "Pesquisar Conteúdos", "sage" ),
        "not_found" => __( "Nenhum Conteúdos encontrado", "sage" ),
        "not_found_in_trash" => __( "Nenhum Conteúdos encontrado na lixeira", "sage" ),
        "parent" => __( "Conteúdo ascendente:", "sage" ),
        "featured_image" => __( "Imagem destacada para esse Conteúdo", "sage" ),
        "set_featured_image" => __( "Definir imagem destacada para esse Conteúdo", "sage" ),
        "remove_featured_image" => __( "Remover imagem destacada para esse Conteúdo", "sage" ),
        "use_featured_image" => __( "Usar como imagem destacada para esse Conteúdo", "sage" ),
        "archives" => __( "Arquivos de Conteúdo", "sage" ),
        "insert_into_item" => __( "Inserir no Conteúdo", "sage" ),
        "uploaded_to_this_item" => __( "Enviar para esse Conteúdo", "sage" ),
        "filter_items_list" => __( "Filtrar lista de Conteúdos", "sage" ),
        "items_list_navigation" => __( "Navegação na lista de Conteúdos", "sage" ),
        "items_list" => __( "Lista de Conteúdos", "sage" ),
        "attributes" => __( "Atributos de Conteúdos", "sage" ),
        "name_admin_bar" => __( "Conteúdo", "sage" ),
        "item_published" => __( "Conteúdo publicado", "sage" ),
        "item_published_privately" => __( "Conteúdo publicado de forma privada.", "sage" ),
        "item_reverted_to_draft" => __( "Conteúdo revertido para rascunho.", "sage" ),
        "item_scheduled" => __( "Conteúdo agendado", "sage" ),
        "item_updated" => __( "Conteúdo atualizado.", "sage" ),
        "parent_item_colon" => __( "Conteúdo ascendente:", "sage" ),
    ];

    $args = [
        "label" => __( "Conteúdos", "sage" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "conteudos", "with_front" => true ],
        "query_var" => true,
        "menu_position" => 5,
        "supports" => [ "title", "editor", "thumbnail", "excerpt", "comments", "revisions", "author", "post-formats" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "conteudos", $args );
}

add_action( 'init', 'cptui_register_my_cpts_conteudos' );
