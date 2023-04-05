<?php

namespace App\Imports;

use App\Models\EmployeeLeave;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ImportEmployeeLeave implements ToModel, WithStartRow
{

  /**
   * @return int
   */
  public function startRow(): int
  {
    return 2;
  }

  /**
   * @param array $row
   *
   * @return \Illuminate\Database\Eloquent\Model|null
   */
  public function model(array $row)
  {
    return new EmployeeLeave([
      //
      'emp_id' => $row[0],
      'casual_leave' => $row[1],
      'sick_leave' => $row[2],
      'privilege_leave' => $row[3],
      'maternity_leave' => $row[4],
      'bereavement_leave' => $row[5]
    ]);
  }
}
