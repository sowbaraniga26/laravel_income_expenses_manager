<?php

namespace App\Enums;
  

enum ReportType: string{
    case INCOME = 'INCOME';
    case EXPENSE = 'EXPENSE';
    // case OTHER = 'Other';

    public static function getValue(): array 
    {
      return array_column(ReportType::cases(),'value');
    }
    public static function getKeyValue(): array 
    {
      return array_column(ReportType::cases(),'value','key');
    }
}