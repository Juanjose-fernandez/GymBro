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
git clone <url-of-GYMBRO-repository>
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

GYMBRO/
├── api/               # Backend (Laravel)
│   ├── Dockerfile
│   └── ... (Laravel code)
├── frontend/          # Frontend (Vue.js)
│   ├── Dockerfile
│   └── ... (Vue code)
└── docker-compose.yml

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


### 5. Accessing the Application
Once the containers are up and running, you can access the following endpoints:

API (Laravel): http://localhost:8000
Frontend (Vue.js): http://localhost:8080





