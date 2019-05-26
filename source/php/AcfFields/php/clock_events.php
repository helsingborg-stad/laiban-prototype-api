<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_5ceacf9ce6ae4',
    'title' => __('Preschool - Clock events', 'laiban-api'),
    'fields' => array(
        0 => array(
            'key' => 'field_5ceacf9cee51c',
            'label' => __('Clock Events', 'laiban-api'),
            'name' => 'clock_events',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => 'field_5ce4f247f4e1e',
            'min' => 0,
            'max' => 0,
            'layout' => 'row',
            'button_label' => __('Add activity', 'laiban-api'),
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_5ceacf9cf2505',
                    'label' => __('Time', 'laiban-api'),
                    'name' => 'time',
                    'type' => 'time_picker',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'display_format' => 'H:i',
                    'return_format' => 'H:i',
                ),
                1 => array(
                    'key' => 'field_5cead0584e2ac',
                    'label' => __('Emoji', 'laiban-api'),
                    'name' => 'emoji',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                2 => array(
                    'key' => 'field_5cead0664e2ad',
                    'label' => __('Event', 'laiban-api'),
                    'name' => 'event',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
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