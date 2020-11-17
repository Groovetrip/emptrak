<?php

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(Employee::class, 50)->create();

        DB::insert(DB::raw('
            INSERT INTO `employees` (`first_name`, `last_name`, `middle_initial`, `address`, `address2`, `city`, `state`, `zip`, `classification`, `payment_method`, `salary`, `hourly_rate`, `commission_rate`, `routing_number`, `account_number`, `created_at`, `updated_at`)
            VALUES
            ("Karina", "Gay", NULL, "998 Vitae St.", NULL, "Atlanta", "GA", "45169", "' . Employee::HOURLY . '", "' . Employee::DIRECT_DEPOSIT . '", "45884.99", "46.92", "34", "30417353-K", "465794-3611", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("TaShya", "Snow", "D", "2624 Hendrerit St.", NULL, "College", "AK", "99789", "' . Employee::SALARIED . '", "' . Employee::MAIL . '", "50005.50", "68.13", "25", "36644938-8", "244269-0000", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Rooney", "Alvarado", NULL, "4963 Nisl. St.", "185", "Gillette", "WY", "20226", "' . Employee::COMMISSIONED . '", "' . Employee::MAIL . '", "34532.37", "21.53", "24", "37324307-8", "422046-0739", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Jolene", "Burgess", NULL, "P.O. Box 873", NULL, "South Burlington", "VT", "32036", "' . Employee::SALARIED . '", "' . Employee::MAIL . '", "20042.77", "40.17", "23", "15300058-1", "828625-2906", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Yoko", "Pitts", "M", "4825 Nec Ave", NULL, "Meridian", "ID", "45614", "' . Employee::HOURLY . '", "' . Employee::DIRECT_DEPOSIT . '", "35251.89", "46.64", "13", "44553589-3", "785957-2104", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Jin", "Morrison", "W", "8628 Id St.", NULL, "Milwaukee", "WI", "80356", "' . Employee::COMMISSIONED . '", "' . Employee::DIRECT_DEPOSIT . '", "64467.10", "82.98", "33", "21038669-6", "654904-8491", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Sopoline", "Bullock", NULL, "4963 Nisl. St.", "579", "Idaho Falls", "ID", "65094", "' . Employee::HOURLY . '", "' . Employee::MAIL . '", "81929.49", "42.76", "16", "46979340-0", "485847-0083", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Bruce", "Raymond", "A", "65009 Iaculis Road", NULL, "Juneau", "AK", "99719", "' . Employee::HOURLY . '", "' . Employee::MAIL . '", "37697.26", "17.33", "22", "28504011-6", "397558-4404", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Hanae", "Dickson", NULL, "1633 Dolor Av.", NULL, "Dover", "DE", "61813", "' . Employee::HOURLY . '", "' . Employee::MAIL . '", "51018.46", "91.22", "35", "48786143-K", "295643-0090", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Jenna", "Strickland", "B", "70156 Rutrum Street", NULL, "Phoenix", "AZ", "86207", "' . Employee::HOURLY . '", "' . Employee::DIRECT_DEPOSIT . '", "57545.39", "24.70", "23", "33878326-4", "248847-6397", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Ruth", "Haley", "S", "6384 Risus Av.", "943", "Waterbury", "CT", "58012", "' . Employee::SALARIED . '", "' . Employee::DIRECT_DEPOSIT . '", "61050.17", "42.26", "24", "12046284-9", "399575-5166", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Beatrice", "Ware", "P", "8903 Eget Rd.", NULL, "Oklahoma City", "OK", "20552", "' . Employee::HOURLY . '", "' . Employee::DIRECT_DEPOSIT . '", "46342.01", "86.47", "17", "26387832-9", "212804-3003", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Randall", "Horton", NULL, "3834 Tortor Av.", NULL, "Topeka", "KS", "52541", "' . Employee::SALARIED . '", "' . Employee::MAIL . '", "40872.60", "57.05", "31", "13255163-4", "104934-8350", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Damian", "Garrison", NULL, "1646 In Street", NULL, "San Francisco", "CA", "95787", "' . Employee::SALARIED . '", "' . Employee::MAIL . '", "99571.55", "82.41", "19", "45550736-7", "779184-5410", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Alvin", "Guerrero", NULL, "248 Mauris St.", "748", "Indianapolis", "IN", "92237", "' . Employee::SALARIED . '", "' . Employee::MAIL . '", "56430.96", "38.42", "27", "16935557-6", "994966-8363", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Alexandra", "Duke", "Y", "P.O. Box 727", NULL, "Springfield", "MA", "50647", "' . Employee::SALARIED . '", "' . Employee::MAIL . '", "31631.98", "95.73", "13", "23609043-4", "538878-8548", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Sylvester", "Rowland", "J", "8628 Pede Ave", NULL, "Baltimore", "MD", "93306", "' . Employee::HOURLY . '", "' . Employee::DIRECT_DEPOSIT . '", "49570.97", "25.20", "32", "5363288-2", "339235-5453", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Porter", "Wolfe", NULL, "4842 Tincidunt Av.", NULL, "Miami", "FL", "44875", "' . Employee::HOURLY . '", "' . Employee::DIRECT_DEPOSIT . '", "41212.83", "87.54", "22", "16506147-0", "087434-1662", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Scott", "Shields", "T", "8402 Pretium Rd.", "163", "Grand Rapids", "MI", "26321", "' . Employee::HOURLY . '", "' . Employee::DIRECT_DEPOSIT . '", "86913.93", "83.43", "15", "21871936-8", "779622-5618", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Amir", "Mcintosh", NULL, "83493 Nibh. Ave", NULL, "West Jordan", "UT", "40532", "' . Employee::COMMISSIONED . '", "' . Employee::MAIL . '", "91254.76", "67.73", "27", "8752077-3", "866009-0500", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Grant", "Mccarthy", "X", "9846 Arcu. Road", NULL, "Ketchikan", "AK", "99634", "' . Employee::COMMISSIONED . '", "' . Employee::DIRECT_DEPOSIT . '", "36025.38", "79.99", "11", "7117844-7", "288413-2164", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Mira", "Wolf", "Y", "37224 Pharetra Ave", NULL, "Savannah", "GA", "22329", "' . Employee::HOURLY . '", "' . Employee::MAIL . '", "45576.80", "26.99", "34", "12666803-1", "158217-3462", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Brock", "Sandoval", NULL, "4882 Consectetuer Street", NULL, "Wyoming", "WY", "15840", "' . Employee::SALARIED . '", "' . Employee::DIRECT_DEPOSIT . '", "58436.75", "26.25", "32", "13977869-3", "906688-1963", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Kelsey", "Saunders", "K", "9920 Aliquam Av.", "128", "Salt Lake City", "UT", "97100", "' . Employee::HOURLY . '", "' . Employee::DIRECT_DEPOSIT . '", "42548.72", "31.24", "18", "37723944-K", "769125-4564", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
            ("Teagan", "Goodwin", NULL, "P.O. Box 317", NULL, "Akron", "OH", "66603", "' . Employee::COMMISSIONED . '", "' . Employee::MAIL . '", "69765.24", "84.73", "13", "24639186-6", "433898-4976", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
        '));
    }
}
