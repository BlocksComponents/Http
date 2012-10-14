<?php

	namespace Real\Http;

	class Message
	{
		private $headers;
		private $content;
		private $version = '1.1';

		public function __construct($headers, $content)
		{
			$this->headers = $headers;
			$this->content = $content;
		}

		public function getHeaders()
		{
			return $this->headers;
		}

		public function setContent($content)
		{
			$this->content = $content;
		}

		public function getContent()
		{
			return $this->content;
		}

		public function setVersion($version)
		{
			$this->version = $version;
		}

		public function getVersion()
		{
			return $this->version;
		}
	}