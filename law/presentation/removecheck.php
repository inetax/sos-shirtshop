<?php
class Removecheck
{
	public function init()
	{
		unset($_SESSION['examiner']);
		unset($_SESSION['caseinfo']);
		unset($_SESSION['lawfirm']);
		unset($_SESSION['link']);
		unset($_SESSION['vmailmerge']);
	}
}