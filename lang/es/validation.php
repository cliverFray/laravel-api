<?php

return [
    'required' => 'El campo :attribute es obligatorio.',
    'string' => 'El campo :attribute debe ser una cadena de texto.',
    'numeric' => 'El campo :attribute debe ser un número.',
    'integer' => 'El campo :attribute debe ser un número entero.',
    'unique' => 'El valor del campo :attribute ya está en uso.',
    'exists' => 'El campo :attribute seleccionado no existe.',
    'max' => [
        'string' => 'El campo :attribute no debe ser mayor a :max caracteres.',
    ],
    'min' => [
        'numeric' => 'El campo :attribute debe ser al menos :min.',
    ],
    'attributes' => [
        'name' => 'nombre',
        'description' => 'descripción',
        'price' => 'precio',
        'stock' => 'stock',
        'category_id' => 'categoría',
    ],
];
