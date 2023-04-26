<?php

namespace App\DataTables;

use App\Models\Banner;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Services\DataTable;

class BannerDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $user = auth()->user();
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addColumn('action', function ($query) use ($user) {
                $edit_route = route('backend.banner.edit', $query->id);
                $actionBtn = '<div class="d-flex align-self-center">';
                if ($user->can('banner.edit')) {
                    $actionBtn .= '<a class="btn btn-outline-info btn-sm mr-3" href="' . $edit_route . '"> <span class="sr-only">Copy</span> <i class="fa fa-edit"></i>
                            </a>';
                }

                if ($user->can('banner.delete')) {
                    $actionBtn .= '<a class="btn btn-outline-danger btn-sm delete-btn" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal" data-id="' . $query->id . '">
                    <span class="sr-only">Delete</span> <i class="fa fa-trash"></i>
                            </a>';
                }
                $actionBtn .= '</div>';
                return $actionBtn;
            })
            ->addColumn('Url', function ($query) use ($user) {
                $URL = $query->link;
                if ($URL == null || $URL == '') {
                    return '-';
                } else {
                    return '<a class="btn btn-outline-info btn-sm mr-3" href="' . $URL . '" target="_blank"> <span class="sr-only">Copy</span> <i class="fa fa-link"></i>
                    </a>';
                }
            })
            ->addColumn('image', function ($query) {
                return '<img src="' . url($query->image) . '" width="50px" height="50px">';
            })
            ->addColumn('Short Text', function ($query) {
                $short_text = $query->short_text;
                if ($short_text == null || $short_text == '') {
                    return '-';
                } else {
                    return '<p>' . $short_text . '</p>';
                }
            })

            ->rawColumns(['action', 'Short Text', 'image', 'Url']);
    }

    /**
     * Get query source of dataTable.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Banner $model)
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
            ->parameters([
                'responsive' => true,
                'defaultContent' => '',
            ])
            ->setTableId('banners-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('create')->action("window.location = '" . route('backend.banner.create') . "';"),
                Button::make('export'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload'),
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            ['name' => 'id', 'title' => 'No', 'data' => "DT_RowIndex"],
            'image',
            'title',
            'Short Text',
            'Url',
            'action'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Banners_' . date('YmdHis');
    }
}
