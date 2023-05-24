# Use the official PHP base image
FROM php:8.2

# Set the working directory inside the container
WORKDIR /src

# Copy the PHP application files to the working directory
COPY . /src

# Expose port 80 for web server
EXPOSE 80

# Start the PHP built-in web server
CMD ["php", "-S", "0.0.0.0:80"]