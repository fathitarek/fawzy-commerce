<?php

namespace App\DataTables;

use App\Models\sucess_stories;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class sucess_storiesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'sucess_stories.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\sucess_stories $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(sucess_stories $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            "Name English"=>['name'=>'name_en','data'=>'name_en'],
            "Name Arabic"=>['name'=>'name_ar','data'=>'name_ar'],
            // "Description English"=>['name'=>'description_en','data'=>'description_en'],
            // "Description Arabic"=>['name'=>'description_ar','data'=>'description_ar'],
           // "Image"=>['name'=>'image','data'=>'image'],

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'sucess_stories_datatable_' . time();
    }
}
