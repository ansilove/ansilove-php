<?PHP
/*****************************************************************************/
/*   ____   __ __   ___. __  __   _______._______                            */
/* __\   \./  \| \. \  |_| \|  |_/    \  |  /  _/                            */
/* \___\__|__|\___|_____/___|____/____/\___/\____/plur                       */
/*                                                                           */
/* Ansilove/PHP 1.10 (c) by Frederic Cambus 2003-2013                        */
/* http://ansilove.sourceforge.net                                           */
/*                                                                           */
/* Created:      2003/07/17                                                  */
/* Last Updated: 2013/06/25                                                  */
/*                                                                           */
/*****************************************************************************/

error_reporting(E_ALL ^ E_NOTICE);

if (!@require_once(dirname(__FILE__).'/ansilove.php'))
{
   echo "ERROR: Can't load Ansilove library.\n\n";
   exit(-1);
}

if (!@require_once(dirname(__FILE__).'/ansilove.cfg.php'))
{
   echo "ERROR: Can't load Ansilove configuration file.\n\n";
   exit(-1);
}

$input=$_GET['input'];
$columns=$_GET['columns'];
$font=$_GET['font'];
$bits=$_GET['bits'];
$icecolors=$_GET['icecolors'];

$input=sanitize_input($input);

@load_binary(ANSILOVE_FILES_DIRECTORY.$input,online,$columns,$font,$bits,$icecolors);
?>
