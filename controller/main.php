<?php

// This is required for all controllers
use Symfony\Component\HttpFoundation\Response;

class phpbb_ext_naderman_example_controller_main implements phpbb_controller_interface
{
	/**
	* Constructor
	* NOTE: The parameters of this method must match in order and type with
	* the dependencies defined in the services.yml file for this service.
	*
	* @param phpbb_request $request Request object
	* @param phpbb_user $user User object
	* @param phpbb_template $template Template object
	* @param dbal $db DBAL object
	*/
	public function __construct(phpbb_request $request, phpbb_user $user, phpbb_template $template, dbal $db)
	{
		$this->request = $request;
		$this->user = $user;
		$this->template = $template;
		$this->db = $db;
	}

	/**
	* Default controller method to be called if no other method is given.
	* In our case, it is accessed when the URL is /example
	*
	* @return Symfony\Component\HttpFoundation\Response A Symfony Response object
	*/
	public function handle()
	{
		return new Response('handle() method called', 200);
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
			return new Reponse('foo method called, but no value was given for $test. A 404, "Not Found", response was sent.', 404);
		}

		return new Response('foo() method called. The value of $test is <pre>' . $test . '</pre>.', 200);
	}

	/**
	* Foo controller to be accessed with the URL is /ex
	* (where {test} is the placeholder for a value)
	*
	* @param string $test String taken from the URL
	* @return Symfony\Component\HttpFoundation\Response A Symfony Response object
	*/
	public function bar($test = bar)
	{
		$this->user->add_lang_ext('naderman/example', 'foobar');

		$this->template->assign_var('MESSAGE', 'Hi, ' . $this->user->data['username'] . '! The bar() method was called from the main example controller.');

		page_header('Example extension bar() method');

		$this->template->set_filenames(array(
			'body'	=> 'foobar_body.html',
		));

		page_footer(true, false);

		return new Response('', 200);
	}
}
