# Use a lightweight Node.js image
FROM node:18.3-alpine

# Set the working directory inside the container
WORKDIR /app

# Copy package.json and lock file before installing dependencies
COPY package*.json ./

# Install dependencies
RUN npm install --force

# Ajustar permisos de directorios críticos
RUN chown -R node:node /app
# RUN chmod -R 775 



# Copy the rest of the application files
COPY . .


# Expose port 5173 for Vite dev server
EXPOSE 5173

# Run the application with Vite on host 0.0.0.0 to make it accessible outside the container
CMD ["npm", "run", "dev", "--", "--host", "0.0.0.0"]
