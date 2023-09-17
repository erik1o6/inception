#!/bin/bash

# sed -i "s|\"rpc-username\":.*|\"rpc-username\":\"$TRANSMISSION_RPC_USERNAME\",|" /var/lib/transmission-daemon/.config/transmission-daemon/settings.json
# sed -i "s|\"rpc-password\":.*|\"rpc-password\":\"$TRANSMISSION_RPC_PASSWORD\",|" /var/lib/transmission-daemon/.config/transmission-daemon/settings.json


service nginx start
transmission-daemon --foreground -T --config-dir /var/lib/transmission-daemon/.config/transmission-daemon --download-dir /downloads