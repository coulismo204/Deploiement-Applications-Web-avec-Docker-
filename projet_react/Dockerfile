FROM node:24

# set the working directory
WORKDIR /react

# copy the package.json file
COPY package*.json ./

# install the dependencies
RUN npm install

# build the app
COPY . .

# expose port 3000
EXPOSE 3000

# start the app
CMD ["npm", "run", "dev"]