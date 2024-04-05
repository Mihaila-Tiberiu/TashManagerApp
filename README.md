
# Prerequisites:

- Have git installed
- Have PHP and composer installed
- Have docker installed

# To set up the project:

#1 Clone the project:
```plaintext
git clone git@github.com:Mihaila-Tiberiu/TashManagerApp.git
```

#2 Create the database container:
```plaintext
docker-compose up -d db
```

#3 Start the container. Make sure nothing is running on port 3306!
```plaintext
docker start task_manager_app_db_1
```

#3 Make sure the migrations are valid:
```plaintext
php artisan migrate 
```

#4 Start the server:
```plaintext
php artisan serve
```

#5 Go to the URL below to see the application:
```plaintext
http://localhost:8000
```

# To open up the app again after the initial setup:

#1 Restart the database container:
```plaintext
docker start task_manager_app_db_1
```

#2 Start the server:
```plaintext
php artisan serve
```
#3 Go to the URL below to see the application:
```plaintext
http://localhost:8000
```
