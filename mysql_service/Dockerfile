# Use the official MySQL image as the base
FROM mysql:8.0

# Set the required environment variables
ENV MYSQL_ROOT_PASSWORD=pneumatic81*
ENV MYSQL_DATABASE=se
ENV MYSQL_PASSWORD=pneumatic81*
ENV MYSQL_ALLOW_EMPTY_PASSWORD=yes

# Copy the .sql file to the container's /docker-entrypoint-initdb.d/ directory
COPY se.sql /docker-entrypoint-initdb.d/

# Expose the MySQL port
EXPOSE 3306
