<?php

namespace LaibanAPI;

class App
{
    public static $postTypeSlug = 'preschool';

    public function __construct()
    {
        // Register posttype
        new \LaibanAPI\Entity\PostType(
            _x('Preschools', 'Post type plural', 'laiban-api'),
            _x('Preschool', 'Post type singular', 'laiban-api'),
            self::$postTypeSlug,
            array(
                'description'          =>   __('Preschools', 'laiban-api'),
                'menu_icon'            =>   'dashicons-carrot',
                'public'               =>   false,
                'publicly_queriable'   =>   true,
                'show_ui'              =>   true,
                'show_in_nav_menus'    =>   false,
                'has_archive'          =>   false,
                'rewrite'              =>   array(
                    'slug'       =>   __('preschool', 'laiban-api'),
                    'with_front' =>   false
                ),
                'hierarchical'          =>  false,
                'exclude_from_search'   =>  true,
                'taxonomies'            =>  array(),
                'supports'              =>  array('title', 'revisions'),
                'show_in_rest'          => true
            )
        );

        add_filter('acf/fields/google_map/api', array($this, 'registerGoogleMapsKey'));
        add_action('rest_api_init', array($this, 'registerRestFields'));
        add_filter('rest_prepare_preschool', array($this, 'removeResponseKeys'), 5000, 3);
        add_action('init', array($this, 'registerOptionsPage'));
    }

    public function registerOptionsPage()
    {
        if (function_exists('acf_add_options_page')) {
            acf_add_options_page(
                array(
                    'icon_url' => 'dashicons-carrot',
                    'page_title' => __('Lunch menu', 'laiban-api'),
                    'menu_slug'  => 'laiban-api-lunch-menu',
                    'position' => 63,
                )
            );
        }
    }

    public function registerRestFields()
    {
        register_rest_field(self::$postTypeSlug, 'data', array(
            'get_callback' => array($this, 'restFieldsGetCallback'),
            'update_callback' => null,
            'schema' => null
        ));
    }

    public function removeResponseKeys($response, $post, $request)
    {
        $allowedKeys = array('data', 'id');
        $response->data = array_filter($response->data, function ($key) use ($allowedKeys) {
            return in_array($key, $allowedKeys);
        }, ARRAY_FILTER_USE_KEY);

        return $response;
    }

    public function restFieldsGetCallback($object, $fieldName, $request)
    {
        $data = array();

        if (isset($object['id']) && $object['id'] > 0) {
            $data = get_fields($object['id']);
            $data['lunchMenu'] = get_field('lunch_menu', 'options');
        }
        
        return $data;
    }

    public function registerGoogleMapsKey($api)
    {
        if (defined('G_GEOCODE_KEY')) {
            $api['key'] = G_GEOCODE_KEY;
        }
        
        return $api;
    }
}
