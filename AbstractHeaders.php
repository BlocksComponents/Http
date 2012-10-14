<?php

	namespace Real\Http;

	abstract class AbstractHeaders
	{
		private $headers;

		abstract function getAllHeaders();

		public function __construct(array $headers = array())
		{
			$this->setHeaders($headers);
		}

		public function setHeader($key, $val)
		{
			$this->headers[$key] = $val;
		}

		public function setHeaders(array $headers)
		{
			unset($this->headers);
			$this->headers = $headers;
		}

		public function overwriteHeaders(array $headers)
		{
			foreach ($headers as $key => $nVal) {
				if (array_key_exists($this->headers[$key])) {
					$this->headers[$key] = $nVal;
				}
			}
		}

		public function getHeader($key)
		{
			return $this->headers[$key];
		}

		public function getHeaders()
		{
			return $this->headers;
		}
	}