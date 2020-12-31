# Movie Backend with Laravel
*****

# Not Yet Deployed

# Description
This backend project was built with the Laravel Framework. It utilized blade functionality and eloquent routing. It is supported by use of artisan in the command line. This site has full user CRUD functionality through API routes. It also has locally hosted web application with full CRUD functionality for ease of database management. The locally hosted backend has easy user interactions through input boxes and buttons to delete, edit, or create.

# Routes
*****

__Method__ | __Path__ | __Descriptions__ |
|----------|----------|------------------|
| GET | / | Welcome page |
|GET | /api/movies | Returns all movies as JSON Objects for API |
| POST | api/movies/create | Gives API users ability to create new movie, pass new movie in as object |
| PUT | api/movies/{id} | Gives API users ability to update/edit movie, pass in updates as object |
| DELETE | api/movies/{id} | Gives API users ability to delete a movie |
| GET | api/movies/{status} | Gives users ability to retrive movie based on status of being 'active' or 'inactive' |
| GET | /movies | Local user gets all movies, they are sorted by active or inactive |
| POST | /movies/create | Local user gets ability to create new movies. This function works in conjuction with the store function controller so that you can create and store the function |
| GET | /movies/{movie} | Local user can access specific movies |
| PUT | /movies/{movie}/edit | Local user can edit specific movies through this function. |
| DELETE | /movie/{movie} | Local user can delete specific movies through this function |