FROM node:18.3-alpine

WORKDIR /app

COPY package*.json ./

RUN npm install
RUN npm install --force

COPY . .

EXPOSE 8080

CMD ["npm", "run", "dev", "--", "--host", "0.0.0.0"]
