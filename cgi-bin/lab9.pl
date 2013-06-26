#!/usr/bin/perl


use CGI ':standard';
print "Refresh: 1\n";

print header;
print start_html;

($s,$m,$h)=localtime(time);
print "The current system time is $h : $m : $s";

print end_html;


