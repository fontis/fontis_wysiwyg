<?php
/**
 * Fontis WYSIWYG Extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category   Fontis
 * @package    Fontis_Wysiwyg
 * @author     Peter Spiller
 * @copyright  Copyright (c) 2009 Fontis Pty. Ltd. (http://www.fontis.com.au)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

if(file_exists('../../../app/etc/local.xml')) {
    $xml = simplexml_load_file('../../../app/etc/local.xml');
    $host = $xml->global->resources->default_setup->connection->host;
    $username = $xml->global->resources->default_setup->connection->username;
    $password = $xml->global->resources->default_setup->connection->password;
    $dbname = $xml->global->resources->default_setup->connection->dbname;
    
    $db = mysql_connect($host, $username, $password);
    mysql_select_db($dbname, $db);
    
    $result = mysql_fetch_assoc(mysql_query(
            "SELECT * FROM core_config_data WHERE path = 'fontis_wysiwyg/fckeditor/usecustomtoolbarjs'"));
    if($result)
    {
        $useCustomToolbarJS = $result['value'];
    }
    else
    {
        $useCustomToolbarJS = null;
    }

    $result = mysql_fetch_assoc(mysql_query(
            "SELECT * FROM core_config_data WHERE path = 'fontis_wysiwyg/fckeditor/customtoolbarjs'"));
    if($result)
    {
        $customToolbarJS = $result['value'];
    }
    else
    {
        $customToolbarJS = null;
    }
    
    $result = mysql_fetch_assoc(mysql_query(
            "SELECT * FROM core_config_data WHERE path = 'fontis_wysiwyg/fckeditor/usecustomconfigjs'"));
    if($result)
    {
        $useCustomConfigJS = $result['value'];
    }
    else
    {
        $useCustomConfigJS = null;
    }
    
    $result = mysql_fetch_assoc(mysql_query(
            "SELECT * FROM core_config_data WHERE path = 'fontis_wysiwyg/fckeditor/customconfigjs'"));
    if($result)
    {
        $customConfigJS = $result['value'];
    }
    else
    {
        $customConfigJS = null;
    }

    mysql_close($db);
}

if($useCustomToolbarJS && $customToolbarJS)
{
    $customToolbarJS = 'FCKConfig.ToolbarSets["Custom"] = ['.$customToolbarJS.'];';
}
else
{
    $customToolbarJS = 'FCKConfig.ToolbarSets["Custom"] = ['.
    "['Source', '-', 'Cut','Copy','Paste','PasteText','PasteWord'],
    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
    '/',
    ['Bold','Italic','Underline','StrikeThrough','-', 'OrderedList','UnorderedList'],
    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyFull'],
    ['Image','Table','Rule','-','Link','Unlink','Anchor','-','FontFormat']
    ];";
}

if(!$useCustomConfigJS || !$customConfigJS)
{
    $customConfigJS = "FCKConfig.ProcessHTMLEntities = false;\n".
    "FCKConfig.FormatSource = false;\n".
    "FCKConfig.FormatOutput = false;\n".
    "FCKConfig.ProtectedSource.Add(/{{[\s\S]*?}}/g)";
}

print($customToolbarJS . "\n\n" . $customConfigJS);
