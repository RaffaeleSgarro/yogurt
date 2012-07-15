Yogurt theme for WordPress
==========================

![Screenshot][1]

This is a lightweight theme for WordPress that I use [on my own website][2].
To build the project run (you will add the `-rubygems` flag when running on
ruby < 1.9)

    rake
	
or the JRuby counterpart

    jruby -S rake

For embedding code in posts I use the [WP Syntax Highlighter plugin][3],
but the stylesheets are very messed up, so I have to truncate the file
`syntaxhighlighter3/styles/shCore.css`	

[1]: http://www.zybnet.com/images/zybnet-yogurt-screenshot.png
[2]: http://www.zybnet.com
[3]: http://wordpress.org/extend/plugins/wp-syntaxhighlighter/
