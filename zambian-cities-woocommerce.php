<?php
/**
 * Plugin Name: Zambian Cities for Woocommerce
 * Plugin URI: https://zykarsolutions.com
 * Author: Zykar Solutions
 * Author URI: https://zykarsolutions.com
 * Description: Add shipping zones 3 levels deep for WooCommerce.
 * Version: 0.1.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
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
        // Ndola District
        'ZM01' => array(
            'city'     => 'Ndola',
            'division' => 'Copperbelt',
        ),
        // Kitwe District
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
        'ZM02K8' => array(
            'city'     => 'Kitwe',
            'division' => 'Riverside',
        ),
        'ZM02K9' => array(
            'city'     => 'Kitwe',
            'division' => 'Kwacha',
        ),
        'ZM02K10' => array(
            'city'     => 'Kitwe',
            'division' => 'Industrial Area',
        ),
        'ZM02K11' => array(
            'city'     => 'Kitwe',
            'division' => 'Buyantanshi',
        ),
        'ZM02K12' => array(
            'city'     => 'Kitwe',
            'division' => 'Mufuchani',
        ),
        'ZM02K13' => array(
            'city'     => 'Kitwe',
            'division' => 'Garneton',
        ),
        'ZM02K14' => array(
            'city'     => 'Kitwe',
            'division' => 'Presidential',
        ),
        'ZM02K15' => array(
            'city'     => 'Kitwe',
            'division' => 'Nkana Stadium',
        ),
        'ZM02K16' => array(
            'city'     => 'Kitwe',
            'division' => 'Ndeke',
        ),
        'ZM02K17' => array(
            'city'     => 'Kitwe',
            'division' => 'Chimwemwe',
        ),
        'ZM02K18' => array(
            'city'     => 'Kitwe',
            'division' => 'Zamtan',
        ),
        'ZM02K19' => array(
            'city'     => 'Kitwe',
            'division' => 'Kitwe West',
        ),
        'ZM02K20' => array(
            'city'     => 'Kitwe',
            'division' => 'ST. Marceline',
        ),
        // Copperbelt Province
        'ZM03' => array(
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
         // Eastern Province
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
         // Luapula Province
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
        'ZM24' => array(
            'city'      =>  'Mwense',
            'division'  =>  'Luapula'
        ),
         // Lusaka Province
        'ZM25' => array(
            'city'      =>  'Chilanga',
            'division'  =>  'Lusaka'
        ),
        'ZM26' => array(
            'city'      =>  'Kafue',
            'division'  =>  'Lusaka'
        ),
        'ZM27' => array(
            'city'      =>  'Chongwe',
            'division'  =>  'Lusaka'
        ),
        'ZM28' => array(
            'city'      =>  'Luangwa',
            'division'  =>  'Lusaka'
        ),
        'ZM29' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Lusaka'
        ),
         // Lusaka Distict Division (Townships)
        'ZM29L1' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Town'
        ),
        'ZM29L2' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Mass Media'
        ),
        'ZM29L3' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Long Acres'
        ),
        'ZM29L4' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Emmasdale'
        ),
        'ZM29L5' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Garden'
        ),
        'ZM29L6' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Rhodes Park'
        ),
        'ZM29L7' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'NorthMead'
        ),
        'ZM29L8' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'East Park'
        ),
        'ZM29L9' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Manda Hill'
        ),
        'ZM29L10' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Arcades'
        ),
        'ZM29L11' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'UNZA'
        ),
        'ZM29L12' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Olmpyia'
        ),
        'ZM29L13' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Roma'
        ),
        'ZM29L14' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Kalundu'
        ),
        'ZM29L15' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Nipa'
        ),
        'ZM29L16' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Levy Junction'
        ),
        'ZM29L17' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Chadleigh'
        ),
        'ZM29L18' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Phi'
        ),
        'ZM29L19' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Munali'
        ),
        'ZM29L20' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Downtown'
        ),
        'ZM29L21' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Chainama'
        ),
        'ZM29L22' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Kaunda Square'
        ),
        'ZM29L23' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Kalingalinga'
        ),
        'ZM29L24' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Ngombe'
        ),
        'ZM29L25' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Jesmondine'
        ),
        'ZM29L26' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Woodlands'
        ),
        'ZM29L27' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Nymba Yanga'
        ),
        'ZM29L28' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Kabulonga'
        ),
        'ZM29L29' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Libala South'
        ),
        'ZM29L30' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Chilenje'
        ),
        'ZM29L31' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Matero'
        ),
        'ZM29L32' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Chamba Valley'
        ),
        'ZM29L33' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Salama Park'
        ),
        'ZM29L34' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Ibex Hill'
        ),
        'ZM29L35' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Kabanana'
        ),
        'ZM29L36' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Mtendere'
        ),
        'ZM29L37' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Apex Chalala'
        ),
        'ZM29L38' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Avondale'
        ),
        'ZM29L39' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Bauleni'
        ),
        'ZM29L40' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Heros Stadium'
        ),
        'ZM29L41' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Chelston'
        ),
        'ZM29L42' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Obama'
        ),
        'ZM29L43' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Meanwood Ibex'
        ),
        'ZM29L44' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Lilayi'
        ),
        'ZM29L45' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'New Kasama'
        ),
        'ZM29L46' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Garden House'
        ),
        'ZM29L47' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Industrial Area'
        ),
        'ZM29L48' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Mutumbi'
        ),
        'ZM29L49' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Waterfalls'
        ),
        'ZM29L50' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Makeni'
        ),
        'ZM29L51' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Garden City'
        ),
        'ZM29L52' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Lusaka West'
        ),
        'ZM29L53' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Silverest'
        ),
        'ZM29L54' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Airport'
        ),
        'ZM29L55' => array(
            'city'      =>  'Lusaka',
            'division'  =>  'Meanwood Ndeke'
        ),
        'ZM29L56' => array(
            'city'      =>  'Lusaka',
            'division'  =>  '10 Miles'
        ),
         // Muchinga Province
        'ZM30' => array(
            'city'      =>  'Mpika',
            'division'  =>  'Muchinga'
        ),
        'ZM31' => array(
            'city'      =>  'Nakonde',
            'division'  =>  'Muchinga'
        ),
        'ZM32' => array(
            'city'      =>  'Chinsali',
            'division'  =>  'Muchinga'
        ),
        'ZM33' => array(
            'city'      =>  'Isoka',
            'division'  =>  'Muchinga'
        ),
         // North-Western Province
        'ZM35' => array(
            'city'      =>  'Solwezi',
            'division'  =>  'North-Western'
        ),
        'ZM36' => array(
            'city'      =>  'Mwinilunga',
            'division'  =>  'North-Western'
        ),
        'ZM37' => array(
            'city'      =>  'Kalumbila',
            'division'  =>  'North-Western'
        ),
         // Northern Province
        'ZM38' => array(
            'city'      =>  'Kasama',
            'division'  =>  'Northern'
        ),
        'ZM39' => array(
            'city'      =>  'Mbala',
            'division'  =>  'Northern'
        ),
         // Southern Province
        'ZM40' => array(
            'city'      =>  'Livingstone',
            'division'  =>  'Southern'
        ),
        'ZM41' => array(
            'city'      =>  'Mazabuka',
            'division'  =>  'Southern'
        ),
        'ZM42' => array(
            'city'      =>  'Choma',
            'division'  =>  'Southern'
        ),
        'ZM43' => array(
            'city'      =>  'Chirundu',
            'division'  =>  'Southern'
        ),
        'ZM44' => array(
            'city'      =>  'Kalomo',
            'division'  =>  'Southern'
        ),
         // Western Province
        'ZM45' => array(
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