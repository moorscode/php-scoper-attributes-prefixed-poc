<?php

namespace Some\Namespace;

use JsonSerializable;
use Something;
use SomethingElse;

interface SomeInterface extends JsonSerializable
{
	/**
	 * Returns an array of parameters to serialize when this is serialized with
	 * json_encode().
	 *
	 * @return array
	 */
	#[Something]
	public function jsonSerialize();
}
