<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    
    protected $table = 'invoices';

    protected $fillable = ['user_id', 'campaign_id', 'upsell_id', 'offer_id', 'invoiced_to', 'pay_to', 'total_sub_amount', 'total_amount', 'currency', 'status'];  
    
}
