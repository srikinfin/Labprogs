#!/usr/bin/perl
use CGI ":standard";

print header;
print start_html;

print "Server Name: $ENV{SERVER_NAME} ";
print "Server Software: $ENV{SERVER_SOFTWARE}";
print "Server Protocol: $ENV{SERVER_PROTOCOL}";
print "Server Port: $ENV{SERVER_PORT}";
print "CGI interface: $ENV{GATEWAY_INTERFACE}";

print end_html;

