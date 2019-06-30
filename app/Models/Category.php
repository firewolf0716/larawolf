<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends BaseModel
{
	protected $table = 'categories';	

    protected $fillable = [
        'name', 'description', 'url',
    ];

	protected $_title = [
        'singular_name' => 'Category',
        'double_name' => 'Categories',
        'slug' => 'category'
    ];

    protected $_validates = [
        'name' => 'required',
        'description' => 'required',
        'url' => 'required'
    ];

	protected $_fields = [
        [
            'name' => 'name', // DB field name, and form field name
            'label' => "Category Name",
            'type' => 'text',
            'attributes' => [
               'placeholder' => 'Input category name',
               'id' => 'category_name'
            ], 
        ],
        [   
            'name' => 'description',
            'label' => 'Description',
            'type' => 'textarea',
            'attributes' => [
               'id' => 'description'
            ], 
        ],
        [
            'name' => 'url',
            'label' => "URL",
            'type' => 'text',
            'attributes' => [
               'placeholder' => 'Input url',
               'id' => 'url'
            ], 
        ],
    ];

    protected $_actions = [
        [
            'action' => 'save',
            'label' => 'Save',
            'class' => 'btn-success'
        ],
        [
            'action' => 'show',
            'label' => 'Show',
            'class' => 'btn-info'
        ],
        [
            'action' => 'edit',
            'label' => 'Edit',
            'class' => 'btn-primary'
        ],
        [
            'action' => 'delete',
            'label' => 'Delete',
            'class' => 'btn-danger confirm'
        ],
    ];

    protected $_columns = [
        [
            'name' => 'id', 
            'label' => "Category ID",
            'type' => 'text',
        ],
        [
            'name' => 'name', // DB field name, and form field name
            'label' => "Category Name",
            'type' => 'text',
        ],
        [   
            'name' => 'description',
            'label' => 'Description',
            'type' => 'textarea',
        ],
        [
            'name' => 'url',
            'label' => "Category URL",
            'type' => 'text',
        ],
    ];

}
