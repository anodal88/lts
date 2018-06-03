<?php

namespace App\DataTables;

use App\User;

use Yajra\DataTables\Services\DataTable;
use DB;

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
                return view('datatables.user.columns.nameAvatarRole', [
                    'user' => $user
                ]);
            })
            ->editColumn('company',function($user){
                $path = "http://tweeter.com/{$user->company_id}";
                $link = "<a href='" . $path . "'>{$user->company}</a>";
                return $link;
            })
            ->setRowId(function ($user) {
                return $user->id;
            })
            ->addColumn('action',function($user){
                return view('datatables.user.columns.actions', [
                    'user' => $user
                ]);
            })

            ->rawColumns(['name','company','action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {

        $query =  $model->newQuery()
            ->select([
                'users.id',
                'users.name',
                'users.email',
                'roles.id as role_id',
                'roles.name as roleName',
                'companies.name as company',
                'companies.id as company_id'
                ])

            ->selectRaw("LOCATE(',',GROUP_CONCAT(DISTINCT roles.name ORDER BY roles.priority ASC SEPARATOR ',')) as role_sep_pos")
            ->selectRaw("GROUP_CONCAT(DISTINCT roles.name ORDER BY roles.priority ASC SEPARATOR ',') as role")
            ->join('companies', 'users.company_id', '=', 'companies.id')
            ->leftJoin('role_user','users.id','=','role_user.user_id')
            ->join('roles','role_user.role_id','=','roles.id')
            ->groupBy(['users.name'])->get()
            ;



        return $query;
    }

    /**oin
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

            ['data'=>'name','class'=>'user-avatar cell-detail user-info','title'=>'Name'],
            ['data'=>'email','title'=>'Email'],
            ['data'=>'company','title'=>'Company'],
            ['data'=>'action','class'=>'text-right','title'=>'']

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
