# Task Management API

## Overview

This is a simple RESTful API built using Lumen for managing tasks. The API supports basic CRUD (Create, Read, Update, Delete) operations, allowing users to manage their tasks efficiently.

## Features

- Create tasks
- Retrieve all tasks
- Retrieve a specific task
- Update tasks
- Delete tasks
- Filter tasks by status and due date
- Search tasks by title
- Pagination for task listing

## Requirements

- PHP >= 8.0
- Composer
- PostgreSQL

## Installation

### 1. Clone the Repository

```bash
git clone git@github.com:felixkpt/lumen-tasks-api.git
cd lumen-tasks-api
composer install
cp .env.example .env # ensure the host and credentials for the postgres database are okay 
php -S localhost:8000 -t public # to serve the project