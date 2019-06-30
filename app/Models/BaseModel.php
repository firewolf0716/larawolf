<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{
    // use SoftDeletes;
    
    protected $guarded = array('id');
    protected $primaryKey = 'id';

    protected $_title = [];
    protected $_validates = [];
    protected $_fields = [];
    protected $_actions = [];
    protected $_columns = [];

    public function getById($id)
    {
        return static::where(static::$primaryKey, $id)->find(1);
    }

    public function getTitle()
    {
        return $this->_title;
    }

    public function getValidateRules()
    {
        return $this->_validates;
    }

    public function getFields()
    {
        return $this->_fields;
    }

    public function getActions()
    {
        return $this->_actions;
    }

    public function getColumns()
    {
        return $this->_columns;
    }


}
