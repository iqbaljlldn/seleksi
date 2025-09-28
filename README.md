* How To Run
1. composer install
2. php artisan migrate --seed
3. php artisan serve

a. Get All
- curl -X GET localhost:8000/api/books
b. Get by ID
- curl -X GET localhost:8000/api/books/1
c. Create
- curl -X POST localhost:8000/api/books -d '{"title": "Menara 5 Warna", "author": "Ahmad Fuad", "year": "2010", "synopsis": "some synopsis or null", "book_cover": "some url or null", "publisher": "Gramedia"}'
d. Update
- curl -X PUT localhost:8000/api/books/1 -d '{"title": "Menara 5 Warna", "author": "Ahmad Fuad", "year": "2010", "synopsis": "some synopsis or null", "book_cover": "some url or null", "publisher": "Gramedia"}'
e. Delete
- curl -X DELETE localhost:8000/api/books/1
