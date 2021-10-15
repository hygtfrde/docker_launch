# Docker Launcher Apps 
Collection of starter apps to run as Docker containers. 

## Apps to Launch As Containers 
* /dockernode => launches a a Node Express app 

### Build your image in the current directory 
docker build -t imagename . 
### Rename if you need with 
docker rename CONTAINER NEW_NAME
### Spin up container from image 
docker run --name image -p 8080:8080 -d container 
