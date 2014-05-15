<?php

function get_united_states_of_america_data() {
	global $united_states_of_america;
	return $united_states_of_america;	
}

function convert_google_maps_kml_coords_to_array( $kml_data ) {

	// build array
	$coords_array = array();

	// convert kml data to array
	if ( $kml_coords = explode( ',0.0 ', $kml_data ) ) {
	
		foreach( $kml_coords as $coords ) {
		
			// divide up and switch coords
			if ( ( $coords = explode( ',', trim( $coords ) ) )
				&& count( $coords ) >= 2 ) {
			
				$coords_array[] = array( $coords[1], $coords[0] );
				
			}
		
		}
		
	}

	return $coords_array;
	
}

function get_coords_csv_from_array( $coords ) {

	// build coords groups into array
	$coords_string = array();

	foreach( $coords as $coord ) {

		$coords_string[] = "'" . implode( ',', $coord ) . "'";
		
	}
	
	return implode( ', ', $coords_string );

}