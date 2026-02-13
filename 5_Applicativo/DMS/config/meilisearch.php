<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Meilisearch Configuration
    |--------------------------------------------------------------------------
    |
    | Meilisearch is an open-source search engine used for full-text indexing
    | of document content. This configuration manages the connection and
    | behavior of the search service.
    |
    */

    'host' => env('MEILISEARCH_HOST', 'http://127.0.0.1:7700'),
    'key' => env('MEILISEARCH_KEY', null),
    'index' => env('MEILISEARCH_INDEX', 'documents'),

];
