<?php
use Google\Cloud\Storage\StorageClient;


	function upload_object($bucketName, $objectName, $source)
{
    $storage = new StorageClient();
    $file = fopen($source, 'r');
    $bucket = $storage->bucket($bucketName);
    $object = $bucket->upload($file, [
        'name' => $objectName
    ]);
  
   //printf('Uploaded %s to gs://%s/%s' . PHP_EOL, basename($source), $bucketName, $objectName);
}




/**
 * Delete an object.
 *
 * @param string $bucketName the name of your Cloud Storage bucket.
 * @param string $objectName the name of your Cloud Storage object.
 * @param array $options
 *
 * @return void
 */
function delete_object($bucketName, $objectName, $options = [])
{
    $storage = new StorageClient();
    $bucket = $storage->bucket($bucketName);
    $object = $bucket->object($objectName);
    $object->delete();
    //printf('Deleted gs://%s/%s' . PHP_EOL, $bucketName, $objectName);
}