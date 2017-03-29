# keyword-not-found-set-field-yourls
YOURLS: If keyword isn't found in the database, redirect to admin page and pre-populate the short URL field

1. Download the plugin, move contents to plugins directory and rename to keyword-not-found-set-field-yourls.
2. Activate plugin in YOURLS admin interface
3. Nothing to configure.

If you visit a short URL that doesn't exist in your database, i.e. myurl.com/does_not_exist , this plugin will redirect you to the admin page,
and pre-populate the "Custom short URL" field with the does_not_exist value.
