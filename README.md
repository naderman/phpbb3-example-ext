# WARNING - THIS EXTENSION NO LONGER WORKS

This was created as a test at the beginning of phpBB extensions and is not maintained anymore.

You can check out the instructions on converting a MOD to a 3.1 extension in https://github.com/nickvergessen/howto-convert-phpbb30mod-to-phpbb31ext

There's also a corresponding extension available at https://github.com/nickvergessen/phpbb3-mod-newspage/tree/develop-caitlyn

# Example Extension

## Installation

Clone into phpBB/ext/naderman/example:

    git clone https://github.com/naderman/phpbb3-example-ext.git phpBB/ext/naderman/example

Enable in database by inserting a row into phpbb_ext

    INSERT INTO phpbb_ext (ext_name, ext_active, ext_state) VALUES ('example', 1, '');

# Usage
The cron task writes to a file called foobar.txt in your forum root with the current time (to the second) each time a page on your board is accessed. Completely pointless, but it's an example.
For this to work, ensure that a file called foobar.txt exists in your board root and that it is writable.

To access the front-page file, navigate your browser to index.php?ext=example

# License
GPLv2
