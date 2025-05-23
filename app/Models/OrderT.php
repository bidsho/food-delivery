<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderT extends Model
{
    protected $table = "order_t";

    protected $fillable = [
        'user_id',
        'menu_id',
        'quantity',
        'status',
        'phone',
        'total_price',
        'payment_reference'
    ];

    public function menu()
    {
        return $this->belongsTo(Menus::class, 'menu_id'); // Ensure the correct class name
    }
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
