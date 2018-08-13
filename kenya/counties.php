<?php
/**
 * @package Halvetica Nua
 * @subpackage Functions
 * @version 1.8
 * @since 1.8
 * @author Osen Concepts < hi@osen.coke >
 * @link https://wpthemes.osen.co.ke/nua
 */
function ke_counties( $county = null ) 
{
    if( is_int( $county ) ) {
      $counties = array( 
        'BAR' => __( 'Baringo', 'woocommerce' ),
        'BMT' => __( 'Bomet', 'woocommerce' ),
        'BGM' => __( 'Bungoma', 'woocommerce' ),
        'BSA' => __( 'Busia', 'woocommerce' ),
        'EGM' => __( 'Elgeyo-Marakwet', 'woocommerce' ),
        'EBU' => __( 'Embu', 'woocommerce' ),
        'GSA' => __( 'Garissa', 'woocommerce' ),
        'HMA' => __( 'Homa Bay', 'woocommerce' ),
        'ISL' => __( 'Isiolo', 'woocommerce' ),
        'KAJ' => __( 'Kajiado', 'woocommerce' ),
        'KAK' => __( 'Kakamega', 'woocommerce' ),
        'KCO' => __( 'Kericho', 'woocommerce' ),
        'KBU' => __( 'Kiambu', 'woocommerce' ),
        'KLF' => __( 'Kilifi', 'woocommerce' ),
        'KIR' => __( 'Kirinyaga', 'woocommerce' ),
        'KSI' => __( 'Kisii', 'woocommerce' ),
        'KIS' => __( 'Kisumu', 'woocommerce' ),
        'KTU' => __( 'Kitui', 'woocommerce' ),
        'KLE' => __( 'Kwale', 'woocommerce' ),
        'LKP' => __( 'Laikipia', 'woocommerce' ),
        'LAU' => __( 'Lamu', 'woocommerce' ),
        'MCS' => __( 'Machakos', 'woocommerce' ),
        'MUE' => __( 'Makueni', 'woocommerce' ),
        'MDA' => __( 'Mandera', 'woocommerce' ),
        'MAR' => __( 'Marsabit', 'woocommerce' ),
        'MRU' => __( 'Meru', 'woocommerce' ),
        'MIG' => __( 'Migori', 'woocommerce' ),
        1 => __( 'Mombasa', 'woocommerce' ),
        'MRA' => __( 'Muranga', 'woocommerce' ),
        47 => __( 'Nairobi', 'woocommerce' ),
        'NKU' => __( 'Nakuru', 'woocommerce' ),
        'NDI' => __( 'Nandi', 'woocommerce' ),
        'NRK' => __( 'Narok', 'woocommerce' ),
        'NYI' => __( 'Nyamira', 'woocommerce' ),
        'NDR' => __( 'Nyandarua', 'woocommerce' ),
        'NER' => __( 'Nyeri', 'woocommerce' ),
        'SMB' => __( 'Samburu', 'woocommerce' ),
        'SYA' => __( 'Siaya', 'woocommerce' ),
        'TVT' => __( 'Taita Taveta', 'woocommerce' ),
        'TAN' => __( 'Tana River', 'woocommerce' ),
        'TNT' => __( 'Tharaka-Nithi', 'woocommerce' ),
        'TRN' => __( 'Trans-Nzoia', 'woocommerce' ),
        'TUR' => __( 'Turkana', 'woocommerce' ),
        'USG' => __( 'Uasin Gishu', 'woocommerce' ),
        'VHG' => __( 'Vihiga', 'woocommerce' ),
        'WJR' => __( 'Wajir', 'woocommerce' ),
        'PKT' => __( 'West Pokot', 'woocommerce' )
       );
    } else {
      $counties = array( 
        'BAR' => __( 'Baringo', 'woocommerce' ),
        'BMT' => __( 'Bomet', 'woocommerce' ),
        'BGM' => __( 'Bungoma', 'woocommerce' ),
        'BSA' => __( 'Busia', 'woocommerce' ),
        'EGM' => __( 'Elgeyo-Marakwet', 'woocommerce' ),
        'EBU' => __( 'Embu', 'woocommerce' ),
        'GSA' => __( 'Garissa', 'woocommerce' ),
        'HMA' => __( 'Homa Bay', 'woocommerce' ),
        'ISL' => __( 'Isiolo', 'woocommerce' ),
        'KAJ' => __( 'Kajiado', 'woocommerce' ),
        'KAK' => __( 'Kakamega', 'woocommerce' ),
        'KCO' => __( 'Kericho', 'woocommerce' ),
        'KBU' => __( 'Kiambu', 'woocommerce' ),
        'KLF' => __( 'Kilifi', 'woocommerce' ),
        'KIR' => __( 'Kirinyaga', 'woocommerce' ),
        'KSI' => __( 'Kisii', 'woocommerce' ),
        'KIS' => __( 'Kisumu', 'woocommerce' ),
        'KTU' => __( 'Kitui', 'woocommerce' ),
        'KLE' => __( 'Kwale', 'woocommerce' ),
        'LKP' => __( 'Laikipia', 'woocommerce' ),
        'LAU' => __( 'Lamu', 'woocommerce' ),
        'MCS' => __( 'Machakos', 'woocommerce' ),
        'MUE' => __( 'Makueni', 'woocommerce' ),
        'MDA' => __( 'Mandera', 'woocommerce' ),
        'MAR' => __( 'Marsabit', 'woocommerce' ),
        'MRU' => __( 'Meru', 'woocommerce' ),
        'MIG' => __( 'Migori', 'woocommerce' ),
        'MBA' => __( 'Mombasa', 'woocommerce' ),
        'MRA' => __( 'Muranga', 'woocommerce' ),
        'NBO' => __( 'Nairobi', 'woocommerce' ),
        'NKU' => __( 'Nakuru', 'woocommerce' ),
        'NDI' => __( 'Nandi', 'woocommerce' ),
        'NRK' => __( 'Narok', 'woocommerce' ),
        'NYI' => __( 'Nyamira', 'woocommerce' ),
        'NDR' => __( 'Nyandarua', 'woocommerce' ),
        'NER' => __( 'Nyeri', 'woocommerce' ),
        'SMB' => __( 'Samburu', 'woocommerce' ),
        'SYA' => __( 'Siaya', 'woocommerce' ),
        'TVT' => __( 'Taita Taveta', 'woocommerce' ),
        'TAN' => __( 'Tana River', 'woocommerce' ),
        'TNT' => __( 'Tharaka-Nithi', 'woocommerce' ),
        'TRN' => __( 'Trans-Nzoia', 'woocommerce' ),
        'TUR' => __( 'Turkana', 'woocommerce' ),
        'USG' => __( 'Uasin Gishu', 'woocommerce' ),
        'VHG' => __( 'Vihiga', 'woocommerce' ),
        'WJR' => __( 'Wajir', 'woocommerce' ),
        'PKT' => __( 'West Pokot', 'woocommerce' )
       );
    }

    return is_null( $county ) ? $counties : $counties[$county];
}
