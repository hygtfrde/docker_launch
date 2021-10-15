<!-- docker build -t my-php-app . -->
<!-- docker run -it --rm --name my-running-app my-php-app -->
<!-- Or run directly without Dockerfile: -->
<!-- docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php your-script.php -->

<?php

echo "Hello from the docker container";

?>