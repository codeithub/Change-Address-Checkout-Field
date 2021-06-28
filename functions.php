add_filter( 'woocommerce_default_address_fields' , 'codeithub_address_field_dropdown' );
 
function codeithub_address_field_dropdown( $address_fields ) {
 
    $location_array = array(
      'Location 1' => 'Location 1',
      'Location 2' => 'Location 2',
      'Location 3' => 'Location 3',
      'Location 4' => 'Location 4',
    );
 
$address_fields['address_2']['label'] = 'Location';
$address_fields['address_2']['type'] = 'select';
$address_fields['address_2']['options'] = $location_array;
 
return $address_fields;
 
}
