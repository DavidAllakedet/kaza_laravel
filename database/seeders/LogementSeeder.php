<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Logement;
use App\Models\Host;
use App\Models\Equipement;
use App\Models\Tag;
use App\Models\Picture;

class LogementSeeder extends Seeder
{
    public function run()
    {
        
        $hostData = [
            ['name' => 'Della Case"', 'picture' => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/profile-picture-1.jpg"],
            ['name' => 'Franck Maher', 'picture' => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/profile-picture-2.jpg"],
            ['name' => 'Line Rolland', 'picture' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/profile-picture-3.jpg'],
            ['name' => 'Hugo Perrier', 'picture' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/profile-picture-4.jpg'],
            ['name' => 'Sébastien Fournier', 'picture' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/profile-picture-5.jpg'],
            ['name' => 'Adrien Chiran', 'picture' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/profile-picture-6.jpg'],
            ['name' => 'Victor Moran', 'picture' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/profile-picture-7.jpg'],
            ['name' => 'Sarah Devit', 'picture' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/profile-picture-8.jpg'],
            ['name' => 'Karen Guillet', 'picture' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/profile-picture-9.jpg'],
            ['name' => 'Julie Donatella', 'picture' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/profile-picture-10.jpg'],
            ['name' => 'Hugo Perrier', 'picture' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/profile-picture-11.jpg'],
            ['name' => 'Nathalie Jean', 'picture' => 'https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/profile-picture-12.jpg'],
           
        ];

        

        $logements = [
            [
                "title" => "Appartement cosy",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-1.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-1.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-3.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-4.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-20-5.jpg"
                        ],
                "description" => "Votre maison loin de chez vous. Que vous veniez de l'autre bout du monde, ou juste de quelques stations de RER, vous vous sentirez chez vous dans notre appartement.",
               
                "rating" => "5",
                "location" => "Ile de France - Paris 17e",
                "equipements" => [
                        "Équipements de base",
                        "Micro-Ondes",
                        "Douche italienne",
                        "Frigo",
                        "WIFI"
                        ],
                "tags" => [
                    "Batignolle",
                    "Montmartre"
                    ]
            ],


            [
                "title" => "Magnifique appartement proche Canal Saint Martin",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-1.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-1.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-3.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-4.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-5.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-1-6.jpg"
                        ],
                "description" => "Profitez du charme de la vie parisienne dans un magnifique appartement. A 3 minutes à pied du Canl Saint Martin, vous serez proche des transports, mais également de nombreux commerces. L'appartement est tout équipé, et possède également un parking pour ceux qui souhaitent se déplacer en voiture.",
                
                "rating" => "4",
                "location" => "Ile de France - Paris 10e",
                "equipements" => [
                        "Parking",
                        "Sèche Cheveux",
                        "Machine à laver",
                        "Wi-fi",
                        "Cuisine équipée",
                        "Télévision"
                        ],
                "tags" => [
                        "Canal Saint Martin",
                        "République",
                        "Appartement"
                        ]
            ],
            [
                "title" => "Studio de charme - Buttes Chaumont",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-2-1.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-2-1.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-2-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-2-3.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-2-4.jpg"
                        ],
                "description" => "À seulement deux pas des Buttes Chaumont, venez découvrir Paris dans ce studio tout équipé. Entièrement équipé pour votre confort et élégamment décoré, il vous permettra de vivre comme un Parisien le temps de votre séjour.",
                
                "rating" => "3",
                "location" => "Ile de France - Paris 20e",
                "equipements" => [
                        "Wi-fi",
                        "Cuisine équipée",
                        "Télévision",
                        "Sèche Cheveux"
                        ],
                "tags" => [
                        "Buttes Chaumont",
                        "Laumière",
                        "Studio"
                        ],
            ],

            [
                "title" => "Nid douillet au coeur du 11ème",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-3-1.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-3-1.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-3-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-3-3.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-3-4.jpg"
                        ],
                "description" => "Venez découvrir Paris en séjournant dans ce nid douillet au coeur du 11ème. La vue sur le parc résidentiel saura vous reposer de vos longues journées de tourisme dans la capitale française. Et pour les plus fêtards d'entre vous, la rue Jean Pierre Timbaud vous permettra de découvrir la night-life parisienne à seulement 5 minutes de l'appartement.",
               
                "rating" => "3",
                "location" => "Ile de France - Paris 11e",
                "equipements" => [
                        "Micro-Ondes",
                        "Wi-fi",
                        "Chambre Séparée",
                        "Climatisation",
                        "Télévision"
                        ],
                "tags" => [
                        "Parmentier",
                        "Marais",
                        "Parc",
                        "Night Life"
                        ]
            ],

            [
                "title" => "Appartement de Standing - 10e",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-4-1.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-4-1.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-4-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-4-3.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-4-4.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-4-5.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-4-6.jpg"
                        ],
                "description" => "Ce loft entièrement rénové, et équipé de meubles de luxe saura vous séduire. Idéalement situé dans le 10ème arrondissement, vous déplacer dans Paris sera un véritable jeu d'enfant.",
               
                "rating" => "5",
                "location" => "Ile de France - Paris 10e",
                "equipements" => [
                        "Frigo Américain",
                        "Sèche Cheveux",
                        "Wi-fi",
                        "Chambre Séparée",
                        "Parking"
                        ],
                "tags" => [
                        "Goncourt",
                        "Proche commerces"
                        ]
            ],

            [
                "title" => "Studio d'artiste",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-5-1.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-5-1.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-5-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-5-3.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-5-4.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-5-5.jpg"
                        ],
                "description" => "Venez vous imprégner de la culture parisienne dans cet ancien studio d'artiste décoré avec goût, au coeur de Montmartre.",
                
                "rating" => "5",
                "location" => "Ile de France - Paris 18e",
                "equipements" => [
                        "Chambre Séparée",
                        "Parking"
                        ],
                "tags" => [
                        "Montmartre",
                        "Culture",
                        "Charme"
                        ]
            ],

            [
                "title" => "Cheap - Studio 18ème",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-6-1.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-6-1.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-6-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-6-3.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-6-4.jpg"
                        ],
                "description" => "Ce Studio entièrement fonctionnel sera votre parfait pied à terre pour toutes vos excursions parisiennes. Idéalement situé près des lignes 2 et 4, vous accéderez très rapidement à tous les points touristiques de Paris.",
               
                "rating" => "3",
                "location" => "Ile de France - Paris 18e",
                "equipements" => [
                        "Salle de bains",
                        "Frigo",
                        "Wi-fi",
                        "Sèche Cheveux",
                        "Bureau",
                        "Parking"
                        ],
                "tags" => [
                        "Transports",
                        "Cheap",
                        "18ème"
                        ]
            ],

            [
                "title" => "Superbe appartement proche Tour Eiffel",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-7-1.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-7-1.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-7-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-7-3.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-7-4.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-7-5.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-7-6.jpg"
                        ],
                "description" => "Ce superbe appartement vous surprendra par son charme. Entièrement refait à neuf, il est équipé avec goût. La taille des pièces vous fera douter que vous êtes à Paris. Mais il vous suffit de sortir pour voir que vous êtes au coeur des plus belles attractions de Paris : le Louvre, la Tour Eiffel, le Grand Palais sont à deux pas. À vous de venir découvrir Paris !",
                
                "rating" => "5",
                "location" => "Ile de France - Paris 6e",
                "equipements" => [
                        "Wi-fi",
                        "Sèche Cheveux",
                        "Machine à laver",
                        "Parking",
                        "Lit King Size",
                        "Ascenseur"
                        ],
                "tags" => [
                        "Luxe",
                        "Tour Eiffel",
                        "T3",
                        "6ème"
                        ]
            ],

            [
                "title" => "Suite familiale",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-8-1.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-8-1.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-8-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-8-3.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-8-4.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-8-5.jpg"
                        ],
                "description" => "Paris vous tend les bras ! En famille ou entre amis, venez découvrir la ville de l'amour dans un appartement de goût. Vous pourrez profiter de tous les commerces seulement à quelques minutes de l'appartement. Sa proximité avec la gare Montparnasse en fait également un choix idéal pour celles et ceux qui doivent prendre un train.",
               
                "rating" => "4",
                "location" => "Ile de France - Paris 14e",
                "equipements" => [
                        "Climatisation",
                        "Machine à laver",
                        "Sèche Cheveux",
                        "Wi-fi",
                        "Parking"
                        ],
                "tags" => [
                        "Montparnasse",
                        "Commerces",
                        "Famille"
                        ]
            ],

            [
                "title" => "Appartement moderne sur parc",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-9-1.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-9-1.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-9-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-9-3.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-9-4.jpg"
                        ],
                "description" => "Respirer en plein coeur de Paris ? C'est possible ! Avec vue sur un parc résidentiel, vous pourrez ouvrir les fenêtres sans avoir à souffrir du bruit des voitures et de la pollution. Au contraire, vous pourrez écouter les oiseaux. Notre appartement est également idéalement situé au coeur du 11ème arrondissement. Proche des lignes 3 et 2, vous pourrez découvrir Paris sans effort !",
                
                "rating" => "3",
                "location" => "Ile de France - Paris 11e",
                "equipements" => [
                        "Vue Parc",
                        "Chauffage",
                        "Sèche linge",
                        "Sèche Cheveux",
                        "Wi-fi",
                        "Ascenseur"
                        ],
                "tags" => [
                        "Père Lachaise",
                        "11e",
                        "Metro 3",
                        "Metro 2"
                        ]
            ],

            [
                "title" => "Charmant Studio Marais",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-10-1.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-10-1.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-10-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-10-3.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-10-4.jpg"
                        ],
                "description" => "Situé en plein coeur du Marais, notre studio est idéal pour les touristes en quête de découverte. Sa cuisine toute équipée est particulièrement pratique.",
                
                "rating" => "4",
                "location" => "Ile de France - Paris 11e",
                "equipements" => [
                        "Clic-clac",
                        "Four",
                        "Sèche Cheveux",
                        "Wi-fi"
                        ],
                "tags" => [
                        "Marais",
                        "Studio",
                        "Parc"
                        ]
            ],

            [
                "title" => "Studio fonctionnel République",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-11-3.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-11-3.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-11-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-11-4.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-11-5.jpg"
                        ],
                "description" => "Idéalement situé à 2 pas de la place de la République, ce studio particulièrement fonctionnel est parfait pour découvrir Paris. Proche de tous les points d'intérêts grâce aux 5 lignes de métro qui sont à 5 minutes, vous pourrez rentabiliser votre temps passé à la capitale.",
                
                "rating" => "3",
                "location" => "Ile de France - Paris 3e",
                "equipements" => [
                        "Rangements",
                        "Lit",
                        "Sèche Cheveux",
                        "Wi-fi",
                        "TV",
                        "Bouilloire"
                        ],
                "tags" => [
                        "Marais",
                        "République",
                        "Studio",
                        "Proche Métros",
                        "Commerces"
                        ]
            ],

            [
                "title" => "Bungalow dans la forêt",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-12-1.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-12-1.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-12-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-12-3.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-12-4.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-12-5.jpg"
                        ],
                "description" => "Quittez Paris pour vous mettre au vert. À seulement 30 minutes de la Gare du Nord, venez découvrir la forêt d'Ecouen directement depuis la fenêtre de votre bungalow. Entièrement équipé, ce logement saura vous accueillir dans le confort, tout en vous permettant de vous concentrer sur l'essentiel. Le matin, ouvrez les fenêtres, et profitez du chant des oiseaux.",

                "rating" => "5",
                "location" => "Ile de France - Ecouen",
                "equipements" => [
                        "SDB",
                        "Cuisine équipée",
                        "Toilettes sèches",
                        "Frigo",
                        "Bouilloire"
                        ],
                "tags" => [
                        "Forêt",
                        "Nature",
                        "Musée d'Ecouen"
                        ]
            ],
            [
                "title" => "Grande Maison proche banlieue",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-13-2.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-13-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-13-3.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-13-4.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-13-5.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-13-6.jpg"
                        ],
                "description" => "Vous chercher un endroit pour fêter un anniversaire entre amis tout en restant proche de Paris ? Ne cherchez plus ! Entièrement équipée, cette maison est l'endroit idéal pour se regrouper.",
                
