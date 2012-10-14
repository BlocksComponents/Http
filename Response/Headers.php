<?php

	namespace Real\Http\Response;
	use Real\Http\AbstractHeaders;

	class Headers extends Headers
	{
		public function getAllHeaders()
		{
			return get_headers();
		}
	}