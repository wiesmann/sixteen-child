# Child Theme for Sixteen Wordpress theme

This is a child theme that fixes some localisations issues present in the
[Sixteen Theme](https://wordpress.org/themes/sixteen/):
* Unsafe to call to substring on utf-8
* Non-localised initialisation of the timeago module.
* Broken french localisation files.

This child theme fixes these issues for version 1.3.0.6.
The files are basically patched source from the original theme.

To use, simply install `sixteen-child` directory into the `themes` directory.
