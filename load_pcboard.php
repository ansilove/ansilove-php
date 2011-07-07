<?PHP
/*****************************************************************************/
/*                                                                           */
/* Ansilove/PHP 1.07 (c) by Frederic Cambus 2003-2009                        */
/* http://ansilove.sourceforge.net                                           */
/*                                                                           */
/* Created:      2009/01/20                                                  */
/* Last Updated: 2009/04/29                                                  */
/*                                                                           */
/*****************************************************************************/

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
$font=$_GET['font'];
$bits=$_GET['bits'];
$icecolors=$_GET['icecolors'];

$input=sanitize_input($input);

@load_pcboard(ANSILOVE_FILES_DIRECTORY.$input,online,$font,$bits)
?>
