<?php

namespace Database\Seeders;

use App\Models\chair;
use App\Models\phone_people;
use App\Models\schedule;
use Illuminate\Database\Seeder;
use PHPUnit\TextUI\XmlConfiguration\Group;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(chairs::class);
        $this->call(class_groups::class);
        $this->call(class_matters::class);
        $this->call(classrooms::class);
        $this->call(email_peoples::class);
        $this->call(email_schools::class);
        $this->call(emails::class);
        $this->call(grades::class);
        $this->call(groups::class);
        $this->call(inscriptions::class);
        $this->call(notes::class);
        $this->call(parents::class);
        $this->call(people::class);
        $this->call(phone_peoples::class);
        $this->call(phone_schools::class);
        $this->call(phones::class);
        $this->call(schedules::class);
        $this->call(schools::class);
        $this->call(student_classes::class);
        $this->call(students::class);
        $this->call(teacher_classes::class);
        $this->call(teacher_gruops::class);
        $this->call(teachers::class);
        $this->call(turns::class);
        $this->call(tutors::class);
        $this->call(user_types::class);
        $this->call(roleSeeder::class);
        $this->call(usersSeeder::class);
    }

 
}
