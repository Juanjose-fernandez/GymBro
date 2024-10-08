# GYMBRO

Welcome to the **GYMBRO** project. This repository contains the Docker configuration for an application that includes a Laravel backend and a Vue.js frontend. The repository structure is designed to facilitate development and collaboration.

## Project Structure

The project is divided into three repositories:

1. **GYMBRO**: Contains the Docker configuration and the `docker-compose.yml` file.
2. **Frontend**: Contains the code for the Vue.js application.
3. **API**: Contains the code for the Laravel API.

## Requirements

To run the project, make sure you have the following installed on your machine:

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Cloning the Repositories

### 1. Clone the GYMBRO Repository

To get started, clone the main `GYMBRO` repository:

```bash
git clone https://github.com/Juanjose-fernandez/GymBro
cd GYMBRO
```

### 2. Clone the Frontend and Backend Repositories
Each project has its own repository so let's clone them to initialize them locally.

```bash
cd backend 

git clone https://github.com/Juanjose-fernandez/GymBro-api 

cd ..
cd frontend https://github.com/Juanjose-fernandez/GymBro-frontend 
```
### 3. Verify the Folder Structure
After cloning, your folder structure should look like this:

```bash
GYMBRO/
├── api/               # Backend (Laravel)
│   ├── Dockerfile
│   └── ... (Laravel code)
├── frontend/          # Frontend (Vue.js)
│   ├── Dockerfile
│   └── ... (Vue code)
└── docker-compose.yml
```

### 4. Running the Project
To start the project, follow these steps:
Navigate to the root folder of GYMBRO (where the docker-compose.yml file is located):

```bash
cd /path/to/GYMBRO
```
Build and start the containers using Docker Compose:

```bash
docker-compose up --build
//or
docker compose up --build
```

This will build the Docker images and start the containers for both the backend and frontend.


### 5. Building the backend
To finish initializing the laravel project you must perform the migration of the database for this you must access inside the container
```bash
cd path/to/GymBro
docker exec -it gymbro-api-1 /bin/bash
php artisan migrate
```


### 6. Accessing the Application
Once the containers are up and running, you can access the following endpoints:
1. API (Laravel): http://localhost
2. Frontend (Vue.js): http://localhost:5173/
3. PhpMyAdmin (Mysql): http://localhost:8081/


### 7. Additional Notes

Ensure that ports 8000 and 8080 are free on your machine to avoid conflicts.

You can stop the running containers by pressing CTRL + C in the terminal where you executed docker-compose up.

### 8. Issues and solutions

If you have permissions problems, make sure that your directories belong to your user, as well as having full permissions:

sudo chown -R $(whoami):$(whoami) /path/to/directories/with/bad-permissions/or/bad/user
chmod -R 775 /path/to/directories/with/bad-permissions/or/bad/user

(if you are using window do the equivalent)

