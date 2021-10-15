# Docker Launcher Apps 
Collection of starter apps to run as Docker containers. 

## Apps to Launch As Containers 
* dockernode launches a a Node Express app 
* dockerphp launches the a PHP server 

### Build your image in the current directory 
```docker build -t imagename .```
### Rename if you need with 
```docker rename CONTAINER NEW_NAME```
### Spin up container from image 
```docker run --name container -p 8080:8080 -d image``` <br>
For example, spin up Mint 19 after pulling the latest image with <br> 
```sudo docker run -it linuxmintd/mint19-amd64 /bin/bash``` 
