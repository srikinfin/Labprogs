#!/usr/bin/perl

use CGI ":standard";

print header;
print start_html;

open(FILE,'<count.txt');
$a=<FILE>;
$a++;
close(FILE);
open(FILE,'>count.txt');
print FILE "$a";
print h1("Number of visitors is $a");
close(FILE);
print end_html;

