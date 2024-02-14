<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
     protected $fillable = [
        'name',
        'email',
        'contact',
    ];
    
    protected $table = "contact";
    
    //Method to creat the contact
    public function creatContact(array $data) {
        $this->insert($data);
    }
    //Method to update the contact
    public function updateContact(array $data, string $id) {
        $this->where('id', '=', $id)->update($data);
    }
    //Method to delete the contact
    public function deleteContact(string $id) {
        $this->where('id', '=', $id)->delete();
    }
}
