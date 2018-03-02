<?php

namespace App\Conversions;


class NoteConversion implements IConversion
{
    public function getIdField(): string { return 'id'; }
    public function getTableName(): string { return 'notes'; }
}
