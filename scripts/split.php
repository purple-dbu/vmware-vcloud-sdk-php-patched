#!/usr/bin/env php
<?php
/**
 * split.php - Split a PHP file into multiple Class files
 *
 * Usage
 * =====
 *
 *     split.php FILE OUTPUT_DIR
 *
 *
 */

if ( !isset($argv) )
{
  error_log( '*** This script cannot be executed from a Web Server' );
  exit(1);
}

if ( count($argv) !== 3 )
{
  error_log('*** Syntax: ' . $argv[0] . ' FILE OUTPUT_DIR');
  exit(1);
}

$src = realpath($argv[1]);
$out = realpath($argv[2]);

echo "\n";
echo "----------------------------------------------------------------------\n";
echo $argv[1] . "\n\n";

$contents = file_get_contents($src);
if( preg_match_all('/(^|\n)((final\\s+)?(abstract\\s+)?(class|Class|interface|Interface)\\s+(VMware_VCloud_[^\\s]+)\\s.*\n\\})/sU', $contents, $matches) )
{
  //echo '- ' . implode("\n- ", $matches[6]) . "\n";
  foreach( $matches[6] as $i => $className )
  {
    $filename = str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    $absolutePath = $out . DIRECTORY_SEPARATOR . $filename;
    $absoluteDir = dirname($absolutePath);
    $classContents = "<?php\n" . $matches[2][$i];

    echo '- ' . $className . ' => ' . $filename . ' (' . strlen($classContents) . ' B)... ';

    if( !file_exists($absoluteDir) && !mkdir($absoluteDir, 0777, true) )
    {
      throw new Exception('Can\'t create directory ' . $absoluteDir);
    }

    if( file_put_contents($absolutePath, $classContents) )
    {
      echo "OK\n";
    }
    else
    {
      echo "NOK\n";
    }
  }

echo "----------------------------------------------------------------------\n";
}
else
{
  throw new Exception('No class found in ' . $src);
}
