<?php
/**
 * Plugin Name: Zambian Cities for Woocommerce
 * Plugin URI: https://zykarsolutions.com
 * Author: Zykar Solutions
 * Author URI: https://zykarsolutions.com
 * Description: Add shipping zones 3 levels deep for WooCommerce.
 * Version: 0.1.1
 * License: GPL2
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: 2lsw
*/

// add plugin basic security
defined('ABSPATH') or die;

add_filter('woocommerce_states','zykarsolutions_3ld_states');

function zykarsolutions_3ld_states( $states) {

    $map = array();

    $cities = array(
        // Ndola City & Townships
        'ZM01' => array(
            'city'     => 'Ndola',
            'division' => 'Copperbelt',
        ),
        // Kitwe City & Townships
        'ZM02' => array(
            'city'     => 'Kitwe',
            'division' => 'Copperbelt',
        ),
        'ZM02K1' => array(
            'city'     => 'Kitwe',
            'division' => 'Town',
        ),
        'ZM02K2' => array(
            'city'     => 'Kitwe',
            'division' => 'Nkana East',
        ),
        'ZM02K3' => array(
            'city'     => 'Kitwe',
            'division' => 'Parklands',
        ),
        'ZM02K4' => array(
            'city'     => 'Kitwe',
            'division' => 'Nkana West',
        ),
        'ZM02K5' => array(
            'city'     => 'Kitwe',
            'division' => 'Chisokone',
        ),
        'ZM02K6' => array(
            'city'     => 'Kitwe',
            'division' => 'Mwaiseni',
        ),
        'ZM02K7' => array(
            'city'     => 'Kitwe',
            'division' => 'CBU',
        ),
        // Copperbelt Province
        'ZM0301' => array(
            'city'     => 'Chingola',
            'division' => 'Copperbelt',
        ),
        'ZM04' => array(
            'city'     => 'Mufulira',
            'division' => 'Copperbelt',
        ),
        'ZM05' => array(
            'city'     => 'Luanshya',
            'division' => 'Copperbelt',
        ),
        'ZM06' => array(
            'city'     => 'Kalulushi',
            'division' => 'Copperbelt',
        ),
        'ZM07' => array(
            'city'     => 'Chililabombwe',
            'division' => 'Copperbelt',
        ),
        'ZM07C1' => array(
            'city'     => 'Chililabombwe',
            'division' => 'Kasumbalesa',
        ),
        'ZM08' => array(
            'city'     => 'Chambeshi',
            'division' => 'Copperbelt',
        ),
        'ZM09' => array(
            'city'     => 'Lufwanyama',
            'division' => 'Copperbelt',
        ),
        'ZM10' => array(
            'city'     => 'Masaiti',
            'division' => 'Copperbelt',
        ),
        // Central Province
        'ZM11' => array(
            'city'      =>  'Kabwe',
            'division'  =>  'Central'
        ),
        'ZM12' => array(
            'city'      =>  'Kapiri',
            'division'  =>  'Central'
        ), 
         'ZM13' => array(
            'city'      =>  'Chibombo',
            'division'  =>  'Central'
        ),
        'ZM14' => array(
            'city'      =>  'Serenje',
            'division'  =>  'Central'
        ),
        'ZM15' => array(
            'city'      =>  'Mkushi',
            'division'  =>  'Central'
        ),
        'ZM16' => array(
            'city'      =>  'Chipata',
            'division'  =>  'Eastern'
        ),
        'ZM17' => array(
            'city'      =>  'Chadiza',
            'division'  =>  'Eastern'
        ),
        'ZM18' => array(
            'city'      =>  'Petauke',
            'division'  =>  'Eastern'
        ),
        'ZM19' => array(
            'city'      =>  'Lundazi',
            'division'  =>  'Eastern'
        ),
        'ZM20' => array(
            'city'      =>  'Mansa',
            'division'  =>  'Luapula'
        ),
        'ZM21' => array(
            'city'      =>  'Samfya',
            'division'  =>  'Luapula'
        ),
        'ZM22' => array(
            'city'      =>  'Chembe',
            'division'  =>  'Luapula'
        ),
        'ZM23' => array(
            'city'      =>  'Kawambwa',
            'division'  =>  'Luapula'
        ),
        'ZM23' => array(
            'city'      =>  'Mwense',
            'division'  =>  'Luapula'
        ),
        'ZM24' => array(
            'city'      =>  'Luangwa',
            'division'  =>  'Lusaka'
        ),
        'ZM25' => array(
            'city'      =>  'Kafue',
            'division'  =>  'Lusaka'
        ),
        'ZM26' => array(
            'city'      =>  'Chongwe',
            'division'  =>  'Lusaka'
        ),
        'ZM27' => array(
            'city'      =>  'Luangwa',
            'division'  =>  'Lusaka'
        ),
        'ZM24' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Lusaka'
        ),
        'ZM24L1' => array(
            'city'      =>  'Luangwa',
            'division'  =>  'Lusaka'
        ),
        'ZM25' => array(
            'city'      =>  'Mpika',
            'division'  =>  'Muchinga'
        ),
        'ZM26' => array(
            'city'      =>  'Nakonde',
            'division'  =>  'Muchinga'
        ),
        'ZM27' => array(
            'city'      =>  'Chinsali',
            'division'  =>  'Muchinga'
        ),
        'ZM28' => array(
            'city'      =>  'Isoka',
            'division'  =>  'Muchinga'
        ),
        'ZM29' => array(
            'city'      =>  'Solwezi',
            'division'  =>  'North-Western'
        ),
        'ZM30' => array(
            'city'      =>  'Mwinilunga',
            'division'  =>  'North-Western'
        ),
        'ZM31' => array(
            'city'      =>  'Kalumbila',
            'division'  =>  'North-Western'
        ),
        'ZM32' => array(
            'city'      =>  'Kasama',
            'division'  =>  'Northern'
        ),
        'ZM33' => array(
            'city'      =>  'Mbala',
            'division'  =>  'Northern'
        ),
        'ZM34' => array(
            'city'      =>  'Livingstone',
            'division'  =>  'Southern'
        ),
        'ZM34' => array(
            'city'      =>  'Mazabuka',
            'division'  =>  'Southern'
        ),
        'ZM34' => array(
            'city'      =>  'Choma',
            'division'  =>  'Southern'
        ),
        'ZM34' => array(
            'city'      =>  'Chirundu',
            'division'  =>  'Southern'
        ),
        'ZM34' => array(
            'city'      =>  'Kalomo',
            'division'  =>  'Southern'
        ),
        'ZM35' => array(
            'city'      =>  'Mongu',
            'division'  =>  'Western'
        ),
     );

     foreach ($cities as $city => $cityValue) {
        $map[$city] = $cityValue['city'] . ', '. $cityValue['division'];
     }
       
    $states['ZM'] = $map;

    return $states;
}