<?php 
$group = array (
  'key' => 'group_5704010e9a197',
  'title' => 'Rows - Flexible Content',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_5704010ea7bd1',
      'label' => 'Rows',
      'name' => 'rowsELD',
      'type' => 'flexible_content',
      'instructions' => 'Add custom content rows. For images, use align-center and size Large',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => 
      array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'button_label' => 'Add Row',
      'min' => '',
      'max' => '',
      'layouts' => 
      array (
        0 => 
        array (
          'key' => '57040128ae29d',
          'name' => 'one_column',
          'label' => 'One Column',
          'display' => 'block',
          'sub_fields' => 
          array (
            0 => 
            array (
              'key' => 'field_5704010eaea0f',
              'label' => 'Full Width or Standard Width',
              'name' => 'full_or_standard',
              'type' => 'select',
              'instructions' => '',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => 
              array (
                'standard' => 'Standard Width',
                'full' => 'Full Width',
              ),
              'default_value' => 
              array (
              ),
              'allow_null' => 1,
              'multiple' => 0,
              'ui' => 0,
              'ajax' => 0,
              'placeholder' => '',
              'disabled' => 0,
              'readonly' => 0,
            ),
            1 => 
            array (
              'key' => 'field_57222e20a0521',
              'label' => 'Constrain Inner Content?',
              'name' => 'constrain_inner_content',
              'type' => 'radio',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => 
              array (
                'yes' => 'Yes',
                'no' => 'No',
              ),
              'other_choice' => 0,
              'save_other_choice' => 0,
              'default_value' => '',
              'layout' => 'vertical',
            ),
            2 => 
            array (
              'key' => 'field_5723878f4692a',
              'label' => 'Add Content Above Columns?',
              'name' => 'add_content_above_columns',
              'type' => 'true_false',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'message' => '',
              'default_value' => 0,
            ),
            3 => 
            array (
              'key' => 'field_57222e91a0522',
              'label' => 'Content Above Columns',
              'name' => 'content_above_columns',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 
              array (
                0 => 
                array (
                  0 => 
                  array (
                    'field' => 'field_5723878f4692a',
                    'operator' => '==',
                    'value' => '1',
                  ),
                ),
              ),
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'full',
              'media_upload' => 1,
            ),
            4 => 
            array (
              'key' => 'field_5704023ed4f95',
              'label' => 'Additional Classes',
              'name' => 'additional_classes',
              'type' => 'checkbox',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => 
              array (
                'collapse' => 'Collapse',
                'text-center' => 'Centered Text',
                'blackbg' => 'Black Background',
                'sans' => 'Sans Serif Text',
                'nopad' => 'No Padding',
              ),
              'default_value' => 
              array (
              ),
              'layout' => 'vertical',
              'toggle' => 0,
            ),
            5 => 
            array (
              'key' => 'field_5704024ed4f96',
              'label' => 'Column Width',
              'name' => 'column_layout',
              'type' => 'select',
              'instructions' => '',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => 
              array (
                'one' => '1 column',
                'two' => '2 columns',
                'three' => '3 columns',
                'four' => '4 columns',
                'five' => '5 columns',
                'six' => '6 columns',
                'seven' => '7 columns',
                'eight' => '8 columns',
                'nine' => '9 columns',
                'ten' => '10 columns',
                'eleven' => '11 columns',
                'twelve' => '12 columns',
              ),
              'default_value' => 
              array (
              ),
              'allow_null' => 1,
              'multiple' => 0,
              'ui' => 0,
              'ajax' => 0,
              'placeholder' => '',
              'disabled' => 0,
              'readonly' => 0,
            ),
            6 => 
            array (
              'key' => 'field_570407edeaf34',
              'label' => 'Columns',
              'name' => 'columns',
              'type' => 'repeater',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'collapsed' => '',
              'min' => 1,
              'max' => 1,
              'layout' => 'block',
              'button_label' => 'Add Row',
              'sub_fields' => 
              array (
                0 => 
                array (
                  'key' => 'field_57040275d4f97',
                  'label' => 'Image or Wysiwyg',
                  'name' => 'image_or_wysiwyg',
                  'type' => 'radio',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => 
                  array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'choices' => 
                  array (
                    'image' => 'Image',
                    'wysiwyg' => 'WYSIWYG',
                    'imageWithOverlay' => 'Image with Overlay',
                  ),
                  'other_choice' => 0,
                  'save_other_choice' => 0,
                  'default_value' => '',
                  'layout' => 'vertical',
                ),
                1 => 
                array (
                  'key' => 'field_570402bcd4f98',
                  'label' => 'Image',
                  'name' => 'image',
                  'type' => 'image',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 
                  array (
                    0 => 
                    array (
                      0 => 
                      array (
                        'field' => 'field_57040275d4f97',
                        'operator' => '==',
                        'value' => 'image',
                      ),
                    ),
                    1 => 
                    array (
                      0 => 
                      array (
                        'field' => 'field_57040275d4f97',
                        'operator' => '==',
                        'value' => 'imageWithOverlay',
                      ),
                    ),
                  ),
                  'wrapper' => 
                  array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'return_format' => 'id',
                  'preview_size' => 'medium',
                  'library' => 'all',
                  'min_width' => '',
                  'min_height' => '',
                  'min_size' => '',
                  'max_width' => '',
                  'max_height' => '',
                  'max_size' => '',
                  'mime_types' => '',
                ),
                2 => 
                array (
                  'key' => 'field_5704032ed4f99',
                  'label' => 'Content',
                  'name' => 'content',
                  'type' => 'wysiwyg',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 
                  array (
                    0 => 
                    array (
                      0 => 
                      array (
                        'field' => 'field_57040275d4f97',
                        'operator' => '==',
                        'value' => 'wysiwyg',
                      ),
                    ),
                    1 => 
                    array (
                      0 => 
                      array (
                        'field' => 'field_57040275d4f97',
                        'operator' => '==',
                        'value' => 'imageWithOverlay',
                      ),
                    ),
                  ),
                  'wrapper' => 
                  array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'tabs' => 'all',
                  'toolbar' => 'full',
                  'media_upload' => 1,
                ),
              ),
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        1 => 
        array (
          'key' => '57040730eaf00',
          'name' => 'two_columns',
          'label' => 'Two Columns',
          'display' => 'block',
          'sub_fields' => 
          array (
            0 => 
            array (
              'key' => 'field_57040731eaf01',
              'label' => 'Full Width or Standard Width',
              'name' => 'full_or_standard',
              'type' => 'select',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => 
              array (
                'standard' => 'Standard Width',
                'full' => 'Full Width',
              ),
              'default_value' => 
              array (
              ),
              'multiple' => 0,
              'allow_null' => 0,
              'ui' => 0,
              'ajax' => 0,
              'placeholder' => '',
              'disabled' => 0,
              'readonly' => 0,
            ),
            1 => 
            array (
              'key' => 'field_57222ed2a0523',
              'label' => 'Constrain Inner Content?',
              'name' => 'constrain_inner_content',
              'type' => 'radio',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => 
              array (
                'yes' => 'Yes',
                'no' => 'No',
              ),
              'other_choice' => 0,
              'save_other_choice' => 0,
              'default_value' => '',
              'layout' => 'vertical',
            ),
            2 => 
            array (
              'key' => 'field_572387c84692b',
              'label' => 'Add Content Above Columns?',
              'name' => 'add_content_above_columns',
              'type' => 'true_false',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'message' => '',
              'default_value' => 0,
            ),
            3 => 
            array (
              'key' => 'field_57222f4fa0527',
              'label' => 'Content Above Columns',
              'name' => 'content_above_columns',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 
              array (
                0 => 
                array (
                  0 => 
                  array (
                    'field' => 'field_572387c84692b',
                    'operator' => '==',
                    'value' => '1',
                  ),
                ),
              ),
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'full',
              'media_upload' => 1,
            ),
            4 => 
            array (
              'key' => 'field_57040731eaf04',
              'label' => 'Additional Classes',
              'name' => 'additional_classes',
              'type' => 'checkbox',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => 
              array (
                'collapse' => 'Collapse',
                'text-center' => 'Centered Text',
                'blackbg' => 'Black Background',
                'sans' => 'Sans Serif Text',
                'nopad' => 'No Padding',
              ),
              'default_value' => 
              array (
              ),
              'layout' => 'vertical',
              'toggle' => 0,
            ),
            5 => 
            array (
              'key' => 'field_57040731eaf09',
              'label' => 'Two Column Layout',
              'name' => 'column_layout',
              'type' => 'select',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => 
              array (
                'six$six' => '1/2-1/2',
                'four$eight' => '1/3-2/3',
                'eight$four' => '2/3-1/3',
                'three$nine' => '1/4-3/4',
                'nine$three' => '3/4-1/4',
              ),
              'default_value' => 
              array (
              ),
              'multiple' => 0,
              'allow_null' => 0,
              'ui' => 0,
              'ajax' => 0,
              'placeholder' => '',
              'disabled' => 0,
              'readonly' => 0,
            ),
            6 => 
            array (
              'key' => 'field_5704084feaf35',
              'label' => 'Columns',
              'name' => 'columns',
              'type' => 'repeater',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'collapsed' => '',
              'min' => 2,
              'max' => 2,
              'layout' => 'block',
              'button_label' => 'Add Row',
              'sub_fields' => 
              array (
                0 => 
                array (
                  'key' => 'field_57040731eaf08',
                  'label' => 'Image or Wysiwyg',
                  'name' => 'image_or_wysiwyg',
                  'type' => 'radio',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => 
                  array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'choices' => 
                  array (
                    'image' => 'Image',
                    'wysiwyg' => 'WYSIWYG',
                    'imageWithOverlay' => 'Image with Overlay',
                  ),
                  'other_choice' => 0,
                  'save_other_choice' => 0,
                  'default_value' => '',
                  'layout' => 'vertical',
                ),
                1 => 
                array (
                  'key' => 'field_57040731eaf0c',
                  'label' => 'Content',
                  'name' => 'content',
                  'type' => 'wysiwyg',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 
                  array (
                    0 => 
                    array (
                      0 => 
                      array (
                        'field' => 'field_57040731eaf08',
                        'operator' => '==',
                        'value' => 'wysiwyg',
                      ),
                    ),
                    1 => 
                    array (
                      0 => 
                      array (
                        'field' => 'field_57040731eaf08',
                        'operator' => '==',
                        'value' => 'imageWithOverlay',
                      ),
                    ),
                  ),
                  'wrapper' => 
                  array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'tabs' => 'all',
                  'toolbar' => 'full',
                  'media_upload' => 1,
                ),
                2 => 
                array (
                  'key' => 'field_57040731eaf0a',
                  'label' => 'Image',
                  'name' => 'image',
                  'type' => 'image',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 
                  array (
                    0 => 
                    array (
                      0 => 
                      array (
                        'field' => 'field_57040731eaf08',
                        'operator' => '==',
                        'value' => 'image',
                      ),
                    ),
                    1 => 
                    array (
                      0 => 
                      array (
                        'field' => 'field_57040731eaf08',
                        'operator' => '==',
                        'value' => 'imageWithOverlay',
                      ),
                    ),
                  ),
                  'wrapper' => 
                  array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'return_format' => 'id',
                  'preview_size' => 'medium',
                  'library' => 'all',
                  'min_width' => '',
                  'min_height' => '',
                  'min_size' => '',
                  'max_width' => '',
                  'max_height' => '',
                  'max_size' => '',
                  'mime_types' => '',
                ),
              ),
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        2 => 
        array (
          'key' => '570408c2eaf36',
          'name' => 'three_columns',
          'label' => 'Three Columns',
          'display' => 'block',
          'sub_fields' => 
          array (
            0 => 
            array (
              'key' => 'field_570408c2eaf37',
              'label' => 'Full Width or Standard Width',
              'name' => 'full_or_standard',
              'type' => 'select',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => 
              array (
                'standard' => 'Standard Width',
                'full' => 'Full Width',
              ),
              'default_value' => 
              array (
              ),
              'multiple' => 0,
              'allow_null' => 0,
              'ui' => 0,
              'ajax' => 0,
              'placeholder' => '',
              'disabled' => 0,
              'readonly' => 0,
            ),
            1 => 
            array (
              'key' => 'field_57222ef9a0524',
              'label' => 'Constrain Inner Content?',
              'name' => 'constrain_inner_content',
              'type' => 'radio',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => 
              array (
                'yes' => 'Yes',
                'no' => 'No',
              ),
              'other_choice' => 0,
              'save_other_choice' => 0,
              'default_value' => '',
              'layout' => 'vertical',
            ),
            2 => 
            array (
              'key' => 'field_572387e54692c',
              'label' => 'Add Content Above Columns?',
              'name' => 'add_content_above_columns',
              'type' => 'true_false',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'message' => '',
              'default_value' => 0,
            ),
            3 => 
            array (
              'key' => 'field_57222f5ca0528',
              'label' => 'Content Above Columns',
              'name' => 'content_above_columns',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 
              array (
                0 => 
                array (
                  0 => 
                  array (
                    'field' => 'field_572387e54692c',
                    'operator' => '==',
                    'value' => '1',
                  ),
                ),
              ),
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'full',
              'media_upload' => 1,
            ),
            4 => 
            array (
              'key' => 'field_570408c2eaf38',
              'label' => 'Additional Classes',
              'name' => 'additional_classes',
              'type' => 'checkbox',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => 
              array (
                'collapse' => 'Collapse',
                'text-center' => 'Centered Text',
                'blackbg' => 'Black Background',
                'sans' => 'Sans Serif Text',
                'nopad' => 'No Padding',
              ),
              'default_value' => 
              array (
              ),
              'layout' => 'vertical',
              'toggle' => 0,
            ),
            5 => 
            array (
              'key' => 'field_570408c2eaf3a',
              'label' => 'Three Column Layout',
              'name' => 'column_layout',
              'type' => 'select',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => 
              array (
                'four$four$four' => '1/3-1/3-1/3',
                'three$six$three' => '1/4-1/2-1/4',
                'three$three$six' => '1/4-1/4-2/4',
                'eight$three$three' => '1/2-1/4-1/4',
              ),
              'default_value' => 
              array (
              ),
              'multiple' => 0,
              'allow_null' => 0,
              'ui' => 0,
              'ajax' => 0,
              'placeholder' => '',
              'disabled' => 0,
              'readonly' => 0,
            ),
            6 => 
            array (
              'key' => 'field_570408c2eaf3b',
              'label' => 'Columns',
              'name' => 'columns',
              'type' => 'repeater',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'collapsed' => '',
              'min' => 3,
              'max' => 3,
              'layout' => 'block',
              'button_label' => 'Add Row',
              'sub_fields' => 
              array (
                0 => 
                array (
                  'key' => 'field_570408c2eaf3c',
                  'label' => 'Image or Wysiwyg',
                  'name' => 'image_or_wysiwyg',
                  'type' => 'radio',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => 
                  array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'choices' => 
                  array (
                    'image' => 'Image',
                    'wysiwyg' => 'WYSIWYG',
                    'imageWithOverlay' => 'Image with Overlay',
                  ),
                  'other_choice' => 0,
                  'save_other_choice' => 0,
                  'default_value' => '',
                  'layout' => 'vertical',
                ),
                1 => 
                array (
                  'key' => 'field_570408c2eaf3d',
                  'label' => 'Content',
                  'name' => 'content',
                  'type' => 'wysiwyg',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 
                  array (
                    0 => 
                    array (
                      0 => 
                      array (
                        'field' => 'field_570408c2eaf3c',
                        'operator' => '==',
                        'value' => 'wysiwyg',
                      ),
                    ),
                    1 => 
                    array (
                      0 => 
                      array (
                        'field' => 'field_570408c2eaf3c',
                        'operator' => '==',
                        'value' => 'imageWithOverlay',
                      ),
                    ),
                  ),
                  'wrapper' => 
                  array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'tabs' => 'all',
                  'toolbar' => 'full',
                  'media_upload' => 1,
                ),
                2 => 
                array (
                  'key' => 'field_570408c2eaf3e',
                  'label' => 'Image',
                  'name' => 'image',
                  'type' => 'image',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 
                  array (
                    0 => 
                    array (
                      0 => 
                      array (
                        'field' => 'field_570408c2eaf3c',
                        'operator' => '==',
                        'value' => 'image',
                      ),
                    ),
                    1 => 
                    array (
                      0 => 
                      array (
                        'field' => 'field_570408c2eaf3c',
                        'operator' => '==',
                        'value' => 'imageWithOverlay',
                      ),
                    ),
                  ),
                  'wrapper' => 
                  array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'return_format' => 'id',
                  'preview_size' => 'medium',
                  'library' => 'all',
                  'min_width' => '',
                  'min_height' => '',
                  'min_size' => '',
                  'max_width' => '',
                  'max_height' => '',
                  'max_size' => '',
                  'mime_types' => '',
                ),
              ),
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        3 => 
        array (
          'key' => '570408deeaf3f',
          'name' => 'four_columns',
          'label' => 'Four Columns',
          'display' => 'block',
          'sub_fields' => 
          array (
            0 => 
            array (
              'key' => 'field_570408deeaf40',
              'label' => 'Full Width or Standard Width',
              'name' => 'full_or_standard',
              'type' => 'select',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => 
              array (
                'standard' => 'Standard Width',
                'full' => 'Full Width',
              ),
              'default_value' => 
              array (
              ),
              'multiple' => 0,
              'allow_null' => 0,
              'ui' => 0,
              'ajax' => 0,
              'placeholder' => '',
              'disabled' => 0,
              'readonly' => 0,
            ),
            1 => 
            array (
              'key' => 'field_57222f31a0526',
              'label' => 'Constrain Inner Content?',
              'name' => 'constrain_inner_content',
              'type' => 'radio',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => 
              array (
                'yes' => 'Yes',
                'no' => 'No',
              ),
              'other_choice' => 0,
              'save_other_choice' => 0,
              'default_value' => '',
              'layout' => 'vertical',
            ),
            2 => 
            array (
              'key' => 'field_572387fe4692d',
              'label' => 'Add Content Above Columns?',
              'name' => 'add_content_above_columns',
              'type' => 'true_false',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'message' => '',
              'default_value' => 0,
            ),
            3 => 
            array (
              'key' => 'field_57222f6ca0529',
              'label' => 'Content Above Columns',
              'name' => 'content_above_columns',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 
              array (
                0 => 
                array (
                  0 => 
                  array (
                    'field' => 'field_572387fe4692d',
                    'operator' => '==',
                    'value' => '1',
                  ),
                ),
              ),
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'full',
              'media_upload' => 1,
            ),
            4 => 
            array (
              'key' => 'field_570408deeaf41',
              'label' => 'Additional Classes',
              'name' => 'additional_classes',
              'type' => 'checkbox',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => 
              array (
                'collapse' => 'Collapse',
                'text-center' => 'Centered Text',
                'blackbg' => 'Black Background',
                'sans' => 'Sans Serif Text',
                'nopad' => 'No Padding',
              ),
              'default_value' => 
              array (
              ),
              'layout' => 'vertical',
              'toggle' => 0,
            ),
            5 => 
            array (
              'key' => 'field_570408deeaf43',
              'label' => 'Columns',
              'name' => 'columns',
              'type' => 'repeater',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => 
              array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'collapsed' => '',
              'min' => 4,
              'max' => 4,
              'layout' => 'row',
              'button_label' => 'Add Row',
              'sub_fields' => 
              array (
                0 => 
                array (
                  'key' => 'field_570408dfeaf44',
                  'label' => 'Image or Wysiwyg',
                  'name' => 'image_or_wysiwyg',
                  'type' => 'radio',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => 
                  array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'choices' => 
                  array (
                    'image' => 'Image',
                    'wysiwyg' => 'WYSIWYG',
                    'imageWithOverlay' => 'Image with Overlay',
                  ),
                  'other_choice' => 0,
                  'save_other_choice' => 0,
                  'default_value' => '',
                  'layout' => 'vertical',
                ),
                1 => 
                array (
                  'key' => 'field_570408dfeaf45',
                  'label' => 'Content',
                  'name' => 'content',
                  'type' => 'wysiwyg',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 
                  array (
                    0 => 
                    array (
                      0 => 
                      array (
                        'field' => 'field_570408dfeaf44',
                        'operator' => '==',
                        'value' => 'wysiwyg',
                      ),
                    ),
                    1 => 
                    array (
                      0 => 
                      array (
                        'field' => 'field_570408dfeaf44',
                        'operator' => '==',
                        'value' => 'imageWithOverlay',
                      ),
                    ),
                  ),
                  'wrapper' => 
                  array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'tabs' => 'all',
                  'toolbar' => 'full',
                  'media_upload' => 1,
                ),
                2 => 
                array (
                  'key' => 'field_570408dfeaf46',
                  'label' => 'Image',
                  'name' => 'image',
                  'type' => 'image',
                  'instructions' => '',
                  'required' => 0,
                  'conditional_logic' => 
                  array (
                    0 => 
                    array (
                      0 => 
                      array (
                        'field' => 'field_570408dfeaf44',
                        'operator' => '==',
                        'value' => 'image',
                      ),
                    ),
                    1 => 
                    array (
                      0 => 
                      array (
                        'field' => 'field_570408dfeaf44',
                        'operator' => '==',
                        'value' => 'imageWithOverlay',
                      ),
                    ),
                  ),
                  'wrapper' => 
                  array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'return_format' => 'id',
                  'preview_size' => 'medium',
                  'library' => 'all',
                  'min_width' => '',
                  'min_height' => '',
                  'min_size' => '',
                  'max_width' => '',
                  'max_height' => '',
                  'max_size' => '',
                  'mime_types' => '',
                ),
              ),
            ),
          ),
          'min' => '',
          'max' => '',
        ),
      ),
    ),
  ),
  'location' => 
  array (
    0 => 
    array (
      0 => 
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-flexible-content.php',
      ),
    ),
    1 => 
    array (
      0 => 
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-home.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'acf_after_title',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => 
  array (
    0 => 'the_content',
  ),
  'active' => 1,
  'description' => '',
);