<?php 


if (function_exists('acf_add_local_field_group')) {

    acf_add_local_field_group(array(
    'key' => 'group_5ce508bf360b2',
    'title' => __('Preschool - Calendar', 'laiban-api'),
    'fields' => array(
        0 => array(
            'key' => 'field_5ce508c784652',
            'label' => __('Calendar Events', 'laiban-api'),
            'name' => 'calendar_events',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => '',
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_5ce508e084653',
                    'label' => __('Date', 'laiban-api'),
                    'name' => 'date',
                    'type' => 'date_picker',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'display_format' => 'd/m/Y',
                    'return_format' => 'm/d/Y',
                    'first_day' => 1,
                ),
                1 => array(
                    'key' => 'field_5ce508f584654',
                    'label' => __('Content', 'laiban-api'),
                    'name' => 'content',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => 82,
                    'rows' => 2,
                    'new_lines' => '',
                ),
            ),
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