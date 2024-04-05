# Personal Task Manager App 

# Functionality:

- To add a new task, use the form
- To edit a task, click on the appropriate table row, edit the appropriate fields and then submit

# Prerequisites:

- Have Git installed
- Have PHP and composer installed
- Have Docker installed

# To set up the project:

#1 Clone the project:
```plaintext
git clone git@github.com:Mihaila-Tiberiu/TashManagerApp.git
```

#2 Navigate to the project folder:
```plaintext
cd TashManagerApp
cd task-manager-app
```

#3 Create the database container:
```plaintext
docker-compose up -d db
```

#4 Start the container (if it hasn't already started). Make sure nothing is running on port 3306!
```plaintext
docker start task-manager-app_db_1
```

#5 Install composer
```plaintext
composer install
```

#6 Rename the .env.example file to .env

#7 Change the DB values within the .env file
```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager_app_db
DB_USERNAME=root
DB_PASSWORD=root
```

#8 Make sure the migrations are valid:
```plaintext
php artisan migrate 
```

#9 Generate the encryption key
```plaintext
php artisan key:generate
php artisan config:cache
```

#10 Start the server:
```plaintext
php artisan serve
```

#11 Go to the URL below to see the application:
```plaintext
http://localhost:8000
```

# To open up the app again after the initial setup:

#1 Restart the database container:
```plaintext
docker start task-manager-app_db_1
```

#2 Start the server:
```plaintext
php artisan serve
```
#3 Go to the URL below to see the application:
```plaintext
http://localhost:8000
```
