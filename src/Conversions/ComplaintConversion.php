<?php

namespace App\Conversions;


class ComplaintConversion implements IConversion
{
    public function getIdField(): string { return 'id'; }
    public function getTableName(): string { return 'complaint'; }

    public function getApiColumns() :array
    {
        return [
            ['db' => 'title', 'dt' => 0],
            ['db' => 'date_created', 'dt' => 1,
                'formatter' => function($d) { return date('jS M y', strtotime($d)); }
            ],
            ['db' => 'id', 'dt' => 2,
                'formatter' => function($id) {
                    return "<a class='btn btn-info' href='/complaints/view/$id/'>View complaint</a>";
                }
            ]
        ];
    }
}
