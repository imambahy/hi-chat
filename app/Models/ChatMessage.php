<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];
    protected $hidden = ['deleted_in_id', 'seen_in_id'];

    // from_id relation
    public function from(){
        return $this->belongsTo(User::class, 'from_id'); //from_id is a foreign key
    }

    public function to(){
        return $this->morphTo(); //morphTo cause it's flexible. it can be a relation to User or ChatGroup
    }

    /**
     * Bootstrap the model and its traits.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('default_sort', function (Builder $builder){
            $builder->orderBy('sort_id');
        });

        // set value to sort_id cause it's not an auto increment, so it must to call the last index using max() method
        static::creating(function ($model){
            $model->sort_id = static::max('sort_id') + 1;
            $model->seen_in_id = json_encode([['id' => auth()->id(), 'seen_at' => now()]]);
        });
    }
}
