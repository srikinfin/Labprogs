#!/usr/bin/perl

use CGI ":standard";

print header;
print start_html;

$name=param('username_input');
$range=4;
$value=int(rand($range));
if(($value)==0) { print "Namaskara"; }
if(($value)==1) { print "Hello"; }
if(($value)==2) { print "Whazup!"; }
if(($value)==3) { print "Hi";  }

print " $name";
print end_html;



