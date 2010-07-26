<?php
class Link
{
	public static function Build($link)
	{
		$base = 'http://' . getenv('SERVER_NAME');
		
		// If HTTP_SERVER_PORT is defined and different than default
		if (defined('HTTP_SERVER_PORT') && HTTP_SERVER_PORT != '80')
		{
			// Append server port
			$base .= ':' . HTTP_SERVER_PORT;
		}
		
		$link = $base . VIRTUAL_LOCATION . $link;
		
		// Escape html
		return htmlspecialchars($link, ENT_QUOTES);
	}
	
	public static function ToDepartment($departmentId, $page = 1)
	{
		$link = 'index.php?DepartmentId=' . $departmentId;
		
		if ($page > 1)
			$link .= '&Page=' . $page;
		return self::Build($link);
	}
	
	public static function ToCategory($departmentId, $categoryId, $page = 1)
	{
		$link = 'index.php?DepartmentId=' . $departmentId .
				'&categoryId=' . $categoryId;
		
		if ($page > 1)
			$link .= '&Page=' . $page;
			
		return self::Build($link);self::Build($link);
	}
	
	public static function ToProduct($productId)
	{
		return self::Build('index.php?ProductId=' . $productId);	
	}
}
?>
