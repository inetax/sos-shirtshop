<?php
class Link
{
  public static function Build($link, $type = 'http')
  {
    $base = (($type == 'http' || USE_SSL == 'no') ? 'http://' : 'https://') .
            getenv('SERVER_NAME');

    // If HTTP_SERVER_PORT is defined and different than default
    if (defined('HTTP_SERVER_PORT') && HTTP_SERVER_PORT != '80' &&
        strpos($base, 'https') === false)
    {
      // Append server port
      $base .= ':' . HTTP_SERVER_PORT;
    }

    $link = $base . VIRTUAL_LOCATION . $link;

    // Escape html
    return htmlspecialchars($link, ENT_QUOTES);
  }


  public static function QueryStringToArray($queryString)
  {
    $result = array();

    if ($queryString != '')
    {
      $elements = explode('&', $queryString);

      foreach($elements as $key => $value)
      {
        $element = explode('=', $value);
        $result[urldecode($element[0])] =
          isset($element[1]) ? urldecode($element[1]) : '';
      }
    }

    return $result;
  }

  // Prepares a string to be included in an URL
  public static function CleanUrlText($string)
  {
    // Remove all characters that aren't a-z, 0-9, dash, underscore or space
    $not_acceptable_characters_regex = '#[^-a-zA-Z0-9_ ]#';
    $string = preg_replace($not_acceptable_characters_regex, '', $string);

    // Remove all leading and trailing spaces
    $string = trim($string);

    // Change all dashes, underscores and spaces to dashes
    $string = preg_replace('#[-_ ]+#', '-', $string);

    // Return the modified string
    return strtolower($string);
  }


  // Create a Valid Examiner link
  public static function ToValidateExaminer()
  {
    return self::Build('?view=AddExaminer' );
  }
  
// Create a Successful Add link
  public static function ToAddSuccess()
  {
    return self::Build('?view=AddSuccess' );
  }

  // Create a Valid Examiner link
  public static function ToValidateCaseInfo()
  {
    return self::Build('?view=AddCaseInfo' );
  }
  
// Create a Valid Examiner link
  public static function ToValidateLawFirm()
  {
    return self::Build('?view=AddLawFirm' );
  }

// Create a Valid Examiner link
  public static function ToAssignFirm2Claim()
  {
    return self::Build('?view=AssignFirm2Claim' );
  }
  
// Create a Valid Examiner link
  public static function ToUpdatevMailMerge()
  {
    return self::Build('?view=UpdatevMailMerge' );
  }
}
?>