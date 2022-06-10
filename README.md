Programming Language used: PHP (Laravel Framework) with Test-Driven Development

Database: MySQL


Instructions for testing:

-	Clone the repository
-	Perform composer install in the terminal
-	Copy the .env.example file to .env
-	Perform php artisan:key-generate
-	Edit .env database values
-	Perform php artisan migrate:fresh --seed to setup database


Question 1:
-	The API that has been developed lists all the regions in Malawi together with their districts. In the districts, the population, total area is square kilometers in shown.
-	The API has two POST endpoints:
o	/public/api/question-1/region
o	/public/api/question-2/district
-	Both of these POST endpoints accept optional body parameters “population_greater_than” and “population_less_than” that select the districts that have those populations.
-	The controllers for this API are in the app/Http/Controllers/Question1



Question 2:
-	The endpoint for this API is /api/question-2/{number}
-	Replace the {number} with the number you want to get the maxi and mini
-	The controllers for this API are in the app/Http/Controllers/Question2

Question 3:
-	The endpoint for this API are
o	/api/question-3/create
o	/api/question-3/disable/{string}
-	For the disable endpoint, replace the {string} with the actual string that you want to disable
-	The controllers for this API are in the app/Http/Controllers/Question3
