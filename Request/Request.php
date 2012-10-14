<?php

	namespace Real\Http\Request;
	use Real\Http\Message;

	class Request extends Message
	{
		private $server;
		private $post;
		private $get;
		private $headers;

		public function __construct()
		{
			$this->server = $_SERVER;
			$this->post = $_POST;
			$this->get = $_GET;
			$this->headers = new \Real\Http\Request\Headers();
			$this->headers->getAllHeaders();
		}	
	}