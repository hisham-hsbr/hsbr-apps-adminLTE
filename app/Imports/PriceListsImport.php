<?php

namespace App\Imports;

use App\Models\PriceList;
use Maatwebsite\Excel\Concerns\ToModel;

class PriceListsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $priceList = new PriceList([
            "name"=>$row['name'],
            "parent"=>$row['parent'],
            "status"=>$row['status'],
            "created_by" => Auth::user()->id,
            "updated_by" => Auth::user()->id,
        ]);
        return $priceList;
    }
}
