<?php

namespace Entity;

use JMS\Serializer\Annotation\Type;

/**
 * Entity\User
 */
class User
{
	/**
	 * @Type("integer")
	 */
	private $id;

	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	public function getId()
	{
		return $this->id;
	}
}