# PHP Image Lib

> Original Repos:   
> - PHP Image Lib: https://github.com/a19836/phpimagelib/   
> - Bloxtor: https://github.com/a19836/bloxtor/

## Overview

**PHP Image Lib** is a lightweight library for validating and manipulating images in a simple and consistent way.  
It provides essential tools for checking image integrity, validating binary content, resizing images, and inspecting image properties.

The library allows you to:
- Validate whether a file is a valid image
- Verify the integrity of image binary data
- Resize images with optional cropping and forced resizing
- Validate image dimensions before processing
- Detect and retrieve image file extensions

With its straightforward API, this library is ideal for handling user-uploaded images, enforcing image constraints, generating thumbnails, and preparing images for web applications.

This library helps ensure image safety and consistency while keeping image processing fast and easy to integrate.

To see a working example, open [index.php](index.php) on your server.

---

## Usage

```php
include __DIR__ . "ImageHandler.php";

$ImageHandler = new ImageHandler();

$status = $ImageHandler->isImageValid($file_path); //checks if a file is an image
$status = $ImageHandler->isImageBinaryValid($file_path); //checks if a file is an binary image
$status = $ImageHandler->imageResize($src_path, $dst_path, $width, $height, $crop = false, $force_resize = false); //resizes an image file to another file
$status = $ImageHandler->areImageMeasuresValid($file_path, $width, $height, $crop = false); //check if images are valid, like if we are cropping a file, then the desired dimensions must be smaller than the current image dimensions.
$extension = $ImageHandler->getFileExtension($file_path); //get the image file extension
```

---

## Other interesting Methods

```php
include __DIR__ . "MimeTypeHandler.php";

MimeTypeHandler::isVideoMimeType($mime_type); //checks if mime type is video
MimeTypeHandler::isImageMimeType($mime_type); //checks if mime type is image
MimeTypeHandler::isTextMimeType($mime_type); //checks if mime type is text
MimeTypeHandler::isDocMimeType($mime_type); //checks if mime type is doc
MimeTypeHandler::checkMimeType($mime_type, $filters); //checks if mime type is from a group of filters/types
MimeTypeHandler::getAvailableTypesByExtensions($filters = null); //gets file available extensions
MimeTypeHandler::getAvailableTypesByMimeType($filters = null); //gets file available mime types
MimeTypeHandler::getAvailableFileExtensions($filters = null); //gets the available file extensions
MimeTypeHandler::getAvailableFileMimeTypes($filters = null); //gets the available file extensions
MimeTypeHandler::getFileExtension($file_path); //gets file extension
MimeTypeHandler::getFileMimeType($file_path); //gets file mime type. 
MimeTypeHandler::getTypeByExtension($extension, $filters = null); //gets type by extension
MimeTypeHandler::getTypeByMimeType($mime_type, $filters = null); //gets type by mime type
MimeTypeHandler::getFileTypeByExtension($file_path, $filters = null); //gets file type by extension
MimeTypeHandler::getFileTypeByMimeType($file_path, $filters = null); //gets file type by mime type
```

