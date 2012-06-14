PHPLighter
==========

A PHP syntax highlighting engine the utilizes `token_get_all()` to produce a level of syntax highlighting that rivals any modern editor. No more barebone generic syntax highlighting!

The indended purpose of this code is for sites that display a lot of code using basic syntax highlighting (Such as PasteBin) or programming blogs. There are lots of other uses for it though!

See it in action at http://brandonwamboldt.ca/source/example.php

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

Why not use highlight_string?
-----------------------------

PHP provides a built-in function called `highlight_string` and `highlight_php`, meant for syntax highlighting. However, these functions are pretty simplistic. The highlighted source uses span tags with inline styles instead of classes, and there are only 4 different color options: 

* `highlight.string` for the color of strings
* `highlight.comment` for the color of comments
* `highlight.keyword` for the color of PHP keywords
* `highlight.default` for everything else

This doesn't give you very many options. This library on the other hand will generate span tags with CSS classes instead of inline styles. There are *dozens* of classes that are used, to represent every builtin PHP token (T_STRING, T_COMMENT, T_IF, T_ECHO, etc), as well as a dozen or so custom tokens (C_DOCBLOCK_TAG, C_MAGIC_METHOD, C_OBJECT_PROPERTY, etc). This allows you to have very fine grained control over the styles that are outputed, giving you beautifully highlighted PHP.

**Examples**

```
<?php
highlight_string('<?php phpinfo(); ?>');
?>
```

The above example will output (in PHP 5):
```
<code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php phpinfo</span><span style="color: #007700">(); </span><span style="color: #0000BB">?&gt;</span>
</span>
</code>
```

The above example will output (With this library):
```
<pre class="pretty-php"><span class="T_OPEN_TAG">&lt;?php </span><span class="T_STRING C_BUILTIN_FUNCTION">phpinfo</span>()<span class="C_SEMICOLON">;</span> <span class="T_CLOSE_TAG">?&gt;</span></pre></body>
```

The library example may look a bit overwhelming, but we include a few different styles with this library (Light and dark ones) that you can use directly or modify for your needs. As you can see, our generated HTML is cleaner and far easier to modify.