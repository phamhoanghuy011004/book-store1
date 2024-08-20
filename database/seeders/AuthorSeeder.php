<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([

            [
                'name' => 'Gosho Aoyama',
                'bio' => 'Nhà manga Nhật Bản nổi tiếng với series Detective Conan.',
                'date_of_birth' => '1963-06-21',
                'nationality' => 'Japanese',
                'photo' => 'https://res.cloudinary.com/dficfkyug/image/upload/v1724142520/kvsvapwpmd8nmy2cvbp3.jpg',
                'email' => 'goshoaoyama@example.com',
                'status' => '1',
            ],
            [
                'name' => 'Đoàn Thạch Biền',
                'bio' => 'Nhà văn Việt Nam nổi tiếng với các tác phẩm văn học hiện đại và thơ ca.',
                'date_of_birth' => '1946-05-01',
                'nationality' => 'Vietnamese',
                'photo' => 'https://res.cloudinary.com/dficfkyug/image/upload/v1724142577/wsyzlkcxek1xlv65znon.jpg',
                'email' => 'doanthachbien@example.com',
                'status' => '1',
            ],
            [
                'name' => 'Dale Carnegie',
                'bio' => 'Tác giả và giảng viên nổi tiếng với cuốn sách "How to Win Friends and Influence People".',
                'date_of_birth' => '1888-11-24',
                'nationality' => 'American',
                'photo' => 'https://res.cloudinary.com/dficfkyug/image/upload/v1724142613/osrnx5jbgtdkkhwuommw.webp',
                'email' => 'dalecarnegie@example.com',
                'status' => '1',
            ],
            [
                'name' => 'George S. Clason',
                'bio' => 'Tác giả nổi tiếng với cuốn sách "The Richest Man in Babylon".',
                'date_of_birth' => '1874-11-07',
                'nationality' => 'American',
                'photo' => 'https://res.cloudinary.com/dficfkyug/image/upload/v1724142661/mfkzpyyci2fdy3porr5a.jpg',
                'email' => 'georgesclason@example.com',
                'status' => '1',
            ],
            [
                'name' => 'Charles Duhigg',
                'bio' => 'Nhà báo và tác giả nổi tiếng với cuốn sách "The Power of Habit".',
                'date_of_birth' => '1974-03-01',
                'nationality' => 'American',
                'photo' => 'https://res.cloudinary.com/dficfkyug/image/upload/v1724142704/rrnp4lrkvfczsoa6ficm.jpg',
                'email' => 'charlesduhigg@example.com',
                'status' => '1',
            ],
            [
                'name' => 'Larry King',
                'bio' => 'Người dẫn chương trình truyền hình nổi tiếng và tác giả.',
                'date_of_birth' => '1933-11-19',
                'nationality' => 'American',
                'photo' => 'https://res.cloudinary.com/dficfkyug/image/upload/v1724142748/crow8zx8nx0rv4dgabt1.jpg',
                'email' => 'larryking@example.com',
                'status' => '1',
            ],
            [
                'name' => 'Robert Kiyosaki',
                'bio' => 'Tác giả nổi tiếng với cuốn sách "Rich Dad Poor Dad".',
                'date_of_birth' => '1947-04-08',
                'nationality' => 'American',
                'photo' => 'https://res.cloudinary.com/dficfkyug/image/upload/v1724142794/ytqlwvz3wcguypwzxjox.jpg',
                'email' => 'robertkiyosaki@example.com',
                'status' => '1',
            ],
            [
                'name' => 'Sean Covey',
                'bio' => 'Tác giả và nhà giáo dục nổi tiếng với cuốn sách "The 7 Habits of Highly Effective Teens".',
                'date_of_birth' => '1964-09-28',
                'nationality' => 'American',
                'photo' => 'https://res.cloudinary.com/dficfkyug/image/upload/v1724142849/no6uwdnayfr6n8ptuhus.jpg',
                'email' => 'seancovey@example.com',
                'status' => '1',
            ],
            [
                'name' => 'Eckhart Tolle',
                'bio' => 'Tác giả nổi tiếng với cuốn sách "The Power of Now".',
                'date_of_birth' => '1948-02-16',
                'nationality' => 'German',
                'photo' => 'https://res.cloudinary.com/dficfkyug/image/upload/v1724142892/wwtcs18eus0kyba10xdm.jpg',
                'email' => 'eckharttolle@example.com',
                'status' => '1',
            ],
            [
                'name' => 'Norman Vincent Peale',
                'bio' => 'Tác giả và mục sư nổi tiếng với cuốn sách "The Power of Positive Thinking".',
                'date_of_birth' => '1898-05-31',
                'nationality' => 'American',
                'photo' => 'https://res.cloudinary.com/dficfkyug/image/upload/v1724142947/iyz9wqv21mtcz7w0pt7l.jpg',
                'email' => 'normanvincentpeale@example.com',
                'status' => '1',
            ],



        ]);
    }
}
