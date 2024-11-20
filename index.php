<?php
add_filter( 'block_editor_settings_all', function ( $settings ) {
	if ( ! isset( $settings['blockInspectorTabs'] ) ) {
		$settings['blockInspectorTabs'] = array();
	}
	$settings['blockInspectorTabs'] = array_merge(
		$settings[ 'blockInspectorTabs' ],
		array( 
			'default'     => false, // Disables for all blocks.
		),
	);
	return $settings;
} );
