<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//this is for contact us page
class Register extends Model
{

    use HasFactory;
    protected $fillable = ['name', 'email', 'number', 'desigination', 'organization', 'province', 'participation', 'dietary_restriction','accommodation','academic_score','membership','member_num','lifeMember_num','generalMember_num','remarks','image','hear'];

}

