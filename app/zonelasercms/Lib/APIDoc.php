<?php

namespace APIDocGen\Lib;

use Gaufrette\File;
use Gaufrette\Filesystem;
use Gaufrette\Adapter\Local as LocalAdapter;

class APIDoc
{
	protected $data;
	protected $directory;
	protected $filesystem;
	protected $file;
	protected $path;
	
	/**
	 * Constructor
	 *
	 * Initializes API Document JS Generator
	 *
	 * @param $data array API JSON contents
	 */
	public function __construct(array $data = [])
	{
		if (empty($data))
			throw new \Exception('Data cannot be empty');
		
		$this->data = ( object ) $data;
	}
	
	/**
	 * createPath
	 *
	 * Creates path for the documentation
	 *
	 * @param $path string Path where to store the file. Path should be writable
	 */
	public function createPath($path = null)
	{
		// validate path
		$path = !$path ? str_replace(' ', '_', strtolower($this->data->name)) : $path;
		$this->path = '/docs/' . $path;
		$this->directory = PUBLIC_DIR . '/docs/' . $path;
		
		// Create directory
		@mkdir($this->directory);
		@chmod($this->directory, 0777);
		
		// File system
		$this->filesystem = new Filesystem(new LocalAdapter($this->directory, true));
	}
	
	/**
	 * getPath
	 */
	public function getPath()
	{
		return $this->path;
	}
	
	/**
	 * getDirectory
	 */
	public function getDirectory()
	{
		return $this->directory;
	}	
	
	/**
	 * createFile
	 *
	 * Creates apidoc.js
	 */
	public function createFile($file = 'apidoc.json')
	{
		// Instantiate File handler
		$this->file = new File($file, $this->filesystem);
		
		// Check if file exists
		if ( !$this->file->exists() )
			$this->createFileStream();
		
		// Write to file
		$this->file->setContent($this->formatData());
	}
	
	/**
	 * createFileStream
	 *
	 * Creates the directory for the path and file stream
	 */
	public function createFileStream()
	{
		if (!( $this->file instanceof File )) {
			throw new \Exception('Data is not an instance of File');
		}
		
		$this->file->createStream();
	}
	
	/**
	 * formatData
	 *
	 * Formats the data to be saved
	 */
	public function formatData()
	{
		$data = [];
		
		// Basic details
		if (isset($this->data->name) && !empty($this->data->name)) $data['name'] = $this->data->name;
		if (isset($this->data->version) && !empty($this->data->version)) $data['version'] = $this->data->version;
		if (isset($this->data->description) && !empty($this->data->description)) $data['description'] = $this->data->description;
		if (isset($this->data->title) && !empty($this->data->title)) $data['title'] = $this->data->title;
		if (isset($this->data->url) && !empty($this->data->url)) $data['url'] = $this->data->url;
		
		// Header
		if (isset($this->data->header) && !empty($this->data->header)) $data['header']['title'] = $this->data->header;
		if (isset($this->data->header_content) && !empty($this->data->header_content)) $data['header']['filename'] = $this->createHeaderFile();
		
		// Footer
		if (isset($this->data->footer) && !empty($this->data->footer)) $data['footer']['title'] = $this->data->footer;
		if (isset($this->data->header_content) && !empty($this->data->footer_content)) $data['header']['filename'] = $this->createFooterFile();

		return json_encode($data, JSON_PRETTY_PRINT);
	}
	
	/**
	 *
	 */
	public function createHeaderFile()
	{
		$this->createPath();
		$file = 'header.md';
		
		// Instantiate File handler
		$this->file = new File($file, $this->filesystem);
		
		// Check if file exists
		if ( !$this->file->exists() )
			$this->createFileStream();
		
		// Write to file
		$this->file->setContent($this->data->header_content);
		
		return $file;
	}
	
	/**
	 *
	 */
	public function createFooterFile()
	{
		$file = 'footer.md';
		
		// Instantiate File handler
		$this->file = new File($file, $this->filesystem);
		
		// Check if file exists
		if ( !$this->file->exists() )
			$this->createFileStream();
		
		// Write to file
		$this->file->setContent($this->data->footer_content);
		
		return $file;
	}
	
	/**
	 * generate
	 */
	public function generate()
	{
		// Commands
		$com1 = 'cd ' . $this->getDirectory();
		$com2 = 'apidoc -i raw -o .';
		
		// Execute
		if ( !exec($com1 . ' && ' . $com2) )
			throw new \Exception('An error encountered while generating the API Documentation');
		
		return $this->getPath() . '/index.html';
	}
}