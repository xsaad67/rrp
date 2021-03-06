<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'joe vasquez',
                'email' => 'joe.vasquez@example.com',
                'slug' => 'joe-vasquez',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hLnUTXA6MxEVHGpb.bR8C.8xEI0QARV.j0SyiPlq4Rjk1BbpYv34y',
                'bio' => NULL,
                'avatar' => '10.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:32',
                'updated_at' => '2019-02-08 05:46:32',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'maxwell king',
                'email' => 'maxwell.king@example.com',
                'slug' => 'maxwell-king',
                'email_verified_at' => NULL,
                'password' => '$2y$10$MTIvPjl/e8HL4gO4TqHlvOD8zRw.dEf0iQU/zUs1PTtNkkunDk7Bq',
                'bio' => NULL,
                'avatar' => '50.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:33',
                'updated_at' => '2019-02-08 05:46:33',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'jen morris',
                'email' => 'jen.morris@example.com',
                'slug' => 'jen-morris',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lPQ98oFxDnYJHmnAEpKTieoMktWQtiMoyC9XHXx6pcrK46oBVRd.O',
                'bio' => NULL,
                'avatar' => '12.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:34',
                'updated_at' => '2019-02-08 05:46:34',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'lola alexander',
                'email' => 'lola.alexander@example.com',
                'slug' => 'lola-alexander',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3OirGD0fX5/VSQN4.1iI3OwNzRrkQzZXMNU/U12KMIcQ9zf1MYQ5u',
                'bio' => NULL,
                'avatar' => '38.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:34',
                'updated_at' => '2019-02-08 05:46:34',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'lance hansen',
                'email' => 'lance.hansen@example.com',
                'slug' => 'lance-hansen',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ejJeydXF8mcWr3vA552/s.DfSDUWtaP8hHT24mbU6cKrbwkbmZN46',
                'bio' => NULL,
                'avatar' => '2.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:35',
                'updated_at' => '2019-02-08 05:46:35',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'abbie flores',
                'email' => 'abbie.flores@example.com',
                'slug' => 'abbie-flores',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Fb1taRXx8UHYMWjNFer29.ZoM/cjrA78mvPNUVRauBW5OvXjxtIoC',
                'bio' => NULL,
                'avatar' => '94.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:36',
                'updated_at' => '2019-02-08 05:46:36',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'kyle wagner',
                'email' => 'kyle.wagner@example.com',
                'slug' => 'kyle-wagner',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TNrcOKVsHWnuUG2xFs485OVeLOttbwsaw7MdGbNNC.mBJQL/h3itm',
                'bio' => NULL,
                'avatar' => '62.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:37',
                'updated_at' => '2019-02-08 05:46:37',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'lester thompson',
                'email' => 'lester.thompson@example.com',
                'slug' => 'lester-thompson',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iExDSeEYnSJk8h/sxtLwrOe4iWdcUgTrQVBMVKg9dKXwmvPuY7yaW',
                'bio' => NULL,
                'avatar' => '58.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:38',
                'updated_at' => '2019-02-08 05:46:38',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'eva ramirez',
                'email' => 'eva.ramirez@example.com',
                'slug' => 'eva-ramirez',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tiUXzo7IlPrDmSeXKZfAoe06DwmRL1ee1IcfLnKuR2qH7cUww4gW6',
                'bio' => NULL,
                'avatar' => '45.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:39',
                'updated_at' => '2019-02-08 05:46:39',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'ryan wallace',
                'email' => 'ryan.wallace@example.com',
                'slug' => 'ryan-wallace',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iuIWvgmHsOS.xpb.oLcxpOAH3a28b3iElTaq9zHIHM5IRtePIn9Ba',
                'bio' => NULL,
                'avatar' => '65.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:40',
                'updated_at' => '2019-02-08 05:46:40',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'antonio hopkins',
                'email' => 'antonio.hopkins@example.com',
                'slug' => 'antonio-hopkins',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OuPONm6wQY/MfNtp6ofKC.osUxT5ANZsXYKOCnLN0XsZI/uicT5yK',
                'bio' => NULL,
                'avatar' => '9.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:41',
                'updated_at' => '2019-02-08 05:46:41',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'bruce jimenez',
                'email' => 'bruce.jimenez@example.com',
                'slug' => 'bruce-jimenez',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.8o52yTi7UjZs4P4lVFFmeNL/OB0hb/KWV3DuLVd1aqxNCbaKXT.e',
                'bio' => NULL,
                'avatar' => '73.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:42',
                'updated_at' => '2019-02-08 05:46:42',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'roland simmmons',
                'email' => 'roland.simmmons@example.com',
                'slug' => 'roland-simmmons',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4Yw4cIGX2E0ZEz2qEIVQSe0BWUZBunGB4Au2HySubPVhV7w1yE95K',
                'bio' => NULL,
                'avatar' => '12.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:42',
                'updated_at' => '2019-02-08 05:46:42',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'mike long',
                'email' => 'mike.long@example.com',
                'slug' => 'mike-long',
                'email_verified_at' => NULL,
                'password' => '$2y$10$luhKzRvEo0qdmYYcurFoh.OFLo0VoAubDCB9ATzMLrrL.hNRRPGiG',
                'bio' => NULL,
                'avatar' => '99.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:43',
                'updated_at' => '2019-02-08 05:46:43',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'joyce watts',
                'email' => 'joyce.watts@example.com',
                'slug' => 'joyce-watts',
                'email_verified_at' => NULL,
                'password' => '$2y$10$X9J7IqyGuFudrYxCcQBoJeIwo0Ozor9JbYkQFqIPg4TQEN/r0K/KK',
                'bio' => NULL,
                'avatar' => '9.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:44',
                'updated_at' => '2019-02-08 05:46:44',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'jamie arnold',
                'email' => 'jamie.arnold@example.com',
                'slug' => 'jamie-arnold',
                'email_verified_at' => NULL,
                'password' => '$2y$10$t9W7puim04i1sjNnkvarT.qvftfY8iTfm2NQFR1s6UbX81TobeX.K',
                'bio' => NULL,
                'avatar' => '58.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:45',
                'updated_at' => '2019-02-08 05:46:45',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'clarence flores',
                'email' => 'clarence.flores@example.com',
                'slug' => 'clarence-flores',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mEB7HXXngoW7Z1csv51cU.l9Fj/bjIEDY2MLwgYY7cihRumFUOsyG',
                'bio' => NULL,
                'avatar' => '63.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:46',
                'updated_at' => '2019-02-08 05:46:46',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'patsy peters',
                'email' => 'patsy.peters@example.com',
                'slug' => 'patsy-peters',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IbSW/c38izUpGoqxC5kUqO0FqIxOct1FBncubiH4fzIciEcg6y51S',
                'bio' => NULL,
                'avatar' => '28.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:47',
                'updated_at' => '2019-02-08 05:46:47',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'leroy adams',
                'email' => 'leroy.adams@example.com',
                'slug' => 'leroy-adams',
                'email_verified_at' => NULL,
                'password' => '$2y$10$t5mk3ITR45cnGJwOzdR/0e0kPZIU3tKvpTnm.Oz1HCKCkWRIfWXFG',
                'bio' => NULL,
                'avatar' => '22.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:48',
                'updated_at' => '2019-02-08 05:46:48',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'marilyn hunter',
                'email' => 'marilyn.hunter@example.com',
                'slug' => 'marilyn-hunter',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Y4OORXiR/9ggjgtMHVo2MuyzS5hDN9E2dhmWmNb5CR4szoRgYmlU2',
                'bio' => NULL,
                'avatar' => '82.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:49',
                'updated_at' => '2019-02-08 05:46:49',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'ethan murray',
                'email' => 'ethan.murray@example.com',
                'slug' => 'ethan-murray',
                'email_verified_at' => NULL,
                'password' => '$2y$10$a6bCiReg9Q3JOElgNjOcPuiA1W0QmPBmPJxG/uEoccQzJKhNKXdW2',
                'bio' => NULL,
                'avatar' => '20.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:50',
                'updated_at' => '2019-02-08 05:46:50',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'misty meyer',
                'email' => 'misty.meyer@example.com',
                'slug' => 'misty-meyer',
                'email_verified_at' => NULL,
                'password' => '$2y$10$s4pa57IwvXbZmSHNkF4rPuNPUdqT3iYsux/JQMWgfJPVjvxig4ITe',
                'bio' => NULL,
                'avatar' => '83.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:51',
                'updated_at' => '2019-02-08 05:46:51',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'wendy foster',
                'email' => 'wendy.foster@example.com',
                'slug' => 'wendy-foster',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zD4X/zqp1Xu5xQiFo5BYUO795Bn9ehk/Ebhr0HxOCEHqomAC9dQRa',
                'bio' => NULL,
                'avatar' => '45.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:51',
                'updated_at' => '2019-02-08 05:46:51',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'andre kennedy',
                'email' => 'andre.kennedy@example.com',
                'slug' => 'andre-kennedy',
                'email_verified_at' => NULL,
                'password' => '$2y$10$uIG9rsmi.NWLn2TLUXwI5Okc.LkbDilNqsa6yFDJ0DFiUETGxvJSG',
                'bio' => NULL,
                'avatar' => '90.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:52',
                'updated_at' => '2019-02-08 05:46:52',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'steve phillips',
                'email' => 'steve.phillips@example.com',
                'slug' => 'steve-phillips',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VuDq.8M6ghNi5Cx3naTou.l.PGni6fFS.oHFa64y3ztxywhk3K6Hm',
                'bio' => NULL,
                'avatar' => '47.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:53',
                'updated_at' => '2019-02-08 05:46:53',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'lily jordan',
                'email' => 'lily.jordan@example.com',
                'slug' => 'lily-jordan',
                'email_verified_at' => NULL,
                'password' => '$2y$10$P8M.zsXkwI77ZKobfZvxtuzpL1KdT50.Q37MC3IJQ4wKHwt4.5AbK',
                'bio' => NULL,
                'avatar' => '62.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:54',
                'updated_at' => '2019-02-08 05:46:54',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'jordan dunn',
                'email' => 'jordan.dunn@example.com',
                'slug' => 'jordan-dunn',
                'email_verified_at' => NULL,
                'password' => '$2y$10$D.LVOWR091NtchiT1g62VuHz87WZxjZ6h5ylvqN8u2qktqA/28IXu',
                'bio' => NULL,
                'avatar' => '46.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:55',
                'updated_at' => '2019-02-08 05:46:55',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'paul young',
                'email' => 'paul.young@example.com',
                'slug' => 'paul-young',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UtFycYXc7dmU8sIKgUOgfuHvbRMu97sK5gRIs0L.0J.3PoromPAKq',
                'bio' => NULL,
                'avatar' => '53.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:56',
                'updated_at' => '2019-02-08 05:46:56',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'layla murray',
                'email' => 'layla.murray@example.com',
                'slug' => 'layla-murray',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9StsxLJ5UqSJo/5wF9M9s.ZLfWaFaGJHGgJn2psFPJRNEiqWEX7vq',
                'bio' => NULL,
                'avatar' => '7.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:56',
                'updated_at' => '2019-02-08 05:46:56',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'jen rhodes',
                'email' => 'jen.rhodes@example.com',
                'slug' => 'jen-rhodes',
                'email_verified_at' => NULL,
                'password' => '$2y$10$uX2qET60fRNwlsrxBuNBZ.q3PIAmeX5kXwyTstBDLUyoABsh25GtG',
                'bio' => NULL,
                'avatar' => '62.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:57',
                'updated_at' => '2019-02-08 05:46:57',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'erin simpson',
                'email' => 'erin.simpson@example.com',
                'slug' => 'erin-simpson',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5Y0Zz0vKje.MrAg.Li.x2el9I/s6lMQiAz5SSqhqkfxu35allYV.i',
                'bio' => NULL,
                'avatar' => '66.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:58',
                'updated_at' => '2019-02-08 05:46:58',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'vicki reid',
                'email' => 'vicki.reid@example.com',
                'slug' => 'vicki-reid',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZxWDYGzDT4/sGlgMCG5Zg.F/sH/FpZRYBJ4O8s5wzXtcVT0A7ULo2',
                'bio' => NULL,
                'avatar' => '21.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:46:59',
                'updated_at' => '2019-02-08 05:46:59',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'ricky murphy',
                'email' => 'ricky.murphy@example.com',
                'slug' => 'ricky-murphy',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ou70Y47GuLQfomcWxlveOODTqUhbbkYfoOjglwg/h9euEAYw1Q2zS',
                'bio' => NULL,
                'avatar' => '40.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:47:00',
                'updated_at' => '2019-02-08 05:47:00',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'dan stephens',
                'email' => 'dan.stephens@example.com',
                'slug' => 'dan-stephens',
                'email_verified_at' => NULL,
                'password' => '$2y$10$D1FKX/DcjAhMB/qfsZfyKOUwg56FS9x/eBRFp8lsZ7r.4tVh.4cNi',
                'bio' => NULL,
                'avatar' => '34.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:47:01',
                'updated_at' => '2019-02-08 05:47:01',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'abigail thomas',
                'email' => 'abigail.thomas@example.com',
                'slug' => 'abigail-thomas',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xmCXoxat902cuS/DE3mFSuVdkbQGHiHDAbzILY.DfvjtjzMn00PAu',
                'bio' => NULL,
                'avatar' => '26.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:47:02',
                'updated_at' => '2019-02-08 05:47:02',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'lee cook',
                'email' => 'lee.cook@example.com',
                'slug' => 'lee-cook',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lLhc7D8dFHCEAGAK1FrI1.uCDUvYuDpJ0/zOf5iusRiPX8Lur18GC',
                'bio' => NULL,
                'avatar' => '98.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:47:02',
                'updated_at' => '2019-02-08 05:47:02',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'sarah washington',
                'email' => 'sarah.washington@example.com',
                'slug' => 'sarah-washington',
                'email_verified_at' => NULL,
                'password' => '$2y$10$l1MkGNS3ye.ImzOPe4XgPOKsRPFqVo0/WwvjNIb4Igh51M/Mknl7G',
                'bio' => NULL,
                'avatar' => '91.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:47:03',
                'updated_at' => '2019-02-08 05:47:03',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'noelle ruiz',
                'email' => 'noelle.ruiz@example.com',
                'slug' => 'noelle-ruiz',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gDBWBbIqSMoDmzUHk5mnt.n0KjbsiELP5numLMAK.gAZoIEvd7Hpy',
                'bio' => NULL,
                'avatar' => '42.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:47:04',
                'updated_at' => '2019-02-08 05:47:04',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'brennan gomez',
                'email' => 'brennan.gomez@example.com',
                'slug' => 'brennan-gomez',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cxrkx2tuUV3/1IVtDwnLAukX6qVPYG4afaufTeHauk.LpPoh109T.',
                'bio' => NULL,
                'avatar' => '70.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:47:05',
                'updated_at' => '2019-02-08 05:47:05',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'norman lopez',
                'email' => 'norman.lopez@example.com',
                'slug' => 'norman-lopez',
                'email_verified_at' => NULL,
                'password' => '$2y$10$x1NOlpJBuUmxaMJ5mUSAku1VO0S/oZrbKnrXEmX1V6YVQGXNuayOa',
                'bio' => NULL,
                'avatar' => '19.jpg',
                'isAdmin' => 0,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:47:06',
                'updated_at' => '2019-02-08 05:47:06',
            ),

            40 => 
            array (
                'id' => 40,
                'name' => 'Jon Doe',
                'email' => 'jondoe@example.com',
                'slug' => 'norman-lopez',
                'email_verified_at' => NULL,
                'password' => '$2y$10$x1NOlpJBuUmxaMJ5mUSAku1VO0S/oZrbKnrXEmX1V6YVQGXNuayOa',
                'bio' => NULL,
                'avatar' => '19.jpg',
                'isAdmin' => 1,
                'isActive' => 0,
                'remember_token' => NULL,
                'created_at' => '2019-02-08 05:47:06',
                'updated_at' => '2019-02-08 05:47:06',
            ),

        ));
        
        
    }
}