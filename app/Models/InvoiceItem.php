<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;
    
    protected $table = 'invoice_items';

    protected $fillable = ['domain_name', 'domain_price', 'service_name', 'service_category', 'domain_register_type', 'domain_quantity', 'dnsmanagement', 'idprotection', 'emailforwarding', 'invoice_id', 'reg_time_perod', 'enum_order_id', 'enum_total_charged', 'enum_registry_create_date', 'enum_registry_exp_date', 'enum_order_status', 'enum_tracking_key', 'enum_server', 'invoice_type'];
}
