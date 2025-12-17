<?php
/*
 * Copyright (c) 2025 Bloxtor (http://bloxtor.com) and Joao Pinto (http://jplpinto.com)
 * 
 * Multi-licensed: BSD 3-Clause | Apache 2.0 | GNU LGPL v3 | HLNC License (http://bloxtor.com/LICENSE_HLNC.md)
 * Choose one license that best fits your needs.
 *
 * Original PHP Local DB Repo: https://github.com/a19836/phplocaldb/
 * Original Bloxtor Repo: https://github.com/a19836/bloxtor
 *
 * YOU ARE NOT AUTHORIZED TO MODIFY OR REMOVE ANY PART OF THIS NOTICE!
 */
?>
<style>
h1 {margin-bottom:0; text-align:center;}
h5 {font-size:1em; margin:40px 0 10px; font-weight:bold;}
p {margin:0 0 20px; text-align:center;}

.note {text-align:center;}
.note span {text-align:center; margin:0 20px 20px; padding:10px; color:#aaa; border:1px solid #ccc; background:#eee; display:inline-block; border-radius:3px;}
.note li {margin-bottom:5px;}

.code {display:block; margin:10px 0; padding:0; background:#eee; border:1px solid #ccc; border-radius:3px; position:relative;}
.code:before {content:"php"; position:absolute; top:5px; left:5px; display:block; font-size:80%; opacity:.5;}
.code textarea {width:100%; height:300px; padding:30px 10px 10px; display:inline-block; background:transparent; border:0; resize:vertical; font-family:monospace;}
.code.short textarea {height:200px};
</style>
<h1>PHP Image Lib</h1>
<p>Manipulate images</p>
<div class="note">
		<span>
		This library validates and manipulates images in a simple and consistent way.<br/>
		It provides essential tools for checking image integrity, validating binary content, resizing images, and inspecting image properties.<br/>
		<br/>
		The library allows you to:<br/>
		<ul style="display:inline-block; text-align:left;">
			<li>Validate whether a file is a valid image</li>
			<li>Verify the integrity of image binary data</li>
			<li>Resize images with optional cropping and forced resizing</li>
			<li>Validate image dimensions before processing</li>
			<li>Detect and retrieve image file extensions</li>
		</ul>
		<br/>
		With its straightforward API, this library is ideal for handling user-uploaded images, enforcing image constraints, generating thumbnails, and preparing images for web applications.<br/>
		<br/>
		This library helps ensure image safety and consistency while keeping image processing fast and easy to integrate.
		</span>
</div>

<div>
	<h5>Usage</h5>
	<div class="code short">
		<textarea readonly>
include __DIR__ . "ImageHandler.php";

$ImageHandler = new ImageHandler();

$status = $ImageHandler->isImageValid($file_path); //checks if a file is an image
$status = $ImageHandler->isImageBinaryValid($file_path); //checks if a file is an binary image
$status = $ImageHandler->imageResize($src_path, $dst_path, $width, $height, $crop = false, $force_resize = false); //resizes an image file to another file
$status = $ImageHandler->areImageMeasuresValid($file_path, $width, $height, $crop = false); //check if images are valid, like if we are cropping a file, then the desired dimensions must be smaller than the current image dimensions.
$extension = $ImageHandler->getFileExtension($file_path); //get the image file extension
		</textarea>
	</div>
</div>

<div>
	<h5>Other interesting Methods</h5>
	<div class="code">
		<textarea readonly>
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
		</textarea>
	</div>
</div>
