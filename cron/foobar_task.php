<?php

class phpbb_ext_example_cron_foobar_task extends phpbb_cron_task_base
{
    public function run()
    {
        global $phpbb_root_path, $user;
        $user->add_lang_ext('foobar', 'foobar');
        file_put_contents($phpbb_root_path.'/foobar.txt', $user->lang('FOOBAR', date('s')));
    }
}
