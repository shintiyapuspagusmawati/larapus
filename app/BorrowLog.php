<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowLog extends Model
{
    //
    protected $casts = [
        'is_returned' => 'boolean',
    ];
    protected $fillable = ['book_id', 'user_id', 'is_returned'];

    public function book()
    {
    	return $this->belongsTo('App\Book');
	}

	public function user()
    {
    	return $this->belongsTo('App\User');
	}

    public function ScopeReturned($query)
    {
        return $query->where('is_returned', 1);
    }

    public function ScopeBorrowed($query)
    {
        return $query->where('is_returned', 0);
    }
}
