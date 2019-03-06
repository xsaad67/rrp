<?php

use Illuminate\Database\Seeder;

class MemeTemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('meme_templates')->delete();
        
        \DB::table('meme_templates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'fileName' => 'temp_B3D8B4DB-2CE8-0E5E-89E9-1F56884E31C1_Surprised-Pikachu.jpg',
                'title' => 'Surprised Pikachu',
                'slug' => 'surprised-pikachu-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:23',
                'updated_at' => '2019-01-23 08:45:23',
            ),
            1 => 
            array (
                'id' => 2,
                'fileName' => 'temp_1A31E5C7-E9BB-63EE-C814-13491DA7E5F3_Two-Buttons.jpg',
                'title' => 'Two Buttons',
                'slug' => 'two-buttons-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:23',
                'updated_at' => '2019-01-23 08:45:23',
            ),
            2 => 
            array (
                'id' => 3,
                'fileName' => 'temp_E7FD3A15-B186-3C33-4A4C-784B714B7B7E_Mocking-Spongebob.jpg',
                'title' => 'Mocking Spongebob',
                'slug' => 'mocking-spongebob-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:24',
                'updated_at' => '2019-01-23 08:45:24',
            ),
            3 => 
            array (
                'id' => 4,
                'fileName' => 'temp_5CC9F871-9BB8-59F9-8E46-4FFE0A1E3CC6_Expanding-Brain.jpg',
                'title' => 'Expanding Brain',
                'slug' => 'expanding-brain-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:24',
                'updated_at' => '2019-01-23 08:45:24',
            ),
            4 => 
            array (
                'id' => 5,
                'fileName' => 'temp_DC7EDFB1-A617-2F2F-B602-E896F87AA649_Left-Exit-12-Off-Ramp.jpg',
                'title' => 'Left Exit 12 Off Ramp',
                'slug' => 'left-exit-12-off-ramp-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:25',
                'updated_at' => '2019-01-23 08:45:25',
            ),
            5 => 
            array (
                'id' => 6,
                'fileName' => 'temp_E2E73D0D-CF14-38FD-8E92-755F498AFE26_Batman-Slapping-Robin.jpg',
                'title' => 'Batman Slapping Robin',
                'slug' => 'batman-slapping-robin-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:25',
                'updated_at' => '2019-01-23 08:45:25',
            ),
            6 => 
            array (
                'id' => 7,
                'fileName' => 'temp_514D32B1-2A52-7EF0-E79A-C4C31550137F_Roll-Safe-Think-About-It.jpg',
                'title' => 'Roll Safe Think About It',
                'slug' => 'roll-safe-think-about-it-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:26',
                'updated_at' => '2019-01-23 08:45:26',
            ),
            7 => 
            array (
                'id' => 8,
                'fileName' => 'temp_21062EC8-A2AF-F8D5-8A84-C27A3C927B40_Blank-Nut-Button.jpg',
                'title' => 'Blank Nut Button',
                'slug' => 'blank-nut-button-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:26',
                'updated_at' => '2019-01-23 08:45:26',
            ),
            8 => 
            array (
                'id' => 9,
                'fileName' => 'temp_49D708CC-440C-D874-A171-2C826DC1C5B1_Waiting-Skeleton.jpg',
                'title' => 'Waiting Skeleton',
                'slug' => 'waiting-skeleton-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:27',
                'updated_at' => '2019-01-23 08:45:27',
            ),
            9 => 
            array (
                'id' => 10,
                'fileName' => 'temp_99C2A080-3069-C5A4-D6B2-01D3392CBB98_Is-This-A-Pigeon.jpg',
                'title' => 'Is This A Pigeon',
                'slug' => 'is-this-a-pigeon-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:28',
                'updated_at' => '2019-01-23 08:45:28',
            ),
            10 => 
            array (
                'id' => 11,
                'fileName' => 'temp_CFF60A38-3A80-F9D1-34C5-3F50A6A9ABE7_Boardroom-Meeting-Suggestion.jpg',
                'title' => 'Boardroom Meeting Suggestion',
                'slug' => 'boardroom-meeting-suggestion-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:28',
                'updated_at' => '2019-01-23 08:45:28',
            ),
            11 => 
            array (
                'id' => 12,
                'fileName' => 'temp_E7955306-52B9-814A-2B66-986204545F32_One-Does-Not-Simply.jpg',
                'title' => 'One Does Not Simply',
                'slug' => 'one-does-not-simply-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:29',
                'updated_at' => '2019-01-23 08:45:29',
            ),
            12 => 
            array (
                'id' => 13,
                'fileName' => 'temp_FBEFA4F9-CD92-21DC-7B5A-C4E45F88BF9B_Inhaling-Seagull.jpg',
                'title' => 'Inhaling Seagull',
                'slug' => 'inhaling-seagull-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:30',
                'updated_at' => '2019-01-23 08:45:30',
            ),
            13 => 
            array (
                'id' => 14,
                'fileName' => 'temp_61F8D35D-5C08-01E0-43B5-D1E1E7C8F79D_Hide-the-Pain-Harold.jpg',
                'title' => 'Hide the Pain Harold',
                'slug' => 'hide-the-pain-harold-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:30',
                'updated_at' => '2019-01-23 08:45:30',
            ),
            14 => 
            array (
                'id' => 15,
                'fileName' => 'temp_F9E914EB-9BB1-C2C6-F031-05F0D6AF83AE_Ancient-Aliens.jpg',
                'title' => 'Ancient Aliens',
                'slug' => 'ancient-aliens-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:31',
                'updated_at' => '2019-01-23 08:45:31',
            ),
            15 => 
            array (
                'id' => 16,
                'fileName' => 'temp_C2CC90F7-23FC-58CF-7403-B46AFF6F7568_Trump-Bill-Signing.jpg',
                'title' => 'Trump Bill Signing',
                'slug' => 'trump-bill-signing-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:31',
                'updated_at' => '2019-01-23 08:45:31',
            ),
            16 => 
            array (
                'id' => 17,
                'fileName' => 'temp_4DF5B197-C31F-1ED3-FDB3-9B56788B7EEB_American-Chopper-Argument.jpg',
                'title' => 'American Chopper Argument',
                'slug' => 'american-chopper-argument-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:32',
                'updated_at' => '2019-01-23 08:45:32',
            ),
            17 => 
            array (
                'id' => 18,
                'fileName' => 'temp_5F115638-9BAA-A6BD-00EF-FBA892772A58_The-Scroll-Of-Truth.jpg',
                'title' => 'The Scroll Of Truth',
                'slug' => 'the-scroll-of-truth-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:33',
                'updated_at' => '2019-01-23 08:45:33',
            ),
            18 => 
            array (
                'id' => 19,
                'fileName' => 'temp_7AC5B333-5F78-816A-F69D-316DF4AF844D_Yall-Got-Any-More-Of-That.jpg',
                'title' => 'Y\'all Got Any More Of That',
                'slug' => 'yall-got-any-more-of-that-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:33',
                'updated_at' => '2019-01-23 08:45:33',
            ),
            19 => 
            array (
                'id' => 20,
                'fileName' => 'temp_77834196-B5FB-6D33-1752-ED81AF26F5CB_Futurama-Fry.jpg',
                'title' => 'Futurama Fry',
                'slug' => 'futurama-fry-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:34',
                'updated_at' => '2019-01-23 08:45:34',
            ),
            20 => 
            array (
                'id' => 21,
                'fileName' => 'temp_5CA674A4-89DA-F189-8017-D46D8815A5F6_The-Most-Interesting-Man-In-The-World.jpg',
                'title' => 'The Most Interesting Man In The World',
                'slug' => 'the-most-interesting-man-in-the-world-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:35',
                'updated_at' => '2019-01-23 08:45:35',
            ),
            21 => 
            array (
                'id' => 22,
                'fileName' => 'temp_610626F9-1095-731A-4D25-65739917CA32_The-Rock-Driving.jpg',
                'title' => 'The Rock Driving',
                'slug' => 'the-rock-driving-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:35',
                'updated_at' => '2019-01-23 08:45:35',
            ),
            22 => 
            array (
                'id' => 23,
                'fileName' => 'temp_6704D25B-C259-9D6A-D5C8-D50B7F0441D8_Hard-To-Swallow-Pills.jpg',
                'title' => 'Hard To Swallow Pills',
                'slug' => 'hard-to-swallow-pills-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:36',
                'updated_at' => '2019-01-23 08:45:36',
            ),
            23 => 
            array (
                'id' => 24,
                'fileName' => 'temp_A21A243B-BA9D-0775-5684-63BE941E8874_Evil-Kermit.jpg',
                'title' => 'Evil Kermit',
                'slug' => 'evil-kermit-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:37',
                'updated_at' => '2019-01-23 08:45:37',
            ),
            24 => 
            array (
                'id' => 25,
                'fileName' => 'temp_B45D8B61-4347-8CFA-3992-7727A05FF18D_Oprah-You-Get-A.jpg',
                'title' => 'Oprah You Get A',
                'slug' => 'oprah-you-get-a-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:37',
                'updated_at' => '2019-01-23 08:45:37',
            ),
            25 => 
            array (
                'id' => 26,
                'fileName' => 'temp_7E0A409B-E70D-FA58-F4A0-249DC0829B1D_Disaster-Girl.jpg',
                'title' => 'Disaster Girl',
                'slug' => 'disaster-girl-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:38',
                'updated_at' => '2019-01-23 08:45:38',
            ),
            26 => 
            array (
                'id' => 27,
                'fileName' => 'temp_1761F1AB-3014-D200-63B5-1BCF7B990F4A_Leonardo-Dicaprio-Cheers.jpg',
                'title' => 'Leonardo Dicaprio Cheers',
                'slug' => 'leonardo-dicaprio-cheers-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:38',
                'updated_at' => '2019-01-23 08:45:38',
            ),
            27 => 
            array (
                'id' => 28,
                'fileName' => 'temp_76C9F590-5766-3EF1-530A-BB4FD7E7CBEA_Brace-Yourselves-X-is-Coming.jpg',
                'title' => 'Brace Yourselves X is Coming',
                'slug' => 'brace-yourselves-x-is-coming-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:39',
                'updated_at' => '2019-01-23 08:45:39',
            ),
            28 => 
            array (
                'id' => 29,
                'fileName' => 'temp_D7CB6585-0941-8BD1-CAB3-720ECE9246D6_Finding-Neverland.jpg',
                'title' => 'Finding Neverland',
                'slug' => 'finding-neverland-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:39',
                'updated_at' => '2019-01-23 08:45:39',
            ),
            29 => 
            array (
                'id' => 30,
                'fileName' => 'temp_9BA9327A-5DDF-52BD-96EB-E77DAA081BB4_Who-Would-Win.jpg',
                'title' => 'Who Would Win?',
                'slug' => 'who-would-win-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:40',
                'updated_at' => '2019-01-23 08:45:40',
            ),
            30 => 
            array (
                'id' => 31,
                'fileName' => 'temp_334F89BC-55D4-7E21-BF0F-E238B391F041_Bad-Luck-Brian.jpg',
                'title' => 'Bad Luck Brian',
                'slug' => 'bad-luck-brian-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:40',
                'updated_at' => '2019-01-23 08:45:40',
            ),
            31 => 
            array (
                'id' => 32,
                'fileName' => 'temp_2705905E-FBB7-50C5-5DFE-DED4A0BFB483_That-Would-Be-Great.jpg',
                'title' => 'That Would Be Great',
                'slug' => 'that-would-be-great-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:40',
                'updated_at' => '2019-01-23 08:45:40',
            ),
            32 => 
            array (
                'id' => 33,
                'fileName' => 'temp_AD91E0E5-CDA7-83E2-0E69-BD0254F92454_Third-World-Skeptical-Kid.jpg',
                'title' => 'Third World Skeptical Kid',
                'slug' => 'third-world-skeptical-kid-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:41',
                'updated_at' => '2019-01-23 08:45:41',
            ),
            33 => 
            array (
                'id' => 34,
                'fileName' => 'temp_83E112EC-42C1-B940-A8B2-FE2857EC44BD_But-Thats-None-Of-My-Business.jpg',
                'title' => 'But Thats None Of My Business',
                'slug' => 'but-thats-none-of-my-business-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:42',
                'updated_at' => '2019-01-23 08:45:42',
            ),
            34 => 
            array (
                'id' => 35,
                'fileName' => 'temp_8C59F54C-62F9-C398-04F8-78E99AF93DB8_First-World-Problems.jpg',
                'title' => 'First World Problems',
                'slug' => 'first-world-problems-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:42',
                'updated_at' => '2019-01-23 08:45:42',
            ),
            35 => 
            array (
                'id' => 36,
                'fileName' => 'temp_7E8D187A-14D0-3086-F715-578A38BAE893_Black-Girl-Wat.jpg',
                'title' => 'Black Girl Wat',
                'slug' => 'black-girl-wat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:43',
                'updated_at' => '2019-01-23 08:45:43',
            ),
            36 => 
            array (
                'id' => 37,
                'fileName' => 'temp_00600F99-884C-61E5-6C5B-EC54DC37A42F_Creepy-Condescending-Wonka.jpg',
                'title' => 'Creepy Condescending Wonka',
                'slug' => 'creepy-condescending-wonka-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:43',
                'updated_at' => '2019-01-23 08:45:43',
            ),
            37 => 
            array (
                'id' => 38,
                'fileName' => 'temp_11CD1C12-1CC7-3EBC-893D-8E95BDC995D4_Y-U-No.jpg',
                'title' => 'Y U No',
                'slug' => 'y-u-no-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:44',
                'updated_at' => '2019-01-23 08:45:44',
            ),
            38 => 
            array (
                'id' => 39,
                'fileName' => 'temp_5DD4FCD0-B1D9-9CB5-2573-F931F885149F_Doge.jpg',
                'title' => 'Doge',
                'slug' => 'doge-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:44',
                'updated_at' => '2019-01-23 08:45:44',
            ),
            39 => 
            array (
                'id' => 40,
                'fileName' => 'temp_E158E926-C083-2824-A64B-2A2A2E53D89A_Captain-Picard-Facepalm.jpg',
                'title' => 'Captain Picard Facepalm',
                'slug' => 'captain-picard-facepalm-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:45',
                'updated_at' => '2019-01-23 08:45:45',
            ),
            40 => 
            array (
                'id' => 41,
                'fileName' => 'temp_21A29A64-6525-B3B7-9AA8-B88B6F8F9B70_Grandma-Finds-The-Internet.jpg',
                'title' => 'Grandma Finds The Internet',
                'slug' => 'grandma-finds-the-internet-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:45',
                'updated_at' => '2019-01-23 08:45:45',
            ),
            41 => 
            array (
                'id' => 42,
                'fileName' => 'temp_F380D9DE-4CE3-4ECD-B78B-1FF1F13CE0AF_Maury-Lie-Detector.jpg',
                'title' => 'Maury Lie Detector',
                'slug' => 'maury-lie-detector-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:46',
                'updated_at' => '2019-01-23 08:45:46',
            ),
            42 => 
            array (
                'id' => 43,
                'fileName' => 'temp_F7CACF33-E204-D54D-A266-02AF26C9184B_Face-You-Make-Robert-Downey-Jr.jpg',
                'title' => 'Face You Make Robert Downey Jr',
                'slug' => 'face-you-make-robert-downey-jr-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:46',
                'updated_at' => '2019-01-23 08:45:46',
            ),
            43 => 
            array (
                'id' => 44,
                'fileName' => 'temp_D848499C-E5BA-BC76-3CA8-7A122E79B193_X-All-The-Y.jpg',
                'title' => 'X All The Y',
                'slug' => 'x-all-the-y-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:47',
                'updated_at' => '2019-01-23 08:45:47',
            ),
            44 => 
            array (
                'id' => 45,
                'fileName' => 'temp_ECFA88E8-2594-F20B-B71A-45C72EB1BF9C_Success-Kid.jpg',
                'title' => 'Success Kid',
                'slug' => 'success-kid-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:47',
                'updated_at' => '2019-01-23 08:45:47',
            ),
            45 => 
            array (
                'id' => 46,
                'fileName' => 'temp_81D63544-3C0A-2F5A-2D8A-C375C905C93D_Dont-You-Squidward.jpg',
                'title' => 'Dont You Squidward',
                'slug' => 'dont-you-squidward-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:48',
                'updated_at' => '2019-01-23 08:45:48',
            ),
            46 => 
            array (
                'id' => 47,
                'fileName' => 'temp_5B20C4EF-1B6B-3462-F29A-C9DDFC95B509_Philosoraptor.jpg',
                'title' => 'Philosoraptor',
                'slug' => 'philosoraptor-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:50',
                'updated_at' => '2019-01-23 08:45:50',
            ),
            47 => 
            array (
                'id' => 48,
                'fileName' => 'temp_673AE7A3-E609-AEC4-B92C-E3C4CA33825E_Be-Like-Bill.jpg',
                'title' => 'Be Like Bill',
                'slug' => 'be-like-bill-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:50',
                'updated_at' => '2019-01-23 08:45:50',
            ),
            48 => 
            array (
                'id' => 49,
                'fileName' => 'temp_49B885D9-92E4-95AE-E488-3743224D9697_Star-Wars-Yoda.jpg',
                'title' => 'Star Wars Yoda',
                'slug' => 'star-wars-yoda-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:51',
                'updated_at' => '2019-01-23 08:45:51',
            ),
            49 => 
            array (
                'id' => 50,
                'fileName' => 'temp_160416B3-59A5-A974-5B44-5F972EFA0414_Matrix-Morpheus.jpg',
                'title' => 'Matrix Morpheus',
                'slug' => 'matrix-morpheus-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:51',
                'updated_at' => '2019-01-23 08:45:51',
            ),
            50 => 
            array (
                'id' => 51,
                'fileName' => 'temp_5B2634F5-D67A-7D73-5B83-B2707DEA9C19_Am-I-The-Only-One-Around-Here.jpg',
                'title' => 'Am I The Only One Around Here',
                'slug' => 'am-i-the-only-one-around-here-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:52',
                'updated_at' => '2019-01-23 08:45:52',
            ),
            51 => 
            array (
                'id' => 52,
                'fileName' => 'temp_50BA5F0A-01F1-1F54-128A-47A6A673C124_Evil-Toddler.jpg',
                'title' => 'Evil Toddler',
                'slug' => 'evil-toddler-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:52',
                'updated_at' => '2019-01-23 08:45:52',
            ),
            52 => 
            array (
                'id' => 53,
                'fileName' => 'temp_7665553C-7E43-DAD4-6202-A4062C12F90B_Laughing-Men-In-Suits.jpg',
                'title' => 'Laughing Men In Suits',
                'slug' => 'laughing-men-in-suits-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:53',
                'updated_at' => '2019-01-23 08:45:53',
            ),
            53 => 
            array (
                'id' => 54,
                'fileName' => 'temp_7FE61C39-9EFB-E08C-099D-2C1B3C875C80_Third-World-Success-Kid.jpg',
                'title' => 'Third World Success Kid',
                'slug' => 'third-world-success-kid-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:54',
                'updated_at' => '2019-01-23 08:45:54',
            ),
            54 => 
            array (
                'id' => 55,
                'fileName' => 'temp_778F661C-0099-266F-8162-D40075FB6982_Ill-Just-Wait-Here.jpg',
                'title' => 'Ill Just Wait Here',
                'slug' => 'ill-just-wait-here-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:54',
                'updated_at' => '2019-01-23 08:45:54',
            ),
            55 => 
            array (
                'id' => 56,
                'fileName' => 'temp_6CB0D1FF-F682-EBD9-4625-40B6DF79F72A_Dr-Evil-Laser.jpg',
                'title' => 'Dr Evil Laser',
                'slug' => 'dr-evil-laser-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:55',
                'updated_at' => '2019-01-23 08:45:55',
            ),
            56 => 
            array (
                'id' => 57,
                'fileName' => 'temp_961A775F-6023-1224-37B6-552B021A1239_Put-It-Somewhere-Else-Patrick.jpg',
                'title' => 'Put It Somewhere Else Patrick',
                'slug' => 'put-it-somewhere-else-patrick-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:55',
                'updated_at' => '2019-01-23 08:45:55',
            ),
            57 => 
            array (
                'id' => 58,
                'fileName' => 'temp_05BCF0DD-96B2-2B67-5F9F-13A2F1F019A6_Grumpy-Cat.jpg',
                'title' => 'Grumpy Cat',
                'slug' => 'grumpy-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:56',
                'updated_at' => '2019-01-23 08:45:56',
            ),
            58 => 
            array (
                'id' => 59,
                'fileName' => 'temp_BA5A17AD-46CE-B6B7-6944-59DF7C70C60E_Who-Killed-Hannibal.jpg',
                'title' => 'Who Killed Hannibal',
                'slug' => 'who-killed-hannibal-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:57',
                'updated_at' => '2019-01-23 08:45:57',
            ),
            59 => 
            array (
                'id' => 60,
                'fileName' => 'temp_176C1AD1-2BF0-8B5C-9F61-D8C6A2CBABDC_This-Is-Where-Id-Put-My-Trophy-If-I-Had-One.jpg',
                'title' => 'This Is Where I\'d Put My Trophy If I Had One',
                'slug' => 'this-is-where-id-put-my-trophy-if-i-had-one-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:57',
                'updated_at' => '2019-01-23 08:45:57',
            ),
            60 => 
            array (
                'id' => 61,
                'fileName' => 'temp_524CFCF6-2827-FD53-233B-EA5D0D78B516_Sleeping-Shaq.jpg',
                'title' => 'Sleeping Shaq',
                'slug' => 'sleeping-shaq-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:58',
                'updated_at' => '2019-01-23 08:45:58',
            ),
            61 => 
            array (
                'id' => 62,
                'fileName' => 'temp_40D0E2D7-8326-56F6-5AB7-B7058A45BA6A_See-Nobody-Cares.jpg',
                'title' => 'See Nobody Cares',
                'slug' => 'see-nobody-cares-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:59',
                'updated_at' => '2019-01-23 08:45:59',
            ),
            62 => 
            array (
                'id' => 63,
                'fileName' => 'temp_1AA89ACD-9204-59A2-EE42-9F82F5EE8F27_Jack-Sparrow-Being-Chased.jpg',
                'title' => 'Jack Sparrow Being Chased',
                'slug' => 'jack-sparrow-being-chased-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:45:59',
                'updated_at' => '2019-01-23 08:45:59',
            ),
            63 => 
            array (
                'id' => 64,
                'fileName' => 'temp_826D36F0-5188-9F7A-58F4-EEDC5C702E21_Marvel-Civil-War-1.jpg',
                'title' => 'Marvel Civil War 1',
                'slug' => 'marvel-civil-war-1-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:00',
                'updated_at' => '2019-01-23 08:46:00',
            ),
            64 => 
            array (
                'id' => 65,
                'fileName' => 'temp_B554F8A9-A87D-EA1A-27F9-809AABC5D1C0_Too-Damn-High.jpg',
                'title' => 'Too Damn High',
                'slug' => 'too-damn-high-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:00',
                'updated_at' => '2019-01-23 08:46:00',
            ),
            65 => 
            array (
                'id' => 66,
                'fileName' => 'temp_90CC9877-7486-8403-CFB3-F45086046FD8_Uncle-Sam.jpg',
                'title' => 'Uncle Sam',
                'slug' => 'uncle-sam-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:01',
                'updated_at' => '2019-01-23 08:46:01',
            ),
            66 => 
            array (
                'id' => 67,
                'fileName' => 'temp_8ADDF68E-22A5-9A27-37AB-76A74DEE5D42_Blank-Starter-Pack.jpg',
                'title' => 'Blank Starter Pack',
                'slug' => 'blank-starter-pack-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:01',
                'updated_at' => '2019-01-23 08:46:01',
            ),
            67 => 
            array (
                'id' => 68,
                'fileName' => 'temp_95FCF882-AF1A-2D5C-8EC3-3FE156D704CD_Picard-Wtf.jpg',
                'title' => 'Picard Wtf',
                'slug' => 'picard-wtf-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:02',
                'updated_at' => '2019-01-23 08:46:02',
            ),
            68 => 
            array (
                'id' => 69,
                'fileName' => 'temp_62F16370-5DC5-967D-FAAD-4279579A3C2C_Imagination-Spongebob.jpg',
                'title' => 'Imagination Spongebob',
                'slug' => 'imagination-spongebob-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:03',
                'updated_at' => '2019-01-23 08:46:03',
            ),
            69 => 
            array (
                'id' => 70,
                'fileName' => 'temp_FA198A35-287C-DCED-7AC9-9053B0B9B020_Confession-Bear.jpg',
                'title' => 'Confession Bear',
                'slug' => 'confession-bear-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:04',
                'updated_at' => '2019-01-23 08:46:04',
            ),
            70 => 
            array (
                'id' => 71,
                'fileName' => 'temp_0B358317-EAE1-0D4E-B416-95B54FF64318_Yo-Dawg-Heard-You.jpg',
                'title' => 'Yo Dawg Heard You',
                'slug' => 'yo-dawg-heard-you-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:04',
                'updated_at' => '2019-01-23 08:46:04',
            ),
            71 => 
            array (
                'id' => 72,
                'fileName' => 'temp_5DAFE608-40DA-1C49-DDD2-29A868B8EE1B_Simba-Shadowy-Place.jpg',
                'title' => 'Simba Shadowy Place',
                'slug' => 'simba-shadowy-place-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:05',
                'updated_at' => '2019-01-23 08:46:05',
            ),
            72 => 
            array (
                'id' => 73,
                'fileName' => 'temp_C8C56B90-2660-42FD-6ABB-80531E335A4C_Good-Fellas-Hilarious.jpg',
                'title' => 'Good Fellas Hilarious',
                'slug' => 'good-fellas-hilarious-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:06',
                'updated_at' => '2019-01-23 08:46:06',
            ),
            73 => 
            array (
                'id' => 74,
                'fileName' => 'temp_9B0CF06C-1ECF-7F27-B60A-11116AB60099_Look-At-Me.jpg',
                'title' => 'Look At Me',
                'slug' => 'look-at-me-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:06',
                'updated_at' => '2019-01-23 08:46:06',
            ),
            74 => 
            array (
                'id' => 75,
                'fileName' => 'temp_60D2E66A-0881-40DF-F8D6-FB7D24069CBF_Mugatu-So-Hot-Right-Now.jpg',
                'title' => 'Mugatu So Hot Right Now',
                'slug' => 'mugatu-so-hot-right-now-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:07',
                'updated_at' => '2019-01-23 08:46:07',
            ),
            75 => 
            array (
                'id' => 76,
                'fileName' => 'temp_20513FA4-D4A4-260E-8043-BE218938A6A6_Socially-Awesome-Awkward-Penguin.jpg',
                'title' => 'Socially Awesome Awkward Penguin',
                'slug' => 'socially-awesome-awkward-penguin-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:08',
                'updated_at' => '2019-01-23 08:46:08',
            ),
            76 => 
            array (
                'id' => 77,
                'fileName' => 'temp_4AF6371B-78C9-9D48-64C3-89007B5DD98B_Car-Salesman-Slaps-Roof-Of-Car.jpg',
                'title' => 'Car Salesman Slaps Roof Of Car',
                'slug' => 'car-salesman-slaps-roof-of-car-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:09',
                'updated_at' => '2019-01-23 08:46:09',
            ),
            77 => 
            array (
                'id' => 78,
                'fileName' => 'temp_C8D397E5-E740-DF30-C21A-2F059CB6CC3C_Arthur-Fist.jpg',
                'title' => 'Arthur Fist',
                'slug' => 'arthur-fist-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:10',
                'updated_at' => '2019-01-23 08:46:10',
            ),
            78 => 
            array (
                'id' => 79,
                'fileName' => 'temp_16D08BCC-116F-74CC-B145-167C937B23E9_Pepperidge-Farm-Remembers.jpg',
                'title' => 'Pepperidge Farm Remembers',
                'slug' => 'pepperidge-farm-remembers-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:11',
                'updated_at' => '2019-01-23 08:46:11',
            ),
            79 => 
            array (
                'id' => 80,
                'fileName' => 'temp_D9AFF6DF-CE2A-F04B-103D-EC21E22A0444_Bad-Pun-Dog.jpg',
                'title' => 'Bad Pun Dog',
                'slug' => 'bad-pun-dog-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:11',
                'updated_at' => '2019-01-23 08:46:11',
            ),
            80 => 
            array (
                'id' => 81,
                'fileName' => 'temp_CB087032-5DF7-E36B-AAB0-1347F9B93B01_Sparta-Leonidas.jpg',
                'title' => 'Sparta Leonidas',
                'slug' => 'sparta-leonidas-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:12',
                'updated_at' => '2019-01-23 08:46:12',
            ),
            81 => 
            array (
                'id' => 82,
                'fileName' => 'temp_399A4333-832E-EB58-F436-7E5F050B04DF_Say-That-Again-I-Dare-You.jpg',
                'title' => 'Say That Again I Dare You',
                'slug' => 'say-that-again-i-dare-you-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:12',
                'updated_at' => '2019-01-23 08:46:12',
            ),
            82 => 
            array (
                'id' => 83,
                'fileName' => 'temp_8EBC7597-1B53-AF36-5510-8A0B94B9CD89_Kevin-Hart.jpg',
                'title' => 'Kevin Hart',
                'slug' => 'kevin-hart-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:13',
                'updated_at' => '2019-01-23 08:46:13',
            ),
            83 => 
            array (
                'id' => 84,
                'fileName' => 'temp_1A7E12B3-C4CB-AF72-9B30-CA47297E19B9_Peter-Parker-Cry.jpg',
                'title' => 'Peter Parker Cry',
                'slug' => 'peter-parker-cry-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:14',
                'updated_at' => '2019-01-23 08:46:14',
            ),
            84 => 
            array (
                'id' => 85,
                'fileName' => 'temp_F404E1E5-4486-7156-F956-912765BAAF9F_And-everybody-loses-their-minds.jpg',
                'title' => 'And everybody loses their minds',
                'slug' => 'and-everybody-loses-their-minds-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:14',
                'updated_at' => '2019-01-23 08:46:14',
            ),
            85 => 
            array (
                'id' => 86,
                'fileName' => 'temp_798B0701-3BDD-EA78-86EE-930B20959471_What-Do-We-Want.jpg',
                'title' => 'What Do We Want',
                'slug' => 'what-do-we-want-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:15',
                'updated_at' => '2019-01-23 08:46:15',
            ),
            86 => 
            array (
                'id' => 87,
                'fileName' => 'temp_A247E493-4FFC-B3F6-3F00-2620321A24F8_10-Guy.jpg',
                'title' => '10 Guy',
                'slug' => '10-guy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:15',
                'updated_at' => '2019-01-23 08:46:15',
            ),
            87 => 
            array (
                'id' => 88,
                'fileName' => 'temp_F81EED5E-860F-B516-476F-A0F740260D2B_Buddy-Christ.jpg',
                'title' => 'Buddy Christ',
                'slug' => 'buddy-christ-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:16',
                'updated_at' => '2019-01-23 08:46:16',
            ),
            88 => 
            array (
                'id' => 89,
                'fileName' => 'temp_BD50B0B0-5D02-D849-89DE-D69CDA04B7E9_Mr-Krabs-Blur-Meme.jpg',
                'title' => 'Mr Krabs Blur',
                'slug' => 'mr-krabs-blur-meme-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:17',
                'updated_at' => '2019-01-23 08:46:17',
            ),
            89 => 
            array (
                'id' => 90,
                'fileName' => 'temp_B59E8C92-D010-9BE1-08A7-E998AF75E14E_Aaaaand-Its-Gone.jpg',
                'title' => 'Aaaaand Its Gone',
                'slug' => 'aaaaand-its-gone-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:18',
                'updated_at' => '2019-01-23 08:46:18',
            ),
            90 => 
            array (
                'id' => 91,
                'fileName' => 'temp_B22D4ABB-0C95-FC96-7B1C-C6D4D4A5E05B_Inception.jpg',
                'title' => 'Inception',
                'slug' => 'inception-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:18',
                'updated_at' => '2019-01-23 08:46:18',
            ),
            91 => 
            array (
                'id' => 92,
                'fileName' => 'temp_59309589-66B8-3087-0123-596E3861C9C3_Liam-Neeson-Taken.jpg',
                'title' => 'Liam Neeson Taken',
                'slug' => 'liam-neeson-taken-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:19',
                'updated_at' => '2019-01-23 08:46:19',
            ),
            92 => 
            array (
                'id' => 93,
                'fileName' => 'temp_9D33DE2B-09FE-0FD4-051A-3F6922DB3992_Shut-Up-And-Take-My-Money-Fry.jpg',
                'title' => 'Shut Up And Take My Money Fry',
                'slug' => 'shut-up-and-take-my-money-fry-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:20',
                'updated_at' => '2019-01-23 08:46:20',
            ),
            93 => 
            array (
                'id' => 94,
                'fileName' => 'temp_84228741-F467-B0CB-18E9-097E3144874B_Star-Wars-No.jpg',
                'title' => 'Star Wars No',
                'slug' => 'star-wars-no-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:21',
                'updated_at' => '2019-01-23 08:46:21',
            ),
            94 => 
            array (
                'id' => 95,
                'fileName' => 'temp_A45209B3-7EFD-FAE6-EB4E-7137677A16BC_Gollum.jpg',
                'title' => 'Gollum',
                'slug' => 'gollum-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:21',
                'updated_at' => '2019-01-23 08:46:21',
            ),
            95 => 
            array (
                'id' => 96,
                'fileName' => 'temp_97F5ED3E-9960-620C-E8DB-9768612ABC51_Spiderman-Peter-Parker.jpg',
                'title' => 'Spiderman Peter Parker',
                'slug' => 'spiderman-peter-parker-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:22',
                'updated_at' => '2019-01-23 08:46:22',
            ),
            96 => 
            array (
                'id' => 97,
                'fileName' => 'temp_D5CFE715-3179-F7B4-920B-E9E8C017D6D6_Jackie-Chan-WTF.jpg',
                'title' => 'Jackie Chan WTF',
                'slug' => 'jackie-chan-wtf-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:23',
                'updated_at' => '2019-01-23 08:46:23',
            ),
            97 => 
            array (
                'id' => 98,
                'fileName' => 'temp_82519534-465F-8EE3-68A8-1E45BBBC131F_Chef-Gordon-Ramsay.jpg',
                'title' => 'Chef Gordon Ramsay',
                'slug' => 'chef-gordon-ramsay-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:23',
                'updated_at' => '2019-01-23 08:46:23',
            ),
            98 => 
            array (
                'id' => 99,
                'fileName' => 'temp_09A54CCC-5D3B-4C42-EAF3-EA454F66F96D_I-Should-Buy-A-Boat-Cat.jpg',
                'title' => 'I Should Buy A Boat Cat',
                'slug' => 'i-should-buy-a-boat-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:24',
                'updated_at' => '2019-01-23 08:46:24',
            ),
            99 => 
            array (
                'id' => 100,
                'fileName' => 'temp_11ED3635-DA22-DCC0-44D2-FBFB6AFDEA68_Afraid-To-Ask-Andy.jpg',
                'title' => 'Afraid To Ask Andy',
                'slug' => 'afraid-to-ask-andy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:25',
                'updated_at' => '2019-01-23 08:46:25',
            ),
            100 => 
            array (
                'id' => 101,
                'fileName' => 'temp_C32C4C33-7A4B-3964-B58E-0022E3D4BD14_Confused-Gandalf.jpg',
                'title' => 'Confused Gandalf',
                'slug' => 'confused-gandalf-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:25',
                'updated_at' => '2019-01-23 08:46:25',
            ),
            101 => 
            array (
                'id' => 102,
                'fileName' => 'temp_D5714605-1139-C647-015C-3E398ABB4D27_Young-Cardi-B.jpg',
                'title' => 'Young Cardi B',
                'slug' => 'young-cardi-b-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:26',
                'updated_at' => '2019-01-23 08:46:26',
            ),
            102 => 
            array (
                'id' => 103,
                'fileName' => 'temp_8023CFCA-7BCB-E72C-9076-11FB960F3604_Car-Salesman-Slaps-Hood.jpg',
                'title' => 'Car Salesman Slaps Hood',
                'slug' => 'car-salesman-slaps-hood-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:27',
                'updated_at' => '2019-01-23 08:46:27',
            ),
            103 => 
            array (
                'id' => 104,
                'fileName' => 'temp_CE02B573-9EB6-5871-8908-2614C0CAAC27_Surprised-Koala.jpg',
                'title' => 'Surprised Koala',
                'slug' => 'surprised-koala-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:27',
                'updated_at' => '2019-01-23 08:46:27',
            ),
            104 => 
            array (
                'id' => 105,
                'fileName' => 'temp_7EA9D8C2-0A26-F33C-F8A0-543D90DCB985_Archer.jpg',
                'title' => 'Archer',
                'slug' => 'archer-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:28',
                'updated_at' => '2019-01-23 08:46:28',
            ),
            105 => 
            array (
                'id' => 106,
                'fileName' => 'temp_A98C9028-37F2-BA65-8AD6-18C4166742FB_Deadpool-Surprised.jpg',
                'title' => 'Deadpool Surprised',
                'slug' => 'deadpool-surprised-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:29',
                'updated_at' => '2019-01-23 08:46:29',
            ),
            106 => 
            array (
                'id' => 107,
                'fileName' => 'temp_304355BA-9B80-7032-A47B-56394D4B5861_Cute-Cat.jpg',
                'title' => 'Cute Cat',
                'slug' => 'cute-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:29',
                'updated_at' => '2019-01-23 08:46:29',
            ),
            107 => 
            array (
                'id' => 108,
                'fileName' => 'temp_4048A366-AB49-D5D5-582A-E62AC1054648_Dwight-Schrute.jpg',
                'title' => 'Dwight Schrute',
                'slug' => 'dwight-schrute-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:30',
                'updated_at' => '2019-01-23 08:46:30',
            ),
            108 => 
            array (
                'id' => 109,
                'fileName' => 'temp_6F6F754F-5A6F-17D9-0745-0B8F789259FB_Ermahgerd-Berks.jpg',
                'title' => 'Ermahgerd Berks',
                'slug' => 'ermahgerd-berks-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:31',
                'updated_at' => '2019-01-23 08:46:31',
            ),
            109 => 
            array (
                'id' => 110,
                'fileName' => 'temp_A60B0F52-ADA6-327C-BD32-7BC6B4AC40C5_Thats-a-paddlin.jpg',
                'title' => 'That\'s a paddlin\'',
                'slug' => 'thats-a-paddlin-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:32',
                'updated_at' => '2019-01-23 08:46:32',
            ),
            110 => 
            array (
                'id' => 111,
                'fileName' => 'temp_3AC28CCA-1604-F253-D765-29EE2B484559_Back-In-My-Day.jpg',
                'title' => 'Back In My Day',
                'slug' => 'back-in-my-day-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:32',
                'updated_at' => '2019-01-23 08:46:32',
            ),
            111 => 
            array (
                'id' => 112,
                'fileName' => 'temp_8997A03A-A43D-B208-7E39-6E2B46853637_Keep-Calm-And-Carry-On-Red.jpg',
                'title' => 'Keep Calm And Carry On Red',
                'slug' => 'keep-calm-and-carry-on-red-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:33',
                'updated_at' => '2019-01-23 08:46:33',
            ),
            112 => 
            array (
                'id' => 113,
                'fileName' => 'temp_96A39EA7-E2EF-F461-01BB-99309E0E0FBC_Im-The-Captain-Now.jpg',
                'title' => 'I\'m The Captain Now',
                'slug' => 'im-the-captain-now-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:33',
                'updated_at' => '2019-01-23 08:46:33',
            ),
            113 => 
            array (
                'id' => 114,
                'fileName' => 'temp_E1D04ED2-A68E-EB32-3A46-0161832697A4_Its-Not-Going-To-Happen.jpg',
                'title' => 'Its Not Going To Happen',
                'slug' => 'its-not-going-to-happen-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:34',
                'updated_at' => '2019-01-23 08:46:34',
            ),
            114 => 
            array (
                'id' => 115,
                'fileName' => 'temp_20BC8A1D-6491-CE69-76C0-7668DE9B8BF8_Scumbag-Steve.jpg',
                'title' => 'Scumbag Steve',
                'slug' => 'scumbag-steve-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:35',
                'updated_at' => '2019-01-23 08:46:35',
            ),
            115 => 
            array (
                'id' => 116,
                'fileName' => 'temp_AED24AA4-AB09-3870-B016-CC30BBCEF7FD_Conspiracy-Keanu.jpg',
                'title' => 'Conspiracy Keanu',
                'slug' => 'conspiracy-keanu-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:35',
                'updated_at' => '2019-01-23 08:46:35',
            ),
            116 => 
            array (
                'id' => 117,
                'fileName' => 'temp_DD942080-2C16-BEFE-211E-12E83FD779F3_Peter-Griffin-News.jpg',
                'title' => 'Peter Griffin News',
                'slug' => 'peter-griffin-news-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:36',
                'updated_at' => '2019-01-23 08:46:36',
            ),
            117 => 
            array (
                'id' => 118,
                'fileName' => 'temp_887D3FCC-E191-0A0F-C6B8-6BFBE86F8AE8_Spiderman-Computer-Desk.jpg',
                'title' => 'Spiderman Computer Desk',
                'slug' => 'spiderman-computer-desk-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:37',
                'updated_at' => '2019-01-23 08:46:37',
            ),
            118 => 
            array (
                'id' => 119,
                'fileName' => 'temp_B939C6E3-8126-00A4-2ED5-2432F2FA7F2F_Aint-Nobody-Got-Time-For-That.jpg',
                'title' => 'Aint Nobody Got Time For That',
                'slug' => 'aint-nobody-got-time-for-that-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:38',
                'updated_at' => '2019-01-23 08:46:38',
            ),
            119 => 
            array (
                'id' => 120,
                'fileName' => 'temp_964D65E1-E5B4-84E5-7D00-1DC3E118B98B_Buddy-The-Elf.jpg',
                'title' => 'Buddy The Elf',
                'slug' => 'buddy-the-elf-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:38',
                'updated_at' => '2019-01-23 08:46:38',
            ),
            120 => 
            array (
                'id' => 121,
                'fileName' => 'temp_D19BF0F7-76A2-CBD4-D07D-E508C081AD91_Squidward.jpg',
                'title' => 'Squidward',
                'slug' => 'squidward-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:39',
                'updated_at' => '2019-01-23 08:46:39',
            ),
            121 => 
            array (
                'id' => 122,
                'fileName' => 'temp_92EF0CE2-47E8-CB8D-0A0D-D86520C0EC6A_Cool-Cat-Stroll.jpg',
                'title' => 'Cool Cat Stroll',
                'slug' => 'cool-cat-stroll-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:40',
                'updated_at' => '2019-01-23 08:46:40',
            ),
            122 => 
            array (
                'id' => 123,
                'fileName' => 'temp_BF05B5EE-8ECF-AA3C-1F2D-55BB4E1E62E3_Scared-Cat.jpg',
                'title' => 'Scared Cat',
                'slug' => 'scared-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:41',
                'updated_at' => '2019-01-23 08:46:41',
            ),
            123 => 
            array (
                'id' => 124,
                'fileName' => 'temp_FDD1BF1D-63E8-523A-DBB9-3D33D0E9996D_Heres-Johnny.jpg',
                'title' => 'Heres Johnny',
                'slug' => 'heres-johnny-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:41',
                'updated_at' => '2019-01-23 08:46:41',
            ),
            124 => 
            array (
                'id' => 125,
                'fileName' => 'temp_7164AF37-9349-AAA4-D946-043987F776FF_Bender.jpg',
                'title' => 'Bender',
                'slug' => 'bender-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:42',
                'updated_at' => '2019-01-23 08:46:42',
            ),
            125 => 
            array (
                'id' => 126,
                'fileName' => 'temp_04A6E1CC-6882-8923-F3AD-EF0232C3E784_Leonardo-Dicaprio-Wolf-Of-Wall-Street.jpg',
                'title' => 'Leonardo Dicaprio Wolf Of Wall Street',
                'slug' => 'leonardo-dicaprio-wolf-of-wall-street-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:43',
                'updated_at' => '2019-01-23 08:46:43',
            ),
            126 => 
            array (
                'id' => 127,
                'fileName' => 'temp_7EDE33D9-8C86-7725-D077-5A348C6D94F1_Jack-Nicholson-The-Shining-Snow.jpg',
                'title' => 'Jack Nicholson The Shining Snow',
                'slug' => 'jack-nicholson-the-shining-snow-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:44',
                'updated_at' => '2019-01-23 08:46:44',
            ),
            127 => 
            array (
                'id' => 128,
                'fileName' => 'temp_87AD5BB2-F7F3-6995-3EC2-1D917EAA86CB_Overly-Attached-Girlfriend.jpg',
                'title' => 'Overly Attached Girlfriend',
                'slug' => 'overly-attached-girlfriend-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:44',
                'updated_at' => '2019-01-23 08:46:44',
            ),
            128 => 
            array (
                'id' => 129,
                'fileName' => 'temp_05976FAA-4B44-7B16-DFB1-893AA4A22EAC_NPC.jpg',
                'title' => 'NPC',
                'slug' => 'npc-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:46',
                'updated_at' => '2019-01-23 08:46:46',
            ),
            129 => 
            array (
                'id' => 130,
                'fileName' => 'temp_D33E97A2-E8B1-56FC-5F92-427D55AF203D_1990s-First-World-Problems.jpg',
                'title' => '1990s First World Problems',
                'slug' => '1990s-first-world-problems-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:47',
                'updated_at' => '2019-01-23 08:46:47',
            ),
            130 => 
            array (
                'id' => 131,
                'fileName' => 'temp_EECE2C9C-E379-D6B2-2777-663B11B7C46B_Chubby-Bubbles-Girl.jpg',
                'title' => 'Chubby Bubbles Girl',
                'slug' => 'chubby-bubbles-girl-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:48',
                'updated_at' => '2019-01-23 08:46:48',
            ),
            131 => 
            array (
                'id' => 132,
                'fileName' => 'temp_15F5D75F-EDFF-4F5C-5F88-6F67485B94E5_DJ-Pauly-D.jpg',
                'title' => 'DJ Pauly D',
                'slug' => 'dj-pauly-d-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:48',
                'updated_at' => '2019-01-23 08:46:48',
            ),
            132 => 
            array (
                'id' => 133,
                'fileName' => 'temp_1C00E71A-419F-FD46-EF31-3FB67BE80060_Right-In-The-Childhood.jpg',
                'title' => 'Right In The Childhood',
                'slug' => 'right-in-the-childhood-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:49',
                'updated_at' => '2019-01-23 08:46:49',
            ),
            133 => 
            array (
                'id' => 134,
                'fileName' => 'temp_BB42AD5C-2880-73F0-EC1D-C2ADCF768C45_Krusty-Krab-Vs-Chum-Bucket.jpg',
                'title' => 'Krusty Krab Vs Chum Bucket',
                'slug' => 'krusty-krab-vs-chum-bucket-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:50',
                'updated_at' => '2019-01-23 08:46:50',
            ),
            134 => 
            array (
                'id' => 135,
                'fileName' => 'temp_4D487096-8739-CFAE-4F43-A7E169772FF7_I-See-Dead-People.jpg',
                'title' => 'I See Dead People',
                'slug' => 'i-see-dead-people-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:50',
                'updated_at' => '2019-01-23 08:46:50',
            ),
            135 => 
            array (
                'id' => 136,
                'fileName' => 'temp_274D56E9-7EB1-BB36-6A38-7FC73A3309EF_Unpopular-Opinion-Puffin.jpg',
                'title' => 'Unpopular Opinion Puffin',
                'slug' => 'unpopular-opinion-puffin-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:52',
                'updated_at' => '2019-01-23 08:46:52',
            ),
            136 => 
            array (
                'id' => 137,
                'fileName' => 'temp_79CC6589-3167-9AB3-E49C-4E83113E8D78_Warning-Sign.jpg',
                'title' => 'Warning Sign',
                'slug' => 'warning-sign-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:53',
                'updated_at' => '2019-01-23 08:46:53',
            ),
            137 => 
            array (
                'id' => 138,
                'fileName' => 'temp_C3007D69-E5CB-BC6F-E6FC-6E2E36FD51A4_Spongegar.jpg',
                'title' => 'Spongegar',
                'slug' => 'spongegar-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:53',
                'updated_at' => '2019-01-23 08:46:53',
            ),
            138 => 
            array (
                'id' => 139,
                'fileName' => 'temp_FEE15DAC-9573-293F-A470-80CB16FA65AF_What-Do-We-Want-3.jpg',
                'title' => 'What Do We Want 3',
                'slug' => 'what-do-we-want-3-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:54',
                'updated_at' => '2019-01-23 08:46:54',
            ),
            139 => 
            array (
                'id' => 140,
                'fileName' => 'temp_5A7BABFD-4187-6AF7-782A-57042C27AE31_Obi-Wan-Kenobi.jpg',
                'title' => 'Obi Wan Kenobi',
                'slug' => 'obi-wan-kenobi-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:54',
                'updated_at' => '2019-01-23 08:46:54',
            ),
            140 => 
            array (
                'id' => 141,
                'fileName' => 'temp_4C453155-842A-D112-A37E-383E7426EA3E_Smiling-Cat.jpg',
                'title' => 'Smiling Cat',
                'slug' => 'smiling-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:55',
                'updated_at' => '2019-01-23 08:46:55',
            ),
            141 => 
            array (
                'id' => 142,
                'fileName' => 'temp_7DE5C264-4D65-E821-025F-817E428C79A8_I-Too-Like-To-Live-Dangerously.jpg',
                'title' => 'I Too Like To Live Dangerously',
                'slug' => 'i-too-like-to-live-dangerously-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:56',
                'updated_at' => '2019-01-23 08:46:56',
            ),
            142 => 
            array (
                'id' => 143,
                'fileName' => 'temp_4E950FE2-002D-609E-1ADF-8BC800232E6E_Satisfied-Seal.jpg',
                'title' => 'Satisfied Seal',
                'slug' => 'satisfied-seal-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:57',
                'updated_at' => '2019-01-23 08:46:57',
            ),
            143 => 
            array (
                'id' => 144,
                'fileName' => 'temp_64478A2E-A2A0-44B4-DAFB-A5FFBCD4C8F9_Lion-King.jpg',
                'title' => 'Lion King',
                'slug' => 'lion-king-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:57',
                'updated_at' => '2019-01-23 08:46:57',
            ),
            144 => 
            array (
                'id' => 145,
                'fileName' => 'temp_73015942-58C4-A18D-9E13-CA30D5181269_Persian-Cat-Room-Guardian.jpg',
                'title' => 'Persian Cat Room Guardian',
                'slug' => 'persian-cat-room-guardian-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:58',
                'updated_at' => '2019-01-23 08:46:58',
            ),
            145 => 
            array (
                'id' => 146,
                'fileName' => 'temp_D5B76ED0-604D-CB1B-B56E-A5BB4D614BA8_Skeptical-Baby.jpg',
                'title' => 'Skeptical Baby',
                'slug' => 'skeptical-baby-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:46:59',
                'updated_at' => '2019-01-23 08:46:59',
            ),
            146 => 
            array (
                'id' => 147,
                'fileName' => 'temp_FAE6DE88-DD57-A152-B9B4-FC1336D7F889_How-Tough-Are-You.jpg',
                'title' => 'How Tough Are You',
                'slug' => 'how-tough-are-you-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:00',
                'updated_at' => '2019-01-23 08:47:00',
            ),
            147 => 
            array (
                'id' => 148,
                'fileName' => 'temp_0F17E047-9952-92BA-5247-17EA3CBD5B04_Table-Flip-Guy.jpg',
                'title' => 'Table Flip Guy',
                'slug' => 'table-flip-guy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:01',
                'updated_at' => '2019-01-23 08:47:01',
            ),
            148 => 
            array (
                'id' => 149,
                'fileName' => 'temp_9B5D56DA-4B5E-AF11-EB97-FC3A09BCFD63_Success-Kid-Original.jpg',
                'title' => 'Success Kid Original',
                'slug' => 'success-kid-original-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:02',
                'updated_at' => '2019-01-23 08:47:02',
            ),
            149 => 
            array (
                'id' => 150,
                'fileName' => 'temp_730ED3D4-A2F4-AA80-CBCE-4109F11D6F4F_Liam-Neeson-Taken-2.jpg',
                'title' => 'Liam Neeson Taken 2',
                'slug' => 'liam-neeson-taken-2-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:02',
                'updated_at' => '2019-01-23 08:47:02',
            ),
            150 => 
            array (
                'id' => 151,
                'fileName' => 'temp_7B8F24F5-8B7F-EBD1-A37D-5FAB442996C6_PPAP.jpg',
                'title' => 'PPAP',
                'slug' => 'ppap-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:04',
                'updated_at' => '2019-01-23 08:47:04',
            ),
            151 => 
            array (
                'id' => 152,
                'fileName' => 'temp_B8703055-BCAF-BB8C-97F7-883656027AE1_Spiderman-Hospital.jpg',
                'title' => 'Spiderman Hospital',
                'slug' => 'spiderman-hospital-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:05',
                'updated_at' => '2019-01-23 08:47:05',
            ),
            152 => 
            array (
                'id' => 153,
                'fileName' => 'temp_D1F81B12-61C5-6CBA-BBA2-90E25976CC30_Dad-Joke-Dog.jpg',
                'title' => 'Dad Joke Dog',
                'slug' => 'dad-joke-dog-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:07',
                'updated_at' => '2019-01-23 08:47:07',
            ),
            153 => 
            array (
                'id' => 154,
                'fileName' => 'temp_CF689D57-69B5-8357-EC6A-259E03F24A33_Ill-Have-You-Know-Spongebob.jpg',
                'title' => 'Ill Have You Know Spongebob',
                'slug' => 'ill-have-you-know-spongebob-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:08',
                'updated_at' => '2019-01-23 08:47:08',
            ),
            154 => 
            array (
                'id' => 155,
                'fileName' => 'temp_A786606E-2EBB-6E4F-736F-F7BE3D447EF6_Ron-Burgundy.jpg',
                'title' => 'Ron Burgundy',
                'slug' => 'ron-burgundy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:08',
                'updated_at' => '2019-01-23 08:47:08',
            ),
            155 => 
            array (
                'id' => 156,
                'fileName' => 'temp_5640A6CC-6A9B-DADB-27C4-D7736069A3AB_Alright-Gentlemen-We-Need-A-New-Idea.jpg',
                'title' => 'Alright Gentlemen We Need A New Idea',
                'slug' => 'alright-gentlemen-we-need-a-new-idea-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:09',
                'updated_at' => '2019-01-23 08:47:09',
            ),
            156 => 
            array (
                'id' => 157,
                'fileName' => 'temp_9F807536-09CA-225B-B979-4C0E21B0B876_First-Day-On-The-Internet-Kid.jpg',
                'title' => 'First Day On The Internet Kid',
                'slug' => 'first-day-on-the-internet-kid-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:10',
                'updated_at' => '2019-01-23 08:47:10',
            ),
            157 => 
            array (
                'id' => 158,
                'fileName' => 'temp_60565295-0CED-5BAB-3D32-077C48ADD588_Happy-Star-Congratulations.jpg',
                'title' => 'Happy Star Congratulations',
                'slug' => 'happy-star-congratulations-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:12',
                'updated_at' => '2019-01-23 08:47:12',
            ),
            158 => 
            array (
                'id' => 159,
                'fileName' => 'temp_41232C48-525F-C5EF-893C-5A948146EDE7_Rick-and-Carl.jpg',
                'title' => 'Rick and Carl',
                'slug' => 'rick-and-carl-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:12',
                'updated_at' => '2019-01-23 08:47:12',
            ),
            159 => 
            array (
                'id' => 160,
                'fileName' => 'temp_020D3462-8D50-9995-CD42-5CFF1A47130C_Sudden-Clarity-Clarence.jpg',
                'title' => 'Sudden Clarity Clarence',
                'slug' => 'sudden-clarity-clarence-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:13',
                'updated_at' => '2019-01-23 08:47:13',
            ),
            160 => 
            array (
                'id' => 161,
                'fileName' => 'temp_2EA192B1-958E-7195-ACFD-279E419D7772_Money-Money.jpg',
                'title' => 'Money Money',
                'slug' => 'money-money-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:14',
                'updated_at' => '2019-01-23 08:47:14',
            ),
            161 => 
            array (
                'id' => 162,
                'fileName' => 'temp_B4C0ABF7-AAAC-5374-6882-61A5045AA019_Minor-Mistake-Marvin.jpg',
                'title' => 'Minor Mistake Marvin',
                'slug' => 'minor-mistake-marvin-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:14',
                'updated_at' => '2019-01-23 08:47:14',
            ),
            162 => 
            array (
                'id' => 163,
                'fileName' => 'temp_DAD1E15A-1915-DA2F-3F6F-5AC1A2DDC490_So-I-Got-That-Goin-For-Me-Which-Is-Nice.jpg',
                'title' => 'So I Got That Goin For Me Which Is Nice',
                'slug' => 'so-i-got-that-goin-for-me-which-is-nice-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:15',
                'updated_at' => '2019-01-23 08:47:15',
            ),
            163 => 
            array (
                'id' => 164,
                'fileName' => 'temp_02E7FDE6-135A-B2E4-C0CA-8CF23F19A24A_Oprah-You-Get-A-Car-Everybody-Gets-A-Car.jpg',
                'title' => 'Oprah You Get A Car Everybody Gets A Car',
                'slug' => 'oprah-you-get-a-car-everybody-gets-a-car-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:16',
                'updated_at' => '2019-01-23 08:47:16',
            ),
            164 => 
            array (
                'id' => 165,
                'fileName' => 'temp_5EF0B201-3229-982D-2276-DF8E927FDE62_I-Was-Told-There-Would-Be.jpg',
                'title' => 'I Was Told There Would Be',
                'slug' => 'i-was-told-there-would-be-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:17',
                'updated_at' => '2019-01-23 08:47:17',
            ),
            165 => 
            array (
                'id' => 166,
                'fileName' => 'temp_C2508DC3-2D60-FA6B-3565-B8727E17FEF9_Michael-Jackson-Popcorn.jpg',
                'title' => 'Michael Jackson Popcorn',
                'slug' => 'michael-jackson-popcorn-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:17',
                'updated_at' => '2019-01-23 08:47:17',
            ),
            166 => 
            array (
                'id' => 167,
                'fileName' => 'temp_C7F4DC3A-43E3-C539-62E4-326ED6F16D2E_Kill-Yourself-Guy.jpg',
                'title' => 'Kill Yourself Guy',
                'slug' => 'kill-yourself-guy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:18',
                'updated_at' => '2019-01-23 08:47:18',
            ),
            167 => 
            array (
                'id' => 168,
                'fileName' => 'temp_C0143929-02B9-6F61-5977-736A699A181A_Awkward-Moment-Sealion.jpg',
                'title' => 'Awkward Moment Sealion',
                'slug' => 'awkward-moment-sealion-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:18',
                'updated_at' => '2019-01-23 08:47:18',
            ),
            168 => 
            array (
                'id' => 169,
                'fileName' => 'temp_042230C6-649B-AD0B-04D6-40B6FB329521_Joseph-Ducreux.jpg',
                'title' => 'Joseph Ducreux',
                'slug' => 'joseph-ducreux-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:20',
                'updated_at' => '2019-01-23 08:47:20',
            ),
            169 => 
            array (
                'id' => 170,
                'fileName' => 'temp_8D655111-61B0-0F8F-4580-9C46A926826E_Unhelpful-High-School-Teacher.jpg',
                'title' => 'Unhelpful High School Teacher',
                'slug' => 'unhelpful-high-school-teacher-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:20',
                'updated_at' => '2019-01-23 08:47:20',
            ),
            170 => 
            array (
                'id' => 171,
                'fileName' => 'temp_8AD08060-17E1-E34F-3426-5D3F14C94199_So-I-Guess-You-Can-Say-Things-Are-Getting-Pretty-Serious.jpg',
                'title' => 'So I Guess You Can Say Things Are Getting Pretty Serious',
                'slug' => 'so-i-guess-you-can-say-things-are-getting-pretty-serious-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:21',
                'updated_at' => '2019-01-23 08:47:21',
            ),
            171 => 
            array (
                'id' => 172,
                'fileName' => 'temp_50A2F764-A690-09C4-B12C-DDECF476B7CD_Slowpoke.jpg',
                'title' => 'Slowpoke',
                'slug' => 'slowpoke-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:22',
                'updated_at' => '2019-01-23 08:47:22',
            ),
            172 => 
            array (
                'id' => 173,
                'fileName' => 'temp_91A05204-5EBB-0B0C-D9A2-7C9E83D46F96_Look-At-All-These.jpg',
                'title' => 'Look At All These',
                'slug' => 'look-at-all-these-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:23',
                'updated_at' => '2019-01-23 08:47:23',
            ),
            173 => 
            array (
                'id' => 174,
                'fileName' => 'temp_847C0DC1-FA6B-B87B-4CA9-8FA84CF755B1_Why-Cant-I-Hold-All-These-Limes.jpg',
                'title' => 'Why Can\'t I Hold All These Limes',
                'slug' => 'why-cant-i-hold-all-these-limes-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:24',
                'updated_at' => '2019-01-23 08:47:24',
            ),
            174 => 
            array (
                'id' => 175,
                'fileName' => 'temp_70123D49-9EB7-4F0A-730F-65764B0019BC_Good-Guy-Greg.jpg',
                'title' => 'Good Guy Greg',
                'slug' => 'good-guy-greg-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:25',
                'updated_at' => '2019-01-23 08:47:25',
            ),
            175 => 
            array (
                'id' => 176,
                'fileName' => 'temp_910A3A9B-5309-3F34-D982-3AAB812D6726_You-Were-The-Chosen-One-Star-Wars.jpg',
            'title' => 'You Were The Chosen One (Star Wars)',
                'slug' => 'you-were-the-chosen-one-star-wars-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:26',
                'updated_at' => '2019-01-23 08:47:26',
            ),
            176 => 
            array (
                'id' => 177,
                'fileName' => 'temp_28F76849-A1AE-4418-77AE-128A9C132671_No-Patrick.jpg',
                'title' => 'No Patrick',
                'slug' => 'no-patrick-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:26',
                'updated_at' => '2019-01-23 08:47:26',
            ),
            177 => 
            array (
                'id' => 178,
                'fileName' => 'temp_5ACFA072-410C-2C02-82B7-65BB8E84DECC_Mr-T-Pity-The-Fool.jpg',
                'title' => 'Mr T Pity The Fool',
                'slug' => 'mr-t-pity-the-fool-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:27',
                'updated_at' => '2019-01-23 08:47:27',
            ),
            178 => 
            array (
                'id' => 179,
                'fileName' => 'temp_FE81BECC-F39C-066E-D962-EA9AB943C50C_These-Arent-The-Droids-You-Were-Looking-For.jpg',
                'title' => 'These Arent The Droids You Were Looking For',
                'slug' => 'these-arent-the-droids-you-were-looking-for-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:28',
                'updated_at' => '2019-01-23 08:47:28',
            ),
            179 => 
            array (
                'id' => 180,
                'fileName' => 'temp_CB00E6D6-E521-8475-AE16-D618E76DEF0C_Computer-Guy-Facepalm.jpg',
                'title' => 'Computer Guy Facepalm',
                'slug' => 'computer-guy-facepalm-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:29',
                'updated_at' => '2019-01-23 08:47:29',
            ),
            180 => 
            array (
                'id' => 181,
                'fileName' => 'temp_40D8AC6D-646D-6852-8D1D-F46E675CD396_Socially-Awkward-Awesome-Penguin.jpg',
                'title' => 'Socially Awkward Awesome Penguin',
                'slug' => 'socially-awkward-awesome-penguin-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:29',
                'updated_at' => '2019-01-23 08:47:29',
            ),
            181 => 
            array (
                'id' => 182,
                'fileName' => 'temp_9F555B94-B140-FA63-FB05-ADBA0083F7EF_Scary-Harry.jpg',
                'title' => 'Scary Harry',
                'slug' => 'scary-harry-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:30',
                'updated_at' => '2019-01-23 08:47:30',
            ),
            182 => 
            array (
                'id' => 183,
                'fileName' => 'temp_1BED7D87-DEAA-2F9E-3313-9EFEF7259684_Baby-Godfather.jpg',
                'title' => 'Baby Godfather',
                'slug' => 'baby-godfather-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:31',
                'updated_at' => '2019-01-23 08:47:31',
            ),
            183 => 
            array (
                'id' => 184,
                'fileName' => 'temp_71BA04EF-0F0B-38CF-8527-C3776F5BFC06_Batman-Smiles.jpg',
                'title' => 'Batman Smiles',
                'slug' => 'batman-smiles-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:32',
                'updated_at' => '2019-01-23 08:47:32',
            ),
            184 => 
            array (
                'id' => 185,
                'fileName' => 'temp_C7324F8D-79E7-FE38-BA51-6A0B277D42AA_Impossibru-Guy-Original.jpg',
                'title' => 'Impossibru Guy Original',
                'slug' => 'impossibru-guy-original-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:33',
                'updated_at' => '2019-01-23 08:47:33',
            ),
            185 => 
            array (
                'id' => 186,
                'fileName' => 'temp_9782BA2D-E83A-8813-CB98-F75B7899C5B4_You-Should-Feel-Bad-Zoidberg.jpg',
                'title' => 'You Should Feel Bad Zoidberg',
                'slug' => 'you-should-feel-bad-zoidberg-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:34',
                'updated_at' => '2019-01-23 08:47:34',
            ),
            186 => 
            array (
                'id' => 187,
                'fileName' => 'temp_C405B605-8C27-09F3-CB90-8C7D1A86E909_Heavy-Breathing-Cat.jpg',
                'title' => 'Heavy Breathing Cat',
                'slug' => 'heavy-breathing-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:35',
                'updated_at' => '2019-01-23 08:47:35',
            ),
            187 => 
            array (
                'id' => 188,
                'fileName' => 'temp_0708E400-04F0-1269-96FB-4A9E54366FE0_Shrek-Cat.jpg',
                'title' => 'Shrek Cat',
                'slug' => 'shrek-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:36',
                'updated_at' => '2019-01-23 08:47:36',
            ),
            188 => 
            array (
                'id' => 189,
                'fileName' => 'temp_7C5594EB-66C6-51A6-8788-32BE38D87B9B_Snape.jpg',
                'title' => 'Snape',
                'slug' => 'snape-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:36',
                'updated_at' => '2019-01-23 08:47:36',
            ),
            189 => 
            array (
                'id' => 190,
                'fileName' => 'temp_AE632248-926D-7D06-7D9E-0D41B5B09B01_Evil-Plotting-Raccoon.jpg',
                'title' => 'Evil Plotting Raccoon',
                'slug' => 'evil-plotting-raccoon-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:37',
                'updated_at' => '2019-01-23 08:47:37',
            ),
            190 => 
            array (
                'id' => 191,
                'fileName' => 'temp_62324F0A-C02F-5DF4-CF30-F37CE58C1D56_Alien-Meeting-Suggestion.jpg',
                'title' => 'Alien Meeting Suggestion',
                'slug' => 'alien-meeting-suggestion-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:38',
                'updated_at' => '2019-01-23 08:47:38',
            ),
            191 => 
            array (
                'id' => 192,
                'fileName' => 'temp_C530A04F-5031-4389-8619-3C02AA5C2651_Consuela.jpg',
                'title' => 'Consuela',
                'slug' => 'consuela-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:39',
                'updated_at' => '2019-01-23 08:47:39',
            ),
            192 => 
            array (
                'id' => 193,
                'fileName' => 'temp_54C34983-C01B-306B-23D3-883433182BD7_Unicorn-MAN.jpg',
                'title' => 'Unicorn MAN',
                'slug' => 'unicorn-man-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:39',
                'updated_at' => '2019-01-23 08:47:39',
            ),
            193 => 
            array (
                'id' => 194,
                'fileName' => 'temp_CC77BB80-A6A3-9AEF-A2DA-C55CE66AC6CD_Angry-Toddler.jpg',
                'title' => 'Angry Toddler',
                'slug' => 'angry-toddler-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:40',
                'updated_at' => '2019-01-23 08:47:40',
            ),
            194 => 
            array (
                'id' => 195,
                'fileName' => 'temp_9440649A-C1A4-9CA1-B6CF-6D6B30AB8F92_Good-Guy-Putin.jpg',
                'title' => 'Good Guy Putin',
                'slug' => 'good-guy-putin-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:41',
                'updated_at' => '2019-01-23 08:47:41',
            ),
            195 => 
            array (
                'id' => 196,
                'fileName' => 'temp_A2677E9A-E4B3-6ED9-4F33-5F818BEFB07B_High-Expectations-Asian-Father.jpg',
                'title' => 'High Expectations Asian Father',
                'slug' => 'high-expectations-asian-father-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:41',
                'updated_at' => '2019-01-23 08:47:41',
            ),
            196 => 
            array (
                'id' => 197,
                'fileName' => 'temp_B025902F-4657-D9AD-398D-D419F74278E7_Excited-Minions.jpg',
                'title' => 'Excited Minions',
                'slug' => 'excited-minions-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:42',
                'updated_at' => '2019-01-23 08:47:42',
            ),
            197 => 
            array (
                'id' => 198,
                'fileName' => 'temp_62A4FDCA-4CFE-8687-5890-FAB9806900E6_Ryan-Gosling.jpg',
                'title' => 'Ryan Gosling',
                'slug' => 'ryan-gosling-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:43',
                'updated_at' => '2019-01-23 08:47:43',
            ),
            198 => 
            array (
                'id' => 199,
                'fileName' => 'temp_70891FEF-31B3-D235-EE30-5B8AA1957F9A_Spiderman-Laugh.jpg',
                'title' => 'Spiderman Laugh',
                'slug' => 'spiderman-laugh-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:45',
                'updated_at' => '2019-01-23 08:47:45',
            ),
            199 => 
            array (
                'id' => 200,
                'fileName' => 'temp_B98F6257-0519-7D47-9F02-2612E378351A_Frustrated-Boromir.jpg',
                'title' => 'Frustrated Boromir',
                'slug' => 'frustrated-boromir-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:45',
                'updated_at' => '2019-01-23 08:47:45',
            ),
            200 => 
            array (
                'id' => 201,
                'fileName' => 'temp_8D0F394A-7A0A-3E85-2EDA-71FBB4EE8C9F_Hey-Internet.jpg',
                'title' => 'Hey Internet',
                'slug' => 'hey-internet-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:46',
                'updated_at' => '2019-01-23 08:47:46',
            ),
            201 => 
            array (
                'id' => 202,
                'fileName' => 'temp_B6B69DC1-941F-93D5-377F-2D928B6B07E4_Computer-Guy.jpg',
                'title' => 'Computer Guy',
                'slug' => 'computer-guy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:47',
                'updated_at' => '2019-01-23 08:47:47',
            ),
            202 => 
            array (
                'id' => 203,
                'fileName' => 'temp_D8DD0935-6595-3B8C-93FD-257C041058C0_I-Know-That-Feel-Bro.jpg',
                'title' => 'I Know That Feel Bro',
                'slug' => 'i-know-that-feel-bro-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:48',
                'updated_at' => '2019-01-23 08:47:48',
            ),
            203 => 
            array (
                'id' => 204,
                'fileName' => 'temp_5593B8C7-55FB-70F2-B5D8-8848D47DDA03_You-The-Real-MVP.jpg',
                'title' => 'You The Real MVP',
                'slug' => 'you-the-real-mvp-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:48',
                'updated_at' => '2019-01-23 08:47:48',
            ),
            204 => 
            array (
                'id' => 205,
                'fileName' => 'temp_EC382E65-5123-3380-8C37-2F6226453E35_Inigo-Montoya.jpg',
                'title' => 'Inigo Montoya',
                'slug' => 'inigo-montoya-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:49',
                'updated_at' => '2019-01-23 08:47:49',
            ),
            205 => 
            array (
                'id' => 206,
                'fileName' => 'temp_CE816916-2B6B-A769-496E-E99FCB119CE6_Steve-Harvey.jpg',
                'title' => 'Steve Harvey',
                'slug' => 'steve-harvey-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:50',
                'updated_at' => '2019-01-23 08:47:50',
            ),
            206 => 
            array (
                'id' => 207,
                'fileName' => 'temp_4E655A8F-67D7-A35B-7996-6796CE059A54_Laughing-Villains.jpg',
                'title' => 'Laughing Villains',
                'slug' => 'laughing-villains-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:51',
                'updated_at' => '2019-01-23 08:47:51',
            ),
            207 => 
            array (
                'id' => 208,
                'fileName' => 'temp_F5423853-A3A1-57CD-999F-02063291624B_Overly-Manly-Man.jpg',
                'title' => 'Overly Manly Man',
                'slug' => 'overly-manly-man-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:52',
                'updated_at' => '2019-01-23 08:47:52',
            ),
            208 => 
            array (
                'id' => 209,
                'fileName' => 'temp_45A9BCBA-E8F6-BAAC-0617-724D21FDB637_Chuck-Norris-Approves.jpg',
                'title' => 'Chuck Norris Approves',
                'slug' => 'chuck-norris-approves-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:53',
                'updated_at' => '2019-01-23 08:47:53',
            ),
            209 => 
            array (
                'id' => 210,
                'fileName' => 'temp_716F2D1E-6505-89F7-A733-3D933DB2A618_Insanity-Wolf.jpg',
                'title' => 'Insanity Wolf',
                'slug' => 'insanity-wolf-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:54',
                'updated_at' => '2019-01-23 08:47:54',
            ),
            210 => 
            array (
                'id' => 211,
                'fileName' => 'temp_6B2C223D-7767-14F9-8EBB-0EDFC1C6513D_You-Underestimate-My-Power.jpg',
                'title' => 'You Underestimate My Power',
                'slug' => 'you-underestimate-my-power-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:54',
                'updated_at' => '2019-01-23 08:47:54',
            ),
            211 => 
            array (
                'id' => 212,
                'fileName' => 'temp_68798610-3429-9062-3DE5-8DC9ADC7712A_Hohoho.jpg',
                'title' => 'Hohoho',
                'slug' => 'hohoho-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:56',
                'updated_at' => '2019-01-23 08:47:56',
            ),
            212 => 
            array (
                'id' => 213,
                'fileName' => 'temp_418C494C-9783-660F-3CEA-8545C25B18DE_Look-Son.jpg',
                'title' => 'Look Son',
                'slug' => 'look-son-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:56',
                'updated_at' => '2019-01-23 08:47:56',
            ),
            213 => 
            array (
                'id' => 214,
                'fileName' => 'temp_681DF487-7700-3867-C28B-27A142F66F48_Its-Finally-Over.jpg',
                'title' => 'Its Finally Over',
                'slug' => 'its-finally-over-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:57',
                'updated_at' => '2019-01-23 08:47:57',
            ),
            214 => 
            array (
                'id' => 215,
                'fileName' => 'temp_8645A88A-F558-09D3-0AF4-D09F899623D7_Ugly-Twins.jpg',
                'title' => 'Ugly Twins',
                'slug' => 'ugly-twins-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:47:59',
                'updated_at' => '2019-01-23 08:47:59',
            ),
            215 => 
            array (
                'id' => 216,
                'fileName' => 'temp_DB36AD24-F803-F003-0C63-BABBB579242B_Super-Cool-Ski-Instructor.jpg',
                'title' => 'Super Cool Ski Instructor',
                'slug' => 'super-cool-ski-instructor-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:00',
                'updated_at' => '2019-01-23 08:48:00',
            ),
            216 => 
            array (
                'id' => 217,
                'fileName' => 'temp_EB4F1E6B-6826-EBE5-24DB-B6AA45680B1F_1950s-Middle-Finger.jpg',
                'title' => '1950s Middle Finger',
                'slug' => '1950s-middle-finger-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:01',
                'updated_at' => '2019-01-23 08:48:01',
            ),
            217 => 
            array (
                'id' => 218,
                'fileName' => 'temp_40F789D7-335D-E596-9EAF-9D7217E1F2C3_Sexy-Railroad-Spiderman.jpg',
                'title' => 'Sexy Railroad Spiderman',
                'slug' => 'sexy-railroad-spiderman-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:02',
                'updated_at' => '2019-01-23 08:48:02',
            ),
            218 => 
            array (
                'id' => 219,
                'fileName' => 'temp_B5DFF7C8-37BD-5106-1017-49A196D997D6_Welcome-To-The-Internets.jpg',
                'title' => 'Welcome To The Internets',
                'slug' => 'welcome-to-the-internets-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:03',
                'updated_at' => '2019-01-23 08:48:03',
            ),
            219 => 
            array (
                'id' => 220,
                'fileName' => 'temp_C7C9F321-E44B-1E5E-A70F-E6D322C25486_But-Thats-None-Of-My-Business-Neutral.jpg',
            'title' => 'But Thats None Of My Business (Neutral)',
                'slug' => 'but-thats-none-of-my-business-neutral-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:04',
                'updated_at' => '2019-01-23 08:48:04',
            ),
            220 => 
            array (
                'id' => 221,
                'fileName' => 'temp_1B0A9DCA-D339-6E3E-0513-CDB4FAAF44A2_Kim-Jong-Un-Sad.jpg',
                'title' => 'Kim Jong Un Sad',
                'slug' => 'kim-jong-un-sad-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:05',
                'updated_at' => '2019-01-23 08:48:05',
            ),
            221 => 
            array (
                'id' => 222,
                'fileName' => 'temp_8C94C70D-9D32-C20C-4BDC-55B9267979E8_What-Year-Is-It.jpg',
                'title' => 'What Year Is It',
                'slug' => 'what-year-is-it-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:06',
                'updated_at' => '2019-01-23 08:48:06',
            ),
            222 => 
            array (
                'id' => 223,
                'fileName' => 'temp_89191488-5C96-2AB8-D5FA-B76424E60B86_I-Guarantee-It.jpg',
                'title' => 'I Guarantee It',
                'slug' => 'i-guarantee-it-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:06',
                'updated_at' => '2019-01-23 08:48:06',
            ),
            223 => 
            array (
                'id' => 224,
                'fileName' => 'temp_F53DB5AA-8F41-D64C-5BD1-F1F1B6EB337B_LIGAF.jpg',
                'title' => 'LIGAF',
                'slug' => 'ligaf-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:07',
                'updated_at' => '2019-01-23 08:48:07',
            ),
            224 => 
            array (
                'id' => 225,
                'fileName' => 'temp_C7B8FDAB-C5A7-42E9-9A77-431A6D6A6492_Business-Cat.jpg',
                'title' => 'Business Cat',
                'slug' => 'business-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:08',
                'updated_at' => '2019-01-23 08:48:08',
            ),
            225 => 
            array (
                'id' => 226,
                'fileName' => 'temp_73E13DB3-E8BF-5C2B-A338-45EC3AEFE611_Ceiling-Cat.jpg',
                'title' => 'Ceiling Cat',
                'slug' => 'ceiling-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:10',
                'updated_at' => '2019-01-23 08:48:10',
            ),
            226 => 
            array (
                'id' => 227,
                'fileName' => 'temp_2E5F78CD-04CC-723D-3A7C-6E617BDA37AC_Comic-Book-Guy.jpg',
                'title' => 'Comic Book Guy',
                'slug' => 'comic-book-guy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:10',
                'updated_at' => '2019-01-23 08:48:10',
            ),
            227 => 
            array (
                'id' => 228,
                'fileName' => 'temp_D861EA87-2910-4512-9886-D23951D285FD_Sad-Keanu.jpg',
                'title' => 'Sad Keanu',
                'slug' => 'sad-keanu-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:12',
                'updated_at' => '2019-01-23 08:48:12',
            ),
            228 => 
            array (
                'id' => 229,
                'fileName' => 'temp_D0D5F227-1319-1848-0D87-073C8010BA0F_Talk-To-Spongebob.jpg',
                'title' => 'Talk To Spongebob',
                'slug' => 'talk-to-spongebob-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:12',
                'updated_at' => '2019-01-23 08:48:12',
            ),
            229 => 
            array (
                'id' => 230,
                'fileName' => 'temp_0CB8555A-0FFB-BD54-A637-7A48242479F8_Rick-and-Carl-Long.jpg',
                'title' => 'Rick and Carl Long',
                'slug' => 'rick-and-carl-long-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:14',
                'updated_at' => '2019-01-23 08:48:14',
            ),
            230 => 
            array (
                'id' => 231,
                'fileName' => 'temp_6CC17A4A-C5C2-2870-5900-CE0FC1CA88F0_Short-Satisfaction-VS-Truth.jpg',
                'title' => 'Short Satisfaction VS Truth',
                'slug' => 'short-satisfaction-vs-truth-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:16',
                'updated_at' => '2019-01-23 08:48:16',
            ),
            231 => 
            array (
                'id' => 232,
                'fileName' => 'temp_423FFE48-FC24-3DFD-F82F-0C31FBB27689_Captain-Phillips-Im-The-Captain-Now.jpg',
                'title' => 'Captain Phillips - I\'m The Captain Now',
                'slug' => 'captain-phillips-im-the-captain-now-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:16',
                'updated_at' => '2019-01-23 08:48:16',
            ),
            232 => 
            array (
                'id' => 233,
                'fileName' => 'temp_37D3257D-7188-7E67-F1AC-9CE9BDAF4D1D_Nuclear-Explosion.jpg',
                'title' => 'Nuclear Explosion',
                'slug' => 'nuclear-explosion-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:17',
                'updated_at' => '2019-01-23 08:48:17',
            ),
            233 => 
            array (
                'id' => 234,
                'fileName' => 'temp_7A00E3D6-DDA5-5EA1-DCF6-37A4AF96CA8C_Secure-Parking.jpg',
                'title' => 'Secure Parking',
                'slug' => 'secure-parking-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:18',
                'updated_at' => '2019-01-23 08:48:18',
            ),
            234 => 
            array (
                'id' => 235,
                'fileName' => 'temp_83A2278D-FAFA-8012-09D2-59B6E4B91834_Chuck-Norris-Guns.jpg',
                'title' => 'Chuck Norris Guns',
                'slug' => 'chuck-norris-guns-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:19',
                'updated_at' => '2019-01-23 08:48:19',
            ),
            235 => 
            array (
                'id' => 236,
                'fileName' => 'temp_11041A00-996B-EA37-7F38-79D01BDD8EFF_Pissed-Off-Obama.jpg',
                'title' => 'Pissed Off Obama',
                'slug' => 'pissed-off-obama-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:20',
                'updated_at' => '2019-01-23 08:48:20',
            ),
            236 => 
            array (
                'id' => 237,
                'fileName' => 'temp_9E3F72F9-0F78-6DFA-1779-8318E12A8FAA_Marvel-Civil-War.jpg',
                'title' => 'Marvel Civil War',
                'slug' => 'marvel-civil-war-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:21',
                'updated_at' => '2019-01-23 08:48:21',
            ),
            237 => 
            array (
                'id' => 238,
                'fileName' => 'temp_20898BB0-A5D2-73C5-9457-70F80EB86E3C_I-Have-No-Idea-What-I-Am-Doing.jpg',
                'title' => 'I Have No Idea What I Am Doing',
                'slug' => 'i-have-no-idea-what-i-am-doing-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:22',
                'updated_at' => '2019-01-23 08:48:22',
            ),
            238 => 
            array (
                'id' => 239,
                'fileName' => 'temp_37CCA148-F689-0B29-E69D-1EE6CE6338E9_Grumpy-Cat-Not-Amused.jpg',
                'title' => 'Grumpy Cat Not Amused',
                'slug' => 'grumpy-cat-not-amused-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:23',
                'updated_at' => '2019-01-23 08:48:23',
            ),
            239 => 
            array (
                'id' => 240,
                'fileName' => 'temp_7D4A70BA-8A92-141C-3A0D-0F5DC20A78E8_Well-That-Escalated-Quickly.jpg',
                'title' => 'Well That Escalated Quickly',
                'slug' => 'well-that-escalated-quickly-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:24',
                'updated_at' => '2019-01-23 08:48:24',
            ),
            240 => 
            array (
                'id' => 241,
                'fileName' => 'temp_1CDD02DD-7756-28FF-FF04-A6BB8D759DFE_Persian-Cat-Room-Guardian-Single.jpg',
                'title' => 'Persian Cat Room Guardian Single',
                'slug' => 'persian-cat-room-guardian-single-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:25',
                'updated_at' => '2019-01-23 08:48:25',
            ),
            241 => 
            array (
                'id' => 242,
                'fileName' => 'temp_3ED04DDA-74BE-9BD2-3CC8-42F09E7FBA0D_Chemistry-Cat.jpg',
                'title' => 'Chemistry Cat',
                'slug' => 'chemistry-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:26',
                'updated_at' => '2019-01-23 08:48:26',
            ),
            242 => 
            array (
                'id' => 243,
                'fileName' => 'temp_19435C32-A043-BA4B-316B-AACD643B7262_Angry-Chef-Gordon-Ramsay.jpg',
                'title' => 'Angry Chef Gordon Ramsay',
                'slug' => 'angry-chef-gordon-ramsay-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:26',
                'updated_at' => '2019-01-23 08:48:26',
            ),
            243 => 
            array (
                'id' => 244,
                'fileName' => 'temp_C3A75B6D-B376-E482-50D3-4585841F94C4_We-Will-Rebuild.jpg',
                'title' => 'We Will Rebuild',
                'slug' => 'we-will-rebuild-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:28',
                'updated_at' => '2019-01-23 08:48:28',
            ),
            244 => 
            array (
                'id' => 245,
                'fileName' => 'temp_560FEAFF-AA2A-3F33-FE62-F14D61F8FDB7_Actual-Advice-Mallard.jpg',
                'title' => 'Actual Advice Mallard',
                'slug' => 'actual-advice-mallard-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:29',
                'updated_at' => '2019-01-23 08:48:29',
            ),
            245 => 
            array (
                'id' => 246,
                'fileName' => 'temp_982D2C97-279D-04A2-BA7B-50321B9B7272_Hide-Yo-Kids-Hide-Yo-Wife.jpg',
                'title' => 'Hide Yo Kids Hide Yo Wife',
                'slug' => 'hide-yo-kids-hide-yo-wife-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:30',
                'updated_at' => '2019-01-23 08:48:30',
            ),
            246 => 
            array (
                'id' => 247,
                'fileName' => 'temp_16395F44-C73E-9C64-E19A-52A5B6CC406C_Grumpy-Cat-Birthday.jpg',
                'title' => 'Grumpy Cat Birthday',
                'slug' => 'grumpy-cat-birthday-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:31',
                'updated_at' => '2019-01-23 08:48:31',
            ),
            247 => 
            array (
                'id' => 248,
                'fileName' => 'temp_19FFFEB5-1C52-808A-3244-7CE86144BE29_Neil-deGrasse-Tyson.jpg',
                'title' => 'Neil deGrasse Tyson',
                'slug' => 'neil-degrasse-tyson-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:32',
                'updated_at' => '2019-01-23 08:48:32',
            ),
            248 => 
            array (
                'id' => 249,
                'fileName' => 'temp_8AD7DCBD-09EA-296F-7F82-0B7D2373E0AA_Sidious-Error.jpg',
                'title' => 'Sidious Error',
                'slug' => 'sidious-error-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:33',
                'updated_at' => '2019-01-23 08:48:33',
            ),
            249 => 
            array (
                'id' => 250,
                'fileName' => 'temp_A3D048DF-E519-EE99-CA41-175F52971FC0_Member-Berries.jpg',
                'title' => 'Member Berries',
                'slug' => 'member-berries-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:34',
                'updated_at' => '2019-01-23 08:48:34',
            ),
            250 => 
            array (
                'id' => 251,
                'fileName' => 'temp_CF5BFA19-1E60-913E-3512-41C4D539E83F_Karate-Kyle.jpg',
                'title' => 'Karate Kyle',
                'slug' => 'karate-kyle-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:35',
                'updated_at' => '2019-01-23 08:48:35',
            ),
            251 => 
            array (
                'id' => 252,
                'fileName' => 'temp_DFC86E82-7479-AD84-4F59-D4D985D240F3_Cool-Obama.jpg',
                'title' => 'Cool Obama',
                'slug' => 'cool-obama-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:36',
                'updated_at' => '2019-01-23 08:48:36',
            ),
            252 => 
            array (
                'id' => 253,
                'fileName' => 'temp_7AD507FD-FF53-E1F8-D560-F26D0A0A313A_OMG-Cat.jpg',
                'title' => 'OMG Cat',
                'slug' => 'omg-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:36',
                'updated_at' => '2019-01-23 08:48:36',
            ),
            253 => 
            array (
                'id' => 254,
                'fileName' => 'temp_929188E7-477A-1EAE-2BE3-AAFA8B3FB2F5_Redditors-Wife.jpg',
                'title' => 'Redditors Wife',
                'slug' => 'redditors-wife-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:37',
                'updated_at' => '2019-01-23 08:48:37',
            ),
            254 => 
            array (
                'id' => 255,
                'fileName' => 'temp_5E42250D-5CB0-155A-FEA4-BD06DBE045A5_ZNMD.jpg',
                'title' => 'ZNMD',
                'slug' => 'znmd-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:38',
                'updated_at' => '2019-01-23 08:48:38',
            ),
            255 => 
            array (
                'id' => 256,
                'fileName' => 'temp_87660FE8-9E77-2FBA-9A2A-86BBD622F928_Permission-Bane.jpg',
                'title' => 'Permission Bane',
                'slug' => 'permission-bane-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:39',
                'updated_at' => '2019-01-23 08:48:39',
            ),
            256 => 
            array (
                'id' => 257,
                'fileName' => 'temp_0AA77198-7D6A-A28A-F703-F4F2A034D5AF_Chocolate-Spongebob.jpg',
                'title' => 'Chocolate Spongebob',
                'slug' => 'chocolate-spongebob-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:40',
                'updated_at' => '2019-01-23 08:48:40',
            ),
            257 => 
            array (
                'id' => 258,
                'fileName' => 'temp_E02D47A4-0F4A-499D-9A92-36208E85E3A8_Troll-Face.jpg',
                'title' => 'Troll Face',
                'slug' => 'troll-face-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:41',
                'updated_at' => '2019-01-23 08:48:41',
            ),
            258 => 
            array (
                'id' => 259,
                'fileName' => 'temp_45412CA7-3709-E00E-4A1F-2A36E7B74332_Why-Not-Both.jpg',
                'title' => 'Why Not Both',
                'slug' => 'why-not-both-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:41',
                'updated_at' => '2019-01-23 08:48:41',
            ),
            259 => 
            array (
                'id' => 260,
                'fileName' => 'temp_FC84CA76-3D84-A2F9-10D1-A86360DE9B21_Grumpy-Cat-Christmas.jpg',
                'title' => 'Grumpy Cat Christmas',
                'slug' => 'grumpy-cat-christmas-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:42',
                'updated_at' => '2019-01-23 08:48:42',
            ),
            260 => 
            array (
                'id' => 261,
                'fileName' => 'temp_D739CB90-97D3-EF00-4ABD-D89CEE8E2B99_Bad-Luck-Bear.jpg',
                'title' => 'Bad Luck Bear',
                'slug' => 'bad-luck-bear-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:43',
                'updated_at' => '2019-01-23 08:48:43',
            ),
            261 => 
            array (
                'id' => 262,
                'fileName' => 'temp_A634FE11-9BAE-4725-589B-7BDAE0B0E19D_Today-Was-A-Good-Day.jpg',
                'title' => 'Today Was A Good Day',
                'slug' => 'today-was-a-good-day-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:44',
                'updated_at' => '2019-01-23 08:48:44',
            ),
            262 => 
            array (
                'id' => 263,
                'fileName' => 'temp_815897A7-AC87-0917-87C0-3C8C644B0025_Smiling-Jesus.jpg',
                'title' => 'Smiling Jesus',
                'slug' => 'smiling-jesus-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:45',
                'updated_at' => '2019-01-23 08:48:45',
            ),
            263 => 
            array (
                'id' => 264,
                'fileName' => 'temp_A407E81A-C964-442A-DFE8-98B43336FF85_Chuck-Norris.jpg',
                'title' => 'Chuck Norris',
                'slug' => 'chuck-norris-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:46',
                'updated_at' => '2019-01-23 08:48:46',
            ),
            264 => 
            array (
                'id' => 265,
                'fileName' => 'temp_99F2D318-FB8D-4D82-813D-3061DAC4D0EE_Interupting-Kanye.jpg',
                'title' => 'Interupting Kanye',
                'slug' => 'interupting-kanye-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:46',
                'updated_at' => '2019-01-23 08:48:46',
            ),
            265 => 
            array (
                'id' => 266,
                'fileName' => 'temp_EBDB6085-F114-6E43-F104-AF53CC97BC46_Evil-Cows.jpg',
                'title' => 'Evil Cows',
                'slug' => 'evil-cows-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:47',
                'updated_at' => '2019-01-23 08:48:47',
            ),
            266 => 
            array (
                'id' => 267,
                'fileName' => 'temp_17CC1191-95A1-6665-52CF-8203A80FD5E9_Evil-Baby.jpg',
                'title' => 'Evil Baby',
                'slug' => 'evil-baby-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:48',
                'updated_at' => '2019-01-23 08:48:48',
            ),
            267 => 
            array (
                'id' => 268,
                'fileName' => 'temp_03573EF2-3D2F-C4BB-E707-53C979B81B92_Michael-Phelps-Death-Stare.jpg',
                'title' => 'Michael Phelps Death Stare',
                'slug' => 'michael-phelps-death-stare-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:49',
                'updated_at' => '2019-01-23 08:48:49',
            ),
            268 => 
            array (
                'id' => 269,
                'fileName' => 'temp_5883D53E-3F7A-96B9-B34A-9929D2143CF5_Duck-Face-Chicks.jpg',
                'title' => 'Duck Face Chicks',
                'slug' => 'duck-face-chicks-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:50',
                'updated_at' => '2019-01-23 08:48:50',
            ),
            269 => 
            array (
                'id' => 270,
                'fileName' => 'temp_E2087C46-0A0F-29DE-C84D-16C22FC2EAB2_I-Have-No-Idea-What-I-Am-Doing-Dog.jpg',
                'title' => 'I Have No Idea What I Am Doing Dog',
                'slug' => 'i-have-no-idea-what-i-am-doing-dog-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:51',
                'updated_at' => '2019-01-23 08:48:51',
            ),
            270 => 
            array (
                'id' => 271,
                'fileName' => 'temp_D1D6E3A4-62DC-28ED-DCE1-8AB1A1FBA465_Bear-Grylls.jpg',
                'title' => 'Bear Grylls',
                'slug' => 'bear-grylls-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:52',
                'updated_at' => '2019-01-23 08:48:52',
            ),
            271 => 
            array (
                'id' => 272,
                'fileName' => 'temp_895FC6AC-6873-0207-BD8F-7588905FBF04_How-About-No-Bear.jpg',
                'title' => 'How About No Bear',
                'slug' => 'how-about-no-bear-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:52',
                'updated_at' => '2019-01-23 08:48:52',
            ),
            272 => 
            array (
                'id' => 273,
                'fileName' => 'temp_B23130E2-2B90-AA76-6C6E-5E0975A130FA_Doge-2.jpg',
                'title' => 'Doge 2',
                'slug' => 'doge-2-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:53',
                'updated_at' => '2019-01-23 08:48:53',
            ),
            273 => 
            array (
                'id' => 274,
                'fileName' => 'temp_634E1872-135A-7456-9292-03CDCB26A3EB_WTF.jpg',
                'title' => 'WTF',
                'slug' => 'wtf-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:54',
                'updated_at' => '2019-01-23 08:48:54',
            ),
            274 => 
            array (
                'id' => 275,
                'fileName' => 'temp_38F388FB-04F7-0B3C-4EF5-DD487DAA8861_Chainsaw-Bear.jpg',
                'title' => 'Chainsaw Bear',
                'slug' => 'chainsaw-bear-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:55',
                'updated_at' => '2019-01-23 08:48:55',
            ),
            275 => 
            array (
                'id' => 276,
                'fileName' => 'temp_1FA5D397-AD60-8FEF-41BD-10BB8E95C4AC_Forever-Alone.jpg',
                'title' => 'Forever Alone',
                'slug' => 'forever-alone-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:56',
                'updated_at' => '2019-01-23 08:48:56',
            ),
            276 => 
            array (
                'id' => 277,
                'fileName' => 'temp_2B03FD26-C69A-D4B9-0AB6-F2B387860F69_Dumb-Blonde.jpg',
                'title' => 'Dumb Blonde',
                'slug' => 'dumb-blonde-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:56',
                'updated_at' => '2019-01-23 08:48:56',
            ),
            277 => 
            array (
                'id' => 278,
                'fileName' => 'temp_C5CD09ED-85A3-0E98-94AE-23AB69109115_Austin-Powers-Honestly.jpg',
                'title' => 'Austin Powers Honestly',
                'slug' => 'austin-powers-honestly-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:57',
                'updated_at' => '2019-01-23 08:48:57',
            ),
            278 => 
            array (
                'id' => 279,
                'fileName' => 'temp_332B228D-A798-E26C-8C66-BDAC21EDB58A_College-Liberal.jpg',
                'title' => 'College Liberal',
                'slug' => 'college-liberal-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:48:58',
                'updated_at' => '2019-01-23 08:48:58',
            ),
            279 => 
            array (
                'id' => 280,
                'fileName' => 'temp_37253E47-DB1C-D403-9F6B-314E2DB4D889_Blank-Yellow-Sign.jpg',
                'title' => 'Blank Yellow Sign',
                'slug' => 'blank-yellow-sign-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:00',
                'updated_at' => '2019-01-23 08:49:00',
            ),
            280 => 
            array (
                'id' => 281,
                'fileName' => 'temp_FA17BEB6-E970-850F-A19E-DC18C72035A1_RPG-Fan.jpg',
                'title' => 'RPG Fan',
                'slug' => 'rpg-fan-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:01',
                'updated_at' => '2019-01-23 08:49:01',
            ),
            281 => 
            array (
                'id' => 282,
                'fileName' => 'temp_32F4A37C-4B85-F524-D408-DB32143291A4_Internet-Explorer.jpg',
                'title' => 'Internet Explorer',
                'slug' => 'internet-explorer-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:01',
                'updated_at' => '2019-01-23 08:49:01',
            ),
            282 => 
            array (
                'id' => 283,
                'fileName' => 'temp_01CF0EC8-6213-5B6B-A6C7-CC94A2B4FAE4_First-World-Stoner-Problems.jpg',
                'title' => 'First World Stoner Problems',
                'slug' => 'first-world-stoner-problems-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:02',
                'updated_at' => '2019-01-23 08:49:02',
            ),
            283 => 
            array (
                'id' => 284,
                'fileName' => 'temp_E7924954-B712-32AE-501B-FC14B050B676_Mr-Mackey.jpg',
                'title' => 'Mr Mackey',
                'slug' => 'mr-mackey-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:03',
                'updated_at' => '2019-01-23 08:49:03',
            ),
            284 => 
            array (
                'id' => 285,
                'fileName' => 'temp_CC3A32F2-CB56-BFB5-09CE-C41C126F5D94_Excited-Cat.jpg',
                'title' => 'Excited Cat',
                'slug' => 'excited-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:04',
                'updated_at' => '2019-01-23 08:49:04',
            ),
            285 => 
            array (
                'id' => 286,
                'fileName' => 'temp_07CB3871-2B4C-36A8-9891-ADC20E833A64_Oh-No.jpg',
                'title' => 'Oh No',
                'slug' => 'oh-no-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:05',
                'updated_at' => '2019-01-23 08:49:05',
            ),
            286 => 
            array (
                'id' => 287,
                'fileName' => 'temp_BC38FF01-4CA8-D93A-2570-35C627EB061E_Keep-Calm-And-Carry-On-Black.jpg',
                'title' => 'Keep Calm And Carry On Black',
                'slug' => 'keep-calm-and-carry-on-black-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:06',
                'updated_at' => '2019-01-23 08:49:06',
            ),
            287 => 
            array (
                'id' => 288,
                'fileName' => 'temp_1B01EA6C-FD9F-A488-F352-EC835784D4E7_Yao-Ming.jpg',
                'title' => 'Yao Ming',
                'slug' => 'yao-ming-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:06',
                'updated_at' => '2019-01-23 08:49:06',
            ),
            288 => 
            array (
                'id' => 289,
                'fileName' => 'temp_25F32C12-1A39-04C7-6B21-7244A967A682_Yo-Mamas-So-Fat.jpg',
                'title' => 'Yo Mamas So Fat',
                'slug' => 'yo-mamas-so-fat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:07',
                'updated_at' => '2019-01-23 08:49:07',
            ),
            289 => 
            array (
                'id' => 290,
                'fileName' => 'temp_7B99C4DE-A94E-AF12-FFA1-ACEB750D524D_Patrick-Says.jpg',
                'title' => 'Patrick Says',
                'slug' => 'patrick-says-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:08',
                'updated_at' => '2019-01-23 08:49:08',
            ),
            290 => 
            array (
                'id' => 291,
                'fileName' => 'temp_1F9F8B85-8717-1C10-58B2-BBFC8E327DF7_Hipster-Barista.jpg',
                'title' => 'Hipster Barista',
                'slug' => 'hipster-barista-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:09',
                'updated_at' => '2019-01-23 08:49:09',
            ),
            291 => 
            array (
                'id' => 292,
                'fileName' => 'temp_63259F24-9745-95D1-1DF5-DBC1668A6723_Guinness-World-Record.jpg',
                'title' => 'Guinness World Record',
                'slug' => 'guinness-world-record-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:10',
                'updated_at' => '2019-01-23 08:49:10',
            ),
            292 => 
            array (
                'id' => 293,
                'fileName' => 'temp_209B2FCA-7A0C-2619-8E64-6C8F337451D6_Because-Race-Car.jpg',
                'title' => 'Because Race Car',
                'slug' => 'because-race-car-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:11',
                'updated_at' => '2019-01-23 08:49:11',
            ),
            293 => 
            array (
                'id' => 294,
                'fileName' => 'temp_20E441A0-45D6-5CB2-02BA-9C17EF595D73_Sad-Baby.jpg',
                'title' => 'Sad Baby',
                'slug' => 'sad-baby-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:12',
                'updated_at' => '2019-01-23 08:49:12',
            ),
            294 => 
            array (
                'id' => 295,
                'fileName' => 'temp_9F78C2F7-A635-F17C-EFDA-ADC83072F081_Albert-Einstein-1.jpg',
                'title' => 'Albert Einstein 1',
                'slug' => 'albert-einstein-1-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:13',
                'updated_at' => '2019-01-23 08:49:13',
            ),
            295 => 
            array (
                'id' => 296,
                'fileName' => 'temp_5EE44F81-326D-4D8C-342A-87EE68B678C6_Pathetic-Spidey.jpg',
                'title' => 'Pathetic Spidey',
                'slug' => 'pathetic-spidey-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:13',
                'updated_at' => '2019-01-23 08:49:13',
            ),
            296 => 
            array (
                'id' => 297,
                'fileName' => 'temp_68402412-3121-BE18-1BA3-CA27EFC53B7B_Priority-Peter.jpg',
                'title' => 'Priority Peter',
                'slug' => 'priority-peter-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:14',
                'updated_at' => '2019-01-23 08:49:14',
            ),
            297 => 
            array (
                'id' => 298,
                'fileName' => 'temp_7808B1BC-AEFA-7097-DA35-7A528BAED454_Why-Is-The-Rum-Gone.jpg',
                'title' => 'Why Is The Rum Gone',
                'slug' => 'why-is-the-rum-gone-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:15',
                'updated_at' => '2019-01-23 08:49:15',
            ),
            298 => 
            array (
                'id' => 299,
                'fileName' => 'temp_22B07BAD-E1AF-1C01-4505-1D5E0CA3E46D_Baby-Insanity-Wolf.jpg',
                'title' => 'Baby Insanity Wolf',
                'slug' => 'baby-insanity-wolf-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:16',
                'updated_at' => '2019-01-23 08:49:16',
            ),
            299 => 
            array (
                'id' => 300,
                'fileName' => 'temp_2CA333CD-A5D5-B413-05D1-36B97AE620E4_Ron-Swanson.jpg',
                'title' => 'Ron Swanson',
                'slug' => 'ron-swanson-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:17',
                'updated_at' => '2019-01-23 08:49:17',
            ),
            300 => 
            array (
                'id' => 301,
                'fileName' => 'temp_CBE75AA1-B134-9A2A-2242-9692F213C857_You-The-Real-MVP-2.jpg',
                'title' => 'You The Real MVP 2',
                'slug' => 'you-the-real-mvp-2-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:18',
                'updated_at' => '2019-01-23 08:49:18',
            ),
            301 => 
            array (
                'id' => 302,
                'fileName' => 'temp_9D8911F1-48B0-C177-2BAC-CDA1D5EA3E31_Cereal-Guy-Spitting.jpg',
                'title' => 'Cereal Guy Spitting',
                'slug' => 'cereal-guy-spitting-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:19',
                'updated_at' => '2019-01-23 08:49:19',
            ),
            302 => 
            array (
                'id' => 303,
                'fileName' => 'temp_59A4CBE6-F777-0A0E-40E5-2607D7697A5E_Bazooka-Squirrel.jpg',
                'title' => 'Bazooka Squirrel',
                'slug' => 'bazooka-squirrel-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:20',
                'updated_at' => '2019-01-23 08:49:20',
            ),
            303 => 
            array (
                'id' => 304,
                'fileName' => 'temp_AD020D3F-BE65-FC45-BE29-01D9A5B776AB_Monkey-Business.jpg',
                'title' => 'Monkey Business',
                'slug' => 'monkey-business-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:21',
                'updated_at' => '2019-01-23 08:49:21',
            ),
            304 => 
            array (
                'id' => 305,
                'fileName' => 'temp_A41B7648-5088-E5A8-FDE0-061E71AE128B_Weird-Stuff-I-Do-Potoo.jpg',
                'title' => 'Weird Stuff I Do Potoo',
                'slug' => 'weird-stuff-i-do-potoo-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:22',
                'updated_at' => '2019-01-23 08:49:22',
            ),
            305 => 
            array (
                'id' => 306,
                'fileName' => 'temp_F8B87728-9EEE-3393-D0A6-48CC492AF1F1_Travelonshark.jpg',
                'title' => 'Travelonshark',
                'slug' => 'travelonshark-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:23',
                'updated_at' => '2019-01-23 08:49:23',
            ),
            306 => 
            array (
                'id' => 307,
                'fileName' => 'temp_5FEA25DB-B9D4-DE66-170F-E6F090552769_Sad-Spiderman.jpg',
                'title' => 'Sad Spiderman',
                'slug' => 'sad-spiderman-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:23',
                'updated_at' => '2019-01-23 08:49:23',
            ),
            307 => 
            array (
                'id' => 308,
                'fileName' => 'temp_F9777C68-A6D8-F299-E27A-A1C4AB237638_Internet-Guide.jpg',
                'title' => 'Internet Guide',
                'slug' => 'internet-guide-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:24',
                'updated_at' => '2019-01-23 08:49:24',
            ),
            308 => 
            array (
                'id' => 309,
                'fileName' => 'temp_146CCBC8-3E61-6EAB-3E25-6E7A8917435B_Take-A-Seat-Cat.jpg',
                'title' => 'Take A Seat Cat',
                'slug' => 'take-a-seat-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:25',
                'updated_at' => '2019-01-23 08:49:25',
            ),
            309 => 
            array (
                'id' => 310,
                'fileName' => 'temp_136CE7F5-DF59-15E2-DF5E-DC70E06610B8_Mario-Hammer-Smash.jpg',
                'title' => 'Mario Hammer Smash',
                'slug' => 'mario-hammer-smash-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:26',
                'updated_at' => '2019-01-23 08:49:26',
            ),
            310 => 
            array (
                'id' => 311,
                'fileName' => 'temp_3A1ABE91-4988-47F2-B6BA-612AB64C7B79_TED.jpg',
                'title' => 'TED',
                'slug' => 'ted-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:27',
                'updated_at' => '2019-01-23 08:49:27',
            ),
            311 => 
            array (
                'id' => 312,
                'fileName' => 'temp_8E8231C3-9CA0-C7E6-6E36-5C4CEB648517_Chuck-Norris-Phone.jpg',
                'title' => 'Chuck Norris Phone',
                'slug' => 'chuck-norris-phone-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:28',
                'updated_at' => '2019-01-23 08:49:28',
            ),
            312 => 
            array (
                'id' => 313,
                'fileName' => 'temp_98F958F1-0196-BEC8-2C8E-CEA5FEBA5173_Chill-Out-Lemur.jpg',
                'title' => 'Chill Out Lemur',
                'slug' => 'chill-out-lemur-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:28',
                'updated_at' => '2019-01-23 08:49:28',
            ),
            313 => 
            array (
                'id' => 314,
                'fileName' => 'temp_B1EE5308-F1E8-4DAE-7EFF-C331BFC5DDCE_Castaway-Fire.jpg',
                'title' => 'Castaway Fire',
                'slug' => 'castaway-fire-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:30',
                'updated_at' => '2019-01-23 08:49:30',
            ),
            314 => 
            array (
                'id' => 315,
                'fileName' => 'temp_8A0F920A-2330-949B-4303-40C39812552A_Challenge-Accepted-Rage-Face.jpg',
                'title' => 'Challenge Accepted Rage Face',
                'slug' => 'challenge-accepted-rage-face-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:30',
                'updated_at' => '2019-01-23 08:49:30',
            ),
            315 => 
            array (
                'id' => 316,
                'fileName' => 'temp_58FB07FF-3A88-36C0-5CC9-07074F548AA4_Thats-Just-Something-X-Say.jpg',
                'title' => 'Thats Just Something X Say',
                'slug' => 'thats-just-something-x-say-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:31',
                'updated_at' => '2019-01-23 08:49:31',
            ),
            316 => 
            array (
                'id' => 317,
                'fileName' => 'temp_F0CB5CE4-7D10-6375-E1F6-6F371D44813C_If-You-Know-What-I-Mean-Bean.jpg',
                'title' => 'If You Know What I Mean Bean',
                'slug' => 'if-you-know-what-i-mean-bean-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:31',
                'updated_at' => '2019-01-23 08:49:31',
            ),
            317 => 
            array (
                'id' => 318,
                'fileName' => 'temp_600A0424-BE97-B91F-D3F9-526CF6CD8F04_Morgan-Freeman-Good-Luck.jpg',
                'title' => 'Morgan Freeman Good Luck',
                'slug' => 'morgan-freeman-good-luck-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:32',
                'updated_at' => '2019-01-23 08:49:32',
            ),
            318 => 
            array (
                'id' => 319,
                'fileName' => 'temp_E5410746-2631-CDBF-86FD-585D1C156212_You-Dont-Say.jpg',
                'title' => 'You Don\'t Say',
                'slug' => 'you-dont-say-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:33',
                'updated_at' => '2019-01-23 08:49:33',
            ),
            319 => 
            array (
                'id' => 320,
                'fileName' => 'temp_EB005467-54C6-A63B-C269-0E411DDE0D93_Chuck-Norris-Finger.jpg',
                'title' => 'Chuck Norris Finger',
                'slug' => 'chuck-norris-finger-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:35',
                'updated_at' => '2019-01-23 08:49:35',
            ),
            320 => 
            array (
                'id' => 321,
                'fileName' => 'temp_9A76EB64-7583-2387-4804-54B0E34AE9DB_Patriotic-Eagle.jpg',
                'title' => 'Patriotic Eagle',
                'slug' => 'patriotic-eagle-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:35',
                'updated_at' => '2019-01-23 08:49:35',
            ),
            321 => 
            array (
                'id' => 322,
                'fileName' => 'temp_58492E80-9AA9-3D6E-97E5-9830AD8EB2F7_Brian-Williams-Was-There.jpg',
                'title' => 'Brian Williams Was There',
                'slug' => 'brian-williams-was-there-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:36',
                'updated_at' => '2019-01-23 08:49:36',
            ),
            322 => 
            array (
                'id' => 323,
                'fileName' => 'temp_6E737496-9EC2-F4C8-D957-0A5938B7AC36_LOL-Guy.jpg',
                'title' => 'LOL Guy',
                'slug' => 'lol-guy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:37',
                'updated_at' => '2019-01-23 08:49:37',
            ),
            323 => 
            array (
                'id' => 324,
                'fileName' => 'temp_E4415BE9-23FF-F5A2-3736-5634EFFDD491_High-Dog.jpg',
                'title' => 'High Dog',
                'slug' => 'high-dog-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:38',
                'updated_at' => '2019-01-23 08:49:38',
            ),
            324 => 
            array (
                'id' => 325,
                'fileName' => 'temp_380F587B-E65B-F6BB-FC74-17FADEEC7767_Bill-Murray-Golf.jpg',
                'title' => 'Bill Murray Golf',
                'slug' => 'bill-murray-golf-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:40',
                'updated_at' => '2019-01-23 08:49:40',
            ),
            325 => 
            array (
                'id' => 326,
                'fileName' => 'temp_24B28476-C5AD-2F9A-AC35-379FB3A2C520_Kool-Kid-Klan.jpg',
                'title' => 'Kool Kid Klan',
                'slug' => 'kool-kid-klan-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:40',
                'updated_at' => '2019-01-23 08:49:40',
            ),
            326 => 
            array (
                'id' => 327,
                'fileName' => 'temp_D5EBCF9D-4260-949A-A032-F10E3DCF46B6_McKayla-Maroney-Not-Impressed.jpg',
                'title' => 'McKayla Maroney Not Impressed',
                'slug' => 'mckayla-maroney-not-impressed-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:42',
                'updated_at' => '2019-01-23 08:49:42',
            ),
            327 => 
            array (
                'id' => 328,
                'fileName' => 'temp_41C6384B-F246-8EF7-E2AB-7398AF8044BE_The-Rock-It-Doesnt-Matter.jpg',
                'title' => 'The Rock It Doesnt Matter',
                'slug' => 'the-rock-it-doesnt-matter-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:43',
                'updated_at' => '2019-01-23 08:49:43',
            ),
            328 => 
            array (
                'id' => 329,
                'fileName' => 'temp_87E2BD23-DB4A-0C04-9247-6079620E9D2B_And-then-I-said-Obama.jpg',
                'title' => 'And then I said Obama',
                'slug' => 'and-then-i-said-obama-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:44',
                'updated_at' => '2019-01-23 08:49:44',
            ),
            329 => 
            array (
                'id' => 330,
                'fileName' => 'temp_F58DB595-77A9-77E6-7E62-946F3DC89FB7_Eye-Of-Sauron.jpg',
                'title' => 'Eye Of Sauron',
                'slug' => 'eye-of-sauron-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:44',
                'updated_at' => '2019-01-23 08:49:44',
            ),
            330 => 
            array (
                'id' => 331,
                'fileName' => 'temp_54F08297-7681-5B08-2F54-2C25921F6B81_Mad-Money-Jim-Cramer.jpg',
                'title' => 'Mad Money Jim Cramer',
                'slug' => 'mad-money-jim-cramer-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:45',
                'updated_at' => '2019-01-23 08:49:45',
            ),
            331 => 
            array (
                'id' => 332,
                'fileName' => 'temp_38A478E6-C089-3D02-A274-A016B1A1D275_Bad-Joke-Eel.jpg',
                'title' => 'Bad Joke Eel',
                'slug' => 'bad-joke-eel-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:46',
                'updated_at' => '2019-01-23 08:49:46',
            ),
            332 => 
            array (
                'id' => 333,
                'fileName' => 'temp_1ED1CE50-B403-B0F4-8C87-45DFDE1BF283_Question-Rage-Face.jpg',
                'title' => 'Question Rage Face',
                'slug' => 'question-rage-face-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:47',
                'updated_at' => '2019-01-23 08:49:47',
            ),
            333 => 
            array (
                'id' => 334,
                'fileName' => 'temp_5B8C1A59-7969-9AF6-AC24-467705F92BA4_Beard-Baby.jpg',
                'title' => 'Beard Baby',
                'slug' => 'beard-baby-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:47',
                'updated_at' => '2019-01-23 08:49:47',
            ),
            334 => 
            array (
                'id' => 335,
                'fileName' => 'temp_568108FE-E229-3852-A344-2DD6B68EF299_Money-Man.jpg',
                'title' => 'Money Man',
                'slug' => 'money-man-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:48',
                'updated_at' => '2019-01-23 08:49:48',
            ),
            335 => 
            array (
                'id' => 336,
                'fileName' => 'temp_DC33EF81-188D-58A2-435A-3F2A8534DB7F_Steve-Jobs.jpg',
                'title' => 'Steve Jobs',
                'slug' => 'steve-jobs-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:49',
                'updated_at' => '2019-01-23 08:49:49',
            ),
            336 => 
            array (
                'id' => 337,
                'fileName' => 'temp_8E68B1BC-BB54-2B3D-173F-FE207068C190_Afraid-To-Ask-Andy-Closeup.jpg',
            'title' => 'Afraid To Ask Andy (Closeup)',
                'slug' => 'afraid-to-ask-andy-closeup-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:49',
                'updated_at' => '2019-01-23 08:49:49',
            ),
            337 => 
            array (
                'id' => 338,
                'fileName' => 'temp_CE00E7FB-8817-6DAC-D694-52336DD0AD1E_No-I-Cant-Obama.jpg',
                'title' => 'No I Cant Obama',
                'slug' => 'no-i-cant-obama-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:50',
                'updated_at' => '2019-01-23 08:49:50',
            ),
            338 => 
            array (
                'id' => 339,
                'fileName' => 'temp_053F2B9A-02A0-53A4-9B3B-3FEC85A1ED1F_Grumpy-Cat-Star-Wars.jpg',
                'title' => 'Grumpy Cat Star Wars',
                'slug' => 'grumpy-cat-star-wars-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:51',
                'updated_at' => '2019-01-23 08:49:51',
            ),
            339 => 
            array (
                'id' => 340,
                'fileName' => 'temp_347E1470-2D86-226F-7F98-69CE26A5E1CB_Advice-Yoda.jpg',
                'title' => 'Advice Yoda',
                'slug' => 'advice-yoda-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:52',
                'updated_at' => '2019-01-23 08:49:52',
            ),
            340 => 
            array (
                'id' => 341,
                'fileName' => 'temp_531745F4-F6DC-DCC0-B2B5-7BC969230D26_Crying-Because-Of-Cute.jpg',
                'title' => 'Crying Because Of Cute',
                'slug' => 'crying-because-of-cute-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:52',
                'updated_at' => '2019-01-23 08:49:52',
            ),
            341 => 
            array (
                'id' => 342,
                'fileName' => 'temp_A5253CB0-866F-53CE-271E-E7F8EE3D2E77_Psy-Horse-Dance.jpg',
                'title' => 'Psy Horse Dance',
                'slug' => 'psy-horse-dance-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:54',
                'updated_at' => '2019-01-23 08:49:54',
            ),
            342 => 
            array (
                'id' => 343,
                'fileName' => 'temp_109F293A-5C83-98BC-3173-2853D54B311F_Samuel-Jackson-Glance.jpg',
                'title' => 'Samuel Jackson Glance',
                'slug' => 'samuel-jackson-glance-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:55',
                'updated_at' => '2019-01-23 08:49:55',
            ),
            343 => 
            array (
                'id' => 344,
                'fileName' => 'temp_4C35FF8F-DC2F-CC98-D219-71A80C7D870D_Futurama-Zoidberg.jpg',
                'title' => 'Futurama Zoidberg',
                'slug' => 'futurama-zoidberg-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:56',
                'updated_at' => '2019-01-23 08:49:56',
            ),
            344 => 
            array (
                'id' => 345,
                'fileName' => 'temp_D02AA942-BE36-9C9D-9AAF-CD57A4ABD105_Facepalm-Bear.jpg',
                'title' => 'Facepalm Bear',
                'slug' => 'facepalm-bear-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:57',
                'updated_at' => '2019-01-23 08:49:57',
            ),
            345 => 
            array (
                'id' => 346,
                'fileName' => 'temp_0EC7221D-6213-6CEE-9E97-FC27B3211064_Sergeant-Hartmann.jpg',
                'title' => 'Sergeant Hartmann',
                'slug' => 'sergeant-hartmann-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:58',
                'updated_at' => '2019-01-23 08:49:58',
            ),
            346 => 
            array (
                'id' => 347,
                'fileName' => 'temp_6737120F-B36E-EA53-01EB-708189AB8852_Advice-Dog.jpg',
                'title' => 'Advice Dog',
                'slug' => 'advice-dog-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:49:59',
                'updated_at' => '2019-01-23 08:49:59',
            ),
            347 => 
            array (
                'id' => 348,
                'fileName' => 'temp_3C9A37ED-D60A-CA4D-1919-51BE752FBE37_Bad-Pun-Anna-Kendrick.jpg',
                'title' => 'Bad Pun Anna Kendrick',
                'slug' => 'bad-pun-anna-kendrick-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:00',
                'updated_at' => '2019-01-23 08:50:00',
            ),
            348 => 
            array (
                'id' => 349,
                'fileName' => 'temp_D6F09E44-866C-9076-712D-1200A64259ED_Barney-Stinson-Win.jpg',
                'title' => 'Barney Stinson Win',
                'slug' => 'barney-stinson-win-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:00',
                'updated_at' => '2019-01-23 08:50:00',
            ),
            349 => 
            array (
                'id' => 350,
                'fileName' => 'temp_7D43C80B-984A-77A9-0D4F-0E110E5FDBF0_Joker-Rainbow-Hands.jpg',
                'title' => 'Joker Rainbow Hands',
                'slug' => 'joker-rainbow-hands-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:01',
                'updated_at' => '2019-01-23 08:50:01',
            ),
            350 => 
            array (
                'id' => 351,
                'fileName' => 'temp_2E2A33BD-03C9-49E6-D594-DEB3EF2045B5_Surprised-Coala.jpg',
                'title' => 'Surprised Coala',
                'slug' => 'surprised-coala-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:03',
                'updated_at' => '2019-01-23 08:50:03',
            ),
            351 => 
            array (
                'id' => 352,
                'fileName' => 'temp_BD9239EA-41D4-94F1-E984-2B219209C672_Gotta-Go-Cat.jpg',
                'title' => 'Gotta Go Cat',
                'slug' => 'gotta-go-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:04',
                'updated_at' => '2019-01-23 08:50:04',
            ),
            352 => 
            array (
                'id' => 353,
                'fileName' => 'temp_C523B9C8-59C9-33EE-8D85-9D1AD541483A_Socially-Awkward-Penguin.jpg',
                'title' => 'Socially Awkward Penguin',
                'slug' => 'socially-awkward-penguin-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:05',
                'updated_at' => '2019-01-23 08:50:05',
            ),
            353 => 
            array (
                'id' => 354,
                'fileName' => 'temp_E9377F05-8EAB-9E4A-0B90-F2D93EFAEC96_Storytelling-Grandpa.jpg',
                'title' => 'Storytelling Grandpa',
                'slug' => 'storytelling-grandpa-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:05',
                'updated_at' => '2019-01-23 08:50:05',
            ),
            354 => 
            array (
                'id' => 355,
                'fileName' => 'temp_8B5D8CFF-499D-FD86-217B-25970F8A40BC_Hillary-Clinton-Cellphone.jpg',
                'title' => 'Hillary Clinton Cellphone',
                'slug' => 'hillary-clinton-cellphone-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:06',
                'updated_at' => '2019-01-23 08:50:06',
            ),
            355 => 
            array (
                'id' => 356,
                'fileName' => 'temp_B6E984A5-D6C1-3B40-5765-C1F42C27F62C_Marvel-Civil-War-2.jpg',
                'title' => 'Marvel Civil War 2',
                'slug' => 'marvel-civil-war-2-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:07',
                'updated_at' => '2019-01-23 08:50:07',
            ),
            356 => 
            array (
                'id' => 357,
                'fileName' => 'temp_AA1C9DF6-9DB6-E994-BD22-0E5B8E2216F2_Hipster-Ariel.jpg',
                'title' => 'Hipster Ariel',
                'slug' => 'hipster-ariel-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:08',
                'updated_at' => '2019-01-23 08:50:08',
            ),
            357 => 
            array (
                'id' => 358,
                'fileName' => 'temp_DC908579-92ED-BFBE-F13A-EB6CECD1E4E6_OMG-Karen.jpg',
                'title' => 'OMG Karen',
                'slug' => 'omg-karen-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:09',
                'updated_at' => '2019-01-23 08:50:09',
            ),
            358 => 
            array (
                'id' => 359,
                'fileName' => 'temp_2CADA0E9-7B50-582F-AFAC-ECAB7B2173A2_Laughing-Goat.jpg',
                'title' => 'Laughing Goat',
                'slug' => 'laughing-goat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:10',
                'updated_at' => '2019-01-23 08:50:10',
            ),
            359 => 
            array (
                'id' => 360,
                'fileName' => 'temp_3DF81B47-B80C-3A9A-76B3-970591BC3E92_Confused-Lebowski.jpg',
                'title' => 'Confused Lebowski',
                'slug' => 'confused-lebowski-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:11',
                'updated_at' => '2019-01-23 08:50:11',
            ),
            360 => 
            array (
                'id' => 361,
                'fileName' => 'temp_1E031278-7F5A-575B-0366-8ABE5EE807CE_Dr-Evil.jpg',
                'title' => 'Dr Evil',
                'slug' => 'dr-evil-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:12',
                'updated_at' => '2019-01-23 08:50:12',
            ),
            361 => 
            array (
                'id' => 362,
                'fileName' => 'temp_8C63F6C5-3C6F-7281-241C-14820ADFA8EB_Dwight-Schrute-2.jpg',
                'title' => 'Dwight Schrute 2',
                'slug' => 'dwight-schrute-2-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:12',
                'updated_at' => '2019-01-23 08:50:12',
            ),
            362 => 
            array (
                'id' => 363,
                'fileName' => 'temp_F720C482-A63A-6D05-FC2C-638C663C3C6E_Grumpy-Cat-Happy.jpg',
                'title' => 'Grumpy Cat Happy',
                'slug' => 'grumpy-cat-happy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:14',
                'updated_at' => '2019-01-23 08:50:14',
            ),
            363 => 
            array (
                'id' => 364,
                'fileName' => 'temp_395F39D5-07CC-4521-368E-9B475CA5A7B1_Fat-Cat.jpg',
                'title' => 'Fat Cat',
                'slug' => 'fat-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:14',
                'updated_at' => '2019-01-23 08:50:14',
            ),
            364 => 
            array (
                'id' => 365,
                'fileName' => 'temp_3F77E885-71C8-73BC-CC86-69B900BEFD1E_True-Story.jpg',
                'title' => 'True Story',
                'slug' => 'true-story-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:16',
                'updated_at' => '2019-01-23 08:50:16',
            ),
            365 => 
            array (
                'id' => 366,
                'fileName' => 'temp_69A1D9E4-E9FE-BE7E-A803-C231E48B3497_TSA-Douche.jpg',
                'title' => 'TSA Douche',
                'slug' => 'tsa-douche-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:17',
                'updated_at' => '2019-01-23 08:50:17',
            ),
            366 => 
            array (
                'id' => 367,
                'fileName' => 'temp_52D5328A-4C5D-3650-C78C-2C77E4624D14_Grumpy-Cat-Reverse.jpg',
                'title' => 'Grumpy Cat Reverse',
                'slug' => 'grumpy-cat-reverse-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:18',
                'updated_at' => '2019-01-23 08:50:18',
            ),
            367 => 
            array (
                'id' => 368,
                'fileName' => 'temp_853D117A-2695-966F-58B8-0192F0C31D05_Rick-and-Carl-3.jpg',
                'title' => 'Rick and Carl 3',
                'slug' => 'rick-and-carl-3-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:19',
                'updated_at' => '2019-01-23 08:50:19',
            ),
            368 => 
            array (
                'id' => 369,
                'fileName' => 'temp_C2C4CD22-596B-69F2-4005-59813BAC1B2A_Monkey-OOH.jpg',
                'title' => 'Monkey OOH',
                'slug' => 'monkey-ooh-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:19',
                'updated_at' => '2019-01-23 08:50:19',
            ),
            369 => 
            array (
                'id' => 370,
                'fileName' => 'temp_9257B5F8-BDA2-E29C-D2EF-BEBF28ACCE7F_Super-Birthday-Squirrel.jpg',
                'title' => 'Super Birthday Squirrel',
                'slug' => 'super-birthday-squirrel-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:21',
                'updated_at' => '2019-01-23 08:50:21',
            ),
            370 => 
            array (
                'id' => 371,
                'fileName' => 'temp_C18BA023-8E25-38E9-4AF1-C6B70548A6A6_Vladimir-Putin.jpg',
                'title' => 'Vladimir Putin',
                'slug' => 'vladimir-putin-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:22',
                'updated_at' => '2019-01-23 08:50:22',
            ),
            371 => 
            array (
                'id' => 372,
                'fileName' => 'temp_71CD8973-C631-EE3A-7E0B-C1DEF7E9C794_Anti-Joke-Chicken.jpg',
                'title' => 'Anti Joke Chicken',
                'slug' => 'anti-joke-chicken-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:22',
                'updated_at' => '2019-01-23 08:50:22',
            ),
            372 => 
            array (
                'id' => 373,
                'fileName' => 'temp_FCFC7785-97E8-8B05-9664-A368B20BDF2E_Quit-Hatin.jpg',
                'title' => 'Quit Hatin',
                'slug' => 'quit-hatin-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:23',
                'updated_at' => '2019-01-23 08:50:23',
            ),
            373 => 
            array (
                'id' => 374,
                'fileName' => 'temp_43707E1D-6112-0E12-8480-01624C90C9C7_Life-Sucks.jpg',
                'title' => 'Life Sucks',
                'slug' => 'life-sucks-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:24',
                'updated_at' => '2019-01-23 08:50:24',
            ),
            374 => 
            array (
                'id' => 375,
                'fileName' => 'temp_BCD2ED06-D05D-A8EC-8461-B69B2F8FE2DA_Captain-Hindsight.jpg',
                'title' => 'Captain Hindsight',
                'slug' => 'captain-hindsight-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:25',
                'updated_at' => '2019-01-23 08:50:25',
            ),
            375 => 
            array (
                'id' => 376,
                'fileName' => 'temp_BFF2F1C5-E270-6836-4AFF-54FBCDE7C52E_Mother-Of-God.jpg',
                'title' => 'Mother Of God',
                'slug' => 'mother-of-god-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:26',
                'updated_at' => '2019-01-23 08:50:26',
            ),
            376 => 
            array (
                'id' => 377,
                'fileName' => 'temp_80BF38D6-040F-A323-F802-997E59E40C90_Spiderman-Camera.jpg',
                'title' => 'Spiderman Camera',
                'slug' => 'spiderman-camera-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:28',
                'updated_at' => '2019-01-23 08:50:28',
            ),
            377 => 
            array (
                'id' => 378,
                'fileName' => 'temp_CA926CAE-67CC-D3A3-FF9A-47450B1C908C_Metal-Jesus.jpg',
                'title' => 'Metal Jesus',
                'slug' => 'metal-jesus-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:29',
                'updated_at' => '2019-01-23 08:50:29',
            ),
            378 => 
            array (
                'id' => 379,
                'fileName' => 'temp_802154CD-F175-C3C3-7235-4BECE2A74354_Penguin-Gang.jpg',
                'title' => 'Penguin Gang',
                'slug' => 'penguin-gang-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:29',
                'updated_at' => '2019-01-23 08:50:29',
            ),
            379 => 
            array (
                'id' => 380,
                'fileName' => 'temp_7711FE96-38E8-30E6-591C-0D19E472D0F1_Ermahgerd-Beyonce.jpg',
                'title' => 'Ermahgerd Beyonce',
                'slug' => 'ermahgerd-beyonce-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:31',
                'updated_at' => '2019-01-23 08:50:31',
            ),
            380 => 
            array (
                'id' => 381,
                'fileName' => 'temp_C053AAC3-3A8D-9C86-024C-93924BBDB1AA_Scrooge-McDuck-2.jpg',
                'title' => 'Scrooge McDuck 2',
                'slug' => 'scrooge-mcduck-2-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:32',
                'updated_at' => '2019-01-23 08:50:32',
            ),
            381 => 
            array (
                'id' => 382,
                'fileName' => 'temp_7765C9DB-3EC5-7096-1736-30B32553A25E_Ghetto-Jesus.jpg',
                'title' => 'Ghetto Jesus',
                'slug' => 'ghetto-jesus-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:33',
                'updated_at' => '2019-01-23 08:50:33',
            ),
            382 => 
            array (
                'id' => 383,
                'fileName' => 'temp_4D9A58C3-7EC8-0F0D-85F3-F393DAB596E1_Pony-Shrugs.jpg',
                'title' => 'Pony Shrugs',
                'slug' => 'pony-shrugs-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:33',
                'updated_at' => '2019-01-23 08:50:33',
            ),
            383 => 
            array (
                'id' => 384,
                'fileName' => 'temp_21E77576-842C-44D8-158D-599B0941DD1B_Hillary-Clinton.jpg',
                'title' => 'Hillary Clinton',
                'slug' => 'hillary-clinton-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:34',
                'updated_at' => '2019-01-23 08:50:34',
            ),
            384 => 
            array (
                'id' => 385,
                'fileName' => 'temp_2DFA39FB-36DF-7D03-ECD4-378902EF7EB6_Mega-Rage-Face.jpg',
                'title' => 'Mega Rage Face',
                'slug' => 'mega-rage-face-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:35',
                'updated_at' => '2019-01-23 08:50:35',
            ),
            385 => 
            array (
                'id' => 386,
                'fileName' => 'temp_FB1A2661-B399-AD3A-A2FE-DF95E1F53076_The-Most-Interesting-Cat-In-The-World.jpg',
                'title' => 'The Most Interesting Cat In The World',
                'slug' => 'the-most-interesting-cat-in-the-world-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:36',
                'updated_at' => '2019-01-23 08:50:36',
            ),
            386 => 
            array (
                'id' => 387,
                'fileName' => 'temp_3CC08EBB-AAB2-4016-7AA9-E0799D6730B6_Trailer-Park-Boys-Bubbles.jpg',
                'title' => 'Trailer Park Boys Bubbles',
                'slug' => 'trailer-park-boys-bubbles-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:36',
                'updated_at' => '2019-01-23 08:50:36',
            ),
            387 => 
            array (
                'id' => 388,
                'fileName' => 'temp_189CE9C2-F3FE-EE3B-88BB-49E719B164A4_Grumpy-Cat-Bed.jpg',
                'title' => 'Grumpy Cat Bed',
                'slug' => 'grumpy-cat-bed-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:38',
                'updated_at' => '2019-01-23 08:50:38',
            ),
            388 => 
            array (
                'id' => 389,
                'fileName' => 'temp_CD112CCA-09D7-6F5A-0CC7-2E081642B7FA_Dat-Boi.jpg',
                'title' => 'Dat Boi',
                'slug' => 'dat-boi-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:39',
                'updated_at' => '2019-01-23 08:50:39',
            ),
            389 => 
            array (
                'id' => 390,
                'fileName' => 'temp_4FE74F47-49B9-49F7-DB6A-0E11201B538E_Obama-No-Listen.jpg',
                'title' => 'Obama No Listen',
                'slug' => 'obama-no-listen-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:40',
                'updated_at' => '2019-01-23 08:50:40',
            ),
            390 => 
            array (
                'id' => 391,
                'fileName' => 'temp_B69DEEE9-352B-C18D-0F3E-CF7398D0C18A_Angry-Koala.jpg',
                'title' => 'Angry Koala',
                'slug' => 'angry-koala-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:40',
                'updated_at' => '2019-01-23 08:50:40',
            ),
            391 => 
            array (
                'id' => 392,
                'fileName' => 'temp_4142D2EB-5DB5-0CB5-4F6A-26079C781C14_Police-Officer-Testifying.jpg',
                'title' => 'Police Officer Testifying',
                'slug' => 'police-officer-testifying-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:42',
                'updated_at' => '2019-01-23 08:50:42',
            ),
            392 => 
            array (
                'id' => 393,
                'fileName' => 'temp_49CDD771-E835-5097-69CF-87BFB6A706B9_Barbosa-And-Sparrow.jpg',
                'title' => 'Barbosa And Sparrow',
                'slug' => 'barbosa-and-sparrow-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:44',
                'updated_at' => '2019-01-23 08:50:44',
            ),
            393 => 
            array (
                'id' => 394,
                'fileName' => 'temp_2D456BA5-98BE-0DED-4071-223126BD48D1_The-Probelm-Is.jpg',
                'title' => 'The Probelm Is',
                'slug' => 'the-probelm-is-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:45',
                'updated_at' => '2019-01-23 08:50:45',
            ),
            394 => 
            array (
                'id' => 395,
                'fileName' => 'temp_9518E466-52D5-7F14-85DF-90D82266C821_Bitch-Please.jpg',
                'title' => 'Bitch Please',
                'slug' => 'bitch-please-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:46',
                'updated_at' => '2019-01-23 08:50:46',
            ),
            395 => 
            array (
                'id' => 396,
                'fileName' => 'temp_1F948A98-7E00-E26A-EF7F-07937F603FA1_Cute-Puppies.jpg',
                'title' => 'Cute Puppies',
                'slug' => 'cute-puppies-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:46',
                'updated_at' => '2019-01-23 08:50:46',
            ),
            396 => 
            array (
                'id' => 397,
                'fileName' => 'temp_7CEA91B2-6E53-DFAB-A7D6-5239314CEDD4_Dallas-Cowboys.jpg',
                'title' => 'Dallas Cowboys',
                'slug' => 'dallas-cowboys-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:47',
                'updated_at' => '2019-01-23 08:50:47',
            ),
            397 => 
            array (
                'id' => 398,
                'fileName' => 'temp_FA6971B7-993F-AD67-DABC-1F7424C1DC77_Team-Rocket.jpg',
                'title' => 'Team Rocket',
                'slug' => 'team-rocket-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:48',
                'updated_at' => '2019-01-23 08:50:48',
            ),
            398 => 
            array (
                'id' => 399,
                'fileName' => 'temp_03264D62-3614-E5B3-B57B-41B39C1897B6_Its-True-All-of-It-Han-Solo.jpg',
                'title' => 'It\'s True All of It Han Solo',
                'slug' => 'its-true-all-of-it-han-solo-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:49',
                'updated_at' => '2019-01-23 08:50:49',
            ),
            399 => 
            array (
                'id' => 400,
                'fileName' => 'temp_DDC6B0D6-CAE9-1E08-779A-B65436657C6B_Mozart-Not-Sure.jpg',
                'title' => 'Mozart Not Sure',
                'slug' => 'mozart-not-sure-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:50',
                'updated_at' => '2019-01-23 08:50:50',
            ),
            400 => 
            array (
                'id' => 401,
                'fileName' => 'temp_DF8598FF-0F15-9D2B-BAF3-2982AD49F73F_Small-Face-Romney.jpg',
                'title' => 'Small Face Romney',
                'slug' => 'small-face-romney-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:51',
                'updated_at' => '2019-01-23 08:50:51',
            ),
            401 => 
            array (
                'id' => 402,
                'fileName' => 'temp_B67DC0C9-FEDB-CAF9-67CF-BE1F2D04F324_No-Bullshit-Business-Baby.jpg',
                'title' => 'No Bullshit Business Baby',
                'slug' => 'no-bullshit-business-baby-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:52',
                'updated_at' => '2019-01-23 08:50:52',
            ),
            402 => 
            array (
                'id' => 403,
                'fileName' => 'temp_0C94E04E-FE98-12EB-6C12-266E1203DB4C_Original-Stoner-Dog.jpg',
                'title' => 'Original Stoner Dog',
                'slug' => 'original-stoner-dog-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:53',
                'updated_at' => '2019-01-23 08:50:53',
            ),
            403 => 
            array (
                'id' => 404,
                'fileName' => 'temp_1EEB975E-C54E-80A1-6B8A-61090B9DEADF_Depressed-Cat.jpg',
                'title' => 'Depressed Cat',
                'slug' => 'depressed-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:53',
                'updated_at' => '2019-01-23 08:50:53',
            ),
            404 => 
            array (
                'id' => 405,
                'fileName' => 'temp_10A0E18E-BFAA-CF41-B840-8F90F04627F3_Angry-Bride.jpg',
                'title' => 'Angry Bride',
                'slug' => 'angry-bride-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:55',
                'updated_at' => '2019-01-23 08:50:55',
            ),
            405 => 
            array (
                'id' => 406,
                'fileName' => 'temp_16145F7F-DA33-B1E7-14F9-D80A86367AA2_PTSD-Clarinet-Boy.jpg',
                'title' => 'PTSD Clarinet Boy',
                'slug' => 'ptsd-clarinet-boy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:56',
                'updated_at' => '2019-01-23 08:50:56',
            ),
            406 => 
            array (
                'id' => 407,
                'fileName' => 'temp_5E34462D-F1D8-4B99-3810-F831791C9FB9_Blank-Colored-Background.jpg',
                'title' => 'Blank Colored Background',
                'slug' => 'blank-colored-background-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:57',
                'updated_at' => '2019-01-23 08:50:57',
            ),
            407 => 
            array (
                'id' => 408,
                'fileName' => 'temp_6AB8A650-A3FB-1760-0E13-161217F5437D_Unwanted-House-Guest.jpg',
                'title' => 'Unwanted House Guest',
                'slug' => 'unwanted-house-guest-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:58',
                'updated_at' => '2019-01-23 08:50:58',
            ),
            408 => 
            array (
                'id' => 409,
                'fileName' => 'temp_4C40AA62-EA2E-57FA-6122-D43C4B7B2483_Condescending-Goku.jpg',
                'title' => 'Condescending Goku',
                'slug' => 'condescending-goku-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:58',
                'updated_at' => '2019-01-23 08:50:58',
            ),
            409 => 
            array (
                'id' => 410,
                'fileName' => 'temp_535075B7-8F76-8151-0FAC-A7AE607607C3_Batman-And-Superman.jpg',
                'title' => 'Batman And Superman',
                'slug' => 'batman-and-superman-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:50:59',
                'updated_at' => '2019-01-23 08:50:59',
            ),
            410 => 
            array (
                'id' => 411,
                'fileName' => 'temp_82124D0A-9BF0-6175-A78A-A80BA59EECC1_Han-Solo.jpg',
                'title' => 'Han Solo',
                'slug' => 'han-solo-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:00',
                'updated_at' => '2019-01-23 08:51:00',
            ),
            411 => 
            array (
                'id' => 412,
                'fileName' => 'temp_DCA130FB-C4DA-9678-AA19-DE3E17023364_Chuck-Norris-Laughing.jpg',
                'title' => 'Chuck Norris Laughing',
                'slug' => 'chuck-norris-laughing-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:01',
                'updated_at' => '2019-01-23 08:51:01',
            ),
            412 => 
            array (
                'id' => 413,
                'fileName' => 'temp_A67DB8E5-2C4C-94B1-91E7-2C781D1FAB00_Derp.jpg',
                'title' => 'Derp',
                'slug' => 'derp-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:02',
                'updated_at' => '2019-01-23 08:51:02',
            ),
            413 => 
            array (
                'id' => 414,
                'fileName' => 'temp_09CFC625-BC45-1BBD-C97A-A66B61D039D8_So-Much-Drama.jpg',
                'title' => 'So Much Drama',
                'slug' => 'so-much-drama-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:03',
                'updated_at' => '2019-01-23 08:51:03',
            ),
            414 => 
            array (
                'id' => 415,
                'fileName' => 'temp_87AE44EE-6589-4EA3-1A34-E6AC58CCBBC7_Scumbag-Boss.jpg',
                'title' => 'Scumbag Boss',
                'slug' => 'scumbag-boss-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:04',
                'updated_at' => '2019-01-23 08:51:04',
            ),
            415 => 
            array (
                'id' => 416,
                'fileName' => 'temp_3E14634D-54C5-FC1A-8D08-BA6CB4079D79_Engineering-Professor.jpg',
                'title' => 'Engineering Professor',
                'slug' => 'engineering-professor-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:05',
                'updated_at' => '2019-01-23 08:51:05',
            ),
            416 => 
            array (
                'id' => 417,
                'fileName' => 'temp_5344DBDC-9614-310E-A1C2-6F1875BEA511_Surprized-Vegeta.jpg',
                'title' => 'Surprized Vegeta',
                'slug' => 'surprized-vegeta-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:05',
                'updated_at' => '2019-01-23 08:51:05',
            ),
            417 => 
            array (
                'id' => 418,
                'fileName' => 'temp_D0AA2B11-47E4-4BF5-B6D8-B8A8C4485F10_Stop-Cop.jpg',
                'title' => 'Stop Cop',
                'slug' => 'stop-cop-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:06',
                'updated_at' => '2019-01-23 08:51:06',
            ),
            418 => 
            array (
                'id' => 419,
                'fileName' => 'temp_DD4D04FE-AF33-ADEF-BF42-51FE6460C9F3_Dexter.jpg',
                'title' => 'Dexter',
                'slug' => 'dexter-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:07',
                'updated_at' => '2019-01-23 08:51:07',
            ),
            419 => 
            array (
                'id' => 420,
                'fileName' => 'temp_FC044A37-05AF-3E51-1A0F-0C7008741635_Shouter.jpg',
                'title' => 'Shouter',
                'slug' => 'shouter-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:08',
                'updated_at' => '2019-01-23 08:51:08',
            ),
            420 => 
            array (
                'id' => 421,
                'fileName' => 'temp_A488AD57-3326-09BE-FBF8-346BE2C50B48_1st-World-Canadian-Problems.jpg',
                'title' => '1st World Canadian Problems',
                'slug' => '1st-world-canadian-problems-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:09',
                'updated_at' => '2019-01-23 08:51:09',
            ),
            421 => 
            array (
                'id' => 422,
                'fileName' => 'temp_85804FD8-40F4-B8D0-59CB-2CB5EEF3343F_Eminem.jpg',
                'title' => 'Eminem',
                'slug' => 'eminem-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:09',
                'updated_at' => '2019-01-23 08:51:09',
            ),
            422 => 
            array (
                'id' => 423,
                'fileName' => 'temp_B1731C56-C2A6-5ECD-3824-83D40D0011FC_Advice-God.jpg',
                'title' => 'Advice God',
                'slug' => 'advice-god-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:11',
                'updated_at' => '2019-01-23 08:51:11',
            ),
            423 => 
            array (
                'id' => 424,
                'fileName' => 'temp_36FC282E-F173-A305-E9A0-B3948550A28C_Sad-Cat.jpg',
                'title' => 'Sad Cat',
                'slug' => 'sad-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:13',
                'updated_at' => '2019-01-23 08:51:13',
            ),
            424 => 
            array (
                'id' => 425,
                'fileName' => 'temp_4F51C574-3D09-2346-358F-4B7924BA6558_Gasp-Rage-Face.jpg',
                'title' => 'Gasp Rage Face',
                'slug' => 'gasp-rage-face-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:14',
                'updated_at' => '2019-01-23 08:51:14',
            ),
            425 => 
            array (
                'id' => 426,
                'fileName' => 'temp_5AAC2913-8BB5-3BC9-E561-FEBFDAD915D8_Bonobo-Lyfe.jpg',
                'title' => 'Bonobo Lyfe',
                'slug' => 'bonobo-lyfe-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:15',
                'updated_at' => '2019-01-23 08:51:15',
            ),
            426 => 
            array (
                'id' => 427,
                'fileName' => 'temp_BC70DDF7-804F-8D79-88B8-1A8075FC4DF2_Scumbag-Brain.jpg',
                'title' => 'Scumbag Brain',
                'slug' => 'scumbag-brain-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:17',
                'updated_at' => '2019-01-23 08:51:17',
            ),
            427 => 
            array (
                'id' => 428,
                'fileName' => 'temp_2612A929-5FB8-8620-8FAA-883EF9A6CC4B_Romney.jpg',
                'title' => 'Romney',
                'slug' => 'romney-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:18',
                'updated_at' => '2019-01-23 08:51:18',
            ),
            428 => 
            array (
                'id' => 429,
                'fileName' => 'temp_92969CE4-2B2F-81FA-7E1F-4CEA96F5D0B6_Angry-Asian.jpg',
                'title' => 'Angry Asian',
                'slug' => 'angry-asian-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:19',
                'updated_at' => '2019-01-23 08:51:19',
            ),
            429 => 
            array (
                'id' => 430,
                'fileName' => 'temp_46A2929B-7F99-B2EE-B12F-BCF2C4DABB75_Officer-Cartman.jpg',
                'title' => 'Officer Cartman',
                'slug' => 'officer-cartman-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:20',
                'updated_at' => '2019-01-23 08:51:20',
            ),
            430 => 
            array (
                'id' => 431,
                'fileName' => 'temp_64487A99-5CCB-402D-3B48-E984C1A21832_Mitch-McConnell.jpg',
                'title' => 'Mitch McConnell',
                'slug' => 'mitch-mcconnell-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:20',
                'updated_at' => '2019-01-23 08:51:20',
            ),
            431 => 
            array (
                'id' => 432,
                'fileName' => 'temp_711D0AE0-3961-91FB-CBF6-086B0D7CA951_Scrooge-McDuck.jpg',
                'title' => 'Scrooge McDuck',
                'slug' => 'scrooge-mcduck-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:21',
                'updated_at' => '2019-01-23 08:51:21',
            ),
            432 => 
            array (
                'id' => 433,
                'fileName' => 'temp_A773CCAB-9A13-7E80-5C4A-92DB0404E82D_Redneck-Randal.jpg',
                'title' => 'Redneck Randal',
                'slug' => 'redneck-randal-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:22',
                'updated_at' => '2019-01-23 08:51:22',
            ),
            433 => 
            array (
                'id' => 434,
                'fileName' => 'temp_BECFC482-8149-7FE5-4A27-1C5961DB15F6_Courage-Wolf.jpg',
                'title' => 'Courage Wolf',
                'slug' => 'courage-wolf-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:23',
                'updated_at' => '2019-01-23 08:51:23',
            ),
            434 => 
            array (
                'id' => 435,
                'fileName' => 'temp_5EB5AEBD-ECBB-BFAE-8972-3164E968EDB2_Malicious-Advice-Mallard.jpg',
                'title' => 'Malicious Advice Mallard',
                'slug' => 'malicious-advice-mallard-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:24',
                'updated_at' => '2019-01-23 08:51:24',
            ),
            435 => 
            array (
                'id' => 436,
                'fileName' => 'temp_9F014CE2-079D-F22B-3DF8-2AC9F70855A9_Rick-Grimes.jpg',
                'title' => 'Rick Grimes',
                'slug' => 'rick-grimes-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:25',
                'updated_at' => '2019-01-23 08:51:25',
            ),
            436 => 
            array (
                'id' => 437,
                'fileName' => 'temp_89D7BAD8-5019-4680-3C9F-E001A82DE012_Intelligent-Dog.jpg',
                'title' => 'Intelligent Dog',
                'slug' => 'intelligent-dog-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:26',
                'updated_at' => '2019-01-23 08:51:26',
            ),
            437 => 
            array (
                'id' => 438,
                'fileName' => 'temp_56F4D321-DF8F-C5D9-F882-EE13EE51DAE9_Sigmund-Freud.jpg',
                'title' => 'Sigmund Freud',
                'slug' => 'sigmund-freud-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:27',
                'updated_at' => '2019-01-23 08:51:27',
            ),
            438 => 
            array (
                'id' => 439,
                'fileName' => 'temp_1AC10DF5-D654-DC55-6F4E-15DC05F207E6_Hamtaro.jpg',
                'title' => 'Hamtaro',
                'slug' => 'hamtaro-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:28',
                'updated_at' => '2019-01-23 08:51:28',
            ),
            439 => 
            array (
                'id' => 440,
                'fileName' => 'temp_34FFE309-CFB1-E518-4B63-6D91A80A3ECE_Forever-Alone-Christmas.jpg',
                'title' => 'Forever Alone Christmas',
                'slug' => 'forever-alone-christmas-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:29',
                'updated_at' => '2019-01-23 08:51:29',
            ),
            440 => 
            array (
                'id' => 441,
                'fileName' => 'temp_86B302C0-56BA-E422-4603-902127C0DF05_Robots.jpg',
                'title' => 'Robots',
                'slug' => 'robots-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:30',
                'updated_at' => '2019-01-23 08:51:30',
            ),
            441 => 
            array (
                'id' => 442,
                'fileName' => 'temp_3DBB73FE-1024-5BFA-3214-9C68563D1EB1_Paranoid-Parrot.jpg',
                'title' => 'Paranoid Parrot',
                'slug' => 'paranoid-parrot-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:31',
                'updated_at' => '2019-01-23 08:51:31',
            ),
            442 => 
            array (
                'id' => 443,
                'fileName' => 'temp_15C3AD04-C41E-FC83-5EB3-613EF24BCE57_Foul-Bachelor-Frog.jpg',
                'title' => 'Foul Bachelor Frog',
                'slug' => 'foul-bachelor-frog-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:31',
                'updated_at' => '2019-01-23 08:51:31',
            ),
            443 => 
            array (
                'id' => 444,
                'fileName' => 'temp_55A1872B-1840-06FC-2AEC-95FFBFF907BC_Chavez.jpg',
                'title' => 'Chavez',
                'slug' => 'chavez-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:33',
                'updated_at' => '2019-01-23 08:51:33',
            ),
            444 => 
            array (
                'id' => 445,
                'fileName' => 'temp_8493E26D-8B22-09BE-A0B5-AD358A16FF04_Zombie-Overly-Attached-Girlfriend.jpg',
                'title' => 'Zombie Overly Attached Girlfriend',
                'slug' => 'zombie-overly-attached-girlfriend-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:33',
                'updated_at' => '2019-01-23 08:51:33',
            ),
            445 => 
            array (
                'id' => 446,
                'fileName' => 'temp_6EC4B868-E327-309D-5C6A-0804790DBCF4_Butthurt-Dweller.jpg',
                'title' => 'Butthurt Dweller',
                'slug' => 'butthurt-dweller-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:35',
                'updated_at' => '2019-01-23 08:51:35',
            ),
            446 => 
            array (
                'id' => 447,
                'fileName' => 'temp_BE853512-F7B6-9615-AE10-71BA5EC4F046_Troll-Face-Colored.jpg',
                'title' => 'Troll Face Colored',
                'slug' => 'troll-face-colored-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:36',
                'updated_at' => '2019-01-23 08:51:36',
            ),
            447 => 
            array (
                'id' => 448,
                'fileName' => 'temp_13589081-7410-7343-D905-5EF2136F34B1_Subtle-Pickup-Liner.jpg',
                'title' => 'Subtle Pickup Liner',
                'slug' => 'subtle-pickup-liner-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:36',
                'updated_at' => '2019-01-23 08:51:36',
            ),
            448 => 
            array (
                'id' => 449,
                'fileName' => 'temp_92F32B4C-4CE0-193F-B1BA-33FEFC3065D7_Okay-Truck.jpg',
                'title' => 'Okay Truck',
                'slug' => 'okay-truck-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:37',
                'updated_at' => '2019-01-23 08:51:37',
            ),
            449 => 
            array (
                'id' => 450,
                'fileName' => 'temp_F761197F-BF37-207A-B3D6-A45713408304_Successful-Black-Man.jpg',
                'title' => 'Successful Black Man',
                'slug' => 'successful-black-man-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:38',
                'updated_at' => '2019-01-23 08:51:38',
            ),
            450 => 
            array (
                'id' => 451,
                'fileName' => 'temp_C738732C-C1F3-4818-03AA-E105E3B4E50D_Confused-Mel-Gibson.jpg',
                'title' => 'Confused Mel Gibson',
                'slug' => 'confused-mel-gibson-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:39',
                'updated_at' => '2019-01-23 08:51:39',
            ),
            451 => 
            array (
                'id' => 452,
                'fileName' => 'temp_4383FF5E-CF95-73F9-86B8-4448EA7D413E_Bart-Simpson-Peeking.jpg',
                'title' => 'Bart Simpson Peeking',
                'slug' => 'bart-simpson-peeking-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:39',
                'updated_at' => '2019-01-23 08:51:39',
            ),
            452 => 
            array (
                'id' => 453,
                'fileName' => 'temp_02D0B8BC-75CF-BFFD-3AF8-D7194D2F4C63_First-World-Problems-Cat.jpg',
                'title' => 'First World Problems Cat',
                'slug' => 'first-world-problems-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:40',
                'updated_at' => '2019-01-23 08:51:40',
            ),
            453 => 
            array (
                'id' => 454,
                'fileName' => 'temp_636202CA-AE2D-ADCF-1AC4-03E3B5042A95_Mr-T.jpg',
                'title' => 'Mr T',
                'slug' => 'mr-t-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:41',
                'updated_at' => '2019-01-23 08:51:41',
            ),
            454 => 
            array (
                'id' => 455,
                'fileName' => 'temp_55D0B2E8-989F-340A-ED0D-249ABD03C6FC_Surpised-Frodo.jpg',
                'title' => 'Surpised Frodo',
                'slug' => 'surpised-frodo-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:42',
                'updated_at' => '2019-01-23 08:51:42',
            ),
            455 => 
            array (
                'id' => 456,
                'fileName' => 'temp_9E1AB67D-0DA0-EBA3-6ED7-AC3F15B84C34_Futurama-Leela.jpg',
                'title' => 'Futurama Leela',
                'slug' => 'futurama-leela-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:42',
                'updated_at' => '2019-01-23 08:51:42',
            ),
            456 => 
            array (
                'id' => 457,
                'fileName' => 'temp_17CC5778-B1F1-A0E8-275F-057859A4CFB2_Eighties-Teen.jpg',
                'title' => 'Eighties Teen',
                'slug' => 'eighties-teen-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:43',
                'updated_at' => '2019-01-23 08:51:43',
            ),
            457 => 
            array (
                'id' => 458,
                'fileName' => 'temp_5881C829-699E-15EC-3CF3-F21D4335653A_Smilin-Biden.jpg',
                'title' => 'Smilin Biden',
                'slug' => 'smilin-biden-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:44',
                'updated_at' => '2019-01-23 08:51:44',
            ),
            458 => 
            array (
                'id' => 459,
                'fileName' => 'temp_8811385B-B183-C91C-D026-A6B7100A5217_Bill-Nye-The-Science-Guy.jpg',
                'title' => 'Bill Nye The Science Guy',
                'slug' => 'bill-nye-the-science-guy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:45',
                'updated_at' => '2019-01-23 08:51:45',
            ),
            459 => 
            array (
                'id' => 460,
                'fileName' => 'temp_E74A9E61-0A8F-37AF-54C3-4ABFBE9A693B_FFFFFFFUUUUUUUUUUUU.jpg',
                'title' => 'FFFFFFFUUUUUUUUUUUU',
                'slug' => 'fffffffuuuuuuuuuuuu-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:46',
                'updated_at' => '2019-01-23 08:51:46',
            ),
            460 => 
            array (
                'id' => 461,
                'fileName' => 'temp_046F91DC-ED44-AD80-4355-3B68D3FC154C_Evil-Otter.jpg',
                'title' => 'Evil Otter',
                'slug' => 'evil-otter-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:47',
                'updated_at' => '2019-01-23 08:51:47',
            ),
            461 => 
            array (
                'id' => 462,
                'fileName' => 'temp_84321951-6BCF-E96A-1297-6B357FC0196F_2nd-Term-Obama.jpg',
                'title' => '2nd Term Obama',
                'slug' => '2nd-term-obama-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:47',
                'updated_at' => '2019-01-23 08:51:47',
            ),
            462 => 
            array (
                'id' => 463,
                'fileName' => 'temp_CBA7E7AA-01AE-EBFA-F33C-D239FBCD0A68_Homophobic-Seal.jpg',
                'title' => 'Homophobic Seal',
                'slug' => 'homophobic-seal-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:48',
                'updated_at' => '2019-01-23 08:51:48',
            ),
            463 => 
            array (
                'id' => 464,
                'fileName' => 'temp_A5EF5D18-ED6F-F4C3-16C8-E630DF987721_Zuckerberg.jpg',
                'title' => 'Zuckerberg',
                'slug' => 'zuckerberg-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:49',
                'updated_at' => '2019-01-23 08:51:49',
            ),
            464 => 
            array (
                'id' => 465,
                'fileName' => 'temp_9B8A32F5-B136-C821-26C6-2FC9E8B52017_Annoying-Facebook-Girl.jpg',
                'title' => 'Annoying Facebook Girl',
                'slug' => 'annoying-facebook-girl-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:50',
                'updated_at' => '2019-01-23 08:51:50',
            ),
            465 => 
            array (
                'id' => 466,
                'fileName' => 'temp_E9A05DD9-8271-6C6D-2983-FD36DAAD3658_Socially-Awesome-Penguin.jpg',
                'title' => 'Socially Awesome Penguin',
                'slug' => 'socially-awesome-penguin-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:51',
                'updated_at' => '2019-01-23 08:51:51',
            ),
            466 => 
            array (
                'id' => 467,
                'fileName' => 'temp_042FE730-12BE-971D-1C47-34814D4C1F01_Zoidberg-Jesus.jpg',
                'title' => 'Zoidberg Jesus',
                'slug' => 'zoidberg-jesus-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:51',
                'updated_at' => '2019-01-23 08:51:51',
            ),
            467 => 
            array (
                'id' => 468,
                'fileName' => 'temp_C431A9D2-ECA9-87F5-7A04-DD06AA35FEBC_George-Bush.jpg',
                'title' => 'George Bush',
                'slug' => 'george-bush-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:52',
                'updated_at' => '2019-01-23 08:51:52',
            ),
            468 => 
            array (
                'id' => 469,
                'fileName' => 'temp_CB6F5BBD-5C94-EED9-04D0-EF706D04C3FA_George-Washington.jpg',
                'title' => 'George Washington',
                'slug' => 'george-washington-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:53',
                'updated_at' => '2019-01-23 08:51:53',
            ),
            469 => 
            array (
                'id' => 470,
                'fileName' => 'temp_10A67028-CA3F-3CF1-E422-C247B66ABB48_Onde.jpg',
                'title' => 'Onde',
                'slug' => 'onde-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:54',
                'updated_at' => '2019-01-23 08:51:54',
            ),
            470 => 
            array (
                'id' => 471,
                'fileName' => 'temp_045768FA-B605-3C44-4650-224D1E2602F1_Rasta-Science-Teacher.jpg',
                'title' => 'Rasta Science Teacher',
                'slug' => 'rasta-science-teacher-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:54',
                'updated_at' => '2019-01-23 08:51:54',
            ),
            471 => 
            array (
                'id' => 472,
                'fileName' => 'temp_9408F2B8-1B29-B5AD-48AB-7F42010353C6_Error-404.jpg',
                'title' => 'Error 404',
                'slug' => 'error-404-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:55',
                'updated_at' => '2019-01-23 08:51:55',
            ),
            472 => 
            array (
                'id' => 473,
                'fileName' => 'temp_26089207-41E4-24E3-9C7D-3C283EBBD52E_Fast-Furious-Johnny-Tran.jpg',
                'title' => 'Fast Furious Johnny Tran',
                'slug' => 'fast-furious-johnny-tran-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:56',
                'updated_at' => '2019-01-23 08:51:56',
            ),
            473 => 
            array (
                'id' => 474,
                'fileName' => 'temp_279A359E-4BE4-EAF1-94F2-5B08CBBF4B7B_Not-Bad-Obama.jpg',
                'title' => 'Not Bad Obama',
                'slug' => 'not-bad-obama-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:57',
                'updated_at' => '2019-01-23 08:51:57',
            ),
            474 => 
            array (
                'id' => 475,
                'fileName' => 'temp_15D16D04-8096-7308-85C5-062B781337A1_Wrong-Neighboorhood-Cats.jpg',
                'title' => 'Wrong Neighboorhood Cats',
                'slug' => 'wrong-neighboorhood-cats-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:58',
                'updated_at' => '2019-01-23 08:51:58',
            ),
            475 => 
            array (
                'id' => 476,
                'fileName' => 'temp_6C9FFE5F-FB21-2252-4EB4-E2DF7FC3A885_Efrain-Juarez.jpg',
                'title' => 'Efrain Juarez',
                'slug' => 'efrain-juarez-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:51:59',
                'updated_at' => '2019-01-23 08:51:59',
            ),
            476 => 
            array (
                'id' => 477,
                'fileName' => 'temp_5E2E57BC-2B6A-BE4D-7D7D-6719D633459A_Grumpy-Cat-Sky.jpg',
                'title' => 'Grumpy Cat Sky',
                'slug' => 'grumpy-cat-sky-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:00',
                'updated_at' => '2019-01-23 08:52:00',
            ),
            477 => 
            array (
                'id' => 478,
                'fileName' => 'temp_1A88353E-57E2-D983-EC96-D6C39981BBBA_Disappointed-Tyson.jpg',
                'title' => 'Disappointed Tyson',
                'slug' => 'disappointed-tyson-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:00',
                'updated_at' => '2019-01-23 08:52:00',
            ),
            478 => 
            array (
                'id' => 479,
                'fileName' => 'temp_F8365669-75A3-F825-13EF-74D2904AA1B7_Fk-Yeah.jpg',
                'title' => 'Fk Yeah',
                'slug' => 'fk-yeah-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:01',
                'updated_at' => '2019-01-23 08:52:01',
            ),
            479 => 
            array (
                'id' => 480,
                'fileName' => 'temp_DC0608E5-A1E2-C683-C487-45D46BE68568_Big-Ego-Man.jpg',
                'title' => 'Big Ego Man',
                'slug' => 'big-ego-man-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:02',
                'updated_at' => '2019-01-23 08:52:02',
            ),
            480 => 
            array (
                'id' => 481,
                'fileName' => 'temp_6FD17BB9-9EFA-B98A-9ABD-9757E3A55CE1_Father-Ted.jpg',
                'title' => 'Father Ted',
                'slug' => 'father-ted-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:03',
                'updated_at' => '2019-01-23 08:52:03',
            ),
            481 => 
            array (
                'id' => 482,
                'fileName' => 'temp_490B3C39-1619-BCE8-38A5-281A3652E047_confession-kid.jpg',
                'title' => 'confession kid',
                'slug' => 'confession-kid-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:03',
                'updated_at' => '2019-01-23 08:52:03',
            ),
            482 => 
            array (
                'id' => 483,
                'fileName' => 'temp_A447F5E3-6C9B-F056-7E2A-254EC95A61AC_Multi-Doge.jpg',
                'title' => 'Multi Doge',
                'slug' => 'multi-doge-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:05',
                'updated_at' => '2019-01-23 08:52:05',
            ),
            483 => 
            array (
                'id' => 484,
                'fileName' => 'temp_BFE9E602-9EF4-0519-857B-EE8B8723BC05_Professor-Oak.jpg',
                'title' => 'Professor Oak',
                'slug' => 'professor-oak-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:06',
                'updated_at' => '2019-01-23 08:52:06',
            ),
            484 => 
            array (
                'id' => 485,
                'fileName' => 'temp_312061A2-03B7-ADF8-584C-6A8D1A676D4E_Lazy-College-Senior.jpg',
                'title' => 'Lazy College Senior',
                'slug' => 'lazy-college-senior-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:07',
                'updated_at' => '2019-01-23 08:52:07',
            ),
            485 => 
            array (
                'id' => 486,
                'fileName' => 'temp_422ADBFE-A246-A386-10A1-301BBB67437C_Fear-And-Loathing-Cat.jpg',
                'title' => 'Fear And Loathing Cat',
                'slug' => 'fear-and-loathing-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:08',
                'updated_at' => '2019-01-23 08:52:08',
            ),
            486 => 
            array (
                'id' => 487,
                'fileName' => 'temp_5BDE2248-71B5-E9C8-F85C-BE1D8BDD873B_Over-Educated-Problems.jpg',
                'title' => 'Over Educated Problems',
                'slug' => 'over-educated-problems-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:09',
                'updated_at' => '2019-01-23 08:52:09',
            ),
            487 => 
            array (
                'id' => 488,
                'fileName' => 'temp_A2DEED38-C0D6-B302-2DF9-8F104AD69673_Overjoyed.jpg',
                'title' => 'Overjoyed',
                'slug' => 'overjoyed-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:10',
                'updated_at' => '2019-01-23 08:52:10',
            ),
            488 => 
            array (
                'id' => 489,
                'fileName' => 'temp_E8685A3B-4D1C-BDCF-AA01-4586CF2FA044_Baby-Cry.jpg',
                'title' => 'Baby Cry',
                'slug' => 'baby-cry-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:11',
                'updated_at' => '2019-01-23 08:52:11',
            ),
            489 => 
            array (
                'id' => 490,
                'fileName' => 'temp_94AEF82C-929A-745D-A745-59A073DDA8DC_Serious-Xzibit.jpg',
                'title' => 'Serious Xzibit',
                'slug' => 'serious-xzibit-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:12',
                'updated_at' => '2019-01-23 08:52:12',
            ),
            490 => 
            array (
                'id' => 491,
                'fileName' => 'temp_D147DC8C-0858-DFCE-1009-29F339690CB5_Gangnam-Style-PSY.jpg',
                'title' => 'Gangnam Style PSY',
                'slug' => 'gangnam-style-psy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:13',
                'updated_at' => '2019-01-23 08:52:13',
            ),
            491 => 
            array (
                'id' => 492,
                'fileName' => 'temp_552FA009-5CC9-E69E-CF6D-8F65288DC94E_Men-Laughing.jpg',
                'title' => 'Men Laughing',
                'slug' => 'men-laughing-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:14',
                'updated_at' => '2019-01-23 08:52:14',
            ),
            492 => 
            array (
                'id' => 493,
                'fileName' => 'temp_BDCA6DBB-D7F7-2CA0-95C6-B82B0799983F_Keep-Calm-And-Carry-On-Purple.jpg',
                'title' => 'Keep Calm And Carry On Purple',
                'slug' => 'keep-calm-and-carry-on-purple-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:15',
                'updated_at' => '2019-01-23 08:52:15',
            ),
            493 => 
            array (
                'id' => 494,
                'fileName' => 'temp_7C1E2D35-6571-509D-21E0-64365D000868_Original-Bad-Luck-Brian.jpg',
                'title' => 'Original Bad Luck Brian',
                'slug' => 'original-bad-luck-brian-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:15',
                'updated_at' => '2019-01-23 08:52:15',
            ),
            494 => 
            array (
                'id' => 495,
                'fileName' => 'temp_C0703CEF-A2CC-E773-214F-622F54F4118C_Babushkas-On-Facebook.jpg',
                'title' => 'Babushkas On Facebook',
                'slug' => 'babushkas-on-facebook-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:16',
                'updated_at' => '2019-01-23 08:52:16',
            ),
            495 => 
            array (
                'id' => 496,
                'fileName' => 'temp_0BC7AB33-48C3-9C35-0E05-37F59DF1102D_Rebecca-Black.jpg',
                'title' => 'Rebecca Black',
                'slug' => 'rebecca-black-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:17',
                'updated_at' => '2019-01-23 08:52:17',
            ),
            496 => 
            array (
                'id' => 497,
                'fileName' => 'temp_21B98DF7-4D1A-948F-2639-AC5D7A627751_Happy-Guy-Rage-Face.jpg',
                'title' => 'Happy Guy Rage Face',
                'slug' => 'happy-guy-rage-face-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:18',
                'updated_at' => '2019-01-23 08:52:18',
            ),
            497 => 
            array (
                'id' => 498,
                'fileName' => 'temp_DFEFD041-A00B-B688-5815-71A626ED8852_No-Nappa-Its-A-Trick.jpg',
                'title' => 'No Nappa Its A Trick',
                'slug' => 'no-nappa-its-a-trick-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:19',
                'updated_at' => '2019-01-23 08:52:19',
            ),
            498 => 
            array (
                'id' => 499,
                'fileName' => 'temp_B27F15B7-2532-CDDE-23DE-0D2B4BA46E70_Bah-Humbug.jpg',
                'title' => 'Bah Humbug',
                'slug' => 'bah-humbug-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:20',
                'updated_at' => '2019-01-23 08:52:20',
            ),
            499 => 
            array (
                'id' => 500,
                'fileName' => 'temp_1DC05E62-D5FA-4A06-8062-79C219E5273B_Big-Bird-And-Snuffy.jpg',
                'title' => 'Big Bird And Snuffy',
                'slug' => 'big-bird-and-snuffy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:21',
                'updated_at' => '2019-01-23 08:52:21',
            ),
        ));
        \DB::table('meme_templates')->insert(array (
            0 => 
            array (
                'id' => 501,
                'fileName' => 'temp_E11880AC-5A6E-57CB-4904-E2FF83E9EC0E_Advice-Doge.jpg',
                'title' => 'Advice Doge',
                'slug' => 'advice-doge-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:22',
                'updated_at' => '2019-01-23 08:52:22',
            ),
            1 => 
            array (
                'id' => 502,
                'fileName' => 'temp_F3A2EA0A-7665-C4E9-1404-4618DF7034B1_Seriously-Face.jpg',
                'title' => 'Seriously Face',
                'slug' => 'seriously-face-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:23',
                'updated_at' => '2019-01-23 08:52:23',
            ),
            2 => 
            array (
                'id' => 503,
                'fileName' => 'temp_EAE35AE8-9FB5-309A-57E8-983CC28FEFCE_Minegishi-Minami.jpg',
                'title' => 'Minegishi Minami',
                'slug' => 'minegishi-minami-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:24',
                'updated_at' => '2019-01-23 08:52:24',
            ),
            3 => 
            array (
                'id' => 504,
                'fileName' => 'temp_7B9C6C77-EBB9-BA40-6396-681A61460267_Cool-Story-Bro.jpg',
                'title' => 'Cool Story Bro',
                'slug' => 'cool-story-bro-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:25',
                'updated_at' => '2019-01-23 08:52:25',
            ),
            4 => 
            array (
                'id' => 505,
                'fileName' => 'temp_F32F622C-EB70-6C5E-6BEA-068C5C20B3B0_Keep-Calm-And-Carry-On-Aqua.jpg',
                'title' => 'Keep Calm And Carry On Aqua',
                'slug' => 'keep-calm-and-carry-on-aqua-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:26',
                'updated_at' => '2019-01-23 08:52:26',
            ),
            5 => 
            array (
                'id' => 506,
                'fileName' => 'temp_B4985F09-9C07-3EDA-3507-828304637EB8_Sheltering-Suburban-Mom.jpg',
                'title' => 'Sheltering Suburban Mom',
                'slug' => 'sheltering-suburban-mom-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:26',
                'updated_at' => '2019-01-23 08:52:26',
            ),
            6 => 
            array (
                'id' => 507,
                'fileName' => 'temp_35404EF7-943F-4585-F0BD-6A0EEBB8A2CB_Rick-and-Carl-Longer.jpg',
                'title' => 'Rick and Carl Longer',
                'slug' => 'rick-and-carl-longer-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:28',
                'updated_at' => '2019-01-23 08:52:28',
            ),
            7 => 
            array (
                'id' => 508,
                'fileName' => 'temp_F0F93D52-2B04-9AB9-FC19-8B87825F9649_Depression-Dog.jpg',
                'title' => 'Depression Dog',
                'slug' => 'depression-dog-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:29',
                'updated_at' => '2019-01-23 08:52:29',
            ),
            8 => 
            array (
                'id' => 509,
                'fileName' => 'temp_364789E6-62EB-7850-0999-7C4FDF7E6B88_Will-Ferrell.jpg',
                'title' => 'Will Ferrell',
                'slug' => 'will-ferrell-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:31',
                'updated_at' => '2019-01-23 08:52:31',
            ),
            9 => 
            array (
                'id' => 510,
                'fileName' => 'temp_0E751A6C-7040-D668-2B2D-3F0304365579_Computer-Horse.jpg',
                'title' => 'Computer Horse',
                'slug' => 'computer-horse-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:34',
                'updated_at' => '2019-01-23 08:52:34',
            ),
            10 => 
            array (
                'id' => 511,
                'fileName' => 'temp_38D28731-3B54-1813-29C4-84639DF0C7CE_Blank-Blue-Background.jpg',
                'title' => 'Blank Blue Background',
                'slug' => 'blank-blue-background-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:35',
                'updated_at' => '2019-01-23 08:52:35',
            ),
            11 => 
            array (
                'id' => 512,
                'fileName' => 'temp_1CA60F44-E312-CB50-88B9-CF9D201AA77A_Kyon-Face-Palm.jpg',
                'title' => 'Kyon Face Palm',
                'slug' => 'kyon-face-palm-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:36',
                'updated_at' => '2019-01-23 08:52:36',
            ),
            12 => 
            array (
                'id' => 513,
                'fileName' => 'temp_8F4D9A9A-9212-59EE-EEF3-726C6E4505E6_Obama.jpg',
                'title' => 'Obama',
                'slug' => 'obama-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:37',
                'updated_at' => '2019-01-23 08:52:37',
            ),
            13 => 
            array (
                'id' => 514,
                'fileName' => 'temp_16115CAC-D41F-7627-7D46-138D69B0654D_Chuck-Norris-Flex.jpg',
                'title' => 'Chuck Norris Flex',
                'slug' => 'chuck-norris-flex-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:38',
                'updated_at' => '2019-01-23 08:52:38',
            ),
            14 => 
            array (
                'id' => 515,
                'fileName' => 'temp_BE50EA4A-824A-F4AB-0203-7C0DE49AD8A4_Hercules-Hades.jpg',
                'title' => 'Hercules Hades',
                'slug' => 'hercules-hades-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:39',
                'updated_at' => '2019-01-23 08:52:39',
            ),
            15 => 
            array (
                'id' => 516,
                'fileName' => 'temp_496D023B-4C74-7399-C5E9-8B0CD3DAC7ED_Scooby-Doo.jpg',
                'title' => 'Scooby Doo',
                'slug' => 'scooby-doo-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:40',
                'updated_at' => '2019-01-23 08:52:40',
            ),
            16 => 
            array (
                'id' => 517,
                'fileName' => 'temp_44A23463-D6C8-4269-2445-667146EBC631_The-Bobs.jpg',
                'title' => 'The Bobs',
                'slug' => 'the-bobs-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:40',
                'updated_at' => '2019-01-23 08:52:40',
            ),
            17 => 
            array (
                'id' => 518,
                'fileName' => 'temp_E2095242-C337-83FE-5708-1089FDEBBEB2_Predator.jpg',
                'title' => 'Predator',
                'slug' => 'predator-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:41',
                'updated_at' => '2019-01-23 08:52:41',
            ),
            18 => 
            array (
                'id' => 519,
                'fileName' => 'temp_7E142211-B5DC-B653-D368-6F5491DA8D6D_Angry-Dumbledore.jpg',
                'title' => 'Angry Dumbledore',
                'slug' => 'angry-dumbledore-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:42',
                'updated_at' => '2019-01-23 08:52:42',
            ),
            19 => 
            array (
                'id' => 520,
                'fileName' => 'temp_5E6ACAC7-0365-D73B-C027-5BCA4177636A_Really-Evil-College-Teacher.jpg',
                'title' => 'Really Evil College Teacher',
                'slug' => 'really-evil-college-teacher-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:43',
                'updated_at' => '2019-01-23 08:52:43',
            ),
            20 => 
            array (
                'id' => 521,
                'fileName' => 'temp_F502D1E5-98EE-4477-57AE-67CE255FF4FA_Fifa-E-Call-Of-Duty.jpg',
                'title' => 'Fifa E Call Of Duty',
                'slug' => 'fifa-e-call-of-duty-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:43',
                'updated_at' => '2019-01-23 08:52:43',
            ),
            21 => 
            array (
                'id' => 522,
                'fileName' => 'temp_6473BB42-7C81-7849-1101-CC12C1885B97_Happy-Minaj.jpg',
                'title' => 'Happy Minaj',
                'slug' => 'happy-minaj-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:44',
                'updated_at' => '2019-01-23 08:52:44',
            ),
            22 => 
            array (
                'id' => 523,
                'fileName' => 'temp_FA7701F2-A36E-71DA-7C9C-2ADD098F87F3_Google-Chrome.jpg',
                'title' => 'Google Chrome',
                'slug' => 'google-chrome-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:45',
                'updated_at' => '2019-01-23 08:52:45',
            ),
            23 => 
            array (
                'id' => 524,
                'fileName' => 'temp_D629B39E-F09E-1286-4C67-4DC38C1E0D66_Slenderman.jpg',
                'title' => 'Slenderman',
                'slug' => 'slenderman-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:46',
                'updated_at' => '2019-01-23 08:52:46',
            ),
            24 => 
            array (
                'id' => 525,
                'fileName' => 'temp_A805E4AA-16A7-1290-827F-03B79325A5F5_Larry-The-Cable-Guy.jpg',
                'title' => 'Larry The Cable Guy',
                'slug' => 'larry-the-cable-guy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:47',
                'updated_at' => '2019-01-23 08:52:47',
            ),
            25 => 
            array (
                'id' => 526,
                'fileName' => 'temp_3DB6A7F0-FDFD-DC4E-D26C-38B0C47F2E24_You-Get-An-X-And-You-Get-An-X.jpg',
                'title' => 'You Get An X And You Get An X',
                'slug' => 'you-get-an-x-and-you-get-an-x-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:48',
                'updated_at' => '2019-01-23 08:52:48',
            ),
            26 => 
            array (
                'id' => 527,
                'fileName' => 'temp_21C3CA17-E12E-A404-3AE7-EF2E35407D83_Ordinary-Muslim-Man.jpg',
                'title' => 'Ordinary Muslim Man',
                'slug' => 'ordinary-muslim-man-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:48',
                'updated_at' => '2019-01-23 08:52:48',
            ),
            27 => 
            array (
                'id' => 528,
                'fileName' => 'temp_480E48D7-761A-3950-1A45-77F33C740F35_Youre-Too-Slow-Sonic.jpg',
                'title' => 'Youre Too Slow Sonic',
                'slug' => 'youre-too-slow-sonic-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:49',
                'updated_at' => '2019-01-23 08:52:49',
            ),
            28 => 
            array (
                'id' => 529,
                'fileName' => 'temp_7D8021DD-A5C8-0430-81AF-1F62CF433ED9_Arrogant-Rich-Man.jpg',
                'title' => 'Arrogant Rich Man',
                'slug' => 'arrogant-rich-man-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:50',
                'updated_at' => '2019-01-23 08:52:50',
            ),
            29 => 
            array (
                'id' => 530,
                'fileName' => 'temp_64A47D3B-5D3F-4DB6-96A1-333128FB6B37_Romney-And-Ryan.jpg',
                'title' => 'Romney And Ryan',
                'slug' => 'romney-and-ryan-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:50',
                'updated_at' => '2019-01-23 08:52:50',
            ),
            30 => 
            array (
                'id' => 531,
                'fileName' => 'temp_F24E7B5D-50BC-31D6-2302-B52CD68A685B_Invalid-Argument-Vader.jpg',
                'title' => 'Invalid Argument Vader',
                'slug' => 'invalid-argument-vader-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:52',
                'updated_at' => '2019-01-23 08:52:52',
            ),
            31 => 
            array (
                'id' => 532,
                'fileName' => 'temp_66ECE706-646A-C0AB-200B-E95B5AFF33C9_Corona.jpg',
                'title' => 'Corona',
                'slug' => 'corona-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:52',
                'updated_at' => '2019-01-23 08:52:52',
            ),
            32 => 
            array (
                'id' => 533,
                'fileName' => 'temp_2B81694F-7616-F4B9-299A-CC001F952348_Close-Enough.jpg',
                'title' => 'Close Enough',
                'slug' => 'close-enough-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:53',
                'updated_at' => '2019-01-23 08:52:53',
            ),
            33 => 
            array (
                'id' => 534,
                'fileName' => 'temp_580A54AF-9EF2-246A-6B5E-3201D511BCB4_Okay-Guy-Rage-Face.jpg',
                'title' => 'Okay Guy Rage Face',
                'slug' => 'okay-guy-rage-face-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:54',
                'updated_at' => '2019-01-23 08:52:54',
            ),
            34 => 
            array (
                'id' => 535,
                'fileName' => 'temp_9B7BA4A5-5505-A96F-6FEE-87CA97B01990_Gandhi.jpg',
                'title' => 'Gandhi',
                'slug' => 'gandhi-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:55',
                'updated_at' => '2019-01-23 08:52:55',
            ),
            35 => 
            array (
                'id' => 536,
                'fileName' => 'temp_6337AE76-CF80-0BB2-F89C-CFED24F4CE18_Tears-Of-Joy.jpg',
                'title' => 'Tears Of Joy',
                'slug' => 'tears-of-joy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:56',
                'updated_at' => '2019-01-23 08:52:56',
            ),
            36 => 
            array (
                'id' => 537,
                'fileName' => 'temp_2C3B92B4-0BB1-CEEE-700F-9D25DFDDB4FC_Osabama.jpg',
                'title' => 'Osabama',
                'slug' => 'osabama-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:56',
                'updated_at' => '2019-01-23 08:52:56',
            ),
            37 => 
            array (
                'id' => 538,
                'fileName' => 'temp_A1FF5768-7A20-D494-949B-DA8B5C2529DA_Sad-X-All-The-Y.jpg',
                'title' => 'Sad X All The Y',
                'slug' => 'sad-x-all-the-y-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:57',
                'updated_at' => '2019-01-23 08:52:57',
            ),
            38 => 
            array (
                'id' => 539,
                'fileName' => 'temp_47B29582-C91A-9AD1-B767-65F0C8A3F9E0_Lil-Wayne.jpg',
                'title' => 'Lil Wayne',
                'slug' => 'lil-wayne-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:58',
                'updated_at' => '2019-01-23 08:52:58',
            ),
            39 => 
            array (
                'id' => 540,
                'fileName' => 'temp_7D8E6BBE-A615-ECC7-58E1-5AB2C97E495D_Cereal-Guys-Daddy.jpg',
                'title' => 'Cereal Guys Daddy',
                'slug' => 'cereal-guys-daddy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:59',
                'updated_at' => '2019-01-23 08:52:59',
            ),
            40 => 
            array (
                'id' => 541,
                'fileName' => 'temp_7F35E2D6-5F3A-AF15-5D64-A882B67E2B8A_Macklemore-Thrift-Store.jpg',
                'title' => 'Macklemore Thrift Store',
                'slug' => 'macklemore-thrift-store-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:52:59',
                'updated_at' => '2019-01-23 08:52:59',
            ),
            41 => 
            array (
                'id' => 542,
                'fileName' => 'temp_C9D6658A-2269-CF67-D7C3-E8BADC4C8F07_Grumpy-Cat-Table.jpg',
                'title' => 'Grumpy Cat Table',
                'slug' => 'grumpy-cat-table-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:00',
                'updated_at' => '2019-01-23 08:53:00',
            ),
            42 => 
            array (
                'id' => 543,
                'fileName' => 'temp_5803AF09-036B-5CCA-EC0D-7ACC72ED9772_Admiral-Ackbar-Relationship-Expert.jpg',
                'title' => 'Admiral Ackbar Relationship Expert',
                'slug' => 'admiral-ackbar-relationship-expert-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:01',
                'updated_at' => '2019-01-23 08:53:01',
            ),
            43 => 
            array (
                'id' => 544,
                'fileName' => 'temp_E403C13E-3DB2-2E8F-78AC-F61F9AF46002_Sudden-Disgust-Danny.jpg',
                'title' => 'Sudden Disgust Danny',
                'slug' => 'sudden-disgust-danny-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:02',
                'updated_at' => '2019-01-23 08:53:02',
            ),
            44 => 
            array (
                'id' => 545,
                'fileName' => 'temp_AAC3FFA0-CDBC-E1AE-1CDF-70B271E2293F_Aw-Yeah-Rage-Face.jpg',
                'title' => 'Aw Yeah Rage Face',
                'slug' => 'aw-yeah-rage-face-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:03',
                'updated_at' => '2019-01-23 08:53:03',
            ),
            45 => 
            array (
                'id' => 546,
                'fileName' => 'temp_D6E04809-DE58-2EC9-9204-586043AB935B_Success-Kid-Girl.jpg',
                'title' => 'Success Kid Girl',
                'slug' => 'success-kid-girl-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:04',
                'updated_at' => '2019-01-23 08:53:04',
            ),
            46 => 
            array (
                'id' => 547,
                'fileName' => 'temp_9CF69643-A2AF-8755-56EE-5ACD7E8E23BB_Bothered-Bond.jpg',
                'title' => 'Bothered Bond',
                'slug' => 'bothered-bond-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:05',
                'updated_at' => '2019-01-23 08:53:05',
            ),
            47 => 
            array (
                'id' => 548,
                'fileName' => 'temp_67ABBB54-9D17-164A-B48C-5184545CB68C_Hoody-Cat.jpg',
                'title' => 'Hoody Cat',
                'slug' => 'hoody-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:06',
                'updated_at' => '2019-01-23 08:53:06',
            ),
            48 => 
            array (
                'id' => 549,
                'fileName' => 'temp_B3A10EDE-6FBB-924A-105C-5CD85BA2E6CD_Kill-You-Cat.jpg',
                'title' => 'Kill You Cat',
                'slug' => 'kill-you-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:07',
                'updated_at' => '2019-01-23 08:53:07',
            ),
            49 => 
            array (
                'id' => 550,
                'fileName' => 'temp_21546624-F529-26CC-C8D1-86113E6D944E_I-Will-Find-You-And-Kill-You.jpg',
                'title' => 'I Will Find You And Kill You',
                'slug' => 'i-will-find-you-and-kill-you-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:08',
                'updated_at' => '2019-01-23 08:53:08',
            ),
            50 => 
            array (
                'id' => 551,
                'fileName' => 'temp_6972CE65-9D26-72B7-4228-7C10F0E617B8_Frowning-Nun.jpg',
                'title' => 'Frowning Nun',
                'slug' => 'frowning-nun-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:08',
                'updated_at' => '2019-01-23 08:53:08',
            ),
            51 => 
            array (
                'id' => 552,
                'fileName' => 'temp_7746D9B5-BF0F-B9C6-18B7-AE61B6C3013D_Forever-Alone-Happy.jpg',
                'title' => 'Forever Alone Happy',
                'slug' => 'forever-alone-happy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:10',
                'updated_at' => '2019-01-23 08:53:10',
            ),
            52 => 
            array (
                'id' => 553,
                'fileName' => 'temp_F2AC68E2-104E-18F8-5AAF-C76C17019011_Unhappy-Baby.jpg',
                'title' => 'Unhappy Baby',
                'slug' => 'unhappy-baby-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:11',
                'updated_at' => '2019-01-23 08:53:11',
            ),
            53 => 
            array (
                'id' => 554,
                'fileName' => 'temp_905F6A11-5338-EC5E-4EEA-728B7ACA0E6B_Nice-Guy-Loki.jpg',
                'title' => 'Nice Guy Loki',
                'slug' => 'nice-guy-loki-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:11',
                'updated_at' => '2019-01-23 08:53:11',
            ),
            54 => 
            array (
                'id' => 555,
                'fileName' => 'temp_B661AC70-75FC-7A08-7ABA-A138CD53284F_Oblivious-Hot-Girl.jpg',
                'title' => 'Oblivious Hot Girl',
                'slug' => 'oblivious-hot-girl-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:12',
                'updated_at' => '2019-01-23 08:53:12',
            ),
            55 => 
            array (
                'id' => 556,
                'fileName' => 'temp_1F338FCE-C0A4-D0C5-FD59-5A3408D0717C_Tech-Impaired-Duck.jpg',
                'title' => 'Tech Impaired Duck',
                'slug' => 'tech-impaired-duck-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:13',
                'updated_at' => '2019-01-23 08:53:13',
            ),
            56 => 
            array (
                'id' => 557,
                'fileName' => 'temp_855AE821-5697-6146-365E-041F2077C861_Jammin-Baby.jpg',
                'title' => 'Jammin Baby',
                'slug' => 'jammin-baby-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:14',
                'updated_at' => '2019-01-23 08:53:14',
            ),
            57 => 
            array (
                'id' => 558,
                'fileName' => 'temp_7E5B09E8-2CB6-C9B8-CFD5-CA4650553091_So-I-Got-That-Goin-For-Me-Which-Is-Nice-2.jpg',
                'title' => 'So I Got That Goin For Me Which Is Nice 2',
                'slug' => 'so-i-got-that-goin-for-me-which-is-nice-2-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:15',
                'updated_at' => '2019-01-23 08:53:15',
            ),
            58 => 
            array (
                'id' => 559,
                'fileName' => 'temp_8C16C01F-A48A-430B-D47F-FAD2EB0BA029_Sweaty-Concentrated-Rage-Face.jpg',
                'title' => 'Sweaty Concentrated Rage Face',
                'slug' => 'sweaty-concentrated-rage-face-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:15',
                'updated_at' => '2019-01-23 08:53:15',
            ),
            59 => 
            array (
                'id' => 560,
                'fileName' => 'temp_837FF566-6EA6-4483-55A9-EB434EC1834C_Big-Bird.jpg',
                'title' => 'Big Bird',
                'slug' => 'big-bird-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:16',
                'updated_at' => '2019-01-23 08:53:16',
            ),
            60 => 
            array (
                'id' => 561,
                'fileName' => 'temp_0AE51FC5-C971-E977-9E7E-B09138DE7578_Family-Guy-Brian.jpg',
                'title' => 'Family Guy Brian',
                'slug' => 'family-guy-brian-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:17',
                'updated_at' => '2019-01-23 08:53:17',
            ),
            61 => 
            array (
                'id' => 562,
                'fileName' => 'temp_3B4B2F60-8C80-81BC-1903-6A10968CE83C_Finn-The-Human.jpg',
                'title' => 'Finn The Human',
                'slug' => 'finn-the-human-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:18',
                'updated_at' => '2019-01-23 08:53:18',
            ),
            62 => 
            array (
                'id' => 563,
                'fileName' => 'temp_4865FF04-5376-32AD-E1E6-DEF82C41DA62_Art-Student-Owl.jpg',
                'title' => 'Art Student Owl',
                'slug' => 'art-student-owl-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:19',
                'updated_at' => '2019-01-23 08:53:19',
            ),
            63 => 
            array (
                'id' => 564,
                'fileName' => 'temp_EF66B9CA-E6A5-DB6E-1DAC-435A929CF0D7_Suspicious-Cat.jpg',
                'title' => 'Suspicious Cat',
                'slug' => 'suspicious-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:53:20',
                'updated_at' => '2019-01-23 08:53:20',
            ),
            64 => 
            array (
                'id' => 565,
                'fileName' => 'temp_5C73C308-AA41-F691-168B-607BB8674985_College-Freshman.jpg',
                'title' => 'College Freshman',
                'slug' => 'college-freshman-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:01',
                'updated_at' => '2019-01-23 08:54:01',
            ),
            65 => 
            array (
                'id' => 566,
                'fileName' => 'temp_BDF6D5A1-2838-3CC6-829D-70BB0A54C008_Spangles.jpg',
                'title' => 'Spangles',
                'slug' => 'spangles-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:02',
                'updated_at' => '2019-01-23 08:54:02',
            ),
            66 => 
            array (
                'id' => 567,
                'fileName' => 'temp_A90BDCE7-B0F8-E80A-332B-7EFCF8062AC3_Crosseyed-Goku.jpg',
                'title' => 'Crosseyed Goku',
                'slug' => 'crosseyed-goku-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:03',
                'updated_at' => '2019-01-23 08:54:03',
            ),
            67 => 
            array (
                'id' => 568,
                'fileName' => 'temp_9D2042AB-675C-772C-FACC-48F3B26D859E_Zombie-Bad-Luck-Brian.jpg',
                'title' => 'Zombie Bad Luck Brian',
                'slug' => 'zombie-bad-luck-brian-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:04',
                'updated_at' => '2019-01-23 08:54:04',
            ),
            68 => 
            array (
                'id' => 569,
                'fileName' => 'temp_500E9D7A-C69C-9924-8F5E-9E31A25D6226_Annoying-Childhood-Friend.jpg',
                'title' => 'Annoying Childhood Friend',
                'slug' => 'annoying-childhood-friend-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:05',
                'updated_at' => '2019-01-23 08:54:05',
            ),
            69 => 
            array (
                'id' => 570,
                'fileName' => 'temp_EE8EDAC0-2AA2-9AD6-97D9-CB17BD62217F_Dafuq-Did-I-Just-Read.jpg',
                'title' => 'Dafuq Did I Just Read',
                'slug' => 'dafuq-did-i-just-read-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:05',
                'updated_at' => '2019-01-23 08:54:05',
            ),
            70 => 
            array (
                'id' => 571,
                'fileName' => 'temp_6D8AB6CE-91F3-6438-070E-FD543C008C64_Scumbag-Minecraft.jpg',
                'title' => 'Scumbag Minecraft',
                'slug' => 'scumbag-minecraft-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:06',
                'updated_at' => '2019-01-23 08:54:06',
            ),
            71 => 
            array (
                'id' => 572,
                'fileName' => 'temp_4A10246A-DBFC-7674-4F6A-610856F11730_Britney-Spears.jpg',
                'title' => 'Britney Spears',
                'slug' => 'britney-spears-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:07',
                'updated_at' => '2019-01-23 08:54:07',
            ),
            72 => 
            array (
                'id' => 573,
                'fileName' => 'temp_5BADAE8B-5735-BC2E-351E-079491905EAA_Brian-Griffin.jpg',
                'title' => 'Brian Griffin',
                'slug' => 'brian-griffin-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:08',
                'updated_at' => '2019-01-23 08:54:08',
            ),
            73 => 
            array (
                'id' => 574,
                'fileName' => 'temp_B1B1D958-F74F-AA59-CAA1-D4BA0C94A502_V-For-Vendetta.jpg',
                'title' => 'V For Vendetta',
                'slug' => 'v-for-vendetta-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:09',
                'updated_at' => '2019-01-23 08:54:09',
            ),
            74 => 
            array (
                'id' => 575,
                'fileName' => 'temp_9961571E-4F01-A95B-17FD-A059DBCF99C1_Lethal-Weapon-Danny-Glover.jpg',
                'title' => 'Lethal Weapon Danny Glover',
                'slug' => 'lethal-weapon-danny-glover-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:10',
                'updated_at' => '2019-01-23 08:54:10',
            ),
            75 => 
            array (
                'id' => 576,
                'fileName' => 'temp_90889B0E-DD46-A3CD-FC7B-F5EC18942E1E_City-Bear.jpg',
                'title' => 'City Bear',
                'slug' => 'city-bear-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:11',
                'updated_at' => '2019-01-23 08:54:11',
            ),
            76 => 
            array (
                'id' => 577,
                'fileName' => 'temp_EA13AD43-D4E9-D86C-AB9A-FDB3D33831E1_Sassy-Iguana.jpg',
                'title' => 'Sassy Iguana',
                'slug' => 'sassy-iguana-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:12',
                'updated_at' => '2019-01-23 08:54:12',
            ),
            77 => 
            array (
                'id' => 578,
                'fileName' => 'temp_ACE9FBDF-CAAB-C7A6-9C9B-FACF7DA6460D_Alarm-Clock.jpg',
                'title' => 'Alarm Clock',
                'slug' => 'alarm-clock-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:13',
                'updated_at' => '2019-01-23 08:54:13',
            ),
            78 => 
            array (
                'id' => 579,
                'fileName' => 'temp_E13DDC7E-F8CD-208C-09D6-CBCBFFAFB0E8_Paul-Wonder-Years.jpg',
                'title' => 'Paul Wonder Years',
                'slug' => 'paul-wonder-years-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:13',
                'updated_at' => '2019-01-23 08:54:13',
            ),
            79 => 
            array (
                'id' => 580,
                'fileName' => 'temp_6C23CB3B-C030-F973-1B69-F1F79B476E22_Since-When-Were-You-Under-The-Impression.jpg',
                'title' => 'Since When Were You Under The Impression',
                'slug' => 'since-when-were-you-under-the-impression-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:14',
                'updated_at' => '2019-01-23 08:54:14',
            ),
            80 => 
            array (
                'id' => 581,
                'fileName' => 'temp_20155921-D97B-0FCB-BBE6-F5A55E47DEC8_Insanity-Puppy.jpg',
                'title' => 'Insanity Puppy',
                'slug' => 'insanity-puppy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:15',
                'updated_at' => '2019-01-23 08:54:15',
            ),
            81 => 
            array (
                'id' => 582,
                'fileName' => 'temp_4778C0F5-DA01-6630-99F3-68D7AEB5B416_Kim-Jong-Il-Y-U-No.jpg',
                'title' => 'Kim Jong Il Y U No',
                'slug' => 'kim-jong-il-y-u-no-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:16',
                'updated_at' => '2019-01-23 08:54:16',
            ),
            82 => 
            array (
                'id' => 583,
                'fileName' => 'temp_B65BF2DB-A5D0-9F44-10F3-B55C9DD09A78_Bubba-And-Barack.jpg',
                'title' => 'Bubba And Barack',
                'slug' => 'bubba-and-barack-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:16',
                'updated_at' => '2019-01-23 08:54:16',
            ),
            83 => 
            array (
                'id' => 584,
                'fileName' => 'temp_CF2C93B1-B808-DED0-6227-A32B92FBCBA0_Fat-Val-Kilmer.jpg',
                'title' => 'Fat Val Kilmer',
                'slug' => 'fat-val-kilmer-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:17',
                'updated_at' => '2019-01-23 08:54:17',
            ),
            84 => 
            array (
                'id' => 585,
                'fileName' => 'temp_1B12838F-D79E-973D-22C3-8E25F076EE30_USA-Lifter.jpg',
                'title' => 'USA Lifter',
                'slug' => 'usa-lifter-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:18',
                'updated_at' => '2019-01-23 08:54:18',
            ),
            85 => 
            array (
                'id' => 586,
                'fileName' => 'temp_34D22D3B-E002-13F3-0A1C-753D398F1B2B_Questionable-Strategy-Kobe.jpg',
                'title' => 'Questionable Strategy Kobe',
                'slug' => 'questionable-strategy-kobe-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:19',
                'updated_at' => '2019-01-23 08:54:19',
            ),
            86 => 
            array (
                'id' => 587,
                'fileName' => 'temp_4ADE18A6-A2BC-B0ED-B886-58628BCC9FE3_Self-Loathing-Otter.jpg',
                'title' => 'Self Loathing Otter',
                'slug' => 'self-loathing-otter-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:20',
                'updated_at' => '2019-01-23 08:54:20',
            ),
            87 => 
            array (
                'id' => 588,
                'fileName' => 'temp_310063DD-31E6-FBDF-707B-67DFF7CCFDE9_Net-Noob.jpg',
                'title' => 'Net Noob',
                'slug' => 'net-noob-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:21',
                'updated_at' => '2019-01-23 08:54:21',
            ),
            88 => 
            array (
                'id' => 589,
                'fileName' => 'temp_19D5E251-07C5-984E-64C7-43924EA175F0_Yuko-With-Gun.jpg',
                'title' => 'Yuko With Gun',
                'slug' => 'yuko-with-gun-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:21',
                'updated_at' => '2019-01-23 08:54:21',
            ),
            89 => 
            array (
                'id' => 590,
                'fileName' => 'temp_88CD4F7D-EA56-AEC3-43C4-54EF3D2583A9_Turkey.jpg',
                'title' => 'Turkey',
                'slug' => 'turkey-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:22',
                'updated_at' => '2019-01-23 08:54:22',
            ),
            90 => 
            array (
                'id' => 591,
                'fileName' => 'temp_872723C0-401E-E32F-6AF8-FEFC47C5B829_Grumpy-Toad.jpg',
                'title' => 'Grumpy Toad',
                'slug' => 'grumpy-toad-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:23',
                'updated_at' => '2019-01-23 08:54:23',
            ),
            91 => 
            array (
                'id' => 592,
                'fileName' => 'temp_D0814A92-11F6-D964-13DA-065DDD432066_Woah-Kitty.jpg',
                'title' => 'Woah Kitty',
                'slug' => 'woah-kitty-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:24',
                'updated_at' => '2019-01-23 08:54:24',
            ),
            92 => 
            array (
                'id' => 593,
                'fileName' => 'temp_C573D8E7-DECE-7DF2-4D45-31071D477E43_Photogenic-College-Football-Player.jpg',
                'title' => 'Photogenic College Football Player',
                'slug' => 'photogenic-college-football-player-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:24',
                'updated_at' => '2019-01-23 08:54:24',
            ),
            93 => 
            array (
                'id' => 594,
                'fileName' => 'temp_6214F690-B6F2-EA67-9314-DA2B52A2C361_Darth-Maul.jpg',
                'title' => 'Darth Maul',
                'slug' => 'darth-maul-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:25',
                'updated_at' => '2019-01-23 08:54:25',
            ),
            94 => 
            array (
                'id' => 595,
                'fileName' => 'temp_9E51C8D9-4FD8-60FA-E3B5-FFA2D457FF5C_Brian-Williams-Was-There-2.jpg',
                'title' => 'Brian Williams Was There 2',
                'slug' => 'brian-williams-was-there-2-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:26',
                'updated_at' => '2019-01-23 08:54:26',
            ),
            95 => 
            array (
                'id' => 596,
                'fileName' => 'temp_42A180DA-D02E-9522-4F60-11440F8FF9E8_FRANGO.jpg',
                'title' => 'FRANGO',
                'slug' => 'frango-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:27',
                'updated_at' => '2019-01-23 08:54:27',
            ),
            96 => 
            array (
                'id' => 597,
                'fileName' => 'temp_75CC88D2-8795-CFA8-B5BD-41D4FD22082F_Criana.jpg',
                'title' => 'Criana',
                'slug' => 'criana-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:28',
                'updated_at' => '2019-01-23 08:54:28',
            ),
            97 => 
            array (
                'id' => 598,
                'fileName' => 'temp_1E782888-4656-6C85-CF48-C64105CCDCB8_Duck-Face.jpg',
                'title' => 'Duck Face',
                'slug' => 'duck-face-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:29',
                'updated_at' => '2019-01-23 08:54:29',
            ),
            98 => 
            array (
                'id' => 599,
                'fileName' => 'temp_FABAB6A5-C659-C55C-09AE-EA427DB4567D_Super-Kami-Guru-Allows-This.jpg',
                'title' => 'Super Kami Guru Allows This',
                'slug' => 'super-kami-guru-allows-this-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:30',
                'updated_at' => '2019-01-23 08:54:30',
            ),
            99 => 
            array (
                'id' => 600,
                'fileName' => 'temp_25366B17-C514-EB91-FCB4-601B42A79DF8_Got-Room-For-One-More.jpg',
                'title' => 'Got Room For One More',
                'slug' => 'got-room-for-one-more-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:31',
                'updated_at' => '2019-01-23 08:54:31',
            ),
            100 => 
            array (
                'id' => 601,
                'fileName' => 'temp_9A8766B2-0DEB-D89E-7594-8B0D681E6D06_Pickup-Master.jpg',
                'title' => 'Pickup Master',
                'slug' => 'pickup-master-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:32',
                'updated_at' => '2019-01-23 08:54:32',
            ),
            101 => 
            array (
                'id' => 602,
                'fileName' => 'temp_C5CF3B62-FEEF-4941-0D7B-824CEE0EA632_Slick-Fry.jpg',
                'title' => 'Slick Fry',
                'slug' => 'slick-fry-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:33',
                'updated_at' => '2019-01-23 08:54:33',
            ),
            102 => 
            array (
                'id' => 603,
                'fileName' => 'temp_CB396C52-E1C7-C0AF-C209-5F9EB96B0B01_Relaxed-Office-Guy.jpg',
                'title' => 'Relaxed Office Guy',
                'slug' => 'relaxed-office-guy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:34',
                'updated_at' => '2019-01-23 08:54:34',
            ),
            103 => 
            array (
                'id' => 604,
                'fileName' => 'temp_1181A90D-FFFC-EA12-D74C-2256DDBEEA47_Smirk-Rage-Face.jpg',
                'title' => 'Smirk Rage Face',
                'slug' => 'smirk-rage-face-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:35',
                'updated_at' => '2019-01-23 08:54:35',
            ),
            104 => 
            array (
                'id' => 605,
                'fileName' => 'temp_04B0F2A9-73B1-A73C-77E1-808B540EF906_Booty-Warrior.jpg',
                'title' => 'Booty Warrior',
                'slug' => 'booty-warrior-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:36',
                'updated_at' => '2019-01-23 08:54:36',
            ),
            105 => 
            array (
                'id' => 606,
                'fileName' => 'temp_69630590-99F9-9AD6-55F5-EF016ABBDC84_Downvoting-Roman.jpg',
                'title' => 'Downvoting Roman',
                'slug' => 'downvoting-roman-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:36',
                'updated_at' => '2019-01-23 08:54:36',
            ),
            106 => 
            array (
                'id' => 607,
                'fileName' => 'temp_FA04E322-F179-8696-B891-49C11F0D4224_Okay-Guy-Rage-Face2.jpg',
                'title' => 'Okay Guy Rage Face2',
                'slug' => 'okay-guy-rage-face2-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:37',
                'updated_at' => '2019-01-23 08:54:37',
            ),
            107 => 
            array (
                'id' => 608,
                'fileName' => 'temp_DA1A2C5E-0362-F84C-C22E-591056EBD79E_So-God-Made-A-Farmer.jpg',
                'title' => 'So God Made A Farmer',
                'slug' => 'so-god-made-a-farmer-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:38',
                'updated_at' => '2019-01-23 08:54:38',
            ),
            108 => 
            array (
                'id' => 609,
                'fileName' => 'temp_2CB6BADD-A790-6B4C-6EC3-F62D0A1665DF_Overly-Attached-Father.jpg',
                'title' => 'Overly Attached Father',
                'slug' => 'overly-attached-father-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:39',
                'updated_at' => '2019-01-23 08:54:39',
            ),
            109 => 
            array (
                'id' => 610,
                'fileName' => 'temp_97491ECA-04CE-C870-93B9-AC13F151AE55_Hot-Scale.jpg',
                'title' => 'Hot Scale',
                'slug' => 'hot-scale-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:40',
                'updated_at' => '2019-01-23 08:54:40',
            ),
            110 => 
            array (
                'id' => 611,
                'fileName' => 'temp_BF9E5B41-3C69-FB88-13DC-D7A9606C5E3A_Big-Bird-And-Mitt-Romney.jpg',
                'title' => 'Big Bird And Mitt Romney',
                'slug' => 'big-bird-and-mitt-romney-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:41',
                'updated_at' => '2019-01-23 08:54:41',
            ),
            111 => 
            array (
                'id' => 612,
                'fileName' => 'temp_30193F49-E706-06FB-F5B8-9E80FC84C88C_Memeo.jpg',
                'title' => 'o',
                'slug' => 'memeo-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:42',
                'updated_at' => '2019-01-23 08:54:42',
            ),
            112 => 
            array (
                'id' => 613,
                'fileName' => 'temp_A2FB3D68-5EBE-EE9F-C2A6-9904D7F32180_Jersey-Santa.jpg',
                'title' => 'Jersey Santa',
                'slug' => 'jersey-santa-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:42',
                'updated_at' => '2019-01-23 08:54:42',
            ),
            113 => 
            array (
                'id' => 614,
                'fileName' => 'temp_881F05B6-84A9-49E2-AD32-E7957983056B_Idiot-Nerd-Girl.jpg',
                'title' => 'Idiot Nerd Girl',
                'slug' => 'idiot-nerd-girl-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:43',
                'updated_at' => '2019-01-23 08:54:43',
            ),
            114 => 
            array (
                'id' => 615,
                'fileName' => 'temp_3FFFF988-3EEE-97CD-FD47-A251BA220A17_Original-I-Lied.jpg',
                'title' => 'Original I Lied',
                'slug' => 'original-i-lied-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:44',
                'updated_at' => '2019-01-23 08:54:44',
            ),
            115 => 
            array (
                'id' => 616,
                'fileName' => 'temp_C4EDABF1-A266-FC2A-8122-E5C0960F7D8E_Chester-The-Cat.jpg',
                'title' => 'Chester The Cat',
                'slug' => 'chester-the-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:45',
                'updated_at' => '2019-01-23 08:54:45',
            ),
            116 => 
            array (
                'id' => 617,
                'fileName' => 'temp_6CA0760D-E8E0-24E5-9D2A-D15A24016F45_Family-Guy-Peter.jpg',
                'title' => 'Family Guy Peter',
                'slug' => 'family-guy-peter-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:46',
                'updated_at' => '2019-01-23 08:54:46',
            ),
            117 => 
            array (
                'id' => 618,
                'fileName' => 'temp_9E483192-B198-6454-D148-F7394D7E5443_Cereal-Guy.jpg',
                'title' => 'Cereal Guy',
                'slug' => 'cereal-guy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:47',
                'updated_at' => '2019-01-23 08:54:47',
            ),
            118 => 
            array (
                'id' => 619,
                'fileName' => 'temp_6E006919-56FA-E08E-CAD3-BA45375B32F2_Simpsons-Grandpa.jpg',
                'title' => 'Simpsons Grandpa',
                'slug' => 'simpsons-grandpa-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:48',
                'updated_at' => '2019-01-23 08:54:48',
            ),
            119 => 
            array (
                'id' => 620,
                'fileName' => 'temp_2F3CB7C8-BEF8-71AD-EAA7-D4AFEAC853B0_Harmless-Scout-Leader.jpg',
                'title' => 'Harmless Scout Leader',
                'slug' => 'harmless-scout-leader-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:49',
                'updated_at' => '2019-01-23 08:54:49',
            ),
            120 => 
            array (
                'id' => 621,
                'fileName' => 'temp_5C48EE6C-EA1B-F052-AA2E-6CCEB183651A_Fim-De-Semana.jpg',
                'title' => 'Fim De Semana',
                'slug' => 'fim-de-semana-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:50',
                'updated_at' => '2019-01-23 08:54:50',
            ),
            121 => 
            array (
                'id' => 622,
                'fileName' => 'temp_0BB7883C-6E7E-9D50-6E47-AA209515CB3D_Crazy-Dawg.jpg',
                'title' => 'Crazy Dawg',
                'slug' => 'crazy-dawg-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:50',
                'updated_at' => '2019-01-23 08:54:50',
            ),
            122 => 
            array (
                'id' => 623,
                'fileName' => 'temp_2533D9A4-C9C8-E828-AD20-41FF8C21F5E0_Jesus-Talking-To-Cool-Dude.jpg',
                'title' => 'Jesus Talking To Cool Dude',
                'slug' => 'jesus-talking-to-cool-dude-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:52',
                'updated_at' => '2019-01-23 08:54:52',
            ),
            123 => 
            array (
                'id' => 624,
                'fileName' => 'temp_8A682E0F-19C2-6095-CB1F-66B167002F65_Zorg.jpg',
                'title' => 'Zorg',
                'slug' => 'zorg-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:53',
                'updated_at' => '2019-01-23 08:54:53',
            ),
            124 => 
            array (
                'id' => 625,
                'fileName' => 'temp_921C77DB-E49D-2F94-622F-4E9EDD0E0483_Frustrating-Mom.jpg',
                'title' => 'Frustrating Mom',
                'slug' => 'frustrating-mom-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:54',
                'updated_at' => '2019-01-23 08:54:54',
            ),
            125 => 
            array (
                'id' => 626,
                'fileName' => 'temp_4F69015B-8333-9D89-4D66-215618EE6021_Maroney-And-Obama-Not-Impressed.jpg',
                'title' => 'Maroney And Obama Not Impressed',
                'slug' => 'maroney-and-obama-not-impressed-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:55',
                'updated_at' => '2019-01-23 08:54:55',
            ),
            126 => 
            array (
                'id' => 627,
                'fileName' => 'temp_A22C7D37-974F-650B-6D7F-ABA23038387E_Alan-Greenspan.jpg',
                'title' => 'Alan Greenspan',
                'slug' => 'alan-greenspan-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:56',
                'updated_at' => '2019-01-23 08:54:56',
            ),
            127 => 
            array (
                'id' => 628,
                'fileName' => 'temp_E6C53686-359B-4147-DB11-2D1D6445E52A_Dick-Cheney.jpg',
                'title' => 'Dick Cheney',
                'slug' => 'dick-cheney-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:57',
                'updated_at' => '2019-01-23 08:54:57',
            ),
            128 => 
            array (
                'id' => 629,
                'fileName' => 'temp_D1700DC6-6186-5980-E87C-A03D0543D722_Dolph-Ziggler-Sells.jpg',
                'title' => 'Dolph Ziggler Sells',
                'slug' => 'dolph-ziggler-sells-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:57',
                'updated_at' => '2019-01-23 08:54:57',
            ),
            129 => 
            array (
                'id' => 630,
                'fileName' => 'temp_02970CDD-2641-E8A0-F09A-E1331A8F58AB_Dancing-Trollmom.jpg',
                'title' => 'Dancing Trollmom',
                'slug' => 'dancing-trollmom-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:58',
                'updated_at' => '2019-01-23 08:54:58',
            ),
            130 => 
            array (
                'id' => 631,
                'fileName' => 'temp_9BEFFDD0-1285-2600-BA33-F8C2C5E85F6F_Blue-Futurama-Fry.jpg',
                'title' => 'Blue Futurama Fry',
                'slug' => 'blue-futurama-fry-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:54:59',
                'updated_at' => '2019-01-23 08:54:59',
            ),
            131 => 
            array (
                'id' => 632,
                'fileName' => 'temp_54C66B21-2C10-E67E-C0C4-21B5BC983582_So-Many-Shirts.jpg',
                'title' => 'So Many Shirts',
                'slug' => 'so-many-shirts-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:00',
                'updated_at' => '2019-01-23 08:55:00',
            ),
            132 => 
            array (
                'id' => 633,
                'fileName' => 'temp_4F0F7AFD-AF7B-B2F2-006B-AFFD530373E0_Headbanzer.jpg',
                'title' => 'Headbanzer',
                'slug' => 'headbanzer-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:01',
                'updated_at' => '2019-01-23 08:55:01',
            ),
            133 => 
            array (
                'id' => 634,
                'fileName' => 'temp_1165E79E-7089-04E2-D660-A5726387C893_Romneys-Hindenberg.jpg',
                'title' => 'Romneys Hindenberg',
                'slug' => 'romneys-hindenberg-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:02',
                'updated_at' => '2019-01-23 08:55:02',
            ),
            134 => 
            array (
                'id' => 635,
                'fileName' => 'temp_649EF60C-0C1C-8F9A-AB81-CE655E26EB16_Harry-Potter-Ok.jpg',
                'title' => 'Harry Potter Ok',
                'slug' => 'harry-potter-ok-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:03',
                'updated_at' => '2019-01-23 08:55:03',
            ),
            135 => 
            array (
                'id' => 636,
                'fileName' => 'temp_BB504B10-9B3D-22F1-E218-DC4245E9536C_Little-Romney.jpg',
                'title' => 'Little Romney',
                'slug' => 'little-romney-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:04',
                'updated_at' => '2019-01-23 08:55:04',
            ),
            136 => 
            array (
                'id' => 637,
                'fileName' => 'temp_C565194D-EBF2-AB0B-B45A-A41EAB095E16_Saw-Fulla.jpg',
                'title' => 'Saw Fulla',
                'slug' => 'saw-fulla-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:05',
                'updated_at' => '2019-01-23 08:55:05',
            ),
            137 => 
            array (
                'id' => 638,
                'fileName' => 'temp_3979FE99-08C0-5408-CC5C-39987FB917FB_Musically-Oblivious-8th-Grader.jpg',
                'title' => 'Musically Oblivious 8th Grader',
                'slug' => 'musically-oblivious-8th-grader-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:05',
                'updated_at' => '2019-01-23 08:55:05',
            ),
            138 => 
            array (
                'id' => 639,
                'fileName' => 'temp_478826BA-CAD6-E5FC-F808-EC2677B830D1_Dating-Site-Murderer.jpg',
                'title' => 'Dating Site Murderer',
                'slug' => 'dating-site-murderer-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:06',
                'updated_at' => '2019-01-23 08:55:06',
            ),
            139 => 
            array (
                'id' => 640,
                'fileName' => 'temp_D41E2182-69C4-C512-A839-D390D58BB06B_Lame-Pun-Coon.jpg',
                'title' => 'Lame Pun Coon',
                'slug' => 'lame-pun-coon-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:07',
                'updated_at' => '2019-01-23 08:55:07',
            ),
            140 => 
            array (
                'id' => 641,
                'fileName' => 'temp_126DB530-6FE9-05CA-FDDB-E74EAE02B072_Foal-Of-Mine.jpg',
                'title' => 'Foal Of Mine',
                'slug' => 'foal-of-mine-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:09',
                'updated_at' => '2019-01-23 08:55:09',
            ),
            141 => 
            array (
                'id' => 642,
                'fileName' => 'temp_6CE1CCCE-AF83-CCBE-0075-99A02963A235_Tom-Hardy-.jpg',
                'title' => 'Tom Hardy',
                'slug' => 'tom-hardy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:10',
                'updated_at' => '2019-01-23 08:55:10',
            ),
            142 => 
            array (
                'id' => 643,
                'fileName' => 'temp_389AE415-8DA4-8B28-40F3-F229D940329A_Luiz-Fabiano.jpg',
                'title' => 'Luiz Fabiano',
                'slug' => 'luiz-fabiano-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:10',
                'updated_at' => '2019-01-23 08:55:10',
            ),
            143 => 
            array (
                'id' => 644,
                'fileName' => 'temp_BAD8F32C-831D-1501-BAF6-254C3E4CA488_CASHWAG-Crew.jpg',
                'title' => 'CASHWAG Crew',
                'slug' => 'cashwag-crew-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:12',
                'updated_at' => '2019-01-23 08:55:12',
            ),
            144 => 
            array (
                'id' => 645,
                'fileName' => 'temp_140BEEB0-696B-9182-186C-064FAF14DEF0_Chuck-Norris-With-Guns.jpg',
                'title' => 'Chuck Norris With Guns',
                'slug' => 'chuck-norris-with-guns-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:13',
                'updated_at' => '2019-01-23 08:55:13',
            ),
            145 => 
            array (
                'id' => 646,
                'fileName' => 'temp_9E9FD65B-635D-82F1-C497-CDF967616E52_Fabulous-Frank-And-His-Snake.jpg',
                'title' => 'Fabulous Frank And His Snake',
                'slug' => 'fabulous-frank-and-his-snake-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:13',
                'updated_at' => '2019-01-23 08:55:13',
            ),
            146 => 
            array (
                'id' => 647,
                'fileName' => 'temp_9F6AEEE1-18FC-1746-67B0-02DCF7510029_Kobe.jpg',
                'title' => 'Kobe',
                'slug' => 'kobe-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:15',
                'updated_at' => '2019-01-23 08:55:15',
            ),
            147 => 
            array (
                'id' => 648,
                'fileName' => 'temp_04ADA2D7-D411-B1D8-F26F-2EBE04F1C1B7_Rena-Matsui.jpg',
                'title' => 'Rena Matsui',
                'slug' => 'rena-matsui-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:16',
                'updated_at' => '2019-01-23 08:55:16',
            ),
            148 => 
            array (
                'id' => 649,
                'fileName' => 'temp_D3A5488C-996B-1B95-AE1B-942977D5EB12_DoucheBag-DJ.jpg',
                'title' => 'DoucheBag DJ',
                'slug' => 'douchebag-dj-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:17',
                'updated_at' => '2019-01-23 08:55:17',
            ),
            149 => 
            array (
                'id' => 650,
                'fileName' => 'temp_C2FCEB3E-F60E-FF3F-D32D-265D0E4BF5FC_Vengeance-Dad.jpg',
                'title' => 'Vengeance Dad',
                'slug' => 'vengeance-dad-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:18',
                'updated_at' => '2019-01-23 08:55:18',
            ),
            150 => 
            array (
                'id' => 651,
                'fileName' => 'temp_6AE91640-3655-9334-6BDA-96D85A0AD6BC_Mr-Black-Knows-Everything.jpg',
                'title' => 'Mr Black Knows Everything',
                'slug' => 'mr-black-knows-everything-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:19',
                'updated_at' => '2019-01-23 08:55:19',
            ),
            151 => 
            array (
                'id' => 652,
                'fileName' => 'temp_69EE47FD-D0DD-152D-AE63-6CC5D7C00F48_Downcast-Dark-Souls.jpg',
                'title' => 'Downcast Dark Souls',
                'slug' => 'downcast-dark-souls-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:19',
                'updated_at' => '2019-01-23 08:55:19',
            ),
            152 => 
            array (
                'id' => 653,
                'fileName' => 'temp_1B3B6EF3-4D4E-2C25-93D8-17C1E77D5183_Guy-Fawkes.jpg',
                'title' => 'Guy Fawkes',
                'slug' => 'guy-fawkes-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:20',
                'updated_at' => '2019-01-23 08:55:20',
            ),
            153 => 
            array (
                'id' => 654,
                'fileName' => 'temp_25D4E8BA-7A3F-3B89-EECD-AB450D004655_Nickleback.jpg',
                'title' => 'Nickleback',
                'slug' => 'nickleback-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:21',
                'updated_at' => '2019-01-23 08:55:21',
            ),
            154 => 
            array (
                'id' => 655,
                'fileName' => 'temp_CD1001BB-B97C-9E5C-102A-EB45BF621B3D_Skype.jpg',
                'title' => 'Skype',
                'slug' => 'skype-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:22',
                'updated_at' => '2019-01-23 08:55:22',
            ),
            155 => 
            array (
                'id' => 656,
                'fileName' => 'temp_5C15028D-C5F8-5BDC-F2E3-7076305B2012_Lewandowski-E-Reus.jpg',
                'title' => 'Lewandowski E Reus',
                'slug' => 'lewandowski-e-reus-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:22',
                'updated_at' => '2019-01-23 08:55:22',
            ),
            156 => 
            array (
                'id' => 657,
                'fileName' => 'temp_31910FBE-F46D-3833-1D11-AB9320EDCABE_Overly-Suave-IT-Guy.jpg',
                'title' => 'Overly Suave IT Guy',
                'slug' => 'overly-suave-it-guy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:23',
                'updated_at' => '2019-01-23 08:55:23',
            ),
            157 => 
            array (
                'id' => 658,
                'fileName' => 'temp_713D5FC8-0DDB-34B9-89D1-74BCDB2028D9_Obama-Romney-Pointing.jpg',
                'title' => 'Obama Romney Pointing',
                'slug' => 'obama-romney-pointing-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:24',
                'updated_at' => '2019-01-23 08:55:24',
            ),
            158 => 
            array (
                'id' => 659,
                'fileName' => 'temp_002C313B-54ED-F231-CEA4-AC4EE6F5098D_Ridiculously-Photogenic-Guy.jpg',
                'title' => 'Ridiculously Photogenic Guy',
                'slug' => 'ridiculously-photogenic-guy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:25',
                'updated_at' => '2019-01-23 08:55:25',
            ),
            159 => 
            array (
                'id' => 660,
                'fileName' => 'temp_44722288-2D5D-77EE-F633-B05458C975E8_Stoner-PhD.jpg',
                'title' => 'Stoner PhD',
                'slug' => 'stoner-phd-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:26',
                'updated_at' => '2019-01-23 08:55:26',
            ),
            160 => 
            array (
                'id' => 661,
                'fileName' => 'temp_8045AD85-C411-CACE-95A5-96631F745858_Deadpool-Pick-Up-Lines.jpg',
                'title' => 'Deadpool Pick Up Lines',
                'slug' => 'deadpool-pick-up-lines-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:27',
                'updated_at' => '2019-01-23 08:55:27',
            ),
            161 => 
            array (
                'id' => 662,
                'fileName' => 'temp_9AFD1C21-DC3E-432D-86E9-DAB92883755E_Not-Okay-Rage-Face.jpg',
                'title' => 'Not Okay Rage Face',
                'slug' => 'not-okay-rage-face-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:28',
                'updated_at' => '2019-01-23 08:55:28',
            ),
            162 => 
            array (
                'id' => 663,
                'fileName' => 'temp_0CAE08E5-2401-E2CC-465A-6558807D0F48_The-Critic.jpg',
                'title' => 'The Critic',
                'slug' => 'the-critic-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:28',
                'updated_at' => '2019-01-23 08:55:28',
            ),
            163 => 
            array (
                'id' => 664,
                'fileName' => 'temp_0AEFBB47-BF23-A36D-81EB-3C48116C5DC0_Hedonism-Bot.jpg',
                'title' => 'Hedonism Bot',
                'slug' => 'hedonism-bot-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:30',
                'updated_at' => '2019-01-23 08:55:30',
            ),
            164 => 
            array (
                'id' => 665,
                'fileName' => 'temp_2E3F638E-38CC-32F9-6E32-17BDD9C8C730_Too-Drunk-At-Party-Tina.jpg',
                'title' => 'Too Drunk At Party Tina',
                'slug' => 'too-drunk-at-party-tina-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:31',
                'updated_at' => '2019-01-23 08:55:31',
            ),
            165 => 
            array (
                'id' => 666,
                'fileName' => 'temp_89C0F3EC-F36B-F437-6845-86892E5A061A_Merida-Brave.jpg',
                'title' => 'Merida Brave',
                'slug' => 'merida-brave-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:32',
                'updated_at' => '2019-01-23 08:55:32',
            ),
            166 => 
            array (
                'id' => 667,
                'fileName' => 'temp_E2FB853D-77C1-CD2C-38E3-0EDCBFA24589_Rob-In-The-Hood.jpg',
                'title' => 'Rob In The Hood',
                'slug' => 'rob-in-the-hood-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:33',
                'updated_at' => '2019-01-23 08:55:33',
            ),
            167 => 
            array (
                'id' => 668,
                'fileName' => 'temp_2B587668-BEEC-CB00-8DB0-B1A943B11316_Friend-Zone-Fiona.jpg',
                'title' => 'Friend Zone Fiona',
                'slug' => 'friend-zone-fiona-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:34',
                'updated_at' => '2019-01-23 08:55:34',
            ),
            168 => 
            array (
                'id' => 669,
                'fileName' => 'temp_B994A657-1E2B-3054-C1AF-514C275241AB_Ermahgerd-IPHERN-3GM.jpg',
                'title' => 'Ermahgerd IPHERN 3GM',
                'slug' => 'ermahgerd-iphern-3gm-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:35',
                'updated_at' => '2019-01-23 08:55:35',
            ),
            169 => 
            array (
                'id' => 670,
                'fileName' => 'temp_3A78DD8F-396B-F148-E466-24B4EB1D172F_Minegishi-Minami2.jpg',
                'title' => 'Minegishi Minami2',
                'slug' => 'minegishi-minami2-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:36',
                'updated_at' => '2019-01-23 08:55:36',
            ),
            170 => 
            array (
                'id' => 671,
                'fileName' => 'temp_F28AFDD2-E28C-B732-B9BE-66E1F3D60618_Tennis-Defeat.jpg',
                'title' => 'Tennis Defeat',
                'slug' => 'tennis-defeat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:37',
                'updated_at' => '2019-01-23 08:55:37',
            ),
            171 => 
            array (
                'id' => 672,
                'fileName' => 'temp_D1F3DD12-29EF-770D-A114-0CE4679A641F_Sadly-I-Am-Only-An-Eel.jpg',
                'title' => 'Sadly I Am Only An Eel',
                'slug' => 'sadly-i-am-only-an-eel-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:38',
                'updated_at' => '2019-01-23 08:55:38',
            ),
            172 => 
            array (
                'id' => 673,
                'fileName' => 'temp_851E09CE-BD3B-819E-A110-4DD1833A38C4_McKayla-Maroney-Not-Impressed2.jpg',
                'title' => 'McKayla Maroney Not Impressed2',
                'slug' => 'mckayla-maroney-not-impressed2-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:39',
                'updated_at' => '2019-01-23 08:55:39',
            ),
            173 => 
            array (
                'id' => 674,
                'fileName' => 'temp_0598451D-DCB1-D3BA-FC8C-8F1CE5FD85E9_I-Lied-2.jpg',
                'title' => 'I Lied 2',
                'slug' => 'i-lied-2-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:40',
                'updated_at' => '2019-01-23 08:55:40',
            ),
            174 => 
            array (
                'id' => 675,
                'fileName' => 'temp_569DBB1A-46A9-B570-56A8-727CF2DD1089_Solemn-Lumberjack.jpg',
                'title' => 'Solemn Lumberjack',
                'slug' => 'solemn-lumberjack-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:41',
                'updated_at' => '2019-01-23 08:55:41',
            ),
            175 => 
            array (
                'id' => 676,
                'fileName' => 'temp_41318050-160C-05F1-392C-F2A6E814D5F9_Giovanni-Vernia.jpg',
                'title' => 'Giovanni Vernia',
                'slug' => 'giovanni-vernia-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:42',
                'updated_at' => '2019-01-23 08:55:42',
            ),
            176 => 
            array (
                'id' => 677,
                'fileName' => 'temp_FF113E78-5188-CE46-3128-4120E64D6815_Grumpy-Cat-Does-Not-Believe.jpg',
                'title' => 'Grumpy Cat Does Not Believe',
                'slug' => 'grumpy-cat-does-not-believe-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:43',
                'updated_at' => '2019-01-23 08:55:43',
            ),
            177 => 
            array (
                'id' => 678,
                'fileName' => 'temp_5F2F5FC9-B084-5F40-9D99-33DB6D41B48E_Edward-Elric-1.jpg',
                'title' => 'Edward Elric 1',
                'slug' => 'edward-elric-1-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:44',
                'updated_at' => '2019-01-23 08:55:44',
            ),
            178 => 
            array (
                'id' => 679,
                'fileName' => 'temp_CB0C4A74-6121-E3EC-3697-632446F332F5_CURLEY.jpg',
                'title' => 'CURLEY',
                'slug' => 'curley-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:44',
                'updated_at' => '2019-01-23 08:55:44',
            ),
            179 => 
            array (
                'id' => 680,
                'fileName' => 'temp_4F07F4CD-FB3F-19F0-19CA-9940DB8E3B63_ERMAHGERD-TWERLERT.jpg',
                'title' => 'ERMAHGERD TWERLERT',
                'slug' => 'ermahgerd-twerlert-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:45',
                'updated_at' => '2019-01-23 08:55:45',
            ),
            180 => 
            array (
                'id' => 681,
                'fileName' => 'temp_EF5EECA1-C4CE-26B7-D6AC-E96A8AC9E69E_Obama-Cowboy-Hat.jpg',
                'title' => 'Obama Cowboy Hat',
                'slug' => 'obama-cowboy-hat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:46',
                'updated_at' => '2019-01-23 08:55:46',
            ),
            181 => 
            array (
                'id' => 682,
                'fileName' => 'temp_0582017C-C3FB-E6B4-DCFB-8E14BC420997_Jon-Stewart-Skeptical.jpg',
                'title' => 'Jon Stewart Skeptical',
                'slug' => 'jon-stewart-skeptical-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:47',
                'updated_at' => '2019-01-23 08:55:47',
            ),
            182 => 
            array (
                'id' => 683,
                'fileName' => 'temp_976807F8-91CB-A96E-4A01-09FA2FBB52D6_Young-And-Reckless.jpg',
                'title' => 'Young And Reckless',
                'slug' => 'young-and-reckless-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:48',
                'updated_at' => '2019-01-23 08:55:48',
            ),
            183 => 
            array (
                'id' => 684,
                'fileName' => 'temp_46D3609D-A3AE-B6BD-48CB-C00542557C23_He-Will-Never-Get-A-Girlfriend.jpg',
                'title' => 'He Will Never Get A Girlfriend',
                'slug' => 'he-will-never-get-a-girlfriend-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:49',
                'updated_at' => '2019-01-23 08:55:49',
            ),
            184 => 
            array (
                'id' => 685,
                'fileName' => 'temp_21EF0D3A-FDBF-A206-A07A-28E07ACE6256_Doug.jpg',
                'title' => 'Doug',
                'slug' => 'doug-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:50',
                'updated_at' => '2019-01-23 08:55:50',
            ),
            185 => 
            array (
                'id' => 686,
                'fileName' => 'temp_6BDE0F8D-82FD-323F-FA88-F87B77B86070_Awkward-Olympics.jpg',
                'title' => 'Awkward Olympics',
                'slug' => 'awkward-olympics-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:51',
                'updated_at' => '2019-01-23 08:55:51',
            ),
            186 => 
            array (
                'id' => 687,
                'fileName' => 'temp_E834F421-23EB-84E6-4E01-74459ECEDEF6_Rarity.jpg',
                'title' => 'Rarity',
                'slug' => 'rarity-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:51',
                'updated_at' => '2019-01-23 08:55:51',
            ),
            187 => 
            array (
                'id' => 688,
                'fileName' => 'temp_16E38256-06D1-E25C-5614-C2B4968F5D18_Angry-Chicken-Boss.jpg',
                'title' => 'Angry Chicken Boss',
                'slug' => 'angry-chicken-boss-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:52',
                'updated_at' => '2019-01-23 08:55:52',
            ),
            188 => 
            array (
                'id' => 689,
                'fileName' => 'temp_C6D772FD-C88E-BEC0-1D2C-3CEC7A59655F_Nailed-It.jpg',
                'title' => 'Nailed It',
                'slug' => 'nailed-it-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:53',
                'updated_at' => '2019-01-23 08:55:53',
            ),
            189 => 
            array (
                'id' => 690,
                'fileName' => 'temp_587AE82D-A58A-F676-3133-EFDA74040EF2_Crazy-Hispanic-Man.jpg',
                'title' => 'Crazy Hispanic Man',
                'slug' => 'crazy-hispanic-man-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:54',
                'updated_at' => '2019-01-23 08:55:54',
            ),
            190 => 
            array (
                'id' => 691,
                'fileName' => 'temp_3847345B-A2CA-1BAD-54CC-1BB9B0115B38_Hipster-Kitty.jpg',
                'title' => 'Hipster Kitty',
                'slug' => 'hipster-kitty-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:55',
                'updated_at' => '2019-01-23 08:55:55',
            ),
            191 => 
            array (
                'id' => 692,
                'fileName' => 'temp_922E89F1-F532-EA37-5B24-B7CE36DE6EBE_Hawkward.jpg',
                'title' => 'Hawkward',
                'slug' => 'hawkward-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:56',
                'updated_at' => '2019-01-23 08:55:56',
            ),
            192 => 
            array (
                'id' => 693,
                'fileName' => 'temp_48756715-AF99-9182-91DF-4EB81B22BFED_Bill-OReilly.jpg',
                'title' => 'Bill OReilly',
                'slug' => 'bill-oreilly-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:56',
                'updated_at' => '2019-01-23 08:55:56',
            ),
            193 => 
            array (
                'id' => 694,
                'fileName' => 'temp_3978DFF0-1E7A-80B7-6D3E-FFD2796CC86A_Pickup-Line-Panda.jpg',
                'title' => 'Pickup Line Panda',
                'slug' => 'pickup-line-panda-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:57',
                'updated_at' => '2019-01-23 08:55:57',
            ),
            194 => 
            array (
                'id' => 695,
                'fileName' => 'temp_0C6D0D79-95F4-A685-5298-3A1A4687113B_Pickup-Professor.jpg',
                'title' => 'Pickup Professor',
                'slug' => 'pickup-professor-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:58',
                'updated_at' => '2019-01-23 08:55:58',
            ),
            195 => 
            array (
                'id' => 696,
                'fileName' => 'temp_24FD04CA-0607-E998-07B8-CE394F0E7433_Jehovas-Witness-Squirrel.jpg',
                'title' => 'Jehovas Witness Squirrel',
                'slug' => 'jehovas-witness-squirrel-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:55:59',
                'updated_at' => '2019-01-23 08:55:59',
            ),
            196 => 
            array (
                'id' => 697,
                'fileName' => 'temp_0BD09A5B-A5CB-C930-5525-4A7327A26EEA_Darti-Boy.jpg',
                'title' => 'Darti Boy',
                'slug' => 'darti-boy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:00',
                'updated_at' => '2019-01-23 08:56:00',
            ),
            197 => 
            array (
                'id' => 698,
                'fileName' => 'temp_AA04BCB5-5CFA-E4B8-1B5F-F54B64374124_Photogenic-Scene-Guy.jpg',
                'title' => 'Photogenic Scene Guy',
                'slug' => 'photogenic-scene-guy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:00',
                'updated_at' => '2019-01-23 08:56:00',
            ),
            198 => 
            array (
                'id' => 699,
                'fileName' => 'temp_F60A336B-B25A-3283-9D67-E3CA34BC1DF8_Good-Guy-Pizza-Rolls.jpg',
                'title' => 'Good Guy Pizza Rolls',
                'slug' => 'good-guy-pizza-rolls-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:02',
                'updated_at' => '2019-01-23 08:56:02',
            ),
            199 => 
            array (
                'id' => 700,
                'fileName' => 'temp_87E7BCDF-2023-B280-FF7D-8FD3AE9FF272_Jerkoff-Javert.jpg',
                'title' => 'Jerkoff Javert',
                'slug' => 'jerkoff-javert-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:03',
                'updated_at' => '2019-01-23 08:56:03',
            ),
            200 => 
            array (
                'id' => 701,
                'fileName' => 'temp_FFBF0F22-B546-0FE1-36D3-7C1790E6AA47_Gangnam-Style2.jpg',
                'title' => 'Gangnam Style2',
                'slug' => 'gangnam-style2-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:04',
                'updated_at' => '2019-01-23 08:56:04',
            ),
            201 => 
            array (
                'id' => 702,
                'fileName' => 'temp_AEBFFAD8-F367-3976-B0FC-22EBB5411419_Beyonce-Superbowl-Yell.jpg',
                'title' => 'Beyonce Superbowl Yell',
                'slug' => 'beyonce-superbowl-yell-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:05',
                'updated_at' => '2019-01-23 08:56:05',
            ),
            202 => 
            array (
                'id' => 703,
                'fileName' => 'temp_A0B2827D-8737-3F71-CFBC-88EFC14AE9FA_Simsimi.jpg',
                'title' => 'Simsimi',
                'slug' => 'simsimi-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:06',
                'updated_at' => '2019-01-23 08:56:06',
            ),
            203 => 
            array (
                'id' => 704,
                'fileName' => 'temp_2178972A-5E9B-E576-1FB4-EA32E1F9EBDD_Scene-Wolf.jpg',
                'title' => 'Scene Wolf',
                'slug' => 'scene-wolf-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:07',
                'updated_at' => '2019-01-23 08:56:07',
            ),
            204 => 
            array (
                'id' => 705,
                'fileName' => 'temp_35E23D9C-948D-BACE-6B04-F6B7BDC6AF13_Hardworking-Guy.jpg',
                'title' => 'Hardworking Guy',
                'slug' => 'hardworking-guy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:08',
                'updated_at' => '2019-01-23 08:56:08',
            ),
            205 => 
            array (
                'id' => 706,
                'fileName' => 'temp_F12128A6-C745-3121-CCEC-00D0B1F14303_Smug-Bear.jpg',
                'title' => 'Smug Bear',
                'slug' => 'smug-bear-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:09',
                'updated_at' => '2019-01-23 08:56:09',
            ),
            206 => 
            array (
                'id' => 707,
                'fileName' => 'temp_8F8C2EAD-80EC-2227-EE5E-88460824C72D_Idiotaco.jpg',
                'title' => 'Idiotaco',
                'slug' => 'idiotaco-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:10',
                'updated_at' => '2019-01-23 08:56:10',
            ),
            207 => 
            array (
                'id' => 708,
                'fileName' => 'temp_2B363FE2-5850-5555-2912-06622FA4CBD4_Foul-Bachelorette-Frog.jpg',
                'title' => 'Foul Bachelorette Frog',
                'slug' => 'foul-bachelorette-frog-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:11',
                'updated_at' => '2019-01-23 08:56:11',
            ),
            208 => 
            array (
                'id' => 709,
                'fileName' => 'temp_C5D5948D-FFF8-2F23-B9BE-CB3F862ECE77_South-Park-Craig.jpg',
                'title' => 'South Park Craig',
                'slug' => 'south-park-craig-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:12',
                'updated_at' => '2019-01-23 08:56:12',
            ),
            209 => 
            array (
                'id' => 710,
                'fileName' => 'temp_AD330044-EA7A-CE85-D567-232DD3648DB4_Chuckchuckchuck.jpg',
                'title' => 'Chuckchuckchuck',
                'slug' => 'chuckchuckchuck-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:13',
                'updated_at' => '2019-01-23 08:56:13',
            ),
            210 => 
            array (
                'id' => 711,
                'fileName' => 'temp_5E982117-59F1-B810-A013-79BD1668A7DF_Bad-Wife-Worse-Mom.jpg',
                'title' => 'Bad Wife Worse Mom',
                'slug' => 'bad-wife-worse-mom-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:14',
                'updated_at' => '2019-01-23 08:56:14',
            ),
            211 => 
            array (
                'id' => 712,
                'fileName' => 'temp_4607CB11-F661-1B6C-DB96-09E226BE6A32_Henry-David-Thoreau.jpg',
                'title' => 'Henry David Thoreau',
                'slug' => 'henry-david-thoreau-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:14',
                'updated_at' => '2019-01-23 08:56:14',
            ),
            212 => 
            array (
                'id' => 713,
                'fileName' => 'temp_DB1943FF-B0E6-BA94-3970-6EECBF996D2B_Romney-Bong.jpg',
                'title' => 'Romney Bong',
                'slug' => 'romney-bong-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:15',
                'updated_at' => '2019-01-23 08:56:15',
            ),
            213 => 
            array (
                'id' => 714,
                'fileName' => 'temp_97127752-D059-F79D-F502-8F39D3172F63_Bebo.jpg',
                'title' => 'Bebo',
                'slug' => 'bebo-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:16',
                'updated_at' => '2019-01-23 08:56:16',
            ),
            214 => 
            array (
                'id' => 715,
                'fileName' => 'temp_05BC302C-14A3-42B2-06E3-E0B45E128F6E_Felix-Baumgartner-Lulz.jpg',
                'title' => 'Felix Baumgartner Lulz',
                'slug' => 'felix-baumgartner-lulz-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:17',
                'updated_at' => '2019-01-23 08:56:17',
            ),
            215 => 
            array (
                'id' => 716,
                'fileName' => 'temp_839AE43C-BDB6-3961-7371-0264861BF419_Grumpy-Cat-Top-Hat.jpg',
                'title' => 'Grumpy Cat Top Hat',
                'slug' => 'grumpy-cat-top-hat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:18',
                'updated_at' => '2019-01-23 08:56:18',
            ),
            216 => 
            array (
                'id' => 717,
                'fileName' => 'temp_B8CDB732-A712-5403-4E27-48ED3245355D_Manning-Broncos.jpg',
                'title' => 'Manning Broncos',
                'slug' => 'manning-broncos-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:18',
                'updated_at' => '2019-01-23 08:56:18',
            ),
            217 => 
            array (
                'id' => 718,
                'fileName' => 'temp_1F30E842-5F6D-9293-31C6-7FC14DBABD83_Casper.jpg',
                'title' => 'Casper',
                'slug' => 'casper-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:19',
                'updated_at' => '2019-01-23 08:56:19',
            ),
            218 => 
            array (
                'id' => 719,
                'fileName' => 'temp_77748AC8-7174-7E46-5C6E-191A3DE62F97_Portuguese.jpg',
                'title' => 'Portuguese',
                'slug' => 'portuguese-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:20',
                'updated_at' => '2019-01-23 08:56:20',
            ),
            219 => 
            array (
                'id' => 720,
                'fileName' => 'temp_199FA38C-AC93-FACF-7599-EF7ED41E5D15_Derpina.jpg',
                'title' => 'Derpina',
                'slug' => 'derpina-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:20',
                'updated_at' => '2019-01-23 08:56:20',
            ),
            220 => 
            array (
                'id' => 721,
                'fileName' => 'temp_59B5DC85-5AA3-2842-B2D0-0E8CBABEA136_Muschamp.jpg',
                'title' => 'Muschamp',
                'slug' => 'muschamp-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:21',
                'updated_at' => '2019-01-23 08:56:21',
            ),
            221 => 
            array (
                'id' => 722,
                'fileName' => 'temp_99FBD5FB-197E-463C-9615-EC8F27718084_Advice-Peeta.jpg',
                'title' => 'Advice Peeta',
                'slug' => 'advice-peeta-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:22',
                'updated_at' => '2019-01-23 08:56:22',
            ),
            222 => 
            array (
                'id' => 723,
                'fileName' => 'temp_51A807D9-82E9-C100-8065-C1F46931D8F4_Bad-Advice-Cat.jpg',
                'title' => 'Bad Advice Cat',
                'slug' => 'bad-advice-cat-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:23',
                'updated_at' => '2019-01-23 08:56:23',
            ),
            223 => 
            array (
                'id' => 724,
                'fileName' => 'temp_70CCDFBB-D0F4-B9A4-D91A-EA0430E94EA6_Religious-Couple.jpg',
                'title' => 'Religious Couple',
                'slug' => 'religious-couple-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:23',
                'updated_at' => '2019-01-23 08:56:23',
            ),
            224 => 
            array (
                'id' => 725,
                'fileName' => 'temp_5F5584F4-F27D-5D98-0B59-79262483CF21_Determined-Guy-Rage-Face.jpg',
                'title' => 'Determined Guy Rage Face',
                'slug' => 'determined-guy-rage-face-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:24',
                'updated_at' => '2019-01-23 08:56:24',
            ),
            225 => 
            array (
                'id' => 726,
                'fileName' => 'temp_97BCBF47-3247-2D41-C446-F682EDE546D0_Grumpy-Cat-Halloween.jpg',
                'title' => 'Grumpy Cat Halloween',
                'slug' => 'grumpy-cat-halloween-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:25',
                'updated_at' => '2019-01-23 08:56:25',
            ),
            226 => 
            array (
                'id' => 727,
                'fileName' => 'temp_47C00F38-F83B-6991-0B36-E568E510C6D2_Perturbed-Portman.jpg',
                'title' => 'Perturbed Portman',
                'slug' => 'perturbed-portman-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:26',
                'updated_at' => '2019-01-23 08:56:26',
            ),
            227 => 
            array (
                'id' => 728,
                'fileName' => 'temp_AD6C263E-5EDC-035C-5B23-8AB2DFD91A8F_Scumbag-Daylight-Savings-Time.jpg',
                'title' => 'Scumbag Daylight Savings Time',
                'slug' => 'scumbag-daylight-savings-time-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:26',
                'updated_at' => '2019-01-23 08:56:26',
            ),
            228 => 
            array (
                'id' => 729,
                'fileName' => 'temp_FF52EA06-D3D7-9191-8F86-9642ABCEA77F_Hypocritical-Islam-Terrorist.jpg',
                'title' => 'Hypocritical Islam Terrorist',
                'slug' => 'hypocritical-islam-terrorist-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:27',
                'updated_at' => '2019-01-23 08:56:27',
            ),
            229 => 
            array (
                'id' => 730,
                'fileName' => 'temp_7559C89F-69D1-5A5D-9B96-5CAE399D3811_Gladys-Falcon.jpg',
                'title' => 'Gladys Falcon',
                'slug' => 'gladys-falcon-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:29',
                'updated_at' => '2019-01-23 08:56:29',
            ),
            230 => 
            array (
                'id' => 731,
                'fileName' => 'temp_C2478462-B034-47DE-D427-9DF6D8D9FC97_Pink-Escalade.jpg',
                'title' => 'Pink Escalade',
                'slug' => 'pink-escalade-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:30',
                'updated_at' => '2019-01-23 08:56:30',
            ),
            231 => 
            array (
                'id' => 732,
                'fileName' => 'temp_55A68C29-7892-E1A1-20C6-C0186A8C2043_Shutup-Batty-Boy.jpg',
                'title' => 'Shutup Batty Boy',
                'slug' => 'shutup-batty-boy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:31',
                'updated_at' => '2019-01-23 08:56:31',
            ),
            232 => 
            array (
                'id' => 733,
                'fileName' => 'temp_7B7F8E51-489E-763A-8222-8136F44B6C53_Oh-My-God-Orange.jpg',
                'title' => 'Oh My God Orange',
                'slug' => 'oh-my-god-orange-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:32',
                'updated_at' => '2019-01-23 08:56:32',
            ),
            233 => 
            array (
                'id' => 734,
                'fileName' => 'temp_E6632D99-E7D9-B04C-1E06-C472B33E8E89_Mamimoe.jpg',
                'title' => 'Mamimoe',
                'slug' => 'mamimoe-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:33',
                'updated_at' => '2019-01-23 08:56:33',
            ),
            234 => 
            array (
                'id' => 735,
                'fileName' => 'temp_57EDD6E9-5C0D-3E91-2A1F-6441CE4071B5_Surprised-CatMan.jpg',
                'title' => 'Surprised CatMan',
                'slug' => 'surprised-catman-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:33',
                'updated_at' => '2019-01-23 08:56:33',
            ),
            235 => 
            array (
                'id' => 736,
                'fileName' => 'temp_6335931B-AC38-1F03-7C1E-B7495BAAE711_Grumpy-Cat-Mistletoe.jpg',
                'title' => 'Grumpy Cat Mistletoe',
                'slug' => 'grumpy-cat-mistletoe-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:34',
                'updated_at' => '2019-01-23 08:56:34',
            ),
            236 => 
            array (
                'id' => 737,
                'fileName' => 'temp_676FD423-5BEC-5BAA-9158-FC826889384A_Scumbag-Redditor.jpg',
                'title' => 'Scumbag Redditor',
                'slug' => 'scumbag-redditor-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:35',
                'updated_at' => '2019-01-23 08:56:35',
            ),
            237 => 
            array (
                'id' => 738,
                'fileName' => 'temp_C7A10A8C-94B4-787D-C0BB-9679A526C9EB_Brian-Wilson-Vs-ZZ-Top.jpg',
                'title' => 'Brian Wilson Vs ZZ Top',
                'slug' => 'brian-wilson-vs-zz-top-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:36',
                'updated_at' => '2019-01-23 08:56:36',
            ),
            238 => 
            array (
                'id' => 739,
                'fileName' => 'temp_E65AA4AA-F199-9247-2786-7ADCE4A23B99_Empty-Red-And-Black.jpg',
                'title' => 'Empty Red And Black',
                'slug' => 'empty-red-and-black-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:37',
                'updated_at' => '2019-01-23 08:56:37',
            ),
            239 => 
            array (
                'id' => 740,
                'fileName' => 'temp_E6FCA3AD-0FC4-0D25-A4B1-C691C634589E_Herm-Edwards.jpg',
                'title' => 'Herm Edwards',
                'slug' => 'herm-edwards-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:38',
                'updated_at' => '2019-01-23 08:56:38',
            ),
            240 => 
            array (
                'id' => 741,
                'fileName' => 'temp_F8F739EF-9914-E16F-C52B-964218283F93_Nilo.jpg',
                'title' => 'Nilo',
                'slug' => 'nilo-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:39',
                'updated_at' => '2019-01-23 08:56:39',
            ),
            241 => 
            array (
                'id' => 742,
                'fileName' => 'temp_E52D30EC-3341-AA5F-4BD8-DBDCFD36209A_Beyonce-Knowles-Superbowl-Face.jpg',
                'title' => 'Beyonce Knowles Superbowl Face',
                'slug' => 'beyonce-knowles-superbowl-face-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:40',
                'updated_at' => '2019-01-23 08:56:40',
            ),
            242 => 
            array (
                'id' => 743,
                'fileName' => 'temp_9EF00186-2FFD-C825-2925-7FBD8E45D9E1_Yakuza.jpg',
                'title' => 'Yakuza',
                'slug' => 'yakuza-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:41',
                'updated_at' => '2019-01-23 08:56:41',
            ),
            243 => 
            array (
                'id' => 744,
                'fileName' => 'temp_004291A6-1FB6-E644-7C58-5015FC9C9F97_Im-Curious-Nappa.jpg',
                'title' => 'Im Curious Nappa',
                'slug' => 'im-curious-nappa-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:41',
                'updated_at' => '2019-01-23 08:56:41',
            ),
            244 => 
            array (
                'id' => 745,
                'fileName' => 'temp_CE204DCC-706A-B0C9-93B3-DC49CE557C20_Crazy-Girlfriend-Praying-Mantis.jpg',
                'title' => 'Crazy Girlfriend Praying Mantis',
                'slug' => 'crazy-girlfriend-praying-mantis-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:42',
                'updated_at' => '2019-01-23 08:56:42',
            ),
            245 => 
            array (
                'id' => 746,
                'fileName' => 'temp_3B1F21A4-F0D8-AA11-0E53-8CF9B71F484E_Baron-Creater.jpg',
                'title' => 'Baron Creater',
                'slug' => 'baron-creater-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:43',
                'updated_at' => '2019-01-23 08:56:43',
            ),
            246 => 
            array (
                'id' => 747,
                'fileName' => 'temp_E5ACA69F-5C6F-E9F9-E6CD-FF0C6897BE5E_Gaga-Baby.jpg',
                'title' => 'Gaga Baby',
                'slug' => 'gaga-baby-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:44',
                'updated_at' => '2019-01-23 08:56:44',
            ),
            247 => 
            array (
                'id' => 748,
                'fileName' => 'temp_0776D16D-5329-3F58-43BB-E1CB6D76565A_Im-Fabulous-Adam.jpg',
                'title' => 'Im Fabulous Adam',
                'slug' => 'im-fabulous-adam-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:45',
                'updated_at' => '2019-01-23 08:56:45',
            ),
            248 => 
            array (
                'id' => 749,
                'fileName' => 'temp_80522890-BF24-7253-21C8-377A25974D9B_Hora-Extra.jpg',
                'title' => 'Hora Extra',
                'slug' => 'hora-extra-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:45',
                'updated_at' => '2019-01-23 08:56:45',
            ),
            249 => 
            array (
                'id' => 750,
                'fileName' => 'temp_69EBD3AB-57F4-BF98-C3D1-D370E620EBDD_Oku-Manami.jpg',
                'title' => 'Oku Manami',
                'slug' => 'oku-manami-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:47',
                'updated_at' => '2019-01-23 08:56:47',
            ),
            250 => 
            array (
                'id' => 751,
                'fileName' => 'temp_614979F0-7B0C-3C44-1DF0-5828FE8434E2_Barack-And-Kumar-2013.jpg',
                'title' => 'Barack And Kumar 2013',
                'slug' => 'barack-and-kumar-2013-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:49',
                'updated_at' => '2019-01-23 08:56:49',
            ),
            251 => 
            array (
                'id' => 752,
                'fileName' => 'temp_B7097787-BDA9-9CE4-0AE6-53DF01D1AFA5_Gangster-Baby.jpg',
                'title' => 'Gangster Baby',
                'slug' => 'gangster-baby-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:49',
                'updated_at' => '2019-01-23 08:56:49',
            ),
            252 => 
            array (
                'id' => 753,
                'fileName' => 'temp_E4499828-8152-E505-26BA-6B47D5534642_Optimistic-Niall.jpg',
                'title' => 'Optimistic Niall',
                'slug' => 'optimistic-niall-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:51',
                'updated_at' => '2019-01-23 08:56:51',
            ),
            253 => 
            array (
                'id' => 754,
                'fileName' => 'temp_BC534D56-3C8A-96AE-CC3B-74A9EE2E9804_Spacey-Casey.jpg',
                'title' => 'Spacey Casey',
                'slug' => 'spacey-casey-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:52',
                'updated_at' => '2019-01-23 08:56:52',
            ),
            254 => 
            array (
                'id' => 755,
                'fileName' => 'temp_B58F64C7-BF64-61C5-C1C0-D9CB1833DE69_Speechless-Colbert-Face.jpg',
                'title' => 'Speechless Colbert Face',
                'slug' => 'speechless-colbert-face-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:53',
                'updated_at' => '2019-01-23 08:56:53',
            ),
            255 => 
            array (
                'id' => 756,
                'fileName' => 'temp_2920C823-FEB3-81BD-5B11-397E4B5FD364_Hot-Caleb.jpg',
                'title' => 'Hot Caleb',
                'slug' => 'hot-caleb-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:54',
                'updated_at' => '2019-01-23 08:56:54',
            ),
            256 => 
            array (
                'id' => 757,
                'fileName' => 'temp_E610A3ED-BEC5-1035-26E9-77F3BDF3A8EA_Baromney.jpg',
                'title' => 'Baromney',
                'slug' => 'baromney-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:55',
                'updated_at' => '2019-01-23 08:56:55',
            ),
            257 => 
            array (
                'id' => 758,
                'fileName' => 'temp_A6CDA056-BF51-9460-8180-E80181B00FDF_Wrong-Number-Rita.jpg',
                'title' => 'Wrong Number Rita',
                'slug' => 'wrong-number-rita-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:56',
                'updated_at' => '2019-01-23 08:56:56',
            ),
            258 => 
            array (
                'id' => 759,
                'fileName' => 'temp_AC1F0338-50D9-76D6-FC58-F8553B84F99B_Jim-Lehrer-The-Man.jpg',
                'title' => 'Jim Lehrer The Man',
                'slug' => 'jim-lehrer-the-man-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:57',
                'updated_at' => '2019-01-23 08:56:57',
            ),
            259 => 
            array (
                'id' => 760,
                'fileName' => 'temp_D3CF1B6F-D5B7-5FAB-3E93-4EF78BEA18EE_Gangnam-Style.jpg',
                'title' => 'Gangnam Style',
                'slug' => 'gangnam-style-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:58',
                'updated_at' => '2019-01-23 08:56:58',
            ),
            260 => 
            array (
                'id' => 761,
                'fileName' => 'temp_1F586018-5877-276F-BC9A-57980C10239F_You-Dont-Want-No-Part-Of-This.jpg',
                'title' => 'You Dont Want No Part Of This',
                'slug' => 'you-dont-want-no-part-of-this-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:56:59',
                'updated_at' => '2019-01-23 08:56:59',
            ),
            261 => 
            array (
                'id' => 762,
                'fileName' => 'temp_BA62E468-BB3B-504B-4BEA-92CA01A5D740_Tomas-Rosicky.jpg',
                'title' => 'Tomas Rosicky',
                'slug' => 'tomas-rosicky-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:00',
                'updated_at' => '2019-01-23 08:57:00',
            ),
            262 => 
            array (
                'id' => 763,
                'fileName' => 'temp_89D5D343-C09E-140C-5E30-A5CA62B34949_Chief-Keef.jpg',
                'title' => 'Chief Keef',
                'slug' => 'chief-keef-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:01',
                'updated_at' => '2019-01-23 08:57:01',
            ),
            263 => 
            array (
                'id' => 764,
                'fileName' => 'temp_E9E33759-2EF5-C8D0-1799-EE2CF1580164_Mad-Moxxi.jpg',
                'title' => 'Mad Moxxi',
                'slug' => 'mad-moxxi-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:02',
                'updated_at' => '2019-01-23 08:57:02',
            ),
            264 => 
            array (
                'id' => 765,
                'fileName' => 'temp_165B9C28-0EAA-E3FC-417D-33EDC14DE945_Are-Your-Parents-Brother-And-Sister.jpg',
                'title' => 'Are Your Parents Brother And Sister',
                'slug' => 'are-your-parents-brother-and-sister-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:02',
                'updated_at' => '2019-01-23 08:57:02',
            ),
            265 => 
            array (
                'id' => 766,
                'fileName' => 'temp_AAF13E34-1A6C-0E8D-16B4-F9FD1CAE060F_Folean-Dynamite.jpg',
                'title' => 'Folean Dynamite',
                'slug' => 'folean-dynamite-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:04',
                'updated_at' => '2019-01-23 08:57:04',
            ),
            266 => 
            array (
                'id' => 767,
                'fileName' => 'temp_6C9AADD0-E1B1-91BE-2936-B2011CDF357A_Sarcastic-Anthony.jpg',
                'title' => 'Sarcastic Anthony',
                'slug' => 'sarcastic-anthony-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:04',
                'updated_at' => '2019-01-23 08:57:04',
            ),
            267 => 
            array (
                'id' => 768,
                'fileName' => 'temp_6AF775EB-9878-00C7-21BA-B022A8AC0797_Contradictory-Chris.jpg',
                'title' => 'Contradictory Chris',
                'slug' => 'contradictory-chris-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:05',
                'updated_at' => '2019-01-23 08:57:05',
            ),
            268 => 
            array (
                'id' => 769,
                'fileName' => 'temp_3FFC19B3-9E4A-1BCA-D4AD-5F1891271CF2_Papa-Fking-John.jpg',
                'title' => 'Papa Fking John',
                'slug' => 'papa-fking-john-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:06',
                'updated_at' => '2019-01-23 08:57:06',
            ),
            269 => 
            array (
                'id' => 770,
                'fileName' => 'temp_3A617845-5211-97B0-C377-52BD38D59A66_BM-Employees.jpg',
                'title' => 'BM Employees',
                'slug' => 'bm-employees-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:07',
                'updated_at' => '2019-01-23 08:57:07',
            ),
            270 => 
            array (
                'id' => 771,
                'fileName' => 'temp_CCA518D6-516A-BBDA-93D7-3B19F002F1EC_Happy-Minaj-2.jpg',
                'title' => 'Happy Minaj 2',
                'slug' => 'happy-minaj-2-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:07',
                'updated_at' => '2019-01-23 08:57:07',
            ),
            271 => 
            array (
                'id' => 772,
                'fileName' => 'temp_4A3107DB-25A4-1F91-0079-34CC44398E57_I-Forsee.jpg',
                'title' => 'I Forsee',
                'slug' => 'i-forsee-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:08',
                'updated_at' => '2019-01-23 08:57:08',
            ),
            272 => 
            array (
                'id' => 773,
                'fileName' => 'temp_9E503EA2-F5AE-1DB1-9E1D-11FDCDDF1A8B_House-Bunny.jpg',
                'title' => 'House Bunny',
                'slug' => 'house-bunny-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:09',
                'updated_at' => '2019-01-23 08:57:09',
            ),
            273 => 
            array (
                'id' => 774,
                'fileName' => 'temp_4E100635-7FC2-DFB1-4FEC-74D42593F1C4_John-Riley-Condescension.jpg',
                'title' => 'John Riley Condescension',
                'slug' => 'john-riley-condescension-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:10',
                'updated_at' => '2019-01-23 08:57:10',
            ),
            274 => 
            array (
                'id' => 775,
                'fileName' => 'temp_579E2936-241B-271B-524D-E1F81DA66FA9_Justin-Bieber-Suit.jpg',
                'title' => 'Justin Bieber Suit',
                'slug' => 'justin-bieber-suit-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:11',
                'updated_at' => '2019-01-23 08:57:11',
            ),
            275 => 
            array (
                'id' => 776,
                'fileName' => 'temp_ACC7AA39-2ACA-BD56-0189-E1D503C3C765_Hysterical-Tom.jpg',
                'title' => 'Hysterical Tom',
                'slug' => 'hysterical-tom-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:12',
                'updated_at' => '2019-01-23 08:57:12',
            ),
            276 => 
            array (
                'id' => 777,
                'fileName' => 'temp_921D0099-1751-DF79-FF99-1C4EE82C3F5B_Fernando-Litre.jpg',
                'title' => 'Fernando Litre',
                'slug' => 'fernando-litre-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:12',
                'updated_at' => '2019-01-23 08:57:12',
            ),
            277 => 
            array (
                'id' => 778,
                'fileName' => 'temp_B116DCC1-0742-1179-2B3C-198A83274101_Modern-Warfare-3.jpg',
                'title' => 'Modern Warfare 3',
                'slug' => 'modern-warfare-3-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:13',
                'updated_at' => '2019-01-23 08:57:13',
            ),
            278 => 
            array (
                'id' => 779,
                'fileName' => 'temp_85097876-1AA9-A102-FBE6-E0BB4D416365_Fini.jpg',
                'title' => 'Fini',
                'slug' => 'fini-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:14',
                'updated_at' => '2019-01-23 08:57:14',
            ),
            279 => 
            array (
                'id' => 780,
                'fileName' => 'temp_1FACC0CC-B0EB-AF26-5151-9B99EF12210E_Brian-Burke-On-The-Phone.jpg',
                'title' => 'Brian Burke On The Phone',
                'slug' => 'brian-burke-on-the-phone-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:15',
                'updated_at' => '2019-01-23 08:57:15',
            ),
            280 => 
            array (
                'id' => 781,
                'fileName' => 'temp_7AA50E51-C822-81FD-B8CA-CE78C212BD55_Big-Family-Comeback.jpg',
                'title' => 'Big Family Comeback',
                'slug' => 'big-family-comeback-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:16',
                'updated_at' => '2019-01-23 08:57:16',
            ),
            281 => 
            array (
                'id' => 782,
                'fileName' => 'temp_13808A35-4FF6-6369-6A8B-90E8E6653913_Nabilah-Jkt48.jpg',
                'title' => 'Nabilah Jkt48',
                'slug' => 'nabilah-jkt48-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:17',
                'updated_at' => '2019-01-23 08:57:17',
            ),
            282 => 
            array (
                'id' => 783,
                'fileName' => 'temp_07E359A4-899B-3BEF-7CCC-9FFAE01F0C3D_Misunderstood-Mitch.jpg',
                'title' => 'Misunderstood Mitch',
                'slug' => 'misunderstood-mitch-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:17',
                'updated_at' => '2019-01-23 08:57:17',
            ),
            283 => 
            array (
                'id' => 784,
                'fileName' => 'temp_697C211D-CDFB-EDE3-A73D-837840B829B9_Helpful-Tyler-Durden.jpg',
                'title' => 'Helpful Tyler Durden',
                'slug' => 'helpful-tyler-durden-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:18',
                'updated_at' => '2019-01-23 08:57:18',
            ),
            284 => 
            array (
                'id' => 785,
                'fileName' => 'temp_B1243EBC-805F-0B61-70AF-5002A1A2E6C5_Mayu-Watanabe.jpg',
                'title' => 'Mayu Watanabe',
                'slug' => 'mayu-watanabe-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:19',
                'updated_at' => '2019-01-23 08:57:19',
            ),
            285 => 
            array (
                'id' => 786,
                'fileName' => 'temp_9417E977-A093-B6DD-E8EB-8AFF72905ECD_Asshole-Ref.jpg',
                'title' => 'Asshole Ref',
                'slug' => 'asshole-ref-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:19',
                'updated_at' => '2019-01-23 08:57:19',
            ),
            286 => 
            array (
                'id' => 787,
                'fileName' => 'temp_0BCD3AB8-2098-30A3-EEA5-DACBF1FD7A0E_Legal-Bill-Murray.jpg',
                'title' => 'Legal Bill Murray',
                'slug' => 'legal-bill-murray-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:20',
                'updated_at' => '2019-01-23 08:57:20',
            ),
            287 => 
            array (
                'id' => 788,
                'fileName' => 'temp_BA6E17A9-D4C4-1CA5-B7A3-869C8A4B7D58_Nakagawa-Haruka.jpg',
                'title' => 'Nakagawa Haruka',
                'slug' => 'nakagawa-haruka-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:21',
                'updated_at' => '2019-01-23 08:57:21',
            ),
            288 => 
            array (
                'id' => 789,
                'fileName' => 'temp_F187630E-6FF8-6B50-3D12-78A8E8687254_Superior-Wadsworth.jpg',
                'title' => 'Superior Wadsworth',
                'slug' => 'superior-wadsworth-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:22',
                'updated_at' => '2019-01-23 08:57:22',
            ),
            289 => 
            array (
                'id' => 790,
                'fileName' => 'temp_ACBEF752-08FD-00FE-A850-03E13B183C7C_Rocket-Raccoon.jpg',
                'title' => 'Rocket Raccoon',
                'slug' => 'rocket-raccoon-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:23',
                'updated_at' => '2019-01-23 08:57:23',
            ),
            290 => 
            array (
                'id' => 791,
                'fileName' => 'temp_397B78CB-A31C-4A78-FF71-032B926D43A6_Richard-Benson.jpg',
                'title' => 'Richard Benson',
                'slug' => 'richard-benson-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:23',
                'updated_at' => '2019-01-23 08:57:23',
            ),
            291 => 
            array (
                'id' => 792,
                'fileName' => 'temp_48577E64-3267-FBD0-2CCE-C5FDBAE2B4F7_Do-I-Care-Doe.jpg',
                'title' => 'Do I Care Doe',
                'slug' => 'do-i-care-doe-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:24',
                'updated_at' => '2019-01-23 08:57:24',
            ),
            292 => 
            array (
                'id' => 793,
                'fileName' => 'temp_25CA38F2-4AC7-3F12-ED15-EC54D5189520_Hotline-Miami-Richard.jpg',
                'title' => 'Hotline Miami Richard',
                'slug' => 'hotline-miami-richard-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:26',
                'updated_at' => '2019-01-23 08:57:26',
            ),
            293 => 
            array (
                'id' => 794,
                'fileName' => 'temp_ED85E7E8-ABB0-1E67-26F3-27914E6816C5_Confused-Cam.jpg',
                'title' => 'Confused Cam',
                'slug' => 'confused-cam-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:26',
                'updated_at' => '2019-01-23 08:57:26',
            ),
            294 => 
            array (
                'id' => 795,
                'fileName' => 'temp_51AE78C1-ACBB-D8D6-086B-E0BFD6400BEE_Flavor-Flav.jpg',
                'title' => 'Flavor Flav',
                'slug' => 'flavor-flav-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:27',
                'updated_at' => '2019-01-23 08:57:27',
            ),
            295 => 
            array (
                'id' => 796,
                'fileName' => 'temp_93C4A35E-9CF5-FF69-CC1C-D8747D6BEF71_Barba.jpg',
                'title' => 'Barba',
                'slug' => 'barba-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:28',
                'updated_at' => '2019-01-23 08:57:28',
            ),
            296 => 
            array (
                'id' => 797,
                'fileName' => 'temp_5103A01C-D800-F1A2-DD02-08682409D4F2_Grumpy-Cats-Father.jpg',
                'title' => 'Grumpy Cats Father',
                'slug' => 'grumpy-cats-father-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:29',
                'updated_at' => '2019-01-23 08:57:29',
            ),
            297 => 
            array (
                'id' => 798,
                'fileName' => 'temp_EAA9F6BE-72E2-83FC-7F74-55780E08A428_Joe-Biden.jpg',
                'title' => 'Joe Biden',
                'slug' => 'joe-biden-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:30',
                'updated_at' => '2019-01-23 08:57:30',
            ),
            298 => 
            array (
                'id' => 799,
                'fileName' => 'temp_A716D881-91AC-98CA-2818-E2E0A6DE8C41_Paul-Ryan.jpg',
                'title' => 'Paul Ryan',
                'slug' => 'paul-ryan-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:30',
                'updated_at' => '2019-01-23 08:57:30',
            ),
            299 => 
            array (
                'id' => 800,
                'fileName' => 'temp_6314D7A3-7560-537E-366A-938369B1E29D_Viking-Dudes.jpg',
                'title' => 'Viking Dudes',
                'slug' => 'viking-dudes-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:31',
                'updated_at' => '2019-01-23 08:57:31',
            ),
            300 => 
            array (
                'id' => 801,
                'fileName' => 'temp_565267DB-7E21-8C92-376E-6CFF625EF055_Patrick-Henry.jpg',
                'title' => 'Patrick Henry',
                'slug' => 'patrick-henry-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:32',
                'updated_at' => '2019-01-23 08:57:32',
            ),
            301 => 
            array (
                'id' => 802,
                'fileName' => 'temp_27DEC1C5-C3B0-EF59-B7C8-544DC1879414_Bad-Luck-Hannah.jpg',
                'title' => 'Bad Luck Hannah',
                'slug' => 'bad-luck-hannah-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:32',
                'updated_at' => '2019-01-23 08:57:32',
            ),
            302 => 
            array (
                'id' => 803,
                'fileName' => 'temp_43C0F986-7AB9-8ED4-3D64-784A40F8F7D7_Dr-Crane.jpg',
                'title' => 'Dr Crane',
                'slug' => 'dr-crane-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:33',
                'updated_at' => '2019-01-23 08:57:33',
            ),
            303 => 
            array (
                'id' => 804,
                'fileName' => 'temp_96C2E4E4-BEAB-7079-639D-3BC8AFF88848_Family-Tech-Support-Guy.jpg',
                'title' => 'Family Tech Support Guy',
                'slug' => 'family-tech-support-guy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:34',
                'updated_at' => '2019-01-23 08:57:34',
            ),
            304 => 
            array (
                'id' => 805,
                'fileName' => 'temp_D869AAF1-02EF-3F53-F941-95F3AF559E59_Tough-Guy-Wanna-Be.jpg',
                'title' => 'Tough Guy Wanna Be',
                'slug' => 'tough-guy-wanna-be-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:35',
                'updated_at' => '2019-01-23 08:57:35',
            ),
            305 => 
            array (
                'id' => 806,
                'fileName' => 'temp_EB1DA544-B850-38C3-25B2-09B4E5E65488_Brian-Williams-Was-There-3.jpg',
                'title' => 'Brian Williams Was There 3',
                'slug' => 'brian-williams-was-there-3-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:36',
                'updated_at' => '2019-01-23 08:57:36',
            ),
            306 => 
            array (
                'id' => 807,
                'fileName' => 'temp_7C4F5247-5CAE-AE37-778B-EFF00E3DDB8A_Skeptical-Swardson.jpg',
                'title' => 'Skeptical Swardson',
                'slug' => 'skeptical-swardson-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:36',
                'updated_at' => '2019-01-23 08:57:36',
            ),
            307 => 
            array (
                'id' => 808,
                'fileName' => 'temp_3F53F631-5CD4-5872-845B-4AB3D51F2948_BANE-AND-BRUCE.jpg',
                'title' => 'BANE AND BRUCE',
                'slug' => 'bane-and-bruce-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:37',
                'updated_at' => '2019-01-23 08:57:37',
            ),
            308 => 
            array (
                'id' => 809,
                'fileName' => 'temp_87573BCB-7E15-ECB3-E9D7-AFA36D68872B_Selfish-Ozzy.jpg',
                'title' => 'Selfish Ozzy',
                'slug' => 'selfish-ozzy-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:38',
                'updated_at' => '2019-01-23 08:57:38',
            ),
            309 => 
            array (
                'id' => 810,
                'fileName' => 'temp_9E989A54-B064-1F9A-9A4C-1A75BA8F5CF8_Vali-Corleone.jpg',
                'title' => 'Vali Corleone',
                'slug' => 'vali-corleone-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:39',
                'updated_at' => '2019-01-23 08:57:39',
            ),
            310 => 
            array (
                'id' => 811,
                'fileName' => 'temp_66C49A5D-4E47-87EB-2BD9-BB793ED84262_Samuel-L-Jackson.jpg',
                'title' => 'Samuel L Jackson',
                'slug' => 'samuel-l-jackson-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:40',
                'updated_at' => '2019-01-23 08:57:40',
            ),
            311 => 
            array (
                'id' => 812,
                'fileName' => 'temp_484B6F20-2DF9-9D12-2A24-A9134B0F6E9F_Harper-WEF.jpg',
                'title' => 'Harper WEF',
                'slug' => 'harper-wef-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:41',
                'updated_at' => '2019-01-23 08:57:41',
            ),
            312 => 
            array (
                'id' => 813,
                'fileName' => 'temp_5A6656D5-8B1D-8935-1D94-A7A3C2871E22_Packers.jpg',
                'title' => 'Packers',
                'slug' => 'packers-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:42',
                'updated_at' => '2019-01-23 08:57:42',
            ),
            313 => 
            array (
                'id' => 814,
                'fileName' => 'temp_A750E0AA-88EE-93C9-966F-A1FE444E66B8_I-Am-Not-A-Gator-Im-A-X.jpg',
                'title' => 'I Am Not A Gator Im A X',
                'slug' => 'i-am-not-a-gator-im-a-x-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:42',
                'updated_at' => '2019-01-23 08:57:42',
            ),
            314 => 
            array (
                'id' => 815,
                'fileName' => 'temp_8A995E1F-DB2E-6345-CFB4-A8FF3D07B91E_Molly-Weasley.jpg',
                'title' => 'Molly Weasley',
                'slug' => 'molly-weasley-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:43',
                'updated_at' => '2019-01-23 08:57:43',
            ),
            315 => 
            array (
                'id' => 816,
                'fileName' => 'temp_371ABEAE-696F-9FFA-E886-ECFC235397C3_Joo-Espontneo.jpg',
                'title' => 'Joo Espontneo',
                'slug' => 'joo-espontneo-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:44',
                'updated_at' => '2019-01-23 08:57:44',
            ),
            316 => 
            array (
                'id' => 817,
                'fileName' => 'temp_8C3462EA-6CA7-0417-6D30-642B406CB22A_Billy-Graham-Mitt-Romney.jpg',
                'title' => 'Billy Graham Mitt Romney',
                'slug' => 'billy-graham-mitt-romney-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:45',
                'updated_at' => '2019-01-23 08:57:45',
            ),
            317 => 
            array (
                'id' => 818,
                'fileName' => 'temp_F71181E4-B7B8-2295-598F-DE9DC6A85567_Torreshit.jpg',
                'title' => 'Torreshit',
                'slug' => 'torreshit-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:46',
                'updated_at' => '2019-01-23 08:57:46',
            ),
            318 => 
            array (
                'id' => 819,
                'fileName' => 'temp_61EA0C91-DC15-2B23-F987-2CFE981C595F_Felix-Baumgartner.jpg',
                'title' => 'Felix Baumgartner',
                'slug' => 'felix-baumgartner-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:47',
                'updated_at' => '2019-01-23 08:57:47',
            ),
            319 => 
            array (
                'id' => 820,
                'fileName' => 'temp_CCF6FFCD-C512-2504-430A-EAB13773E4C0_Good-Guy-Socially-Awkward-Penguin.jpg',
                'title' => 'Good Guy Socially Awkward Penguin',
                'slug' => 'good-guy-socially-awkward-penguin-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:47',
                'updated_at' => '2019-01-23 08:57:47',
            ),
            320 => 
            array (
                'id' => 821,
                'fileName' => 'temp_A5C008EA-C0A9-4D34-A549-9F0CA55C07AB_Proper-Lady.jpg',
                'title' => 'Proper Lady',
                'slug' => 'proper-lady-meme',
                'isActive' => 1,
                'created_at' => '2019-01-23 08:57:48',
                'updated_at' => '2019-01-23 08:57:48',
            ),
        ));
        
        
    }
}