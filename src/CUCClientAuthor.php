<?php

namespace dekuan\deuclientauthor;

use dekuan\deuclient\CUCClient;

/**
 *	class of CUCClientAuthor
 */
class CUCClientAuthor extends CUCClient
{
	//	statics instance
	protected static $g_cStaticInstanceAuthor;

	const CKX			= 'XAU';
	const CKT			= 'TAU';


	public function __construct()
	{
		//
		//	set the main keys
		//
		$this->m_sMKeyX	= self::CKX;
		$this->m_sMKeyT	= self::CKT;

		//	...
		parent::__construct();
	}
	public function __destruct()
	{
		parent::__destruct();
	}
	static function getInstance()
	{
		if ( is_null( self::$g_cStaticInstanceAuthor ) || ! isset( self::$g_cStaticInstanceAuthor ) )
		{
			self::$g_cStaticInstanceAuthor = new self();
		}
		return self::$g_cStaticInstanceAuthor;
	}


}