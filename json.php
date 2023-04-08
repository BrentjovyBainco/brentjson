<?php
    header('Access-Control-Allow-Origin: *');

    $knifes = [
        [   
            "img" => "stone.jpg",
            "name" => "Stone Age",
            "description" => "a prehistoric stone tool having one end pointed for cutting and the other end rounded for holding in the hand.",
            "type" => "Hand axes",
            "countries" => ["England","Egypt","Europe","Northern France"]
        ],
         [   
            "img" => "bronze.jpg",
            "name" => "Bronze Age",
            "description" => "a sharp-pointed instrument with barbs used in spearing fish.",
            "type" => "Spears",
            "countries" => ["Japan","Roman Empire","Vietnam","America"]
        ],
         [   
            "img" => "iron.jpg",
            "name" => "Iron Age",
            "description" => "Normally sickles are sharp on the inside . This implement is called a sickle because it has a curved blade though it may not in antiquity have functioned as a typical reaping implement.",
            "type" => "Iron sickles",
            "countries" => ["Spain","China","Middle East","Poland"]
        ],
         [   
            "img" => "middle.jpg",
            "name" => "Middle Age",
            "description" => "A rondel dagger or roundel dagger was a type of stiff-bladed dagger in Europe in the late Middle Ages (from the 14th century onwards), used by a variety of people from merchants to knights.",
            "type" => "Rondel dagger",
            "countries" => ["Russian","Indian","Arabian","Afghan"]
        ],
         [   
            "img" => "modern.jpg",
            "name" => "Modern Age",
            "description" => "The serrated blades of bread knives are able to cut soft bread without crushing it.",
            "type" => "Bread knife",
            "countries" => ["United States","Columbia","New York","Germany"]
        ],
        

    ];

    $data = json_encode($knifes);
    echo $data;
    
?>