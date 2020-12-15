<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmployeeNote
 * @package App\Models
 * @mixin Builder
 */
class EmployeeNote extends Model
{
    use SoftDeletes;

    /** @var string  */
    protected $connection = 'mysql';

    /** @var string  */
    protected $table = 'employee_notes';

    /** @var string[]  */
    protected $guarded = ['id'];

    /**
     * @return BelongsTo
     */
    public function employee() : BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    /**
     * @return BelongsTo
     */
    public function agent() : BelongsTo
    {
        return $this->belongsTo(User::class, 'agent_id');
    }
}
