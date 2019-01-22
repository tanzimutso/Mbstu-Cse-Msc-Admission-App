<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant_Info extends Model
{
    protected $table = 'applicant__infos';

    protected $fillable = ['name','father_name','mother_name','local_guardian_name','present_address','permanent_address',
        'date_of_birth','nationality','ssc_passing_year','ssc_board','ssc_cgpa','ssc_class','hsc_passing_year','hsc_board',
        'hsc_cgpa','hsc_class','bsc_passing_year','bsc_university','bsc_cgpa','bsc_class','emergency_contact','email',
        'bkash_transaction_no','picture','signature'];

}
