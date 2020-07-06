<?php

namespace FigoliQuinn\EWPQuery;

if (!defined('ABSPATH')) exit;

class EWP_Query 
{
    protected $post_type = 'post';


    public function __construct( ?string $post_type )
    {
        if ( ! empty( $post_type ) ) {
            $this->post_type = $post_type;
        }
    }

    public function get(): array 
    {
        $query = new \WP_Query($this->format_query_parameters());

        return $query->posts;
    }

    public function first()
    {
        $posts = $this->get();

        if (!empty($posts)) {
            return $posts[0];
        }
    }

    public function count(): int 
    {
        return count( $this->get() );
    }

    protected function format_query_parameters(): array 
    {
        $query_parameters = [
            'post_type' => $this->post_type,
        ];

        return $query_parameters;
    }

}