                "rating" => "4",
                "location" => "Ile de France - Arnouville",
                "equipements" => [
                        "SDB",
                        "Cuisine équipée",
                        "Frigo",
                        "Bouilloire",
                        "WIFI",
                        "Télévision",
                        "Cintres",
                        "Équipements de base"
                        ],
                "tags" => [
                        "Forêt",
                        "Nature",
                        "Grande maison"
                        ]
            ],

            [
                "title" => "Maison T5 - Le Vésinet",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-14-1.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-14-1.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-14-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-14-3.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-14-4.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-14-5.jpg"
                        ],
                "description" => "Maison T5. Idéale pour grands groupes. 45 minutes de Paris Saint-Lazare.",
               
                "rating" => "3",
                "location" => "Ile de France - Arnouville",
                "equipements" => [
                        "Bouilloire",
                        "SDB",
                        "Cuisine équipée",
                        "Frigo",
                        "WIFI",
                        "TV",
                        "Cintres",
                        "Four",
                        "Micro-Ondes",
                        "Parking"
                        ],
                "tags" => [
                        "Nature",
                        "Groupe",
                        "Maison"
                        ]
            ],

            [
                "title" => "Loft de Luxe à la Défense",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-15-1.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-15-1.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-15-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-15-3.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-15-4.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-15-5.jpg"
                        ],
                "description" => "Si vous êtes à la recherche de l'endroit idéal pour poser vos valises entre deux rdvs d'affaire, ne cherchez plus. Notre loft est l'endroit idéal. En plein coeur de la Défense, il dispose également de tous les équipements pour que vous soyez comme chez vous.",
               
                "rating" => "3",
                "location" => "Ile de France - La Défense",
                "equipements" => [
                        "Baie vitrée",
                        "Télévision",
                        "Four",
                        "Frigo",
                        "Wi-fi",
                        "Micro-Ondes",
                        "Parking"
                        ],
                "tags" => [
                        "La Défense",
                        "Loft",
                        "Luxe"
                        ]
            ],

            [
                "title" => "Charmant apt aux portes de Paris",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-16-1.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-16-1.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-16-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-16-3.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-16-4.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-16-5.jpg"
                        ],
                "description" => "Ce charmant appartement offre des prestations de luxe, aux portes de Paris. À deux pas de la ligne 3, vous pourrez accéder à toutes les attractions touristiques dont vous avez toujours rêvées.",
               
                "rating" => "4",
                "location" => "Ile de France - Levallois",
                "equipements" => [
                        "Télévision",
                        "Four",
                        "Frigo",
                        "Hotte",
                        "Wi-fi",
                        "Micro-Ondes"
                        ],
                "tags" => [
                        "Vue Parc",
                        "Apt de Charme"
                        ]
            ],

            [
                "title" => "Cheap - Chambre Paris 20",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-17-1.jpg",
                "pictures" => [
                "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-17-1.jpg"
                ],
                "description" => "Cette chambre dispose de toutes les facilités nécessaires. Proche métro et commerces.",
                
                "rating" => "2",
                "location" => "Ile de France - Paris 20e",
                "equipements" => [
                        "Bouilloire",
                        "Wi-fi",
                        "Micro-Ondes"
                        ],
                "tags" => [
                        "Vue Parc",
                        "Métros"
                        ]
            ],

            [
                "title" => "Charmant studio",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-18-1.jpg",
                "pictures" => [
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-18-1.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-18-2.jpg",
                        "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-18-3.jpg"
                        ],
                "description" => "Ce studio décoré avec goût sera votre nid douillet après une longue journée passée à découvrir Paris.",
                
                "rating" => "4",
                "location" => "Ile de France - Paris 13e",
                "equipements" => [
                        "Équipements de base",
                        "Four",
                        "Frigo",
                        "Wi-fi",
                        "Micro-Ondes"
                        ],
                "tags" => [
                        "Studio",
                        "Charmant",
                        "13e"
                        ]
            ],
                
            [
                "title" => "Magnifique appartement Rivoli",
                "cover" => "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-19-1.jpg",
                "pictures" => [
                "https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/front-end-kasa-project/accommodation-19-1.jpg"
                ],
                "description" => "Au coeur du quartier historique du Marais, cet appartement est idéal pour un couple à la découverte de Paris. Situé sur la rue de Rivoli, il est à 5 minutes du Louvre.",
               
                "rating" => "4",
                "location" => "Ile de France - Paris 13e",
                "equipements" => [
                        "Wi-fi",
                        "Équipements de base",
                        "Micro-Ondes",
                        "Frigo",
                        "Baignoire"
                        ],
                "tags" => [
                        "Louvre",
                        "Marais",
                        "Rivoli"
                        ]
            ],

            
        ];

        $limitedLogements = array_slice($logements, 0, 20); // Limite à 20 logements

        // Créez les hôtes
        $hosts = [];
        foreach ($hostData as $data) {
            $hosts[] = Host::create($data);
        }

        // Tableau pour compter le nombre de logements par hôte
        $hostLogementCount = array_fill(0, count($hosts), 0);

        // Assignez les logements aux hôtes
        foreach ($limitedLogements as $logementData) {
            $assigned = false;

            while (!$assigned) {
                $randomIndex = array_rand($hosts);
                if ($hostLogementCount[$randomIndex] < 2) {
                    $hostLogementCount[$randomIndex]++;
                    $host = $hosts[$randomIndex];

                    $logement = Logement::create([
                        'title' => $logementData['title'],
                        'description' => $logementData['description'],
                        'location' => $logementData['location'],
                        'rating' => $logementData['rating'],
                        'cover' => $logementData['cover'],
                        'host_id' => $host->id,
                    ]);

                    foreach ($logementData['equipements'] as $equipementName) {
                        $equipement = Equipement::firstOrCreate(['name' => $equipementName]);
                        $logement->equipements()->attach($equipement->id);
                    }

                    foreach ($logementData['tags'] as $tagName) {
                        $tag = Tag::firstOrCreate(['name' => $tagName]);
                        $logement->tags()->attach($tag->id);
                    }

                    $logement->pictures()->createMany(array_map(function ($url) {
                        return ['url' => $url];
                    }, $logementData['pictures']));

                    $assigned = true;
                }
            }
        }
    }
}