<?php

header('Content-Type: application/json');


$students = [

    '1SB23CS001' => [
        'name' => 'A C NAMRUTHAH',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS002' => [
        'name' => 'ABHISHEK',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS003' => [
        'name' => 'ABHISHEK',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS004' => [
        'name' => 'ADARSH MALLAKAPPA MANDALI',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS005' => [
        'name' => 'AKASH',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20']
            ],
            '2' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ]
        ]
    ],
    '1SB23CS006' => [
        'name' => 'AKSHATA NAGAPPA SHAMBEWAD',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS007' => [
        'name' => 'AMITHA SHRI G S',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS008' => [
        'name' => 'AMUTHA V',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS009' => [
        'name' => 'ANANYA R MELAGIRI',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS010' => [
        'name' => 'ANKITHA. M',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS011' => [
        'name' => 'ANUSH KANABARGI',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS012' => [
        'name' => 'ANUSHA S',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS013' => [
        'name' => 'ANUSHREE',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS014' => [
        'name' => 'ARUN N P',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS015' => [
        'name' => 'ASHUTOSH KUMAR JHA',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS016' => [
        'name' => 'BALAJI K',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS017' => [
        'name' => 'BBASAVARAJ K KUMBAR',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS018' => [
        'name' => 'BASAVARAJA G',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS019' => [
        'name' => 'BASIREDDY TARUN KUMAR REDDY',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS020' => [
        'name' => 'BHAGYASHREE',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS021' => [
        'name' => 'BHARGAVI L',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS022' => [
        'name' => 'DEVESH V',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS023' => [
        'name' => 'DEVIPRABA N',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS024' => [
        'name' => 'DHARSHAN D',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS025' => [
        'name' => 'DILIP M',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS026' => [
        'name' => 'DIVYADARSHINI M',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS027' => [
        'name' => 'ESHWARI B C',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS028' => [
        'name' => 'ESHWARI G',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS029' => [
        'name' => 'G SUMA G',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS030' => [
        'name' => 'GAGAN KUMAR M G',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS031' => [
        'name' => 'GOWTHAM M',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS032' => [
        'name' => 'GOWTHAMI K M',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS033' => [
        'name' => 'HARI PRASAD N',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS034' => [
        'name' => 'HARINEE DEVI V',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS035' => [
        'name' => 'HARIOM YADAV',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS036' => [
        'name' => 'HIRANMAI V',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS037' => [
        'name' => 'HRITHIK S',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS038' => [
        'name' => 'ISHWARYA R',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS039' => [
        'name' => 'JANANI M',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS040' => [
        'name' => 'JYOTHI M',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS041' => [
        'name' => 'KAGGALAKATTI SHASHIKUMAR',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS042' => [
        'name' => 'KALLURI BHANU PRASAD REDDY',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS043' => [
        'name' => 'KAVIYA M',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS044' => [
        'name' => 'KISHOR K',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS045' => [
        'name' => 'KISHOR KUMAR S',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => [],
            '2' => []
        ]
    ],
    '1SB23CS046' => [
        'name' => 'KONANAHALLI SHIVAKUMARGOWDA',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS047' => [
        'name' => 'KUSUMA R',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS048' => [
        'name' => 'LAKSHNA PRIYA G',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS049' => [
        'name' => 'MALLIKARJUN',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS050' => [
        'name' => 'MANASA V',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS051' => [
        'name' => 'MANJUNATH',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS052' => [
        'name' => 'MAYUR DEVUR',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS053' => [
        'name' => 'MD EHTHESHAM AAMIR',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS054' => [
        'name' => 'MIDHULA SREE J',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS055' => [
        'name' => 'MOHAMED WAAJID K',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS056' => [
        'name' => 'MOHAMMED SUFIYAN',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS057' => [
        'name' => 'NEELA SAHEBAGOUDA RARADDI',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS058' => [
        'name' => 'NIDHARSHAN J',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS059' => [
        'name' => 'NIHAR PATEL G',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS060' => [
        'name' => 'NIKHIL K MAITI',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ],
    '1SB23CS061' => [
        'name' => 'NIKITA',
        'semesters' => [
            '4' => [
                ['code' => 'BCS401', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS402', 'name' => 'MICROCONTROLLERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS403', 'name' => 'DATABASE MANAGEMENT SYSTEMS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL404', 'name' => 'ANALYSIS & DESIGN OF ALGORITHMS LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BBOC407', 'name' => 'BIOLOGY FOR COMPUTER ENGINEERS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BUHK408', 'name' => 'UNIVERSAL HUMAN VALUES COURSE', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-27'],
                ['code' => 'BNSK333', 'name' => 'SPORTS', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCS405A', 'name' => 'DISCRETE MATHEMATICAL STRUCTURES', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
                ['code' => 'BCSL456D', 'name' => 'TECHNICAL WRITING USING LATEX LAB', 'internal' => 10, 'external' => 30, 'total' => 40, 'result' => 'P', 'date' => '2024-09-20'],
            ],
            '3' => []
        ]
    ]
];



$captcha_valid = isset($_POST['captchacode']) && $_POST['captchacode'] === '123456';


$usn = isset($_POST['usn']) ? strtoupper(trim($_POST['usn'])) : '';


if (array_key_exists($usn, $students)) {

    $response = [
        'success' => true,
        'data' => $students[$usn] 
    ];
} else {

    $response = [
        'success' => false,
        'message' => 'Student USN not found.'
    ];
}

echo json_encode($response);
?>