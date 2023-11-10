<?php

namespace Admingate\Slug\Models;

use Admingate\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Slug extends BaseModel
{
    protected $table = 'slugs';

    protected $fillable = [
        'key',
        'reference_type',
        'reference_id',
        'prefix',
    ];

    public function reference(): BelongsTo
    {
        return $this->morphTo();
    }
}
