<?php
// Business tier class for reading product catalog information
class Catalog
{
	// Retrieves all departments
	public static function GetDepartments()
	{
		// Build the SQL Query
		$sql = 'CALL catalog_get_departments_list()';
		
		// Execute the query and return the results
		return DatabaseHandler::GetAll($sql);
	}
}
?>
