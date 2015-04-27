<?php namespace todoparrot;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{

    protected $fillable = ['name', 'description'];

    private $rules = [
        'name' => 'required',
        'description' => 'required'
    ];


    public function validate()
    {

        $v = \Validator::make($this->attributes, $this->rules);
        if ($v->passes()) return true;
        $this->errors = $v->messages();
        return false;

    }

}
