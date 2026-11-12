# Simple Laravel Task Manager (CRUD)

Ye zip me sirf custom code files hain. Inhe ek fresh Laravel project me daal kar chalayen.

## Steps
1. Naya Laravel project banayen:
   composer create-project laravel/laravel my-app
2. Is zip ke folders (routes, app, database, resources) ko my-app ke andar copy karein
   (jab puche to "replace" kar dein: routes/web.php).
3. `.env` me database set karein (ya default SQLite use karein).
4. Migration chalayen:
   php artisan migrate
5. Server start karein:
   php artisan serve
6. Browser me kholein: http://localhost:8000

## Features
- Task add / edit / delete
- Done / Undo toggle
- Validation + flash messages
