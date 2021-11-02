<?php

namespace CaboLabs\PhBasic;

class BasicError {
  
  public static $php_file_upload_errors = array(
    UPLOAD_ERR_OK => 'There is no error, the file uploaded with success',
    UPLOAD_ERR_INI_SIZE => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
    UPLOAD_ERR_FORM_SIZE => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
    UPLOAD_ERR_PARTIAL => 'The uploaded file was only partially uploaded',
    UPLOAD_ERR_NO_FILE => 'No file was uploaded',
    UPLOAD_ERR_NO_TMP_DIR => 'Missing a temporary folder',
    UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk.',
    UPLOAD_ERR_EXTENSION => 'A PHP extension stopped the file upload.',
  );
}