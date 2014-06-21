# Git Based Blog

This is a very simple blog written in php and updated via git.

Currently the idea is to have a hook in the bare repository which, upon an update,
pushes a 'public' branch to your server, or rather the server pulls the bare repo
and runs a little script updating metadata information about the state of the blog.
This metadata _might_ be in sqlite database.

Posts are submitted as 'flat files' with a simple format of a list of keyvalue pairs
(specifying things like date and author) followed by the content in some format
specified in the metadata.
