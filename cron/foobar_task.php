<?php

class phpbb_ext_naderman_example_cron_foobar_task extends phpbb_cron_task_base
{
    private $phpbb_root_path;
    private $user;

    public function __construct($phpbb_root_path, phpbb_user $user)
    {
        $this->phpbb_root_path = $phpbb_root_path;
        $this->user = $user;
    }

    public function run()
    {
        $this->user->add_lang_ext('naderman/example', 'foobar');

        $filename   = $this->phpbb_root_path.'/foobar.txt';
        $content    = $this->user->lang('FOOBAR', date('s'));
        file_put_contents($filename, $content);
    }
}
