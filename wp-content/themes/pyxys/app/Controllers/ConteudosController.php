<?php


namespace App\Controllers;


use Sober\Controller\Controller;
use function App\debug;

class ConteudosController extends Controller
{
    public static function getCategory($id, $attr)
    {
        $terms = get_the_terms( $id, 'categorias_conteudos' );

        if($terms):
            return $terms[0]->$attr;
        else:
            return 'Sem Categoria';
        endif;
    }

    public static function getCategories($id)
    {
        $terms = get_the_terms( $id, 'categorias_conteudos' );

        if($terms):
            return $terms;
        else:
            return null;
        endif;
    }

    public static function getRelatedPosts($terms = [])
    {
        $array_terms = [];

        if(count($terms) > 0):
            foreach ($terms as $term):
                $array_terms[] = $term->term_id;
            endforeach;
        endif;

        $args = [
            'post_type' => 'conteudos',
            'post_per_page' => 3,
            'orderby' => 'rand',
            'tax_query' => array(
                array(
                    'taxonomy' => 'categorias_conteudos',
                    'field' => 'term_id',
                    'terms' => [...$array_terms]
                )
            )
        ];
        $query = new \WP_Query($args);

        return $query;
    }


    public static function getSubTitle($id)
    {
        $subTitle = get_field('subtitulo', $id);

        return $subTitle;
    }
}
