<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->editColumn('name', function ($user) {
                $path = "http://google.com";
                $link = "<a href='" . $path . "'>{$user->name}</a>";
                return $link;
            })
            ->rawColumns(['name'])
            ->setRowId(function ($user) {
                return $user->id;
            })
            ->addColumn('action', 'aa');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->newQuery()->select('name', 'email', 'created_at', 'updated_at');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('users')
            ->columns($this->getColumns())
            ->addTableClass(['table-striped table-hover table-fw-widget dataTable no-footer'])
            ->minifiedAjax()
            ->addAction(['width' => '80px'])
            ->parameters([
                'dom' => '"<\'row be-datatable-header\'<\'col-sm-6\'l><\'col-sm-6\'f>>" 
        "<\'row be-datatable-body\'<\'col-sm-12\'tr>>" 
        "<\'row be-datatable-footer\'<\'col-sm-5\'i><\'col-sm-7\'p>>"',
                'buttons' => ['print'],
            ]);
        //->parameters($this->getBuilderParameters());

    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [

            'name',
            'email',
            'created_at',
            'updated_at'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Users_' . date('YmdHis');
    }


}
