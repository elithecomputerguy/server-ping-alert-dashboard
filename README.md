# server-ping-alert
Dashboard that shows who pings your linux box - PHP and TCPDUMP

This uses tcpdump and php to see who is pinging your linux box.  This can be modified to any other network traffic that tcpdump tracks.

Tcpdump buffers before it outputs to text file so I collect all tcpdump info and then use php to pull specific info.


tcpdump command - this can be setup on startup

sudo tcpdump -w > /var/www/html
