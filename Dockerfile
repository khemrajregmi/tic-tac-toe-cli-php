# Use the official PHP base image
FROM php:8.2

# Copy the PHP application files to the working directory
COPY . /src/src

# Set the working directory inside the container
WORKDIR /src/

# Start the PHP built-in web server
CMD ["php", "tic-tac-toe.php"]