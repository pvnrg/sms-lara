<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */
    'discount_value' => 20,

    'party_type' => [
        'person'=>'Person',
        'organisation'=>'Organisation'
    ],

    'property_type' => [
        'Residential'=>'Residential',
        'School'=>'School',
        'Commercial'=>'Commercial',
        'Factory'=>'Factory',
        'Suite'=>'Suite',
        'Tenancy'=>'Tenancy',
        'Shop'=>'Shop',
        'Ummetered Supply'=>'Ummetered Supply',
        'Builder Supply Pole'=>'Builder Supply Pole',
        'Builder Supply in Permanent Position' => 'Builder Supply in Permanent Position'        
        
    ],

    'premise_type' => [
        'Commercial' => 'Commercial',
        'Residential'=> 'Residential',
        'Unmetered Supply' => 'Unmetered Supply',
        'Builders Supply Pole' => 'Builders Supply Pole',
        'Builders Supply in the permanent position'=> 'Builders Supply in the permanent position' 

    ],

    'capacity' =>   [
        'phase_a' => 'Capacity Phase A',
        'phase_b' => 'Capacity Phase B',
        'phase_c' => 'Capacity Phase C'
    ],

    'battery_type' =>  [
        'lead_acid' => 'Lead Acid',
        'lithium_ion' => 'Lithium Ion',
        'flow' => 'Flow',
        'salt_water'=>'Salt Water'
    ],

    'type' =>  [
        'panel' => 'Panel',
        'solar_inverter' => 'Solar Inverter',
        'battery_inverter' => 'Battery Inverter',
        'battery' => 'Battery'
    ],

    'electrical_distributer' =>  [
        'Citipower' => 'Citipower',
        'Powercor' => 'Powercor',
        'Jemena' => 'Jemena',
        'SP Ausnet' => 'SP Ausnet',
        'United Energy' => 'United Energy',
        'TAS Network' => 'TAS Network',
        'Aurora' => 'Aurora'
    ],
    
    'connection_type' => [
        'Alteration' => 'Alteration',
        'New' => 'New',
        'Overhead'=> 'Overhead',
        'Embedded Network' => 'Embedded Network'  
    ],

    'supply_required' => [ 
        'Overhead' => 'Overhead', 
        'Underground' => 'Underground', 
        'Pole to Pit' => 'Pole to Pit' ,
        'URD' => 'URD' , 
        'Substation' => 'Substation'
    ],

    'no_of_stc' => [
        '1 Year'=>'1 Year',
        '5 Year'=>'5 Year',
        '13 Year' => '13 Year'
    ],

    // Installation Type in Party table
    'inverter_service' => [
        'New'=>'New',
        'Alteration'=>'Alteration',
        'Abolishment'=>'Abolishment'
    ],

    'electricity_supply' =>[
        'New'=> 'New',
        'Alteration'=>'Alteration'
    ],

    'customer_status' => [
        0 =>'Lead',
        2 =>'Prospect',
        1 =>'Customer',
        3 =>'Lost' 
    ],

    //Party status 
    'status' => [
        0 => 'CRM',  // Our Website
        1 => 'API',  // get-party crone job
        2 => 'Website', // Wordpress Contact form
        3 => 'Device', // Mobile Api
    ],

    'seperate_inverter' => [
        'Yes'=>'Yes',
        'No'=>'No',
        'No Storage System'=>'No Storage System'
    ],

];
