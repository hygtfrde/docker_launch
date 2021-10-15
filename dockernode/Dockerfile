# use Node 10 for app
FROM node:10 
# set working directory 
WORKDIR /usr/src/app
# copy npm server files into this folder 
COPY package*.json ./
COPY server.js ./
# install dependencies 
RUN npm install
# open up port 
EXPOSE 8080 
# run server file 
CMD [ "node", "server.js" ]