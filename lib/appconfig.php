<?php
class OC_APPCONFIG{
	/**
	 * Get the available keys for an application
	 * @param string application
	 */
	public static function getKeys( $application ){
		// OC_DB::query( $query);
		return array();
	}

	/**
	 * Get the config value
	 * @param string application
	 * @param string key
	 * @param string default
	 */
	public static function getValue( $application, $key, $default ){
		// OC_DB::query( $query);
		return $default;
	}

	/**
	 * Set the config value
	 * @param string application
	 * @param string key
	 * @param string value
	 */
	public static function setValue( $application, $name, $url ){
		// OC_DB::query( $query);
		return true;
	}
}
?>
