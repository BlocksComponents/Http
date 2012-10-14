<?php

	namespace Real\Http\Response;
	use Real\Http\Message;

	class Response extends Message
	{
		private $statusCode;
		private $statusText;

		public function __construct($headers, $content, $code, $text)
		{
			$this->headers = $headers;
			$this->content = $content;
			$this->statusCode = $code;
			$this->statusText = $text;
		}

		public function setStatusCode($code)
		{
			$this->statusCode = $code;
		}

		public function setStatusText($text)
		{
			$this->statusText = $text;
		}
	}