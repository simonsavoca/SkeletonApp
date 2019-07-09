<?php
/**
 * Generates the list
 *
 * Generates an HTML ordered list from an single or multi-dimensional array.
 *
 * @access private
 * @param string
 * @param mixed
 * @param mixed
 * @param integer
 * @return string
 */
if ( ! function_exists('_list'))
{
 function _list($type = 'ul', $list, $attributes = '', $depth = 0)
 {
  // If an array wasn't submitted there's nothing to do…
  if ( ! is_array($list))
  {
   return $list;
  }

  // Set the indentation based on the depth
  $out = str_repeat(" ", $depth);

  // Were any attributes submitted?  If so generate a string
  if (is_array($attributes))
  {
   $atts = '';
   foreach ($attributes as $key => $val)
   {
    $atts .= ' ' . $key . '="' . $val . '"';
   }
   $attributes = $atts;
  }
  elseif (is_string($attributes) AND strlen($attributes) > 0)
  {
   $attributes = ' '. $attributes;
  }

  // Write the opening list tag
  $out .= "<".$type.$attributes.">\n";

  // Cycle through the list elements.  If an array is
  // encountered we will recursively call _list()

  static $_last_list_item = '';
  foreach ($list as $key => $val)
  {
   $_last_list_item = $key;

   $out .= str_repeat(" ", $depth + 2);

   // Determine any attribute for li or ul element
   $attributes = array('li'=>NULL,'ul'=>NULL);
   foreach ($attributes AS $att_key=>$att_val)
   {
    if (is_array($val) AND isset($val[$att_key.'_attributes']))
    {
     // Were any li attributes submitted?  If so generate a string
     if (is_array($val[$att_key.'_attributes']))
     {
      $atts = '';
      foreach ($val[$att_key.'_attributes'] as $key2 => $val2)
      {
       $atts .= ' ' . $key2 . '="' . $val2 . '"';
      }
      $attributes[$att_key] = $atts;
     }
     elseif (is_string($val[$att_key.'_attributes']) AND strlen($val[$att_key.'_attributes']) > 0)
     {
      $attributes[$att_key] = ' '. $val[$att_key.'_attributes'];
     }
    }
   }

   // Was li_attribute or ul_attribute passed, if so as val
   if ( ($attributes['li'] != NULL OR $attributes['ul'] != NULL) AND isset($val['contents']) )
   {
    $val = $val['contents'];
   }


   // Write the opening list tag
   $out .= "<li".$attributes['li'].">";

   if ( ! is_array($val))
   {
    $out .= $val;
   }
   else
   {
    $out .= $_last_list_item."\n";
    $out .= _list($type, $val, $attributes['ul'], $depth + 4);
    $out .= str_repeat(" ", $depth + 2);
   }

   $out .= "</li>\n";
  }

  // Set the indentation for the closing tag
  $out .= str_repeat(" ", $depth);

  // Write the closing list tag
  $out .= "</".$type.">\n";

  return $out;
 }
}

?>
