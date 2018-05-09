<?php

return [
    /*
     * Namespaces used by the generator.
     */
    'namespace' => [
        /*
         * Base namespace/directory to create the new file.
         * This is appended on default Laravel namespace.
         * Usage: php artisan datatables:make User
         * Output: App\DataTables\UserDataTable
         * With Model: App\User (default model)
         * Export filename: users_timestamp
         */
        'base' => 'DataTables',

        /*
         * Base namespace/directory where your model's are located.
         * This is appended on default Laravel namespace.
         * Usage: php artisan datatables:make Post --model
         * Output: App\DataTables\PostDataTable
         * With Model: App\Post
         * Export filename: posts_timestamp
         */
        'model' => '',
    ],

    /*
     * Set Custom stub folder
     */
    //'stub' => '/resources/custom_stub',

    /*
     * PDF generator to be used when converting the table to pdf.
     * Available generators: excel, snappy
     * Snappy package: barryvdh/laravel-snappy
     * Excel package: maatwebsite/excel
     */
    'pdf_generator' => 'snappy',

    /*
     * Snappy PDF options.
     */
    'snappy' => [
        'options' => [
            'no-outline'    => true,
            'margin-left'   => '0',
            'margin-right'  => '0',
            'margin-top'    => '10mm',
            'margin-bottom' => '10mm',
        ],
        'orientation' => 'landscape',
    ],

    /*
     * Default html builder parameters.
     */
    'parameters' => [
        'dom'     => ' "<\'row be-datatable-header\'<\'col-sm-6\'l><\'col-sm-6\'f>>" 
        "<\'row be-datatable-body\'<\'col-sm-12\'tr>>" 
        "<\'row be-datatable-footer\'<\'col-sm-5\'i><\'col-sm-7\'p>>"',
        'order'   => [[0, 'desc']],
        'buttons' => [
            'create',
            'export',
            'print',
            'reset',
            'reload',
        ],
    ],
];
