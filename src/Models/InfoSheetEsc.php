<?php

namespace App\Models;

namespace Pondit\BAF\Bafform\Models;

use Pondit\BAF\Bafform\Models\Bafform;

class InfoSheetEsc extends Bafform
{
    protected $table = 'info_sheet_escs';
    protected $fillable  =   [ 
        'info_title',
        'scale_officer',
        'scale_officer_value',
        'scale_cadets',
        'scale_cadets_value',
        'scale_airmen',
        'scale_airmen_value',
        'scale_airmen_value_two',
        'scale_recruits',
        'scale_recruits_value',
        'strength_officers',
        'strength_officers_value',
        'strength_cadets',
        'strength_cadets_value',
        'strength_airmen',
        'strength_airmen_value',
        'strength_recruits',
        'strength_recruits_value',
        'yearly_rec',
        'yearly_rec_value',
        'three_yearly_rec',
        'three_yearly_rec_value',
        'avg_yr_costume',
        'avg_yr_costume_value',
        'per_stock',
        'per_stock_value',
        'dues_in',
        'dues_in_value',
        'int_qty_procure',
        'int_qty_procure_value',
        'esc_rec_qty',
        'esc_rec_qty_value',
        'note'         
    ];
}
