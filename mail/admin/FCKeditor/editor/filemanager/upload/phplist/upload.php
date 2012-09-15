<?php
/*
 * FCKeditor - The text editor for internet
 * Copyright (C) 2003-2005 Frederico Caldeira Knabben
 *
 * Licensed under the terms of the GNU Lesser General Public License:
 *    http://www.opensource.org/licenses/lgpl-license.php
 *
 * For further information visit:
 *    http://www.fckeditor.net/
 *
 * File Name: upload.php
 *  This is the "File Uploader" for PHP.
 *
 * File Authors:
 *    Frederico Caldeira Knabben (fredck@fckeditor.net)
 */

require('util.php') ;

if (isset($_SERVER["ConfigFile"]) && is_file($_SERVER["ConfigFile"])) {
  include $_SERVER["ConfigFile"];
} elseif (is_file('../../../../../../../../config/config.php')) {
  include "../../../../../../../../config/config.php";
} else {
  SendError( 1, 'unable to load phplist config file' );
  print "Error, cannot find config file\n";
  exit;
}
global $Config ;

// Path to uploaded files relative to the document root.

$Config['AllowedExtensions']['File']  = array() ;
$Config['DeniedExtensions']['File']   = array('php','php3','php5','phtml','asp','aspx','ascx','jsp','cfm','cfc','pl','bat','exe','dll','reg','cgi') ;

$Config['AllowedExtensions']['Image'] = array('jpg','gif','jpeg','png') ;
$Config['DeniedExtensions']['Image']  = array() ;

$Config['AllowedExtensions']['Flash'] = array('swf','fla') ;
$Config['DeniedExtensions']['Flash']  = array() ;

// SECURITY: You must explicitelly enable this "connector". (Set it to "true").
if (!defined('FCKIMAGES_DIR')) {
  $Config['Enabled'] = false;
} elseif (defined('UPLOADIMAGES_DIR')) {
  $imgdir = $_SERVER['DOCUMENT_ROOT'].'/'.UPLOADIMAGES_DIR.'/';
  $Config['Enabled'] = is_dir($imgdir) && is_writeable ($imgdir);
  $Config['UserFilesPath'] = '/'.UPLOADIMAGES_DIR.'/' ;
} else {
  $Config['UserFilesPath'] = $GLOBALS["pageroot"].'/'.FCKIMAGES_DIR.'/' ;
  $imgdir = $_SERVER['DOCUMENT_ROOT'].$GLOBALS['pageroot'].'/'.FCKIMAGES_DIR.'/';
  $Config['Enabled'] = is_dir($imgdir) && is_writeable ($imgdir);
}

// This is the function that sends the results of the uploading process.
function SendResults( $errorNumber, $fileUrl = '', $fileName = '', $customMsg = '' )
{
  echo '<script type="text/javascript">' ;
  echo 'window.parent.OnUploadCompleted(' . $errorNumber . ',"' . str_replace( '"', '\\"', $fileUrl ) . '","' . str_replace( '"', '\\"', $fileName ) . '", "' . str_replace( '"', '\\"', $customMsg ) . '") ;' ;
  echo '</script>' ;
  exit ;
}

// Check if this uploader has been enabled.
if ( !$Config['Enabled'] )
  SendResults( '1', '', '', 'This file uploader is disabled. Please check the "editor/filemanager/upload/php/config.php" file' ) ;

// Check if the file has been correctly uploaded.
if ( !isset( $_FILES['NewFile'] ) || is_null( $_FILES['NewFile']['tmp_name'] ) || $_FILES['NewFile']['name'] == '' )
  SendResults( '202' ) ;

// Get the posted file.
$oFile = $_FILES['NewFile'] ;

// Get the uploaded file name and extension.
$sFileName = $oFile['name'] ;
$sOriginalFileName = $sFileName ;
$sExtension = substr( $sFileName, ( strrpos($sFileName, '.') + 1 ) ) ;
$sExtension = strtolower( $sExtension ) ;

// The the file type (from the QueryString, by default 'File').
$sType = isset( $_GET['Type'] ) ? $_GET['Type'] : 'File' ;

// Get the allowed and denied extensions arrays.
$arAllowed  = $Config['AllowedExtensions'][$sType] ;
$arDenied = $Config['DeniedExtensions'][$sType] ;

// Check if it is an allowed extension.
if ( ( count($arAllowed) > 0 && !in_array( $sExtension, $arAllowed ) ) || ( count($arDenied) > 0 && in_array( $sExtension, $arDenied ) ) )
  SendResults( '202' ) ;

$sErrorNumber = '0' ;
$sFileUrl   = '' ;

// Initializes the counter used to rename the file, if another one with the same name already exists.
$iCounter = 0 ;

// The the target directory.
$sServerDir = GetRootPath() . $Config["UserFilesPath"] ;
#$sServerDir = GetRootPath() . $Config["UserFilesPath"] ;
$sServerDir = $_SERVER['DOCUMENT_ROOT'].'/' . $Config["UserFilesPath"] ;


while ( true )
{
  // Compose the file path.
  $sFilePath = $sServerDir . $sFileName ;

  // If a file with that name already exists.
  if ( is_file( $sFilePath ) )
  {
    $iCounter++ ;
    $sFileName = RemoveExtension( $sOriginalFileName ) . '(' . $iCounter . ').' . $sExtension ;
    $sErrorNumber = '201' ;
  }
  else
  {
    move_uploaded_file( $oFile['tmp_name'], $sFilePath ) ;

    if ( is_file( $sFilePath ) )
    {
      $oldumask = umask(0) ;
      chmod( $sFilePath, 0644 ) ;
      umask( $oldumask ) ;
    }

    $sFileUrl = 'http://'.$_SERVER['HTTP_HOST'].'/'.$Config["UserFilesPath"] . $sFileName ;

    break ;
  }
}

SendResults( $sErrorNumber, $sFileUrl, $sFileName ) ;
?>