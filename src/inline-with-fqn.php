<?php

namespace Some\Namespace;

use JsonSerializable;

interface SomeInterface extends JsonSerializable
{
	/**
	 * Returns an array of parameters to serialize when this is serialized with
	 * json_encode().
	 *
	 * @return array
	 */
	#[\ReturnTypeWillChange]
	public function jsonSerialize();
}