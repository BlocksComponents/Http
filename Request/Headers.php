<?php

	namespace Real\Http\Request;
	use Real\Http\AbstractHeaders;

	class Headers extends AbstractHeaders
	{
		public function getAllHeaders()
		{
			$this->headers = getallheaders();
			return $this->headers;
		}
	}