<?php namespace todoparrot;

// slug
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model implements SluggableInterface
{

    use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'name',
        'save_to' => 'slug',
    );


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


    public function tasks()
    {
        return $this->hasMany('todoparrot\Task');
    }

}
