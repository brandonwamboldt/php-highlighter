PHPLighter
==========

A PHP syntax highlighting engine the utilizes `token_get_all()` to produce a level of syntax highlighting that rivals any modern editor. No more barebone generic syntax highlighting!

The indended purpose of this code is for sites that display a lot of code using basic syntax highlighting (Such as PasteBin) or programming blogs. There are lots of other uses for it though!

Usage
-----

```
<?php
include( 'highlight_php.inc.php' );
$php_str = file_get_contents( 'sample.php' );
PHPLighter::highlight( $php_str );
```

However, this will do a few extra things like tokenize PHPDoc tags (@author, @category, etc), linkify links and emails in comments, and perform "complex" tokenizing (Adding special tags around things like magic functions for extra styling capabilities).

There are options to disable these features however.

```
<?php
include( 'highlight_php.inc.php' );
$php_str = file_get_contents( 'sample.php' );

// Perform basic syntax highlight of PHP's built in tokens
PHPLighter::highlight( $php_str, FALSE, PHPLIGHTER_BASIC_HIGHLIGHTING );

// Don't put tags around PHPDoc tags
PHPLighter::highlight( $php_str, FALSE, PHPLIGHTER_NO_TOKENIZE_DOC_TAGS );

// No auto links
PHPLighter::highlight( $php_str, FALSE, PHPLIGHTER_NO_LINKIFY_LINKS | PHPLIGHTER_NO_LINKIFY_EMAILS );
```

Styles
------

The styles that are currently included with this library are: Eclipse PDT, Monokai (Based on the Sublime Text 2 version), Monokai Soda Dark (Based on the Sublime Text 2 theme of the same name), and Twilight (Based on the Sublime Text 2 theme of the same name).

I plan on included more themes and styles if anyone uses this library :)