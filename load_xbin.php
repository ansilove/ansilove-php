<?PHP
/*****************************************************************************/
/*   ____   __ __   ___. __  __   _______._______                            */
/* __\   \./  \| \. \  |_| \|  |_/    \  |  /  _/                            */
/* \___\__|__|\___|_____/___|____/____/\___/\____/plur                       */
/*                                                                           */
/* Ansilove/PHP 1.11                                                         */
/* Copyright (c) 2003-2016, Frederic Cambus                                  */
/* http://ansilove.sourceforge.net                                           */
/*                                                                           */
/* Created:      2003-07-17                                                  */
/* Last Updated: 2016-01-05                                                  */
/*                                                                           */
/* Ansilove is released under the BSD 3-Clause license.                      */
/* See LICENSE file for details.                                             */
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
$bits=$_GET['bits'];

$input=sanitize_input($input);

@load_xbin(ANSILOVE_FILES_DIRECTORY.$input,online,$bits);
?>
