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
