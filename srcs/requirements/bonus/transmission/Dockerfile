# Use Debian Bullseye as the base image
FROM debian:bullseye-slim

# Metadata
LABEL maintainer="alexandraquesad@gmail.com" \
      version="1.0" \
      description="Transmission with NGINX SSL"

# Set environment variables to non-interactive (prevents some prompts)
ENV DEBIAN_FRONTEND=non-interactive

# Update and install required packages
RUN apt-get update && apt-get install -y \
    transmission-daemon \
    nginx \
    vim \
    ssl-cert \
    && rm -rf /var/lib/apt/lists/* \
    && mkdir /downloads

# Modify Transmission settings
RUN echo '{ \
    "rpc-whitelist": "*.*.*.*", \
    "rpc-whitelist-enabled": false, \
    "rpc-username":"hey1234", \
    "rpc-password":"hey1234" \
}' > /var/lib/transmission-daemon/.config/transmission-daemon/settings.json


# Create a self-signed certificate
RUN make-ssl-cert generate-default-snakeoil --force-overwrite

# Copy NGINX configuration and starter script for Transmission
COPY conf/ngnix-transmission.conf /etc/nginx/sites-available/
COPY conf/start.sh /start.sh
RUN chmod +x /start.sh

# Enable NGINX site configuration
RUN ln -s /etc/nginx/sites-available/ngnix-transmission.conf /etc/nginx/sites-enabled/

# Set the command to start NGINX and Transmission
CMD ["/start.sh"]