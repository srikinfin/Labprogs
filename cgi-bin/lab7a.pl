#!/usr/bin/perl
use CGI ":standard";

print header;
print start_html;

print "Server Name: $ENV{SERVER_NAME} \n";
print br;
print "Server Software: $ENV{SERVER_SOFTWARE}\n";
print br;
print "Server Protocol: $ENV{SERVER_PROTOCOL}\n";
print br;
print "Server Port: $ENV{SERVER_PORT}\n";
print br;
print "CGI interface: $ENV{GATEWAY_INTERFACE}";

print end_html;

