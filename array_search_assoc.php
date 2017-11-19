<?php
/**
 * A simple modification to array_column function. It preserves the key of the parent array.
 *
 * @author  David Šili <agapetos@gmail.com>
 *
 * @param $array    array
 * @param $column   string
 *
 * @return mixed
 */
function array_column_assoc($array, $column) {
	$return = array();
	if (!is_array($array)) {
		trigger_error('array_column_assoc: 1st parameter is not an array');
		return false;
	}
	if (!is_scalar($column)) {
		trigger_error('array_column_assoc: 2nd parameter is not of type integer, float, string or boolean');
		return false;
	}
	foreach ($array as $key => $value) {
		$return[$key] = (isset($value[$column])) ? $value[$column] : false;
	}
	
	return $return;
}