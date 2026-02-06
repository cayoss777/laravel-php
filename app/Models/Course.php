<?php

namespace App\Models;



use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;



use App\Enums\CourseStatus;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

     protected $fillable=[
        'title',
        'slug',
        'summary',
        'description',
        'status',
        'image_path',
        'video_path',
        'welcome_message',
        'goodbye_message',
        'observation',
        'user_id',
        'level_id',
        'category_id',
        'price_id',
        ];

//       protected $casts=[
  //    'status'=>CourseStatus::class,
    //   ];



protected $casts = [
    'status' => CourseStatus::class,
];


   //      protected $casts = [
   // 'status' => \App\Enums\CourseStatus::class,
   //];


        protected function image(): Attribute
{
    return Attribute::make(
        get: fn () => $this->image_path
            ? Storage::url($this->image_path)
            : 'https://png.pngtree.com/png-vector/20221125/ourmid/pngtree-no-image-available-icon-flatvector-illustration-pic-design-profile-vector-png-image_40966566.jpg'
    );
}

        public function teacher()
        {
            return $this->belongsTo(User::class);   
        }
        public function level()
        {
            return $this->belongsTo(Level::class);   
        }
        public function category()
        {
            return $this->belongsTo(Category::class);
        }
        
        public function price()
        {
            return $this->belongsTo(Price::class);            
        }
}
