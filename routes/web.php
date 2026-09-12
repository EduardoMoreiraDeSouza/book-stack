<?php

use Illuminate\Support\Facades\Route;


// Homepage
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Books Collections
Route::get('/books', function () {

    // Simulando o DB
    $books = [
        [
            'id' => 1,
            'title' => 'O Grande Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'genre' => 'Ficção',
            'published_year' => 1925,
            'description' => 'O Grande Gatsby é um romance de 1925 do escritor americano F. Scott Fitzgerald. Situado na Era do Jazz em Long Island, o romance retrata as interações do narrador Nick Carraway com o misterioso milionário Jay Gatsby e a obsessão de Gatsby em se reunir com seu antigo amor, Daisy Buchanan.',
        ],
        [
            'id' => 2,
            'title' => 'Harry Potter e a Pedra Filosofal',
            'author' => 'J.K. Rowling',
            'genre' => 'Fantasia',
            'published_year' => 1997,
            'description' => 'Harry Potter e a Pedra Filosofal é um romance de fantasia escrito pela autora britânica J.K. Rowling. É o primeiro romance da série Harry Potter e seu sucessor é Harry Potter e a Câmara Secreta.',
        ],
    ];

    return view('books.index',
        [
            'books' => $books,
        ]
    );

})->name('books.index');

// Book View
Route::get('/books/{bookId}', function (
    $bookId
) {

    // Silumando o DB
    $books = [
        [
            'id' => 1,
            'title' => 'O Grande Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'genre' => 'Ficção',
            'published_year' => 1925,
            'description' => 'O Grande Gatsby é um romance de 1925 do escritor americano F. Scott Fitzgerald. Situado na Era do Jazz em Long Island, o romance retrata as interações do narrador Nick Carraway com o misterioso milionário Jay Gatsby e a obsessão de Gatsby em se reunir com seu antigo amor, Daisy Buchanan.',
        ],
        [
            'id' => 2,
            'title' => 'Harry Potter e a Pedra Filosofal',
            'author' => 'J.K. Rowling',
            'genre' => 'Fantasia',
            'published_year' => 1997,
            'description' => 'Harry Potter e a Pedra Filosofal é um romance de fantasia escrito pela autora britânica J.K. Rowling. É o primeiro romance da série Harry Potter e seu sucessor é Harry Potter e a Câmara Secreta.',
        ],
    ];

    // Só retorna o livro pesquisado
    $book = array_find($books, function ($book) use ($bookId) {
        return $book['id'] == $bookId;
    });

    if (!$book) {
        abort(404);
    }

    return view(
        'books.show',
        [
            'book' => $book,
        ]
    );

})->name('books.show');
