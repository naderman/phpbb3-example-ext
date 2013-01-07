<?php

class phpbb_ext_naderman_example_controller_main
{
	/**
	* Constructor
	* NOTE: The parameters of this method must match in order and type with
	* the dependencies defined in the services.yml file for this service.
	*
	* @param phpbb_request $request Request object
	* @param phpbb_user $user User object
	* @param phpbb_template $template Template object
	* @param phpbb_db_driver $db Database object
	* @param phpbb_controller_helper $helper Controller helper object
	*/
	public function __construct(phpbb_request $request, phpbb_user $user, phpbb_template $template, phpbb_db_driver $db, phpbb_controller_helper $helper)
	{
		$this->request = $request;
		$this->user = $user;
		$this->template = $template;
		$this->db = $db;
		$this->helper = $helper;
	}

	/**
	* Foo controller to be accessed with the URL is /example/{test}
	* (where {test} is the placeholder for a value)
	*
	* @param string $test String taken from the URL
	* @return Symfony\Component\HttpFoundation\Response A Symfony Response object
	*/
	public function foo($test)
	{
		if (empty($test))
		{
			return $this->helper->error('foo() method called, but no value was given for $test. A 404, "Not Found", response was sent.', 404);
		}

		$this->template->assign_vars(array(
			'MESSAGE'	=> 'foo() method called. The value of $test is <pre>' . $test . '</pre>.',
		));

		return $this->helper->render('foobar_body.html', 'foo()');
	}

	/**
	* Foo controller to be accessed with the URL is /ex/{test}
	* (where {test} is the placeholder for a value)
	*
	* @param string $test String taken from the URL
	* @return Symfony\Component\HttpFoundation\Response A Symfony Response object
	*/
	public function bar($test = 'bar')
	{
		$this->user->add_lang_ext('naderman/example', 'foobar');

		$this->template->assign_vars(array(
			'MESSAGE'	=> $this->user->lang('WELCOME_MESSAGE', $this->user->data['username']),
		));

		return $this->helper->render('foobar_body.html', $this->user->lang('WELCOME_TO_FOOBAR'));
	}
}
