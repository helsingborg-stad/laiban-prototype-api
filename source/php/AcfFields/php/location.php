<?php 


if (function_exists('acf_add_local_field_group')) {

    acf_add_local_field_group(array(
    'key' => 'group_5ce4f4ffad4f0',
    'title' => __('Preschool - Location', 'laiban-api'),
    'fields' => array(
        0 => array(
            'key' => 'field_5ce4f522b4db8',
            'label' => __('Coordinates', 'laiban-api'),
            'name' => 'coordinates',
            'type' => 'google_map',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'center_lat' => '56.046411',
            'center_lng' => '12.694454',
            'zoom' => '',
            'height' => '',
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'preschool',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));

}