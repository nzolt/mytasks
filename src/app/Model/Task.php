<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $table = 'tasks';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = true;
    protected $connection = 'mysql';
    protected $fillable = [
        'title',
        'date',
        'description',
        'completed',
    ];

    public function save(array $options = [])
    {
        if (!$this->id){
            $this->id = (string)Uuid::uuid1();
        }
        return parent::save($options);
    }
}
